<?php get_header(); ?>

<div class="page_title_default">
  <div class="page_title_inner">
    <div class="text_wrap">
      <h1 class="jp"><?php the_title(); ?></h1>
    </div>
  </div>
</div>


<main id="main_wrap" role="main">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; else: ?>
    <div class="page_section">
      <div class="middlewrap">
        <p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>
      </div>
    </div>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
