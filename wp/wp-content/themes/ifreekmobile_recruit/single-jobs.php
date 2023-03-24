<?php get_header(); ?>

<div class="pageTitle">
    <div class="title_inner">
        <div class="text-area">
            <h1 class="jp">ワークスタイル</h1>
            <p class="eng">WORK STYLE</p>
        </div>
        <div class="sq_carat">
			<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
            <svg id="layer_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 559 280">
                <g id="title_sq">
                    <rect id="_長方形_4" class="title_sq_1" x="519" y="0" width="40" height="40"/>
                    <rect id="_長方形_4-2" class="title_sq_1" x="479" y="40" width="40" height="40"/>
                    <rect id="_長方形_4-3" class="title_sq_1" x="439" y="0" width="40" height="40"/>
                    <rect id="_長方形_4-4" class="title_sq_1" x="359" y="0" width="40" height="40"/><rect id="_長方形_4-5" class="title_sq_1" x="319" y="0" width="40" height="40"/>
                    <rect id="_長方形_4-6" class="title_sq_1" x="239" y="0" width="40" height="40"/><rect id="_長方形_4-7" class="title_sq_1" x="199" y="160" width="40" height="40"/><rect id="_長方形_4-8" class="title_sq_1" x="159" y="0" width="40" height="40"/><rect id="_長方形_4-9" class="title_sq_1" x="79" y="0" width="40" height="40"/><rect id="_長方形_4-10" class="title_sq_1" x="0" y="0" width="40" height="40"/><rect id="_長方形_4-11" class="title_sq_1" x="519" y="80" width="40" height="40"/><rect id="_長方形_4-13" class="title_sq_1" x="399" y="40" width="40" height="40"/><rect id="_長方形_4-14" class="title_sq_1" x="359" y="40" width="40" height="40"/><rect id="_長方形_4-15" class="title_sq_1" x="279" y="40" width="40" height="40"/><rect id="_長方形_4-16" class="title_sq_1" x="239" y="80" width="40" height="40"/><rect id="_長方形_4-17" class="title_sq_1" x="159" y="40" width="40" height="40"/><rect id="_長方形_4-18" class="title_sq_1" x="119" y="40" width="40" height="40"/><rect id="_長方形_4-19" class="title_sq_1" x="479" y="120" width="40" height="40"/><rect id="_長方形_4-20" class="title_sq_1" x="399" y="80" width="40" height="40"/><rect id="_長方形_4-21" class="title_sq_1" x="319" y="80" width="40" height="40"/><rect id="_長方形_4-22" class="title_sq_1" x="199" y="80" width="40" height="40"/><rect id="_長方形_4-23" class="title_sq_1" x="119" y="80" width="40" height="40"/><rect id="_長方形_4-24" class="title_sq_1" x="79" y="80" width="40" height="40"/><rect id="_長方形_4-25" class="title_sq_1" x="439" y="160" width="40" height="40"/><rect id="_長方形_4-26" class="title_sq_1" x="439" y="80" width="40" height="40"/><rect id="_長方形_4-27" class="title_sq_1" x="279" y="120" width="40" height="40"/><rect id="_長方形_4-28" class="title_sq_1" x="319" y="160" width="40" height="40"/><rect id="_長方形_4-29" class="title_sq_1" x="159" y="120" width="40" height="40"/><rect id="_長方形_4-30" class="title_sq_1" x="519" y="160" width="40" height="40"/><rect id="_長方形_4-31" class="title_sq_1" x="439" y="240" width="40" height="40"/><rect id="_長方形_4-32" class="title_sq_1" x="359" y="160" width="40" height="40"/><rect id="_長方形_4-33" class="title_sq_1" x="479" y="200" width="40" height="40"/><rect id="_長方形_4-34" class="title_sq_1" x="399" y="200" width="40" height="40"/><rect id="_長方形_4-35" class="title_sq_1" x="519" y="240" width="40" height="40"/>
                </g>
            </svg>
        </div>
    </div>

    <div class="breadcrumbs">
        <?php if (function_exists('bcn_display')) {
            bcn_display();
        }?>
    </div>

    <div class="title_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/title/title_workstyle.jpg);"></div>
</div>


<main id="main_wrap" role="main">

	<div class="page_section">
		<div class="middlewrap">
			<div class="work_links">
				<ul>
                    <?php
                        $query_jobs = new WP_Query(array(
                            'post_type' => 'jobs',
                            'post_status' => 'publish',
                            'posts_per_page' => '12',
                        ));
                    ?>
                    <?php if ($query_jobs->have_posts()) : while ($query_jobs->have_posts()) : $query_jobs->the_post(); ?>
						<?php
						$current_url =  get_pagenum_link(get_query_var('paged'));
						$link_page = get_permalink();
						if($current_url == $link_page) {
						?>
							<li class="active">
						<?php } else { ?>
							<li>
						<?php } ?>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_postdata(); ?>
				</ul>
			</div>

			<div class="work_st_tit">
				<h1 class="jp"><?php the_field('jp_name'); ?></h1>
				<p class="eng">
                    <?php if(get_field('eng_name')){
                        the_field('eng_name');
                    } else {
                        the_title();
                    } ?>
                </p>
			</div>
		</div>

		<div class="job_work_bg animation">
			<div class="middlewrap">
				<div class="job_work">
					<div class="tit">
						<h3 class="work_name">主な<span>仕事内容</span></h3>
					</div>
					<div class="inner">
                        <?php the_field('main_work'); ?>
					</div>
				</div>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/charac_02.png" class="charac_02" alt="キャラクター２">
		</div>

		<div class="middlewrap">
			<div class="flex_content mt80">
				<div class="item item_4">
					<h3 class="center_tit_mini">特徴</h3>
                    <div>
                        <?php the_field('feature'); ?>
                    </div>
				</div>

				<div class="item item_4">
                 <?php $feature_img = get_field('feature_img');
                    if( !empty($feature_img) ): ?>
                        <img src="<?php echo esc_attr($feature_img['url']); ?>" class="radiused" alt="特徴">
                    <?php endif; ?>
				</div>
			</div>

			<div class="flex_content flex_content_r mt80">
				<div class="item item_4">
					<h3 class="center_tit_mini">身につく技術</h3>
                    <div>
                        <?php the_field('skill'); ?>
                    </div>
				</div>

				<div class="item item_4">
                    <?php $skill_img = get_field('skill_img');
                    if( !empty($skill_img) ): ?>
                        <img src="<?php echo esc_attr($skill_img['url']); ?>" class="radiused" alt="身につく技術">
                    <?php endif; ?>
				</div>
			</div>
		</div>


		<div class="js_intro">
			<div class="tit">
				<h3 class="jp">事業部を紹介してください！</h3>
				<p class="eng">FROM MANAGER</p>
			</div>

			<div class="inner">
				<div class="img_side">
					<div class="ms_hm">
                        <?php $image = get_field('img');
                        if( !empty($image) ): ?>
                            <img src="<?php echo esc_attr($image['url']); ?>" alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/manager.png" class="" alt="部長アバター">
                        <?php endif; ?>
					</div>
					<p><?php the_title(); ?> 部長</p>
				</div>
				<div class="text_side">
                    <?php the_field('comment'); ?>
				</div>
			</div>
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/js_ccs_bg.jpg" class="js_bg_img" alt="">
		</div>


		<div class="wrap mt80">
			<?php
                $slug = $post->post_name;
                $query = new WP_Query(array(
                    'post_type' => 'interview',
                    'taxonomy' => 'interview_division',
                    'term' => $slug,
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                    'orderby' => 'rand',
                ));
                if ($query->have_posts()):
            ?>
				<div class="big-title center">
					<h2 class="jp">所属社員インタビュー</h2>
					<p class="eng">STAFF INTERVIEW</p>
				</div>

				<div class="belong_staffs mb80">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<div class="item">
							<div class="img">
								<?php $image = get_field('archive_thumb');
								if( !empty($image) ): ?>
									<img src="<?php echo esc_attr($image['url']); ?>" alt="スタッフ画像">
								<?php endif; ?>
							</div>
							<div class="inner">
								<h3 class="name"><?php the_title(); ?></h3>
								<p>
									<?php
									$terms = get_the_terms($post->ID, 'interview_division');
									if ($terms) :
										foreach ($terms as $term) {
											echo '<span>' . $term->name . '</span>';
										}
									endif;
									?> /
									<?php the_field('job_type'); ?>
								</p>
								<p>入社<?php the_field('year'); ?>年目（取材当時）</p>
							</div>
							<a href="<?php the_permalink(); ?>" class="float_link"></a>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; wp_reset_postdata(); ?>


			<h3 class="title_with_line">この事業部で募集中の職種</h3>
			<?php
                $slug = $post->post_name;
                $query = new WP_Query(array(
                    'post_type' => 'recruitment',
                    'taxonomy' => 'recruitment_division',
                    'term' => $slug,
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                    'orderby' => 'rand',
                ));
                if ($query->have_posts()):
            ?>
				<div class="job_links">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="btn-white">
							<?php
								$terms = get_the_terms($post->ID, 'recruitment_job');
								if ($terms) :
									foreach ($terms as $term) {
										echo $term->name;
									}
								endif;
							?>
							<i class="fas fa-angle-right"></i>
						</a>
					<?php endwhile; ?>
				</div>
			<?php else : ?>
				<div class="not_recruiting">
					<p>現在この事業部で募集中の職種はありません</p>
				</div>
			<?php endif; wp_reset_postdata(); ?>

			<a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/" class="btn-red mauto mt50">一覧に戻る<i class="fas fa-angle-right"></i></a>
		</div>
	</div>

</main>


<div class="bottom_entry">
    <div class="inner">
        <p class="eng">ENTRY</p>
        <p class="jp">エントリー</p>
    </div>
    <div class="bottom_entry_bg">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/entry_bg.jpg" alt="エントリー">
    </div>
    <span class="arrow"><i class="fas fa-angle-right"></i></span>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>entry/" class="float_link"></a>
</div>


<?php get_footer(); ?>
