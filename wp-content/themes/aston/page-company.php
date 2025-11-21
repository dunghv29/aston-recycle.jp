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
<!-- BANNER -->
<div class="banner" <?= get_page_banner() ?>>
    <div class="banner__overlay"></div>
    <div class="banner__content">
        <h1 class="banner__title"><?= esc_html(the_title()) ?></h1>
        <p class="banner__subtitle"><?= esc_html(ucfirst(get_post_field('post_name', get_post()))) ?></p>
    </div>
</div>

<div class="page-company">
    <div class="page-container">
        <!-- Breadcrumb -->
        <?= get_breadcrumb() ?>
    </div>

    <section class="company-info">
        <h2 class="section-title section-title--company"><?= esc_html(the_title()) ?></h2>
        <div class="company-table">
            <!-- Row 1 -->
            <div class="company-info__row">
                <div class="company-info__label">
                    <span>会</span>
                    <span>社</span>
                    <span>概</span>
                    <span>要</span>
                </div>
                <div class="company-info__value">株式会社 木村商事</div>
            </div>

            <!-- Row 2 -->
            <div class="company-info__row">
                <div class="company-info__label">
                    <span>会</span>
                    <span>社</span>
                    <span>Ｕ</span>
                    <span>Ｒ</span>
                    <span>Ｌ</span>
                </div>
                <div class="company-info__value">
                    <a href="<?= home_url() ?>" target="_blank" class="company-info__link"><?= home_url() ?></a>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="company-info__row">
                <div class="company-info__label">
                    <span>店</span>
                    <span>舗</span>
                    <span>住</span>
                    <span>所</span>
                </div>
                <div class="company-info__value">
                    〒414-0036 静岡県伊東市宮川町1-6-12 <br>
                    〒410-0871 静岡県沼津市西間門262-1 <br>
                    〒414-0051 静岡県伊東市吉田142
                </div>
            </div>

            <!-- Row 4 -->
            <div class="company-info__row">
                <div class="company-info__label">
                    <span>連</span>
                    <span>絡</span>
                    <span>先</span>
                </div>
                <div class="company-info__value">
                    TEL：0557-48-6411 <br>
                    FAX：0557-48-6455
                </div>
            </div>

            <!-- Row 5 -->
            <div class="company-info__row">
                <div class="company-info__label">
                    <span>設</span>
                    <span>立</span>
                    <span>日</span>
                </div>
                <div class="company-info__value">平成23年3月23日</div>
            </div>

            <!-- Row 6 -->
            <div class="company-info__row">
                <div class="company-info__label">
                    <span>代</span>
                    <span>表</span>
                    <span>取</span>
                    <span>締</span>
                    <span>役</span>
                </div>
                <div class="company-info__value">木村友保</div>
            </div>

            <!-- Row 7 -->
            <div class="company-info__row">
                <div class="company-info__label">
                    <span>主</span>
                    <span>な</span>
                    <span>事</span>
                    <span>業</span>
                    <span>内</span>
                    <span>容</span>
                </div>
                <div class="company-info__value">家電・家具の買取・販売</div>
            </div>
        </div>
    </section>
    <section class="message">
        <div class="message__container">
            <div class="message__header">
                <h2 class="message__title">ASTON Message</h2>
                <div class="message__subtitle">代表挨拶</div>
            </div>

            <div class="message__content">
                <!-- Left -->
                <div class="message__image">
                    <!-- Thay ảnh thực tế ở đây -->
                    <img src="https://picsum.photos/id/1016/400/200" alt="代表写真">

                </div>

                <!-- Right -->
                <div class="message__text">
                    <h3 class="message__heading">代表挨拶</h3>
                    <div class="message__name">木村友保</div>
                    <div class="message__role">肩書肩書</div>

                    <p class="message__paragraph">
                        私たちは、地域の皆さまに支えられ、これまで多くのお客様との出会いを通じて、リサイクルの大切さを深く実感してきました。
                        捨てられてしまうはずの品々が、再び誰かの手に渡り、生活に役立つ。
                        これこそがリサイクルの素晴らしさであり、私たちが目指す社会です。
                    </p>

                    <p class="message__paragraph">
                        「アストン」では、不⽤になったものをただ買い取るだけでなく、地域社会と地球環境に貢献することを⽬指しています。
                        大切な資源を無駄にせず、次世代へ引き継いでいくリサイクル活動を通じて、持続可能な未来を築くお⼿伝いをしたいと考えています。
                    </p>

                    <p class="message__paragraph">
                        これからも皆さまに信頼されるリサイクルショップとして、地域に根差し、共に成⻑していけるよう努めてまいります。
                        どんなご相談でもお気軽にお寄せください。皆さまの⽣活の⼀助となれることを⼼から願っております。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="company-section">
        <div class="company-section__container">
            <h2 class="section-title section-title--company">Aston伊東本店</h2>
            <div class="company-table">
                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>郵</span>
                        <span>便</span>
                        <span>番</span>
                        <span>号</span>
                    </div>
                    <div class="company-info__value">〒414-0035</div>
                </div>

                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>所</span>
                        <span>在</span>
                        <span>地</span>
                    </div>
                    <div class="company-info__value">静岡県伊東市南町2丁目1-20</div>
                </div>

                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>Ｆ</span>
                        <span>Ａ</span>
                        <span>Ｘ</span>
                    </div>
                    <div class="company-info__value">0557-52-3680</div>
                </div>

                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>代</span>
                        <span>表</span>
                        <span>取</span>
                        <span>締</span>
                        <span>役</span>
                    </div>
                    <div class="company-info__value">木村友保</div>
                </div>

                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>貝</span>
                        <span>取</span>
                        <span>専</span>
                        <span>用</span>
                        <span>番</span>
                        <span>号</span>
                    </div>
                    <div class="company-info__value">0557-52-3677（買取専用フリーダイヤル）</div>
                </div>
            </div>

            <!-- Map -->
            <div class="company-map">
                <?php 
                $map_iframe_ito = get_theme_mod('aston_map_ito_honten', '');
                if (!empty($map_iframe_ito)): 
                    echo aston_sanitize_iframe($map_iframe_ito);
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

    <section class="company-section">
        <div class="company-section__container">
            <h2 class="section-title section-title--company">Aston沼津店</h2>
            <div class="company-table">
                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>郵</span>
                        <span>便</span>
                        <span>番</span>
                        <span>号</span>
                    </div>
                    <div class="company-info__value">〒414-0035</div>
                </div>

                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>所</span>
                        <span>在</span>
                        <span>地</span>
                    </div>
                    <div class="company-info__value">静岡県伊東市南町2丁目1-20</div>
                </div>

                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>Ｆ</span>
                        <span>Ａ</span>
                        <span>Ｘ</span>
                    </div>
                    <div class="company-info__value">0557-52-3680</div>
                </div>

                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>代</span>
                        <span>表</span>
                        <span>取</span>
                        <span>締</span>
                        <span>役</span>
                    </div>
                    <div class="company-info__value">木村友保</div>
                </div>

                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>買</span>
                        <span>取</span>
                        <span>専</span>
                        <span>用</span>
                        <span>番</span>
                        <span>号</span>
                    </div>
                    <div class="company-info__value">0557-52-3677（買取専用フリーダイヤル）</div>
                </div>
            </div>

            <!-- Map -->
            <div class="company-map">
                <?php 
                $map_iframe_numazu = get_theme_mod('aston_map_numazu', '');
                if (!empty($map_iframe_numazu)): 
                    echo aston_sanitize_iframe($map_iframe_numazu);
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

    <section class="company-section">
        <div class="company-section__container">
            <h2 class="section-title section-title--company">Astonアンティーク</h2>
            <div class="company-table">
                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>郵</span>
                        <span>便</span>
                        <span>番</span>
                        <span>号</span>
                    </div>
                    <div class="company-info__value">〒414-0035</div>
                </div>

                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>所</span>
                        <span>在</span>
                        <span>地</span>
                    </div>
                    <div class="company-info__value">静岡県伊東市南町2丁目1-20</div>
                </div>

                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>Ｆ</span>
                        <span>Ａ</span>
                        <span>Ｘ</span>
                    </div>
                    <div class="company-info__value">0557-45-3968</div>
                </div>

                <div class="company-info__row">
                    <div class="company-info__label">
                        <span>代</span>
                        <span>表</span>
                        <span>取</span>
                        <span>締</span>
                        <span>役</span>
                    </div>
                    <div class="company-info__value">木村友保</div>
                </div>

                <div class="company-info__row">
                    <div class="company-info__label">
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