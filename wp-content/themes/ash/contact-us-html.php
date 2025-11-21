<?php

/**
 * Template Name: Contact us html
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
  <script src="<?=get_stylesheet_directory_uri()?>/js/functions.js"></script>
</head>

<script>

  $(function () {
    $(window).scroll(function(){
      var scroll = $(window).scrollTop();
      if(scroll > 350) {				
        $('.btn_ontop').addClass('display');
      }else if (scroll <=100){
        $('.btn_ontop').removeClass('display');
      }
    });

    $('.btn_ontop').click(function(){
      $('html,body').animate({'scrollTop': 0}, 1500);
      return false;
    });
  })

</script>

<body>
  <main id="contact" class="contact">
    <section class="corporate-banner">
      <img class="img-cover corporate-banner__background" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/background-banner1019.png" alt="Banner">
      <img class="img-cover corporate-banner__background--mobile" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/background-banner1019-mobile.png" alt="Banner">
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
                <a href="#" class="corporate-banner__upper-link color-white">ホーム</a>
                <a href="#" class="corporate-banner__upper-link active color-white">ご依頼・お問い合わせ</a>
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
            <a href="#" class="corporate-banner__upper-link color-white corporate-banner__upper-link--mobile">ホーム</a>
          </div>
          <div class="col-6">
            <a href="#" class="corporate-banner__upper-link active color-white corporate-banner__upper-link--mobile">ご依頼・お問い合わせ</a>
          </div>
        </div>
      </div>
    </section>

    <section class="corporate-bigTitle contact-bigTitle">
      <div class="container">
        <div class="row rowTitle">
          <div class="col-12 mx-auto">
            <h2 class="bigTitle corporate-bigTitle__bigTitle contact-bigTitle__bigTitle mx-auto text-center mt-30 mb-80">
              <img class="img-scaledown bigTitle__img bigTitle__img--pc" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/bigTitle1020.png" alt="Big title">
              <img class="img-scaledown bigTitle__img bigTitle__img--mobile" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/bigTitle1020-mobile.png" alt="Big title">
            </h2>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="corporate-store__wp-item contact-wp-item">
          <h3 class="corporate-store__panel contact-panel ptb-10 plr-20 bg-color2 borderRadius-10 text-white d-flex align-items-center justify-content-center">
            買取りに必要な情報
          </h3>
          <div class="corporate-answer__outer borderRadius-10 p-10">
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
                    <img class="corporate-answer__tick corporate-store__required-tick" src="http://localhost/aston-homepage/ash/wp-content/themes/ash/images/icons/tick.svg" alt="Icon tick">
                    <div class="corporate-answer__wp-info">
                      <h3 class="corporate-store__required-title color2 mb-15">
                        店舗内の写真
                      </h3>
                      <p class="corporate-store__required-text color-black mb-0">
                        商品の物量を判断するため写真を <br>
                        複数枚用意してください。
                      </p>
                    </div>
                    
                  </div>
                  <div class="corporate-store__required-item d-flex ">
                    <img class="corporate-answer__tick corporate-store__required-tick" src="http://localhost/aston-homepage/ash/wp-content/themes/ash/images/icons/tick.svg" alt="Icon tick">
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
                    <img class="corporate-answer__tick corporate-store__required-tick" src="http://localhost/aston-homepage/ash/wp-content/themes/ash/images/icons/tick.svg" alt="Icon tick">
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
                    <img class="corporate-answer__tick corporate-store__required-tick" src="http://localhost/aston-homepage/ash/wp-content/themes/ash/images/icons/tick.svg" alt="Icon tick">
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
                    <img class="corporate-answer__tick corporate-store__required-tick" src="http://localhost/aston-homepage/ash/wp-content/themes/ash/images/icons/tick.svg" alt="Icon tick">
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
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-info">
      <div class="container">
        <div class="contact-info__outer bg-FFFBF1 borderRadius-10">
          <div class="contact-info__inner">
            <img class="contact-info__sub-img" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/telephone1020.png"
                alt="Phone icon">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <h3 class="contact-info__title color8 mt-15">
                  電話。メールで問い合わせる
                </h3>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 offset-xl-1">
                <a name="" id="" class="contact-info__phone d-inline-flex align-items-center" href="tel: 0557-52-3677">
                  <img class="contact-info__icon" src="<?= get_stylesheet_directory_uri() ?>/images/icons/phone1020.svg"
                    alt="Phone icon">
                  <span class="contact-info__number-phone color-primary ml-15">
                    0557-48-6411
                  </span>
                </a>
              </div>
            </div>
            <div class="contact-info__note row d-flex align-items-center">
              <div class="col-xl-5 col-lg-6 col-md-7 offset-xl-1 mx-auto">
                <div class="contact-info__bg-wp">
                  <span class="contact-info__text text-center color-black">
                    「閉店買取のサイトを見ました」
                        とお伝えください!
                  </span>
                </div>
              </div>
              <div class="col-xl-5 col-lg-6 offset-xl-1">
                <a name="" id="" class="contact-info__mess d-flex align-items-center justify-content-center" href="#">
                  <img class="contact-info__mail" src="<?= get_stylesheet_directory_uri() ?>/images/icons/mail1020.svg" alt="Mail icon">
                  <span class="contact-info__add text-white ml-10">
                    メールを送る
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="contact-partners-text mb-20">
          <h3 class="corporate-store__panel contact-panel ptb-10 plr-20 bg-color2 borderRadius-10 text-white d-flex align-items-center justify-content-center">
            買取りパートナー募集
          </h3>
          <div class="contact-partners">
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <p class="contact-partners__text color-black mb-30">
                  木村商事と協力して買取りをするパートナーを全国から募集しています。<br>
                  お問い合わせの際に以下の情報をお伝えください。
                </p>
                <p class="contact-partners__text color-black">
                「会社名」「電話番号」「ご担当者名」「買取可能商品ジャンル」「買取不可能商品ジャンル」<br>
                「対応地域」「買取り価格に自信がある商品ジャンル」
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-info">
      <div class="container">
        <div class="contact-info__outer bg-FFFBF1 borderRadius-10">
          <div class="contact-info__inner">
            <img class="contact-info__sub-img" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/telephone1020.png"
                alt="Phone icon">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <h3 class="contact-info__title color8 mt-15">
                  電話。メールで問い合わせる
                </h3>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 offset-xl-1">
                <a name="" id="" class="contact-info__phone d-inline-flex align-items-center" href="tel: 0557-52-3677">
                  <img class="contact-info__icon" src="<?= get_stylesheet_directory_uri() ?>/images/icons/phone1020.svg"
                    alt="Phone icon">
                  <span class="contact-info__number-phone color-primary ml-15">
                    0557-48-6411
                  </span>
                </a>
              </div>
            </div>
            <div class="contact-info__note row d-flex align-items-center">
              <div class="col-xl-5 col-lg-6 col-md-7 offset-xl-1 mx-auto">
                <div class="contact-info__bg-wp">
                  <span class="contact-info__text text-center color-black">
                    「閉店買取のサイトを見ました」
                        とお伝えください!
                  </span>
                </div>
              </div>
              <div class="col-xl-5 col-lg-6 offset-xl-1">
                <a name="" id="" class="contact-info__mess d-flex align-items-center justify-content-center" href="#">
                  <img class="contact-info__mail" src="<?= get_stylesheet_directory_uri() ?>/images/icons/mail1020.svg" alt="Mail icon">
                  <span class="contact-info__add text-white ml-10">
                    メールを送る
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="contact-partners-text mb-20">
          <h3 class="corporate-store__panel contact-panel ptb-10 plr-20 bg-color2 borderRadius-10 text-white d-flex align-items-center justify-content-center">
            店舗工事協力業者
          </h3>
          <div class="contact-partners">
            <div class="row">
              <div class="col-md-10 offset-md-1">
                <p class="contact-partners__text color-black mb-30">
                  木村商事と協力して買取りをするパートナーを全国から募集しています。
                </p>
                <p class="contact-partners__text color-black mb-30">
                  お問い合わせの際に以下の情報をお伝えください。
                </p>
                <p class="contact-partners__text color-black">
                  「会社名」「電話番号」「ご担当者名」「業務内容」「対応地域」
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-info">
      <div class="container">
        <div class="contact-info__outer bg-FFFBF1 borderRadius-10">
          <div class="contact-info__inner">
            <img class="contact-info__sub-img" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/telephone1020.png"
                alt="Phone icon">
            <div class="row">
              <div class="col-lg-10 offset-lg-1">
                <h3 class="contact-info__title color8 mt-15">
                  電話。メールで問い合わせる
                </h3>
              </div>
            </div>
            <div class="row">
              <div class="col-xl-6 offset-xl-1">
                <a name="" id="" class="contact-info__phone d-inline-flex align-items-center" href="tel: 0557-52-3677">
                  <img class="contact-info__icon" src="<?= get_stylesheet_directory_uri() ?>/images/icons/phone1020.svg"
                    alt="Phone icon">
                  <span class="contact-info__number-phone color-primary ml-15">
                    0557-48-6411
                  </span>
                </a>
              </div>
            </div>
            <div class="contact-info__note row d-flex align-items-center">
              <div class="col-xl-5 col-lg-6 col-md-7 offset-xl-1 mx-auto">
                <div class="contact-info__bg-wp">
                  <span class="contact-info__text text-center color-black">
                    「閉店買取のサイトを見ました」
                    とお伝えください!
                  </span>
                </div>
              </div>
              <div class="col-xl-5 col-lg-6 offset-xl-1">
                <a name="" id="" class="contact-info__mess d-flex align-items-center justify-content-center" href="#">
                  <img class="contact-info__mail" src="<?= get_stylesheet_directory_uri() ?>/images/icons/mail1020.svg" alt="Mail icon">
                  <span class="contact-info__add text-white ml-10">
                    メールを送る
                  </span>
                </a>
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
                <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb-footer1019.png" alt="Thumb">
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="corporate-footer__thumb corporate-footer__thumb--last">
              <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb-footer1019-1.png" alt="Thumb">
            </div>
          </div>
        </div> 
      </article>

      <article class="corporate-footer__footer">
        <div class="row d-flex align-items-end">
          <div class="col-lg-4 offset-lg-1 col-md-6">
            <div class="corporate-footer__logo">
              <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb-footer1019-2.png" alt="Thumb">
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