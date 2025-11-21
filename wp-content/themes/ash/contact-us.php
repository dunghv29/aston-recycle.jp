<?php

/**
 * Template Name: Contact us
 */

?>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
get_header('purchase');
while (have_posts()) :
    the_post();
    the_content();
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
endwhile;
get_footer('purchase')?>
