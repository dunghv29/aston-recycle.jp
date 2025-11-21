<?php

/**
 * Template Name: Blog
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
      <li class="breadcrumb-item d-flex align-items-center active" aria-current="page"><span class="breadcrumb-text color-black">Blog</span></li>
    </ol>
  </div>
</nav>

<main id="blog" class="blog">
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
    <div class="row rowBlog">
      <div class="col-lg-9">
          <div class="blog__left">
            <?php
            $page = get_query_var ('paged') ? get_query_var ('paged') : 1;
            $args = [
                'post_type' => 'post',
                'orderby' => 'ID',
                'post_status' => 'publish',
                'order' => 'DESC',
                'posts_per_page' => 7,
                'paged' => $page
            ];
            $result = new WP_Query($args);
            if ($result->have_posts ()) :
                while ($result->have_posts ()) : $result->the_post ();
                    ?>
              <div class="blog__item mb-47">
                  <div class="blog__itemHeader">
                      <div class="blog__wp-mobile">
                          <div class="blog__itemHeader-image">
                              <img class="" src="<?= get_stylesheet_directory_uri () ?>/images/icons/blog.png"
                                   alt="Blog">
                          </div>
                          <div class="blog__itemHeader-title">
                              <p class="blog__time color-primary mb-10">
                                  <?=get_the_date('Y.m.d');?>
                              </p>

                              <a href="/blog-detail?post_id=<?= get_the_ID () ?>" class="blog__name color-primary mb-0">
                                  <?=get_the_title();?>
                              </a>
                              <div class="blog__tags mt-18">
                                  <?php
                                  $tags = get_the_tags ();
                                  $keyBackground = 0;
                                  $arr = ['0' => '1', '1' => '5', '2' => '2', '3' => '3'];
                                  if ($tags) :
                                      foreach ($tags as $tag) : ?>
                                          <span class="blog__badge bg-color<?= $arr[$keyBackground]; ?> <?= $keyBackground == 3 ? 'color-black' : 'color-white' ?>  mr-12"><?= $tag->name ?></span>
                                          <?php $keyBackground++;
                                          if ($keyBackground > 3) break;
                                      endforeach;
                                  endif; ?>
                              </div>
                          </div>
                      </div>
                      <div class="blog__tags-mobile mt-20">
                          <?php
                          $tags = get_the_tags ();
                          $keyBackground = 0;
                          if ($tags) :
                              foreach ($tags as $tag) : ?>
                                  <span class="blog__badge bg-color<?= $arr[$keyBackground]; ?> <?= $keyBackground == 3 ? 'color-black' : 'color-white mr-10' ?>"><?= $tag->name ?></span>
                                  <?php $keyBackground++;
                                  if ($keyBackground > 3) break;
                              endforeach;
                          endif; ?>
                      </div>
                  </div>
                  <div class="blog__itemBody mt-16">
                      <?php
                      $content = get_the_content ();
                      $lenght = strlen ($content);
                      $content = mb_substr ($content, 0, 406);
                      $content = strip_tags ($content);
                      echo $content;
                      if ($lenght > 406) : ?>
                          <a style="color: #212529" href="/blog-detail?post_id=<?= get_the_ID () ?>">[…]</a>
                      <?php endif; ?>
                  </div>
              </div>
          <?php endwhile;
          endif;
          ?>
          </div>
          <?php
          $big = 999999999;
          $paginate = paginate_links([
              'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
              'format' => '?paged=%#%',
              'current' => max( 1, get_query_var('paged') ),
              'total' => $result->max_num_pages,
              'prev_text' => '<img class="img-fluid blog__btn" src="'. get_stylesheet_directory_uri() .'/images/icons/previous.png" alt="Previous">',
              'next_text' => '<img class="img-fluid blog__btn" src="'. get_stylesheet_directory_uri() .'/images/icons/next.png" alt="Next">',
              'type' => 'list'
          ]);?>
          <?php
          $paginate = str_replace("<li>", '<li class="blog__page-item page-item">', $paginate);
          $paginate = str_replace('<a class="next page-numbers"', '<a class="blog__page-link page-link color-white"', $paginate);
          $paginate = str_replace('<a class="next page-numbers"', '<a class="blog__page-link page-link color-white"', $paginate);
          $paginate = str_replace('<li class="blog__page-item page-item"><span', '<li class="blog__page-item page-item disabled"><span', $paginate);
          $paginate = str_replace('<span aria-current="page"', '<a', $paginate);
          $paginate = str_replace('</span>', '</a>', $paginate);
          $paginate = str_replace('<a ', '<a class="blog__page-link page-link color-white"', $paginate);
          $paginate = str_replace('page-numbers', 'blog__listPagination pagination d-flex align-items-center justify-content-center', $paginate);
          ?>
        <nav class="blog__pagination text-center mt-55">
            <?= $paginate?>
        </nav>
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
                              <p class="blog__menuItem-time color-primary"><?=get_the_date('Y.m.d');?></p>
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
<?php
while (have_posts()) :
    the_post();
    the_content();
    if (comments_open() || get_comments_number()) {
        comments_template();
    }
endwhile;?>
</main>
    <style>
        span.blog__listPagination.pagination.d-flex.align-items-center.justify-content-center.dots {
            color: #000000;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
<?php
get_footer();