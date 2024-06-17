<?php get_header(); ?>

<div class="pageTitle">
    <div class="title_inner">
        <div class="text-area">
            <h1 class="jp">仕事内容</h1>
            <p class="eng">JOB</p>
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

    <div class="title_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/title/title_job.jpg);"></div>
</div>


<main id="main_wrap" role="main">
    <div class="page_section">
        <div class="job_top">
            <h2 class="center-title">事業部紹介</h2>
            <p>当社グループの7部門では、それぞれの特色や役割に合わせて、様々なスタッフが個性を活かして活躍しています。<br>自身が持つ能力や才能を最大限発揮できるよう、適材適所の人事考課に努めており、機会ごとに設けられる面談で、<br>将来的に進みたい方向性ややってみたい仕事などをヒアリングしています。<br>今現在、将来の希望が決まっていなくても、勤めていく中で進みたい方向性が変わっても心配は無用です。<br>ご自身の成長ベクトルに合わせて、キャリアプランのイメージが自由に描けるのが当社の魅力です。</p>
        </div>

        <div class="job_list">
            <?php
				$query_job = new WP_Query(array(
					'post_type' => 'jobs',
					'post_status' => 'publish',
					'posts_per_page' => '1',
                    'name' => 'ftc',
				));
                if ($query_job->have_posts()) : while ($query_job->have_posts()) : $query_job->the_post();
			?>
                <div class="item">
                    <div class="bg_image">
                        <?php $thumb_img = get_field('thumb_img');
                        if( !empty($thumb_img) ): ?>
                            <img src="<?php echo esc_attr($thumb_img['url']); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="inner">
                        <div class="tit">
                            <h3 class="jp">フィンテック事業部</h3>
                            <p class="eng"><span>FTC</span>事業部</p>
                        </div>
                        <p class="inText"><?php the_field('arc_text'); ?></p>
                        <span class="arrow-gray"><i class="fas fa-angle-right"></i></span>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="float_link"></a>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>


            <?php
				$query_job1 = new WP_Query(array(
					'post_type' => 'jobs',
					'post_status' => 'publish',
					'posts_per_page' => '1',
                    'name' => 'ccs',
				));
                if ($query_job1->have_posts()) : while ($query_job1->have_posts()) : $query_job1->the_post();
			?>
                <div class="item">
                    <div class="bg_image">
                        <?php $thumb_img = get_field('thumb_img');
                        if( !empty($thumb_img) ): ?>
                            <img src="<?php echo esc_attr($thumb_img['url']); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="inner">
                        <div class="tit">
                            <h3 class="jp">コンテンツクリエーターサービス事業部</h3>
                            <p class="eng"><span>CCS</span>事業部</p>
                        </div>
                        <p class="inText"><?php the_field('arc_text'); ?></p>
                        <span class="arrow-gray"><i class="fas fa-angle-right"></i></span>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="float_link"></a>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>


            <?php
				$query_job = new WP_Query(array(
					'post_type' => 'jobs',
					'post_status' => 'publish',
					'posts_per_page' => '1',
                    'name' => 'ces',
				));
                if ($query_job->have_posts()) : while ($query_job->have_posts()) : $query_job->the_post();
			?>
                <div class="item">
                    <div class="bg_image">
                        <?php $thumb_img = get_field('thumb_img');
                        if( !empty($thumb_img) ): ?>
                            <img src="<?php echo esc_attr($thumb_img['url']); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="inner">
                        <div class="tit">
                            <h3 class="jp">コンテンツエンジニアサービス事業部</h3>
                            <p class="eng"><span>CES</span>事業部</p>
                        </div>
                        <p class="inText"><?php the_field('arc_text'); ?></p>
                        <span class="arrow-gray"><i class="fas fa-angle-right"></i></span>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="float_link"></a>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>


            <?php
				$query_job = new WP_Query(array(
					'post_type' => 'jobs',
					'post_status' => 'publish',
					'posts_per_page' => '1',
                    'name' => 'gc',
				));
                if ($query_job->have_posts()) : while ($query_job->have_posts()) : $query_job->the_post();
			?>
                <div class="item">
                    <div class="bg_image">
                        <?php $thumb_img = get_field('thumb_img');
                        if( !empty($thumb_img) ): ?>
                            <img src="<?php echo esc_attr($thumb_img['url']); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="inner">
                        <div class="tit">
                            <h3 class="jp">ゲームクリエイター事業部</h3>
                            <p class="eng"><span>GC</span>事業部</p>
                        </div>
                        <p class="inText"><?php the_field('arc_text'); ?></p>
                        <span class="arrow-gray"><i class="fas fa-angle-right"></i></span>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="float_link"></a>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>


            <?php
				$query_job = new WP_Query(array(
					'post_type' => 'jobs',
					'post_status' => 'publish',
					'posts_per_page' => '1',
                    'name' => 'cra',
				));
                if ($query_job->have_posts()) : while ($query_job->have_posts()) : $query_job->the_post();
			?>
                <div class="item">
                    <div class="bg_image">
                        <?php $thumb_img = get_field('thumb_img');
                        if( !empty($thumb_img) ): ?>
                            <img src="<?php echo esc_attr($thumb_img['url']); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="inner">
                        <div class="tit">
                            <h3 class="jp">コンテンツロボティクスオートメーション事業部</h3>
                            <p class="eng"><span>CRA</span>事業部</p>
                        </div>
                        <p class="inText"><?php the_field('arc_text'); ?></p>
                        <span class="arrow-gray"><i class="fas fa-angle-right"></i></span>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="float_link"></a>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>


            <?php
				$query_job = new WP_Query(array(
					'post_type' => 'jobs',
					'post_status' => 'publish',
					'posts_per_page' => '1',
                    'name' => 'acs',
				));
                if ($query_job->have_posts()) : while ($query_job->have_posts()) : $query_job->the_post();
			?>
                <div class="item">
                    <div class="bg_image">
                        <?php $thumb_img = get_field('thumb_img');
                        if( !empty($thumb_img) ): ?>
                            <img src="<?php echo esc_attr($thumb_img['url']); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="inner">
                        <div class="tit">
                            <h3 class="jp">アプリクリエイターサービス事業部</h3>
                            <p class="eng"><span>ACS</span>事業部</p>
                        </div>
                        <p class="inText"><?php the_field('arc_text'); ?></p>
                        <span class="arrow-gray"><i class="fas fa-angle-right"></i></span>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="float_link"></a>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>


            <?php
				$query_job = new WP_Query(array(
					'post_type' => 'jobs',
					'post_status' => 'publish',
					'posts_per_page' => '1',
                    'name' => 'es',
				));
                if ($query_job->have_posts()) : while ($query_job->have_posts()) : $query_job->the_post();
			?>
                <div class="item">
                    <div class="bg_image">
                        <?php $thumb_img = get_field('thumb_img');
                        if( !empty($thumb_img) ): ?>
                            <img src="<?php echo esc_attr($thumb_img['url']); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="inner">
                        <div class="tit">
                            <p class="eng"><span>ES</span>事業部</p>
                        </div>
                        <p class="inText"><?php the_field('arc_text'); ?></p>
                        <span class="arrow-gray"><i class="fas fa-angle-right"></i></span>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="float_link"></a>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>


            <?php
				$query_job = new WP_Query(array(
					'post_type' => 'jobs',
					'post_status' => 'publish',
					'posts_per_page' => '1',
                    'name' => 'app',
				));
                if ($query_job->have_posts()) : while ($query_job->have_posts()) : $query_job->the_post();
			?>
                <div class="item">
                    <div class="bg_image">
                        <?php $thumb_img = get_field('thumb_img');
                        if( !empty($thumb_img) ): ?>
                            <img src="<?php echo esc_attr($thumb_img['url']); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="inner">
                        <div class="tit">
                            <h3 class="eng">コンテンツソリューション事業部</h3>
                        </div>
                        <p class="inText"><?php the_field('arc_text'); ?></p>
                        <span class="arrow-gray"><i class="fas fa-angle-right"></i></span>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="float_link"></a>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>


            <?php
				$query_job = new WP_Query(array(
					'post_type' => 'jobs',
					'post_status' => 'publish',
					'posts_per_page' => '1',
                    'name' => 'management',
				));
                if ($query_job->have_posts()) : while ($query_job->have_posts()) : $query_job->the_post();
			?>
                <div class="item">
                    <div class="bg_image">
                        <?php $thumb_img = get_field('thumb_img');
                        if( !empty($thumb_img) ): ?>
                            <img src="<?php echo esc_attr($thumb_img['url']); ?>" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                    </div>
                    <div class="inner">
                        <div class="tit">
                            <h3 class="eng">管理部</h3>
                        </div>
                        <p class="inText"><?php the_field('arc_text'); ?></p>
                        <span class="arrow-gray"><i class="fas fa-angle-right"></i></span>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="float_link"></a>
                </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>

        </div>

    </div>


    <?php
        $query_faq = new WP_Query(array(
            'post_type' => 'faq',
            'post_status' => 'publish',
            'posts_per_page' => '30',
        ));
        if ($query_faq->have_posts()) :
    ?>
    <div class="page_section page_section__red">
        <div class="wrap">
            <div class="faq-list">
                <?php while ($query_faq->have_posts()) : $query_faq->the_post(); ?>
                    <section class="faq-list__item js-accordion">
                        <h3 class="question">
                            <button class="question__txt js-accordion__trigger" type="button">
                                <span class="icon">Q</span>
                                <div class="txt">
                                    <?php the_field('question'); ?>
                                </div>
                                <span class="indicator"></span>
                            </button>
                        </h3>
                        <div class="js-accordion__collapse">
                            <div class="answer js-accordion__collapse-inner">
                                <div class="answer__txt">
                                    <span class="icon">A</span>
                                    <div class="txt">
                                        <?php the_field('answer'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

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
