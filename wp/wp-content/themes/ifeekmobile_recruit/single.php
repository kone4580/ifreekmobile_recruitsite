<?php get_header(); ?>

<div class="page_title_default">
  <div class="page_title_inner">
    <div class="text_wrap">
      <h1 class="jp">活動報告</h1>
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
          <h1 class="single_title"><?php the_title(); ?></h1>
          <div class="post_data">
            <p class="news_date"><?php the_time( get_option( 'date_format' ) ); ?></p>
            <div class="single_cat_tag">
              <?php
                $postcats = get_the_category();
                if( $postcats ){
                  foreach ( $postcats as $cat ) {
                    echo '<span>' . $cat->name . '</span>';
                  }
                }
              ?>
            </div>
          </div>

          <div class="single_content">
            <?php the_content(); ?>
          </div>

          <?php if ( has_post_thumbnail()): ?>
            <div class="single_icatch">
							<?php the_post_thumbnail('large'); ?>
						</div>
          <?php endif; ?>

          <div class="single_page_navi">
            <?php
            $previous_post = get_previous_post();
            if (!empty( $previous_post )): ?>
              <a href="<?php echo get_permalink( $previous_post->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/angle_prev.png" alt="前の記事"></a>
            <?php endif; ?>

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>report/">一覧へ戻る</a>

            <?php
            $next_post = get_next_post();
            if (!empty( $next_post )): ?>
              <a href="<?php echo get_permalink( $next_post->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/angle_next.png" alt="前の記事"></a>
            <?php endif; ?>

          </div>
        <?php endwhile; else: ?>
          <p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>
        <?php endif; ?>


        <?php if(has_category() ) {
          $catlist = get_the_category();
          $category = array();
          foreach($catlist as $cat){
            $category[] = $cat->term_id;
          }}
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => '3', //表示させたい記事数
            'post__not_in' => array( $post->ID ), //現在の記事は含めない
            'category__in' => $category, //先ほど取得したカテゴリー内の記事
            'orderby' => 'rand' //ランダムで取得
          );
          $related_query = new WP_Query( $args );
        ?>

        <?php if ( $related_query->have_posts() ) : ?>
          <div class="big_title2">
            <h2 class="jp">その他の活動報告</h2>
          </div>

          <div class="page_reports">
            <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
              <div class="item animation">
  							<a href="<?php the_permalink(); ?>">
  								<div class="image">
  									<div class="inner">
                      <?php if ( has_post_thumbnail()): ?>
                        <?php the_post_thumbnail('large'); ?>
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/default.jpg" alt="NO-IMAGE">
                      <?php endif; ?>
  									</div>
  								</div>
  								<div class="text">
  									<p class="date"><?php the_time( get_option( 'date_format' ) ); ?></p>
  									<h3 class="tit"><?php the_title(); ?></h3>
                    <div class="cat_tags">
                      <?php foreach((get_the_category()) as $cat) { ?>
                        <p class="ac_type <?php echo $cat->slug; ?>" data-lavel="<?php echo $cat->slug; ?>"><?php echo $cat->cat_name; ?></p>
                      <?php } ?>
                    </div>
  								</div>
  							</a>
  						</div>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

      </div>
    </div>

  </div>
</main>

<?php get_footer(); ?>
