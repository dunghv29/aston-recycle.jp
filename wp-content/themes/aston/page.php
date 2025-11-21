<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aston
 */

get_header();
$is_blank_content = empty(trim(get_the_content()));
$is_blank = $is_blank_content && !has_post_thumbnail();
?>

<?php if (!$is_blank && has_post_thumbnail()): ?>
<section class="hero" <?php echo get_page_banner(); ?>>
    <div class="hero-content">
        <h1 class="headline"><?php the_title(); ?></h1>
    </div>
</section>
<?php endif; ?>

<div class="page-content">
	<div class="page-container">
		<?php if (!$is_blank): ?>
		<!-- Breadcrumb -->
		<?php get_breadcrumb(); ?>
		<h1 class="page-main__title"><?php the_title(); ?></h1>
		<?php endif; ?>
		<!-- Main content -->
		<div class="page-main__content">
			<?php
			while (have_posts()):
				the_post();
				if ($is_blank) {
					// If the page content is empty, show "Under Construction" message
					get_template_part('template-parts/under-construction');
				} else {
					// Otherwise, display the page content
					the_content();
				}
			endwhile;
			?>
		</div>
	</div>
</div>
<?php if (!$is_blank): ?>
<section class="cta">
	<div class="cta__inner">
		<h2 class="section-title">お問い合わせはこちら</h2>
		<div class="cta__label">ご相談・お見積もり無料</div>

		<p class="cta__lead">
			最短<span class="cta__lead-em"><span class="cta__lead-num">30</span>秒</span>まずはお気軽にお問い合わせください！
		</p>

		<div class="cta__grid">
			<!-- LEFT: LINE -->
			<div class="cta__col">
				<p class="cta__caption">簡単査定・お見積もり！</p>
				<a href="<?php echo  esc_url(get_theme_mod('aston_line_url', '#')); ?>" class="btn-custom btn-custom-success">
					<div class="btn-custom__left">
						<div class="btn-custom__icon">
							<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icon-line.png"); ?>" alt="LINE">
						</div>
						<div class="btn-custom__text">
							<span class="btn-custom__sub-text">簡単査定・24時間受付</span>
							<span class="btn-custom__main-text">LINEで査定</span>
						</div>
					</div>
					<div class="btn-custom__arrow"><i class="ph ph-caret-right"></i></div>
				</a>
			</div>

			<!-- RIGHT: MAIL -->
			<div class="cta__col">
				<p class="cta__caption">お申し込みは最短30秒！24時間いつでも受付中</p>
				<a href="<?php echo  esc_url(get_theme_mod('aston_contact_url', '#')); ?>"
					class="btn-custom btn-custom-warning">
					<div class="btn-custom__left">
						<div class="btn-custom__icon">
							<img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icon-mail.png"); ?>" alt="EMAIL">
						</div>
						<div class="btn-custom__text">
							<span class="btn-custom__sub-text">土日祝日・24時間受付</span>
							<span class="btn-custom__main-text">お問い合わせ</span>
						</div>
					</div>
					<div class="btn-custom__arrow"><i class="ph ph-caret-right"></i></div>
				</a>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>
<?php
get_footer();
