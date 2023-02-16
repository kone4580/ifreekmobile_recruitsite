<?php get_header(); ?>

<div class="page_title_default">
	<div class="page_title_inner">
		<div class="text_wrap">
			<h1 class="jp">404エラー</h1>
		</div>
	</div>
</div>


<main id="main_wrap" role="main">
  <div class="page_section">
    <div class="middlewrap">

      <div class="text-center">
        <h2 class="center-title">ご指定のページが見つかりません。</h2>
        <p class="mt20">大変申し訳ございませんがご指定頂いたページが見つかりません。<br />アドレスをご確認の上もう一度お試し頂くか、<br />上部のメニュー、もしくは<a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページ</a>へ戻って該当のページをお探しください。</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-blue mauto mt40">HOME<i class="fas fa-angle-right"></i></a>
      </div>

    </div>
  </div>
</main>

<?php get_footer(); ?>
