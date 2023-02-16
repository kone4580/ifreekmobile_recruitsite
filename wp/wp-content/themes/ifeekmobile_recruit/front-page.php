<?php get_header(); ?>

<div class="main_visual">
	<div class="main_visual_inner">
		<div class="main_visual_catch">
			<h1 class="main_visual_text text_1"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/main_text_jp.png" alt="あたりまえを、変えていく。" /></h1>
			<p class="main_visual_entext">Challenge the obvious, change our future.</p>
			<p class="main_visual_text text_2"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/main_text_jp2.png" alt="声なき声を届ける。" /></p>
			<p class="main_visual_entext2">Respect unvoiced opinion.</p>
			<p class="main_visual_text text_3"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/main_text_jp3.png" alt="暮らしを守り抜く。" /></p>
			<p class="main_visual_text text_4"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/main_text_jp4.png" alt="「生活」安全保障。" /></p>
			<p class="main_visual_entext3">Compassion and security for all.</p>
		</div>
	</div>

	<picture class="main_bg">
		<source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/main_bg.jpg" media="(min-width: 560px)">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/main_bg_sp.jpg" alt="墨田区の風景">
	</picture>

	<div class="scrolldown4"><span>Scroll</span></div>
</div>


<main id="main_wrap" role="main">
	<div class="mainContent">
		<div class="wrap">
			<div class="top_under animation">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top_img01.jpg" alt="">
				<div class="inner">
					<h2 class="top_under_tit">声なき声が社会を変える。<br>すべての声を力に。</h2>
					<p>本当の変化は、必ず小さな声からはじまります。<br>中村あきひろが目指すのは、現場の切実な声に根ざした、真の意味での草の根の民主主義をつくることです。</p>
					<div class="top_under_buttons">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>profile/" class="btn_with_arrow"><span>プロフィール</span><i class="arrow-white"></i></a>
					</div>
				</div>
			</div>
		</div>


		<div class="top_content mt80">
			<div class="wrap">
				<div class="top_report_section animation">
					<div class="big_title">
						<h2 class="jp">活動報告</h2>
						<p class="eng">Activity Report</p>
					</div>

					<?php
						$query_post = new WP_Query(array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'posts_per_page' => '3',
							'orderby' => 'post_date',
							'order' => 'DESC',
						));
					?>
					<?php if ($query_post->have_posts()) : ?>
						<div class="top_reports animation">
							<?php while ($query_post->have_posts()) : $query_post->the_post(); ?>
							<?php
								$cat = get_the_category();
								$cat = $cat[0];
							?>
								<div class="item">
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
										</div>
									</a>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>

					<div class="top_report_section_btn">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>report/" class="btn_with_arrow"><span>もっと見る</span><i class="arrow-white"></i></a>
					</div>
				</div>
			</div>
		</div>


		<div class="big_title2 mt50">
			<h2 class="jp">政策</h2>
			<p class="eng">Policy</p>
		</div>

		<div class="top_policy animation">
			<div class="inner">
				<div class="whiteBlock">
					<h2 class="tit">
						<p class="num">5つの</p>
						<p class="anzen">生活安全保証</p>
					</h2>
				</div>
			</div>
			<div class="policy_img">
				<picture>
					<source media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/top_panel04.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top_panel04_s.jpg" alt="政策の内容">
				</picture>
			</div>
		</div>


		<div class="wrap">
			<?php
				$query_policies = new WP_Query(array(
					'post_type' => 'policies',
					'post_status' => 'publish',
					'posts_per_page' => '10',
				));
			?>
			<?php if ($query_policies->have_posts()) : $n = 0; ?>
				<div class="top_policies">
					<?php while ($query_policies->have_posts()) : $n = $n + 1; $query_policies->the_post(); ?>

						<div class="item animation">
							<p class="num">0<?php echo $n; ?></p>
							<div class="contents">
								<h3 class="tit"><?php the_title(); ?></h3>
								<p class="subtit"><?php the_field('tit'); ?></p>
								<div>
									<?php the_field('txt'); ?>
								</div>
								<div class="top_policy_btn">
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>policy/#policy0<?php echo $n; ?>" class="btn_with_arrow"><span>もっと見る</span><i class="arrow-white"></i></a>
								</div>
							</div>
							<div class="img">
								<?php $image = get_field('img');
								if( !empty($image) ): ?>
									<img src="<?php echo esc_attr($image['url']); ?>" alt="<?php the_title(); ?>">
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>


		<div class="big_title2 mt50">
			<h2 class="jp">実績</h2>
			<p class="eng">Results</p>
		</div>

		<div class="top_result animation">
			<div class="inner">
				<div class="whiteBlock">
					<h2 class="tit">
						<p class="top_result_tit">喫緊の社会問題を解決するために、議会を通してさまざまな提言をしています。</p>
					</h2>
					<div class="top_result_section_btn">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>policy/#result" class="btn_with_arrow"><span>詳しく見る</span><i class="arrow-white"></i></a>
					</div>
				</div>
			</div>
			<div class="policy_img">
				<picture>
					<source media="(min-width:560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/top_panel01.jpg">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/top_panel01_s.jpg" alt="政策の内容">
				</picture>
			</div>
		</div>


		<div class="index_foot">
			<div class="wrap">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>gallery/" class="gallery_btn">
					<picture>
						<source media="(min-width:560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_btn.png">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/gallery_btn_s.png" alt="なかむらギャラリー">
					</picture>
				</a>

				<div class="inner">
					<div class="twitter">
						<a class="twitter-timeline" data-width="400" data-height="400" data-theme="light" href="https://twitter.com/nakamura_sumida?ref_src=twsrc%5Etfw">Tweets by nakamura_sumida</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>

					<div class="side">
						<div class="banners">
							<a href="https://www.city.sumida.lg.jp/kugikai/" target="_blank" class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/bnr_con.jpg" alt="墨田区議会"></a>
							<a href="https://smart.discussvision.net/smart/tenant/sumida/WebView/rd/speaker_minutes.html?speaker_id=46&search_index=5" target="_blank" class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/bnr_eizo.jpg" alt="墨田区議会 映像配信"></a>
							<a href="https://ameblo.jp/nakamura-akihiro" target="_blank" class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/bnr_blog.jpg" alt="ブログ"></a>
							<a href="#" class="item"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/bnr_report.jpg" alt="活動レポート"></a>
							<div class="item">
								<div class="links">
									<a href="https://twitter.com/nakamura_sumida" target="_blank">
										<i class="fab fa-twitter"></i>
										<p>Twitter</p>
									</a>
									<a href="https://www.facebook.com/akihiro.nakamura.58118/" target="_blank">
										<i class="fab fa-facebook"></i>
										<p>Facebook</p>
									</a>
									<a href="https://www.youtube.com/channel/UCpUTTHblBwBZTbBEgUcTqaw" target="_blank">
										<i class="fab fa-youtube"></i>
										<p>YouTube</p>
									</a>
								</div>
							</div>
							<div class="item">
								<div class="buttons">
									<a href="https://cdp-japan.jp/" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/r-logo.jpg" alt="立憲民主党">
									</a>
									<a href="http://cdp-tokyo.jp" target="_blank">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/rt-logo.jpg" alt="立憲民主党 東京">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>


<?php get_footer(); ?>
