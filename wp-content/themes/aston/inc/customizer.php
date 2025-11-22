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

    //Banner settings
    $wp_customize->add_setting('aston_banner_tooltip_text', array(
        'default' => 'どんなものでも無料査定！ 高価買取はアストンにお任せください！',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('aston_banner_tooltip_text', array(
        'label' => __('ツールチップテキスト', 'aston'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    $wp_customize->add_setting('aston_banner_title', array(
        'default' => '人とものをつなぐ企業アストン',
        'transport' => 'postMessage',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('aston_banner_title', array(
        'label' => __('タイトル', 'aston'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    $wp_customize->add_setting('aston_banner_feature_1', array(
        'default' => '0円',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('aston_banner_feature_1', array(
        'label' => __('査定費・出張費無料', 'aston'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    $wp_customize->add_setting('aston_banner_feature_2', array(
        'default' => '熟練スタッフが査定',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('aston_banner_feature_2', array(
        'label' => __('熟練の査定員多数', 'aston'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    $wp_customize->add_setting('aston_banner_feature_3', array(
        'default' => '迅速な対応',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('aston_banner_feature_3', array(
        'label' => __('即日対応', 'aston'),
        'section' => 'title_tagline',
        'type' => 'text',
    ));

    $wp_customize->add_setting('aston_banner_image', array(
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'aston_banner_image', array(
        'label' => __('バナー画像', 'aston'),
        'section' => 'title_tagline',
        'mime_type' => 'image',
    )));

    // ========== Reason Section (選ばれる3つの理由) ==========
    $wp_customize->add_section('aston_reason_section', array(
        'title' => __('選ばれる3つの理由', 'aston'),
        'priority' => 35,
        'description' => __('トップページの「選ばれる理由」セクションの設定', 'aston'),
    ));

    // Reason Card 1
    $wp_customize->add_setting('aston_reason_1_title', array(
        'default' => '熟練査定員による<br><span class="color-main">高額買取</span>',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('aston_reason_1_title', array(
        'label' => __('理由1 - タイトル', 'aston'),
        'section' => 'aston_reason_section',
        'type' => 'textarea',
        'description' => __('HTMLタグ可（<br>, <span>等）', 'aston'),
    ));

    $wp_customize->add_setting('aston_reason_1_desc', array(
        'default' => '年間5,000件以上の買取実績を誇り、家電・家具の相場に精通しています。相場を<br>熟知した経験豊富な査定員による査定で、高<br>額買取を実現しています！',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('aston_reason_1_desc', array(
        'label' => __('理由1 - 説明文', 'aston'),
        'section' => 'aston_reason_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('aston_reason_1_image', array(
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'aston_reason_1_image', array(
        'label' => __('理由1 - 画像', 'aston'),
        'section' => 'aston_reason_section',
        'mime_type' => 'image',
    )));

    // Reason Card 2
    $wp_customize->add_setting('aston_reason_2_title', array(
        'default' => '自社データベースに<br>よる<span class="color-main">正確な査定</span>',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('aston_reason_2_title', array(
        'label' => __('理由2 - タイトル', 'aston'),
        'section' => 'aston_reason_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('aston_reason_2_desc', array(
        'default' => '当社は独自のデータベースをベースに明確な<br>査定と丁寧な説明を行いデータに基づく査定<br>を行うことで、安心してご利用いただけるリ<br>サイクルショップを目指しています。',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('aston_reason_2_desc', array(
        'label' => __('理由2 - 説明文', 'aston'),
        'section' => 'aston_reason_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('aston_reason_2_image', array(
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'aston_reason_2_image', array(
        'label' => __('理由2 - 画像', 'aston'),
        'section' => 'aston_reason_section',
        'mime_type' => 'image',
    )));

    // Reason Card 3
    $wp_customize->add_setting('aston_reason_3_title', array(
        'default' => '貴重な時間を無駄に<br>しない<span class="color-main">迅速</span>な対応',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('aston_reason_3_title', array(
        'label' => __('理由3 - タイトル', 'aston'),
        'section' => 'aston_reason_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('aston_reason_3_desc', array(
        'default' => 'お客様の貴重なお時間を無駄にせず、出張買<br>取や店舗への持ち込み時、その場で現金をお<br>渡しするサービスを提供しています。',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_kses_post',
    ));
    $wp_customize->add_control('aston_reason_3_desc', array(
        'label' => __('理由3 - 説明文', 'aston'),
        'section' => 'aston_reason_section',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('aston_reason_3_image', array(
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'aston_reason_3_image', array(
        'label' => __('理由3 - 画像', 'aston'),
        'section' => 'aston_reason_section',
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
        'jobs' => '求人情報',
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

    // Selective refresh for banner title
    $wp_customize->selective_refresh->add_partial('aston_banner_title', array(
        'selector' => '[data-customize-partial-id="aston_banner_title"]',
        'render_callback' => function() {
            return esc_html(get_theme_mod('aston_banner_title', '人とものをつなぐ企業アストン'));
        },
    ));

    // Selective refresh for banner tooltip
    $wp_customize->selective_refresh->add_partial('aston_banner_tooltip_text', array(
        'selector' => '[data-customize-partial-id="aston_banner_tooltip_text"]',
        'render_callback' => function() {
            return esc_html(get_theme_mod('aston_banner_tooltip_text', 'どんなものでも無料査定！ 高価買取はアストンにお任せください！'));
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
