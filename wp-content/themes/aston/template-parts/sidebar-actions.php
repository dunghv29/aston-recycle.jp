<?php
/**
 * Template part for displaying sidebar action buttons (LINE and Contact).
 *
 * @package aston
 */

$line_url = esc_url(get_theme_mod('aston_line_url', '#'));
$contact_url = esc_url(get_theme_mod('aston_contact_url', '#'));
$theme_uri = get_template_directory_uri();
?>

<div class="blog-sidebar__actions">
	<a href="<?php echo $line_url; ?>" class="btn-custom btn-custom-success">
		<div class="btn-custom__left">
			<div class="btn-custom__icon">
				<img src="<?php echo $theme_uri; ?>/assets/images/icon-line.png" alt="LINE" width="40" height="40">
			</div>
			<div class="btn-custom__text">
				<span class="btn-custom__sub-text">簡単査定・24時間受付</span>
				<span class="btn-custom__main-text">LINEで査定</span>
			</div>
		</div>
		<div class="btn-custom__arrow"><i class="ph ph-caret-right"></i></div>
	</a>
	<a href="<?php echo $contact_url; ?>" class="btn-custom btn-custom-warning">
		<div class="btn-custom__left">
			<div class="btn-custom__icon">
				<img src="<?php echo $theme_uri; ?>/assets/images/icon-mail.png" alt="EMAIL" width="40" height="40">
			</div>
			<div class="btn-custom__text">
				<span class="btn-custom__sub-text">土日祝日・24時間受付</span>
				<span class="btn-custom__main-text">お問い合わせ</span>
			</div>
		</div>
		<div class="btn-custom__arrow"><i class="ph ph-caret-right"></i></div>
	</a>
</div>
