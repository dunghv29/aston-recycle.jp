<div class="bg-main-store">
  <?php

/**
 * Template Name: Purchase flow
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
            class="breadcrumb-text color-black">買取の流れ</span></li>
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
        <a href="/safe-purchase" title="" class="safe-purchase__link">安心の買取</a>
      </li>
      <li>
        <a href="/purchase-flow" title="" class="safe-purchase__link active">買取の流れ</a>
      </li>
      <li>
        <a href="/goods-for-sale" title="" class="safe-purchase__link">売買の商品</a>
      </li>
    </ul>
  </section>

  <section class="container">
    <div class="row safe-purchase-order1__list">
      <div class="col-12 mb-50">
        <div class="safe-purchase-order1__item h-100 bg-white borderRadius-10">
          <header class="hp-order1__footer-blue purchase-flow-socBlue text-center heading-24 text-white">
            初めての買取でお悩みの方！まずはアストンをご利用下さい！！
          </header>
          <div class="inquiries-phone__body fontsize-16 text-center">熟練スタッフが安心・丁寧に対応致します！
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-safe-purchare-2 mb-0">
    <div class="container">
      <h2 class="text-center purchase-flow__header-big1 pb-50">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/purchase-flow-title-1.png" alt=""
          class="img-fluid ">
      </h2>
    </div>

    <div class="container">
      <section class="hp-order4">
        <div class="hp-order4__list">
          <div class="row">
            <div class="col-lg-4 mb-30">
              <div class="hp-order4__item purchase-flow__item">
                <div class="h-100 borderRadius-10">
                  <header class="hp-order4__header purchase-flow__head">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hp-order4-1.png" alt=""
                      class="iconNumber50">
                    <span class="heading-24 color3 ml-6">商品のお近くの店舗に持ち込む</span>
                  </header>
                  <div class="purchase-flow__item-sub bg-white  borderRadius-10">
                    <div class="purchase-flow__thumb">
                      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/purchase-flow-image-1.png" alt=""
                        class="img-cover borderRadius-10">
                    </div>
                    <div class="hp-order4__info">
                      <div class="fontsize-16 mb-10 text24">
                        見積は完全無料！
                      </div>
                      <div class="fontsize-16 mb-25">
                        お近くの店舗に商品をお持ち込み下さい。 重たい荷物はスタッフがお運びいたしますのでお気軽にお声掛けください。
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30">
              <div class="hp-order4__item purchase-flow__item">
                <div class="h-100 borderRadius-10">
                  <header class="hp-order4__header purchase-flow__head">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hp-order4-2.png" alt=""
                      class="iconNumber50">
                    <span class="heading-24 color3 ml-6">店舗スタッフによる査定</span>
                  </header>
                  <div class="purchase-flow__item-sub bg-white  borderRadius-10">
                    <div class="purchase-flow__thumb">
                      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/purchase-flow-image-2.png" alt=""
                        class="img-cover borderRadius-10">
                    </div>
                    <div class="hp-order4__info">
                      <div class="fontsize-16 mb-10 text24">
                        古くても大丈夫！
                      </div>
                      <div class="fontsize-16 mb-25">
                        「これは売れないだろう？」と思っている方！！ 古くても品物によって売れる物もございます。 あきらめないで一度ご相談下さい！
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30">
              <div class="hp-order4__item purchase-flow__item">
                <div class="h-100 borderRadius-10">
                  <header class="hp-order4__header purchase-flow__head">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hp-order4-3.png" alt=""
                      class="iconNumber50">
                    <span class="heading-24 color3 ml-6">査定金額の確認。支払い</span>
                  </header>
                  <div class="purchase-flow__item-sub bg-white  borderRadius-10">
                    <div class="purchase-flow__thumb">
                      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/purchase-flow-image-3.png" alt=""
                        class="img-cover borderRadius-10">
                    </div>
                    <div class="hp-order4__info">
                      <div class="fontsize-16 mb-10 text24">
                      </div>
                      <div class="fontsize-16 mb-25">
                        査定させていただいた金額をご提示します。金額にご納得がいかない場合はキャンセルいただいて問題ありません。 ご了承頂いた場合、買取表にご記入いただいて買取金額をお支払いいたします。
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mb-30">
              <div class="hp-order4__item">
                <div class="h-100 borderRadius-10">
                  <header class="hp-order4__header purchase-flow__head justify-content-center">
                    <span class="heading-24 color3">店頭買取大歓迎！</span>
                  </header>
                  <div class="purchase-flow__item-sub bg-white  borderRadius-10">
                    <div class="purchase-flow__info text-center">
                      <div class="fontsize-16">
                        当店に直接商品をお持ち頂くことも可能です。 お気軽にお問合せ下さい。
                      </div>
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
      <h2 class="text-center purchase-flow__header-big2 pb-50">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/purchase-flow-title-2.png" alt=""
          class="img-fluid ">
      </h2>
    </div>

    <div class="container">
      <section class="hp-order4">
        <div class="hp-order4__list">
          <div class="row">
            <div class="col-12 mb-30">
              <div class="hp-order4__item">
                <div class="h-100 borderRadius-10">
                  <header class="hp-order4__header purchase-flow__head justify-content-center">
                    <span class="heading-24 color3">安全・安心の出張買取</span>
                  </header>
                  <div class="purchase-flow__item-sub bg-white  borderRadius-10">
                    <div class="purchase-flow__info text-center">
                      <div class="fontsize-16">
                        「お店まで距離がある」「大量なので持ち運びが難しい」などお客様のご都合に合わせて出張買取も行います。<br />
                        さらに、社名が表記されていないトラックにてお伺いするのでご近所に目立つことなく買取を進めることができます
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30">
              <div class="hp-order4__item purchase-flow__item">
                <div class="h-100 borderRadius-10">
                  <header class="hp-order4__header purchase-flow__head">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hp-order4-1.png" alt=""
                      class="iconNumber50">
                    <span class="heading-24 color3 ml-6">まずはお問合せ下さい</span>
                  </header>
                  <div class="purchase-flow__item-sub bg-white  borderRadius-10">
                    <div class="purchase-flow__thumb">
                      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/purchase-flow-image-4.png" alt=""
                        class="img-cover borderRadius-10">
                    </div>
                    <div class="hp-order4__info">
                      <div class="fontsize-16 mb-25">
                        なにか質問があれば遠慮しないでお問い合わせください <br />無料でご自宅に買取スタッフがお伺い メールやお電話でお問合せ下さい。
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30">
              <div class="hp-order4__item purchase-flow__item">
                <div class="h-100 borderRadius-10">
                  <header class="hp-order4__header purchase-flow__head">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hp-order4-2.png" alt=""
                      class="iconNumber50">
                    <span class="heading-24 color3 ml-6">ご面談の日時を<br /> 決定します</span>
                  </header>
                  <div class="purchase-flow__item-sub bg-white  borderRadius-10">
                    <div class="purchase-flow__thumb">
                      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/purchase-flow-image-5.png" alt=""
                        class="img-cover borderRadius-10">
                    </div>
                    <div class="hp-order4__info">
                      <div class="fontsize-16 mb-25">
                        アストンの経験豊富な買取スタッフがご自宅までお伺いして、その場で査定します。<br />
                        リサイクルショップと分からない車でお伺いしますので、売却をご近所の方に知られたくない方でもご安心いただけます。
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-30">
              <div class="hp-order4__item purchase-flow__item">
                <div class="h-100 borderRadius-10">
                  <header class="hp-order4__header purchase-flow__head">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hp-order4-3.png" alt=""
                      class="iconNumber50">
                    <span class="heading-24 color3 ml-6">査定金額の確認・<br /> 支払い・引き上げ</span>
                  </header>
                  <div class="purchase-flow__item-sub bg-white  borderRadius-10">
                    <div class="purchase-flow__thumb">
                      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order3-3.png" alt=""
                        class="img-cover borderRadius-10">
                    </div>
                    <div class="hp-order4__info">
                      <div class="fontsize-16 mb-25">
                        査定させていただいた金額をご提示します。金額にご納得がいかない場合はキャンセルいただいて問題ありません。<br />
                        ご了承頂いた場合、買取金額をお支払いの上、商品を引き取りさせていただきます。
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div>

    <section class="container">
      <div class="company-us-star mb-0">
        <div class="bg-color2 borderRadius-10 company-us-star__content">
          <div class="row align-items-center ">
            <div class="col-md-4">
              <div class="text-center">
                <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/company-us-star.png" alt=""
                  class="img-fluid">
              </div>
            </div>
            <div class="col-md-8">
              <div class="company-us-star__text">
                どこよりも高く買取をモットーに日々運営しております。<br /> 万が一他店のお見積りが高い場合はご相談ください！！<br /> すこしでも高く買取るよう努めます！！
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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