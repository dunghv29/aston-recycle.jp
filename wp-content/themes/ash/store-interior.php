<?php

/**
 * Template Name: store interior
 */

?>
<?php get_header('interior')?>

<?php while (have_posts()) :
    the_post();
    the_content();
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
endwhile; ?>
<?php get_footer('interior')?>