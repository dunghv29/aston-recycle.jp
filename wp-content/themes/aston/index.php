<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aston
 */
?>

<?php
get_header();
?>
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('mb-5'); ?>>
                        <header class="entry-header mb-4">
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>

                            <div class="entry-meta">
                                <span class="posted-on">
                                    <?php echo get_the_date(); ?>
                                </span>
                            </div>
                        </header>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="entry-thumbnail mb-4">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium_large', array('class' => 'img-fluid')); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="entry-summary">
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary">続きを読む</a>
                        </div>
                    </article>
                <?php
                endwhile;

                get_pagination();

            else :
                ?>
                <p><?php esc_html_e('記事が見つかりませんでした。', 'aston'); ?></p>
            <?php endif; ?>
        </div>
        <div class="col-lg-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>