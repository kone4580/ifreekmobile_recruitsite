<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>株式会社アイフリークモバイル リクルートサイト</title>

	<link rel="apple-touch-icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/icon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/icon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/icon-192x192.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/manifest.json">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" media="all" />
	<?php $my_theme = wp_get_theme(); ?>
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/cmn.css?ver<?php echo $my_theme->get( 'Version' ) ?>" media="all" />
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fixed.css" media="all" />

	<?php wp_deregister_script('jquery'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.cmn.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.matchHeight.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.animateNumber.min.js"></script>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/parallaxEffect.js"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="top"></div>

	<header>
		<div id="header">
			<div class="header_inner">
				<div class="header_logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="アイフリークモバイル"></a>
				</div>

				<nav class="global_navi">
					<p class="sp_title">MENU</p>
					<ul class="navi_ul">
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-nav-item less_tab">HOME</a></li>
						<li class="toggle">
							<p class="header-nav-item">会社を知る</p>
							<div class="megamenu">
								<ul class="inner_ul">
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>message/">代表メッセージ</a></li>
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>history/">アイフリークモバイルの歴史</a></li>
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>data/">データで見るアイフリークモバイル</a></li>
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>welfare/">福利厚生・教育研修・働く環境</a></li>
								</ul>
							</div>
						</li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/" class="header-nav-item">仕事を知る</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>interview/" class="header-nav-item">人を知る</a></li>
						<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>recruitment/" class="header-nav-item">募集要項</a></li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>entry/" class="head_entry">エントリー</a>
				</nav>

				<div class="menuBtn">
					<label class="nav-open" for="nav-input">
						<span></span>
					</label>
				</div>

			</div>
		</div>
	</header>
