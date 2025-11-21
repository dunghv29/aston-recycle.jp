<?php
/**
 * Admin Menu Organizer - Group Custom Post Types
 *
 * @package aston
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Change CPT menu positions and organize into groups
 */
function aston_organize_admin_menu() {
    global $menu, $submenu;
    
    // Remove separators for cleaner menu
    remove_menu_page('separator1');
    
    // Products group - parent menu
    add_menu_page(
        '商品管理',
        '商品管理',
        'edit_posts',
        'aston-products',
        '',
        'dashicons-products',
        26
    );
    
    // Add products submenu
    add_submenu_page(
        'aston-products',
        'アンティーク商品',
        'アンティーク商品',
        'edit_posts',
        'edit.php?post_type=antique_products'
    );
    
    add_submenu_page(
        'aston-products',
        '商品カテゴリー',
        '商品カテゴリー',
        'edit_posts',
        'edit.php?post_type=product_categories'
    );
    
    // Remove first submenu item (duplicate parent)
    if (isset($submenu['aston-products'][0])) {
        unset($submenu['aston-products'][0]);
    }
    
    // Content group - parent menu
    add_menu_page(
        'コンテンツ',
        'コンテンツ',
        'edit_posts',
        'aston-content',
        '',
        'dashicons-format-aside',
        27
    );
    
    // Add content submenu
    add_submenu_page(
        'aston-content',
        'サービス',
        'サービス',
        'edit_posts',
        'edit.php?post_type=services'
    );
    
    add_submenu_page(
        'aston-content',
        'よくある質問',
        'よくある質問',
        'edit_posts',
        'edit.php?post_type=faqs'
    );
    
    add_submenu_page(
        'aston-content',
        '求人情報',
        '求人情報',
        'edit_posts',
        'edit.php?post_type=jobs'
    );
    
    add_submenu_page(
        'aston-content',
        '店舗情報',
        '店舗情報',
        'edit_posts',
        'edit.php?post_type=stores'
    );
    
    add_submenu_page(
        'aston-content',
        'ギャラリー',
        'ギャラリー',
        'edit_posts',
        'edit.php?post_type=gallery_images'
    );
    
    add_submenu_page(
        'aston-content',
        'ブランドロゴ',
        'ブランドロゴ',
        'edit_posts',
        'edit.php?post_type=brand_logos'
    );
    
    // Remove first submenu item (duplicate parent)
    if (isset($submenu['aston-content'][0])) {
        unset($submenu['aston-content'][0]);
    }
    
    // Remove original CPT top-level menus
    remove_menu_page('edit.php?post_type=antique_products');
    remove_menu_page('edit.php?post_type=product_categories');
    remove_menu_page('edit.php?post_type=services');
    remove_menu_page('edit.php?post_type=faqs');
    remove_menu_page('edit.php?post_type=jobs');
    remove_menu_page('edit.php?post_type=stores');
    remove_menu_page('edit.php?post_type=gallery_images');
    remove_menu_page('edit.php?post_type=brand_logos');
    
    // Remove all menu separators for cleaner look
    foreach ($menu as $key => $item) {
        if (strpos($item[4], 'wp-menu-separator') !== false) {
            unset($menu[$key]);
        }
    }
}
add_action('admin_menu', 'aston_organize_admin_menu', 999);

/**
 * Highlight correct parent menu when editing CPT
 */
function aston_menu_parent_file($parent_file) {
    global $current_screen;
    
    $products_cpts = ['antique_products', 'product_categories'];
    $content_cpts = ['services', 'faqs', 'jobs', 'stores', 'gallery_images', 'brand_logos'];
    
    if (in_array($current_screen->post_type, $products_cpts)) {
        $parent_file = 'aston-products';
    } elseif (in_array($current_screen->post_type, $content_cpts)) {
        $parent_file = 'aston-content';
    }
    
    return $parent_file;
}
add_filter('parent_file', 'aston_menu_parent_file');

/**
 * Highlight correct submenu when editing CPT
 */
function aston_menu_submenu_file($submenu_file) {
    global $current_screen;
    
    if ($current_screen->post_type) {
        $submenu_file = 'edit.php?post_type=' . $current_screen->post_type;
    }
    
    return $submenu_file;
}
add_filter('submenu_file', 'aston_menu_submenu_file');

