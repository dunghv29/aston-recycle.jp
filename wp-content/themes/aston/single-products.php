<?php
/**
 * Template for displaying single products
 *
 * @package aston
 */

get_header();
?>
<div class="page-content">
	<div class="page-container">
		<!-- Breadcrumb -->
		<?php get_breadcrumb(); ?>
		<section class="blog-head">
			<!-- Category -->
			<?php
			$terms = get_the_terms(get_the_ID(), 'products_category');
			foreach ($terms as $cat):
				?>
				<span class="blog-category blog-category--lg"><?php echo esc_html($cat->name); ?></span>
			<?php endforeach; ?>
			<!-- Title -->
			<h1 class="blog-head__title">
				<?php the_title(); ?>
			</h1>

			<!-- Date -->
			<time class="blog-head__date"><?php echo esc_html(get_the_date()); ?></time>

			<!-- Eyecatch -->
			<div class="blog-head__eyecatch">
				 <?php the_post_thumbnail('full'); ?>
			</div>
		</section>
		<div class="page-layout-detail">
			<div class="toc">
				<p class="toc__title">目次</p>
				<ul class="toc__list">
					<li>
						<a href="#h2-1">h2タイトル</a>
						<ul>
							<li><a href="#h3-1">h3-1タイトル</a></li>
							<li><a href="#h3-2">h3-2タイトル</a></li>
							<li><a href="#h3-3">h3-3タイトル</a></li>
						</ul>
					</li>
					<li><a href="#">h2タイトル</a></li>
				</ul>
			</div>
			<div>
				<div class="block-content">
					<?php echo  esc_html(the_content()) ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>