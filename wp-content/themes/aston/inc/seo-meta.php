<?php
/**
 * SEO Meta Tags - Open Graph & Twitter Cards
 *
 * @package aston
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Add SEO meta tags to head
 */
function aston_add_seo_meta_tags() {
    // Get current page info
    $title = wp_get_document_title();
    $description = get_bloginfo('description');
    $url = get_permalink();
    $image = get_site_icon_url(512);
    $site_name = get_bloginfo('name');
    
    // Get specific content based on page type
    if (is_singular()) {
        global $post;
        
        // Check for custom meta description first (individual post)
        $custom_desc = get_post_meta($post->ID, '_aston_meta_description', true);
        if (!empty($custom_desc)) {
            $description = $custom_desc;
        } else {
            // Check for post type default meta description
            $post_type = get_post_type();
            $post_type_meta = get_option('aston_seo_' . $post_type . '_description', '');
            
            if (!empty($post_type_meta)) {
                $description = $post_type_meta;
            } else {
                // Get excerpt or content for description
                if (!empty($post->post_excerpt)) {
                    $description = wp_strip_all_tags($post->post_excerpt);
                } else {
                    $description = wp_trim_words(wp_strip_all_tags($post->post_content), 30, '...');
                }
            }
        }
        
        // Get featured image
        if (has_post_thumbnail()) {
            $image = get_the_post_thumbnail_url($post->ID, 'large');
        }
        
        $url = get_permalink($post->ID);
    } elseif (is_home() || is_front_page()) {
        $description = get_bloginfo('description');
        $url = home_url('/');
    } elseif (is_category()) {
        $description = category_description();
        $url = get_category_link(get_queried_object_id());
    } elseif (is_tag()) {
        $description = tag_description();
        $url = get_tag_link(get_queried_object_id());
    } elseif (is_archive()) {
        $description = get_the_archive_description();
        $url = get_post_type_archive_link(get_post_type());
    }
    
    // Clean description
    $description = wp_strip_all_tags($description);
    $description = str_replace(["\r", "\n", "\t"], ' ', $description);
    $description = trim(preg_replace('/\s+/', ' ', $description));
    
    // Limit description length
    if (strlen($description) > 160) {
        $description = substr($description, 0, 157) . '...';
    }
    
    // Output meta tags
    ?>
    <!-- SEO NoIndex -->
    <?php if (is_singular() && get_post_meta(get_the_ID(), '_aston_noindex', true)): ?>
    <meta name="robots" content="noindex,nofollow">
    <?php endif; ?>

    <!-- SEO Meta Description -->
    <meta name="description" content="<?php echo esc_attr($description); ?>">
    
    <!-- SEO Meta Keywords -->
    <?php 
    $keywords = '';
    if (is_singular()) {
        $keywords = get_post_meta(get_the_ID(), '_aston_meta_keywords', true);
    }
    if (!empty($keywords)): 
    ?>
    <meta name="keywords" content="<?php echo esc_attr($keywords); ?>">
    <?php endif; ?>
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo esc_attr($title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($description); ?>">
    <meta property="og:url" content="<?php echo esc_url($url); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>">
    <meta property="og:type" content="<?php echo is_singular('post') ? 'article' : 'website'; ?>">
    <?php if ($image): ?>
    <meta property="og:image" content="<?php echo esc_url($image); ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <?php endif; ?>
    <meta property="og:locale" content="ja_JP">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($description); ?>">
    <?php if ($image): ?>
    <meta name="twitter:image" content="<?php echo esc_url($image); ?>">
    <?php endif; ?>
    
    <?php if (is_singular('post')): ?>
    <!-- Article Meta Tags -->
    <meta property="article:published_time" content="<?php echo get_the_date('c'); ?>">
    <meta property="article:modified_time" content="<?php echo get_the_modified_date('c'); ?>">
    <meta property="article:author" content="<?php echo esc_attr(get_the_author()); ?>">
    <?php endif; ?>
    <?php
}
add_action('wp_head', 'aston_add_seo_meta_tags', 1);

/**
 * Add custom meta description field to pages and posts
 */
function aston_add_meta_description_box() {
    $post_types = [
        'post', 
        'page',
        'faqs',
        'jobs',
        'services',
    ];
    
    foreach ($post_types as $post_type) {
        add_meta_box(
            'aston_meta_description',
            'SEO Meta Description',
            'aston_meta_description_callback',
            $post_type,
            'normal',
            'high'
        );
    }
}
add_action('add_meta_boxes', 'aston_add_meta_description_box');

/**
 * Meta box callback
 */
function aston_meta_description_callback($post) {
    wp_nonce_field('aston_meta_description_nonce', 'aston_meta_description_nonce');
    $meta_description = get_post_meta($post->ID, '_aston_meta_description', true);
    $meta_keywords = get_post_meta($post->ID, '_aston_meta_keywords', true);
    $noindex = get_post_meta($post->ID, '_aston_noindex', true);
    ?>
    <table class="form-table">
        <tbody>
            <tr>
                <th scope="row"><label for="aston_meta_description"><?php _e('Meta Description', 'aston'); ?></label></th>
                <td>
                    <textarea name="aston_meta_description" id="aston_meta_description" rows="3" style="width:100%;" placeholder="<?php _e('SEO説明文を入力してください（最大160文字）', 'aston'); ?>"><?php echo esc_textarea($meta_description); ?></textarea>
                    <p class="description"><?php _e('この説明文はFacebook、Twitter、Googleで共有される際に表示されます。最大160文字まで入力できます。', 'aston'); ?></p>
                    <p class="description"><?php _e('文字数：', 'aston'); ?><strong id="meta-char-count">0</strong>/160</p>
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="aston_meta_keywords"><?php _e('Meta Keywords', 'aston'); ?></label></th>
                <td>
                    <input type="text" name="aston_meta_keywords" id="aston_meta_keywords" value="<?php echo esc_attr($meta_keywords); ?>" style="width:100%;" placeholder="<?php _e('キーワードをカンマ区切りで入力', 'aston'); ?>">
                    <p class="description"><?php _e('例: 買取, リサイクル, 静岡', 'aston'); ?></p>
                </td>
            </tr>
            <tr>
                <th scope="row"><label for="aston_noindex"><?php _e('検索エンジンにインデックスしない', 'aston'); ?></label></th>
                <td>
                    <input type="checkbox" id="aston_noindex" name="aston_noindex" value="1" <?php checked($noindex, '1'); ?>>
                    <label for="aston_noindex"><?php _e('このページを検索結果に表示しない', 'aston'); ?></label>
                </td>
            </tr>
        </tbody>
    </table>
    <script>
    jQuery(document).ready(function($) {
        var textarea = $('textarea[name="aston_meta_description"]');
        var counter = $('#meta-char-count');
        
        function updateCounter() {
            var length = textarea.val().length;
            counter.text(length);
            counter.css('color', length > 160 ? 'red' : 'green');
        }
        
        textarea.on('input', updateCounter);
        updateCounter();
    });
    </script>
    <?php
}

/**
 * Save meta description
 */
function aston_save_meta_description($post_id) {
    if (!isset($_POST['aston_meta_description_nonce'])) {
        return;
    }
    if (!wp_verify_nonce($_POST['aston_meta_description_nonce'], 'aston_meta_description_nonce')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    if (isset($_POST['aston_meta_description'])) {
        $description = sanitize_textarea_field($_POST['aston_meta_description']);
        update_post_meta($post_id, '_aston_meta_description', $description);
    }
    
    if (isset($_POST['aston_meta_keywords'])) {
        $keywords = sanitize_text_field($_POST['aston_meta_keywords']);
        update_post_meta($post_id, '_aston_meta_keywords', $keywords);
    }
    
    $noindex = isset($_POST['aston_noindex']) ? '1' : '';
    update_post_meta($post_id, '_aston_noindex', $noindex);
}
add_action('save_post', 'aston_save_meta_description');

/**
 * Add SEO Settings page to admin menu
 */
function aston_seo_settings_menu() {
    add_menu_page(
        'SEO設定',
        'SEO設定',
        'manage_options',
        'aston-seo-settings',
        'aston_seo_settings_page',
        'dashicons-search',
        30
    );
}
add_action('admin_menu', 'aston_seo_settings_menu');

/**
 * SEO Settings page content
 */
function aston_seo_settings_page() {
    // Save settings
    if (isset($_POST['aston_seo_settings_nonce']) && wp_verify_nonce($_POST['aston_seo_settings_nonce'], 'aston_seo_settings')) {
        $post_types = [
            'faqs' => 'よくある質問',
            'jobs' => '求人'
        ];
        
        foreach ($post_types as $post_type => $label) {
            if (isset($_POST['aston_seo_' . $post_type . '_description'])) {
                $description = sanitize_textarea_field($_POST['aston_seo_' . $post_type . '_description']);
                update_option('aston_seo_' . $post_type . '_description', $description);
            }
        }
        
        echo '<div class="notice notice-success"><p>設定を保存しました。</p></div>';
    }
    
    $post_types = [
        'faqs' => 'よくある質問',
        'jobs' => '求人'
    ];
    ?>
    <div class="wrap">
        <h1>SEO Meta Description 設定</h1>
        <p>各投稿タイプのデフォルトSEO説明文を設定します。個別投稿で設定されている場合はそちらが優先されます。</p>
        
        <form method="post" action="">
            <?php wp_nonce_field('aston_seo_settings', 'aston_seo_settings_nonce'); ?>
            
            <table class="form-table">
                <?php foreach ($post_types as $post_type => $label): 
                    $value = get_option('aston_seo_' . $post_type . '_description', '');
                ?>
                <tr>
                    <th scope="row">
                        <label for="aston_seo_<?php echo esc_attr($post_type); ?>_description">
                            <?php echo esc_html($label); ?>
                        </label>
                    </th>
                    <td>
                        <textarea 
                            name="aston_seo_<?php echo esc_attr($post_type); ?>_description" 
                            id="aston_seo_<?php echo esc_attr($post_type); ?>_description"
                            rows="3" 
                            class="large-text seo-description-field"
                            placeholder="<?php echo esc_attr($label); ?>のSEO説明文（最大160文字）"
                        ><?php echo esc_textarea($value); ?></textarea>
                        <p class="description">
                            文字数：<strong class="char-count">0</strong>/160
                        </p>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            
            <?php submit_button('設定を保存'); ?>
        </form>
        
        <style>
            .form-table th { width: 200px; }
            .char-count { font-weight: bold; }
            .char-count.over { color: red; }
            .char-count.ok { color: green; }
        </style>
        
        <script>
        jQuery(document).ready(function($) {
            $('.seo-description-field').each(function() {
                var textarea = $(this);
                var counter = textarea.closest('td').find('.char-count');
                
                function updateCounter() {
                    var length = textarea.val().length;
                    counter.text(length);
                    counter.removeClass('ok over');
                    counter.addClass(length > 160 ? 'over' : 'ok');
                }
                
                textarea.on('input', updateCounter);
                updateCounter();
            });
        });
        </script>
    </div>
    <?php
}
