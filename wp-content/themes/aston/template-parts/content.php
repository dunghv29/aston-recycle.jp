
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
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
		<?php if (has_excerpt()): ?>
			<p class="blog-card__excerpt"><?php the_excerpt(); ?></p>
		<?php endif; ?>
	</div>
</article>
