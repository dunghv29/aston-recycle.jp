<?php

/**
 * Template Name: Blog Html
 */
get_header();
?>

<script>
$(function() {
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

<main id="blog" class="blog">
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
    <div class="row rowBlog">
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

            <div class="blog__itemBody mt-16">
              <p class="blog__content color-black line-4">
                古いテレビを買取に出したいが、買取に応じてくれるのか気になる方がいるのではないでしょうか。 今回は、テレビの買取事情について解説します。 豊橋にお住いでテレビの買取をご検討の方必見です。 テレビの買取事情
                テレビには一定の買取相場があるとされています。 複数の業者で査定してもらっても、相場の違いは大きくて2万円ほどでしょ […]
              </p>
            </div>
          </div>

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

            <div class="blog__itemBody mt-16">
              <p class="blog__content color-black line-4">
                古いテレビを買取に出したいが、買取に応じてくれるのか気になる方がいるのではないでしょうか。 今回は、テレビの買取事情について解説します。 豊橋にお住いでテレビの買取をご検討の方必見です。 テレビの買取事情
                テレビには一定の買取相場があるとされています。 複数の業者で査定してもらっても、相場の違いは大きくて2万円ほどでしょ […]
              </p>
            </div>
          </div>

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

            <div class="blog__itemBody mt-16">
              <p class="blog__content color-black line-4">
                古いテレビを買取に出したいが、買取に応じてくれるのか気になる方がいるのではないでしょうか。 今回は、テレビの買取事情について解説します。 豊橋にお住いでテレビの買取をご検討の方必見です。 テレビの買取事情
                テレビには一定の買取相場があるとされています。 複数の業者で査定してもらっても、相場の違いは大きくて2万円ほどでしょ […]
              </p>
            </div>
          </div>

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

            <div class="blog__itemBody mt-16">
              <p class="blog__content color-black line-4">
                古いテレビを買取に出したいが、買取に応じてくれるのか気になる方がいるのではないでしょうか。 今回は、テレビの買取事情について解説します。 豊橋にお住いでテレビの買取をご検討の方必見です。 テレビの買取事情
                テレビには一定の買取相場があるとされています。 複数の業者で査定してもらっても、相場の違いは大きくて2万円ほどでしょ […]
              </p>
            </div>
          </div>

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

            <div class="blog__itemBody mt-16">
              <p class="blog__content color-black line-4">
                古いテレビを買取に出したいが、買取に応じてくれるのか気になる方がいるのではないでしょうか。 今回は、テレビの買取事情について解説します。 豊橋にお住いでテレビの買取をご検討の方必見です。 テレビの買取事情
                テレビには一定の買取相場があるとされています。 複数の業者で査定してもらっても、相場の違いは大きくて2万円ほどでしょ […]
              </p>
            </div>
          </div>

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

            <div class="blog__itemBody mt-16">
              <p class="blog__content color-black line-4">
                古いテレビを買取に出したいが、買取に応じてくれるのか気になる方がいるのではないでしょうか。 今回は、テレビの買取事情について解説します。 豊橋にお住いでテレビの買取をご検討の方必見です。 テレビの買取事情
                テレビには一定の買取相場があるとされています。 複数の業者で査定してもらっても、相場の違いは大きくて2万円ほどでしょ […]
              </p>
            </div>
          </div>

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

            <div class="blog__itemBody mt-16">
              <p class="blog__content color-black line-4">
                古いテレビを買取に出したいが、買取に応じてくれるのか気になる方がいるのではないでしょうか。 今回は、テレビの買取事情について解説します。 豊橋にお住いでテレビの買取をご検討の方必見です。 テレビの買取事情
                テレビには一定の買取相場があるとされています。 複数の業者で査定してもらっても、相場の違いは大きくて2万円ほどでしょ […]
              </p>
            </div>
          </div>
        </div>

        <nav class="blog__pagination text-center mt-55">
          <ul class="blog__listPagination pagination d-flex align-items-center justify-content-center">
            <!-- <li class="blog__page-item page-item">
              <span class="page-current color-primary" href="#">1</span>
              <span class="page-current" href="#">/</span>
              <span class="page-total" href="#">31</span>
            </li> -->
            <li class="blog__page-item page-item">
              <a class="blog__page-link page-link color-white" href="#">
                <img class="img-fluid blog__btn" src="<?= get_stylesheet_directory_uri() ?>/images/icons/previous.png"
                  alt="Previous">
              </a>
            </li>
            <li class="blog__page-item page-item disabled">
              <a class="blog__page-link page-link color-white" href="#" tabindex="-1">1</a>
            </li>
            <li class="blog__page-item page-item">
              <a class="blog__page-link blog__page-link--more page-link color-black bg-white" href="#">
                <img class="img-fluid blog__ellipses"
                  src="<?= get_stylesheet_directory_uri() ?>/images/icons/ellipses.svg" alt="Ellipses">
              </a>
            </li>

            <li class="blog__page-item page-item"><a class="blog__page-link page-link color-white" href="#">3</a></li>
            <li class="blog__page-item page-item"><a class="blog__page-link page-link color-white" href="#">4</a></li>
            <li class="blog__page-item page-item"><a class="blog__page-link page-link color-white" href="#">5</a></li>
            <li class="blog__page-item page-item"><a class="blog__page-link page-link color-white" href="#">6</a></li>
            <li class="blog__page-item page-item"><a class="blog__page-link page-link color-white" href="#">7</a></li>
            <li class="blog__page-item page-item">
              <a class="blog__page-link blog__page-link--more page-link color-black bg-white" href="#">
                <img class="img-fluid blog__ellipses"
                  src="<?= get_stylesheet_directory_uri() ?>/images/icons/ellipses.svg" alt="Ellipses">
              </a>
            </li>
            <li class="blog__page-item page-item"><a class="blog__page-link page-link color-white" href="#">20</a></li>
            <li class="blog__page-item page-item"><a class="blog__page-link page-link color-white" href="#">30</a></li>

            <li class="blog__page-item page-item">
              <a class="blog__page-link page-link color-white" href="#">
                <img class="img-fluid blog__btn" src="<?= get_stylesheet_directory_uri() ?>/images/icons/next.png"
                  alt="Next">
              </a>
            </li>
          </ul>
        </nav>
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
                  <p class="blog__menuItem-time color-primary">2020.06.10</p>
                  <a href="" class="blog__menuItem-name color-black">テレビの買取事情とは？豊橋の買取業者が解説します！</a>
                </li>

                <li class="blog__menuItem">
                  <p class="blog__menuItem-time color-primary">2020.06.10</p>
                  <a href="" class="blog__menuItem-name color-black">テレビの買取事情とは？豊橋の買取業者が解説します！</a>
                </li>

                <li class="blog__menuItem">
                  <p class="blog__menuItem-time color-primary">2020.06.10</p>
                  <a href="" class="blog__menuItem-name color-black">テレビの買取事情とは？豊橋の買取業者が解説します！</a>
                </li>

                <li class="blog__menuItem">
                  <p class="blog__menuItem-time color-primary">2020.06.10</p>
                  <a href="" class="blog__menuItem-name color-black">テレビの買取事情とは？豊橋の買取業者が解説します！</a>
                </li>
              </ul>
            </div>
          </div>
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