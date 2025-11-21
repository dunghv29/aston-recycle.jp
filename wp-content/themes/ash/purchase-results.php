<?php

/**
 * Template Name: Purchase results
 */

global $wpdb;
$sqlType = "SELECT * FROM {$wpdb->prefix}m_type";
$listType = $wpdb->get_results($sqlType);
$sql = "SELECT * FROM {$wpdb->prefix}purchase_result ORDER BY created_at DESC LIMIT 6";
$results = $wpdb->get_results($sql);
$conditions = '';
if (isset($_GET['type_id'])) {
    $conditions = "WHERE type = {$_GET['type_id']}";
}
$currentPage = isset($_GET['numberPage']) ? abs((int)$_GET['numberPage']) : 1;
$offset = ($currentPage * 18) - 18;
$queryCount = "SELECT COUNT(*) FROM {$wpdb->prefix}purchase_result {$conditions}";
$sql = "SELECT * FROM {$wpdb->prefix}purchase_result {$conditions}  ORDER BY created_at DESC LIMIT 18 OFFSET $offset";
$listPurchase = $wpdb->get_results($sql);
$total = $wpdb->get_var($queryCount);
get_header('purchase');
?>
<script>
    $('.link1').addClass('active');
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />

<?php
while (have_posts()) :
    the_post();
    the_content();
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
endwhile;
?>
    <section class="purchase-results__slides bg-color8 ptb-70">
      <div class="container">
        <div class="slider">
            <?php foreach ($results as $item) :?>
                <?php
                $link = get_stylesheet_directory_uri() . '/images/uploads/slider-1.png';
                if ($item->title1 && $item->image1) {
                    $link = $item->image1;
                } else if ($item->title2 && $item->image2) {
                    $link = $item->image2;
                } else if ($item->title3 && $item->image3) {
                    $link = $item->image3;
                } else if ($item->title4 && $item->image4) {
                    $link = $item->image4;
                }
                ?>
                <div class="corporate-purchase__col-item">
                    <article class="purchase-results__item-white">
                        <div class="bg-white h-100 borderRadius-10">
                            <div class="corporate-purchase__thumb">
                                <img class="img-cover corporate-purchase__image"
                                     src="<?= $link ?>" alt="<?=$item->title1 ? $item->title1 : ($item->title2 ? $item->title2 : ($item->title3 ? $item->title3 : $item->title4))?>">
                            </div>
                            <div class="corporate-purchase__info p-20">
                                <h4 class="corporate-purchase__text color-black line-4 line-4">
                                    <?=$item->title1 ? $item->title1 : ($item->title2 ? $item->title2 : ($item->title3 ? $item->title3 : $item->title4))?>
                                </h4>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endforeach ?>
        </div>
      </div>
    </section>

    <section class="container-lg container-fluid">
      <div class="row">
        <div class="col-lg-9 col-md-8">
          <section class="corporate-purchase">
            <div class="row rowPurchaseResult">
                <?php foreach ($listPurchase as $key => $purchase) : ?>
                    <?php
                    $link = get_stylesheet_directory_uri() . '/images/uploads/thumb1019-1.png';
                    if ($purchase->title1 && $purchase->image1) {
                        $link = $purchase->image1;
                    } else if ($purchase->title2 && $purchase->image2) {
                        $link = $purchase->image2;
                    } else if ($purchase->title3 && $purchase->image3) {
                        $link = $purchase->image3;
                    } else if ($purchase->title4 && $purchase->image4) {
                        $link = $purchase->image4;
                    }
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6 purchase-results--mb">
                        <a href=".modal<?=$key?>" data-toggle="modal">
                            <article class="corporate-purchase__item">
                                <div class="bg-white h-100 borderRadius-10">
                                    <div class="corporate-purchase__thumb">
                                        <img class="img-cover corporate-purchase__image"
                                             src="<?=$link?>" alt="<?=$purchase->title1 ? $purchase->title1 : ($purchase->title2 ? $purchase->title2 : ($purchase->title3 ? $purchase->title3 : $purchase->title4))?>">
                                    </div>
                                    <div class="corporate-purchase__info p-20">
                                        <h4 class="corporate-purchase__text color-black line-4">
                                            <?=$purchase->title1 ? $purchase->title1 : ($purchase->title2 ? $purchase->title2 : ($purchase->title3 ? $purchase->title3 : $purchase->title4))?>
                                        </h4>
                                    </div>
                                </div>
                            </article>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
          </section>
            <?php
            $paginate = paginate_links([
                'base' => add_query_arg('numberPage', '%#%'),
                'format' => '?numberPage=%#%',
                'current' => $currentPage,
                'total' => ceil($total / 18),
                'prev_text' => '<<',
                'next_text' => '>>',
                'mid_size' => 1,
                'type' => 'list'
            ]);
            $paginate = str_replace("<li>", '<li class="purchase-results__page-item">', $paginate);
            $paginate = str_replace('<a class="next page-numbers"', '<a class="purchase-results__page-link"', $paginate);
            $paginate = str_replace('<li class="blog__page-item page-item"><span', '<li class="purchase-results__page-item page-item disabled"><span', $paginate);
            $paginate = str_replace('<li class="purchase-results__page-item"><span aria-current="page"', '<li class="purchase-results__page-item active"><a href="#" class="purchase-results__page-link"', $paginate);
            $paginate = str_replace('</span>', '</a>', $paginate);
            $paginate = str_replace('<a ', '<a class="purchase-results__page-link"', $paginate);
            $paginate = str_replace('page-numbers', 'pagination purchase-results__pagination', $paginate);
            $paginate = str_replace('<li class="purchase-results__page-item"><span class="pagination purchase-results__pagination dots">&hellip;', '<li class="purchase-results__page-item-dot"><span class="purchase-results__page-dot"><img src="http://localhost/ash/wp-content/themes/ash/images/icons/ellipses.svg" alt="">', $paginate);
            ?>
          <nav aria-label="Page navigation example">
              <?= $paginate?>
          </nav>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="purchase-results__cate stickys">
            <div class="purchase-results__cate-head">
              カテゴリー
            </div>
            <div class="purchase-results__cate-body">
              <ul class="purchase-results__cates">
                  <?php foreach ($listType as $type) : ?>
                      <li>
                          <a href="/purchase-results?type_id=<?=$type->id?>" class="purchase-results__cate-link"><?=$type->title?></a>
                      </li>
                  <?php endforeach ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function() {
    $('.slider').slick({
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      responsive: [{
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 580,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
  </script>

<?php foreach ($listPurchase as $key => $purchase) : ?>
    <div class="modal fade aston-modal modal<?=$key?>" id="modal<?=$key?>">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-slider<?=$key?>">
                    <?php if ($purchase->title1 || $purchase->image1) :?>
                        <?php $link = get_stylesheet_directory_uri() . '/images/uploads/thumb1019-1.png';
                        if ($purchase->image1) {
                            $link = $purchase->image1;
                        }
                        ?>
                        <div>
                            <div class="carousel-item item active">
                                <div class="image">
                                    <img class="img-cover" src="<?= $link ?>"
                                         alt="<?=$purchase->title1?>">
                                </div>
                                <div class="aston-modal--text"><?=$purchase->title1?></div>
                            </div>
                        </div>
                    <?php endif ?>

                    <?php if ($purchase->title2 || $purchase->image2) :?>
                        <?php $link = get_stylesheet_directory_uri() . '/images/uploads/thumb1019-1.png';
                        if ($purchase->image2) {
                            $link = $purchase->image2;
                        }
                        ?>
                        <div>
                            <div class="carousel-item item active">
                                <div class="image">
                                    <img class="img-cover" src="<?= $link ?>"
                                         alt="<?=$purchase->title2?>">
                                </div>
                                <div class="aston-modal--text"><?=$purchase->title2?></div>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if ($purchase->title3 || $purchase->image3) :?>
                        <?php $link = get_stylesheet_directory_uri() . '/images/uploads/thumb1019-1.png';
                        if ($purchase->image3) {
                            $link = $purchase->image3;
                        }
                        ?>
                        <div>
                            <div class="carousel-item item active">
                                <div class="image">
                                    <img class="img-cover" src="<?= $link ?>"
                                         alt="<?=$purchase->title3?>">
                                </div>
                                <div class="aston-modal--text"><?=$purchase->title3?></div>
                            </div>
                        </div>
                    <?php endif ?>
                    <?php if ($purchase->title4 || $purchase->image4) :?>
                        <?php $link = get_stylesheet_directory_uri() . '/images/uploads/thumb1019-1.png';
                        if ($purchase->image4) {
                            $link = $purchase->image4;
                        }
                        ?>
                        <div>
                            <div class="carousel-item item active">
                                <div class="image">
                                    <img class="img-cover" src="<?= $link ?>"
                                         alt="<?=$purchase->title4?>">
                                </div>
                                <div class="aston-modal--text"><?=$purchase->title4?></div>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            let flag = 0
            const sl = $('.modal-slider<?=$key?>')
            sl.find('img').css('display', 'none')
            $('a[href=".modal<?=$key?>"]').click(function() {
                $('body').append('<div class="s-spin<?=$key?>"><div class="loader"></div></div>')
            })
            $("#modal<?=$key?>").on('shown.bs.modal', function() {
                sl.find('img').removeAttr('style')
                $('.s-spin<?=$key?>').remove()
                if (!flag) {
                    sl.slick({
                        slidesToShow: 1,
                        dots: true,
                        speed: 500,
                        fade: true,
                    });
                    flag++
                }
            });
        });
    </script>
<?php endforeach ?>

<?php get_footer('purchase') ?>