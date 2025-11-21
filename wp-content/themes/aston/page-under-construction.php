<?php
/**
 * Template Name: Under Construction
 *
 * A simple page template that displays an "Under Construction" message
 * using the theme header and footer and a shared template part.
 *
 * @package aston
 */

get_header();

?>

<main id="primary" class="site-main">
    <div class="container">
        <?php get_template_part('template-parts/under-construction'); ?>
    </div>
</main>

<?php
get_footer();
