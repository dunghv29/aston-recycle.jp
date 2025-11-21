<?php

/**
 * Template Name: Corporate purchase
 */

?>

<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
    get_header('purchase');
    

global $wpdb;
$sql = "SELECT * FROM {$wpdb->prefix}purchase_result ORDER BY created_at DESC LIMIT 4";
$results = $wpdb->get_results($sql);
    ?>
<script>
$('.link1').addClass('active');
</script>
<section class="corporate-bigTitle">
  <div class="container">
    <div class="row rowTitle">
      <div class="col-12 mx-auto">
        <h2 class="bigTitle corporate-bigTitle__bigTitle mx-auto text-center mt-120 mb-60">
          <img class="img-scaledown bigTitle__img"
            src="<?= get_stylesheet_directory_uri() ?>/images/uploads/bigTitle1019.png" alt="Big title">
        </h2>
      </div>
    </div>
  </div>
</section>
<section class="corporate-purchase">
  <div class="container">
    <div class="row rowPurchaseResult">
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
      <div class="col-lg-3 col-md-6 corporate-purchase__col-item">
        <article class="corporate-purchase__item bg-white borderRadius-10 zoomIn">
          <div class="corporate-purchase__thumb">
            <img class="img-cover in corporate-purchase__image" src="<?= $link ?>"
              alt="<?=$item->title1 ? $item->title1 : ($item->title2 ? $item->title2 : ($item->title3 ? $item->title3 : $item->title4))?>">
          </div>
          <div class="corporate-purchase__info p-20 mb-50">
            <h4 class="corporate-purchase__text black-color">
              <?=$item->title1 ? $item->title1 : ($item->title2 ? $item->title2 : ($item->title3 ? $item->title3 : $item->title4))?>
            </h4>
          </div>
        </article>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</section>
<?php
    while (have_posts()) :
        the_post();
        the_content();
        if (comments_open() || get_comments_number()) {
            comments_template();
        }
    endwhile;
    get_footer('purchase')?>