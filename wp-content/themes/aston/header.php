<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aston
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<?php
// Add page-name class and data attribute to body
$page_name = '';
if (is_singular()) {
	$post = get_queried_object();
	if ($post && !empty($post->post_name)) {
		$page_name = $post->post_name;
	}
} elseif (is_home()) {
	$page_name = 'posts';
} elseif (is_front_page()) {
	$page_name = 'front';
} elseif (is_archive()) {
	$page_name = 'archive';
} elseif (is_search()) {
	$page_name = 'search';
} elseif (is_404()) {
	$page_name = '404';
} elseif (is_page()) {
	$page = get_queried_object();
	if ($page && !empty($page->post_name)) {
		$page_name = $page->post_name;
	}
}
$page_name = sanitize_title($page_name);
$body_classes = array();
$body_classes[] = 'page-name-' . ($page_name ?: 'unknown');
?>
<body <?php body_class($body_classes); ?> data-page-name="<?php echo esc_attr($page_name ?: 'unknown'); ?>">
<?php wp_body_open(); ?>

	<div class="top-header">
		<div class="top-header__inner container d-flex align-items-center justify-content-between">
			<!-- Logo -->
			<div class="logo d-flex align-items-center">
				<?php if (has_custom_logo()):
					the_custom_logo();
				else: ?>
					<a href="<?php echo esc_url(home_url('/')); ?>"><img
							src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>"
							alt="<?php echo esc_attr(get_bloginfo('name')); ?>"></a>
				<?php endif; ?>
			</div>


			<!-- Contact Info -->
			<div class="contact-info">
				<div class="c-contact">
					<div class="c-contact__circle">
						<div class="c-contact__circle-top">
							<div>ご依頼</div>
							<div>お見積もり</div>
						</div>
						<div class="c-contact__circle-bottom">
							無料
						</div>
					</div>
					<div class="d-flex flex-column">
						<div class="c-contact__note">
							<span class="badge c-contact__badge me-2">土日祝OK</span>
							<span
								class="c-contact__note-time"
								data-customize-partial-id="aston_business_hours"><?php echo esc_html(get_theme_mod('aston_business_hours', '【受付時間】10:00〜19:00')); ?></span>
						</div>
						<div class="c-contact__phone d-flex align-items-center gap-2 mt-1">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/top-header-phone.png'); ?>" alt="">
							<span data-customize-partial-id="aston_phone"><?php echo esc_html(get_theme_mod('aston_phone', '0557-52-3677')); ?></span>
						</div>
					</div>
				</div>
				<!-- Buttons -->
				<div class="top-header__group-button">
					<a href="<?php echo esc_url(get_theme_mod('aston_line_url', '#')); ?>"
						class="btn-default btn-default-success">
						<div class="btn-default-inner">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-line.png'); ?>" alt="LINE">
							<span>簡単！<br>LINE査定</span>
						</div>
					</a>
					<a href="<?php echo esc_url(get_theme_mod('aston_contact_url', '#')); ?>"
						class="btn-default btn-default-warning">
						<div class="btn-default-inner">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-mail.png'); ?>" alt="EMAIL">
							<span>まずは！<br>お問い合わせ</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<!-- NAV MENU -->
	<nav class="navbar navbar-expand-lg nav-menu py-0 position-sticky top-0" style="z-index: 100;">
		<div class="container py-2">
			<button class="mobile-menu-toggle d-lg-none" aria-label="メニューを開く">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-center" id="navbar">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'menu_class' => 'navbar-nav nav-menu__navbar justify-content-between',
					'container' => false,
					'fallback_cb' => false,
					'items_wrap' => '<ul id="%1$s" class="%2$s">
								<li class="nav-item">
									<a class="nav-link" href="' . esc_url(home_url('/')) . '">トップ</a>
								</li>
								%3$s
							</ul>',
					'depth' => 2,
					'walker' => new WP_Bootstrap_Navwalker(),
				));
				?>
			</div>
		</div>
	</nav>

	<!-- Mobile Menu -->
	<div class="mobile-menu" id="mobile-menu">
		<div class="mobile-menu__overlay"></div>
		<div class="mobile-menu__content">
			<div class="mobile-menu__header">
				<span class="mobile-menu__title">メニュー</span>
				<button class="mobile-menu__close" aria-label="メニューを閉じる">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
						<line x1="18" y1="6" x2="6" y2="18"></line>
						<line x1="6" y1="6" x2="18" y2="18"></line>
					</svg>
				</button>
			</div>
			<nav class="mobile-menu__nav">
				<ul>
					<li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
					<?php
					if (has_nav_menu('primary')) {
						$menu_items = wp_get_nav_menu_items(wp_get_nav_menu_object(get_nav_menu_locations()['primary']));
						if ($menu_items) {
							foreach ($menu_items as $item) {
								if ($item->menu_item_parent == 0) {
									echo '<li><a href="' . esc_url($item->url) . '">' . esc_html($item->title) . '</a></li>';
								}
							}
						}
					}
					?>
				</ul>
			</nav>
		</div>
	</div>