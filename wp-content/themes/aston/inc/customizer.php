<?php
/**
 * aston Theme Customizer
 *
 * @package aston
 */

/**
 * Register theme customizer settings
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function aston_customize_register($wp_customize)
{
    /**
     * Custom Textarea Control for Customizer
     */
    class Aston_Customize_Textarea_Control extends WP_Customize_Control {
        public $type = 'textarea';
        
        public function render_content() {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <?php if (!empty($this->description)): ?>
                    <span class="description customize-control-description"><?php echo esc_html($this->description); ?></span>
                <?php endif; ?>
                <textarea rows="8" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>
            </label>
            <?php
        }
    }

    // Change Site Identity section title to Sites
    $wp_customize->get_section('title_tagline')->title = __('Sites', 'aston');

    // Remove unwanted sections
    $wp_customize->remove_section('colors');
    $wp_customize->remove_section('widgets');
    $wp_customize->remove_section('background_image');
    $wp_customize->remove_section('header_image');

    // Phone Number
    $wp_customize->add_setting('aston_phone', array(
        'default' => '0557-52-3677',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('aston_phone', array(
        'label' => __('電話番号', 'aston'),
        'section' => 'title_tagline',
        'settings' => 'aston_phone',
        'type' => 'text',
    ));

    // Business Hours
    $wp_customize->add_setting('aston_business_hours', array(
        'default' => '【受付時間】10:00〜19:00',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('aston_business_hours', array(
        'label' => __('営業時間', 'aston'),
        'section' => 'title_tagline',
        'settings' => 'aston_business_hours',
        'type' => 'text',
    ));

    // LINE Button URL
    $wp_customize->add_setting('aston_line_url', array(
        'default' => '#',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('aston_line_url', array(
        'label' => __('LINEボタンURL', 'aston'),
        'section' => 'title_tagline',
        'settings' => 'aston_line_url',
        'type' => 'url',
    ));

    // Contact Button URL
    $wp_customize->add_setting('aston_contact_url', array(
        'default' => '#',
        'transport' => 'refresh',
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('aston_contact_url', array(
        'label' => __('お問い合わせボタンURL', 'aston'),
        'section' => 'title_tagline',
        'settings' => 'aston_contact_url',
        'type' => 'url',
    ));

    $wp_customize->add_setting('aston_banner_image', array(
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'aston_banner_image', array(
        'label' => __('バナー画像', 'aston'),
        'section' => 'title_tagline',
        'mime_type' => 'image',
    )));


    //Footer settings

    $wp_customize->add_setting('aston_copyright_bottom', array(
        'default' => 'Copyright © ' . date('Y') . ' アストン All Rights Reserved.',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));

    $wp_customize->add_control('aston_copyright_bottom', array(
        'label' => __('著作権表記', 'aston'),
        'section' => 'title_tagline',
        'settings' => 'aston_copyright_bottom',
        'type' => 'text',
    ));

    $wp_customize->add_setting('aston_footer_logo', array(
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'aston_footer_logo', array(
        'label' => __('フッターロゴ', 'aston'),
        'section' => 'title_tagline',
        'settings' => 'aston_footer_logo',
        'mime_type' => 'image',
    )));
    
    //Banner Archive Section
    $wp_customize->add_section('custom_post_type_banner_section', array(
        'title' => __('アーカイブバナー設定', 'aston'),
        'description' => __('各投稿タイプのアーカイブページ用バナー画像を設定', 'aston'),
        'priority' => 30,
    ));

    $post_types = array(
        'home' => 'ホーム',
        'faqs' => 'よくある質問',
        'posts' => 'ブログ'
    );
    
    foreach ($post_types as $pt => $label) {
        $setting_id = $pt . '_banner';
        $wp_customize->add_setting($setting_id, array(
           'sanitize_callback' => 'absint'
        ));
        $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, $setting_id, array(
            'label' => $label . ' バナー',
            'section' => 'custom_post_type_banner_section',
            'settings' => $setting_id,
            'mime_type' => 'image'
        )));
    }
}

add_action('customize_register', 'aston_customize_register');


/**
 * Register nav menus
 */
function aston_register_menus()
{
    register_nav_menus(array(
        'primary' => __('Primary', 'aston'),
        'footer_col_1' => __('Footer Column 1', 'aston'),
        'footer_col_2' => __('Footer Column 2', 'aston'),
        'footer_col_3' => __('Footer Column 3', 'aston'),
        'footer_col_4' => __('Footer Column 4', 'aston'),
    ));
}
add_action('init', 'aston_register_menus');
/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function aston_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function aston_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Add selective refresh support for customizer settings
 */
function aston_customize_selective_refresh($wp_customize) {
    // Selective refresh for phone number
    $wp_customize->selective_refresh->add_partial('aston_phone', array(
        'selector' => '[data-customize-partial-id="aston_phone"]',
        'render_callback' => function() {
            return esc_html(get_theme_mod('aston_phone', '0557-52-3677'));
        },
    ));

    // Selective refresh for business hours
    $wp_customize->selective_refresh->add_partial('aston_business_hours', array(
        'selector' => '[data-customize-partial-id="aston_business_hours"]',
        'render_callback' => function() {
            return esc_html(get_theme_mod('aston_business_hours', '【受付時間】10:00〜19:00'));
        },
    ));
}
add_action('customize_register', 'aston_customize_selective_refresh', 20);

/**
 * Add Company Maps Section
 */
add_action('customize_register', function($wp_customize) {
    // Add Company Maps Section
    $wp_customize->add_section('aston_company_maps', array(
        'title' => __('会社マップ設定', 'aston'),
        'priority' => 35,
    ));

    // Aston伊東本店 Map Iframe
    $wp_customize->add_setting('aston_map_ito_honten', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'aston_sanitize_iframe'
    ));

    $wp_customize->add_control(new Aston_Customize_Textarea_Control($wp_customize, 'aston_map_ito_honten', array(
        'label' => __('Aston伊東本店 Google Map', 'aston'),
        'description' => __('Google Mapsの<iframe>タグをそのまま貼り付けてください', 'aston'),
        'section' => 'aston_company_maps',
        'settings' => 'aston_map_ito_honten',
    )));

    // Aston沼津店 Map Iframe
    $wp_customize->add_setting('aston_map_numazu', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'aston_sanitize_iframe'
    ));

    $wp_customize->add_control(new Aston_Customize_Textarea_Control($wp_customize, 'aston_map_numazu', array(
        'label' => __('Aston沼津店 Google Map', 'aston'),
        'description' => __('Google Mapsの<iframe>タグをそのまま貼り付けてください', 'aston'),
        'section' => 'aston_company_maps',
        'settings' => 'aston_map_numazu',
    )));

    // Astonアンティーク Map Iframe
    $wp_customize->add_setting('aston_map_antique', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'aston_sanitize_iframe'
    ));

    $wp_customize->add_control(new Aston_Customize_Textarea_Control($wp_customize, 'aston_map_antique', array(
        'label' => __('Astonアンティーク Google Map', 'aston'),
        'description' => __('Google Mapsの<iframe>タグをそのまま貼り付けてください', 'aston'),
        'section' => 'aston_company_maps',
        'settings' => 'aston_map_antique',
    )));
});

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function aston_customize_preview_js()
{
    wp_enqueue_script('aston-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), _S_VERSION, true);
}
add_action('customize_preview_init', 'aston_customize_preview_js');
