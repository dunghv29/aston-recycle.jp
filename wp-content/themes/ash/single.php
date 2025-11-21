<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
    <script>
        $(function () {
            $('.bg-header').addClass('setHeight');

            // $(window).scroll(function(){
            //   var scroll = $(window).scrollTop();
            //   if(scroll > 200) {
            //     $('.bg-header').removeClass('setHeight');
            //   }else if (scroll <=200){
            //     $('.bg-header').addClass('setHeight');
            //   }
            // })
        })
    </script>

    <style>

        .setHeight {
            height: 500px;
        }

        @media (max-width: 375px) {
            .setHeight {
                height: 300px!important;
            }
        }

        @media (min-width: 412px) and (max-width: 475px) {
            .setHeight {
                height: 350px!important;
            }
        }

        @media (min-width: 476px) and (max-width: 540px) {
            .setHeight {
                height: 400px!important;
            }
        }

        @media (min-width: 541px) and (max-width: 575px) {
            .setHeight {
                height: 450px!important;
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
                height: 675px!important;
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
                <li class="breadcrumb-item d-flex align-items-center active" aria-current="page"><span class="breadcrumb-text color-black">Blog-Detail</span></li>
            </ol>
        </div>
    </nav>
<?php
while ( have_posts() ) :
    the_post();
?>
    <main id="blog-detail" class="blog-detail">
        <div class="container">
            <div class="row rowTitle">
                <div class="col-12 mx-auto ">
                    <h2 class="bigTitle bigTitle-blog text-center mt-30 mb-90">
                        <img class="bigTitle__img img-scaledown" src="<?= get_stylesheet_directory_uri() ?>/images/uploads/bigTitle1016.png" alt="Big title">
                    </h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row rowBlogDetail mb-125">
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
                                                <?= get_the_date('Y.m.d'); ?>
                                            </p>

                                            <a href="#" class="blog__name color-primary mb-0">
                                                <?= the_title() ?>
                                            </a>

                                            <div class="blog__tags mt-18">
                                                <?php
                                                $tags = get_tags();
                                                $keyBackground = 0;
                                                $arr = ['0' => '1', '1' => '5', '2' => '2', '3' => '3'];
                                                if ($tags) :
                                                    foreach ($tags as $tag) : ?>
                                                        <span class="blog__badge bg-color<?= $arr[$keyBackground]; ?> <?= $keyBackground == 3 ? 'color-black':'color-white' ?>  mr-12"><?= $tag->name ?></span>
                                                        <?php $keyBackground++;
                                                        if ($keyBackground > 3) break;
                                                    endforeach;
                                                endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__tags-mobile mt-20">
                                        <?php
                                        $tags = get_tags();
                                        $keyBackground = 0;
                                        if ($tags) :
                                            foreach ($tags as $tag) : ?>
                                                <span class="blog__badge bg-color<?= $arr[$keyBackground]; ?> <?= $keyBackground == 3 ? 'color-black' : 'color-white mr-12' ?> "><?= $tag->name ?></span>
                                                <?php $keyBackground++;
                                                if ($keyBackground > 3) break;
                                            endforeach;
                                        endif; ?>
                                    </div>
                                </div>

                                <div class="blog__itemBody blog-detail__content mt-50">
                                    <?= get_the_content()?>
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
                                    <?php
                                    $args = [
                                        'showposts' => 5,
                                        'post_type' => 'post',
                                        'orderby' => 'ID',
                                        'post_status' => 'publish',
                                        'order' => 'DESC'
                                    ];
                                    $result = new WP_Query($args);
                                    if ($result->have_posts ()) :
                                        while ($result->have_posts ()) : $result->the_post ();
                                            ?>
                                            <li class="blog__menuItem">
                                                <p class="blog__menuItem-time color-primary"><?= get_the_date('Y.m.d'); ?></p>
                                                <a href="/blog-detail?post_id=<?= get_the_ID () ?>"
                                                   class="blog__menuItem-name color-black"><?= get_the_title (); ?></a>
                                            </li>
                                        <?php endwhile;
                                    endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php
endwhile;
get_footer();
