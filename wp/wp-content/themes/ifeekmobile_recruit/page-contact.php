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
      <source media="(min-width:560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/title/title_contact.jpg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/title/title_contact_s.jpg" alt="お問い合わせ">
    </picture>
  </div>
</div>


<main id="main_wrap" role="main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="page_section">
      <div class="wrap">
        <?php the_content(); ?>
      </div>
    </div>
  <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
