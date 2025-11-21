<?php
/**
 * Template for displaying single products
 *
 * @package aston
 */

get_header();

$is_blank = empty(trim(get_the_content()));
?>

<div class="page-content">
	<div class="page-container">
		<?php if (!$is_blank): ?>
		<!-- Breadcrumb -->
		<?php get_breadcrumb(); ?>
		<section class="blog-head">
			<!-- Category -->
			<?php
			$categories = get_the_category(get_the_ID());
			foreach ($categories as $cat):
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
		<?php endif; ?>
		<!-- Main content -->
		<?php if (!$is_blank): ?>
			<div class="page-layout-detail">
				<div class="block-content">
					<?php echo get_toc_content(get_the_content()); ?>
				</div>
			</div>
		<?php else: ?>
			<div class="page-main__content">
				<!-- If the content is blank, show "Under Construction" message -->
				<?php get_template_part('template-parts/under-construction'); ?>
			</div>
		<?php endif; ?>
	</div>
</div>
<?php
get_footer();
?>