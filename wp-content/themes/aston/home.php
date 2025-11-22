<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aston
 */

get_header();
?>
<!-- BANNER -->
<div class="banner" <?php echo get_banner('posts'); ?>>
	<div class="banner__overlay"></div>
	<div class="banner__content">
		<h1 class="banner__title"><?php esc_html_e('Astonスタッフブログ', 'aston'); ?></h1>
		<p class="banner__subtitle">
			<?php
			if (is_category()) {
				single_cat_title();
			} elseif (is_home()) {
				$blog_page_id = get_option('page_for_posts');
				if ($blog_page_id) {
					echo esc_html(get_the_title($blog_page_id));
				} else {
					esc_html_e('Blog', 'aston');
				}
			}
			?>
		</p>
	</div>
</div>
<div class="page-content">
	<div class="page-container">
		<!-- Breadcrumb -->
		<?php get_breadcrumb(); ?>

		<div class="page-layout">
			<?php get_sidebar(); ?>
			<!-- Main content -->
			<main class="page-main">
				<h2 class="page-main__title"><?php single_cat_title(); ?></h2>
				<!-- Blog Grid -->
				<div class="blog-grid">
					<?php
					if (have_posts()):
						while (have_posts()):
							the_post();
							?>
							<article class="blog-card">
								<a href="<?php the_permalink(); ?>" class="blog-card__image-link">
									<?php the_post_thumbnail('medium', array('class' => 'blog-card__image')); ?>
								</a>
								<div class="blog-card__body">
									<div class="blog-card__meta">
										<?php
										$categories = get_the_category();
										foreach ($categories as $cat):
											?>
											<a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"
												class="blog-category"><?php echo esc_html($cat->name); ?></a>
										<?php endforeach; ?>
										<span class="blog-card__date"><?php echo get_the_date(); ?></span>
									</div>
									<h3 class="blog-card__title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<div class="blog-card__tags">
										<?php
										$tags = get_the_tags();
										if ($tags):
											foreach ($tags as $tag): ?>
												<span>#<?php echo esc_html($tag->name); ?></span>
											<?php endforeach;
										endif;
										?>
									</div>
								</div>
							</article>
							<?php
						endwhile;
					endif;
					wp_reset_postdata();
					?>
				</div>
				<?php get_pagination(); ?>
			</main>
		</div>
	</div>
</div>
<?php
get_footer();
