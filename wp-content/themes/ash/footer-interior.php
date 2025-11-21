<?php wp_footer(); ?>
<div class="footer footer-interior">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-top__item">
                        <div class="footer-top__title"><a class="color-white ft-link"  href="/main-store">アストン伊東本店</a></div>
                        <div class="footer-top__desc">所在地: 〒414-0036 静岡県伊東市宮川町1-6-12</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-top__item">
                        <div class="footer-top__title"><a class="color-white ft-link"  href="/shuzenji">アストン沼津 西間門店</a></div>
                        <div class="footer-top__desc">
                            所在地: 〒410-0871 静岡県沼津市西間門262-1
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-top__item">
                        <div class="footer-top__title"><a class="color-white ft-link"  href="/store-antiques">アストンアンティークス</a></div>
                        <div class="footer-top__desc">所在地: 〒414-0051静岡県伊東市吉田142</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hr-red"></div>
        <div class="footer-between">
            <div class="row">
                <div class="col-md-6 mb-25">
                    <div class="footer-image h-100">
                        <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/ft-image-1.png" alt=""
                             class="img-cover borderWhite-3">
                    </div>
                </div>
                <div class="col-md-6 mb-25">
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

    .footer.footer-interior {
        background: url('<?=get_stylesheet_directory_uri()?>/images/uploads/logo-tranparent.png') no-repeat left 60px bottom 20px #806749;
    }
</style>
</html>
