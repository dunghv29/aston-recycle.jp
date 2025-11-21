<?php

/**
 * Template Name: FAQ
 */
get_header();
?>

<script>
$(function() {
  $('#header-link-3').attr('src',
    '<?= get_stylesheet_directory_uri() ?>/images/uploads/header-link-orange1010.png');

  $('.about-purchase__header').click(function() {
    $(this).children('.about-purchase__arrow').toggleClass('about-purchase__arrow-up');
    $(this).siblings('.about-purchase__body').slideToggle('fast');
  });

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
          class="breadcrumb-text color-black">よくあるご質問</span></li>
      <li class="breadcrumb-item d-flex align-items-center"><a href="#" class="breadcrumb-text color-black">出張買取について</a>
      </li>
    </ol>
  </div>
</nav>

<main id="about-purchase" class="about-purchase">
  <div class="container">
    <div class="row rowTitle">
      <div class="col-10 mx-auto text-center">
        <h2 class="bigTitle mt-50 mb-60">
          <img class="bigTitle__img img-scaledown"
            src="<?= get_stylesheet_directory_uri() ?>/images/uploads/bigTitle1010.png" alt="Big title">
        </h2>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row rowTab">
      <div class="col-12">
        <div class="nav nav-pills about-purchase__nav-pills d-flex align-items-center" id="v-pills-tab" role="tablist"
          aria-orientation="vertical">
          <a class="about-purchase__link active mr-20" id="v-pills-business-tab" data-toggle="pill"
            href="#v-pills-business" role="tab" aria-controls="v-pills-business" aria-selected="true">
            出張買取について
          </a>

          <a class="about-purchase__link" id="v-pills-counter-tab" data-toggle="pill" href="#v-pills-counter" role="tab"
            aria-controls="v-pills-counter" aria-selected="false">
            店頭買取について
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="tab-content about-purchase__tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-business" role="tabpanel"
            aria-labelledby="v-pills-business-tab">
            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    出張費や見積り料金はかかりますか？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0">出張やお見積りに一切費用はかかりません。</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    出張買取をお願いしたいけど近所の目が気になるのですが…
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0">
                      ご安心下さい。当店は社名等無表記のトラックでお伺いしております。
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    小さい物でも出張買取できますか？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0">
                      商品の内容や距離によって出張買取できない場合がございます。
                    </p>
                    <p class="about-purchase__answer-text color-black m-0">
                      しかし高額商品などは一品からでも出張買取することがございます。詳しくはお問 い合わせ下さい。
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    見積りを出したいだけでも出張査定してもらえますか？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0">
                      大量の場合や高額品がある場合は出張見積りに伺います。電化製品など型番がわかる物はお電話でおおよその見積りをお出しします。
                    </p>
                    <p class="about-purchase__answer-text color-black m-0">
                      ※買取する場合は現物査定をしますので、そこで買取額が変わる場合がございます。
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    出張買取の日の指定はできますか？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0">
                      指定いただけます。ご希望のお日にが他のお客様と重ならなければ可能です。
                    </p>
                    <p class="about-purchase__answer-text color-black m-0">
                      お早目のお問合せをお願い致します。
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    エアコンは買取ってもらう際に取外してもらえますか？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0">
                      はい、可能です。基本的に取外しは無料で行っておりますが、エアコンの大きさ・取付け位置・状態によっては電気業者に委託するため有料になる場合がございます。
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    出張買取前にあらかじめ準備しておくことはありますか？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0">
                      冷蔵庫・タンス・食器棚等の場合は中に入っている物を全て出し、空の状態にしてください。冷蔵庫は動作確認を行いますので電源を入れた状態にしておいてください。
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    出張買取前にあらかじめ準備しておくことはありますか？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0">
                      冷蔵庫・タンス・食器棚等の場合は中に入っている物を全て出し、空の状態にしてください。冷蔵庫は動作確認を行いますので電源を入れた状態にしておいてください。
                    </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    出張査定してもらったが金額に折り合いが付かない場合、断わってもいいのでしょうか？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0">
                      はい、お断りいただいても構いません。その場合でも出張料が発生することはございませんので安心下さい。
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>

          <div class="tab-pane fade" id="v-pills-counter" role="tabpanel" aria-labelledby="v-pills-counter-tab">
            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    来店時に用意するものはありますか？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0">
                      査定額1万円以上の買取の場合は身分証明証（免許証、保険証、パスポート、住民票のいずれか）が必要です。</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    どんな物でも買取できますか？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0">
                      基本的に再販可能な物が買取の対象となります。極端に古い物など一部買取できない場合もございますが出来るだけ買取できるように務めてまいります。 </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    買取金額に納得できなかったらどうしたらいいの？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0">
                      高価買取致しておりますがご納得いただけない場合はお断りしていただいて構いません。また、その場合でもお見積りは無料ですのでご安心下さい。 </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    来店前に電話して行った方がいいの？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0"> 大量にある場合や大型商品がある場合はお電話下さい。スムーズに査定いただけます。 </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    査定にはどのくらい時間がかかるの？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0"> おおよそ10～15分前後のお時間をいただいております。 </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    古着は買取できるの？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0"> 古着の買取可能です。詳しくはお問い合わせください！ </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    たとえばタオルギフト1つでも買取できますか？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0"> 喜んで買取しております。 </p>
                  </div>
                </div>
              </div>
            </div>

            <div class="about-purchase__item mb-30">
              <div class="about-purchase__header d-flex ">
                <div class="about-purchase__question d-flex ">
                  <div class="mr-16 about-purchase__question-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/question.png" alt="Icon question"> </div>
                  <h4 class="about-purchase__question-title color-white m-0 ">
                    買取できないものはありますか？
                  </h4>
                </div>
                <div class="about-purchase__arrow">
                </div>
              </div>
              <div class="about-purchase__body">
                <div class="about-purchase__answer d-flex">
                  <div class="about-purchase__answer-icon"><img class="img-scaledown"
                      src="<?= get_stylesheet_directory_uri() ?>/images/icons/answer.png" alt="Icon answer"></div>
                  <div class="about-purchase__answer-title">
                    <p class="about-purchase__answer-text color-black m-0"> 汚れ・傷みが激しいものは買取りできません。その他の商品は一度お問合せ下さい。 </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
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