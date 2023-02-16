<?php get_header(); ?>

<div class="page_title">
  <div class="page_title_inner">
    <div class="text_wrap">
      <h1 class="jp">活動報告</h1>
      <p class="eng">Report</p>
    </div>
  </div>

  <div class="title_bg">
    <picture>
      <source media="(min-width:560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/title/title_report.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title/title_report_s.jpg" alt="活動報告">
    </picture>
  </div>
</div>


<main id="main_wrap" role="main">
  <div class="page_section">
    <div class="wrap">

      <div class="reports_arc_head">
        <p class="reports_arc_head_tit">中村あきひろの日々の活動をお知らせします。</p>

        <?php get_sidebar(); ?>
      </div>

      <?php
        $category_slug = get_query_var('category_name');
        $query_post = new WP_Query(array(
          'post_type' => 'post',
          'post_status' => 'publish',
          'category_name' => $category_slug,
          'posts_per_page' => '12',
          'orderby' => 'post_date',
          'order' => 'DESC',
          'paged' => get_query_var('paged'),
        ));
      ?>
			<?php if ($query_post->have_posts()) : ?>
        <div class="page_reports">
          <?php while ($query_post->have_posts()) : $query_post->the_post(); ?>
					<?php
            $cat = get_the_category();
            $cat = $cat[0];
          ?>

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
      <?php else : ?>
        <p>新着情報は見つかりませんでした。</p>
      <?php endif; ?>
      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(array('query' => $query_post)); } ?>
      <?php wp_reset_postdata(); ?>

    </div>
  </div>
</main>

<?php get_footer(); ?>
