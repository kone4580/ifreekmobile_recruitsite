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
      <source media="(min-width:560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/title/title_profile.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title/title_profile_s.jpg" alt="プロフィール">
    </picture>
  </div>
</div>


<main id="main_wrap" role="main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="page_section">
      <div class="wrap">
        <div class="flex_content start">
          <div class="item item_4 animation fadeIn1">
            <?php $prof_img = get_field('prof_img');
            if( !empty($prof_img) ): ?>
              <img src="<?php echo esc_attr($prof_img['url']); ?>" class="profile_img" alt="プロフィール画像">
            <?php endif; ?>
          </div>

          <div class="item item_4 animation fadeIn2">
            <h3 class="title_h3">所属／役職</h3>
            <?php the_field('position'); ?>

            <h3 class="title_h3 mt30">経歴</h3>
            <?php the_field('career'); ?>
          </div>
        </div>


        <div class="big_title mt80">
          <h2 class="jp">ご挨拶</h2>
          <p class="eng">Greeting</p>
        </div>


        <div class="flex_content flex_content_r start">
          <div class="item item_4 animation fadeIn1">
            <?php $greeting_img = get_field('greeting_img');
            if( !empty($greeting_img) ): ?>
              <img src="<?php echo esc_attr($greeting_img['url']); ?>" class="profile_img" alt="プロフィール画像">
            <?php endif; ?>
          </div>

          <div class="item item_4 animation fadeIn2">
            <div class="greet_text">
              <?php the_field('greeting_text'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
