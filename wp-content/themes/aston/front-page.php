<?php

/**
 * Template for displaying the front page
 *
 * @package aston
 */

get_header();
?>

<!-- Section HERO -->
<section class="hero" <?php echo get_banner('home'); ?>>
    <div class="hero-content">
        <div class="mb-3">
            <span class="hero__tooltip" data-customize-partial-id="aston_banner_tooltip_text"> <?php echo esc_html(get_theme_mod('aston_banner_tooltip_text')); ?></span>
        </div>
        <h1 class="headline" data-customize-partial-id="aston_banner_title"> <?php echo esc_html(get_theme_mod('aston_banner_title')); ?></h1>

        <div class="hero__buttons d-flex justify-content-center mb-4 flex-wrap">
            <div>
                <p class="sub-text">＼ スマホの写真で撮って送るだけ ／</p>
                <a href="<?php echo esc_url(get_theme_mod('aston_line_url', '#')); ?>"
                    class="btn-custom btn-custom-success">
                    <div class="btn-custom__left">
                        <div class="btn-custom__icon">
                            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icon-line.png"); ?>" alt="LINE">
                        </div>
                        <div class="btn-custom__text">
                            <span class="btn-custom__sub-text">簡単査定・24時間受付</span>
                            <span class="btn-custom__main-text">LINEで査定</span>
                        </div>
                    </div>
                    <div class="btn-custom__arrow"><i class="ph ph-caret-right"></i></div>
                </a>
            </div>
            <div>
                <p class="sub-text">まずはお気軽にお問い合わせください！</p>
                <a href="<?php echo esc_url(get_theme_mod('aston_contact_url', '#')); ?>"
                    class="btn-custom btn-custom-warning">
                    <div class="btn-custom__left">
                        <div class="btn-custom__icon">
                            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icon-mail.png"); ?>" alt="EMAIL">
                        </div>
                        <div class="btn-custom__text">
                            <span class="btn-custom__sub-text">土日祝日・24時間受付</span>
                            <span class="btn-custom__main-text">お問い合わせ</span>
                        </div>
                    </div>
                    <div class="btn-custom__arrow"><i class="ph ph-caret-right"></i></div>
                </a>
            </div>
        </div>

        <!-- 3 BOXES -->
        <div class="hero-boxes">
            <div class="hero-box">
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/hero-box-left.png"); ?>" alt="">
                <div class="price-text">
                    <span class="top">査定費・出張費無料</span>
                    <span class="bottom"><?php echo esc_html(get_theme_mod('aston_banner_feature_1')); ?></span>
                </div>
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/hero-box-right.png"); ?>" alt="" />
            </div>

            <div class="hero-box">
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/hero-box-left.png"); ?>" alt="">
                <div class="price-text">
                    <span class="top">熟練の査定員多数！</span>
                    <span class="bottom"><?php echo esc_html(get_theme_mod('aston_banner_feature_2')); ?></span>
                </div>
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/hero-box-right.png"); ?>" alt="" />
            </div>

            <div class="hero-box">
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/hero-box-left.png"); ?>" alt="">
                <div class="price-text">
                    <span class="top">即日対応！</span>
                    <span class="bottom"><?php echo esc_html(get_theme_mod('aston_banner_feature_3')); ?></span>
                </div>
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/hero-box-right.png"); ?>" alt="" />
            </div>
        </div>
    </div>
</section>

<!-- Section SERVICE -->
<section class="service">
    <div class="service__container">
        <h2 class="section-title">
            <span class="section-subtitle">＼ リサイクルショップAstonの ／</span>
            サービス内容
        </h2>
        <?php
        $args = array(
            'post_type' => 'services',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $query = new WP_Query($args);
        if ($query->have_posts()):
            ?>
            <div class="service__list">
                <!-- Card 1 -->
                <?php while ($query->have_posts()):
                    $query->the_post();
                    $permalink = get_the_permalink();
                    $link_url = esc_url($permalink);
                    ?>
                    <article class="service-card">
                        <header class="service-card__header"><?php echo  get_the_title() ?></header>
                        <?php echo  get_the_post_thumbnail(get_the_ID(), 'medium', array('class' => 'service-card__image')) ?>
                        <div class="service-card__body">
                            <p class="service-card__text"><?php echo  wp_trim_words(get_the_excerpt(), 20) ?></p>
                            <a href="<?php echo  $link_url ?>" class="service-card__link">詳しく見る
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                    <path
                                        d="M15 7.5C15 3.358 11.642 0 7.5 0C3.358 0 -5.96046e-08 3.358 -5.96046e-08 7.5C-5.96046e-08 11.642 3.358 15 7.5 15C11.642 15 15 11.642 15 7.5ZM7.92375 8.78575H3.25V6.21425L7.92375 6.21425V3.5L11.75 7.5L7.92375 11.5L7.92375 8.78575Z"
                                        fill="#B91E00" />
                                </svg>
                            </a>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Section TROUBLE -->
<section class="trouble">
    <div class="trouble__content">
        <h2 class="section-title">
            <span class="section-title__highlight">こんなお悩</span>みありませんか？
        </h2>
        <p class="trouble__description">
            静岡県東部には多くのリサイクルショップや買取業者があり、どの業者に依頼すれば安心できるか迷う方もいらっしゃると思います。<br>
            そんな方は、ぜひアストンをご利用ください。当店は年間5,000件の買取実績があり、信頼性と安心感をお約束します。
        </p>

        <div class="trouble__bubbles">
            <div class="trouble__bubble trouble__bubble--left-top">
                価値がありそうなものだけど自分ではわから<br>
                ないので処分できない
            </div>
            <div class="trouble__bubble trouble__bubble--left-bottom">
                色々な業者の手配が面倒
            </div>
            <div class="trouble__bubble trouble__bubble--right-top">
                一人暮らしなので大きな<br>
                不用品が運べない
            </div>
            <div class="trouble__bubble trouble__bubble--right-bottom">
                不要な家具や家電をできるだけ高く<br>
                買い取ってくれる業者を探している
            </div>
            <div class="trouble__image">
                <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/thinking-person.png"); ?>" alt="thinking person">
            </div>
        </div>
    </div>
</section>

<!-- Section CTA -->
<section class="cta">
    <div class="cta__inner">
        <h2 class="section-title">お問い合わせはこちら</h2>
        <div class="cta__label">ご相談・お見積もり無料</div>

        <p class="cta__lead">
            最短<span class="cta__lead-em"><span class="cta__lead-num">30</span>秒</span>まずはお気軽にお問い合わせください！
        </p>

        <div class="cta__grid">
            <!-- LEFT: LINE -->
            <div class="cta__col">
                <p class="cta__caption">簡単査定・お見積もり！</p>
                <a href="<?php echo esc_url(get_theme_mod('aston_line_url', '#')); ?>"
                    class="btn-custom btn-custom-success">
                    <div class="btn-custom__left">
                        <div class="btn-custom__icon">
                            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icon-line.png"); ?>" alt="LINE">
                        </div>
                        <div class="btn-custom__text">
                            <span class="btn-custom__sub-text">簡単査定・24時間受付</span>
                            <span class="btn-custom__main-text">LINEで査定</span>
                        </div>
                    </div>
                    <div class="btn-custom__arrow"><i class="ph ph-caret-right"></i></div>
                </a>
            </div>

            <!-- RIGHT: MAIL -->
            <div class="cta__col">
                <p class="cta__caption">お申し込みは最短30秒！24時間いつでも受付中</p>
                <a href="<?php echo esc_url(get_theme_mod('aston_contact_url', '#')); ?>"
                    class="btn-custom btn-custom-warning">
                    <div class="btn-custom__left">
                        <div class="btn-custom__icon">
                            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/icon-mail.png"); ?>" alt="EMAIL">
                        </div>
                        <div class="btn-custom__text">
                            <span class="btn-custom__sub-text">土日祝日・24時間受付</span>
                            <span class="btn-custom__main-text">お問い合わせ</span>
                        </div>
                    </div>
                    <div class="btn-custom__arrow"><i class="ph ph-caret-right"></i></div>
                </a>
            </div>
        </div>
    </div>
</section>


<!-- Section REASON -->
<section class="reason">
    <div class="reason__inner">
        <p class="section-subtitle">＼ リサイクルショップAstonにおまかせください！ ／</p>
        <h2 class="section-title">
            選ばれる
            <span class="section-title__highlight">
                <span class="reason__title-num">3</span>つの理由
            </span>
        </h2>

        <div class="reason__grid">
            <!-- Card 1 -->
            <div class="reason__card">
                <div class="reason__image-wrapper">
                    <?php
                    $reason_1_image_id = get_theme_mod('aston_reason_1_image');
                    if ($reason_1_image_id) {
                        echo wp_get_attachment_image($reason_1_image_id, 'medium', false, array('class' => 'reason__image', 'alt' => '高額買取'));
                    } else {
                        echo '<img src="' . esc_url(get_template_directory_uri() . "/assets/images/severce-card-1.png") . '" alt="高額買取" class="reason__image">';
                    }
                    ?>
                    <span class="reason__badge">&nbsp;</span>
                    <span class="reason__index">1</span>
                </div>
                <div class="reason__content">
                    <h3 class="reason__card-title">
                        <?php echo wp_kses_post(get_theme_mod('aston_reason_1_title', '熟練査定員による<br><span class="color-main">高額買取</span>')); ?>
                    </h3>
                    <p class="reason__desc">
                        <?php echo wp_kses_post(get_theme_mod('aston_reason_1_desc', '年間5,000件以上の買取実績を誇り、家電・家具の相場に精通しています。相場を<br>熟知した経験豊富な査定員による査定で、高<br>額買取を実現しています！')); ?>
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="reason__card">
                <div class="reason__image-wrapper">
                    <?php
                    $reason_2_image_id = get_theme_mod('aston_reason_2_image');
                    if ($reason_2_image_id) {
                        echo wp_get_attachment_image($reason_2_image_id, 'medium', false, array('class' => 'reason__image', 'alt' => '正確な査定'));
                    } else {
                        echo '<img src="' . esc_url(get_template_directory_uri() . "/assets/images/reason-card-02.png") . '" alt="正確な査定" class="reason__image">';
                    }
                    ?>
                    <span class="reason__badge">&nbsp;</span>
                    <span class="reason__index">2</span>
                </div>
                <div class="reason__content">
                    <h3 class="reason__card-title">
                        <?php echo wp_kses_post(get_theme_mod('aston_reason_2_title', '自社データベースに<br>よる<span class="color-main">正確な査定</span>')); ?>
                    </h3>
                    <p class="reason__desc">
                        <?php echo wp_kses_post(get_theme_mod('aston_reason_2_desc', '当社は独自のデータベースをベースに明確な<br>査定と丁寧な説明を行いデータに基づく査定<br>を行うことで、安心してご利用いただけるリ<br>サイクルショップを目指しています。')); ?>
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="reason__card">
                <div class="reason__image-wrapper">
                    <?php
                    $reason_3_image_id = get_theme_mod('aston_reason_3_image');
                    if ($reason_3_image_id) {
                        echo wp_get_attachment_image($reason_3_image_id, 'medium', false, array('class' => 'reason__image', 'alt' => '迅速な対応'));
                    } else {
                        echo '<img src="' . esc_url(get_template_directory_uri() . "/assets/images/reason-card-03.png") . '" alt="迅速な対応" class="reason__image">';
                    }
                    ?>
                    <span class="reason__badge">&nbsp;</span>
                    <span class="reason__index">3</span>
                </div>
                <div class="reason__content">
                    <h3 class="reason__card-title">
                        <?php echo wp_kses_post(get_theme_mod('aston_reason_3_title', '貴重な時間を無駄に<br>しない<span class="color-main">迅速</span>な対応')); ?>
                    </h3>
                    <p class="reason__desc">
                        <?php echo wp_kses_post(get_theme_mod('aston_reason_3_desc', 'お客様の貴重なお時間を無駄にせず、出張買<br>取や店舗への持ち込み時、その場で現金をお<br>渡しするサービスを提供しています。')); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section PRODUCTS -->
<section class="products">
    <h2 class="section-title">
        <span class="section-subtitle">＼ リサイクルショップAstonの ／</span>
        買取対象商品一覧
        <span class="section-subtitle-secondary">
            <span class="color-main">他ジャンル・多種多様</span>な商品を取り扱っております！
        </span>
    </h2>
    <div class="products__grid">
        <?php
        $args = array(
            'post_type' => 'product_categories',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC'
        );
        $query = new WP_Query($args);
        
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                $subtitle = get_post_meta(get_the_ID(), '_product_category_subtitle', true);
                $link = get_post_meta(get_the_ID(), '_product_category_link', true);
                $link_url = !empty($link) ? esc_url($link) : '#';
                ?>
                <a href="<?php echo $link_url; ?>" class="product-card">
                    <?php if (has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('medium', array('class' => 'product-card__image', 'alt' => get_the_title())); ?>
                    <?php else: ?>
                        <img src="https://picsum.photos/400/200" alt="<?php echo esc_attr(get_the_title()); ?>" class="product-card__image">
                    <?php endif; ?>
                    <div class="product-card__content">
                        <div class="product-card__title"><?php echo wp_kses_post(get_the_title()); ?></div>
                        <?php if ($subtitle): ?>
                            <div class="product-card__subtitle"><?php echo esc_html($subtitle); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="product-card__arrow"><i class="ph ph-caret-right"></i></div>
                </a>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<!-- SECTION AREA -->
<section class="area">
    <h2 class="section-title">
        <span class="section-subtitle">＼ リサイクルショップAstonの ／</span>
        出張買取対応エリア
    </h2>

    <div class="area__info">
        <div class="area__info-title">
            <i class="ph ph-map-pin"></i>
            <span class="ms-2">出張買取対応エリア</span>
        </div>
        <p class="area__info-text">
            アストンは伊東市　熱海市　東伊豆町　伊豆市　伊豆国市　函南町　三島市　沼津市　清水町　富士市<br>
            を中心に買取を行っております。※上記以外のエリアにつきましてはご相談下さい。
        </p>
    </div>

    <!-- Nội dung map + list -->
    <div class="area__content">
        <div class="area__map">
            <img height="380px" src="<?= esc_url(get_template_directory_uri() . '/assets/images/shizuoka-map.png') ?>" alt="静岡県マップ">
        </div>

        <div class="area__list">
            <div class="area__list-header">静岡県のサービス対応エリア</div>
            <div class="area__list-body">
                <div class="area__list-col">
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>浜松市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>磐田市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>掛川市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>袋井市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>湖西市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>御前崎市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>湖菊川</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>森町</div>
                </div>

                <div class="area__list-col">
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>静岡市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>島田市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>焼津市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>藤枝市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>牧之原市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>吉田町</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>川根本町</div>
                </div>

                <div class="area__list-col">
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>沼津市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>熱海市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>三島市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>富士宮市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>富士市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>裾野市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>御殿場市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>伊東市</div>
                </div>

                <div class="area__list-col">
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>伊豆市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>伊豆の国市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>函南町</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>清水町</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>長泉町</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>小山町</div>
                </div>

                <div class="area__list-col">
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>下田市</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>東伊豆町</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>河津町</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>南伊豆町</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>松崎町</div>
                    <div class="area__list-item"><i class="ph ph-caret-right"></i>西伊豆町</div>
                </div>
            </div>
        </div>
</section>

<!-- SECTION ABOUT -->
<section class="about">
    <h2 class="section-title">
        <span class="section-subtitle">＼ リサイクルショップAstonの ／</span>
        サービス紹介
    </h2>

    <div class="about__list">
        <?php
        $args = array(
            'post_type' => 'stores',
            'posts_per_page' => -1,
            'orderby' => 'menu_order',
            'order' => 'ASC'
        );
        $query = new WP_Query($args);
        
        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                $store_link = get_post_meta(get_the_ID(), '_store_link', true);
                $link_url = !empty($store_link) ? esc_url($store_link) : '#';
                ?>
                <div class="about__card">
                    <div class="about__card-image">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . "/assets/images/about_01.png"); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <?php endif; ?>
                    </div>
                    <a href="<?php echo $link_url; ?>" class="about__card-footer">
                        <span class="about__card-name"><?php echo esc_html(get_the_title()); ?></span>
                        <i class="ph ph-arrow-circle-right"></i>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<!-- SECTION BLOG -->
<section class="blog">
    <div class="section-title">
        買取ブログ
    </div>

    <div class="blog__content">
        <!-- Sidebar -->
        <div class="blog__sidebar">
            <div class="blog__sidebar-title">BLOG</div>
            <div class="blog__sidebar-subtitle">お役立ち情報</div>
        </div>
        <!-- List bài viết -->
        <div class="blog__list">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $query = new WP_Query($args);
            if ($query->have_posts()):
                ?>
                <?php while ($query->have_posts()):
                    $query->the_post(); ?>
                    <a href="<?php echo  get_the_permalink() ?>" class="blog__item">
                        <span class="blog__date"><?php echo  get_the_date() ?></span>
                        <span class="blog__text"><?php echo  get_the_title() ?></span>
                    </a>
                <?php endwhile;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>

    <!-- Button -->
    <div class="blog__footer">
        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="c-btn c-btn--primary">
            ブログ一覧を見る <i class="ph ph-arrow-circle-right"></i>
        </a>
    </div>
</section>

<!-- SECTION FAQ -->
<section class="faq">
    <div class="container">
        <div class="section-title">
            くあるQ&amp;A
        </div>
        <?php
        $args = array(
            'post_type' => 'faqs',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC'
        );
        $query = new WP_Query($args);
        if ($query->have_posts()):
            ?>
            <div class="faq__list accordion" id="faqAccordion">
                <?php
                while ($query->have_posts()):
                    $query->the_post();
                    ?>
                    <!-- Item <?php echo  get_the_ID() ?> -->
                    <div class="faq__item accordion-item">
                        <h3 class="faq__question accordion-header" id="faqHeading<?php echo  get_the_ID() ?>">
                            <button class="faq__btn accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#faqCollapse<?php echo  get_the_ID() ?>" aria-expanded="false"
                                aria-controls="faqCollapse<?php echo  get_the_ID() ?>">
                                <span class="faq__icon faq__icon--q">Q</span>
                                <span class="faq__text"><?php echo  get_the_title() ?></span>
                                <!-- <span class="faq__toggle-icon"></span> -->
                            </button>
                        </h3>
                        <div id="faqCollapse<?php echo  get_the_ID() ?>" class="accordion-collapse collapse"
                            aria-labelledby="faqHeading<?php echo  get_the_ID() ?>" data-bs-parent="#faqAccordion">
                            <div class="faq__answer accordion-body">
                                <span class="faq__icon faq__icon--a">A</span>
                                <p><?php echo  get_the_content() ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div class="faq__footer">
                <a href="<?php echo  esc_url(get_post_type_archive_link('faqs')) ?>" class="c-btn c-btn--primary">よくある質問一覧を見る <i
                        class="ph ph-arrow-circle-right"></i></a>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>