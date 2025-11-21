<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aston
 */

?>

<!-- SECTION FOOTER -->
<footer class="footer">
    <div class="container">
        <!-- Footer Top -->
        <div class="footer__top">
            <!-- Logo -->
            <div class="footer__brand">
                <?php
                if ($footer_logo_id = get_theme_mod('aston_footer_logo')):
                    echo wp_get_attachment_image($footer_logo_id, 'full', false, array('class' => 'footer__logo'));
                else:
                    echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/footer_icon.png') . '" alt="Aston" class="footer__logo">';
                endif;
                ?>
            </div>
            <!-- Menu Columns -->
            <div class="row footer__nav">
                <div class="col-6 col-lg-3">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer_col_1',
                        'container' => false,
                        'menu_class' => 'footer__menu',
                        'fallback_cb' => false,
                    ]);
                    ?>
                </div>
                <div class="col-6 col-lg-3">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer_col_2',
                        'container' => false,
                        'menu_class' => 'footer__menu',
                        'fallback_cb' => false,
                    ]);
                    ?>
                </div>
                <div class="col-6 col-lg-3">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer_col_3',
                        'container' => false,
                        'menu_class' => 'footer__menu',
                        'fallback_cb' => false,
                    ]);
                    ?>
                </div>
                <div class="col-6 col-lg-3">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'footer_col_4',
                        'container' => false,
                        'menu_class' => 'footer__menu',
                        'fallback_cb' => false,
                    ]);
                    ?>
                </div>
            </div>
        </div>
    </div>

    <hr class="footer__divider">

    <!-- Footer Bottom -->
    <div class="footer__bottom">
        <div class="footer__bottom-inner">
            <div class="c-contact--footer">
                <div class="c-contact__circle">
                    <div class="c-contact__circle-top">
                        <div>ご依頼</div>
                        <div>お見積もり</div>
                    </div>
                    <div class="c-contact__circle-bottom">
                        無料
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <div class="c-contact__note">
                        <span class="badge c-contact__badge me-2">土日祝OK</span>
                        <span
                            class="c-contact__note-time"><?php echo esc_html(get_theme_mod('aston_business_hours', '【受付時間】10:00〜19:00')); ?></span>
                    </div>
                    <div class="c-contact__phone d-flex align-items-center gap-2 mt-1">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/c-contact-footer.png'); ?>" alt="" />
                        <span><?php echo esc_html(get_theme_mod('aston_phone', '0557-52-3677')); ?></span>
                    </div>
                </div>
            </div>
            <div class="footer__actions">
                <a href="<?php echo esc_url(get_theme_mod('aston_line_url', '#')); ?>" class="btn-default btn-default-success">
                    <div class="btn-default-inner">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-line.png'); ?>" alt="LINE">
                        <span>簡単！<br>LINE査定</span>
                    </div>
                </a>
                <a href="<?php echo esc_url(get_theme_mod('aston_contact_url', '#')); ?>"
                    class="btn-default btn-default-warning">
                    <div class="btn-default-inner">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/icon-mail.png'); ?>" alt="EMAIL">
                        <span>まずは！<br>お問い合わせ</span>
                    </div>
                </a>
            </div>
        </div>
        <div class="footer__copy">
            <?php echo wp_kses_post(get_theme_mod('aston_copyright_bottom')); ?>
        </div>
    </div>

</footer>
<?php wp_footer(); ?>

</body>

</html>