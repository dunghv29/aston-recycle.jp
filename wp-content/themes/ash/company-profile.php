<?php

/**
 * Template Name: Company profile 
 */
get_header();
?>
<script>
$(function() {
  $('#header-link-4').attr('src', '<?= get_stylesheet_directory_uri() ?>/images/uploads/header-link-4-orange.png');
})
</script>

<div class="banner mb-60 text-center">
  <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/banner-1.png" alt="" class="img-fluid">
</div>

<section class="container">
  <ol class="breadcrumb mt-0 d-flex align-items-center bg-white plr-0">
    <li class="breadcrumb-item active" aria-current="page">
      <a href="/">
        <img class="iconHome mr-14" src="<?= get_stylesheet_directory_uri() ?>/images/icons/home.svg" alt="Home">
        <span class="breadcrumb-text active color-primary">Aston</span>
      </a>
    </li>
    <li class="breadcrumb-item d-flex align-items-center"><span class="breadcrumb-text color-black">会社概要</span>
    </li>
  </ol>
</section>

<section class="container">
  <header class="c-profile__title c-profile--mod text-center">
    <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/profile-title-1.png" alt="title" class="img-fluid">
  </header>
</section>

<section class="container">
  <ul class="c-profile__list">
    <li>
      <div class="c-profile__item row">
        <div class="col-md-5">
          <div class="c-profile__thumb c-profile__thumb-red h-100">
            <div class="c-profile__thumb-title hp-order1__footer-red">
              会社概要
            </div>
            <div class="c-profile__thumb-logo">
              <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/logo-kimuraShoji.png" alt="title"
                class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="c-profile__info h-100">
            <ul class="c-profile__info-list">
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-red">
                    社名
                  </div>
                  <div class="c-profile__info-right">
                    株式会社 木村商事
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-red">
                    所在地
                  </div>
                  <div class="c-profile__info-right">
                    〒414-0036 静岡県伊東市宮川町1-6-20
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-red">
                    代表者
                  </div>
                  <div class="c-profile__info-right">
                    木村　友保
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-red">
                    設立
                  </div>
                  <div class="c-profile__info-right">
                    平成23年3月23日
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </li>

    <li>
      <div class="c-profile__item row">
        <div class="col-md-5">
          <div class="c-profile__thumb c-profile__thumb-blue h-100">
            <div class="c-profile__thumb-title hp-order1__footer-blue">
              アストン伊東本店
            </div>
            <div class="c-profile__thumb-logo">
              <div class="c-w-80">
                <div class="mb-20 text-center">
                  <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/logo-TopFooter.png" alt="title"
                    class="img-fluid">
                </div>
                <div class="text-center">
                  <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/infoStore1004.png" alt="title"
                    class="img-fluid borderRadius-3">
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="c-profile__info h-100">
            <ul class="c-profile__info-list">
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    電話番号
                  </div>
                  <div class="c-profile__info-right color-black">
                    0557-52-3677
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    FAX
                  </div>
                  <div class="c-profile__info-right  color-black">
                    0557-52-3680
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    最寄駅
                  </div>
                  <div class="c-profile__info-right">
                    伊豆急行線　南伊東駅　約0.5㎞
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    バス
                  </div>
                  <div class="c-profile__info-right">
                    泉入口停留所・徒歩2分
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    所在地
                  </div>
                  <div class="c-profile__info-right">
                    〒414-0036 静岡県伊東市宮川町1-6-12
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    営業時間
                  </div>
                  <div class="c-profile__info-right">
                    9:00~19:00
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    休日
                  </div>
                  <div class="c-profile__info-right">
                    年中無休
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </li>

    <li>
      <div class="c-profile__item row">
        <div class="col-md-5">
          <div class="c-profile__thumb c-profile__thumb-blue h-100">
            <div class="c-profile__thumb-title hp-order1__footer-blue">
              アストン修善寺店
            </div>
            <div class="c-profile__thumb-logo">
              <div>
                <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/logo-TopFooter.png" alt="title"
                  class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="c-profile__info h-100">
            <ul class="c-profile__info-list">
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    電話番号
                  </div>
                  <div class="c-profile__info-right  color-black">
                    0558‐99‐9970
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    FAX
                  </div>
                  <div class="c-profile__info-right  color-black">
                    0558‐99‐9971
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    最寄駅
                  </div>
                  <div class="c-profile__info-right">
                    伊豆急行線 南伊東駅 約0.5㎞
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    バス
                  </div>
                  <div class="c-profile__info-right">
                    泉入口停留所・徒歩2分
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    所在地
                  </div>
                  <div class="c-profile__info-right">
                    〒410‐2407 静岡県伊豆市柏久保 1382-1
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    営業時間
                  </div>
                  <div class="c-profile__info-right">
                    10:00~19:00
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    休日
                  </div>
                  <div class="c-profile__info-right">
                    年中無休
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </li>

    <li>
      <div class="c-profile__item row">
        <div class="col-md-5">
          <div class="c-profile__thumb c-profile__thumb-blue h-100">
            <div class="c-profile__thumb-title hp-order1__footer-blue">
              アストンインテリア
            </div>
            <div class="c-profile__thumb-logo">
              <div>
                <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/aston_interior-logo-300.png" alt="title"
                  class="img-fluid">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="c-profile__info h-100">
            <ul class="c-profile__info-list">
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    電話番号
                  </div>
                  <div class="c-profile__info-right  color-black">
                    0557-52-6841
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    FAX
                  </div>
                  <div class="c-profile__info-right  color-black">
                    0557-52-6842
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    最寄駅
                  </div>
                  <div class="c-profile__info-right">
                    伊豆急行線 南伊東駅 徒歩約5分
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    バス
                  </div>
                  <div class="c-profile__info-right">
                    南伊東駅口停留所・徒歩約5分
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    所在地
                  </div>
                  <div class="c-profile__info-right">
                    〒414-0035 静岡県伊東市南町2-1-20
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    営業時間
                  </div>
                  <div class="c-profile__info-right">
                    10:00~19:00
                  </div>
                </div>
              </li>
              <li>
                <div class="c-profile__info-item">
                  <div class="c-profile__info-left col-blue">
                    休日
                  </div>
                  <div class="c-profile__info-right">
                    年中無休
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </li>

  </ul>
</section>

<section>
  <div class="container">
    <header class="c-profile__title text-center">
      <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/profile-title-2.png" alt="title" class="img-fluid">
    </header>
  </div>
  <div class="container">
    <div class="hp-order4-3 c-profile2">
      <div class="c-profile2__header">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/profile-title-3.png" alt=""
          class="img-fluid d-sm-block d-none">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/profile-title-3-mobile.png" alt=""
          class="img-fluid d-sm-none d-block ml-auto mt-30">
      </div>
      <div class="hp-order4__item h-auto">
        <div class="bg-white borderRadius-10 d-flex justify-content-between">
          <div class="hp-order4-3__left">
            <h3 class="heading-24 color2 mb-30">伊東市を中心に <br />
              伊豆半島東部・伊豆市・伊豆の国市・熱海地域・沼津・三島</h3>
            <div class="hp-order4-3__left-desc fontsize-16">
              私たちが車で見積りに伺います。<br /> 伊豆半島東部・伊豆市・伊豆の市・熱海地域 <br /> 上記以外のエリアの方もご相談下さい！！
            </div>
          </div>
          <div class="hp-order4-3__right">
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/maps.png" alt="" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="background-branch">
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
</section>

<section class="bg-white pb-1">
  <div class="container">
    <?php include 'top-footer.php';?>
  </div>
</section>
<?php
get_footer();