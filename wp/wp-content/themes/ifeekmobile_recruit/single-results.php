<?php get_header(); ?>

<div class="page_title_default">
  <div class="page_title_inner">
    <div class="text_wrap">
      <h1 class="jp">実績</h1>
    </div>
  </div>
</div>


<div class="breadcrumbs">
  <div class="wrap">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    }?>
  </div>
</div>

<main id="main_wrap" role="main">
  <div class="page_section">
    <div class="wrap">
      <div class="news_single">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="result_box opened">
            <div class="inner">
              <div class="r_block">
                <h3 class="title"><?php the_title(); ?></h3>
                <div class="r_inner">
                  <div class="item_text_area">
                    <?php the_content(); ?>
                  </div>

                  <div class="item_link_area">
                    <?php $movie_url = get_field('movie_url');
                    if( !empty($movie_url) ): ?>
                      <a href="<?php echo esc_attr($movie_url); ?>" target="_blank" class="movie_link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/movie_link.png" alt="動画を見る">
                        <span class="txt">動画を見る</span>
                      </a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php endwhile; else: ?>
          <p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>
        <?php endif; ?>

      </div>
    </div>

  </div>
</main>

<?php get_footer(); ?>
