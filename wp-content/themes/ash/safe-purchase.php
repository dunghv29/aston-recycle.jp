<div class="bg-main-store">
  <?php

/**
 * Template Name: Safe purchase
 */
get_header();
?>

  <script>
  $(function() {
    $('#header-link-2').attr('src',
      '<?= get_stylesheet_directory_uri() ?>/images/uploads/header-link-2-orange.png');
    $('.bg-header').addClass('setHeight');

    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll > 200) {
        $('.bg-header').removeClass('setHeight');
      } else if (scroll <= 200) {
        $('.bg-header').addClass('setHeight');
      }
    })
  })
  </script>

  <style>
  .setHeight {
    height: 500px;
  }

  @media (max-width: 375px) {
    .setHeight {
      height: 300px !important;
    }
  }

  @media (min-width: 412px) and (max-width: 475px) {
    .setHeight {
      height: 350px !important;
    }
  }

  @media (min-width: 476px) and (max-width: 540px) {
    .setHeight {
      height: 400px !important;
    }
  }

  @media (min-width: 541px) and (max-width: 575px) {
    .setHeight {
      height: 450px !important;
    }
  }

  @media (min-width: 576px) and (max-width: 650px) {
    .setHeight {
      height: 500px;
    }
  }

  @media (min-width: 651px) and (max-width: 900px) {
    .setHeight {
      height: 600px;
    }
  }

  @media (min-width: 901px) and (max-width: 991px) {
    .setHeight {
      height: 575px;
    }
  }

  @media (min-width: 1200px) and (max-width: 1300px) {
    .setHeight {
      height: 500px;
    }
  }

  @media (min-width: 1301px) and (max-width: 1500px) {
    .setHeight {
      height: 600px;
    }
  }

  @media (min-width: 1501px) and (max-width: 1599px) {
    .setHeight {
      height: 650px;
    }
  }

  @media (min-width: 1600px) {
    .setHeight {
      height: 675px !important;
    }
  }
  </style>

  <nav aria-label="breadcrumb">
    <div class="container">
      <ol class="breadcrumb breadcrumb-modify d-flex align-items-center bg-white plr-0">
        <li class="breadcrumb-item">
          <a class="d-flex align-items-center" href="/">
            <img class="iconHome mr-14" src="<?= get_stylesheet_directory_uri() ?>/images/icons/home.svg" alt="Home">
            <span class="breadcrumb-home color-primary">Aston</span>
          </a>
        </li>
        <li class="breadcrumb-item d-flex align-items-center"><a href="#" class="breadcrumb-text color-black">買取について</a>
        </li>
        <li class="breadcrumb-item d-flex align-items-center active" aria-current="page"><span
            class="breadcrumb-text color-black">安心の買取</span></li>
      </ol>
    </div>
  </nav>

  <div class="container">
    <header class="text-center safe-purchase__head">
      <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/safe-purchase-head.png" alt="" class="img-fluid">
    </header>
  </div>

  <section class="container">
    <ul class="safe-purchase__links">
      <li>
        <a href="/safe-purchase" title="" class="safe-purchase__link active">安心の買取</a>
      </li>
      <li>
        <a href="/purchase-flow" title="" class="safe-purchase__link">買取の流れ</a>
      </li>
      <li>
        <a href="/goods-for-sale" title="" class="safe-purchase__link">売買の商品</a>
      </li>
    </ul>
  </section>

  <section class="container">
    <h3 class="interior-titleTFooter bg-color1 text-center" data-text="初めての方へ">
      初めての方へ
    </h3>
  </section>

  <section class="container">
    <div class="row safe-purchase-order1__list">
      <div class="col-lg-6 mb-50">
        <div class="safe-purchase-order1__item h-100 bg-white borderRadius-10">
          <header class="safe-purchase-order1__title hp-order1__footer-blue text-center">
            <span class="heading-24 text-white">アストンのホームページへようこそ！</span>
          </header>
          <div class="safe-purchase-order1--sub borderRadius-10">
            <div class="safe-purchase-order1__thumb">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/safe-purchase-order1-1.png" alt=""
                class="img-cover borderRadius-10">
            </div>
            <div class="safe-purchase-order1__info">
              <div class="fontsize-16">アストンは、静岡県伊東市で展開するリサイクルショップです。 【どこよりも高く買取】をモットーに、日々努力しております！<br />
                もちろん販売にも力を入れており毎日新しい商品が続々入荷します。 皆さまのご来店お待ちしております！
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 mb-50">
        <div class="safe-purchase-order1__item h-100 bg-white borderRadius-10">
          <header class="safe-purchase-order1__title hp-order1__footer-blue text-center">
            <span class="heading-24 text-white">高級家具買取強化中！</span>
          </header>
          <div class="safe-purchase-order1--sub borderRadius-10">
            <div class="safe-purchase-order1__thumb">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/safe-purchase-order1-2.png" alt=""
                class="img-cover borderRadius-10">
            </div>
            <div class="safe-purchase-order1__info">
              <div class="fontsize-16">
                高級輸入家具＆一般家具の買取・販売に力を入れております！ USEDでしか手に入らないレアな家具を収集し、リーズナブルなお値段でご提供☆
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row safe-purchase-order1__list">
      <div class="col-12 mb-50">
        <div class="safe-purchase-order1__item h-100 bg-white borderRadius-10">
          <header class="safe-purchase-order1__title hp-order1__footer-blue text-center">
            <span class="heading-24 text-white">アストンインテリア</span>
          </header>
          <div class="safe-purchase-order1--sub3 borderRadius-10 row align-items-center">
            <div class="col-lg-5 order-lg-2 mx-auto">
              <div class="safe-purchase-order1__thumb text-center">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/aston_interior-logo-300.png" alt=""
                  class="img-fluid borderRadius-10">
              </div>
            </div>

            <div class="col-lg-7 order-lg-1">
              <div class="safe-purchase-order1__info">
                <div class="fontsize-16">アストンにはメーカー家具・輸入家具の専門店もございます。! 他では手に入りにくいし珍しい商品を豊富に取り揃えております！<br />
                  <br />
                  「輸入家具ってたかいんじゃないの～？」と！思っている方！！ 是非お越し下さい！リーズナブル価格にて好評販売中！！
                  他にも1000点を超える珍しい輸入雑貨やペルシャ絨毯、シャンデリアなども取り扱っております。
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-safe-purchare-2 mb-0">
    <div class="container">
      <h2 class="text-center hp-order3__header-big pb-40">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/safe-purchase-title-2.png" alt=""
          class="img-fluid d-sm-block d-none mx-auto">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/safe-purchase-title-2-mobile.png" alt=""
          class="img-fluid d-sm-none d-block mx-auto">
      </h2>
    </div>
    <div class="container">
      <ul class="safe-purchare-order2__list">
        <li>
          <div class="safe-purchare-order2__item row">
            <div class="col-lg-4 col-md-5">
              <div class="h-100">
                <div class="safe-purchare-order2__thumb">
                  <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/safe-purchase-order2-1.png" alt=""
                    class="img-cover">
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="safe-purchare-order2__info h-100">
                <header class="safe-purchare-order2__info-head heading-24 color3">熟練の査定員による高額買取！</header>
                <div class="safe-purchare-order2__info-desc">
                  <div class="safe-purchare-order2__info-text fontsize-16">
                    当店では年間4000件以上の買取実績があり、これらの経験から、家電・家具の相場を熟しております。<br />
                    相場を知り尽くした熟練の査定員が、利益の出るギリギリの額をご提示することで、高額買取を実現させています！</div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <ul class="safe-purchare-order2__list ">
        <li>
          <div class="safe-purchare-order2__item row-reverse row">
            <div class="col-lg-4 col-md-5">
              <div class="h-100">
                <div class="safe-purchare-order2__thumb">
                  <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/safe-purchase-order2-2.png" alt=""
                    class="img-cover">
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="safe-purchare-order2__info h-100">
                <header class="safe-purchare-order2__info-head heading-24 color3">らくらく便利な出張買取！</header>
                <div class="safe-purchare-order2__info-desc">
                  <div class="safe-purchare-order2__info-text fontsize-16">
                    「家具が大きすぎて運ぶ気にならない…」「外部に頼むと費用がかかってしまう…」 このようなお悩みも、ASTONなら解決！ 対象の地域にお住まいなら、無料にて出張買取いたします。
                    運搬も当店スタッフが行いますので、お客様はお待ちいただくだけで結構です。
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
      <ul class="safe-purchare-order2__list">
        <li>
          <div class="safe-purchare-order2__item row">
            <div class="col-lg-4 col-md-5">
              <div class="h-100">
                <div class="safe-purchare-order2__thumb">
                  <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/hp-order3-3.png" alt=""
                    class="img-cover">
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="safe-purchare-order2__info h-100">
                <header class="safe-purchare-order2__info-head heading-24 color3">お客様のご負担は無料！</header>
                <div class="safe-purchare-order2__info-desc">
                  <div class="safe-purchare-order2__info-text fontsize-16">
                    当店まで商品をお売りいただくのに、査定費・出張費・処分費など、 お客様からはご費用をいただきません！<br /> お気軽にお問い合わせください。
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="bg-safe-purchare-3 borderBottom-10">
    <div class="container">
      <section class="hp-order3">
        <h2 class="text-center hp-order3__header-big mb-40">
          <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/safe-purchase-title-3.png" alt=""
            class="img-fluid d-sm-block d-none mx-auto">
          <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/safe-purchase-title-3-mobile.png" alt=""
            class="img-fluid d-sm-none d-block mx-auto">
        </h2>
        <div class="hp-order3__list">
          <div class="row mlr_10">
            <div class="col-lg-4 plr-10 mb-70">
              <div class="hp-order3__item">
                <div class="bg-white h-100 borderRadius-10">
                  <header class="hp-order3__header">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hand-1.svg" alt=""
                      class="img-fluid iconHand">
                    <span class="heading-24 text-white ml-10">説明書や付属品を 忘れずに</span>
                  </header>
                  <div class="hp-order3__item-sub">
                    <div class="hp-order3__thumb">
                      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/safe-purchase-order3-1.png" alt=""
                        class="img-cover">
                    </div>
                    <div class="hp-order3__info respon-16">
                      説明書や保証書・観点書や付属品、ケースなどがある場合は合わせてご用意ください。高価買取とさせていただきます。 また、重要な付属品等が欠損している場合、買取りをお断りさせて頂く場合がございます。
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 plr-10 mb-70">
              <div class="hp-order3__item">
                <div class="bg-white h-100 borderRadius-10">
                  <header class="hp-order3__header">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hand-2.svg" alt=""
                      class="img-fluid iconHand">
                    <span class="heading-24 text-white ml-10">汚れやほこり等は なるべくキレイに</span>
                  </header>
                  <div class="hp-order3__item-sub">
                    <div class="hp-order3__thumb">
                      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/safe-purchase-order3-2.png" alt=""
                        class="img-cover">
                    </div>
                    <div class="hp-order3__info respon-16">
                      見た目がキレイな方が、高価買取となる場合がございます。目立つような汚れやほこりなどは落としてキレイな状態でご用意ください。
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 plr-10 mb-70">
              <div class="hp-order3__item">
                <div class="bg-white h-100 borderRadius-10">
                  <header class="hp-order3__header">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hand-3.svg" alt=""
                      class="img-fluid iconHand">
                    <span class="heading-24 text-white ml-10">店舗買取を<br /> オススメします</span>
                  </header>
                  <div class="hp-order3__item-sub">
                    <div class="hp-order3__thumb">
                      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/safe-purchase-order3-3.png" alt=""
                        class="img-cover">
                    </div>
                    <div class="hp-order3__info respon-16">
                      出張買取やインターネット査定に比べ、手間や正確な商品を確認させていただける店舗買取はそれだけで高価買取の対象となります。<br /> 店舗のお近くにお住まいの方はぜひお越しください。
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="container">
      <div class="row rowBranch">
        <div class="col-12">
          <h4 class="branchTitle line-4 color-primary text-center mx-auto mt-100 mb-55">
            <img class="img-fluid titleBranch-pc"
              src="<?= get_stylesheet_directory_uri() ?>/images/uploads/titleBranch.png" alt="Title">
            <img class="img-fluid titleBranch-mobile mx-auto"
              src="<?= get_stylesheet_directory_uri() ?>/images/uploads/titleBranch-mobile.png" alt="Title">
          </h4>
        </div>
      </div>
    </div>

    <div class="container mb-50">
      <div class="row">
        <div class="col-md-4 col-branch">
          <div class="branchBody container">
            <div class="branchItem row">
              <div class="branchThumb branchThumb--boderPrimary col-6 col-xl-6 col-lg-12 col-md-12">
                <a href="#" class="">
                  <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/branch1003-1.png"
                    alt="Branch">
                </a>
              </div>
              <div class="branchInfo col-6 col-xl-6 col-lg-12 col-md-12 d-flex flex-column my-auto">
                <a href="#" class="branchInfo__name color-primary mb-0">
                  アストン伊東本店
                </a>
                <div class="branchInfo__phone">
                  <img class="branchInfo__icon" src="<?= get_stylesheet_directory_uri() ?>/images/icons/red-phone.svg"
                    alt="Phone icon">
                  <span class="branchInfo__number-phone color-black">
                    0557-52-3677
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-branch">
          <div class="branchBody container">
            <div class="branchItem row">
              <div class="branchThumb branchThumb--boderPrimary col-6 col-xl-6 col-lg-12 col-md-12">
                <a href="#" class="">
                  <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/branch1003-2.png"
                    alt="Branch">
                </a>
              </div>
              <div class="branchInfo col-6 col-xl-6 col-lg-12 col-md-12 d-flex flex-column my-auto">
                <a href="" class="branchInfo__name color-primary mb-0">
                  アストン修善寺
                </a>
                <div class="branchInfo__phone">
                  <img class="branchInfo__icon" src="<?= get_stylesheet_directory_uri() ?>/images/icons/red-phone.svg"
                    alt="Phone icon">
                  <span class="branchInfo__number-phone color-black">
                    0558-99-9970
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 col-branch">
          <div class="branchBody container">
            <div class="branchItem row">
              <div class="branchThumb branchThumb--borderBrown col-6 col-xl-6 col-lg-12 col-md-12">
                <a href="#" class="">
                  <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/branch1003-3.png"
                    alt="Branch">
                </a>
              </div>
              <div class="branchInfo col-6 col-xl-6 col-lg-12 col-md-12 d-flex flex-column my-auto">
                <a href="#" class="branchInfo__name color6 mb-0">
                  アストンインテリア
                </a>
                <div class="branchInfo__phone">
                  <img class="branchInfo__icon" src="<?= get_stylesheet_directory_uri() ?>/images/icons/brown-phone.svg"
                    alt="Phone icon">
                  <span class="branchInfo__number-phone color-black">
                    0557-52-6841
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-white pb-1 mt-20">
    <div class="container">
      <?php include 'top-footer.php';?>
    </div>
  </section>
  <?php
get_footer();