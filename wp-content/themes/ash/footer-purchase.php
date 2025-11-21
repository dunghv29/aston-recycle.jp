<?php wp_footer(); ?>
</main>
<footer class="corporate-footer bg-black ptb-25">
    <div class="container">
        <article class="corporate-footer__header">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <p class="color-white corporate-footer__text">
                        株式会社 木村商事 買取事業部
                    </p>
                    <p class="color-white corporate-footer__text">
                        所在地: 〒414-0036 静岡県伊東市宮川町1-6-20 TEL: <a href="tel:0557-48-6411" class="color-white corporate-footer__order-call">0557-48-6411</a>(ご相談窓口)
                    </p>
                </div>
            </div>

            <div class="row mb-20">
                <div class="col-lg-3 offset-lg-1 col-md-4">
                    <span class="color-white corporate-footer__text">
                        <a class="color-white"  href="/corporate-purchase">ホーム</a>
                    </span>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-4">
                    <span class="color-white corporate-footer__text">
                        <a class="color-white"  href="/contact-us/">ご依頼・お問い合わせ</a>
                    </span>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-4">
                    <span class="color-white corporate-footer__text">
                        <a class="color-white"  href="/privacy-policy" class="color-white">プライバシーポリシー</a>
                    </span>
                </div>
            </div>
        </article>

        <article class="corporate-footer__body">
            <div class="row">
                <div class="col-md-6">
                    <div class="corporate-footer__thumb">
                        <a href="/">
                        <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb-footer1019.png" alt="Thumb">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="corporate-footer__thumb corporate-footer__thumb--last">
                        <img class="img-fluid" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb-footer1019-1.png" alt="Thumb">
                    </div>
                </div>
            </div>
        </article>

        <article class="corporate-footer__footer">
            <div class="row d-flex align-items-end">
                <div class="col-lg-4 offset-lg-1 col-md-6">
                    <div class="corporate-footer__logo">
                        <img class="img-cover" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/thumb-footer1019-2.png" alt="Thumb">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <p class="color-white corporate-footer__text corporate-footer__footer-text">
                        商品、サンプルの送り先 <br>
                        所在地: 〒414-0036 静岡県伊東市宮川町1-6-20
                    </p>
                    <small class="color-white corporate-footer__copyright">
              <span>
                Copyright ©
              </span>
                        <span>
                在庫品・閉店品買取の木村商事 All Right Reserved.
              </span>
                    </small>
                </div>
            </div>
        </article>
    </div>
</footer>

<div class="btn_ontop float-xs-right bg-white">
    <img class="img-scaledown" src="<?= get_stylesheet_directory_uri() ?>/images/icons/scroll.svg" alt="On top">
</div>

</body>

<style>
    .fl-module-content {
        margin: 0;
    }

    .fl-row-content-wrap {
        padding: 0;
    }

    .footer.footer-interior {
        background: url('<?=get_stylesheet_directory_uri()?>/images/uploads/logo-tranparent.png') no-repeat left 60px bottom 20px #806749;
    }
</style>
</html>