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
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title><?php wp_title('|', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?=get_stylesheet_directory_uri()?>/images/icons/Frame.ico" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/main.css">
  <?php wp_head(); ?>
  <style>
  #post-homepage a {
    color: black;
  }

  #post-homepage a:hover {
    color: black;
  }
  </style>
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
    var background = [1, 5, 2, 3];
    $.get(myAjax.ajaxurl, {
      action: 'get_post'
    }, function(data) {
      if (data.data) {
        html = '<ul class="hp-order6__list mb-0">';
        data.data.forEach(function(v, k) {
          html +=
            '<li><div class="hp-order6__item"><div class="hp-order6__left"><span class="hp-order6__date ">' +
            v.date +
            '</span></div><div class="hp-order6__right"><h4 class="hp-order6__right-title respon-16 text-bold"><a href="/blog-detail?post_id=' +
            v.id + '">' +
            v.title +
            '</a></h4><span class="hp-order6__date d-md-none d-block">' +
            v.date +
            '</span><div class="hp-order6__list-tag">';
          if (v.tags.length > 0) {
            v.tags.forEach(function(v1, k1) {
              if (k1 <= 3) {
                html += "<span class=\"blog__badge bg-color" + background[k1] + " " + (k1 == 3 ?
                  'color-black' : 'color-white') + " mr-12\">" + v1.name + "</span>";
              }
            })
          }
          html += '</div></div></div></li>';
        });
        html += '</ul>';
        $('#post-homepage').html(html);
      }
    });
  })
  </script>
  <script src="<?=get_stylesheet_directory_uri()?>/js/functions.js"></script>
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "tfl9dn4mqr");
</script>
</head>

<body>
  <div class="bg-header" id="bg-header">
    <div class="container header-big">
      <div class="header-one">
        <div class="header-top">
          <div class="header-left">
            <ul class="d-flex flex-wrap">
              <li>
                <div class="header-left__link">総閲覧数: <span id="all-view" class="color3">0</span></div>
              </li>
              <li>
                <div class="header-left__link">今日の閲覧数: <span id="view-of-day" class="color3">0</span></div>
              </li>
              <li>
                <div class="header-left__link">今日の訪問者数: <span id="visit-count" class="color3">0</span></div>
              </li>
            </ul>
          </div>
          <div class="header-right">
            <div class="d-flex flex-wrap align-items-center justify-content-end">
              <a href="tel:0557523677" class="header-hotline d-flex align-items-center mr-15">
                <img src="<?=get_stylesheet_directory_uri()?>/images/icons/header-call.svg" alt="" class="img-fluid">
                <span class="heading-24 color3 ml-7">0557-52-3677</span>
              </a>
              <a href="/company-us" class="header-link-yellow">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/header-link-yellow.png" alt=""
                  class="img-fluid">
              </a>
            </div>
            <div class="header-note-time">電話受付時間: 10:00~19:00 〒414-0036 静岡県伊市東宮川町1-6-12</div>
          </div>
        </div>
        <div class="header-sticky">
          <div class="header-upper">
            <h1 class="mb-0 logo">
              <a href="/" class="d-block" title="aston">
                <img id="img-logo" src="<?=get_stylesheet_directory_uri()?>/images/uploads/logo.svg" alt=""
                  class="img-fluid">
              </a>
            </h1>
            <div class="header-links d-lg-flex d-none">
              <a href="/store-introduction">
                <img id="header-link-1" src="<?=get_stylesheet_directory_uri()?>/images/uploads/header-link-1.png"
                  alt="" class="img-fluid">
              </a>
              <a href="/safe-purchase">
                <img id="header-link-2" src="<?=get_stylesheet_directory_uri()?>/images/uploads/header-link-2.png"
                  alt="" class="img-fluid">
              </a>
              <a href="/about-business-trip-purchase">
                <img id="header-link-3" src="<?=get_stylesheet_directory_uri()?>/images/uploads/header-link-3.png"
                  alt="" class="img-fluid">
              </a>
              <a href="/company-profile">
                <img id="header-link-4" src="<?=get_stylesheet_directory_uri()?>/images/uploads/header-link-4.png"
                  alt="" class="img-fluid">
              </a>
              <a href="/company-us">
                <img id="header-link-5" src="<?=get_stylesheet_directory_uri()?>/images/uploads/header-link-5.png"
                  alt="" class="img-fluid">
              </a>
            </div>
            <div class="header-humburger d-lg-none d-block">
              <img id="icon-humburger" src="<?=get_stylesheet_directory_uri()?>/images/uploads/humburger.svg" alt=""
                class="img-fluid icon-humburger">
              <img id="icon-humburger-close"
                src="<?=get_stylesheet_directory_uri()?>/images/uploads/humburger-close.svg" alt=""
                class="img-fluid icon-humburger-close">
            </div>
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
	<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16606266124">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16606266124');
</script>