
<div class="no-results">
	<h2><?php esc_html_e('記事が見つかりませんでした。', 'aston'); ?></h2>
	<?php if (is_search()): ?>
		<p><?php esc_html_e('検索キーワードを変更して、もう一度お試しください。', 'aston'); ?></p>
		<?php get_search_form(); ?>
	<?php else: ?>
		<p><?php esc_html_e('該当する記事が見つかりませんでした。', 'aston'); ?></p>
	<?php endif; ?>
</div>
