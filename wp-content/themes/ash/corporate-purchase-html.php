<?php

/**
 * Template Name: Corporate purchase html
 */

?>

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
  <script>
  $('.link1').addClass('active');
  </script>
  <script src="<?=get_stylesheet_directory_uri()?>/js/functions.js"></script>
</head>
<script>
$(function() {
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll > 350) {
      $('.btn_ontop').addClass('display');
    } else if (scroll <= 100) {
      $('.btn_ontop').removeClass('display');
    }
  });

  $('.btn_ontop').click(function() {
    $('html,body').animate({
      'scrollTop': 0
    }, 1500);
    return false;
  });
})
</script>

<body>
  <main id="corporate" class="corporate">
    <section class="corporate-banner">
      <img class="img-cover corporate-banner__background"
        src="<?= get_stylesheet_directory_uri() ?>/images/uploads/background-banner1019.png" alt="Banner">
      <img class="img-cover corporate-banner__background--mobile"
        src="<?= get_stylesheet_directory_uri() ?>/images/uploads/background-banner1019-mobile.png" alt="Banner">
      <div class="corporate-banner__wp">
        <div class="container">
          <div class="row d-flex align-items-center justify-content-between">
            <div class="col-xl-5 col-lg-6 col-6">
              <a href="#" class="corporate-banner__logo">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/logo1019.png" alt="Logo corporate"
                  class="img-cover">
              </a>
            </div>
            <div class="col-xl-5 col-lg-6">
              <div class="corporate-banner__list-link">
                <a href="#" class="corporate-banner__upper-link active color-white">ホーム</a>
                <a href="#" class="corporate-banner__upper-link color-white">ご依頼・お問い合わせ</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="corporate-banner__list-link corporate-banner__list-link--mobile">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <a href="#"
              class="corporate-banner__upper-link active color-white corporate-banner__upper-link--mobile">ホーム</a>
          </div>
          <div class="col-6">
            <a href="#"
              class="corporate-banner__upper-link color-white corporate-banner__upper-link--mobile">ご依頼・お問い合わせ</a>
          </div>
        </div>
      </div>
    </section>

    <section class="corporate-bigTitle">
      <div class="container">
        <div class="row rowTitle">
          <div class="col-12 mx-auto">
            <h2 class="bigTitle corporate-bigTitle__bigTitle mx-auto text-center mt-120 mb-60">
              <img class="img-scaledown bigTitle__img bigTitle__img--pc"
                src="<?= get_stylesheet_directory_uri() ?>/images/uploads/bigTitle1019.png" alt="Big title">
                <img class="img-scaledown bigTitle__img bigTitle__img--mobile"
                src="<?= get_stylesheet_directory_uri() ?>/images/uploads/bigTitle1019-mobile.png" alt="Big title">
            </h2>
          </div>
        </div>
      </div>
    </section>

    <section class="corporate-purchase">
      <div class="container">
        <div class="row rowPurchaseResult">
          <div class="col-lg-3 col-md-6 corporate-purchase__col-item">
            <article class="corporate-purchase__item bg-white borderRadius-10 zoomIn">
              <div class="corporate-purchase__thumb">
                <img class="img-cover in corporate-purchase__image"
                  src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-1.png" alt="Thumb">
              </div>
              <div class="corporate-purchase__info p-20 mb-50">
                <h4 class="corporate-purchase__text black-color">
                  ホテルの液晶テレビ約200台の買取
                </h4>
              </div>
            </article>
          </div>

          <div class="col-lg-3 col-md-6 corporate-purchase__col-item">
            <article class="corporate-purchase__item bg-white borderRadius-10 zoomIn">
              <div class="corporate-purchase__thumb">
                <img class="img-cover in corporate-purchase__image"
                  src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-2.png" alt="Thumb">
              </div>
              <div class="corporate-purchase__info p-20 mb-50">
                <h4 class="corporate-purchase__text black-color">
                  大型保養所の家具・<br>
                  家電一式買取４t車２台分
                </h4>
              </div>
            </article>
          </div>

          <div class="col-lg-3 col-md-6 corporate-purchase__col-item">
            <article class="corporate-purchase__item bg-white borderRadius-10 zoomIn">
              <div class="corporate-purchase__thumb">
                <img class="img-cover in corporate-purchase__image"
                  src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-3.png" alt="Thumb">
              </div>
              <div class="corporate-purchase__info p-20 mb-50">
                <h4 class="corporate-purchase__text black-color">
                  改装予定の大型旅館家具・家電一式引き上げ
                </h4>
              </div>
            </article>
          </div>

          <div class="col-lg-3 col-md-6 corporate-purchase__col-item">
            <article class="corporate-purchase__item bg-white borderRadius-10 zoomIn">
              <div class="corporate-purchase__thumb">
                <img class="img-cover in corporate-purchase__image"
                  src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-4.png" alt="Thumb">
              </div>
              <div class="corporate-purchase__info p-20 mb-50">
                <h4 class="corporate-purchase__text black-color">
                  アジアン雑貨店閉店につき店舗在庫の買取
                </h4>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="corporate-btn">
      <div class="container">
        <div class="row rowViewMore d-flex justify-content-center align-items-center">
          <div class="col-lg-4 col-md-6 mx-auto">
            <a href="" class="corporate-btn__btn text-white mt-30 mb-70">買取実績一覧を見</a>
          </div>
        </div>
      </div>
    </section>

    <section class="corporate-panel">
      <div class="container">
        <div class="row rowPanel d-flex align-items-center justify-content-center">
          <div class="col-md-7">
            <div class="corporate-panel__wp mb-8 mx-auto d-flex align-items-center justify-content-center">
              <img class="corporate-panel__image img-fluid"
                src="<?= get_stylesheet_directory_uri() ?>/images/uploads/panel1019.png" alt="Panel">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="corporate-answer">
      <div class="container">
        <div class="corporate-answer__outer borderRadius-10 p-10">
          <div class="corporate-answer__inner borderRadius-10 bg-white">
            <div class="row rowAnswer d-flex justify-content-around">
              <div class="col-xl-7 col-lg-7 col-md-6">
                <div class="corporate-answer__needed-wp">
                  <div class="corporate-answer__needed-item mb-25">
                    <img class="corporate-answer__tick"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/tick.svg" alt="Icon tick">
                    <h6 class="corporate-answer__target color-black mb-0">親が高齢で店舗運営ができなくなり、店内の物をまとめて売却したい</h6>
                  </div>
                  <div class="corporate-answer__needed-item mb-25">
                    <img class="corporate-answer__tick"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/tick.svg" alt="Icon tick">
                    <h6 class="corporate-answer__target color-black mb-0">廃業をしようと思っているが何から始めたらいいわからない</h6>
                  </div>
                  <div class="corporate-answer__needed-item mb-25">
                    <img class="corporate-answer__tick"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/tick.svg" alt="Icon tick">
                    <h6 class="corporate-answer__target color-black mb-0">商品を一括で買ってもらうところがわからない</h6>
                  </div>
                  <div class="corporate-answer__needed-item mb-25">
                    <img class="corporate-answer__tick"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/tick.svg" alt="Icon tick">
                    <h6 class="corporate-answer__target color-black mb-0">商品種類がバラバラすぎて買取り業者が買ってくれない</h6>
                  </div>
                  <div class="corporate-answer__needed-item mb-25">
                    <img class="corporate-answer__tick"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/tick.svg" alt="Icon tick">
                    <h6 class="corporate-answer__target color-black mb-0">什品棚、備品を買取りしてもらいたい！買取りできない物は処分した</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-3 col-md-4">
                <div class="corporate-answer__thumb">
                  <img class="corporate-answer__image img-fluid"
                    src="<?= get_stylesheet_directory_uri() ?>/images/uploads/image1019.png" alt="Thumb">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="corporate-titleStore">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 mx-auto d-flex justify-content-center flex-wrap">
            <h2 class="corporate-store__bigTitle">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/titleStore1019-5.png" alt="Title"
                class="img-fluid corporate-store__bigTitle--pc">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/titleStore1019-6.png" alt="Title"
                class="img-fluid corporate-store__bigTitle--mobile">
            </h2>
          </div>

        </div>
      </div>
    </section>

    <section class="corporate-store">
      <div class="corporate-store__head">
        <div class="container">
          <div class="corporate-store__title">
            <img class="corporate-store__image img-fluid"
              src="<?= get_stylesheet_directory_uri() ?>/images/uploads/titleStore1019-3.png" alt="Title">
            <img class="corporate-store__image--mobile img-fluid"
              src="<?= get_stylesheet_directory_uri() ?>/images/uploads/titleStore1019-3-mobile.png" alt="Title">
          </div>
        </div>
      </div>
      <div class="corporate-store__body">
        <div class="container">
          <div class="corporate-store__wp-item">
            <h3
              class="corporate-store__panel ptb-10 plr-20 bg-color2 borderRadius-10 text-white d-flex align-items-center justify-content-center">
              ここが違います。
            </h3>

            <article class="corporate-store__item bg-white borderRadius-10">
              <div class="corporate-store__content">
                <div class="row d-flex justify-content-end">
                  <div class="col-2 col-xl-2 col-lg-2 col-md-2">
                    <div class="corporate-store__icon">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/number1-1019.png"
                        alt="Number">
                    </div>
                  </div>
                  <div class="col-10 col-info-title--mobile">
                    <h5 class="corporate-store__info-title--mobile">
                      親切丁寧な対応
                    </h5>
                  </div>
                  <div class="col-10">

                    <div class="corporate-store__info ">
                      <h5 class="corporate-store__info-title">
                        親切丁寧な対応
                      </h5>
                      <p class="corporate-store__info-text color-black ">
                        「親切・丁寧」をこころがけ、経験豊富な買い取り実績でお客様から信頼を頂いています。
                      </p>
                    </div>
                  </div>

                </div>


              </div>

              <div class="corporate-store__content">
                <div class="row d-flex justify-content-end">
                  <div class="col-2 col-xl-2 col-lg-2 col-md-2">
                    <div class="corporate-store__icon">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/number2-1019.png"
                        alt="Number">
                    </div>
                  </div>
                  <div class="col-10 col-info-title--mobile">
                    <h5 class="corporate-store__info-title--mobile">
                      10年以上の安心実績
                    </h5>
                  </div>

                  <div class="col-5">
                    <div class="corporate-store__info ">
                      <h5 class="corporate-store__info-title">
                        10年以上の安心実績
                      </h5>
                      <p class="corporate-store__info-text color-black ">
                        おかげさまで買い取り事業を始めて23年目となりました。<br>
                        豊富な経験で業界をリードしています。
                      </p>
                    </div>
                  </div>
                  <div class="col-xl-4 offset-xl-1 col-lg-5 col-md-5 col-5">
                    <div class="corporate-store__thumb">
                      <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-5.png"
                        alt="Thumb">
                    </div>
                  </div>

                </div>


              </div>

              <div class="corporate-store__content">
                <div class="row d-flex justify-content-end">
                  <div class="col-2 col-xl-2 col-lg-2 col-md-2">
                    <div class="corporate-store__icon">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/number3-1019.png"
                        alt="Number">
                    </div>
                  </div>
                  <div class="col-10 col-info-title--mobile">
                    <h5 class="corporate-store__info-title--mobile">
                      買取り査定のお見積は完全無料
                    </h5>
                  </div>
                  <div class="col-5">

                    <div class="corporate-store__info ">
                      <h5 class="corporate-store__info-title">
                        買取り査定のお見積は完全無料
                      </h5>
                      <p class="corporate-store__info-text color-black ">
                        創業以来、お見積もりでお金を頂いたことは一切ございません。<br>
                        見積もりだけでも是非させてください。
                      </p>
                    </div>
                  </div>
                  <div class="col-xl-4 offset-xl-1 col-lg-5 col-md-5 col-5">
                    <div class="corporate-store__thumb">
                      <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-6.png"
                        alt="Thumb">
                    </div>
                  </div>

                </div>


              </div>

              <div class="corporate-store__content">
                <div class="row d-flex justify-content-end">
                  <div class="col-2 col-xl-2 col-lg-2 col-md-2">
                    <div class="corporate-store__icon">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/number4-1019.png"
                        alt="Number">
                    </div>
                  </div>

                  <div class="col-10 col-info-title--mobile">
                    <h5 class="corporate-store__info-title--mobile">
                      秘密厳守
                    </h5>
                  </div>

                  <div class="col-10">
                    <div class="corporate-store__info ">
                      <h5 class="corporate-store__info-title">
                        秘密厳守
                      </h5>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>

        <div class="container">
          <div class="corporate-store__wp-item">
            <h3
              class="corporate-store__panel ptb-10 plr-20 bg-color2 borderRadius-10 text-white d-flex align-items-center justify-content-center">
              お客様に合わせた買取り方法
            </h3>

            <article class="corporate-store__item bg-white borderRadius-10">
              <div class="corporate-store__content">
                <div class="row d-flex justify-content-end">
                  <div class="col-2 col-xl-2 col-lg-2 col-md-2">
                    <div class="corporate-store__icon">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/number1-1019.png"
                        alt="Number">
                    </div>
                  </div>
                  <div class="col-10 col-info-title--mobile">
                    <h5 class="corporate-store__info-title--mobile">
                      様々なジャンルの商品でも対応できる
                    </h5>
                  </div>

                  <div class="col-5">
                    <div class="corporate-store__info ">
                      <h5 class="corporate-store__info-title">
                        様々なジャンルの商品でも対応できる
                      </h5>
                      <p class="corporate-store__info-text color-black ">
                        基本的には売れる物ならなんでも買取りしております。<br>
                        価値がある物と判断したらお問い合わせ下さい。
                      </p>
                    </div>
                  </div>
                  <div class="col-xl-4 offset-xl-1 col-lg-5 col-md-5 col-5">
                    <div class="corporate-store__thumb">
                      <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-7.png"
                        alt="Thumb">
                    </div>
                  </div>
                </div>
              </div>

              <div class="corporate-store__content">
                <div class="row d-flex justify-content-end">
                  <div class="col-2 col-xl-2 col-lg-2 col-md-2">
                    <div class="corporate-store__icon">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/number2-1019.png"
                        alt="Number">
                    </div>
                  </div>
                  <div class="col-10 col-info-title--mobile">
                    <h5 class="corporate-store__info-title--mobile">
                      商品の数量をリストアップしなくても買取できる
                    </h5>
                  </div>
                  <div class="col-10">

                    <div class="corporate-store__info ">
                      <h5 class="corporate-store__info-title">
                        商品の数量をリストアップしなくても買取できる
                      </h5>
                      <p class="corporate-store__info-text color-black ">
                        現在の在庫数を正確に把握していなくても大丈夫です。<br>
                        お忙しい閉店時に極力手間かけない方法を探していきます。
                      </p>
                    </div>
                  </div>

                </div>


              </div>

              <div class="corporate-store__content">
                <div class="row d-flex justify-content-end">
                  <div class="col-2 col-xl-2 col-lg-2 col-md-2">
                    <div class="corporate-store__icon">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/number3-1019.png"
                        alt="Number">
                    </div>
                  </div>
                  <div class="col-10 col-info-title--mobile">
                    <h5 class="corporate-store__info-title--mobile">
                      商品引き上げの際は、お手伝いは不要
                    </h5>
                  </div>
                  <div class="col-5">

                    <div class="corporate-store__info ">
                      <h5 class="corporate-store__info-title">
                        商品引き上げの際は、お手伝いは不要
                      </h5>
                      <p class="corporate-store__info-text color-black ">
                        商品の引き上げの際、基本的には弊社で作業を致します。<br>
                        大変な作業をする必要はございません。
                      </p>
                    </div>
                  </div>
                  <div class="col-xl-4 offset-xl-1 col-lg-5 col-md-5 col-5">
                    <div class="corporate-store__thumb">
                      <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-8.png"
                        alt="Thumb">
                    </div>
                  </div>

                </div>


              </div>

              <div class="corporate-store__content">
                <div class="row d-flex justify-content-end">
                  <div class="col-2 col-xl-2 col-lg-2 col-md-2">
                    <div class="corporate-store__icon">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/number4-1019.png"
                        alt="Number">
                    </div>
                  </div>
                  <div class="col-10 col-info-title--mobile">
                    <h5 class="corporate-store__info-title--mobile">
                      什器、棚などの処理もご相談ください
                    </h5>
                  </div>
                  <div class="col-10">

                    <div class="corporate-store__info ">
                      <h5 class="corporate-store__info-title">
                        什器、棚などの処理もご相談ください
                      </h5>
                      <p class="corporate-store__info-text color-black ">
                        現在の在庫数を正確に把握していなくても大丈夫です。<br>
                        お忙しい閉店時に極力手間かけない方法を探していきます。
                      </p>
                    </div>
                  </div>

                </div>


              </div>
            </article>
          </div>
        </div>

        <div class="container">
          <div class="corporate-store__wp-item">
            <h3
              class="corporate-store__panel ptb-10 plr-20 bg-color2 borderRadius-10 text-white d-flex align-items-center justify-content-center">
              買取り対応可能地域
            </h3>
            <div class="row d-flex justify-content-end">
              <div class="col-md-11 d-flex justify-content-end">
                <h2 class="corporate-store__bigTitle mb-15">
                  <img class="corporate-store__bigTitle--pc img-fluid"
                    src="<?=get_stylesheet_directory_uri()?>/images/uploads/titleStore1019-4.png" alt="Title">
                  <img class="corporate-store__bigTitle--mobile img-fluid"
                    src="<?=get_stylesheet_directory_uri()?>/images/uploads/titleStore1019-4-mobile.png" alt="Title">
                </h2>
              </div>
            </div>

            <article class="corporate-store__wp-order borderRadius-10">
              <div class="corporate-store__order bg-white borderRadius-10">
                <div class="row">
                  <div class="col-xl-4 offset-xl-2 col-lg-7 col-md-7 order-md-1 order-sm-2">
                    <div class="corporate-store__order-left">
                      <h3 class="corporate-store__order-title color2 mb-30">
                        関東地方
                      </h3>
                      <div class="corporate-store__order-desc">
                        <p class="corporate-store__order-text color-black">
                          私たちが御見積もりにお伺い致します。<br>
                          関東・中部地方
                        </p>
                        <p class="corporate-store__order-text color-black">
                          弊社買取パートナーの対応地域内であれば対応させて頂きます。<br>
                          まずはお問い合わせください。
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 offset-xl-2 col-lg-5 col-md-5 order-md-2 order-sm-1">
                    <div class="corporate-store__order-right">
                      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/map1019.png" alt="Map"
                        class="img-cover">
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>

        <div class="container">
          <div class="corporate-store__wp-item mb-80">
            <h3
              class="corporate-store__panel ptb-10 plr-20 bg-color2 borderRadius-10 text-white d-flex align-items-center justify-content-center">
              売れる物なら何でも買います!
            </h3>

            <article class="corporate-store__item bg-white borderRadius-10">
              <div class="corporate-store__content corporate-store__product">
                <div class="row d-flex">
                  <div class="col-xl-5 offset-xl-1 col-lg-7 col-md-7 col-7">
                    <div class="corporate-store__info corporate-store__product-info">
                      <h3 class="corporate-store__product-title text-center color-primary">
                        家電製品
                      </h3>
                      <p class="corporate-store__product-text color-black">
                        液晶テレビ / 冷蔵庫 / 洗濯機 / 掃除機 / エアコン / 電子レンジ / オーブンレンジ / FAX / 食器洗浄機 / 電話機 / 炊飯器 / 扇風機 / 照明機器 / こたつ /
                        ストーブ / 一眼レフカメラ / スマートフォン / パソコン / オーディオ機器 / プレイステーション / Ｗii ゲーム機 など
                      </p>
                    </div>
                  </div>

                  <div class="col-xl-4 offset-xl-1 col-lg-5 col-md-5 col-5">
                    <div class="corporate-store__thumb corporate-store__product-thumb">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-9.png"
                        alt="Thumb">
                    </div>
                  </div>
                </div>
              </div>

              <div class="corporate-store__content corporate-store__product">
                <div class="row d-flex">


                  <div class="col-xl-4 offset-xl-1 col-lg-5 col-md-5 col-5">
                    <div class="corporate-store__thumb corporate-store__product-thumb">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-10.png"
                        alt="Thumb">
                    </div>
                  </div>

                  <div class="col-xl-5 offset-xl-1 col-lg-7 col-md-7 col-7">
                    <div class="corporate-store__info corporate-store__product-info">
                      <h3 class="corporate-store__product-title text-center color-primary">
                        スポーツ用品・楽器
                      </h3>
                      <p class="corporate-store__product-text color-black">
                        スポーツ用品 / ゴルフ用品 / フィットネスマシン / 釣り用品 / 楽器 / ピアノ / キーボード / エレキギター / アコースティックギター / エレキベース / ウクレレ /
                        バイオリン / アンプ ベースアンプ / ドラムセット・電子ドラム / マイク / 管楽器 / クラリネット / サックス / トランペット など
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="corporate-store__content corporate-store__product">
                <div class="row d-flex">
                  <div class="col-xl-5 offset-xl-1 col-lg-7 col-md-7 col-7">
                    <div class="corporate-store__info corporate-store__product-info">
                      <h3 class="corporate-store__product-title text-center color-primary">
                        デザイナーズ家具
                      </h3>
                      <p class="corporate-store__product-text color-black">
                        カッシーナ / アルフレックス / デセデ / ノール / ハーマンミラー / リーン・ロゼ / ヴィトラ / カッペリーニ / カリモク / ドマーニ / 天童木工 / イデー /
                        カンディハウス / 飛騨産業 / 北海道民芸 /松本民芸など
                      </p>
                    </div>
                  </div>

                  <div class="col-xl-4 offset-xl-1 col-lg-5 col-md-5 col-5">
                    <div class="corporate-store__thumb corporate-store__product-thumb">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-11.png"
                        alt="Thumb">
                    </div>
                  </div>
                </div>
              </div>

              <div class="corporate-store__content corporate-store__product">
                <div class="row d-flex">
                  <div class="col-xl-4 offset-xl-1 col-lg-5 col-md-5 col-5">
                    <div class="corporate-store__thumb corporate-store__product-thumb">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-12.png"
                        alt="Thumb">
                    </div>
                  </div>

                  <div class="col-xl-5 offset-xl-1 col-lg-7 col-md-7 col-7">
                    <div class="corporate-store__info corporate-store__product-info">
                      <h3 class="corporate-store__product-title text-center color-primary">
                        オフィス用品
                      </h3>
                      <p class="corporate-store__product-text color-black">
                        事務机 / 袖机 / ホワイトボード / 応接セット / ミーティングテーブル / パーテーション / スチール家具 / スチールデスク / 書庫 / ロッカー / 事務椅子 / カウンター
                        / コピー機 / FAX / シュレッダー など
                      </p>
                    </div>
                  </div>
                </div>
              </div>

            </article>
            <div class="corporate-store__wrapper-note">
              <p class="corporate-store__note color-black mb-0">
                ※一部買取できない商品もございます。<br>
                <span class="ml-15">
                  お気軽にお問い合わせ下さい。
                </span>
              </p>
              <p class="corporate-store__note-right color-black mb-0">
                上記に記載の無い商品もご相談下さい。
              </p>
            </div>

          </div>
        </div>

        <div class="container">
          <div class="corporate-store__wp-item">
            <h3
              class="corporate-store__panel ptb-10 plr-20 bg-color2 borderRadius-10 text-white d-flex align-items-center justify-content-center">
              簡単な買取りの流れ
            </h3>

            <article class="corporate-store__item bg-white borderRadius-10">
              <div class="corporate-store__content corporate-store__flow">
                <div class="row ">
                  <div class="col-2">
                    <div class="corporate-store__step">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/step1-1019.png"
                        alt="Step">
                    </div>
                  </div>
                  <div class="col-10">
                    <div class="corporate-store__info corporate-store__product-info">
                      <h3 class="corporate-store__product-title corporate-store__flow-title color-primary">
                        店内写真を撮って送る
                      </h3>
                      <p class="corporate-store__product-text color-black">
                        全商品がまんべんなく写るよう写真をお撮り下さい。 まずは写真での査定となります。
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="corporate-store__content corporate-store__flow">
                <div class="row ">
                  <div class="col-2">
                    <div class="corporate-store__step">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/step2-1019.png"
                        alt="Step">
                    </div>
                  </div>
                  <div class="col-10">
                    <div class="corporate-store__info corporate-store__product-info">
                      <h3 class="corporate-store__product-title corporate-store__flow-title color-primary">
                        概算での査定価格をお知らせします。
                      </h3>
                      <p class="corporate-store__product-text color-black">
                        当社にておおよその買取価格をご提示します。　(例30万～50万円など)
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="corporate-store__content corporate-store__flow">
                <div class="row ">
                  <div class="col-2">
                    <div class="corporate-store__step">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/step3-1019.png"
                        alt="Step">
                    </div>
                  </div>
                  <div class="col-10">
                    <div class="corporate-store__info corporate-store__product-info">
                      <h3 class="corporate-store__product-title corporate-store__flow-title color-primary">
                        実際に店舗にお伺いして買取価格をご提示します。
                      </h3>
                      <p class="corporate-store__product-text color-black">
                        概算査定での価格でご納得いただけるのであればお伺いして、確約した買取価格をご提示します。
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="corporate-store__content corporate-store__flow">
                <div class="row ">
                  <div class="col-2">
                    <div class="corporate-store__step">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/step4-1019.png"
                        alt="Step">
                    </div>
                  </div>
                  <div class="col-10">
                    <div class="corporate-store__info corporate-store__product-info">
                      <h3 class="corporate-store__product-title corporate-store__flow-title color-primary">
                        引き取り日時を決定
                      </h3>
                      <p class="corporate-store__product-text color-black">
                        双方の都合に合わせて日時を決めます。
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="corporate-store__content corporate-store__flow">
                <div class="row ">
                  <div class="col-2">
                    <div class="corporate-store__step">
                      <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/step5-1019.png"
                        alt="Step">
                    </div>
                  </div>
                  <div class="col-10">
                    <div class="corporate-store__info corporate-store__product-info">
                      <h3 class="corporate-store__product-title corporate-store__flow-title color-primary">
                        商品の引き上げ作業、お支払い
                      </h3>
                      <p class="corporate-store__product-text color-black">
                        現金にてお支払い後、商品の引き上げ作業に入ります。
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>

        <div class="container">
          <div class="corporate-store__wp-item corporate-store__wp-item--last">
            <h3
              class="corporate-store__panel ptb-10 plr-20 bg-color2 borderRadius-10 text-white d-flex align-items-center justify-content-center">
              買取りに必要な情報
            </h3>
            <div class="corporate-store__required borderRadius-10 bg-white">
              <div class="row rowAnswer d-flex justify-content-around">
                <div class="col-xl-10">
                  <p class="corporate-store__product-text corporate-store__required-content color-black">
                    買取価格の査定にはこのような情報をお聞きします。<br>
                    お電話の際には「閉店処理のホームページを見ました」とお伝えください。スムーズにやり取りが可能です。
                  </p>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="corporate-store__required-item d-flex ">
                    <img class="corporate-answer__tick corporate-store__required-tick"
                      src="http://localhost/aston-homepage/ash/wp-content/themes/ash/images/icons/tick.svg"
                      alt="Icon tick">
                    <div class="corporate-answer__wp-info">
                      <h3 class="corporate-store__required-title color2 mb-15">
                        関東地方
                      </h3>
                      <p class="corporate-store__required-text color-black mb-0">
                        商品の物量を判断するため写真を <br>
                        複数枚用意してください。
                      </p>
                    </div>

                  </div>
                  <div class="corporate-store__required-item d-flex ">
                    <img class="corporate-answer__tick corporate-store__required-tick"
                      src="http://localhost/aston-homepage/ash/wp-content/themes/ash/images/icons/tick.svg"
                      alt="Icon tick">
                    <div class="corporate-answer__wp-info">
                      <h3 class="corporate-store__required-title color2 mb-15">
                        商品のリスト
                      </h3>
                      <p class="corporate-store__required-text color-black mb-0">
                        リストがあると買取査定がスムーズです。
                      </p>
                    </div>

                  </div>
                  <div class="corporate-store__required-item d-flex ">
                    <img class="corporate-answer__tick corporate-store__required-tick"
                      src="http://localhost/aston-homepage/ash/wp-content/themes/ash/images/icons/tick.svg"
                      alt="Icon tick">
                    <div class="corporate-answer__wp-info">
                      <h3 class="corporate-store__required-title color2 mb-15">
                        トラックを止めるスペース
                      </h3>
                      <p class="corporate-store__required-text color-black mb-0">
                        店舗近くにトラックを止めるスペースがあるか
                      </p>
                    </div>

                  </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="corporate-store__required-item d-flex ">
                    <img class="corporate-answer__tick corporate-store__required-tick"
                      src="http://localhost/aston-homepage/ash/wp-content/themes/ash/images/icons/tick.svg"
                      alt="Icon tick">
                    <div class="corporate-answer__wp-info">
                      <h3 class="corporate-store__required-title color2 mb-15">
                        スケルトン復帰が必要？
                      </h3>
                      <p class="corporate-store__required-text color-black mb-0">
                        店舗の原状復帰が必要な場合はあらかじめ <br>
                        お知らせください。
                      </p>
                    </div>

                  </div>
                  <div class="corporate-store__required-item d-flex ">
                    <img class="corporate-answer__tick corporate-store__required-tick"
                      src="http://localhost/aston-homepage/ash/wp-content/themes/ash/images/icons/tick.svg"
                      alt="Icon tick">
                    <div class="corporate-answer__wp-info">
                      <h3 class="corporate-store__required-title color2 mb-15">
                        店舗の広さ
                      </h3>
                      <p class="corporate-store__required-text color-black mb-0">
                        例：売り場面積50坪　倉庫が１０坪ほど
                      </p>
                    </div>

                  </div>
                </div>
              </div>
              <div class="row">
                <div
                  class="col-xl-4 col-lg-6 col-md-8 col-10 mx-auto text-center d-flex align-items-center justify-content-center">
                  <a href="" class="corporate-store__required-btn text-white mx-auto">詳細を見る</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="corporate-bigTitle">
      <div class="container">
        <div class="row rowTitle">
          <div class="col-12 mx-auto">
            <h2 class="bigTitle corporate-bigTitle-blue mx-auto text-center mt-60 mb-40">
              <img class="img-scaledown bigTitle__img corporate-store__bigTitle--pc"
                src="<?= get_stylesheet_directory_uri() ?>/images/uploads/bigTitle1019-1.png" alt="Big title">
              <img class="img-scaledown bigTitle__img corporate-store__bigTitle--mobile"
                src="<?= get_stylesheet_directory_uri() ?>/images/uploads/bigTitle1019-1-mobile.png" alt="Big title">
            </h2>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <article class="corporate-store__wp-order1 borderRadius-10">
          <div class="corporate-store__order1 bg-white borderRadius-10">
            <div class="row d-flex align-items-center">
              <div class="col-md-5">
                <div class="corporate-store__order1-left">
                  <div class="corporate-store__order1-thumb mb-60">
                    <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-13.png"
                      alt="Thumb">
                  </div>
                  <div class="corporate-store__order1-info pl-25 pb-45">
                    <p class="corporate-store__order1-text fontsize-16 color-black">内装工事までご相談お受けします。<br>
                      看板外し、ゴミ掃除、残留物処理、水道、電気の停止手続き、<br>
                      そのほかのお困りごとなど、できることはお手伝いします！</p>
                  </div>
                </div>
              </div>
              <div class="col-md-2">
                <div class="corporate-store__order1-icon">
                  <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-14.png"
                    alt="Thumb">
                </div>
              </div>
              <div class="col-md-5 pl-0">
                <div class="corporate-store__order1-info text-center mt-18 mb-40">
                  <p class="corporate-store__order1-title text-center mb-0">
                    <span class="color-black fontsize-48">店舗<span class="fontsize-24">の</span></span>
                    <br>
                    <span class="color7 fontsize-48">現状回復<span class="color-black fontsize-30">をいたします！！</span></span>
                  </p>
                </div>
                <div class="corporate-store__order1-thumb">
                  <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-15.png"
                    alt="Thumb">
                </div>
              </div>
            </div>
          </div>
        </article>
      </div>
    </section>

    <section>
      <div class="container">
        <article class="corporate-store__wp-order1 corporate-store__wp-order1--mobile borderRadius-10">
          <div class="corporate-store__order1 bg-white borderRadius-10">
            <div class="row">

              <div class="col-12">
                <div class="corporate-store__order1-thumb">
                  <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-13.png"
                    alt="Thumb">
                </div>
              </div>
              <div class="col-4 mx-auto mtb-20 d-flex align-items-center">
                <div class="corporate-store__order1-icon--mobile">
                  <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-14aa.png"
                    alt="Thumb">
                </div>
              </div>
              <div class="col-12">
                <div class="corporate-store__order1-thumb">
                  <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-16.png"
                    alt="Thumb">
                </div>
              </div>
              <div class="col-12">
                <div class="corporate-store__order1-info text-center mt-20 mb-20">
                  <p class="corporate-store__order1-title text-center mb-0">
                    <span class="color-black fontsize-16">店舗<span class="fontsize-12">の</span></span>
                    <br>
                    <span class="color7 fontsize-16">現状回復<span class="color-black fontsize-12">をいたします！！</span></span>
                  </p>
                </div>
              </div>
              <div class="col-12">
                <div class="corporate-store__order1-info">
                  <p class="corporate-store__order1-text--mobile fontsize-12 color-black mb-0">内装工事までご相談お受けします。<br>
                    看板外し、ゴミ掃除、残留物処理、水道、電気の停止手続き、<br>
                    そのほかのお困りごとなど、できることはお手伝いします！</p>
                </div>
              </div>

            </div>
          </div>
        </article>
      </div>
    </section>

    <section class="corporate-construction">
      <div class="container">
        <div class="corporate-construction__wp">
          <div class="container">
            <div class="row rowTitle">
              <div class="col-md-10 mx-auto">
                <h2 class="corporate-construction__bigTitle mx-auto text-center mt-15 mb-90">
                  <img class="img-scaledown bigTitle__img"
                    src="<?= get_stylesheet_directory_uri() ?>/images/uploads/bigTitle1019-2.png" alt="Big title">
                </h2>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-6 offset-lg-1 col-md-5 offset-md-1">
                <div class="corporate-construction__info">
                  <p class="corporate-construction__text">
                    店舗様とのお取引で、当社専門外の仕事依頼があります。<br>
                    たとえば…
                  </p>
                  <ul class="corporate-construction__list">
                    <li class="corporate-construction__item">
                      <span>
                        スケルトン復旧工事をしなければならない
                      </span>
                    </li>
                    <li class="corporate-construction__item">
                      <span>壁の張り替えをしなければならない</span>
                    </li>
                    <li class="corporate-construction__item">
                      <span>
                        店舗のクリーニングをしなければならない
                      </span>
                    </li>
                    <li class="corporate-construction__item">
                      <span>閉店作業で人手が足りない</span>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-5 col-md-6">
                <div class="corporate-construction__thumb">
                  <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-17.png"
                    alt="Thumb">
                </div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-7 offset-lg-1 col-md-9 offset-md-1">
                <div
                  class="corporate-panel__wp corporate-construction__panel mx-auto d-flex align-items-center justify-content-center">
                  <img class="corporate-panel__image corporate-panel__image--pc img-fluid"
                    src="<?= get_stylesheet_directory_uri() ?>/images/uploads/panel1019-1.png" alt="Panel">
                  <img class="corporate-panel__image--mobile img-fluid"
                    src="<?= get_stylesheet_directory_uri() ?>/images/uploads/panel1019-mobile.png" alt="Panel">
                </div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="bgFFFBF1">
              <div class="row">
                <div class="col-lg-7 offset-lg-1 col-md-9 offset-md-1">
                  <div class="corporate-construction__wp-list">
                    <div class="row">
                      <div class="col-lg-4 col-md-6 col-6 pr-0">
                        <ul class="corporate-construction__list-company">
                          <li class="corporate-construction__item-company">
                            <span>電気工事業者様</span>

                          </li>
                          <li class="corporate-construction__item-company">
                            <span>建設業者様</span>

                          </li>
                          <li class="corporate-construction__item-company">
                            <span>解体業者様</span>
                          </li>
                        </ul>
                      </div>

                      <div class="col-lg-4 col-md-6 col-6 pr-0">
                        <ul class="corporate-construction__list-company">
                          <li class="corporate-construction__item-company">
                            <span>
                              水道設備業者様
                            </span>
                          </li>
                          <li class="corporate-construction__item-company">
                            <span>内装業者様</span>
                          </li>
                          <li class="corporate-construction__item-company">
                            <span>
                              内装業者様
                            </span>
                          </li>
                        </ul>
                      </div>

                      <div class="col-lg-4 pr-0">
                        <ul class="corporate-construction__list-company">
                          <li class="corporate-construction__item-company">
                            <span>
                              塗装業者様
                            </span>
                          </li>
                          <li class="corporate-construction__item-company">
                            <span>人材派遣業者様</span>
                          </li>
                          <li class="corporate-construction__item-company">
                            <span>
                              運送物流業者様 など
                            </span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>

                  <p class="corporate-construction__text">
                    ご連絡したら下記の情報をお知らせください <br>※メール・電話にて受け付けております。
                  </p>
                  <p class="corporate-construction__text">
                    「会社名」「電話番号」「ご担当者名」「業務内容」「対応地域」<br>
                    弊社のお客様より作業依頼があった場合すぐにご連絡します！
                  </p>

                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>

  <footer class="corporate-footer bg-black ptb-25">
    <div class="container">
      <article class="corporate-footer__header">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <p class="color-white corporate-footer__header-text corporate-footer__text text-center">
              <span class="corporate-footer__content">
                ホーム
              </span>
              <span class="corporate-footer__bor">｜</span>
              <span class="corporate-footer__content">
                ご依頼・お問い合わせ
              </span>
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-10 mx-auto">
            <p class="color-white corporate-footer__text">
              株式会社 木村商事 買取事業部
            </p>
            <p class="color-white corporate-footer__text">
              所在地: 〒414-0036 静岡県伊東市宮川町1-6-20 TEL: 0557-48-6411(ご相談窓口)
            </p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 offset-lg-1 col-md-4">
            <p class="color-white corporate-footer__text">
              ホーム
            </p>
          </div>
          <div class="col-lg-3 offset-lg-1 col-md-4">
            <p class="color-white corporate-footer__text">
              ご依頼-お問い合わせ
            </p>
          </div>
          <div class="col-lg-3 offset-lg-1 col-md-4">
            <p class="color-white corporate-footer__text">
              プライバシーポリシー
            </p>
          </div>
        </div>
      </article>

      <article class="corporate-footer__body">
        <div class="row">
          <div class="col-md-6">
            <div class="corporate-footer__thumb">
              <a href="#">
                <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb-footer1019.png"
                  alt="Thumb">
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="corporate-footer__thumb corporate-footer__thumb--last">
              <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb-footer1019-1.png"
                alt="Thumb">
            </div>
          </div>
        </div>
      </article>

      <article class="corporate-footer__footer">
        <div class="row d-flex align-items-end">
          <div class="col-lg-4 offset-lg-1 col-md-6">
            <div class="corporate-footer__logo">
              <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb-footer1019-2.png"
                alt="Thumb">
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1 col-md-6">
            <p class="color-white corporate-footer__text corporate-footer__footer-text">
              商品、サンプルの送り先 <br>
              所在地: 〒414-0036 静岡県伊東市宮川町1-6-20
            </p>
            <small class="color-white corporate-footer__copyright">
              <span>
                Copyright ©
              </span>
              <span>
                在庫品・閉店品買取の木村商事 All Right Reserved.
              </span>
            </small>
          </div>
        </div>
      </article>
    </div>
  </footer>

  <div class="btn_ontop float-xs-right bg-white">
    <img class="img-scaledown" src="<?= get_stylesheet_directory_uri() ?>/images/icons/scroll.svg" alt="On top">
  </div>

</body>