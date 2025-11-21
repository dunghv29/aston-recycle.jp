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

	<!-- Categories -->
	<div class="card-box">
		<h3 class="card-box__title">カテゴリー一覧</h3>
		<ul class="card-box__list">
			<?php
			$categories = get_categories();
			if (!empty($categories)):
				foreach ($categories as $category):
					?>
					<li class="card-box__item">
						<a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="card-box__link">
							<?php echo esc_html($category->name); ?> (<?php echo esc_html($category->count); ?>)
						</a>
					</li>
				<?php endforeach;
			else: ?>
				<li class="card-box__item"><?php esc_html_e('カテゴリーが見つかりません', 'twentynineteen'); ?></li>
			<?php endif; ?>
		</ul>
	</div>

	<!-- Recommended -->
	<div class="card-box">
		<h3 class="card-box__title">おすすめ記事</h3>
		<ul class="card-box__list">
			<?php
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 5,
				'orderby' => 'date',
				'order' => 'DESC'
			);

			if (is_single()) {
				$current_post_id = get_the_ID();
				$categories = get_the_category($current_post_id);
				if (!empty($categories)) {
					$category_ids = array();
					foreach ($categories as $category) {
						$category_ids[] = $category->term_id;
					}
					$args['category__in'] = $category_ids;
					$args['post__not_in'] = array($current_post_id);
				}
			}

			$related_query = new WP_Query($args);

			if ($related_query->have_posts()):
				while ($related_query->have_posts()):
					$related_query->the_post();
					?>
					<li class="card-box__item">
						<a href="<?php the_permalink(); ?>" class="card-box__link">
							<?php echo wp_trim_words(get_the_title(), 10, '...'); ?>
						</a>
					</li>
					<?php
				endwhile;
				wp_reset_postdata();
			else:
				?>
				<li class="card-box__item">No related post</li>
			<?php endif; ?>
		</ul>
	</div>
</aside>