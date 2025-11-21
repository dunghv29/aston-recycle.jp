<?php
/**
 * Template for displaying product archives (archive-jobs.php)
 * 
 * @package aston
 */

get_header();
?>
<!-- BANNER -->
<div class="banner" <?php echo get_banner('jobs'); ?>>
    <div class="banner__overlay"></div>
    <div class="banner__content">
        <h1 class="banner__title">Astonスタッフブログ</h1>
        <p class="banner__subtitle">Jobs</p>
    </div>
</div>
<div class="page-content">
    <div class="page-container">
        <!-- Breadcrumb -->
        <?php get_breadcrumb(); ?>

        <div class="page-layout">
            <?php get_sidebar('jobs') ?>
            <!-- Main content -->
            <main class="page-main">
                <h2 class="page-main__title">
                    <?php
                    if (is_post_type_archive('jobs')) {
                        post_type_archive_title();
                    } elseif (is_singular('jobs')) {
                        the_title();
                    }
                    ?>
                </h2>

                <?php if (have_posts()): ?>
                    <div class="blog-grid">
                        <?php while (have_posts()): the_post(); ?>
                            <article class="blog-card">
                                <a href="<?php the_permalink(); ?>" class="blog-card__image-link">
                                    <?php the_post_thumbnail('medium', array('class' => 'blog-card__image')); ?>
                                </a>
                                <div class="blog-card__body">
                                    <div class="blog-card__meta">
                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'jobs_category');
                                        if ($terms && !is_wp_error($terms)):
                                            foreach ($terms as $term): ?>
                                                <a href="<?php echo esc_url(get_term_link($term)); ?>" class="blog-category">
                                                    <?php echo esc_html($term->name); ?>
                                                </a>
                                        <?php
                                            endforeach;
                                        endif;
                                        ?>
                                    </div>
                                    <h3 class="blog-card__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <div class="blog-card__excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                    <!-- Pagination -->
                    <div class="pagination">
                        <?php echo get_pagination(); ?>
                    </div>
                <?php else: ?>
                    <p class="no-posts-message">該当する求人情報が見つかりません。</p>
                <?php endif; ?>
            </main>
        </div>
    </div>
</div>

<?php get_footer(); ?>