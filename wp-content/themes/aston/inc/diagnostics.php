<?php
/**
 * Theme Diagnostic Tool
 * URL: /wp-admin/admin.php?page=aston-diagnostics
 */

// Chỉ chạy khi được gọi từ admin
if (!defined('ABSPATH')) {
    exit;
}

// Thêm menu item
add_action('admin_menu', function() {
    add_theme_page(
        'Theme Diagnostics',
        '診断ツール',
        'manage_options',
        'aston-diagnostics',
        'aston_diagnostics_page'
    );
});

function aston_diagnostics_page() {
    if (!current_user_can('manage_options')) {
        wp_die('Permission denied');
    }
    ?>
    <div class="wrap">
        <h1>🔍 Astonテーマ - 診断ツール</h1>
        
        <div class="card" style="max-width: 100%; margin-top: 20px;">
            <h2> Templates & Pages</h2>
            <table class="widefat">
                <thead>
                    <tr>
                        <th>Template File</th>
                        <th>Status</th>
                        <th>Page Using It</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $templates = [
                        'page-company.php' => 'company',
                        'page-antiques.php' => 'antiques',
                    ];
                    
                    foreach ($templates as $template => $slug) {
                        $template_path = get_template_directory() . '/' . $template;
                        $exists = file_exists($template_path);
                        $page = get_page_by_path($slug);
                        ?>
                        <tr>
                            <td><code><?php echo esc_html($template); ?></code></td>
                            <td><?php echo $exists ? '✅ Exists' : '❌ Missing'; ?></td>
                            <td>
                                <?php if ($page): ?>
                                    ✅ <a href="<?php echo get_edit_post_link($page->ID); ?>">
                                        <?php echo esc_html($page->post_title); ?>
                                    </a>
                                    <?php
                                    $page_template = get_page_template_slug($page->ID);
                                    if ($page_template === $template) {
                                        echo ' <span style="color: green;">(Template: ✅)</span>';
                                    } else {
                                        echo ' <span style="color: red;">(Template: ' . ($page_template ?: 'default') . ')</span>';
                                    }
                                    ?>
                                <?php else: ?>
                                    ❌ Page not created
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="card" style="max-width: 100%; margin-top: 20px;">
            <h2>📂 Theme Files</h2>
            <table class="widefat">
                <tbody>
                    <?php
                    $required_files = [
                        'inc/page-setup.php',
                        'inc/customizer.php',
                        'inc/diagnostics.php',
                        'inc/class-wp-bootstrap-navwalker.php',
                    ];
                    
                    foreach ($required_files as $file) {
                        $full_path = get_template_directory() . '/' . $file;
                        $exists = file_exists($full_path);
                        ?>
                        <tr>
                            <td width="50%"><code><?php echo esc_html($file); ?></code></td>
                            <td>
                                <?php echo $exists ? '✅ Exists' : '❌ Missing'; ?>
                                <?php if ($exists): ?>
                                    <span class="description">(<?php echo size_format(filesize($full_path)); ?>)</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="card" style="max-width: 100%; margin-top: 20px;">
            <h2>🔧 Quick Actions</h2>
            <p>
                <a href="<?php echo admin_url('admin.php?page=aston-setup-pages'); ?>" class="button button-primary">
                    Open Page Setup
                </a>
                <a href="<?php echo admin_url('themes.php'); ?>" class="button">
                    Theme Settings
                </a>
            </p>
        </div>

        <div class="card" style="max-width: 100%; margin-top: 20px;">
            <h2>💻 System Info</h2>
            <table class="widefat">
                <tbody>
                    <tr>
                        <td width="30%"><strong>WordPress Version</strong></td>
                        <td><?php echo get_bloginfo('version'); ?></td>
                    </tr>
                    <tr>
                        <td><strong>PHP Version</strong></td>
                        <td><?php echo phpversion(); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Theme</strong></td>
                        <td><?php echo wp_get_theme()->get('Name') . ' v' . wp_get_theme()->get('Version'); ?></td>
                    </tr>
                    <tr>
                        <td><strong>Theme Directory</strong></td>
                        <td><code><?php echo get_template_directory(); ?></code></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
}
