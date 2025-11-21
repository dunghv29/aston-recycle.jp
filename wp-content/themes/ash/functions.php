<?php
session_start();
require_once __DIR__ . '/common.php';
require_once __DIR__ . '/inc/Type.php';
require_once __DIR__ . '/inc/PurchaseResult.php';
require_once __DIR__ . '/inc/SendMail.php';
add_action('wp_enqueue_scripts', 'ASH_customize_script');
function ASH_customize_script() {
    wp_enqueue_script('ASH_slim_script', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script('ASH_boot_script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
    wp_enqueue_style('ASH_bootstrap_style','https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
}

add_action('admin_menu','add_menu_admin' );
add_action('init', 'my_script_enqueuer');
function my_script_enqueuer()
{
    wp_register_script("aston_script", '', array('jquery'));
    wp_localize_script('aston_script', 'myAjax', array('ajaxurl' => admin_url('admin-ajax.php')));
    wp_enqueue_script('jquery');
    wp_enqueue_script('aston_script');
}

function add_menu_admin()
{
    add_menu_page(
        __('カテゴリー'),
        __('カテゴリー'),
        'manage_options',
        'type',
        'typeInit',
        'dashicons-screenoptions',
        2
    );
    add_menu_page(
        __('買取り実績'),
        __('買取り実績'),
        'manage_options',
        'purchase-result',
        'purchaseResultInit',
        'dashicons-schedule',
        3
    );
    remove_submenu_page('edit.php', 'edit-tags.php?taxonomy=category');
}

add_action('admin_menu','add_menu_admin' );
add_action("wp_ajax_request_view", "visitorSite");
add_action("wp_ajax_nopriv_request_view", "visitorSite");

function visitorSite()
{
    global $wpdb;
    $visitorIp = $_SERVER['REMOTE_ADDR'];
    $date = date('Y-m-d');
    $tableName = $wpdb->prefix.'count_visitor';
    $wpdb->query("DELETE FROM {$tableName} WHERE DATE(created_at) < '{$date}' AND type = 3");
    $sql = "SELECT * FROM {$tableName} where type = 3 AND ip = '{$visitorIp}' AND DATE(created_at) = '{$date}' LIMIT 1";
    $result = $wpdb->get_row($sql);
    if (!$result) {
        $wpdb->insert($tableName, [
            'type' => 3,
            'ip' => $visitorIp,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
    $data = $wpdb->get_row("SELECT * FROM {$tableName} WHERE type = 2 AND DATE(created_at) = '{$date}' LIMIT 1");
    if ($data) {
        $wpdb->query("UPDATE {$tableName} SET number = number + 1 WHERE type = 2");
    } else {
        $wpdb->query("DELETE FROM {$tableName} WHERE type = 2");
        $wpdb->insert($tableName, [
            'type' => 2,
            'number' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
    $data = $wpdb->get_row("SELECT * FROM {$tableName} WHERE type = 1 LIMIT 1");
    if ($data) {
        $wpdb->query("UPDATE {$tableName} SET number = number + 1 WHERE type = 1");
    } else {
        $wpdb->insert($tableName, [
            'type' => 1,
            'number' => 1
        ]);
    }
    $countOfDayVisit = $wpdb->get_var("SELECT count(*) FROM {$tableName} WHERE type = 3");
    $countViewOfDay = $wpdb->get_var("SELECT number FROM {$tableName} WHERE type = 2 LIMIT 1");
    $countView = $wpdb->get_var("SELECT number FROM {$tableName} WHERE type = 1 LIMIT 1");
    return wp_send_json(['code' => 200, 'data' => [
        'countOfDayVisit' => $countOfDayVisit,
        'countViewOfDay' => $countViewOfDay,
        'countView' => $countView
    ]]);
}
function load_template_part_emails($template_name = '', $args) {
    ob_start();
    get_template_part("template-parts/emails/{$template_name}", '', $args);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}

add_action('wp_ajax_get_post', 'getPost');
add_action("wp_ajax_nopriv_get_post", "getPost");

function getPost()
{
    $page = get_query_var ('paged') ? get_query_var ('paged') : 1;
    $args = [
        'post_type' => 'post',
        'orderby' => 'ID',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => 5,
        'paged' => $page
    ];
    $result = new WP_Query($args);
    $arr = [];
    if ($result->have_posts ()) :
        while ($result->have_posts ()) :
            $result->the_post ();
            $arr[] = [
                'date' => get_the_date('Y.m.d'),
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'tags' => get_the_tags ()
            ];
        endwhile;
    endif;
    return wp_send_json(['code' => 200, 'data' => $arr]);
}


// フッターにボタンを追加
add_action('wp_footer', function() {
    echo '<div class="fixed-footer">
            <ul>
                <li><a href="https://aston-recycle.jp/store-introduction/">買いたい</a></li>
                <li><a href="https://aston-recycle.jp/safe-purchase/">売りたい</a></li>
                <li><a href="https://aston-recycle.jp/corporate-purchase/">法人様</a></li>
            </ul>
          </div>
            <button onclick="topFunction()" id="myBtn" title="Go to top" class="backToTop">
                <img src="'. get_stylesheet_directory_uri() . '/images/icons/backToTop.svg" alt="" class="img-fluid">
                <!-- <div class="mt-10 textToTop">トップページ</div> -->
            </button>
          ';

          echo '<script>
          function toggleBackToTopButton() {
              let scroll = $(window).scrollTop();
              if (scroll > 350) {
                  $(".backToTop").show();
              } else if (scroll <= 100) {
                  $(".backToTop").hide();
              }
          }
          $(window).on("scroll", toggleBackToTopButton);
          $(document).ready(toggleBackToTopButton);
          </script>';
});
