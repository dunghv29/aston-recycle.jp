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
<div class="page-content">
	<div class="page-container">
		<!-- Breadcrumb -->
		<?php echo  get_breadcrumb() ?>
		
		<div class="page-layout">
			<?php get_sidebar() ?>
			<!-- Main content -->
			<main class="page-main">
				<h2 class="page-main__title"><?php single_cat_title();?></h2>
				<!-- Blog Grid -->
				<div class="blog-grid">
					<?php
					if (have_posts()):
						while (have_posts()):
							the_post();
							?>
							<article class="blog-card">
								<a href="<?php echo  get_the_permalink() ?>" class="blog-card__image-link">
									<?php echo  get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'blog-card__image')) ?>
								</a>
								<div class="blog-card__body">
									<div class="blog-card__meta">
										<?php
										$categories = get_the_category(get_the_ID());
										foreach ($categories as $cat):
											?>
											<a href="<?php echo  esc_url(get_category_link($cat->term_id)) ?>"
												class="blog-category"><?php echo  esc_html($cat->name) ?></a>
										<?php endforeach; ?>
										<span class="blog-card__date"><?php echo  get_the_date() ?></span>
									</div>
									<h3 class="blog-card__title">
										<a href="<?php echo  get_the_permalink() ?>"><?php echo  get_the_title() ?></a>
									</h3>
									<div class="blog-card__tags">
										<?php
										$tags = get_the_tags(get_the_ID());
										if ($tags):
											foreach ($tags as $tag): ?>
												<span>#<?php echo  esc_html($tag->name) ?></span>
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
				<?php echo get_pagination()?>
			</main>
		</div>
	</div>
</div>
<?php
get_footer();
