<?php

/**
 * Template Name: Blog Detail Html
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
      <li class="breadcrumb-item d-flex align-items-center active" aria-current="page"><span
          class="breadcrumb-text color-black">Blog</span></li>
    </ol>
  </div>
</nav>

<main id="blog-detail" class="blog-detail">
  <div class="container">
    <div class="row rowTitle">
      <div class="col-12 mx-auto ">
        <h2 class="bigTitle bigTitle-blog text-center mt-30 mb-90">
          <img class="bigTitle__img img-scaledown"
            src="<?= get_stylesheet_directory_uri() ?>/images/uploads/bigTitle1016.png" alt="Big title">
        </h2>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row rowBlogDetail">
      <div class="col-lg-9">
        <div class="blog__left">
          <div class="blog__item mb-25">
            <div class="blog__itemHeader">
              <div class="blog__wp-mobile">
                <div class="blog__itemHeader-image">
                  <img class="" src="<?= get_stylesheet_directory_uri() ?>/images/icons/blog.png" alt="Blog">
                </div>
                <div class="blog__itemHeader-title">
                  <p class="blog__time color-primary mb-10">
                    2020.06.10
                  </p>

                  <a href="#" class="blog__name color-primary mb-0">
                    テレビの買取事情とは？豊橋の買取業者が解説します！
                  </a>

                  <div class="blog__tags mt-18">
                    <span class="blog__badge bg-color1 color-white mr-12">#伊豆最大級</span>
                    <span class="blog__badge bg-color5 color-white mr-12">#伊豆最大級</span>
                    <span class="blog__badge bg-color2 color-white mr-12">#伊豆最大級</span>
                    <span class="blog__badge bg-color3 color-black mr-12">#伊豆最大級</span>
                  </div>
                </div>
              </div>
              <div class="blog__tags-mobile mt-20">
                <span class="blog__badge bg-color1 color-white mr-10">#伊豆最大級</span>
                <span class="blog__badge bg-color5 color-white mr-10">#伊豆最大級</span>
                <span class="blog__badge bg-color2 color-white mr-10">#伊豆最大級</span>
                <span class="blog__badge bg-color3 color-black">#伊豆最大級</span>
              </div>
            </div>

            <div class="blog__itemBody blog-detail__content mt-50">
              <p class="blog-detail__text blog-detail__text--black color-black mb-30">
                古いテレビを買取に出したいが、買取に応じてくれるのか気になる方がいるのではないでしょうか。<br>
                今回は、テレビの買取事情について解説します。<br>
                豊橋にお住いでテレビの買取をご検討の方必見です。
              </p>
              <h5 class="blog-detail__text blog-detail__text--primary color-primary mb-30">
                テレビの買取事情
              </h5>
              <p class="blog-detail__text blog-detail__text--black color-black mb-30">
                テレビには一定の買取相場があるとされています。<br>
                複数の業者で査定してもらっても、相場の違いは大きくて2万円ほどでしょう。<br>
                もちろんテレビのサイズによって買取価格の違いはありますが、業者によって買取価格が大きく異なることはあまりないと知っておきましょう。
              </p>
              <p class="blog-detail__text blog-detail__text--black color-black mb-30">
                テレビのなかでも、家庭用の液晶テレビの人気は高く、中古のものでも需要が高いでしょう。<br>
                一方で、アナログのブラウン管テレビはほとんど売れません。
              </p>
              <p class="blog-detail__text blog-detail__text--black color-black mb-30">
                テレビの買取では、サイズが大きいものほど買取価格が高くなる傾向があります。<br>
                というのも、古くても大きいサイズのテレビを安い価格で買おうとする方が多くいるからです。<br>
                そのため、買取業者は大きいサイズのテレビの買取を積極的に行う傾向があります。<br>
                古いものでも大きいサイズのテレビを持っているのなら、買取に出してみると良いでしょう。
              </p>
              <p class="blog-detail__text blog-detail__text--black color-black mb-30">
                また、国産メーカーは高い査定価格になる場合が多いでしょう。<br>
                国産メーカーは根強い信頼を勝ち得ているため、海外メーカーのテレビよりも人気が高いです。<br>
                ただ例外として、海外メーカーのなかでもLGのテレビは国産メーカーと同等の査定になることがあります。
              </p>
              <p class="blog-detail__text blog-detail__text--black color-black mb-30">
                あまり買い取ってもらえないテレビの典型例に、付属品が揃っていないものがあります。<br>
                コードやリモコンがないものは買取に応じてもらえない場合が多いので、気をつけましょう。<br>
              </p>
              <h5 class="blog-detail__text blog-detail__text--primary color-primary mb-30">
                買取不可のテレビはどう処理する？
              </h5>
              <p class="blog-detail__text blog-detail__text--black color-black mb-30">
                それでは、買取ができないテレビの処理はどうしたら良いのでしょうか。
              </p>
              <h5 class="blog-detail__text blog-detail__text--primary color-primary mb-30">
                <img class="blog-detail__ellipse img-scaledown"
                  src="<?= get_stylesheet_directory_uri() ?>/images/icons/ellipse-red.png" alt="Ellipse">
                <span>家電量販店にお願いする</span>
              </h5>
              <p class="blog-detail__text blog-detail__text--black color-black mb-30">
                新しいテレビを購入した場合は、購入元の家電量販店に引き取ってもらうという方法があります。<br>
                ただし、テレビは家電リサイクル法の対象になっているので、家電リサイクル券の購入と運搬費の費用がかかります。<br>
                また、処分予定のテレビを購入元の家電量販店に引き取ってもらう方法もあります。<br>
                その場合は、購入当時のレシートを準備していきましょう。<br>
                この場合も先ほどと同じように、家電リサイクル券の購入と運搬費の費用がかかります。
              </p>
              <h5 class="blog-detail__text blog-detail__text--primary color-primary mb-30">
                <img class="blog-detail__ellipse img-scaledown"
                  src="<?= get_stylesheet_directory_uri() ?>/images/icons/ellipse-red.png" alt="Ellipse">
                <span>回収業者にお願いする</span>
              </h5>
              <p class="blog-detail__text blog-detail__text--black color-black mb-30">
                回収業者にお願いする際は、一般廃棄物処理業の許可を持っているかどうかの確認が必須です。<br>
                もし一般廃棄物処理業の許可がない業者に依頼してしまうと、不法投棄などの法的罰則の対象となる恐れがあります。<br>
                回収業者に出すときは注意しましょう。
              </p>
              <h5 class="blog-detail__text blog-detail__text--primary color-primary mb-30">
                まとめ
              </h5>
              <p class="blog-detail__text blog-detail__text--black color-black mb-30">
                今回は、テレビの買取事情について解説しました。<br>
                ご自身で処分する場合でも適切な処理ができるように、この記事を参考にしてみてください。<br>
                また、買取をしてもらえそうなテレビである場合は、一度無料査定を受けてみるのがおすすめかもしれません。
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="blog__right bg-color1">
          <div class="blog__menu">
            <h4 class="blog__menuHeader text-center color-white mb-12">
              最近の投稿
            </h4>
            <div class="blog__menuBody bg-white">
              <ul class="blog__menuList">
                <li class="blog__menuItem">
                  <p class="blog__menuItem-time color-primary">2020.06.10</p>
                  <a href="" class="blog__menuItem-name color-black">テレビの買取事情とは？豊橋の買取業者が解説します！</a>
                </li>

                <li class="blog__menuItem">
                  <p class="blog__menuItem-time color-primary">2020.06.08</p>
                  <a href="" class="blog__menuItem-name color-black">テレビの買取事情とは？豊橋の買取業者が解説します！</a>
                </li>

                <li class="blog__menuItem">
                  <p class="blog__menuItem-time color-primary">2020.06.05</p>
                  <a href="" class="blog__menuItem-name color-black">テレビの買取事情とは？豊橋の買取業者が解説します！</a>
                </li>

                <li class="blog__menuItem">
                  <p class="blog__menuItem-time color-primary">2020.06.03</p>
                  <a href="" class="blog__menuItem-name color-black">テレビの買取事情とは？豊橋の買取業者が解説します！</a>
                </li>

                <li class="blog__menuItem">
                  <p class="blog__menuItem-time color-primary">2020.06.01</p>
                  <a href="" class="blog__menuItem-name color-black">テレビの買取事情とは？豊橋の買取業者が解説します！</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row rowThumb">
      <div class="col-md-6 mobile-mb-25">
        <div class="blog-detail__thumb">
          <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/thumb-1017.png" alt="Thumb"
            class="img-cover blog-detail__thumb--pc">
          <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/thumb-1017-mobile.png" alt="Thumb"
            class="img-cover blog-detail__thumb--mobile">
        </div>
      </div>
      <div class="col-md-6">
        <div class="blog-detail__thumb">
          <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/thumb-1017-2.png" alt="Thumb" class="img-cover">
        </div>
      </div>
    </div>
  </div>

  <div class="background-blog">
    <div class="container">
      <section class="hp-order3">
        <h2 class="text-center hp-order3__header-big mb-60 blog__header-big">
          <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-1016.png" alt=""
            class="img-fluid img-title-pc">
          <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-1016-mobile.png" alt=""
            class="img-fluid img-title-mobile">
        </h2>
        <div class="hp-order3__list">
          <div class="row mlr_10">
            <div class="col-lg-4 plr-10 mb-70">
              <div class="hp-order3__item">
                <div class="bg-white h-100 borderRadius-10">
                  <header class="hp-order3__header">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hand-1.svg" alt=""
                      class="img-fluid iconHand">
                    <span class="heading-24 text-white ml-10">説明書や付属品を忘れずに</span>
                  </header>
                  <div class="hp-order3__item-sub">
                    <div class="hp-order3__thumb">
                      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order3-1016-1.png" alt=""
                        class="img-cover">
                    </div>
                    <div class="hp-order3__info respon-16 blog__pb-100">
                      説明書や保証書・観点書や付属品、ケースなどがある場合は合わせてご用意ください。高価買取とさせていただきます。また、重要な付属品等が欠損している場合、買取りをお断りさせて頂く場合がございます。
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
                    <span class="heading-24 text-white ml-10">汚れやほこり等は <br> なるべくキレイに</span>
                  </header>
                  <div class="hp-order3__item-sub">
                    <div class="hp-order3__thumb">
                      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order3-1016-2.png" alt=""
                        class="img-cover">
                    </div>
                    <div class="hp-order3__info respon-16 blog__pb-100">
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
                    <span class="heading-24 text-white ml-10">店舗買取を <br> オススメします</span>
                  </header>
                  <div class="hp-order3__item-sub">
                    <div class="hp-order3__thumb">
                      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order3-1016-3.png" alt=""
                        class="img-cover">
                    </div>
                    <div class="hp-order3__info respon-16 blog__pb-100">
                      出張買取やインターネット査定に比べ、手間や正確な商品を確認させていただける店舗買取はそれだけで高価買取の対象となります。<br>
                      店舗のお近くにお住まいの方はぜひお越しください。</div>
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
</main>

<?php
get_footer();