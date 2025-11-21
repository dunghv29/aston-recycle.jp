<?php
/**
 * Template for displaying product archives (archive-faqs.php)
 * 
 * @package aston
 */

get_header();
?>

<!-- BANNER -->
<div class="banner" <?php echo get_banner('faqs'); ?>>
    <div class="banner__overlay"></div>
    <div class="banner__content">
        <h1 class="banner__title">よくある質問</h1>
        <p class="banner__subtitle">FAQS</p>
    </div>
</div>
<div class="page-content">
    <div class="page-container">
        <!-- Breadcrumb -->
        <?php get_breadcrumb(); ?>

        <div class="page-layout">
            <?php get_sidebar('faqs') ?>
            <!-- Main content -->
            <main class="page-main">
                <?php
                $categories = get_terms(array(
                    'taxonomy' => 'faqs_category',
                    'orderby' => 'name',
                    'order' => 'DESC',
                    'hide_empty' => false,
                ));

                foreach ($categories as $category): ?>
                    <div id="accordion<?php echo esc_attr($category->term_id); ?>" class="faq__list faq__list-custom accordion">
                        <h2 class="page-main__title"><?php echo esc_html($category->name); ?></h2>
                        <?php
                        $faqs = new WP_Query(array(
                            'post_type' => 'faqs',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'faqs_category',
                                    'field' => 'term_id',
                                    'terms' => $category->term_id,
                                ),
                            ),
                        ));
                        if ($faqs->have_posts()):
                            $i = 1;
                            while ($faqs->have_posts()):
                                $faqs->the_post(); ?>
                                <div class="faq__item faq__item-custom accordion-item">
                                    <h3 class="faq__question accordion-header"
                                        id="faqBlockHeading<?php echo esc_attr($category->term_id . '-' . $i); ?>">
                                        <button class="faq__btn accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#faqCollapse<?php echo esc_attr($category->term_id . '-' . $i); ?>" aria-expanded="false"
                                            aria-controls="faqCollapse<?php echo esc_attr($category->term_id . '-' . $i); ?>">
                                            <span class="faq__icon faq__icon--q">Q</span>
                                            <span class="faq__text"><?php echo esc_html(get_the_title()); ?></span>
                                        </button>
                                    </h3>
                                    <div id="faqCollapse<?php echo esc_attr($category->term_id . '-' . $i); ?>" class="accordion-collapse collapse"
                                        aria-labelledby="faqBlockHeading<?php echo esc_attr($category->term_id . '-' . $i); ?>">
                                        <div class="faq__answer accordion-body">
                                            <span class="faq__icon faq__icon--a">A</span>
                                            <p><?php echo wp_kses_post(get_the_content()); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                $i++;
                            endwhile;
                            wp_reset_postdata();
                        else: ?>
                            <p>このカテゴリにはFAQがありません。</p>
                        <?php endif; ?>
                    </div>

                <?php endforeach; ?>
            </main>
        </div>
    </div>
</div>
<?php get_footer(); ?>