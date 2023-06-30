<?php get_header(); ?>

<div class="pageTitle">
    <div class="title_inner">
        <div class="text-area">
            <h1 class="jp">募集要項</h1>
            <p class="eng">RECRUITMENT</p>
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

    <div class="title_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/title/title_recruitment.jpg);"></div>
</div>


<main id="main_wrap" role="main">
    <div class="page_section">
        <div class="wrap">
            <p class="page_top_text">アイフリークグループの採用は、「能力やスキルを活かして、自分も周りもワクワクしてHAPPYになる」という価値観の共有を大切にしています。<br>採用面接、配属前面談等で本人の希望や適性等を考慮した上で、グループ内の各事業部に配属予定です。<br>配属後の処遇は、基本給・業務手当・福利厚生など基幹部分は一律ですが、ご自身の取得する資格や就業先での評価実績を考慮して決定されます。</p>

            <ul class="tab_navi">
                <li class="current">新卒採用</li>
                <li>中途採用</li>
            </ul>

            <div class="tab-target current">
                <div class="big-title center">
                    <h2 class="jp">新卒採用 募集職種一覧</h2>
                    <p class="eng">RECRUITMENT TYPE</p>
                </div>

                <p class="text-center mb40">2024年新卒の方向けの募集要項は各サイトにて記載しております。<br>ボタンをクリックして詳細をご確認ください。</p>

                <?php
                $query = new WP_Query(array(
                    'post_type' => 'recruitment_graduate',
                    'post_status' => 'publish',
                    'posts_per_page' => '100',
                    'order' => 'ASC',
                ));
                ?>
                <?php if ($query->have_posts()) : ?>
                    <div class="graduate_archs">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <div class="graduate_item">
                                <div class="thumb">
                                    <?php if ( has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('full'); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="gi_inner">
                                    <div class="explain">
                                        <?php the_field('explain'); ?>
                                    </div>
                                    <div class="gi_inner_info">
                                        <dl>
                                            <dt>募集職種</dt>
                                            <dd><?php
                                            $terms = get_the_terms($post->ID, 'recruitment_graduate_job');
                                            if ($terms) :
                                                foreach ($terms as $term) {
                                                    echo '<span>' . $term->name . '</span>';
                                                }
                                            endif;
                                            ?></dd>
                                        </dl>
                                        <dl>
                                            <dt>事業部</dt>
                                            <dd><?php
                                            $terms = get_the_terms($post->ID, 'recruitment_graduate_division');
                                            if ($terms) :
                                                foreach ($terms as $term) {
                                                    echo '<span>' . $term->name . '</span>';
                                                }
                                            endif;
                                            ?></dd>
                                        </dl>
                                    </div>
                                    <span class="gray_angle"><i class="fas fa-external-link-alt"></i></span>
                                </div>
                                <a href="<?php the_field('link_url'); ?>" target="_blank" class="float_link"></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php else : ?>
                    <div class="underconst">
                        <p>現在募集中の職種はありません</p>
                    </div>
                <?php endif; ?>
            </div>


            <div class="tab-target">
                <div class="big-title center">
                    <h2 class="jp">中途採用 募集職種一覧</h2>
                    <p class="eng">RECRUITMENT TYPE</p>
                </div>

                <?php $terms = get_terms('recruitment_job'); ?>
                <?php foreach($terms as $term): ?>
                    <div class="recruitment_archs">
                        <p class="head"><?= $term->name; ?></p>
                        <div class="ra_list">
                            <?php
                            $query = new WP_Query(array(
                                'post_type' => 'recruitment',
                                'texonomy' => 'recruitment_job',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'recruitment_job',
                                        'field' => 'slug',
                                        'terms' => $term->slug,
                                    ),
                                ),
                                'post_status' => 'publish',
                                'posts_per_page' => '100',
                                'order' => 'ASC',
                            ));
                            ?>
                            <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
                                <dl class="jobItem">
                                    <dt>
                                        <?php
                                        $terms = get_the_terms($post->ID, 'recruitment_division');
                                        if ($terms) :
                                            foreach ($terms as $term) {
                                                echo '<span>' . $term->name . '</span>';
                                            }
                                        endif;
                                        ?>
                                    </dt>
                                    <dd><?php the_field('explain'); ?></dd>
                                    <a href="<?php the_permalink(); ?>" class="float_link"></a>
                                    <span class="red_angle"><i class="fas fa-angle-right"></i></span>
                                </dl>
                            <?php endwhile; endif; wp_reset_postdata(); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>




            <!-- <h2 class="title_with_line mt100">
                <span>あなたに合う事業部を探そう</span>
            </h2>

            <div class="match_divisions">
                <div class="item">
                    <div class="red_tile">
                        <p>ITのスキルアップがしたい</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/ccs/">CCS事業部</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/ces/">CES事業部</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="red_tile">
                        <p>プログラミングが好き</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/ccs/">CCS事業部</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/ces/">CES事業部</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/cra/">CRA事業部</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="red_tile">
                        <p>アプリ制作に携わりたい</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/acs/">ACS事業部</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/app/">アプリ部</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/challet/">チャレット部</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="red_tile">
                        <p>人と接する仕事が好き</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/ces/">CES事業部</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="red_tile">
                        <p>かわいいキャラクターが好き</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/cra/">CRA事業部</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/app/">アプリ部</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="red_tile">
                        <p>アニメが好き</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/cra/">CRA事業部</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/gc/">GC事業部</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="red_tile">
                        <p>在宅勤務が多いほうがいい</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/cra/">FTC事業部</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/app/">アプリ部</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="red_tile">
                        <p>ブロックチェーンなどの最新テクノロジーに興味がある</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/cra/">FTC事業部</a></li>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/ds/">DS部</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="red_tile">
                        <p>ゲームが好き</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/gc/">GC事業部</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="red_tile">
                        <p>eスポーツの経験がある</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/gc/">GC事業部</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="red_tile">
                        <p>データ分析が得意</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/ds/">DS事業部</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="red_tile">
                        <p>チームワークを大切にしたい</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/challet/">チャレット部</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="red_tile">
                        <p>子どもが好き</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>jobs/app/">アプリ部</a></li>
                        </ul>
                    </div>
                </div>

                <div class="item">
                    <div class="red_tile">
                        <p>おもて舞台に立つのは苦手</p>
                    </div>
                    <div class="white_tile">
                        <p class="foryou">そんなあなたは</p>
                        <ul>
                            <li><a href="/jobs/management/">管理部</a></li>
                        </ul>
                    </div>
                </div>
            </div> -->
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
