<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aston
 */
?>

<!-- Sidebar -->
<aside class="page-sidebar">
	<!-- Categories -->
	<div class="card-box">
		<h3 class="card-box__title">カテゴリー一覧</h3>
		<ul class="card-box__list">
			<?php
			$categories = get_categories(array(
				'taxonomy'   => 'jobs',
				'orderby' => 'name',
				'order' => 'ASC',
				'hide_empty' => false,
			));

			if (empty($categories)) {
				?>
				<li class="card-box__item">カテゴリーが見つかりません</li>
				<?php
			} else {
				foreach ($categories as $category) {
					?>
					<li class="card-box__item">
						<a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="card-box__link">
							<?php echo esc_html($category->name); ?>
							<span class="card-box__icon"><i class="ph ph-arrow-right"></i></span>
						</a>
					</li>
					<?php
				}
			}
			?>
		</ul>
	</div>
	
	<div class="blog-sidebar__actions">
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
		<a href="<?php echo  esc_url(get_theme_mod('aston_contact_url', '#')); ?>" class="btn-custom btn-custom-warning">
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
</aside>