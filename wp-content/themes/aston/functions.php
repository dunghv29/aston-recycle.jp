<?php

/**
 * aston functions and definitions
 * @package aston
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sanitize iframe HTML for Google Maps
 */
if (!function_exists('aston_sanitize_iframe')) {
	function aston_sanitize_iframe($input) {
		$allowed_html = array(
			'iframe' => array(
				'src' => array(),
				'width' => array(),
				'height' => array(),
				'style' => array(),
				'allowfullscreen' => array(),
				'loading' => array(),
				'referrerpolicy' => array(),
				'frameborder' => array(),
				'allow' => array(),
			),
		);
		return wp_kses($input, $allowed_html);
	}
}

/**
 * Include customizer settings
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Include Admin Menu Organizer
 */
require get_template_directory() . '/inc/admin-menu-organizer.php';

/**
 * Include Bootstrap Navwalker
 */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aston_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on aston, use a find and replace
	 * to change 'twentynineteen' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('twentynineteen', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	/*
	 * Register navigation menus for the theme.
	 * This theme uses wp_nav_menu() in multiple locations.
	 */
	register_nav_menus(array(
		'primary' => esc_html__('Primary Menu', 'twentynineteen'),
		'footer_col_1' => esc_html__('Footer Column 1', 'twentynineteen'),
		'footer_col_2' => esc_html__('Footer Column 2', 'twentynineteen'),
		'footer_col_3' => esc_html__('Footer Column 3', 'twentynineteen'),
		'footer_col_4' => esc_html__('Footer Column 4', 'twentynineteen'),
	));

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'aston_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support('custom-logo', array(
		'height' => 250,
		'width' => 250,
		'flex-width' => true,
		'flex-height' => true,
	));
}
add_action('after_setup_theme', 'aston_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aston_content_width()
{
	$GLOBALS['content_width'] = apply_filters('aston_content_width', 640);
}
add_action('after_setup_theme', 'aston_content_width', 0);

/**
 * Add image sizes for better performance.
 */
function aston_custom_image_sizes() {
	add_image_size('aston-banner', 1920, 600, true);
	add_image_size('aston-thumbnail', 400, 300, true);
	add_image_size('aston-medium', 800, 600, true);
}
add_action('after_setup_theme', 'aston_custom_image_sizes');

/**
 * Add lazy loading to images.
 */
function aston_add_lazy_loading($content) {
	if (is_feed() || is_admin()) {
		return $content;
	}
	
	$content = preg_replace('/<img(.*?)src=/i', '<img$1loading="lazy" src=', $content);
	return $content;
}
add_filter('the_content', 'aston_add_lazy_loading', 99);

/**
 * Increase JPEG compression quality (default is 82%).
 * Adjust value: lower = smaller file, higher = better quality.
 */
function aston_jpeg_quality($quality) {
	return 85; // 85% quality - balance between size and quality
}
add_filter('jpeg_quality', 'aston_jpeg_quality');
add_filter('wp_editor_set_quality', 'aston_jpeg_quality');

/**
 * Enable support for WebP images upload.
 */
function aston_enable_webp_upload($mimes) {
	$mimes['webp'] = 'image/webp';
	return $mimes;
}
add_filter('upload_mimes', 'aston_enable_webp_upload');

/**
 * Rename uploaded files to avoid duplicates and conflicts.
 * Format: timestamp-random-original-name.ext
 * 
 * @param array $file File upload array.
 * @return array Modified file array.
 */
function aston_rename_uploaded_file($file) {
	$extension = pathinfo($file['name'], PATHINFO_EXTENSION);
	$basename = pathinfo($file['name'], PATHINFO_FILENAME);
	
	// Sanitize filename: remove special chars, convert to lowercase
	$basename = sanitize_file_name($basename);
	$basename = strtolower($basename);
	$basename = preg_replace('/[^a-z0-9\-_]/', '', $basename);
	
	// Create unique filename: timestamp-random-basename.ext
	$timestamp = date('YmdHis');
	$random = substr(md5(uniqid()), 0, 6);
	$new_filename = $timestamp . '-' . $random . '-' . $basename . '.' . $extension;
	
	$file['name'] = $new_filename;
	return $file;
}
add_filter('wp_handle_upload_prefilter', 'aston_rename_uploaded_file');

/**
 * Optimize WordPress for better performance.
 */
function aston_performance_optimizations() {
	// Remove emoji scripts
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
	remove_action('admin_print_scripts', 'print_emoji_detection_script');
	remove_action('admin_print_styles', 'print_emoji_styles');
	
	// Remove WP embed script
	wp_deregister_script('wp-embed');
	
	// Remove query strings from static resources
	add_filter('script_loader_src', 'aston_remove_script_version', 15, 1);
	add_filter('style_loader_src', 'aston_remove_script_version', 15, 1);
}
add_action('init', 'aston_performance_optimizations');

/**
 * Remove version query string from scripts and styles.
 * 
 * @param string $src Script/style source URL.
 * @return string Modified URL without version.
 */
function aston_remove_script_version($src) {
	if (strpos($src, 'ver=')) {
		$src = remove_query_arg('ver', $src);
	}
	return $src;
}

/**
 * Enqueue scripts and styles.
 */
function aston_scripts()
{
	$theme_uri = get_template_directory_uri();
	$theme_version = _S_VERSION;

	// Bootstrap CSS
	wp_enqueue_style('bootstrap', $theme_uri . '/assets/vendor/bootstrap/bootstrap.min.css', array(), $theme_version);

	// Swiper CSS
	wp_enqueue_style('swiper', $theme_uri . '/assets/vendor/swiper/swiper-bundle.min.css', array(), $theme_version);

	// GLightbox CSS (for gallery lightbox)
	wp_enqueue_style('glightbox', $theme_uri . '/assets/vendor/glightbox/glightbox.min.css', array(), $theme_version);

	// Theme stylesheet
	wp_enqueue_style('aston-style', get_stylesheet_uri(), array('bootstrap', 'swiper'), $theme_version);

	// Bootstrap JS (deferred for better performance)
	wp_enqueue_script('bootstrap', $theme_uri . '/assets/vendor/bootstrap/bootstrap.bundle.min.js', array('jquery'), $theme_version, array('in_footer' => true, 'strategy' => 'defer'));

	// Swiper JS (deferred for better performance)
	wp_enqueue_script('swiper', $theme_uri . '/assets/vendor/swiper/swiper-bundle.min.js', array('jquery'), $theme_version, array('in_footer' => true, 'strategy' => 'defer'));

	// GLightbox JS (for gallery lightbox)
	wp_enqueue_script('glightbox', $theme_uri . '/assets/vendor/glightbox/glightbox.min.js', array(), $theme_version, array('in_footer' => true, 'strategy' => 'defer'));

	// Mobile menu JS is included in custom script

	// Enqueue custom JavaScript file (deferred for better performance)
	wp_enqueue_script('aston-custom-script', $theme_uri . '/js/script.js', array('jquery', 'bootstrap', 'swiper'), $theme_version, array('in_footer' => true, 'strategy' => 'defer'));

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'aston_scripts');

/**
 * Register custom post types for the theme.
 * 
 * Registers 3 CPTs: services, faqs, and jobs.
 * Also registers taxonomies for faqs.
 */
function aston_register_cpt()
{
	// Services CPT
	register_post_type('services', array(
		'labels' => array(
			'name' => __('サービス', 'twentynineteen'),
			'singular_name' => __('サービス', 'twentynineteen'),
			'menu_name' => __('サービス', 'twentynineteen'),
			'add_new' => __('新規追加', 'twentynineteen'),
			'add_new_item' => __('サービスを追加', 'twentynineteen'),
			'edit_item' => __('サービスを編集', 'twentynineteen'),
			'new_item' => __('新規サービス', 'twentynineteen'),
			'view_item' => __('サービスを見る', 'twentynineteen'),
			'search_items' => __('サービスを検索', 'twentynineteen'),
			'not_found' => __('サービスが見つかりません', 'twentynineteen'),
			'not_found_in_trash' => __('ゴミ箱にサービスが見つかりません', 'twentynineteen'),
			'all_items' => __('すべてのサービス', 'twentynineteen'),
			'archives' => __('サービスアーカイブ', 'twentynineteen'),
		),
		'description' => __('会社のサービス情報を管理', 'twentynineteen'),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'our-services', 'with_front' => false),
		'capability_type' => 'post',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
		'menu_icon' => 'dashicons-welcome-widgets-menus',
		'show_in_rest' => true,
		'menu_position' => 20,
	));

	// FAQs CPT
	register_post_type('faqs', array(
		'labels' => array(
			'name' => __('よくある質問', 'twentynineteen'),
			'singular_name' => __('質問', 'twentynineteen'),
			'menu_name' => __('よくある質問', 'twentynineteen'),
			'add_new' => __('新規追加', 'twentynineteen'),
			'add_new_item' => __('質問を追加', 'twentynineteen'),
			'edit_item' => __('質問を編集', 'twentynineteen'),
			'new_item' => __('新規質問', 'twentynineteen'),
			'view_item' => __('質問を見る', 'twentynineteen'),
			'search_items' => __('質問を検索', 'twentynineteen'),
			'not_found' => __('質問が見つかりません', 'twentynineteen'),
			'not_found_in_trash' => __('ゴミ箱に質問が見つかりません', 'twentynineteen'),
			'all_items' => __('すべての質問', 'twentynineteen'),
			'archives' => __('質問アーカイブ', 'twentynineteen'),
		),
		'description' => __('よくある質問を管理', 'twentynineteen'),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'faqs', 'with_front' => false),
		'capability_type' => 'post',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		'menu_icon' => 'dashicons-editor-help',
		'show_in_rest' => true,
		'menu_position' => 23,
	));

	register_taxonomy('faqs_category', 'faqs', array(
		'labels' => array(
			'name' => __('FAQカテゴリー', 'twentynineteen'),
			'singular_name' => __('カテゴリー', 'twentynineteen'),
			'search_items' => __('カテゴリーを検索', 'twentynineteen'),
			'all_items' => __('すべてのカテゴリー', 'twentynineteen'),
			'parent_item' => __('親カテゴリー', 'twentynineteen'),
			'parent_item_colon' => __('親カテゴリー:', 'twentynineteen'),
			'edit_item' => __('カテゴリーを編集', 'twentynineteen'),
			'update_item' => __('カテゴリーを更新', 'twentynineteen'),
			'add_new_item' => __('新しいカテゴリーを追加', 'twentynineteen'),
			'new_item_name' => __('新しいカテゴリー名', 'twentynineteen'),
			'menu_name' => __('カテゴリー', 'twentynineteen'),
		),
		'public' => true,
		'hierarchical' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => false,
		'rewrite' => false,
		'show_in_rest' => true,
	));

	// Jobs CPT
	register_post_type('jobs', array(
		'labels' => array(
			'name' => __('求人', 'twentynineteen'),
			'singular_name' => __('求人', 'twentynineteen'),
			'menu_name' => __('求人情報', 'twentynineteen'),
			'add_new' => __('新規追加', 'twentynineteen'),
			'add_new_item' => __('求人を追加', 'twentynineteen'),
			'edit_item' => __('求人を編集', 'twentynineteen'),
			'new_item' => __('新規求人', 'twentynineteen'),
			'view_item' => __('求人を見る', 'twentynineteen'),
			'search_items' => __('求人を検索', 'twentynineteen'),
			'not_found' => __('求人が見つかりません', 'twentynineteen'),
			'not_found_in_trash' => __('ゴミ箱に求人が見つかりません', 'twentynineteen'),
			'all_items' => __('すべての求人', 'twentynineteen'),
			'archives' => __('求人アーカイブ', 'twentynineteen'),
		),
		'description' => __('求人情報を管理', 'twentynineteen'),
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'has_archive' => true,
		'rewrite' => array('slug' => 'jobs', 'with_front' => false),
		'capability_type' => 'post',
		'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
		'menu_icon' => 'dashicons-businessperson',
		'show_in_rest' => true,
		'menu_position' => 24,
	));

	// Product Categories CPT (for front page display)
	register_post_type('product_categories', array(
		'labels' => array(
			'name' => __('商品カテゴリー表示', 'twentynineteen'),
			'singular_name' => __('商品カテゴリー', 'twentynineteen'),
			'menu_name' => __('商品カテゴリー表示', 'twentynineteen'),
			'add_new' => __('新規追加', 'twentynineteen'),
			'add_new_item' => __('カテゴリーを追加', 'twentynineteen'),
			'edit_item' => __('カテゴリーを編集', 'twentynineteen'),
			'new_item' => __('新規カテゴリー', 'twentynineteen'),
			'view_item' => __('カテゴリーを見る', 'twentynineteen'),
			'search_items' => __('カテゴリーを検索', 'twentynineteen'),
			'not_found' => __('カテゴリーが見つかりません', 'twentynineteen'),
			'not_found_in_trash' => __('ゴミ箱にカテゴリーが見つかりません', 'twentynineteen'),
			'all_items' => __('すべてのカテゴリー', 'twentynineteen'),
		),
		'description' => __('トップページに表示する買取対象商品カテゴリー', 'twentynineteen'),
		'public' => false,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => false,
		'has_archive' => false,
		'rewrite' => false,
		'capability_type' => 'post',
		'supports' => array('title', 'thumbnail', 'page-attributes'),
		'menu_icon' => 'dashicons-category',
		'show_in_rest' => true,
		'menu_position' => 25,
	));

	// Stores/Locations CPT (for front page display)
	register_post_type('stores', array(
		'labels' => array(
			'name' => __('店舗情報', 'twentynineteen'),
			'singular_name' => __('店舗', 'twentynineteen'),
			'menu_name' => __('店舗情報', 'twentynineteen'),
			'add_new' => __('新規追加', 'twentynineteen'),
			'add_new_item' => __('店舗を追加', 'twentynineteen'),
			'edit_item' => __('店舗を編集', 'twentynineteen'),
			'new_item' => __('新規店舗', 'twentynineteen'),
			'view_item' => __('店舗を見る', 'twentynineteen'),
			'search_items' => __('店舗を検索', 'twentynineteen'),
			'not_found' => __('店舗が見つかりません', 'twentynineteen'),
			'not_found_in_trash' => __('ゴミ箱に店舗が見つかりません', 'twentynineteen'),
			'all_items' => __('すべての店舗', 'twentynineteen'),
		),
		'description' => __('店舗・サービス拠点情報を管理', 'twentynineteen'),
		'public' => false,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => false,
		'has_archive' => false,
		'rewrite' => false,
		'capability_type' => 'post',
		'supports' => array('title', 'thumbnail', 'page-attributes'),
		'menu_icon' => 'dashicons-store',
		'show_in_rest' => true,
		'menu_position' => 26,
	));

	// Antique Products CPT (for antiques page display)
	register_post_type('antique_products', array(
		'labels' => array(
			'name' => __('アンティーク商品', 'twentynineteen'),
			'singular_name' => __('アンティーク商品', 'twentynineteen'),
			'menu_name' => __('アンティーク商品', 'twentynineteen'),
			'add_new' => __('新規追加', 'twentynineteen'),
			'add_new_item' => __('商品を追加', 'twentynineteen'),
			'edit_item' => __('商品を編集', 'twentynineteen'),
			'new_item' => __('新規商品', 'twentynineteen'),
			'view_item' => __('商品を見る', 'twentynineteen'),
			'search_items' => __('商品を検索', 'twentynineteen'),
			'not_found' => __('商品が見つかりません', 'twentynineteen'),
			'not_found_in_trash' => __('ゴミ箱に商品が見つかりません', 'twentynineteen'),
			'all_items' => __('すべての商品', 'twentynineteen'),
		),
		'description' => __('アンティークページに表示する商品カテゴリー', 'twentynineteen'),
		'public' => false,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => false,
		'has_archive' => false,
		'rewrite' => false,
		'capability_type' => 'post',
		'supports' => array('title', 'thumbnail', 'page-attributes'),
		'menu_icon' => 'dashicons-palmtree',
		'show_in_rest' => true,
		'menu_position' => 27,
	));

	// Gallery Images CPT (for antiques page gallery)
	register_post_type('gallery_images', array(
		'labels' => array(
			'name' => __('ギャラリー画像', 'twentynineteen'),
			'singular_name' => __('ギャラリー画像', 'twentynineteen'),
			'menu_name' => __('店内ギャラリー', 'twentynineteen'),
			'add_new' => __('新規追加', 'twentynineteen'),
			'add_new_item' => __('画像を追加', 'twentynineteen'),
			'edit_item' => __('画像を編集', 'twentynineteen'),
			'new_item' => __('新規画像', 'twentynineteen'),
			'view_item' => __('画像を見る', 'twentynineteen'),
			'search_items' => __('画像を検索', 'twentynineteen'),
			'not_found' => __('画像が見つかりません', 'twentynineteen'),
			'not_found_in_trash' => __('ゴミ箱に画像が見つかりません', 'twentynineteen'),
			'all_items' => __('すべての画像', 'twentynineteen'),
		),
		'description' => __('アンティークページ店内ギャラリーに表示する画像', 'twentynineteen'),
		'public' => false,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => false,
		'has_archive' => false,
		'rewrite' => false,
		'capability_type' => 'post',
		'supports' => array('title', 'thumbnail', 'page-attributes'),
		'menu_icon' => 'dashicons-images-alt2',
		'show_in_rest' => true,
		'menu_position' => 28,
	));

	// Brand Logos CPT (for antiques page brand slider)
	register_post_type('brand_logos', array(
		'labels' => array(
			'name' => __('ブランドロゴ', 'twentynineteen'),
			'singular_name' => __('ブランドロゴ', 'twentynineteen'),
			'menu_name' => __('ブランドロゴ', 'twentynineteen'),
			'add_new' => __('新規追加', 'twentynineteen'),
			'add_new_item' => __('ロゴを追加', 'twentynineteen'),
			'edit_item' => __('ロゴを編集', 'twentynineteen'),
			'new_item' => __('新規ロゴ', 'twentynineteen'),
			'view_item' => __('ロゴを見る', 'twentynineteen'),
			'search_items' => __('ロゴを検索', 'twentynineteen'),
			'not_found' => __('ロゴが見つかりません', 'twentynineteen'),
			'not_found_in_trash' => __('ゴミ箱にロゴが見つかりません', 'twentynineteen'),
			'all_items' => __('すべてのロゴ', 'twentynineteen'),
		),
		'description' => __('アンティークページブランドスライダーに表示するロゴ', 'twentynineteen'),
		'public' => false,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => false,
		'has_archive' => false,
		'rewrite' => false,
		'capability_type' => 'post',
		'supports' => array('title', 'thumbnail', 'page-attributes'),
		'menu_icon' => 'dashicons-awards',
		'show_in_rest' => true,
		'menu_position' => 29,
	));
}
add_action('init', 'aston_register_cpt');

/**
 * Add custom meta box for product category subtitle (English text)
 */
function aston_product_category_meta_boxes()
{
	add_meta_box(
		'product_category_subtitle',
		__('英語サブタイトル', 'twentynineteen'),
		'aston_product_category_subtitle_callback',
		'product_categories',
		'normal',
		'high'
	);

	add_meta_box(
		'product_category_link',
		__('リンクURL', 'twentynineteen'),
		'aston_product_category_link_callback',
		'product_categories',
		'normal',
		'high'
	);
}
add_action('add_meta_boxes', 'aston_product_category_meta_boxes');

/**
 * Add custom meta box for store link URL
 */
function aston_store_meta_boxes()
{
	add_meta_box(
		'store_link',
		__('店舗詳細ページURL', 'twentynineteen'),
		'aston_store_link_callback',
		'stores',
		'normal',
		'high'
	);
}
add_action('add_meta_boxes', 'aston_store_meta_boxes');

/**
 * Add custom meta box for antique product link URL
 */
function aston_antique_product_meta_boxes()
{
	add_meta_box(
		'antique_product_link',
		__('商品リンクURL', 'twentynineteen'),
		'aston_antique_product_link_callback',
		'antique_products',
		'normal',
		'high'
	);
}
add_action('add_meta_boxes', 'aston_antique_product_meta_boxes');

/**
 * Render antique product link meta box
 */
function aston_antique_product_link_callback($post)
{
	wp_nonce_field('antique_product_link_nonce', 'antique_product_link_nonce');
	$value = get_post_meta($post->ID, '_product_link', true);
	echo '<input type="url" id="product_link" name="product_link" value="' . esc_attr($value) . '" class="widefat">';
	echo '<p class="description">商品詳細ページURL（空欄の場合は # になります）</p>';
}

/**
 * Render store link meta box
 */
function aston_store_link_callback($post)
{
	wp_nonce_field('store_link_nonce', 'store_link_nonce');
	$value = get_post_meta($post->ID, '_store_link', true);
	echo '<input type="url" id="store_link" name="store_link" value="' . esc_attr($value) . '" class="widefat">';
	echo '<p class="description">店舗の詳細ページURL（空欄の場合は # になります）</p>';
}

/**
 * Render subtitle meta box
 */
function aston_product_category_subtitle_callback($post)
{
	wp_nonce_field('product_category_subtitle_nonce', 'product_category_subtitle_nonce');
	$value = get_post_meta($post->ID, '_product_category_subtitle', true);
	echo '<input type="text" id="product_category_subtitle" name="product_category_subtitle" value="' . esc_attr($value) . '" class="widefat">';
	echo '<p class="description">カテゴリーの英語サブタイトルを入力してください</p>';
}

/**
 * Render link URL meta box
 */
function aston_product_category_link_callback($post)
{
	wp_nonce_field('product_category_link_nonce', 'product_category_link_nonce');
	$value = get_post_meta($post->ID, '_product_category_link', true);
	echo '<input type="url" id="product_category_link" name="product_category_link" value="' . esc_attr($value) . '" class="widefat">';
	echo '<p class="description">クリック時に遷移するURL（空欄の場合は # になります）</p>';
}

/**
 * Save meta box data
 */
function aston_save_product_category_meta($post_id)
{
	// Check nonce for subtitle
	if (isset($_POST['product_category_subtitle_nonce']) && wp_verify_nonce($_POST['product_category_subtitle_nonce'], 'product_category_subtitle_nonce')) {
		if (isset($_POST['product_category_subtitle'])) {
			update_post_meta($post_id, '_product_category_subtitle', sanitize_text_field($_POST['product_category_subtitle']));
		}
	}

	// Check nonce for link
	if (isset($_POST['product_category_link_nonce']) && wp_verify_nonce($_POST['product_category_link_nonce'], 'product_category_link_nonce')) {
		if (isset($_POST['product_category_link'])) {
			update_post_meta($post_id, '_product_category_link', esc_url_raw($_POST['product_category_link']));
		}
	}
}
add_action('save_post_product_categories', 'aston_save_product_category_meta');

/**
 * Save store meta box data
 */
function aston_save_store_meta($post_id)
{
	// Check nonce for store link
	if (isset($_POST['store_link_nonce']) && wp_verify_nonce($_POST['store_link_nonce'], 'store_link_nonce')) {
		if (isset($_POST['store_link'])) {
			update_post_meta($post_id, '_store_link', esc_url_raw($_POST['store_link']));
		}
	}
}
add_action('save_post_stores', 'aston_save_store_meta');

/**
 * Save antique product meta box data
 */
function aston_save_antique_product_meta($post_id)
{
	// Check nonce for product link
	if (isset($_POST['antique_product_link_nonce']) && wp_verify_nonce($_POST['antique_product_link_nonce'], 'antique_product_link_nonce')) {
		if (isset($_POST['product_link'])) {
			update_post_meta($post_id, '_product_link', esc_url_raw($_POST['product_link']));
		}
	}
}
add_action('save_post_antique_products', 'aston_save_antique_product_meta');

/**
 * Remove unnecessary admin menu items and customizations.
 */
/**
 * Add custom meta box for services: custom link
 */

function aston_remove_admin_menus() {
	remove_menu_page('plugins.php'); // Remove Plugins menu
	remove_menu_page('edit-comments.php'); // Remove Comments menu
	remove_filter('update_footer', 'core_update_footer');
}
add_action('admin_menu', 'aston_remove_admin_menus');

/**
 * Disable WordPress core, plugin, and theme updates.
 */
function aston_disable_updates() {
	// Disable core updates
	add_filter('auto_update_core', '__return_false');
	remove_action('wp_version_check', 'wp_version_check');
	remove_action('admin_init', '_maybe_update_core');
	
	// Disable plugin updates
	remove_action('load-update-core.php', 'wp_update_plugins');
	add_filter('auto_update_plugin', '__return_false');
	
	// Disable theme updates
	remove_action('load-update-core.php', 'wp_update_themes');
	add_filter('auto_update_theme', '__return_false');
	
	// Hide update notices
	add_filter('pre_site_transient_update_core', '__return_null');
	add_filter('pre_site_transient_update_plugins', '__return_null');
	add_filter('pre_site_transient_update_themes', '__return_null');
}
add_action('init', 'aston_disable_updates', 1);

/**
 * Remove update menu from admin bar.
 */
function aston_remove_update_menu() {
	remove_action('admin_notices', 'update_nag', 3);
}
add_action('admin_menu', 'aston_remove_update_menu');

/**
 * Redirect comments page to admin dashboard.
 */
function aston_redirect_comments_page() {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_safe_redirect(admin_url());
		exit;
	}
}
add_action('admin_init', 'aston_redirect_comments_page');

/* ==== End Custom Post Types ==== */


/**
 * Generate breadcrumb navigation for pages.
 * 
 * Outputs a breadcrumb trail with proper escaping and structure.
 * Supports categories, single posts, and pages.
 */
function get_breadcrumb()
{
	$home_url = esc_url(home_url('/'));
	
	echo '<nav class="page-breadcrumb" aria-label="breadcrumb">';
	echo '<ul class="page-breadcrumb__list">';
	echo '<li class="page-breadcrumb__item">';
	echo '<a href="' . $home_url . '" class="page-breadcrumb__link">トップ</a>';
	echo '</li>';
	
	if (!is_front_page()) {
		if (is_category() || is_single()) {
			$category = get_the_category();
			if ($category && !empty($category)) {
				$cat = $category[0];
				$cat_link = get_category_link($cat->term_id);
				echo '<li class="page-breadcrumb__item">';
				echo '<a href="' . esc_url($cat_link) . '" class="page-breadcrumb__link">' . esc_html($cat->name) . '</a>';
				echo '</li>';
			}
		}
		
		if (is_single() || is_page()) {
			echo '<li class="page-breadcrumb__item">';
			echo '<span>' . esc_html(get_the_title()) . '</span>';
			echo '</li>';
		}
	}
	
	echo '</ul>';
	echo '</nav>';
}

/**
 * Get banner background style for custom post types.
 * 
 * @param string $cpt Custom post type slug.
 * @return string Inline style attribute with banner background.
 */
function get_banner($cpt)
{
	$background_style = '';
	$image_id = get_theme_mod($cpt . '_banner');
	
	if ($image_id) {
		$image_src = wp_get_attachment_image_src($image_id, 'full');
		if ($image_src && isset($image_src[0])) {
			$background_style = 'background: url(' . esc_url($image_src[0]) . ') no-repeat center center / cover;';
		}
	}
	
	return $background_style ? 'style="' . $background_style . '"' : '';
}

/**
 * Get page banner from featured image.
 * 
 * @return string Inline style attribute with banner background.
 */
function get_page_banner()
{
	$background_style = '';
	
	if (has_post_thumbnail()) {
		$image_src = get_the_post_thumbnail_url(get_the_ID(), 'full');
		if ($image_src) {
			$background_style = 'background: url(' . esc_url($image_src) . ') no-repeat center center / cover;';
		}
	}
	
	return $background_style ? 'style="' . $background_style . '"' : '';
}

/**
 * Generate table of contents from heading tags in content.
 * 
 * Automatically creates TOC from H2-H4 headings and adds IDs to them.
 * 
 * @param string $content Post content with headings.
 * @return string TOC HTML + processed content with heading IDs.
 */
function get_toc_content($content)
{
	$matches = array();

	// Find all headings from H2 → H4
	preg_match_all('/<h([2-4])[^>]*>(.*?)<\/h[2-4]>/', $content, $matches, PREG_SET_ORDER);
	
	if (empty($matches)) {
		return $content;
	}

	// Start TOC wrapper
	$toc = '<div class="toc">';
	$toc .= '<p class="toc__title">目次</p>';
	$toc .= '<ul class="toc__list">';

	$last_level = 0;

	foreach ($matches as $i => $match) {
		$level = intval($match[1]);   // heading level (2, 3, 4)
		$title = wp_strip_all_tags($match[2]); // heading text
		$id = 'h' . $level . '-' . ($i + 1);   // unique ID for anchor link

		// Add ID into the original heading inside content
		$content = str_replace($match[0], '<h' . $level . ' id="' . esc_attr($id) . '">' . $match[2] . '</h' . $level . '>', $content);

		if ($last_level == 0) {
			// First heading → open <li>
			$toc .= '<li><a href="#' . esc_attr($id) . '">' . esc_html($title) . '</a>';
		} elseif ($level > $last_level) {
			// Deeper heading → open nested <ul>
			$toc .= '<ul><li><a href="#' . esc_attr($id) . '">' . esc_html($title) . '</a>';
		} elseif ($level == $last_level) {
			// Same level → close previous <li>
			$toc .= '</li><li><a href="#' . esc_attr($id) . '">' . esc_html($title) . '</a>';
		} else {
			// Shallower heading → close until reaching the right level
			$toc .= str_repeat('</li></ul>', $last_level - $level) . '</li>';
			$toc .= '<li><a href="#' . esc_attr($id) . '">' . esc_html($title) . '</a>';
		}

		$last_level = $level;
	}

	// Close remaining tags
	if ($last_level > 1) {
		$toc .= str_repeat('</li></ul>', $last_level - 1);
	}
	$toc .= '</li></ul></div>';

	// Return TOC + processed content
	return $toc . $content;
}

/**
 * Generate pagination for archive pages.
 * 
 * Creates a numbered pagination with previous/next arrows.
 * Supports custom WP_Query objects.
 * 
 * @param WP_Query|null $query Optional. Custom query object. Default: global $wp_query.
 * @return void
 */
function get_pagination($query = null)
{
	if (!$query) {
		global $wp_query;
		$query = $wp_query;
	}

	$current = max(1, get_query_var('paged'));
	$total = $query->max_num_pages;

	if ($total <= 1) {
		echo '<div class="my-5"></div>';
		return;
	}

	echo '<div class="blog-pagination">';
	echo '<ul class="blog-pagination__list">';

	// Previous page
	if ($current > 1) {
		echo '<li class="blog-pagination__item blog-pagination__item--prev">';
		echo '<a href="' . esc_url(get_pagenum_link($current - 1)) . '" aria-label="' . esc_attr__('前のページ', 'twentynineteen') . '">&laquo;</a>';
		echo '</li>';
	}

	// Number pages
	for ($i = 1; $i <= $total; $i++) {
		if ($i == $current) {
			echo '<li class="blog-pagination__item is-active" aria-current="page"><span>' . $i . '</span></li>';
		} else {
			echo '<li class="blog-pagination__item">';
			echo '<a href="' . esc_url(get_pagenum_link($i)) . '" aria-label="' . sprintf(esc_attr__('ページ %s', 'twentynineteen'), $i) . '">' . $i . '</a>';
			echo '</li>';
		}
	}

	// Next page
	if ($current < $total) {
		echo '<li class="blog-pagination__item blog-pagination__item--next">';
		echo '<a href="' . esc_url(get_pagenum_link($current + 1)) . '" aria-label="' . esc_attr__('次のページ', 'twentynineteen') . '">&raquo;</a>';
		echo '</li>';
	}

	echo '</ul>';
	echo '</div>';
}

/**
 * Render category list for sidebar.
 * 
 * @param string $taxonomy Taxonomy name. Default: 'category'.
 * @param string $title    Box title. Default: 'Categories'.
 * @param bool   $use_link Whether to use links or data-href for categories. Default: true.
 * @return void
 */
function aston_render_category_list($taxonomy = 'category', $title = 'Categories', $use_link = true)
{
	$categories = get_categories(array(
		'taxonomy'   => $taxonomy,
		'orderby'    => 'name',
		'order'      => 'ASC',
		'hide_empty' => false,
	));

	echo '<div class="card-box">';
	echo '<h3 class="card-box__title">' . esc_html($title) . '</h3>';
	echo '<ul class="card-box__list">';

	if (empty($categories)) {
		echo '<li class="card-box__item">' . esc_html__('カテゴリーが見つかりません', 'twentynineteen') . '</li>';
	} else {
		foreach ($categories as $category) {
			echo '<li class="card-box__item">';
			
			if ($use_link) {
				echo '<a href="' . esc_url(get_term_link($category)) . '" class="card-box__link">';
			} else {
				echo '<a role="button" data-href="#accordion' . esc_attr($category->term_id) . '" class="card-box__link">';
			}
			
			echo esc_html($category->name);
			echo '<span class="card-box__icon"><i class="ph ph-arrow-right"></i></span>';
			echo '</a>';
			echo '</li>';
		}
	}

	echo '</ul>';
	echo '</div>';
}

/**
 * Get cached theme mod value.
 * 
 * Uses object cache to reduce database queries for customizer settings.
 * 
 * @param string $setting Setting name.
 * @param mixed  $default Default value.
 * @return mixed Setting value.
 */
function aston_get_theme_mod($setting, $default = false) {
	$cache_key = 'aston_mod_' . $setting;
	$value = wp_cache_get($cache_key);
	
	if (false === $value) {
		$value = get_theme_mod($setting, $default);
		wp_cache_set($cache_key, $value, '', 3600); // Cache for 1 hour
	}
	
	return $value;
}

/**
 * Redirect old CPTs to under construction page
 */
function aston_redirect_old_cpts() {
    if (is_post_type_archive('products_sale') || is_post_type_archive('products_purchase') || is_singular('products_sale') || is_singular('products_purchase')) {
        wp_redirect(home_url('/under-construction/'));
        exit;
    }
}
add_action('template_redirect', 'aston_redirect_old_cpts');

