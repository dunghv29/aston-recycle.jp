<?php

/**
 * Template Name: Company us
 */
get_header();
?>
<script>
$(function() {
  $('#header-link-5').attr('src', '<?= get_stylesheet_directory_uri() ?>/images/uploads/header-link-5-orange.png');
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
    <li class="breadcrumb-item d-flex align-items-center"><span class="breadcrumb-text color-black">お問い合わせ</span>
    </li>
  </ol>
</section>

<section class="container">
  <header class="c-profile__title mb-25 text-center">
    <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/company-us-title-1.png" alt="title"
      class="img-fluid">
  </header>
</section>

<section class="container">
  <header class="c-profile__title c-profile--60 text-center">
    <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/company-us-title-2.png" alt="title"
      class="img-fluid d-md-block d-none">

    <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/company-us-title-2-mobile.png" alt="title"
      class="img-fluid d-md-none d-block mx-auto">
  </header>
</section>

<section class="container">
  <div class="inquiries-phone">
    <div class="hp-order1__footer-blue c-profile__thumb-title">電話でのお問い合わせ</div>
    <div class="inquiries-phone__body">
      <div class="row mb-10">
        <div class="col-6">
          <div class="inquiries-phone__left">
            電話番号:
          </div>
        </div>
        <div class="col-6">
          <div class="inquiries-phone__right">0557-52-3677</div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="inquiries-phone__left">
            受付時間:
          </div>
        </div>
        <div class="col-6">
          <div class="inquiries-phone__right">9:00 ~ 19:00
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container">
  <header class="c-profile__title company-us-title3 text-center">
    <img src="<?= get_stylesheet_directory_uri() ?>/images/uploads/company-us-title-3.png" alt="title"
      class="img-fluid">
  </header>
</section>

<section class="container">
  <div class="company-us-star">
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
            添付するお写真の容量は1点につき5MBまででお願い致します。<br /> また、お送りいただくお写真の合計容量が10MBを超える場合は、<br /> 正常な送受信ができない場合がございます。
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<form action="" method="post" id="send_mail" enctype="multipart/form-data">
  <section class="container">
    <div class="row contact-form">
      <div class="col-md-4 mb-10">
        <div class="text-center bg-color2 borderRadius-10 conttact-title">
          名前
        </div>
      </div>
      <div class="col-md-8 mb-10">
        <input type="text" class="input-text" name="name-customer" onchange="this.value = this.value.trim()">
      </div>
    </div>
    <div class="row contact-form">
      <div class="col-md-4 mb-10">
        <div class="text-center bg-color2 borderRadius-10 conttact-title">
          メールアドレス
        </div>
      </div>
      <div class="col-md-8 mb-10">
        <input type="email" class="input-text" name="email" required oninvalid="invalidEmail(this);"
          oninput="checkValid(this)" title="メールは誤った形式です。" onchange="this.value = this.value.trim()">
      </div>
    </div>
    <div class="row contact-form">
      <div class="col-md-4 mb-10">
        <div class="text-center bg-color2 borderRadius-10 conttact-title">
          電話番号
        </div>
      </div>
      <div class="col-md-8 mb-10">
        <input maxlength="20" type="tel" class="input-text" required name="tel"
          onchange="this.value = this.value.trim()" required pattern="[\[\]0-9+(){}\s|-]+$"
          oninvalid="invalidTel(this);" oninput="this.setCustomValidity('')">
      </div>
    </div>
    <div class="row contact-form">
      <div class="col-md-4 mb-10">
        <div class="text-center bg-color2 borderRadius-10 conttact-title">
          画像添付（10つまで）
        </div>
      </div>
      <div class="col-md-8 mb-10 contact-form__center">
        <a id="select-images" href="javascript:void(0)" onclick="$('#choose-image').click()"
          class="see-all btn-260 btn-h65 btn-general">ファイルを選ぶ</a>
        <input style="display: none" id="choose-image" name="files[]" type="file" accept=".img, .gif, .jpg, .gif, .png"
          multiple="multiple" onchange="fileValidation()" />
      </div>
    </div>
    <div class="row contact-form">
      <div class="col-md-4 mb-10">
        <div class="text-center bg-color2 borderRadius-10 conttact-title h-100">
          お問い合わせ内容
        </div>
      </div>
      <div class="col-md-8 mb-10">
        <textarea id="" cols="30" rows="5" class="input-text" name="content_request"
          onchange="this.value = this.value.trim()"></textarea>
      </div>
    </div>
    <div class="text-center mt-40">
      <button id="submit" class="see-all btn-357 btn-h65 btn-general">登録</button>
    </div>
  </section>
</form>



<section class="background-branch">
  <div class="container">
    <div class="row rowBranch">
      <div class="col-12">
        <h4 class="branchTitle line-4 color-primary text-center mx-auto mt-100 mb-55">
          <!-- お気軽に最寄りの店舗にお問い合わせください！ -->
          <img class="img-fluid titleBranch-pc"
            src="<?= get_stylesheet_directory_uri() ?>/images/uploads/titleBranch.png" alt="Title">
          <img class="img-fluid titleBranch-mobile mx-auto"
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
<script>
function checkValid(input) {
  if (input.checkValidity()) {
    input.setCustomValidity('メールアドレスの形式は正しくない');
  }
}

function invalidTel(input) {
  if (input.value == '') {
    input.setCustomValidity('電話番号は必要です。');
  } else {
    if (input.validity.typeMismatch || input.validity.patternMismatch) {
      input.setCustomValidity('電話番号の形式は正しくない');
    } else input.setCustomValidity('');
  }
  return true;
}

function invalidEmail(input) {

  if (input.value == '') {
    input.setCustomValidity('メールは必要です。');
  } else {
    if (input.validity.typeMismatch || input.validity.patternMismatch) {
      input.setCustomValidity('メールアドレスの形式は正しくない');
    } else input.setCustomValidity('');
  }
  return true;
}

function fileValidation() {
  $('.file-name').remove();
  const infile = document.getElementById('choose-image');
  var arrayExtensions = ["img", "gif", "jpg", "gif", "png"];
  var totalFileSize = 0;
  if (infile.files.length > 0) {
    for (let i = 0; i < infile.files.length - 1; i++) {
      $('#select-images').after('<p class="file-name">' + (infile.files.item(i)).name + '</p>');
    }
    if (infile.files.length > 10) {
      alert("画像添付は10つを超えているため、最初の10つに切り捨てられます。");
      let list = new DataTransfer;
      for (let i = 0; i < 10; i++) {
        list.items.add(infile.files.item(i));
      }
      document.getElementById('choose-image').files = list.files
    }
    for (var i = 0; i <= infile.files.length - 1; i++) {
      var ext = infile.files.item(i).name.split(".");
      ext = ext[ext.length - 1].toLowerCase();
      if (arrayExtensions.lastIndexOf(ext) == -1) {
        alert("拡張タイプは間違っています。");
        $("#choose-image").val("");
        return 0;
      }
      const fsize = infile.files.item(i).size;
      const file = Math.round((fsize / 1024));
      // The size of the file.
      if (file >= 5120) {
        alert("ファイルが　5MB　を超えているため、含まれませんでした。");
        $("#choose-image").val("");
        return 0;
      }
      totalFileSize += file;
    }
    if (totalFileSize > 10240) {
      alert("すべてのファイルの合計は10MB未満である必要があります ");
      $("#choose-image").val("");
      return 0;
    }
  }
  $('#validate-file').text(infile.files.length + " files");
}
$('#send_mail').submit(function(e) {
  e.preventDefault();
  fileValidation();
  $('#submit').attr('disabled', true);
  $('#submit').html(
    `<span id="loading" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...`
  );
  var formData = new FormData(this);
  formData.append('action', 'send_mail_product');
  $.ajax({
    url: myAjax.ajaxurl,
    type: 'POST',
    dataType: "json",
    data: formData,
    success: function(response) {
      $('#submit').attr('disabled', false);
      $('#submit').empty().text('登録');
      if (response.code == 200) {
        $('form').find('input').val("");
        $('form').find('textarea').html('');
        $('form').find('textarea').val('');
        alert(response.message);
      } else {
        $("#choose-image").val("");
        alert(response.message);
      }
    },
    cache: false,
    contentType: false,
    processData: false
  })
});
</script>
<style>
p.file-name {
  padding: 10px 0;
  margin: 0;
}
</style>
<?php
get_footer();