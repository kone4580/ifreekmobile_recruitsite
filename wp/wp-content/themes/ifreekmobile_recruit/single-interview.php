<?php get_header(); ?>


<div class="staffTitle">
    <div class="title_inner">
        <div class="message-area">
            <p><span><?php the_field('catch1'); ?></span></p>
            <?php if (get_field('catch2')) : ?>
                <p><span><?php the_field('catch2'); ?></span></p>
            <?php endif; ?>
            <?php if (get_field('catch3')) : ?>
                <p><span><?php the_field('catch3'); ?></span></p>
            <?php endif; ?>
        </div>
        <div class="sq_carat">
            <?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
            <svg id="layer_2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 559 280">
                <g id="title_sq">
                    <rect id="_長方形_4" class="title_sq_1" x="519" y="0" width="40" height="40"/>
                    <rect id="_長方形_4-2" class="title_sq_1" x="479" y="40" width="40" height="40"/>
                    <rect id="_長方形_4-3" class="title_sq_1" x="439" y="0" width="40" height="40"/>
                    <rect id="_長方形_4-4" class="title_sq_1" x="359" y="0" width="40" height="40"/><rect id="_長方形_4-5" class="title_sq_1" x="319" y="0" width="40" height="40"/>
                    <rect id="_長方形_4-6" class="title_sq_1" x="239" y="0" width="40" height="40"/><rect id="_長方形_4-7" class="title_sq_1" x="199" y="160" width="40" height="40"/><rect id="_長方形_4-8" class="title_sq_1" x="159" y="0" width="40" height="40"/><rect id="_長方形_4-9" class="title_sq_1" x="79" y="0" width="40" height="40"/><rect id="_長方形_4-10" class="title_sq_1" x="0" y="0" width="40" height="40"/><rect id="_長方形_4-11" class="title_sq_1" x="519" y="80" width="40" height="40"/><rect id="_長方形_4-13" class="title_sq_1" x="399" y="40" width="40" height="40"/><rect id="_長方形_4-14" class="title_sq_1" x="359" y="40" width="40" height="40"/><rect id="_長方形_4-15" class="title_sq_1" x="279" y="40" width="40" height="40"/><rect id="_長方形_4-16" class="title_sq_1" x="239" y="80" width="40" height="40"/><rect id="_長方形_4-17" class="title_sq_1" x="159" y="40" width="40" height="40"/><rect id="_長方形_4-18" class="title_sq_1" x="119" y="40" width="40" height="40"/><rect id="_長方形_4-19" class="title_sq_1" x="479" y="120" width="40" height="40"/><rect id="_長方形_4-20" class="title_sq_1" x="399" y="80" width="40" height="40"/><rect id="_長方形_4-21" class="title_sq_1" x="319" y="80" width="40" height="40"/><rect id="_長方形_4-22" class="title_sq_1" x="199" y="80" width="40" height="40"/><rect id="_長方形_4-23" class="title_sq_1" x="119" y="80" width="40" height="40"/><rect id="_長方形_4-24" class="title_sq_1" x="79" y="80" width="40" height="40"/><rect id="_長方形_4-25" class="title_sq_1" x="439" y="160" width="40" height="40"/><rect id="_長方形_4-26" class="title_sq_1" x="439" y="80" width="40" height="40"/><rect id="_長方形_4-27" class="title_sq_1" x="279" y="120" width="40" height="40"/><rect id="_長方形_4-28" class="title_sq_1" x="319" y="160" width="40" height="40"/><rect id="_長方形_4-29" class="title_sq_1" x="159" y="120" width="40" height="40"/><rect id="_長方形_4-30" class="title_sq_1" x="519" y="160" width="40" height="40"/><rect id="_長方形_4-31" class="title_sq_1" x="439" y="240" width="40" height="40"/><rect id="_長方形_4-32" class="title_sq_1" x="359" y="160" width="40" height="40"/><rect id="_長方形_4-33" class="title_sq_1" x="479" y="200" width="40" height="40"/><rect id="_長方形_4-34" class="title_sq_1" x="399" y="200" width="40" height="40"/><rect id="_長方形_4-35" class="title_sq_1" x="519" y="240" width="40" height="40"/></g>
            </svg>
        </div>
    </div>

    <div class="staff_info">
        <p class="initial"><?php the_title(); ?></p>
        <p class="busho">
            <?php
            $terms = get_the_terms($post->ID, 'interview_division');
            if ($terms) :
                foreach ($terms as $term) {
                    echo '<span>' . $term->name . '</span>';
                }
            endif;
            ?> /
            <?php the_field('job_type'); ?> /
            入社<?php the_field('year'); ?>年目（インタビュー当時）
        </p>
    </div>

    <?php $image = get_field('interview_main');
    if( !empty($image) ): ?>
        <div class="title_image" style="background-image: url(<?php echo esc_attr($image['url']); ?>);"></div>
    <?php endif; ?>
</div>


<main id="main_wrap" role="main">

    <div class="page_section int_section">
        <div class="middlewrap">
            <h2 class="lined_title"><span>一日の仕事の流れ</span></h2>
            <ul class="myWork">
                <li><?php the_field('flow_1'); ?></li>
                <?php if (get_field('flow_2')) : ?>
                    <li><?php the_field('flow_2'); ?></li>
                <?php endif; ?>
                <?php if (get_field('flow_3')) : ?>
                    <li><?php the_field('flow_3'); ?></li>
                <?php endif; ?>
                <?php if (get_field('flow_4')) : ?>
                    <li><?php the_field('flow_4'); ?></li>
                <?php endif; ?>
                <?php if (get_field('flow_5')) : ?>
                    <li><?php the_field('flow_5'); ?></li>
                <?php endif; ?>
                <?php if (get_field('flow_6')) : ?>
                    <li><?php the_field('flow_6'); ?></li>
                <?php endif; ?>
                <?php if (get_field('flow_7')) : ?>
                    <li><?php the_field('flow_7'); ?></li>
                <?php endif; ?>
                <?php if (get_field('flow_8')) : ?>
                    <li><?php the_field('flow_8'); ?></li>
                <?php endif; ?>
                <?php if (get_field('flow_9')) : ?>
                    <li><?php the_field('flow_9'); ?></li>
                <?php endif; ?>
                <?php if (get_field('flow_10')) : ?>
                    <li><?php the_field('flow_10'); ?></li>
                <?php endif; ?>
            </ul>

            <h3 class="q_tit mt50">
                <span class="q_icon">Q.</span>
                <span class="text">入社までの経緯を教えてください</span>
            </h3>

            <div class="ans_area">
                <?php the_field('keii'); ?>
            </div>

            <div class="int_img_section animation">
                <div class="q_side">
                    <h3 class="q_tit">
                        <span class="q_icon">Q.</span>
                        <span class="text">入社後に苦労したこと、大変だったこと</span>
                    </h3>

                    <div class="ans_area">
                        <?php if (get_field('kurou_st')) : ?>
                            <p class="emphasis"><span><?php the_field('kurou_st'); ?></span></p>
                        <?php endif; ?>
                        <div class="inner">
                            <?php the_field('kurou'); ?>
                        </div>
                    </div>
                </div>

                <div class="img_side">
                    <?php $img1 = get_field('img1');
                    if( !empty($img1) ): ?>
                        <img src="<?php echo esc_attr($img1['url']); ?>" alt="苦労したこと">
                    <?php endif; ?>
                </div>
            </div>


            <h3 class="q_tit mt30">
                <span class="q_icon">Q.</span>
                <span class="text">会社の好きなところ</span>
            </h3>

            <div class="ans_area">
                <?php if (get_field('suki_st')) : ?>
                    <p class="emphasis"><span><?php the_field('suki_st'); ?></span></p>
                <?php endif; ?>
                <div class="inner">
                    <?php the_field('suki'); ?>
                </div>
            </div>


            <h3 class="q_tit mt50">
                <span class="q_icon">Q.</span>
                <span class="text">仕事をしていてやりがいを感じる点</span>
            </h3>

            <div class="ans_area">
                <?php if (get_field('yarigai_st')) : ?>
                    <p class="emphasis"><span><?php the_field('yarigai_st'); ?></span></p>
                <?php endif; ?>
                <div class="inner">
                    <?php the_field('yarigai'); ?>
                </div>
            </div>


            <div class="int_img_section reverse animation">
                <div class="q_side">
                    <h3 class="q_tit">
                        <span class="q_icon">Q.</span>
                        <span class="text">今後の目標・ビジョンを教えて下さい</span>
                    </h3>

                    <div class="ans_area">
                        <?php if (get_field('vision_st')) : ?>
                            <p class="emphasis"><span><?php the_field('vision_st'); ?></span></p>
                        <?php endif; ?>
                        <div class="inner">
                            <?php the_field('vision'); ?>
                        </div>
                    </div>
                </div>

                <div class="img_side">
                    <?php $img2 = get_field('img2');
                    if( !empty($img2) ): ?>
                        <img src="<?php echo esc_attr($img2['url']); ?>" alt="今後の目標・ビジョン">
                    <?php endif; ?>
                </div>
            </div>


            <div class="int_last">
                <div class="img">
                    <?php $img3 = get_field('img3');
                    if( !empty($img3) ): ?>
                        <img src="<?php echo esc_attr($img3['url']); ?>" alt="HAPPY">
                    <?php endif; ?>
                </div>
                <div class="text_area">
                    <h3 class="tit">最近の<span>HAPPY</span>なできごと</h3>
                    <div class="inner">
                        <?php the_field('happy'); ?>
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/page/characters.png" class="characters" alt="キャラクター">
                </div>
            </div>
        </div>
    </div>


    <div class="page_section page_section__pink">
        <div class="middlewrap">
            <div class="int_bottoms">
                <?php
                $terms = get_the_terms($post->ID, 'interview_division');
                if ($terms) :
                    foreach ($terms as $term) {
                        echo '<a href="' . esc_url( home_url( '/' ) ) . 'jobs/' . $term->slug .'/" class="btn-red">所属部署の仕事内容<i class="fas fa-angle-right"></i></a>';
                    }
                endif;
                ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>interview/" class="btn-red">一覧に戻る<i class="fas fa-angle-right"></i></a>
            </div>


            <?php
                $current_post_id = get_the_ID();
                $query = new WP_Query(array(
                    'post_type' => 'interview',
                    'post_status' => 'publish',
                    'post__not_in' => [$current_post_id],
                    'posts_per_page' => 3,
                    'orderby' => 'rand',
                ));
                if ($query->have_posts()):
            ?>
                <div class="big-title center flex mt80">
                    <h2 class="jp_small">その他のインタビュー</h2>
                    <p class="eng_big">INTERVIEW</p>
                </div>

                <ul class="staff_list">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        <li>
                            <div class="img">
                                <?php $image = get_field('archive_thumb');
                                if( !empty($image) ): ?>
                                    <img src="<?php echo esc_attr($image['url']); ?>" alt="スタッフ画像">
                                <?php endif; ?>
                            </div>
                            <div class="inner">
                                <p class="initial"><?php the_title(); ?></p>
                                <p class="busho">
                                    <?php
                                    $terms = get_the_terms($post->ID, 'interview_division');
                                    if ($terms) :
                                        foreach ($terms as $term) {
                                            echo '<span>' . $term->name . '</span>';
                                        }
                                    endif;
                                    ?> /
                                    <?php the_field('job_type'); ?> /
                                    入社<?php the_field('year'); ?>年目
                                </p>
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="float_link"></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; wp_reset_postdata(); ?>
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
