<?php
/**
 * Security Hardening for WordPress
 *
 * @package aston
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Remove WordPress version from RSS feeds
 */
add_filter('the_generator', '__return_empty_string');

/**
 * Hide WordPress version in scripts and styles
 */
function aston_remove_version_scripts_styles($src) {
    if (strpos($src, 'ver=')) {
        $src = remove_query_arg('ver', $src);
    }
    return $src;
}
add_filter('style_loader_src', 'aston_remove_version_scripts_styles', 9999);
add_filter('script_loader_src', 'aston_remove_version_scripts_styles', 9999);

/**
 * Disable XML-RPC
 */
add_filter('xmlrpc_enabled', '__return_false');

/**
 * Remove X-Pingback header
 */
add_filter('wp_headers', function($headers) {
    unset($headers['X-Pingback']);
    return $headers;
});

/**
 * Disable file editor in admin
 */
if (!defined('DISALLOW_FILE_EDIT')) {
    define('DISALLOW_FILE_EDIT', true);
}

/**
 * Block suspicious query strings
 */
function aston_block_bad_queries() {
    $query_string = $_SERVER['QUERY_STRING'] ?? '';
    
    // Suspicious patterns
    $bad_patterns = array(
        'eval\(', 'base64_', 'gzinflate', 'preg_replace', 'str_rot13',
        '\.\.\/', '\.\.\%2F', 'mosConfig', 'path=', 'mod=', 'GLOBALS',
        '_REQUEST', '_GET', '_POST', 'allow_url_include', 'auto_prepend_file',
        'disable_functions', 'safe_mode', 'open_basedir', 'execute', 'concat',
        'union.*select', 'select.*from', 'insert.*into', 'delete.*from',
        'drop.*table', '<script', 'javascript:', 'onerror=', 'onload='
    );
    
    foreach ($bad_patterns as $pattern) {
        if (preg_match('/' . $pattern . '/i', $query_string)) {
            header('HTTP/1.1 403 Forbidden');
            exit('Forbidden');
        }
    }
}
add_action('init', 'aston_block_bad_queries', 1);

/**
 * Disable user enumeration
 */
function aston_disable_user_enumeration() {
    if (!is_admin() && isset($_SERVER['REQUEST_URI'])) {
        if (preg_match('/(wp-json\/wp\/v2\/users|author=\d+)/i', $_SERVER['REQUEST_URI'])) {
            wp_die('Forbidden', 'Forbidden', array('response' => 403));
        }
    }
}
add_action('init', 'aston_disable_user_enumeration');

/**
 * Add security headers
 */
function aston_add_security_headers() {
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: SAMEORIGIN');
    header('X-XSS-Protection: 1; mode=block');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    header('Permissions-Policy: geolocation=(), microphone=(), camera=()');
}
add_action('send_headers', 'aston_add_security_headers');

/**
 * Remove sensitive information from error messages
 */
add_filter('login_errors', function() {
    return 'ログイン情報が正しくありません。';
});

/**
 * Disable theme and plugin editor
 */
add_action('admin_init', function() {
    remove_submenu_page('themes.php', 'theme-editor.php');
    remove_submenu_page('plugins.php', 'plugin-editor.php');
});

/**
 * Limit login attempts (basic implementation)
 */
function aston_check_login_attempts() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $transient_name = 'login_attempts_' . md5($ip);
    $attempts = get_transient($transient_name);
    
    if ($attempts && $attempts >= 5) {
        $wait_time = 900; // 15 minutes
        wp_die(
            'ログイン試行回数が上限に達しました。15分後に再度お試しください。',
            'アクセス拒否',
            array('response' => 429)
        );
    }
}
add_action('wp_login_failed', function() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $transient_name = 'login_attempts_' . md5($ip);
    $attempts = get_transient($transient_name) ?: 0;
    set_transient($transient_name, $attempts + 1, 900); // 15 minutes
});
add_action('wp_authenticate', 'aston_check_login_attempts', 1);

/**
 * Clear login attempts on successful login
 */
add_action('wp_login', function() {
    $ip = $_SERVER['REMOTE_ADDR'];
    $transient_name = 'login_attempts_' . md5($ip);
    delete_transient($transient_name);
}, 10, 2);

/**
 * Disable directory browsing
 */
function aston_disable_directory_browsing() {
    $htaccess_file = ABSPATH . '.htaccess';
    if (file_exists($htaccess_file) && is_writable($htaccess_file)) {
        $content = file_get_contents($htaccess_file);
        if (strpos($content, 'Options -Indexes') === false) {
            $security_rules = "\n# Disable directory browsing\nOptions -Indexes\n\n";
            file_put_contents($htaccess_file, $security_rules . $content);
        }
    }
}
add_action('admin_init', 'aston_disable_directory_browsing');

/**
 * Block access to sensitive files
 */
function aston_block_sensitive_files() {
    $request_uri = $_SERVER['REQUEST_URI'] ?? '';
    $blocked_files = array(
        'wp-config.php', 'readme.html', 'license.txt', 
        'debug.log', 'error_log', '.htaccess', '.env'
    );
    
    foreach ($blocked_files as $file) {
        if (strpos($request_uri, $file) !== false) {
            header('HTTP/1.1 403 Forbidden');
            exit('Forbidden');
        }
    }
}
add_action('init', 'aston_block_sensitive_files', 1);

/**
 * Sanitize file uploads
 */
add_filter('wp_handle_upload_prefilter', function($file) {
    // Block dangerous file types
    $dangerous_extensions = array('php', 'php3', 'php4', 'php5', 'phtml', 'exe', 'sh', 'bat');
    $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
    
    if (in_array(strtolower($ext), $dangerous_extensions)) {
        $file['error'] = 'このファイルタイプはセキュリティ上の理由によりアップロードできません。';
    }
    
    return $file;
});

/**
 * Log suspicious activities
 */
function aston_log_suspicious_activity($message) {
    $log_file = WP_CONTENT_DIR . '/security.log';
    $timestamp = date('Y-m-d H:i:s');
    $ip = $_SERVER['REMOTE_ADDR'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'] ?? 'Unknown';
    
    $log_message = sprintf(
        "[%s] IP: %s | UA: %s | %s\n",
        $timestamp,
        $ip,
        $user_agent,
        $message
    );
    
    error_log($log_message, 3, $log_file);
}

/**
 * Monitor failed login attempts
 */
add_action('wp_login_failed', function($username) {
    aston_log_suspicious_activity("Failed login attempt for user: $username");
});

/**
 * Disable pingbacks
 */
add_filter('xmlrpc_methods', function($methods) {
    unset($methods['pingback.ping']);
    return $methods;
});

/**
 * Remove Really Simple Discovery (RSD) link
 */
remove_action('wp_head', 'rsd_link');

/**
 * Remove Windows Live Writer manifest link
 */
remove_action('wp_head', 'wlwmanifest_link');

/**
 * Remove WordPress shortlink
 */
remove_action('wp_head', 'wp_shortlink_wp_head');

/**
 * Disable REST API user endpoints
 */
add_filter('rest_endpoints', function($endpoints) {
    if (isset($endpoints['/wp/v2/users'])) {
        unset($endpoints['/wp/v2/users']);
    }
    if (isset($endpoints['/wp/v2/users/(?P<id>[\d]+)'])) {
        unset($endpoints['/wp/v2/users/(?P<id>[\d]+)']);
    }
    return $endpoints;
});
