<?php get_header(); ?>

<div class="page_title">
  <div class="page_title_inner">
    <div class="text_wrap">
      <h1 class="jp">なかむらギャラリー</h1>
      <p class="eng">Nakamura Gallery</p>
    </div>
  </div>

  <div class="title_bg">
    <picture>
      <source media="(min-width:560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/title/title_gallery.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title/title_gallery_s.jpg" alt="なかむらギャラリー">
    </picture>
  </div>
</div>


<main id="main_wrap" role="main">
  <div class="page_section">
    <div class="wrap">
      <?php
        $query = new WP_Query(array(
          'post_type' => 'gallery',
          'post_status' => 'publish',
          'posts_per_page' => '9999',
        ));
      ?>

      <?php if ($query->have_posts()) : ?>
        <ul class="galler_grid js-grid">
          <?php while ($query->have_posts()) : $query->the_post(); ?>
            <li class="wow fadeInUp item js-item">
							<a data-fancybox="gallery" data-caption="<?php the_title(); ?>" href="<?php the_post_thumbnail_url( 'full' ); ?>">
                <?php the_post_thumbnail('large'); ?>
							</a>
						</li>
          <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <p class="underconst">なかむらギャラリーは準備中です。</p>
      <?php endif; ?>

    </div>
  </div>
</main>


<?php get_footer(); ?>
