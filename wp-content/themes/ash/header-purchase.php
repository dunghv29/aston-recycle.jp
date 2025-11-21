

<!Doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php wp_title('|', 'echo', 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?=get_stylesheet_directory_uri()?>/images/icons/kimura_shoji.ico" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/main.css">
    <?php wp_head(); ?>
    <script>
        $(function() {
            var ip = '<?=$_SERVER['REMOTE_ADDR']?>';
            var formData = new FormData();
            formData.append('action', 'request_view');
            formData.append('ip', ip);
            $.ajax({
                url: myAjax.ajaxurl,
                type: 'POST',
                dataType: "json",
                data: formData,
                success: function(data) {
                    $('#all-view').html(data.data.countView);
                    $('#view-of-day').html(data.data.countViewOfDay);
                    $('#visit-count').html(data.data.countOfDayVisit);
                },
                cache: false,
                contentType: false,
                processData: false
            });
        })
    </script>
    <script>

        $(function () {
            $(window).scroll(function(){
                var scroll = $(window).scrollTop();
                if(scroll > 350) {
                    $('.btn_ontop').addClass('display');
                }else if (scroll <=100){
                    $('.btn_ontop').removeClass('display');
                }
            });

            $('.btn_ontop').click(function(){
                $('html,body').animate({'scrollTop': 0}, 1500);
                return false;
            });
        })

    </script>
    <script src="<?=get_stylesheet_directory_uri()?>/js/functions.js"></script>
</head>
<body>

<main id="corporate" class="corporate">
    <section class="corporate-banner">
        <img class="img-cover corporate-banner__background" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/background-banner1019.png" alt="Banner">
        <img class="img-cover corporate-banner__background--mobile" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/background-banner1019-mobile.png" alt="Banner">
        <div class="corporate-banner__wp">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6 col-6">
                        <a href="/corporate-purchase" class="corporate-banner__logo">
                            <img src="<?=get_stylesheet_directory_uri()?>/images/uploads/logo1019.png" alt="Logo corporate"
                                 class="img-cover">
                        </a>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="corporate-banner__list-link">
                            <a href="/corporate-purchase" class="corporate-banner__upper-link color-white link1">ホーム</a>
                            <a href="/contact-us" class="corporate-banner__upper-link color-white link2">ご依頼・お問い合わせ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="corporate-banner__list-link corporate-banner__list-link--mobile">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <a href="/corporate-purchase" class="corporate-banner__upper-link bg-134CAD color-white corporate-banner__upper-link--mobile link1">ホーム</a>
                </div>
                <div class="col-6">
                    <a href="/contact-us" class="corporate-banner__upper-link bg-149FED color-white corporate-banner__upper-link--mobile link2">ご依頼・お問い合わせ</a>
                </div>
            </div>
        </div>
    </section>