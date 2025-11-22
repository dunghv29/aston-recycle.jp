<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aston
 */

get_header();

?>

<?php if (has_post_thumbnail()): ?>
<section class="hero hero--antiques" <?php echo get_page_banner(); ?>>
</section>
<?php endif; ?>

<section class="about-antiques"
    style="background: url('<?php echo esc_url(get_template_directory_uri() . '/assets/images/bg-antique.jpeg'); ?>') no-repeat center/cover;">
    <!-- <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/border-01.png'); ?>" class="img-border img-border--bottom"
		alt="" />
	<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/border-02.png'); ?>" class="img-border img-border--top"
		alt="" /> -->
    <h2 class="section-title section-title--antiques font-sans-serif">
        <span class="section-subtitle">＼ リサイクルショップAstonの ／</span>
        Astonアンティークの魅力
    </h2>

    <div class="about-antiques__cards">
        <!-- Card 1 -->
        <div class="about-antiques__card">
            <div class="about-antiques__card-image">
                <img height="250px"
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/card-antiques_01.jpeg'); ?>"
                    alt="アンティーク家具">
                <div class="about-antiques__card-tag">本格英国アンティーク家具</div>
            </div>
            <div class="about-antiques__card-body">
                <p>
                    アストンアンティークスでは英国アンティーク家具をメインに取り扱っています。
                    英国アンティーク家具は緻密な手彫りの装飾やクラシックなデザインが施され、
                    ヴィクトリア朝やジョージアン様式などの歴史的なスタイルを反映し、
                    時と共に深まる風合いがその価値を一層引き立てる点が魅力です。
                </p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="about-antiques__card">
            <div class="about-antiques__card-image">
                <img height="250px"
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/card-antiques_02.jpeg'); ?>"
                    alt="メンテナンス">
                <div class="about-antiques__card-tag">徹底したメンテナンス</div>
            </div>
            <div class="about-antiques__card-body">
                <p>
                    徹底した清掃を細部まで行い、定期的なメンテナンスも施していますので、
                    購入した商品はすぐに安心してご利用いただけます。
                </p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="about-antiques__card">
            <div class="about-antiques__card-image">
                <img height="250px"
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/card-antiques_03.jpeg'); ?>"
                    alt="低価格">
                <div class="about-antiques__card-tag">業界最安値の実現</div>
            </div>
            <div class="about-antiques__card-body">
                <p>
                    独自のルートで仕入れたアンティーク家具は、自社専門スタッフによる補修・修繕を経て、
                    徹底的なコストカットを実現しています。そのため、破格とも言える価格での販売が可能となっています。
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Section PRODUCTS -->
<section class="products product--antiques aston-gallery">
    <!-- <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/border-03.png'); ?>" class="img-border img-border--top"
		alt="" /> -->
    <h2 class="section-title section-title--antiques">
        <span class="mb-4 d-inline-block font-sans-serif">取り扱いアンティーク商品</span>
        <span class="section-subtitle"><span class="color-secondary">他ジャンル・多種多様</span>な商品を取り扱っております！</span>
    </h2>
    <div class="products__grid products__grid-antiques">
        <?php
		$args = array(
			'post_type' => 'antique_products',
			'posts_per_page' => -1,
			'orderby' => 'menu_order',
			'order' => 'ASC'
		);
		$query = new WP_Query($args);
		
		if ($query->have_posts()):
			while ($query->have_posts()):
				$query->the_post();
				$product_link = get_post_meta(get_the_ID(), '_product_link', true);
                $link_url = !empty($product_link) ? esc_url($product_link) : '#';
				?>
        <div class="product-card">
            <a href="<?php echo $link_url; ?>">
                <?php if (has_post_thumbnail()): ?>
                <?php the_post_thumbnail('medium', array('class' => 'product-card__image', 'alt' => get_the_title())); ?>
                <?php endif; ?>
                <div class="product-card__content">
                    <div class="product-card__title"><?php echo esc_html(get_the_title()); ?></div>
                </div>
                <div class="product-card__arrow"><i class="ph ph-caret-right"></i></div>
            </a>
        </div>
        <?php endwhile;
			wp_reset_postdata();
		endif;
		?>
    </div>

    <div class="text-center product__note">
        他にも<span class="color-secondary">多数の多様な商品</span>を取り扱っています。
    </div>
</section>

<section class="brand-section">
    <h2 class="section-title section-title--antiques font-sans-serif">取り扱いブランド例</h2>
    <!-- Swiper Container -->
    <div class="swiper brand-swiper">
        <div class="swiper-wrapper">
            <?php
			$brand_query = new WP_Query(array(
				'post_type' => 'brand_logos',
				'posts_per_page' => -1,
				'orderby' => 'menu_order',
				'order' => 'ASC'
			));
			
			if ($brand_query->have_posts()):
				while ($brand_query->have_posts()):
					$brand_query->the_post();
					if (has_post_thumbnail()):
						$brand_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
						?>
            <div class="swiper-slide">
                <a href="<?php echo esc_url($brand_image_url); ?>" class="glightbox" data-gallery="gallery-brands"
                    data-title="<?php echo esc_attr(get_the_title()); ?>">
                    <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                </a>
            </div>
            <?php endif;
				endwhile;
				wp_reset_postdata();
			endif;
			?>
        </div>

        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Brand List -->
    <div class="brand-list">
        カリモク / カリモクマーニ / マルニ / コスガ / 横浜Danielle / どレクセル / 北海道民芸家具 / イギリスアンティーク / フランスアンティーク/ U.S.A家具 / ナルミ / ノリタケ / 大倉陶園 /ロイヤルコペンハーゲン / バカラ etc..
    </div>
</section>


<section class="antique-section">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/border-04.png'); ?>"
        class="img-border img-border--top" alt="">
    <h2 class="section-title section-title--antiques font-sans-serif">
        <span class="mb-4 d-inline-block">一押しアンティーク</span>
    </h2>
    <!-- Swiper Container -->
    <div class="swiper antique-swiper">
        <div class="swiper-wrapper">
            <?php
			$query = new WP_Query([
				'post_type' => 'post',
				'category_name' => '一押しアンティーク',
				'posts_per_page' => 10,
			]);

			if ($query->have_posts()):
				while ($query->have_posts()):
					$query->the_post();
					?>
            <!-- Slide Item -->
            <div class="swiper-slide">
                <article class="blog-card">
                    <a href="<?php the_permalink(); ?>" class="blog-card__image-link">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'blog-card__image']); ?>
                    </a>
                    <div class="blog-card__body">
                        <div class="blog-card__meta">
                            <?php
									$categories = get_the_category();
									if ($categories):
										foreach ($categories as $cat): ?>
                            <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>" class="blog-category">
                                <?php echo esc_html($cat->name); ?>
                            </a>
                            <?php endforeach;
									endif;
									?>
                            <span class="blog-card__date"><?php echo get_the_date(); ?></span>
                        </div>
                        <h3 class="blog-card__title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <div class="blog-card__tags">
                            <?php
									$tags = get_the_tags();
									if ($tags):
										foreach ($tags as $tag):
											?>
                            <span>#<?php echo esc_html($tag->name); ?></span>
                            <?php
										endforeach;
									endif;
									?>
                        </div>
                    </div>
                </article>
            </div>
            <?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
        </div>


        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Button -->
    <div class="more-btn-wrap">
        <a href="<?php echo esc_url(get_category_link(get_cat_ID('一押しアンティーク'))); ?>" class="more-btn">ブログ一覧を見る
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                <path
                    d="M15 7.5C15 3.358 11.642 0 7.5 0C3.358 0 -5.96046e-08 3.358 -5.96046e-08 7.5C-5.96046e-08 11.642 3.358 15 7.5 15C11.642 15 15 11.642 15 7.5ZM7.92375 8.78575H3.25V6.21425L7.92375 6.21425V3.5L11.75 7.5L7.92375 11.5L7.92375 8.78575Z"
                    fill="auto"></path>
            </svg>
        </a>
    </div>
</section>

<section class="aston-gallery" aria-labelledby="aston-gallery-title">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/border-05.png'); ?>"
        class="img-border img-border--left" alt="" />
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/border-06.png'); ?>"
        class="img-border img-border--right" alt="" />

    <h2 class="section-title aston-gallery__title font-sans-serif">
        Astonアンティーク店内の様子
    </h2>

    <ul class="aston-gallery__grid">
        <?php
		$gallery_query = new WP_Query(array(
			'post_type' => 'gallery_images',
			'posts_per_page' => -1,
			'orderby' => 'menu_order',
			'order' => 'ASC'
		));
		
		if ($gallery_query->have_posts()):
			while ($gallery_query->have_posts()):
				$gallery_query->the_post();
				if (has_post_thumbnail()):
					$image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
					?>
        <li class="aston-gallery__item">
            <a href="<?php echo esc_url($image_url); ?>" class="glightbox" data-gallery="gallery-antiques"
                data-title="<?php echo esc_attr(get_the_title()); ?>">
                <figure class="aston-gallery__figure">
                    <?php the_post_thumbnail('medium', array('alt' => get_the_title(), 'loading' => 'lazy', 'decoding' => 'async')); ?>
                </figure>
            </a>
        </li>
        <?php endif;
			endwhile;
			wp_reset_postdata();
		endif;
		?>
    </ul>
</section>

<section class="buy-antiques">
    <h2 class="section-title section-title--antiques font-sans-serif">
        アンティーク買取
    </h2>
    <div class="buy-antiques__wrap">
        <figure class="buy-antiques__photo">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/purchase.jpeg'); ?>"
                alt="アンティーク家具の店内" />
        </figure>
        <article class="buy-antiques__panel">
            <h3 class="panel__heading font-sans-serif">アンティークの買取もお任せください</h3>
            <p class="panel__p">アンティーク家具の買取はお任せください。専門スタッフが実際にご自宅までお伺いし、丁寧に査定いたします。</p>
            <p class="panel__p">アンティーク家具を専門に扱っているため、他店よりも高額での買取が可能です。</p>
            <p class="panel__p">さらに、ブランド食器や絵画、照明器具なども買取対象としておりますので、お気軽にご相談ください。</p>
        </article>
    </div>
</section>


<section class="onsite">
    <div class="">
        <h2 class="section-title onsite__title">出張買取</h2>
        <p class="onsite__lead">Astonでは出張買取を行なっております。多種多様な買取を行なっているので、まずはお気軽にお問い合わせください。</p>
        <a class="btn-onsite" href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">
            <span>ブログ一覧を見る</span>
            <i class="ph ph-arrow-circle-right"></i>
        </a>
    </div>
</section>

<section class="company-section">
    <div class="company-section__container">
        <h2 class="section-title section-title--antiques font-sans-serif">アクセス情報</h2>
        <div class="company-table">
            <div class="company-info__row">
                <div class="company-info__label color-secondary">
                    <span>郵</span>
                    <span>便</span>
                    <span>番</span>
                    <span>号</span>
                </div>
                <div class="company-info__value">〒414-0051</div>
            </div>

            <div class="company-info__row">
                <div class="company-info__label color-secondary">
                    <span>所</span>
                    <span>在</span>
                    <span>地</span>
                </div>
                <div class="company-info__value">静岡県伊東市吉田142</div>
            </div>

            <div class="company-info__row">
                <div class="company-info__label color-secondary">
                    <span>Ｆ</span>
                    <span>Ａ</span>
                    <span>Ｘ</span>
                </div>
                <div class="company-info__value">0557-45-3968</div>
            </div>

            <div class="company-info__row">
                <div class="company-info__label color-secondary">
                    <span>代</span>
                    <span>表</span>
                    <span>取</span>
                    <span>締</span>
                    <span>役</span>
                </div>
                <div class="company-info__value">木村友保</div>
            </div>

            <div class="company-info__row">
                <div class="company-info__label color-secondary">
                    <span>買</span>
                    <span>取</span>
                    <span>専</span>
                    <span>用</span>
                    <span>番</span>
                    <span>号</span>
                </div>
                <div class="company-info__value">0557-52-3677 (買取専用ダイヤル)</div>
            </div>
        </div>

        <!-- Map -->
        <div class="company-map">
            <?php 
                $map_iframe_antique = get_theme_mod('aston_map_antique', '');
                if (!empty($map_iframe_antique)): 
                    echo aston_sanitize_iframe($map_iframe_antique);
                else:
                ?>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6845.467335107917!2d139.75910842954855!3d35.676634571600474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x605d1b87f02e57e7%3A0x2e01618b22571b89!2zVMO0a3nDtCwgTmjhuq10IELhuqNu!5e0!3m2!1svi!2s!4v1755877484372!5m2!1svi!2s"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <?php endif; ?>
        </div>
    </div>
</section>
<?php
get_footer();