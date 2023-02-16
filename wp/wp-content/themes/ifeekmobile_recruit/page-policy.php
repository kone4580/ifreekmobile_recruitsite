<?php get_header(); ?>

<div class="page_title">
  <div class="page_title_inner">
    <div class="text_wrap">
      <h1 class="jp"><?php the_title(); ?></h1>
      <p class="eng"><?php the_field("eng_title"); ?></p>
    </div>
  </div>

  <div class="title_bg">
    <picture>
      <source media="(min-width:560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/title/title_policy.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title/title_policy_s.jpg" alt="5つの生活安全保障">
    </picture>
  </div>
</div>


<main id="main_wrap" role="main">

  <div class="page_section">
    <div class="wrap">
      <?php
        $query = new WP_Query(array(
          'post_type' => 'policies',
          'post_status' => 'publish',
          'posts_per_page' => '9999',
        ));
      ?>
      <?php if ($query->have_posts()) : $n = 0; while ($query->have_posts()) : $n = $n + 1; $query->the_post(); ?>
        <div class="policy_box">
          <div id="policy0<?php echo $n; ?>" class="anchor"></div>
          <div class="policy_head animation">
            <p class="num"><span>NO.</span><?php echo $n; ?></p>
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
      <?php endwhile; endif; ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>


  <div id="result" class="anchor"></div>
  <div class="page_section page_section__gray">
    <div class="wrap">
      <div class="big_title2">
        <h2 class="jp">実績</h2>
        <p class="eng">Results</p>
      </div>
      <p class="title_under_text">喫緊の社会問題を解決するために、議会を通してさまざまな提言をしています。</p>

      <div class="results">
        <?php $terms = get_terms('results_year'); ?>
        <?php foreach($terms as $term): ?>
          <div class="result_box">
            <i class="fas fa-plus"></i>
            <p class="year"><span><?= $term->name; ?></span>年</p>
            <div class="inner">
              <?php
                $query_results = new WP_Query(array(
                  'post_type' => 'results',
                  'texonomy' => 'results_year',
                  'tax_query' => array(
                    array(
                      'taxonomy' => 'results_year',
                      'field' => 'slug',
                      'terms' => $term->slug,
                    ),
                  ),
                  'post_status' => 'publish',
                  'posts_per_page' => '100',
                  'orderby' => 'post_date',
                  'order' => 'ASC',
                ));
              ?>

              <?php if ($query_results->have_posts()) : while ($query_results->have_posts()) : $query_results->the_post(); ?>
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
              <?php endwhile; else : ?>
                <p class="underconst">実績はありません</p>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>
