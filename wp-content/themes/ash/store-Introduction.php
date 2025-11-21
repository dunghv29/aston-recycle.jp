<?php

/**
 * Template Name: store introduction
 */
get_header();
?>
<script>
$(function() {
  $('#header-link-1').attr('src', '<?= get_stylesheet_directory_uri() ?>/images/uploads/header-link-1-orange.png');
})
</script>

<div class="banner mb-60 text-center">
  <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/banner-1.png" alt="" class="img-fluid">
</div>

<section class="container">
  <ol class="breadcrumb mt-0 d-flex align-items-center bg-white plr-0">
    <li class="breadcrumb-item active" aria-current="page">
      <a href="/">
        <img class="iconHome mr-14" src="<?= get_stylesheet_directory_uri() ?>../images/icons/home.svg" alt="Home">
        <span class="breadcrumb-text active color-primary">Aston</span>
      </a>
    </li>
    <li class="breadcrumb-item d-flex align-items-center"><span class="breadcrumb-text color-black">店舗紹介</span>
    </li>
  </ol>
</section>

<section class="store_introduc hp-bg-1 pt-0">
  <div class="container">
    <header class="text-center store_introduc__header">
      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/storeIntro-title-1.png" alt="" class="img-fluid">
    </header>

    <section class="store_introduc__item">
      <div class="bg-white borderRadius-10">
        <div class="row">
          <div class="col-lg-4">
            <div class="store_introduc__thumb h-100">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/storeIntro-img-1.png" alt=""
                class="img-cover">
            </div>
          </div>
          <div class="col-lg-8">
            <div class="store_introduc__info h-100">
              <div
                class="store_introduc__info-title d-sm-flex flex-wrap align-items-center justify-content-between text-center">
                <div class="store_introduc__heading-48 color-primary">アストン伊東本店</div>
                <a href="/main-store" class="store_introduc__view">
                  <span class="mr-10 color-primary">詳細を見る</span>
                  <img src="<?=get_stylesheet_directory_uri()?>/images/icons/outRed.svg" alt="" class="img-fluid">
                </a>
              </div>
              <div class="contactStore container">
                <div class="contactStore__item row justify-content-between">
                  <div class="contactStore__name color-primary col-5 col-sm-4 col-md-4 col-lg-3">
                    郵便番号
                  </div>
                  <div class="contactStore__info color-black col-7 col-sm-8 col-md-8 col-lg-8">
                    〒414-0036
                  </div>
                </div>

                <div class="contactStore__item row justify-content-between">
                  <div class="contactStore__name color-primary col-5 col-sm-4 col-md-4 col-lg-3">
                    所在地
                  </div>
                  <div class="contactStore__info color-black col-7 col-sm-8 col-md-8 col-lg-8">
                    静岡県伊東市宮川町1-6-12
                  </div>
                </div>

                <div class="contactStore__item row justify-content-between">
                  <div class="contactStore__name color-primary col-5 col-sm-4 col-md-4 col-lg-3">
                    買取専用番号
                  </div>
                  <div class="contactStore__info color-black col-7 col-sm-8 col-md-8 col-lg-8">
                    <a href="tel:0557-52-3677" class="color-black">0557-52-3677</a> (買取専用フリーダイヤル)
                  </div>
                </div>

                <div class="row mb-20">
                  <a name="" id="" class="contactStore__phone" href="tel: 0557-52-3677">
                    <img class="contactStore__icon" src="<?= get_stylesheet_directory_uri() ?>/images/icons/phone.svg"
                      alt="Phone icon">
                    <span class="contactStore__number-phone text-white ml-8">
                      0557-52-3677
                    </span>
                  </a>
                </div>
                <div class="row">
                  <div class="sti-sub">
                    <div class="sti-sub__thumb">
                      <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/storeIntro-img-1-1.png" alt=""
                        class="img-cover">
                    </div>
                    <div class="sti-sub__info">
                      <div class="text-right logoAstonStyle">
                        <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/storeIntro-aston-style.png"
                          alt="" class="img-fluid">
                      </div>
                      <div class="sti-sub__info-desc fontsize-16">アストンスタイルは、伊藤県のアストン店で中古品を販売する小さなコーナーです。</div>

                      <div class="sti-sub__info-view">
                        <a href="/aston-style" class="store_introduc__view">
                          <span class="mr-10 color5">詳細を見る</span>
                          <img src="<?=get_stylesheet_directory_uri()?>/images/icons/outBlue.svg" alt=""
                            class="img-fluid">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <div class="store_introduc__overlay">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/si_aston.png" alt="" class="img-fluid">
      </div>
    </section>

    <section class="store_introduc__item">
      <div class="bg-white borderRadius-10">
        <div class="row">
          <div class="col-md-4">
            <div class="store_introduc__thumb h-100">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/storeIntro-img-2.png" alt=""
                class="img-cover">
            </div>
          </div>
          <div class="col-md-8">
            <div class="store_introduc__info h-100">
              <div
                class="store_introduc__info-title d-sm-flex flex-wrap align-items-center justify-content-between text-center">
                <div class="store_introduc__heading-48 color-primary">アストン修善寺</div>
                <a href="" class="store_introduc__view">
                  <span class="mr-10 color-primary">詳細を見る</span>
                  <img src="<?=get_stylesheet_directory_uri()?>/images/icons/outRed.svg" alt="" class="img-fluid">
                </a>
              </div>
              <div class="contactStore container h-auto">
                <div class="contactStore__item row justify-content-between mlr-0">
                  <div class="contactStore__name color-primary col-5 col-sm-4 col-md-4 col-lg-3">
                    郵便番号
                  </div>
                  <div class="contactStore__info color-black col-7 col-sm-8 col-md-8 col-lg-8">
                    〒410‐2407
                  </div>
                </div>

                <div class="contactStore__item row justify-content-between">
                  <div class="contactStore__name color-primary col-5 col-sm-4 col-md-4 col-lg-3">
                    所在地
                  </div>
                  <div class="contactStore__info color-black col-7 col-sm-8 col-md-8 col-lg-8">
                    静岡県伊豆市柏久保 1382-1
                  </div>
                </div>

                <div class="contactStore__item row justify-content-between">
                  <div class="contactStore__name color-primary col-5 col-sm-4 col-md-4 col-lg-3">
                    買取専用番号
                  </div>
                  <div class="contactStore__info color-black col-7 col-sm-8 col-md-8 col-lg-8">
                    <a href="tel:0557-52-3677" class="color-black">0557-52-3677</a> (買取専用フリーダイヤル)
                  </div>
                </div>

                <div class="row">
                  <a name="" id="" class="contactStore__phone" href="tel: 0558‐99‐9970">
                    <img class="contactStore__icon" src="<?= get_stylesheet_directory_uri() ?>/images/icons/phone.svg"
                      alt="Phone icon">
                    <span class="contactStore__number-phone text-white ml-8">
                      0558‐99‐9970
                    </span>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="store_introduc__overlay">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/si_aston.png" alt="" class="img-fluid">
      </div>
    </section>

    <section class="store_introduc__item sti-brown">
      <div class="bg-white borderRadius-10">
        <div class="row">
          <div class="col-md-4">
            <div class="store_introduc__thumb h-100">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/storeIntro-img-3.png" alt=""
                class="img-cover">
            </div>
          </div>
          <div class="col-md-8">
            <div class="store_introduc__info h-100">
              <div
                class="store_introduc__info-title d-sm-flex flex-wrap align-items-center justify-content-between text-center">
                <div class="store_introduc__heading-48 color6">アストン伊東本店</div>
                <a href="/store-antiques" class="store_introduc__view">
                  <span class="mr-10 color6">詳細を見る</span>
                  <img src="<?=get_stylesheet_directory_uri()?>/images/icons/outBrown.svg" alt="" class="img-fluid">
                </a>
              </div>
              <div class="contactStore container h-auto">
                <div class="contactStore__item row justify-content-between mlr-0">
                  <div class="contactStore__name color6 col-5 col-sm-4 col-md-4 col-lg-3">
                    郵便番号
                  </div>
                  <div class="contactStore__info color-black col-7 col-sm-8 col-md-8 col-lg-8">
                    〒414-0035
                  </div>
                </div>

                <div class="contactStore__item row justify-content-between">
                  <div class="contactStore__name color6 col-5 col-sm-4 col-md-4 col-lg-3">
                    所在地
                  </div>
                  <div class="contactStore__info color-black col-7 col-sm-8 col-md-8 col-lg-8">
                    静岡県伊東市南町2-1-20
                  </div>
                </div>

                <div class="contactStore__item row justify-content-between">
                  <div class="contactStore__name color6 col-5 col-sm-4 col-md-4 col-lg-3">
                    買取専用番号
                  </div>
                  <div class="contactStore__info color-black col-7 col-sm-8 col-md-8 col-lg-8">
                    <a href="tel:0557-52-3677" class="color-black">0557-52-3677</a> (買取専用フリーダイヤル)
                  </div>
                </div>

                <div class="row">
                  <a name="" id="" class="contactStore__phone" href="tel: 0557-52-6841">
                    <img class="contactStore__icon" src="<?= get_stylesheet_directory_uri() ?>/images/icons/phone.svg"
                      alt="Phone icon">
                    <span class="contactStore__number-phone text-white ml-8">
                      0557-52-6841
                    </span>
                  </a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="store_introduc__overlay">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order1-logo-2.png" alt="" class="img-fluid">
      </div>
    </section>
  </div>
</section>

<section class="bg-white pb-1">
  <div class="container">
    <?php include 'top-footer.php';?>
  </div>
</section>
<?php
get_footer();