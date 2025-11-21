<?php

/**
 * Template Name: Purchase results html
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />
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
                <a href="#" class="corporate-banner__upper-link link1 color-white">ホーム</a>
                <a href="#" class="corporate-banner__upper-link link2 color-white">ご依頼・お問い合わせ</a>
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
              class="corporate-banner__upper-link  color-white link1 corporate-banner__upper-link--mobile">ホーム</a>
          </div>
          <div class="col-6">
            <a href="#"
              class="corporate-banner__upper-link color-white link2 corporate-banner__upper-link--mobile">ご依頼・お問い合わせ</a>
          </div>
        </div>
      </div>
    </section>

    <section class="corporate-bigTitle">
      <div class="container">
        <h3 class="interior-titleTFooter interior-titleTFooter--blue text-center" data-text="最近の買取り実績を見る">
          <div class="p-inherit">最近の買取り実績を見る</div>
        </h3>
      </div>
    </section>

    <section class="container">
      <div class="bg-color2 latest-purchase latest-purchase--mb">最新の買取事例</div>
    </section>

    <section class="purchase-results__slides bg-color8 ptb-70">
      <div class="container">
        <div class="slider">
          <div class="corporate-purchase__col-item">
            <article class="purchase-results__item-white">
              <div class="bg-white h-100 borderRadius-10">
                <div class="corporate-purchase__thumb">
                  <img class="img-cover corporate-purchase__image"
                    src="<?= get_stylesheet_directory_uri() ?>/images/uploads/slider-1.png" alt="image">
                </div>
                <div class="corporate-purchase__info p-20">
                  <h4 class="corporate-purchase__text color-black line-4 line-4">
                    バツグ。カバン店の閉店につき 店舗在庫の買取（東京都）
                  </h4>
                </div>
              </div>
            </article>
          </div>

          <div class="corporate-purchase__col-item">
            <article class="purchase-results__item-white">
              <div class="bg-white borderRadius-10 h-100">
                <div class="corporate-purchase__thumb">
                  <img class="img-cover corporate-purchase__image"
                    src="<?= get_stylesheet_directory_uri() ?>/images/uploads/slider-1.png" alt="image">
                </div>
                <div class="corporate-purchase__info p-20">
                  <h4 class="corporate-purchase__text color-black line-4 line-4">
                    バツグ。カバン店の閉店につき 店舗在庫の買取（東京都）
                  </h4>
                </div>
              </div>
            </article>
          </div>

          <div class="corporate-purchase__col-item">
            <article class="purchase-results__item-white">
              <div class="bg-white borderRadius-10 h-100">
                <div class="corporate-purchase__thumb">
                  <img class="img-cover corporate-purchase__image"
                    src="<?= get_stylesheet_directory_uri() ?>/images/uploads/slider-1.png" alt="image">
                </div>
                <div class="corporate-purchase__info p-20">
                  <h4 class="corporate-purchase__text color-black line-4 line-4">
                    バツグ。カバン店の閉店につき 店舗在庫の買取（東京都）
                  </h4>
                </div>
              </div>
            </article>
          </div>
          <div class="corporate-purchase__col-item">
            <article class="purchase-results__item-white">
              <div class="bg-white borderRadius-10 h-100">
                <div class="corporate-purchase__thumb">
                  <img class="img-cover corporate-purchase__image"
                    src="<?= get_stylesheet_directory_uri() ?>/images/uploads/slider-1.png" alt="image">
                </div>
                <div class="corporate-purchase__info p-20">
                  <h4 class="corporate-purchase__text color-black line-4 line-4">
                    バツグ。カバン店の閉店につき 店舗在庫の買取（東京都）
                  </h4>
                </div>
              </div>
            </article>
          </div>
          <div class="corporate-purchase__col-item">
            <article class="purchase-results__item-white">
              <div class="bg-white borderRadius-10 h-100">
                <div class="corporate-purchase__thumb">
                  <img class="img-cover corporate-purchase__image"
                    src="<?= get_stylesheet_directory_uri() ?>/images/uploads/slider-1.png" alt="image">
                </div>
                <div class="corporate-purchase__info p-20">
                  <h4 class="corporate-purchase__text color-black line-4 line-4">
                    バツグ。カバン店の閉店につき 店舗在庫の買取（東京都）
                  </h4>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="container-lg container-fluid">
      <div class="row">
        <div class="col-lg-9 col-md-8">
          <section class="corporate-purchase">
            <div class="row rowPurchaseResult">
              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href=".modal1" data-toggle="modal">
                  <article class="corporate-purchase__item">
                    <div class="bg-white h-100 borderRadius-10">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-1.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          ホテルの液晶テレビ約200台の買取
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href=".modal2" data-toggle="modal">
                  <article class="corporate-purchase__item">
                    <div class="bg-white borderRadius-10 h-100">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-2.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          大型保養所の家具・<br />
                          家電一式買取４t車２台分
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white borderRadius-10 h-100">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-3.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          改装予定の大型旅館家具・家電一式引き上げ
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white h-100 borderRadius-10">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-1.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          ホテルの液晶テレビ約200台
                          の買取
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white borderRadius-10 h-100">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-2.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          大型保養所の家具・<br />
                          家電一式買取４t車２台分
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white borderRadius-10 h-100">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-3.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          改装予定の大型旅館家具・家電一式引き上げ
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white h-100 borderRadius-10">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-1.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          ホテルの液晶テレビ約200台
                          の買取
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white borderRadius-10 h-100">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-2.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          大型保養所の家具・<br />
                          家電一式買取４t車２台分
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white borderRadius-10 h-100">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-3.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          改装予定の大型旅館家具・家電一式引き上げ
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white h-100 borderRadius-10">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-1.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          ホテルの液晶テレビ約200台
                          の買取
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white borderRadius-10 h-100">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-2.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          大型保養所の家具・<br />
                          家電一式買取４t車２台分
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white borderRadius-10 h-100">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-3.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          改装予定の大型旅館家具・家電一式引き上げ
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white h-100 borderRadius-10">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-1.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          ホテルの液晶テレビ約200台
                          の買取
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white borderRadius-10 h-100">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-2.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          大型保養所の家具・<br />
                          家電一式買取４t車２台分
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white borderRadius-10 h-100">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-3.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          改装予定の大型旅館家具・家電一式引き上げ
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white h-100 borderRadius-10">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-1.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          ホテルの液晶テレビ約200台
                          の買取
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white borderRadius-10 h-100">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-2.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          大型保養所の家具・<br />
                          家電一式買取４t車２台分
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                <a href="#">
                  <article class="corporate-purchase__item">
                    <div class="bg-white borderRadius-10 h-100">
                      <div class="corporate-purchase__thumb">
                        <img class="img-cover corporate-purchase__image"
                          src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-3.png" alt="Thumb">
                      </div>
                      <div class="corporate-purchase__info p-20">
                        <h4 class="corporate-purchase__text color-black line-4">
                          改装予定の大型旅館家具・家電一式引き上げ
                        </h4>
                      </div>
                    </div>
                  </article>
                </a>
              </div>
            </div>
          </section>
          <nav aria-label="Page navigation example">
            <ul class="pagination purchase-results__pagination">
              <li class="purchase-results__page-item disabled">
                <a class="purchase-results__page-link" href="#" tabindex="-1">
                  << </a>
              </li>
              <li class="purchase-results__page-item active"><a class="purchase-results__page-link" href="#">1</a></li>
              <li class="purchase-results__page-item"><a class="purchase-results__page-link" href="#">2</a></li>
              <li class="purchase-results__page-item"><a class="purchase-results__page-link" href="#">3</a></li>
              <li class="purchase-results__page-item"><a class="purchase-results__page-link" href="#">4</a></li>
              <li class="purchase-results__page-item-dot"><span class="purchase-results__page-dot">
                  <img src="<?= get_stylesheet_directory_uri() ?>/images/icons/ellipses.svg" alt="">
                </span></li>
              <li class="purchase-results__page-item"><a class="purchase-results__page-link" href="#">5</a></li>
              <li class="purchase-results__page-item">
                <a class="purchase-results__page-link" href="#">>></a>
              </li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="purchase-results__cate stickys">
            <div class="purchase-results__cate-head">
              カテゴリー
            </div>
            <div class="purchase-results__cate-body">
              <ul class="purchase-results__cates">
                <li>
                  <a href="#" class="purchase-results__cate-link">金物屋</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">全記事</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">千葉県</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">東京都</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">神奈川県</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">静岡県</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">愛知県</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">石川県</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">京都府</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">大阪府</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">兵庫県</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">コンビニ</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">ホームセンター</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">金物店</a>
                </li>
                <li>
                  <a href="#" class="purchase-results__cate-link">仏具・仏壇店</a>
                </li>
              </ul>
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
                <a href="">
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

  <div class="modal fade aston-modal modal1" id="modal1">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-slider">
          <div>
            <div class="carousel-item item active">
              <div class="image">
                <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-1.png"
                  alt="Thumb">
              </div>
              <div class="aston-modal--text">ホテルの液晶テレビ約100台の買取</div>
            </div>
          </div>
          <div>
            <div class="carousel-item item active">
              <div class="image">
                <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-2.png"
                  alt="Thumb">
              </div>
              <div class="aston-modal--text">ホテルの液晶テレビ約200台の買取</div>
            </div>
          </div>
          <div>
            <div class="carousel-item item active">
              <div class="image">
                <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-3.png"
                  alt="Thumb">
              </div>
              <div class="aston-modal--text">ホテルの液晶テレビ約300台の買取</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade aston-modal modal2" id="modal2">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-slider1">
          <div>
            <div class="carousel-item item active">
              <div class="image">
                <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-2.png"
                  alt="Thumb">
              </div>
              <div class="aston-modal--text">ホテルの液晶テレビ約100台の買取</div>
            </div>
          </div>
          <div>
            <div class="carousel-item item active">
              <div class="image">
                <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-1.png"
                  alt="Thumb">
              </div>
              <div class="aston-modal--text">ホテルの液晶テレビ約200台の買取</div>
            </div>
          </div>
          <div>
            <div class="carousel-item item active">
              <div class="image">
                <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb1019-3.png"
                  alt="Thumb">
              </div>
              <div class="aston-modal--text">ホテルの液晶テレビ約300台の買取</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.slider').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      responsive: [{
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 580,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
    let flag = 0
    const sl = $('.modal-slider')
    sl.find('img').css('display', 'none')
    let flag1 = 0
    const sl1 = $('.modal-slider1')
    sl1.find('img').css('display', 'none')
    $('a[href=".modal1"]').click(function() {
      $('body').append('<div class="s-spin"><div class="loader"></div></div>')
    })
    $('a[href=".modal2"]').click(function() {
      $('body').append('<div class="s-spin1"><div class="loader"></div></div>')
    })
    $("#modal1").on('shown.bs.modal', function() {
      sl.find('img').removeAttr('style')
      $('.s-spin').remove()
      if (!flag) {
        sl.slick({
          slidesToShow: 1,
          dots: true,
          speed: 500,
          fade: true,
        });

        flag++
      }
    });
    $("#modal2").on('shown.bs.modal', function() {
      sl1.find('img').removeAttr('style')
      $('.s-spin1').remove()
      if (!flag1) {
        sl1.slick({
          slidesToShow: 1,
          dots: true,
          speed: 500,
          fade: true,
        });

        flag1++
      }
    });
  });
  </script>

</body>