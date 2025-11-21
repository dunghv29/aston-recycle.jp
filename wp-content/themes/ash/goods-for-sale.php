<div class="bg-main-store">
  <?php

/**
 * Template Name: Goods for sale
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
            class="breadcrumb-text color-black">売買の商品</span></li>
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
        <a href="/purchase-flow" title="" class="safe-purchase__link">買取の流れ</a>
      </li>
      <li>
        <a href="/goods-for-sale" title="" class="safe-purchase__link active">売買の商品</a>
      </li>
    </ul>
  </section>

  <section class="container mb-80">
    <ul class="hp-order7__list listRed row">
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
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-1.png" alt="" class="img-scaledown">
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
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-2.png" alt="" class="img-scaledown">
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
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-3.png" alt="" class="img-scaledown">
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
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-4.png" alt="" class="img-scaledown">
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
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-5.png" alt="" class="img-scaledown">
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
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-6.png" alt="" class="img-scaledown">
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
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-7.png" alt="" class="img-scaledown">
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
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-8.png" alt="" class="img-scaledown">
          </div>
        </article>
      </li>
      <li class="col-lg-4 col-md-6 col-12">
        <article class="hp-order7__item hp-order4__item">
          <div class="hp-order7__info bg-white borderRadius-10">
            <h3 class="hp-order7__title">スマホ、パソコン</h3>
            <div class="hp-order7__desc">
              スマートフオン/ タブレット / パソコン スマーフオン / タブレット用ケース/ モバイルバッテリー / ＰＣアクセサリなど
            </div>
          </div>
          <div class="hp-order7__overlay">
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-9.png" alt="" class="img-scaledown">
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
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-10.png" alt="" class="img-scaledown">
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
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-11.png" alt="" class="img-scaledown">
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
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-12.png" alt="" class="img-scaledown">
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
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-order7-13.png" alt="" class="img-scaledown">
          </div>
        </article>
      </li>
    </ul>
    <div class="note-24 color-primary">※一部、年式・程度により買取できない商品もございます。</div>
  </section>

  <section class="container">
    <div class="hp-order8 listRed">
      <div class="hp-order4__item">
        <div class="bg-white h-100 borderRadius-10">
          <div class="hp-order8__item">
            <div class="hp-order8__overlay">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/hp-title-8-orange.png" alt=""
                class="img-fluid">
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
    </div>
  </section>

  <section class="hp-bg-1 borderBottom-10 hp-bg-test">
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