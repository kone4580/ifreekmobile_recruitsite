<?php get_header(); ?>

<div class="pageTitle">
  <div class="title_inner">
    <div class="text-area">
      <h1 class="jp"><?php the_title(); ?></h1>
      <p class="eng"><?php the_field('eng_title'); ?></p>
    </div>
    <div class="sq_carat">
      <?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
      <svg id="layer_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 559 280">
        <g id="title_sq">
          <rect id="_長方形_4" class="title_sq_1" x="519" y="0" width="40" height="40" />
          <rect id="_長方形_4-2" class="title_sq_1" x="479" y="40" width="40" height="40" />
          <rect id="_長方形_4-3" class="title_sq_1" x="439" y="0" width="40" height="40" />
          <rect id="_長方形_4-4" class="title_sq_1" x="359" y="0" width="40" height="40" />
          <rect id="_長方形_4-5" class="title_sq_1" x="319" y="0" width="40" height="40" />
          <rect id="_長方形_4-6" class="title_sq_1" x="239" y="0" width="40" height="40" />
          <rect id="_長方形_4-7" class="title_sq_1" x="199" y="160" width="40" height="40" />
          <rect id="_長方形_4-8" class="title_sq_1" x="159" y="0" width="40" height="40" />
          <rect id="_長方形_4-9" class="title_sq_1" x="79" y="0" width="40" height="40" />
          <rect id="_長方形_4-10" class="title_sq_1" x="0" y="0" width="40" height="40" />
          <rect id="_長方形_4-11" class="title_sq_1" x="519" y="80" width="40" height="40" />
          <rect id="_長方形_4-13" class="title_sq_1" x="399" y="40" width="40" height="40" />
          <rect id="_長方形_4-14" class="title_sq_1" x="359" y="40" width="40" height="40" />
          <rect id="_長方形_4-15" class="title_sq_1" x="279" y="40" width="40" height="40" />
          <rect id="_長方形_4-16" class="title_sq_1" x="239" y="80" width="40" height="40" />
          <rect id="_長方形_4-17" class="title_sq_1" x="159" y="40" width="40" height="40" />
          <rect id="_長方形_4-18" class="title_sq_1" x="119" y="40" width="40" height="40" />
          <rect id="_長方形_4-19" class="title_sq_1" x="479" y="120" width="40" height="40" />
          <rect id="_長方形_4-20" class="title_sq_1" x="399" y="80" width="40" height="40" />
          <rect id="_長方形_4-21" class="title_sq_1" x="319" y="80" width="40" height="40" />
          <rect id="_長方形_4-22" class="title_sq_1" x="199" y="80" width="40" height="40" />
          <rect id="_長方形_4-23" class="title_sq_1" x="119" y="80" width="40" height="40" />
          <rect id="_長方形_4-24" class="title_sq_1" x="79" y="80" width="40" height="40" />
          <rect id="_長方形_4-25" class="title_sq_1" x="439" y="160" width="40" height="40" />
          <rect id="_長方形_4-26" class="title_sq_1" x="439" y="80" width="40" height="40" />
          <rect id="_長方形_4-27" class="title_sq_1" x="279" y="120" width="40" height="40" />
          <rect id="_長方形_4-28" class="title_sq_1" x="319" y="160" width="40" height="40" />
          <rect id="_長方形_4-29" class="title_sq_1" x="159" y="120" width="40" height="40" />
          <rect id="_長方形_4-30" class="title_sq_1" x="519" y="160" width="40" height="40" />
          <rect id="_長方形_4-31" class="title_sq_1" x="439" y="240" width="40" height="40" />
          <rect id="_長方形_4-32" class="title_sq_1" x="359" y="160" width="40" height="40" />
          <rect id="_長方形_4-33" class="title_sq_1" x="479" y="200" width="40" height="40" />
          <rect id="_長方形_4-34" class="title_sq_1" x="399" y="200" width="40" height="40" />
          <rect id="_長方形_4-35" class="title_sq_1" x="519" y="240" width="40" height="40" />
        </g>
      </svg>
    </div>
  </div>

  <div class="breadcrumbs">
    <?php if (function_exists('bcn_display')) {
      bcn_display();
    } ?>
  </div>

  <?php $image = get_field('title_img');
  if (!empty($image)): ?>
    <div class="title_image" style="background-image: url(<?php echo esc_attr($image['url']); ?>);"></div>
  <?php endif; ?>
</div>


<main id="main_wrap" role="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile;
  else: ?>
    <div class="page_section">
      <div class="middlewrap">
        <p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>
      </div>
    </div>
  <?php endif; ?>
</main>


<div class="bottom_entry">
  <div class="inner">
    <p class="eng">ENTRY</p>
    <p class="jp">エントリー</p>
  </div>
  <div class="bottom_entry_bg">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/entry_bg.jpg" alt="">
  </div>
  <span class="arrow"><i class="fas fa-angle-right"></i></span>
  <a href="<?php echo esc_url(home_url('/')); ?>entry/" class="float_link"></a>
</div>

<?php get_footer(); ?>
