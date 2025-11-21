<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!Doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php wp_title('|', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?=get_stylesheet_directory_uri()?>/images/icons/Frame.ico" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/main.css">
  <?php wp_head(); ?>
  <script>
  $(function() {
    var ip = '<?=$_SERVER['REMOTE_ADDR']?>';
    var formData = new FormData();
    formData.append('action', 'request_view');
    formData.append('ip', ip);
    $.ajax({
      url: myAjax.ajaxurl,
      type: 'POST',
      dataType: "json",
      data: formData,
      success: function(data) {
        $('#all-view').html(data.data.countView);
        $('#view-of-day').html(data.data.countViewOfDay);
        $('#visit-count').html(data.data.countOfDayVisit);
      },
      cache: false,
      contentType: false,
      processData: false
    });
  })
  </script>
  <script src="<?=get_stylesheet_directory_uri()?>/js/functions.js"></script>
</head>

<body>
  <div class="interior-header">
    <div class="container header-big">
      <div class="interior-header__wp">
        <div class="interior-header__logo d-lg-block d-none">
          <a href="">
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/ASTON ANTIQUES_tate-A.png" height="97" width="194" alt=""
              class="img-fluid">
          </a>
        </div>
        <div class="interior-header__box">
          <div class="interior-header__top">
            <div class="interior-header__top-left">
              <div class="text-nowrap interior-header__hotLine">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M14.7368 10.5347C13.7499 10.5347 12.7832 10.3806 11.8669 10.0783C11.4198 9.9242 10.912 10.0429 10.6181 10.3427L8.80169 11.7145C6.71748 10.6021 5.38358 9.26906 4.28633 7.20001L5.62106 5.42653C5.95706 5.09053 6.07749 4.59873 5.93349 4.13811C5.62864 3.216 5.4737 2.24842 5.4737 1.26316C5.4737 0.566724 4.90698 0 4.21054 0H1.26316C0.566724 0 0 0.566724 0 1.26316C0 9.38863 6.61137 16 14.7368 16C15.4333 16 16 15.4333 16 14.7368V11.7979C16 11.1015 15.4333 10.5347 14.7368 10.5347Z"
                    fill="#806749" />
                </svg>
                <a href="tel:0557-52-3677" class="ml-10 color6">0557-45-3969</a>
              </div>
              <div class="fontsize-12 text-right">電話受付時間: 10:00~19:00 <span class="text-nowrap">〒414-0051</span>
                静岡県伊東市吉田142</div>
              <ul class="interior-header__views">
                <li>
                  <div class="interior-header__view">総閲覧数: <span id="all-view" class="color-primary">0</span></div>
                </li>
                <li>
                  <div class="interior-header__view">今日の閲覧数: <span id="view-of-day" class="color-primary">0</span></div>
                </li>
                <li>
                  <div class="interior-header__view">今日の訪問者数: <span id="visit-count" class="color-primary">0</span>
                  </div>
                </li>
              </ul>
            </div>
            <div class="interior-header__top-right">
              <a href="/company-us">メール査定はこちら</a>
            </div>
          </div>
          <div class="interior-header__upper">
            <div class="interior-header__upper-logo d-lg-none d-block">
              <a href="" class="d-block" title="aston">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/aston_interior-logo.png" alt=""
                  class="img-fluid">
              </a>
            </div>
            <div class="interior-humburger header-humburger d-lg-none d-block">
              <img id="icon-humburger" src="<?=get_stylesheet_directory_uri()?>/images/uploads/humburger-brown.svg"
                alt="" class="img-fluid icon-humburger">
              <img id="icon-humburger-close"
                src="<?=get_stylesheet_directory_uri()?>/images/uploads/humburger-close-brown.svg" alt=""
                class="img-fluid icon-humburger-close">
            </div>
            <ul class="interior-header__upper-list">
              <li>
                <a href="/store-introduction" class="interior-header__upper-link active">店舗紹介</a>
              </li>
              <li>
                <a href="/safe-purchase" class="interior-header__upper-link">買取について</a>
              </li>
              <li>
                <a href="/about-business-trip-purchase" class="interior-header__upper-link">よくある質問</a>
              </li>
              <li>
                <a href="/company-profile" class="interior-header__upper-link">会社概要</a>
              </li>
              <li>
                <a href="/company-us" class="interior-header__upper-link">お問い合わせ</a>
              </li>
            </ul>

          </div>
          <ul class="sub-menu">
            <li>
              <a href="/store-introduction" class="sub-menu__link">店舗紹介</a>
            </li>
            <li>
              <a href="/safe-purchase" class="sub-menu__link">買取について</a>
            </li>
            <li>
              <a href="/about-business-trip-purchase" class="sub-menu__link">よくある質問</a>
            </li>
            <li>
              <a href="/company-profile" class="sub-menu__link">会社概要</a>
            </li>
            <li>
              <a href="/company-us" class="sub-menu__link">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>