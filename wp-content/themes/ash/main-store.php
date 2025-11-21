<?php

/**
 * Template Name: Main store
 */
get_header();
?>

<script>
$(function() {
  $('#header-link-1').attr('src',
    '<?= get_stylesheet_directory_uri() ?>/images/uploads/header-link-orange1003.png');
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
      <li class="breadcrumb-item d-flex align-items-center"><a href="#" class="breadcrumb-text color-black">店舗紹介</a>
      </li>
      <li class="breadcrumb-item d-flex align-items-center active" aria-current="page"><span
          class="breadcrumb-text color-black">アストン伊東本店</span></li>
    </ol>
  </div>
</nav>

<main id="main-store" class="main-store">
  <div class="container">
    <div class="row rowTitle">
      <div class="col-md-10 col-lg-10 mx-auto ">
        <h2 class="bigTitle mt-50 mb-60">
          <img class="bigTitle__img" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/bigTitle1003-1.png"
            alt="Big title">
        </h2>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row rowLinkTab">
      <div class="col-md-6 col-lg-6 d-flex align-items-center">
        <a href="#" class="linkTab linkTab--active">
          <img class="linkTab__img" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/linkTab1003.png"
            alt="Link tab">
        </a>
      </div>
      <div class="col-md-6 col-lg-6 d-flex align-items-center">
        <a href="#" class="linkTab">
          <img class="linkTab__img" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/linkTab1003-1.png"
            alt="Link tab">
        </a>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row rowInfoStore">
      <div class="col-md-6 col-lg-8 ">
        <div class="thumbStore">
          <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/store1003.png" alt="Store">
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="infoStore">
          <h4 class="infoStore__header mb-20">
            店舗からの一言
          </h4>
          <div class="infoStore__body">
            <p class="infoStore__text mb-0">３店舗の中で一番大きな店舗になります。</p>
            <p class="infoStore__text mb-0">売り場面積250坪の店内にはよりすぐりの商品がたくさん！</p>
            <p class="infoStore__text mb-0">隣接する古着専門店も見応え十分。</p>
            <p class="infoStore__text mb-0">欲しいが見つかる、みているだけでも楽しい！</p>
            <p class="infoStore__text mb-0">そんなお店を目指して日々営業しております。</p>
            <p class="infoStore__text mb-0">人気のレンジボードも数多く置いてありますし、</p>
            <p class="infoStore__text mb-0">ちょっと変わった家具なども常時展示してあります。</p>
            <p class="infoStore__text mb-0">毎日商品入荷してます！</p>
            <p class="infoStore__text mb-0">是非一度お立ち寄り下さい。</p>
            <p class="infoStore__text mb-0"> ただいま買取強化中です！</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row rowContact">
      <div class="col-md-6 col-lg-8 mt-38 order-md-1 order-sm-2">
        <div class="contactStore container">
          <div class="contactStore__item row justify-content-between">
            <div class="contactStore__name color-primary col-4 col-md-4 col-lg-3">
              郵便番号
            </div>
            <div class="contactStore__info color-black col-8 col-md-8 col-lg-8">
              〒414-0036
            </div>
          </div>

          <div class="contactStore__item row justify-content-between">
            <div class="contactStore__name color-primary col-4 col-md-4 col-lg-3">
              所在地
            </div>
            <div class="contactStore__info color-black col-8 col-md-8 col-lg-8">
              静岡県伊東市宮川町1-6-12
            </div>
          </div>

          <div class="contactStore__item row justify-content-between">
            <div class="contactStore__name color-primary col-4 col-md-4 col-lg-3">
              FAX
            </div>
            <div class="contactStore__info color-black col-8 col-md-8 col-lg-8">
              0557-52-3680
            </div>
          </div>

          <div class="contactStore__item row justify-content-between">
            <div class="contactStore__name color-primary col-4 col-md-4 col-lg-3">
              買取専用番号
            </div>
            <div class="contactStore__info color-black col-8 col-md-8 col-lg-8">
              0557-52-3677 (買取専用フリーダイヤル)
            </div>
          </div>

          <div class="row">
            <a name="" id="" class="contactStore__phone" href="tel: 0557-52-3677">
              <img class="contactStore__icon" src="<?= get_stylesheet_directory_uri() ?>/images/icons/phone.svg"
                alt="Phone icon">
              <span class="contactStore__number-phone text-white ml-8">
                0557-52-3677
              </span>
            </a>
          </div>

        </div>
      </div>

      <div class="col-md-6 col-lg-4 mt-38 order-md-2 order-sm-1">
        <div class="thumbProduct">
          <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/product1003.png"
            alt="Product">
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row rowMap">
      <div class="col-12">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3270.123244590132!2d139.08437841559856!3d34.95351957714266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6019c3ca271f1019%3A0xaaac9b4ee930960f!2z5pel5pys44CB44CSNDE0LTAwMzYg6Z2Z5bKh55yM5LyK5p2x5biC5a6u5bed55S677yR5LiB55uu77yW4oiS77yR77yS!5e0!3m2!1sja!2s!4v1611188608067!5m2!1sja!2s"
          width="100%" height="612" frameborder="0" style="border-radius: 10px;" allowfullscreen="" aria-hidden="false"
          tabindex="0"></iframe>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row rowProduct">
      <div class="col-lg-4 col-md-6 mt-20">
        <div class="productImg">
          <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/product1003-1.png"
            alt="Product">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-20">
        <div class="productImg">
          <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/product1003-2.png"
            alt="Product">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-20">
        <div class="productImg">
          <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/product1003-3.png"
            alt="Product">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-20">
        <div class="productImg">
          <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/product1003-4.png"
            alt="Product">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-20">
        <div class="productImg">
          <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/product1003-5.png"
            alt="Product">
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mt-20">
        <div class="productImg">
          <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/product1003-6.png"
            alt="Product">
        </div>
      </div>

    </div>
  </div>

  <div class="background-branch">
    <div class="container">
      <div class="row rowBranch">
        <div class="col-12">
          <h4 class="branchTitle line-4 color-primary text-center mx-auto mt-100 mb-55">
            <!-- お気軽に最寄りの店舗にお問い合わせください！ -->
            <img class="img-fluid titleBranch-pc"
              src="<?= get_stylesheet_directory_uri() ?>/images/uploads/titleBranch.png" alt="Title">
            <img class="img-fluid titleBranch-mobile"
              src="<?= get_stylesheet_directory_uri() ?>/images/uploads/titleBranch-mobile.png" alt="Title">
          </h4>
        </div>
      </div>
    </div>

    <div class="container">
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
  </div>

  <div class="container">
    <?php include 'top-footer.php';?>
  </div>

</main><!-- .site-main -->

<?php
get_footer();