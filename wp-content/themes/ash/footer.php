<?php wp_footer(); ?>
<div class="footer">
  <div class="container">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-4">
          <div class="footer-top__item">
            <div class="footer-top__title"><a class="color-white ft-link" href="/main-store">アストン伊東本店</a></div>
            <div class="footer-top__desc">所在地: 〒414-0036 静岡県伊東市宮川町1-6-12</div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="footer-top__item">
              <div class="footer-top__title"><a class="color-white ft-link" href="/shuzenji">アストン沼津 西間門店</a></div>
            <div class="footer-top__desc">
              所在地: 〒410-0871 静岡県沼津市西間門262-1
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="footer-top__item">
              <div class="footer-top__title"><a class="color-white ft-link" href="/store-antiques">アストンアンティークス</a></div>
            <div class="footer-top__desc">所在地: 〒414-0051静岡県伊東市吉田142</div>
          </div>
        </div>
      </div>
    </div>
    <div class="hr-red"></div>
    <div class="footer-between">
      <div class="row">
        <div class="col-lg-6 mb-25">
          <div class="footer-image h-100">
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/ft-image-1.png" alt=""
              class="img-cover borderWhite-3">
          </div>
        </div>
        <div class="col-lg-6 mb-25">
          <div class="row h-100">
            <div class="col-7">
              <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/ft-image-2.png" alt=""
                class="img-cover borderWhite-3">
            </div>
            <div class="col-5">
                <a href="/recruitment">
                  <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/ft-image-3.png" alt=""
                    class="img-cover borderWhite-3">
                </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-upper">
      <div class="row align-items-center">
        <div class="col-lg-4 col-md-5">
          <a href="/" class="logoFtAston mb-25">
            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/logo-ft.svg" alt="" class="img-fluid ">
          </a>
        </div>
        <div class="col-lg-8 col-md-7">
          <div class="row">
            <div class="col-lg-3 col-6">
              <ul class="ft-link-list">
                <li>
                  <a href="/store-introduction" class="ft-link">店舗紹介</a>
                </li>
                <li>
                  <a href="/safe-purchase" class="ft-link">買取について</a>
                </li>
                <li>
                  <a href="/about-business-trip-purchase" class="ft-link">よくある質問</a>
                </li>
                <li>
                  <a href="/company-profile" class="ft-link">会社概要</a>
                </li>
              </ul>
            </div>
            <div class="col-lg-9 col-6">
              <ul class="ft-link-list">
                <li>
                  <a href="/company-us" class="ft-link">お問い合わせ</a>
                </li>
                <li>
                  <a href="/privacy-policy" class="ft-link">プライバシーポリシー</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrighted">
        c 2020 ASTON　著作権を持っている
      </div>
    </div>
  </div>
</div>
</body>
<style>
.fl-module-content {
  margin: 0;
}

.fl-row-content-wrap {
  padding: 0;
}
</style>

<script>
    function checkValid(input)
    {
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
    function deleteImg(imgName, svg) {
        $(svg).parent('p').remove();
        var infile = document.getElementById('choose-image');
        let list = new DataTransfer;
        for(let i = 0; i < infile.files.length; i++) {
            if ((infile.files.item(i)).name != imgName) {
                list.items.add(infile.files.item(i));
            }
        }
        document.getElementById('choose-image').files = list.files;
    }
    function fileValidation() {
        $('.file-name').remove();
        const infile = document.getElementById('choose-image');
        var arrayExtensions = ["img", "gif", "jpg", "gif", "png"];
        var totalFileSize = 0;
        if (infile.files.length > 0) {
            if (infile.files.length > 10) {
                alert("画像添付は10つを超えているため、最初の10つに切り捨てられます。");
                let list = new DataTransfer;
                for(let i = 0; i < 10; i++){
                    list.items.add(infile.files.item(i));
                }
                document.getElementById('choose-image').files = list.files
            }
            var lengh = 10;
            if (infile.files.length <= 10) {
                lengh = infile.files.length;
            }
            for (var i = 0; i <= lengh - 1; i++) {
                var ext = infile.files.item(i).name.split(".");
                ext = ext[ext.length-1].toLowerCase();
                if (arrayExtensions.lastIndexOf(ext) == -1) {
                    alert("拡張タイプは間違っています。");
                    $("#choose-image").val("");
                    return 0;
                }
                const fsize = infile.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file > 5120) {
                    alert("ファイルが5MBを超えているため、含まれませんでした。");
                    $("#choose-image").val("");
                    return 0;
                }
                totalFileSize += file;
            }
            if (totalFileSize > 10240){
                alert("すべてのファイルの合計は10MB未満である必要があります ");
                $("#choose-image").val("");
                return 0;
            }
            for(let i = 0; i < lengh; i++){
                $('#select-images').after('<p class="file-name">'+ (infile.files.item(i)).name +'<svg style="margin-left: 20px; color:red; cursor: pointer" onclick="deleteImg(\'' + (infile.files.item(i)).name + '\', this)" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">\n' +
                    '  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>\n' +
                    '</svg></p>');
            }
        }
        $('#validate-file').text(infile.files.length +" files");
    }
    $('#send_mail').submit(function(e) {
        e.preventDefault();
        fileValidation();
        $('body').append("<div id='loading_wrap' style='position:fixed; height:100%; width:100%; overflow:hidden; top:0; left:0;z-index: 9999999999999999999999999;    background: url(<?=get_template_directory_uri()?>/images/Preloader_11.gif) center no-repeat #ffffff;'></div>");
        var formData = new FormData(this);
        formData.append('action','send_mail_product');
        $.ajax({
            url: myAjax.ajaxurl,
            type: 'POST',
            dataType: "json",
            data: formData,
            success: function (response) {
                $('#loading_wrap').remove();
                if (response.code == 200) {
                    $('#send_mail').find('input').val("");
                    $('#send_mail').find('textarea').html('');
                    $('#send_mail').find('textarea').val('');
                    $('.file-name').remove();
                } else {
                    $("#choose-image").val("");
                }
                alert(response.message);
            },
            cache: false,
            contentType: false,
            processData: false
        })
    });
    $('#form-recruitment').submit(function(e) {
        e.preventDefault();
        $('body').append("<div id='loading_wrap' style='position:fixed; height:100%; width:100%; overflow:hidden; top:0; left:0;z-index: 9999999999999999999999999;    background: url(<?=get_template_directory_uri()?>/images/Preloader_11.gif) center no-repeat #ffffff;'></div>");
        var formData = new FormData(this);
        formData.append('action','send_mail_registration');
        $.ajax({
            url: myAjax.ajaxurl,
            type: 'POST',
            dataType: "json",
            data: formData,
            success: function (response) {
                $('#submit').attr('disabled',false);
                if (response.code == 200) {
                    $('#form-recruitment').find('input').val("");
                }
                $('#loading_wrap').remove();
                alert(response.message);
            },
            cache: false,
            contentType: false,
            processData: false
        })
    });
</script>
</html>