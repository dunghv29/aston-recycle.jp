<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package aston
 */

get_header();
?>

<div class="page-content">
	<div class="page-container">
		<!-- Breadcrumb -->
		<?php get_breadcrumb(); ?>

		<div class="page-layout">
			<?php get_sidebar(); ?>
			<!-- Main content -->
			<main class="page-main">
				<?php if (have_posts()) : ?>
					<h2 class="page-main__title">
						<?php
						/* translators: %s: search query */
						printf(esc_html__('検索結果: "%s"', 'aston'), '<span>' . get_search_query() . '</span>');
						?>
					</h2>
					<p class="search-results-count">
						<?php
						/* translators: %s: number of results */
						printf(esc_html__('%s件の結果が見つかりました', 'aston'), $wp_query->found_posts);
						?>
					</p>

					<!-- Blog Grid -->
					<div class="blog-grid">
						<?php
						while (have_posts()) :
							the_post();
							?>
							<article class="blog-card">
								<a href="<?php the_permalink(); ?>" class="blog-card__image-link">
									<?php 
									if (has_post_thumbnail()) {
										the_post_thumbnail('medium', array('class' => 'blog-card__image'));
									} else {
										echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/placeholder.jpg') . '" alt="" class="blog-card__image">';
									}
									?>
								</a>
								<div class="blog-card__body">
									<div class="blog-card__meta">
										<?php
										$categories = get_the_category();
										if ($categories) {
											foreach ($categories as $cat) :
												?>
												<a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"
													class="blog-category"><?php echo esc_html($cat->name); ?></a>
											<?php 
											endforeach;
										}
										?>
										<span class="blog-card__date"><?php echo get_the_date(); ?></span>
									</div>
									<h3 class="blog-card__title">
										<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h3>
									<div class="blog-card__excerpt">
										<?php the_excerpt(); ?>
									</div>
								</div>
							</article>
						<?php
						endwhile;
						?>
					</div>

					<?php get_pagination(); ?>

				<?php else : ?>
					<div class="no-results">
						<h2 class="page-main__title"><?php esc_html_e('検索結果が見つかりませんでした', 'aston'); ?></h2>
						<p><?php esc_html_e('別のキーワードで検索してみてください。', 'aston'); ?></p>
						
						<!-- Search Form -->
						<div class="search-form-wrapper mt-4">
							<?php get_search_form(); ?>
						</div>
					</div>
				<?php endif; ?>
			</main>
		</div>
	</div>
</div>

<?php
get_footer();
