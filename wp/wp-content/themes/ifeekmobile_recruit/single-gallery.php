<?php get_header(); ?>

<div class="page_title_default">
	<div class="page_title_inner">
		<div class="text_wrap">
			<h1 class="jp">ギャラリー確認用ページ</h1>
		</div>
	</div>
</div>


<main id="main_wrap" role="main">
  <div class="page_section">
    <div class="middlewrap">

      <div class="text-center">
				<?php the_post_thumbnail('large'); ?>
				<p class="text-center mt20"><?php the_title(); ?></p>
      </div>

    </div>
  </div>
</main>


<?php get_footer(); ?>
