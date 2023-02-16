<?php get_header(); ?>

<div class="page_title_default">
  <div class="page_title_inner">
    <div class="text_wrap">
      <h1 class="jp">政策</h1>
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
          <div class="policy_box">
            <div id="policy0<?php echo $n; ?>" class="anchor"></div>
            <div class="policy_head animation">
              <p class="num"><span>NO.</span>X</p>
              <div class="side">
                <p class="policy_definition"><span>【<?php the_title(); ?>】</span></p>
                <h2 class="tit"><?php the_field('tit'); ?></h2>
                <div class="supplement">
                  <?php the_field('txt'); ?>
                </div>
              </div>
            </div>
            <div class="policy_inner animation">
              <div class="item item_5">
                <div class="policy_content">
                  <?php the_field('free'); ?>
                </div>
                <?php $attempt = get_field('attempt');
                if( !empty($attempt) ): ?>
                  <a href="<?php echo esc_attr($attempt); ?>" class="btn-blue mauto mt40">日々の取り組みはこちら<i class="fas fa-angle-right"></i></a>
                <?php endif; ?>
              </div>

              <div class="item item_3">
                <?php $image = get_field('img');
                if( !empty($image) ): ?>
                  <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
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
