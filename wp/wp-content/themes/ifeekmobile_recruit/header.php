<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>立憲民主党 中村あきひろ Official Website</title>

	<link rel="apple-touch-icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/icon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/icon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/icon-192x192.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicons/manifest.json">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" media="all" />
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/cmn.css" media="all" />
	<link type="text/css" rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/fixed.css" media="all" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.min.css">

	<?php wp_deregister_script('jquery'); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.cmn.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.matchHeight.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>

	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/imagesloaded.pkgd.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<div id="top"></div>

	<div id="wrapper">
		<header>
			<div id="header">
				<div id="header_inner">
					<div id="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.png" alt="立憲民主党 中村あきひろ"></a>
					</div>

					<div class="menuBtn">
						<label class="nav-open" for="nav-input"><span></span></label>
					</div>

					<nav id="global_navi">
						<ul id="navi_ul">
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-nav-item">ホーム</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>policy/" class="header-nav-item">政策・実績</a></li>
							<li class="<?php if(is_page('profile')) { echo "active"; } ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>profile/" class="header-nav-item">プロフィール</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>report/" class="header-nav-item">活動報告</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>gallery/" class="header-nav-item">ギャラリー</a></li>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact/" class="header-nav-item">お問い合わせ</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
