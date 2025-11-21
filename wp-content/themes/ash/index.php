<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
get_header();
?>
<div class="banner text-center">
  <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/banner-1.png" alt="" class="img-fluid">
</div>
<div class="container">
  <section class="hp-order1 container-xl container-lg-fluid container">
    <h2 class="text-center pb-40 mb-40">
      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-1.svg" alt=""
        class="img-fluid d-sm-block d-none mx-auto">
      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-1-mobile.svg" alt=""
        class="img-fluid d-sm-none d-block mx-auto">
    </h2>
    <ul class="row mlr_10 hp-order1__list">
      <li class="col-lg-4 plr-10">
        <article class="hp-order1__item hp-order1__item-bgred zoomIn">
          <a href="#" class="d-block">
            <div class="hp-order1__thumb">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order1-1.png" alt=""
                class="img-cover in h-auto">
              <div class="overTop">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hot-1.png" alt="" class="img-fluid">
              </div>
            </div>
            <div class="hp-order1__info">
              <div class="text-center mb-10">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order1-logo-1.png" alt=""
                  class="img-fluid">
              </div>
              <h3 class="color-primary heading-24">アストン伊東本店</h3>
              <div class="fontsize-16 color-black">
                <div class="color-primary">所在地:</div>
                〒414-0036 静岡県伊東市宮川町1-6-12
              </div>
            </div>
            <div class="hp-order1__footer hp-order1__footer-red">
              <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hp-call.png" alt="" class="img-fluid">
              <div class="heading-24 text-white text-nowrap">0557-52-3677</div>
              <div class="viewDetail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/icons/linkOut.png" alt="" class="img-fluid">
                <div class="text-white text-nowrap">詳細を見る</div>
              </div>
            </div>
          </a>
        </article>

        <a href="#" class="d-block mt-10">
          <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/aston-style.png" alt="" class="img-fluid">
        </a>
      </li>
      <li class="col-lg-4 plr-10">
        <article class="hp-order1__item hp-order1__item-bgred zoomIn">
          <a href="#" class="d-block">
            <div class="hp-order1__thumb">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order1-2.png" alt=""
                class="img-cover in h-auto">
              <div class="overTop">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hot-2.png" alt="" class="img-fluid">
              </div>
            </div>
            <div class="hp-order1__info">
              <div class="text-center mb-10">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order1-logo-1.png" alt=""
                  class="img-fluid">
              </div>
              <h3 class="color-primary heading-24">アストン修善寺 </h3>
              <div class="fontsize-16 color-black">
                <div class="color-primary">所在地:</div>
                〒410‐2407 静岡県伊豆市柏久保 1382-1
              </div>
            </div>
            <div class="hp-order1__footer hp-order1__footer-red">
              <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hp-call.png" alt="" class="img-fluid">
              <div class="heading-24 text-white text-nowrap">0558‐99‐9970</div>
              <div class="viewDetail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/icons/linkOut.png" alt="" class="img-fluid">
                <div class="text-white text-nowrap">詳細を見る</div>
              </div>
            </div>
          </a>
        </article>
      </li>
      <li class="col-lg-4 plr-10">
        <article class="hp-order1__item hp-order1__item-bgBrown zoomIn">
          <a href="#" class="d-block">
            <div class="hp-order1__thumb">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order1-3.png" alt=""
                class="img-cover in h-auto">
              <div class="overTop">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hot-3.png" alt="" class="img-fluid">
              </div>
            </div>
            <div class="hp-order1__info">
              <div class="text-center mb-10">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order1-logo-2.png" alt=""
                  class="img-fluid">
              </div>
              <h3 class="color-primary heading-24">アストンインテリア</h3>
              <div class="fontsize-16 color-black">
                <div class="color-primary">所在地:</div>
                〒414-0035 静岡県伊東市南町2-1-20
              </div>
            </div>
            <div class="hp-order1__footer hp-order1__footer-brown">
              <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hp-call.png" alt="" class="img-fluid">
              <div class="heading-24 text-white text-nowrap">0557-52-6841</div>
              <div class="viewDetail">
                <img src="<?=get_stylesheet_directory_uri()?>/images/icons/linkOut.png" alt="" class="img-fluid">
                <div class="text-white text-nowrap">詳細を見る</div>
              </div>
            </div>
          </a>
        </article>
      </li>
    </ul>
    <div class="text-center">
      <a href="/store-introduction" class="see-all btn-357 btn-h62 btn-general">すべて見る</a>
    </div>
    <div>
    </div>
  </section>
</div>

<div class="hp-bg-1">
  <div class="container">
    <section class="hp-order2">
      <h2 class="text-center hp-order2__header-big">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-2.png" alt=""
          class="img-fluid d-md-block d-none mx-auto">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-2-mobile.png" alt=""
          class="img-fluid d-md-none d-block mx-auto">
      </h2>
      <header class="text-center hp-order2__header d-md-block d-none">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-2-sub.png" alt="" class="img-fluid">
      </header>
      <div class="hp-order2__body">
        <div class="bg-white borderRadius-10">
          <div class="hp-order2__body-sub">
            <h3 class="hp-order2__body-title">こんなお悩みはございませんか？？</h3>
            <ul class="hp-order2__body-list">
              <li>
                <div class="hp-order2__body-item">別荘を手放すので、残った家具・家電を処分したい</div>
              </li>
              <li>
                <div class="hp-order2__body-item">買い替えるための資金がほしい！</div>
              </li>
              <li>
                <div class="hp-order2__body-item">捨ててしまうくらいなら、少しでも現金化したい</div>
              </li>
            </ul>
            <h3 class="hp-order2__body-title hp-order2__body-title-mobile">家電・家具ASTONにお任せください！</h3>
            <div class="note respon-16">伊東市を中心とした伊豆半島、熱海地方の方に向けて、家電・家具の買取を行っております。<br /> 他にも商品として扱える物なら何でも買取致します！
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="hp-order3">
      <h2 class="text-center hp-order3__header-big mb-30">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-3.png" alt="" class="img-fluid">
      </h2>
      <div class="hp-order3__list">
        <div class="row mlr_10">
          <div class="col-lg-4 plr-10 mb-70">
            <div class="hp-order3__item">
              <div class="bg-white h-100 borderRadius-10">
                <header class="hp-order3__header">
                  <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hand-1.svg" alt=""
                    class="img-fluid iconHand">
                  <span class="heading-24 text-white ml-10">熟練の査定員による高額買取！</span>
                </header>
                <div class="hp-order3__item-sub">
                  <div class="hp-order3__thumb">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order3-1.png" alt=""
                      class="img-cover">
                  </div>
                  <div class="hp-order3__info respon-16">
                    当店では <span class="color-primary">年間4000件以上</span> の買取実績があり、これらの経験から、家電・家具の相場を熟しております。<br />
                    相場を知り尽くした熟練の査定員が、利益の出るギリギリの額をご提示することで、<span class="color-primary">高額買取を実現</span> させています！
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
                  <span class="heading-24 text-white ml-10">らくらく <br /> 便利な出張買取！</span>
                </header>
                <div class="hp-order3__item-sub">
                  <div class="hp-order3__thumb">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order3-2.png" alt=""
                      class="img-cover">
                  </div>
                  <div class="hp-order3__info respon-16">
                    <span class="color-primary">「家具が大きすぎて運ぶ気にならない」 「外部に頼むと費用がかかってしまう」</span> このようなお悩みも、ASTONなら解決！
                    対象の地域にお住まいなら、無料にて出張買取いたします。
                    運搬も当店スタッフが行いますので、お客様はお待ちいただくだけで結構です。
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
                  <span class="heading-24 text-white ml-10">お客様のご負担は 無料！</span>
                </header>
                <div class="hp-order3__item-sub">
                  <div class="hp-order3__thumb">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order3-3.png" alt=""
                      class="img-cover">
                  </div>
                  <div class="hp-order3__info respon-16">当店まで商品をお売りいただくのに、査定費・出張費・処分費など、 <span
                      class="color-primary">お客様からはご費用をいただきません！</span>
                    お気軽にお問い合わせください。</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<div class="hp-bg-2">
  <div class="container">
    <section class="hp-order4 mb-60">
      <h2 class="text-center hp-order4__header-big">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-4.png" alt="" class="img-fluid">
      </h2>
      <h2 class="text-center hp-order4__header-big mb-30">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-4-1.png" alt="" class="img-fluid">
      </h2>
      <div class="hp-order4__list">
        <div class="row mlr_10">
          <div class="col-lg-6 plr-10 mb-70">
            <div class="hp-order4__item">
              <div class="h-100 borderRadius-10">
                <header class="hp-order4__header">
                  <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hp-order4-1.png" alt=""
                    class="img-fluid iconNumber">
                  <span class="heading-24 color3 ml-50">店舗買取</span>
                </header>
                <div class="hp-order4__item-sub bg-white  borderRadius-10">
                  <div class="hp-order4__thumb">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order4-1.png" alt=""
                      class="img-cover">
                  </div>
                  <div class="hp-order4__info">
                    <div class="fontsize-16 mb-25">お客様が商品を各店舗にお持ち込みいただき、店頭にて査定させて いただきます。<br />
                      査定金額に納得がいかない場合、お売りいただかなくても結構です。
                      特に手数料等は発生致しません。<br />
                      1点からでもお受けいたしますので是非お気軽にお越し下さい！</div>
                    <div class="text-center">
                      <a href="/store-introduction" class="see-all btn-260 btn-h62 btn-general">店舗を調べる</a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 plr-10 mb-70">
            <div class="hp-order4__item">
              <div class="h-100 borderRadius-10">
                <header class="hp-order4__header">
                  <img src="<?=get_stylesheet_directory_uri()?>/images/icons/hp-order4-2.png" alt=""
                    class="img-fluid iconNumber">
                  <span class="heading-24 color3 ml-50">LINEカンタン査定</span>
                </header>
                <div class="hp-order4__item-sub bg-white borderRadius-10">
                  <div class="hp-order4__thumb box-line">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order4-2.png" alt=""
                      class="img-cover">
                  </div>
                  <div class="hp-order4__info">
                    <div class="box-qrcode">
                      <div class="hp-order4__info-left">
                        <div class="fontsize-16 mb-25">
                          LINEの友だち登録をして写真を送付 いただくことでカンタンに査定させていただきます。<br /> お送りいただいた写真を確し、 返答させていただきます。
                        </div>
                      </div>
                      <div class="hp-order4__info-right">
                        <div class="image-prcode">
                          <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/qrCode.png" alt=""
                            class="img-fluid">
                        </div>
                        <div class="text-nowrap heading-16 color-primary">LINEでお問い合わせ</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12">
            <section class="hp-order4-3">
              <div class="hp-order4-3__header">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order4-title-3.png" alt=""
                  class="img-fluid d-sm-block d-none">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order4-title-3-mobile.png" alt=""
                  class="img-fluid d-sm-none d-block">
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
            </section>
          </div>
        </div>
      </div>
    </section>

    <section class="hp-order5">
      <h2 class="text-center hp-order4__header-big mb-30">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-5.png" alt="" class="img-fluid">
      </h2>
      <div class="hp-order5__list">
        <div class="row mlr_10">
          <div class="col-lg-6 plr-10 mb-70">
            <div class="hp-order4__item">
              <div class="bg-white h-100 borderRadius-10">
                <div class="hp-order5__item-sub">
                  <div class="hp-order5__thumb">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order5-1.png" alt=""
                      class="img-cover borderRadius-10">
                  </div>
                  <div class="hp-order4__info">
                    <div class="fontsize-16 mb-25 line-3 fixHeightLine3">もちろん販売にも力を入れており毎日新しい商品が続々入荷します。
                      皆さまのご来店お待ちしております！</div>
                    <div class="text-center">
                      <a href="#" class="see-all btn-260 btn-h62 btn-general">初めての方へ</a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 plr-10 mb-70">
            <div class="hp-order4__item">
              <div class="bg-white h-100 borderRadius-10">
                <div class="hp-order5__item-sub">
                  <div class="hp-order5__thumb">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order5-2.png" alt=""
                      class="img-cover borderRadius-10">
                  </div>
                  <div class="hp-order4__info">
                    <div class="fontsize-16 mb-25 line-3 fixHeightLine3">どこよりも高く買取をモットーに日々運営しております。
                      万が一他店のお見積りが高い場合はご相談ください！！
                      すこしでも高く買取るよう努めます！！</div>
                    <div class="text-center">
                      <a href="#" class="see-all btn-260 btn-h62 btn-general">買取の流れ</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="hp-order6 mb-80">
      <header class="hp-order6__header text-center">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-6.png" alt=""
          class="img-fluid d-md-block d-none hp-order6__title">
        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-6-mobile.png" alt=""
          class="img-fluid d-lg-none d-md-none d-block mx-auto mb-30">
      </header>
      <div class="hp-order4__item p-relative">
        <div class="bg-white borderRadius-10 hp-order6--padding">
          <div id="post-homepage">
            <ul class="hp-order6__list mb-0">
              <li>
                <div class="hp-order6__item">
                  <div class="hp-order6__left">
                    <span class="hp-order6__date ">2020.06.10</span>
                  </div>
                  <div class="hp-order6__right">
                    <h4 class="hp-order6__right-title respon-16 text-bold"><a href="">テレビの買取事情とは？豊橋の買取業者が解説します！</a></h4>
                    <span class="hp-order6__date d-md-none d-block">2020.06.10</span>
                    <div class="hp-order6__list-tag">
                      <a href="#" class="hp-order6__right-link bg-color1 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color5 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color2 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color3 color-black">#伊豆最大級</a>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hp-order6__item">
                  <div class="hp-order6__left">
                    <span class="hp-order6__date">2020.06.11</span>
                  </div>
                  <div class="hp-order6__right">
                    <h4 class="hp-order6__right-title respon-16 text-bold"><a href="">ブランド財布の買取について豊橋の業者がご紹介！</a></h4>
                    <span class="hp-order6__date d-md-none d-block">2020.06.10</span>
                    <div class="hp-order6__list-tag">
                      <a href="#" class="hp-order6__right-link bg-color1 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color5 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color2 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color3 color-black">#伊豆最大級</a>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hp-order6__item">
                  <div class="hp-order6__left">
                    <span class="hp-order6__date">2020.06.15</span>
                  </div>
                  <div class="hp-order6__right">
                    <h4 class="hp-order6__right-title respon-16 text-bold"><a href="">ブランド財布の買取について豊橋の業者がご紹介！</a></h4>
                    <span class="hp-order6__date d-md-none d-block">2020.06.10</span>
                    <div class="hp-order6__list-tag">
                      <a href="#" class="hp-order6__right-link bg-color1 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color5 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color2 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color3 color-black">#伊豆最大級</a>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hp-order6__item">
                  <div class="hp-order6__left">
                    <span class="hp-order6__date">2020.06.19</span>
                  </div>
                  <div class="hp-order6__right">
                    <h4 class="hp-order6__right-title respon-16 text-bold"><a href="">ブランド財布の買取について豊橋の業者がご紹介！</a></h4>
                    <span class="hp-order6__date d-md-none d-block">2020.06.10</span>
                    <div class="hp-order6__list-tag">
                      <a href="#" class="hp-order6__right-link bg-color1 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color5 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color2 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color3 color-black">#伊豆最大級</a>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <div class="hp-order6__item">
                  <div class="hp-order6__left">
                    <span class="hp-order6__date">2020.08.10</span>
                  </div>
                  <div class="hp-order6__right">
                    <h4 class="hp-order6__right-title respon-16 text-bold"><a href="">ブランド財布の買取について豊橋の業者がご紹介！</a></h4>
                    <span class="hp-order6__date d-md-none d-block">2020.06.10</span>
                    <div class="hp-order6__list-tag">
                      <a href="#" class="hp-order6__right-link bg-color1 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color5 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color2 text-white">#伊豆最大級</a>
                      <a href="#" class="hp-order6__right-link bg-color3 color-black">#伊豆最大級</a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="text-center">
            <a href="#" class="see-all btn-472 btn-h42 btn-general">詳細を見る</a>
          </div>
        </div>
      </div>
    </section>

    <section class="hp-order7 mb-80">
      <header class="hp-order7__header text-center">
        <div class="mb-30">
          <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-7.png" alt="" class="img-fluid">
        </div>
      </header>
      <ul class="hp-order7__list row">
        <li class="col-lg-4 col-md-6 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="hp-order7__info bg-white borderRadius-10">
              <h3 class="hp-order7__title">家電製品</h3>
              <div class="hp-order7__desc">液晶テレビ / 冷蔵庫 / 洗濯機 / 掃除機 / エアコン / 電子レンジ / オーブンレンジ / FAX / 食器洗浄機 / 電話機 / 炊飯器
                /
                扇風機 / 照明機器 / こたつ / ストーブ /
                一眼レフカメラ / パソコン / オーディオ機器 / プレイステーション / Ｗii ゲーム機 など</div>
            </div>
            <div class="hp-order7__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-1.png" alt=""
                class="img-scaledown">
            </div>
          </article>
        </li>
        <li class="col-lg-4 col-md-6 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="hp-order7__info bg-white borderRadius-10">
              <h3 class="hp-order7__title">スポーツ用品・楽器</h3>
              <div class="hp-order7__desc">
                スポーツ用品 / ゴルフ用品 / フィットネスマシン / 釣り用品 / 楽器 / ピアノ / キーボード / エレキギター / アコースティックギター / エレキベース / ウクレレ / バイオリン /
                アンプ ベースアンプ / ドラムセット・電子ドラム / マイク / 管楽器 / クラリネット / サックス / トランペット など
              </div>
            </div>
            <div class="hp-order7__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-2.png" alt=""
                class="img-scaledown">
            </div>
          </article>
        </li>
        <li class="col-lg-4 col-md-6 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="hp-order7__info bg-white borderRadius-10">
              <h3 class="hp-order7__title">家具・インテリア</h3>
              <div class="hp-order7__desc">
                タンス / テーブル / イス / ソファー / ダイニングセット / チェスト / 食器棚 / 本棚 / 書棚/ キャビネット / 組み立て家具 / ベビー家具/ 鏡台 / ドレッサー / 整理タンス
                /
                洋服タンス / インテリア照明 / カラーBOX / 応接セット など
              </div>
            </div>
            <div class="hp-order7__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-3.png" alt=""
                class="img-scaledown">
            </div>
          </article>
        </li>
        <li class="col-lg-4 col-md-6 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="hp-order7__info bg-white borderRadius-10">
              <h3 class="hp-order7__title">ブランド品・貴金属</h3>
              <div class="hp-order7__desc">
                金・プラチナ / アクセサリー / リング / イヤリング / チョーカー / ネックレス / ピアス / ブローチ / ブレスレット / ペンダント / ダイヤモンド など
              </div>
            </div>
            <div class="hp-order7__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-4.png" alt=""
                class="img-scaledown">
            </div>
          </article>
        </li>
        <li class="col-lg-4 col-md-6 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="hp-order7__info bg-white borderRadius-10">
              <h3 class="hp-order7__title">電動工具</h3>
              <div class="hp-order7__desc">
                インパクトドライバ / ドリルドライバ / 電動丸ノコ / 卓上スライドソー / ジグソー / ルーター / トリマー / 電気カンナ / サンダー / ディスクグラインダ / ハンマドリル / 発電機
                /
                チェンソー / 芝刈り機 / 草刈機 / 集じん機 / ブロア / エアコンプレッサ / エアくぎ打ち機 / エアタッカ / レーザー墨出し / 高圧洗浄機 など
              </div>
            </div>
            <div class="hp-order7__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-5.png" alt=""
                class="img-scaledown">
            </div>
          </article>
        </li>
        <li class="col-lg-4 col-md-6 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="hp-order7__info bg-white borderRadius-10">
              <h3 class="hp-order7__title">オフィス用品</h3>
              <div class="hp-order7__desc">
                事務机 / 袖机 / ホワイトボード / 応接セット / ミーティングテーブル / パーテーション / スチール家具 / スチールデスク / 書庫 / ロッカー / 事務椅子 / カウンター / コピー機
                /
                FAX / シュレッダー など
              </div>
            </div>
            <div class="hp-order7__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-6.png" alt=""
                class="img-scaledown">
            </div>
          </article>
        </li>
        <li class="col-lg-4 col-md-6 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="hp-order7__info bg-white borderRadius-10">
              <h3 class="hp-order7__title">デザイナーズ家具</h3>
              <div class="hp-order7__desc">
                カッシーナ / アルフレックス / デセデ / ノール / ハーマンミラー / リーン・ロゼ / ヴィトラ / カッペリーニ / カリモク / ドマーニ / 天童木工 / イデー / カンディハウス /
                飛騨産業 / 北海道民芸 /松本民芸など
              </div>
            </div>
            <div class="hp-order7__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-7.png" alt=""
                class="img-scaledown">
            </div>
          </article>
        </li>
        <li class="col-lg-4 col-md-6 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="hp-order7__info bg-white borderRadius-10">
              <h3 class="hp-order7__title">日用品ギフト贈答品</h3>
              <div class="hp-order7__desc">
                雑貨 / ギフト品 <br />お中元 / お歳暮用ギフト/ 食器ギフト 缶詰ギフト / 洗剤ギフト / タオルギフト
              </div>
            </div>
            <div class="hp-order7__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-8.png" alt=""
                class="img-scaledown">
            </div>
          </article>
        </li>
        <li class="col-lg-4 col-md-6 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="hp-order7__info bg-white borderRadius-10">
              <h3 class="hp-order7__title">スマホ、パソコン</h3>
              <div class="hp-order7__desc">
                スマートフオン/ タブレット / パソコン / タブレット用ケース/ モバイルバッテリー / ＰＣアクセサリなど
              </div>
            </div>
            <div class="hp-order7__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-9.png" alt=""
                class="img-scaledown">
            </div>
          </article>
        </li>
        <li class="col-lg-4 col-md-6 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="hp-order7__info bg-white borderRadius-10">
              <h3 class="hp-order7__title">自転車</h3>
              <div class="hp-order7__desc">
                シティサイクル / ロードバイク / クロスバイク /マウンテンバイク / BMX　電動自転車 /折りたたみ自転車 / 車いす / ブリジストン /トレック / ビアンキ / GARNEAU ジャイアント
                /FUJI / キャノンデールなど
              </div>
            </div>
            <div class="hp-order7__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-10.png" alt=""
                class="img-scaledown">
            </div>
          </article>
        </li>
        <li class="col-lg-4 col-md-6 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="hp-order7__info bg-white borderRadius-10">
              <h3 class="hp-order7__title">映画、芸術工芸</h3>
              <div class="hp-order7__desc">
                日本画 / 洋画 / 伝統工芸品 / 有名作家の陶磁器
              </div>
            </div>
            <div class="hp-order7__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-11.png" alt=""
                class="img-scaledown">
            </div>
          </article>
        </li>
        <li class="col-lg-4 col-md-6 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="hp-order7__info bg-white borderRadius-10">
              <h3 class="hp-order7__title">バイク</h3>
              <div class="hp-order7__desc">
                原付スクーター / 原二スクーター / ネイキッド /オフロード / クルーザー / ビッグスケーター /旧車 / 国内メーカー /ハーレーダビッドソン /ドウカテイ / ベスパなど
              </div>
            </div>
            <div class="hp-order7__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-12.png" alt=""
                class="img-scaledown">
            </div>
          </article>
        </li>
        <li class="col-lg-8 col-md-12 col-sm-12 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="bg-white h-100 borderRadius-10">
              <div class="row">
                <div class="col-6">
                  <div class="hp-order7__info pr-0">
                    <h3 class="hp-order7__title">アンティーク家具・輸入家具</h3>
                    <div class="hp-order7__desc">
                      イギリスアンティーク/フランスアンティーク イタリア家具
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="pr-10 ptb-10">
                    <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-image.png" alt=""
                      class="img-cover h-auto">
                  </div>
                </div>
              </div>
            </div>
          </article>
        </li>
        <li class="col-lg-4 col-md-12 col-sm-12 col-12">
          <article class="hp-order7__item hp-order4__item">
            <div class="hp-order7__info bg-white borderRadius-10">
              <h3 class="hp-order7__title">お酒</h3>
              <div class="hp-order7__desc">
                ビール / 酎ハイ / ウイスキー /バーボン / ブランデー / 焼酎/ワイン他 / 白州 /山崎/響/ヘネシー/レミーマルタン/マーテル/各種高級メーカー高価買取中！！
                業者様用大量買取にも対応致します。
                <br />内容に追加で、期限間近などの商品もご相談下さい。
              </div>
            </div>
            <div class="hp-order7__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-13.png" alt=""
                class="img-scaledown">
            </div>
          </article>
        </li>
      </ul>
      <div class="note-24 color3">※一部、年式・程度により買取できない商品もございます。</div>
    </section>

    <section class="hp-order8">
      <div class="hp-order4__item">
        <div class="bg-white h-100 borderRadius-10">
          <div class="hp-order8__item">
            <div class="hp-order8__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-8.png" alt="" class="img-fluid">
            </div>
            <div class="hp-order5__thumb">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order8-1.png" alt=""
                class="img-cover borderRadius-10">
            </div>
            <div class="hp-order4__info">
              <div class="fontsize-16 hp-order8__desc">
                骨董品 / 美術品 / キャンプ用品 / ガーデニング用品 / アウトドア用品 / 防災グッズ / ペット用品 / 美術品 / 食品 / 飲料 / カップラーメン / インスタント食品 / フィギュア /
                プラモデル / おもちゃラジコン / スーツケース・キャリーケース / アタッシュケース など
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<div class="hp-bg-3">
  <div class="container">
    <div class="text-center hp-order10__header">
      <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-10.png" alt="" class="img-fluid">
    </div>

    <div class="row row-contactTFooter mb-90">
      <div class="col-12">
        <div class="contactTFooter contactTFooter--borderBlue p-10">
          <div class="bg-white borderRadius-10 hp-contact">
            <div class="hp-contact__w70">
              <div class="contactTFooter__wp-item">
                <div class="contactTFooter__item">
                  <h5 class="contactTFooter__name text-white mb-0">
                    到着商品
                  </h5>
                </div>
                <div class="contactTFooter__item">
                  <h5 class="contactTFooter__name text-white mb-0">
                    事故商品
                  </h5>
                </div>
                <div class="contactTFooter__item">
                  <h5 class="contactTFooter__name text-white mb-0">
                    過剰在庫
                  </h5>
                </div>
                <div class="contactTFooter__item">
                  <h5 class="contactTFooter__name text-white mb-0">
                    長期在庫
                  </h5>
                </div>
                <div class="contactTFooter__item">
                  <h5 class="contactTFooter__name text-white mb-0">
                    決算処分
                  </h5>
                </div>
              </div>

              <div class=" mb-30">
                <p class="contactTFooter__text color-black mb-0">
                  お悩みの方、アストンは売れるものなら何でも買取いたします。現金決済可！秘密厳守でお客様のお困りごとのご相談に応じます。
                  商品量に関わらず丁寧に査定します！
                </p>
                <p class="contactTFooter__text color-black mb-0">出張買取や事前のお見積りも可能ですのでお気軽にお問い合わせ下さい。</p>
              </div>

              <div class="row">
                <div class="col-lg-6">
                  <div class="d-flex align-items-center mb-10">
                    <img class="contactTFooter__tick"
                      src="<?= get_stylesheet_directory_uri() ?>../images/icons/tick.svg" alt="Icon tick">
                    <h6 class="contactTFooter__target color-black mb-0">倒産・廃業による大量在庫</h6>
                  </div>
                  <div class="d-flex align-items-center mb-10">
                    <img class="contactTFooter__tick"
                      src="<?= get_stylesheet_directory_uri() ?>../images/icons/tick.svg" alt="Icon tick">
                    <h6 class="contactTFooter__target color-black mb-0">店舗・オフィスの引き上げ</h6>
                  </div>
                  <div class="d-flex align-items-center mb-10">
                    <img class="contactTFooter__tick"
                      src="<?= get_stylesheet_directory_uri() ?>../images/icons/tick.svg" alt="Icon tick">
                    <h6 class="contactTFooter__target color-black mb-0">大量在庫・余剰在庫処分</h6>
                  </div>
                  <div class="d-flex align-items-center mb-10">
                    <img class="contactTFooter__tick"
                      src="<?= get_stylesheet_directory_uri() ?>../images/icons/tick.svg" alt="Icon tick">
                    <h6 class="contactTFooter__target color-black mb-0">破産・管財品の処分</h6>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="d-flex align-items-center mb-10">
                    <img class="contactTFooter__tick"
                      src="<?= get_stylesheet_directory_uri() ?>../images/icons/tick.svg" alt="Icon tick">
                    <h6 class="contactTFooter__target color-black mb-0">リースアップ品の処分</h6>
                  </div>
                  <div class="d-flex align-items-center mb-10">
                    <img class="contactTFooter__tick"
                      src="<?= get_stylesheet_directory_uri() ?>../images/icons/tick.svg" alt="Icon tick">
                    <h6 class="contactTFooter__target color-black mb-0">解体前の残置物処分</h6>
                  </div>
                  <div class="d-flex align-items-center mb-10">
                    <img class="contactTFooter__tick"
                      src="<?= get_stylesheet_directory_uri() ?>../images/icons/tick.svg" alt="Icon tick">
                    <h6 class="contactTFooter__target color-black mb-0">住宅展示場の設備什器備品など</h6>
                  </div>
                </div>
              </div>

              <div class="mt-20">
                <div class="d-flex flex-wrap hp-contact__jcc">
                  <h5 class="contactTFooter__hotline color-primary mb-15 hp-contact__name">
                    <!-- 法人様専用フリーダイヤル -->
                    <img class="img-fluid titleContact"
                      src="<?= get_stylesheet_directory_uri() ?>/images/uploads/titleContact.png" alt="Title">
                  </h5>
                  <a name="" id="" class="contactTFooter__phone mb-20" href="tel: 0557-52-3677">
                    <img class="contactTFooter__icon"
                      src="<?= get_stylesheet_directory_uri() ?>../images/icons/red-phone.svg" alt="Phone icon">
                    <span class="contactTFooter__number-phone color-primary">
                      0557-52-3677
                    </span>
                  </a>
                </div>

              </div>
            </div>
            <div class="text-center mb-10">
              <a href="#" class="see-all btn-357 btn-h62 btn-general">もっと見る</a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <section class="hp-order9 mb-80">
      <div class="hp-order4__item">
        <div class="bg-white h-100 borderRadius-10">
          <div class="hp-order9__item">
            <div class="hp-order9__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-9.png" alt="" class="img-fluid">
            </div>
            <div class="row">
              <div class="col-md-6 hp-order5__thumb mb-6">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order9-1.png" alt=""
                  class="img-cover borderRadius-10">
              </div>
              <div class="col-md-6 hp-order5__thumb mb-6">
                <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order9-2.png" alt=""
                  class="img-cover borderRadius-10">
              </div>
            </div>
            <div class="hp-order4__info">
              <div class="text-center">
                <a href="#" class="see-all btn-357 btn-h62 btn-general">詳細を見る</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<section class="bg-white">
  <div class="container pt-50">
    <header class="text-center mb-70">
      <img class="img-fluid d-md-block d-none mx-auto"
        src="<?= get_stylesheet_directory_uri() ?>/images/uploads/hp-title-11.png" alt="">
      <img class="img-fluid d-md-none d-block mx-auto"
        src="<?= get_stylesheet_directory_uri() ?>/images/uploads/hp-title-11-mobile.png" alt="">
    </header>
  </div>
  <div class="container pb-40">
    <div class="row-contactTFooter row-feedbackTFooter mb-40">

      <div class="contactTFooter feedbackTFooter contactTFooter--borderPrimary bg-white">
        <div class="contactTFooter__wp-item feedbackTFooter__wp-item">
          <div class="contactTFooter__item feedbackTFooter__item ptb-24 plr-80 same-width">
            <h5 class="contactTFooter__name feedbackTFooter__name text-white mb-0">
              年中無休
            </h5>
          </div>
        </div>

        <div class="row feedbackTFooter__needed-wp">
          <div class="col-md-5 d-flex align-items-end">
            <a href="" class="feedbackTFooter__logo link-logo">
              <img class="img-scaledown" src="<?= get_stylesheet_directory_uri() ?>../images/uploads/logo-TopFooter.png"
                alt="logo">
            </a>
          </div>

          <div class="col-md-7">
            <div class="feedbackTFooter__col-right">
              <a name="" id="" class="contactTFooter__phone feedbackTFooter__phone mb-20" href="tel: 0557-52-3677">
                <img class="contactTFooter__icon feedbackTFooter__icon"
                  src="<?= get_stylesheet_directory_uri() ?>../images/icons/red-phone.svg" alt="Phone icon">
                <span class="contactTFooter__number-phone feedbackTFooter__number-phone color-primary">
                  0557-52-3677
                </span>
              </a>
              <p class="feedbackTFooter__info color-black mb-0">
                電話受付時間: 9:00~19:00
              </p>
              <p class="feedbackTFooter__info color-black mb-0">
                〒414-0036 静岡県伊市東宮川町1-6-12
              </p>
            </div>
          </div>
        </div>
        <div class="text-center mt-50">
          <a href="#" class="feedbackTFooter__btn contactTFooter__btn text-white mx-auto same-width">ラインで簡単査定</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();