<?php get_header(); ?>

<div class="pageTitle">
    <div class="title_inner">
        <div class="text-area">
            <h1 class="jp">募集要項</h1>
            <p class="eng">RECRUITMENT</p>
        </div>
        <div class="sq_carat">
            <?xml version="1.0" encoding="UTF-8"?>
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
            <p class="page_top_text">アイフリークモバイルグループの採用は、「能力やスキルを活かして、自分も周りもワクワクしてHAPPYになる」という価値観の共有を大切にしています。<br>採用面接、配属前面談等で本人の希望や適性等を考慮した上で、グループ内の各事業部に配属予定です。<br>配属後の処遇は、基本給・業務手当・福利厚生など基幹部分は一律ですが、ご自身の取得する資格や就業先での評価実績を考慮して決定されます。</p>

            <div class="big-title center mt80">
                <h2 class="jp"><?php echo get_the_archive_title(); ?>募集一覧</h2>
                <p class="eng">RECRUITMENT TYPE</p>
            </div>

            <?php
            $taxonomy = get_query_var('taxonomy');
            $term = get_query_var('term');
            $query = new WP_Query(array(
                'post_type' => 'recruitment',
                'texonomy' => 'recruitment_job',
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy,
                        'field' => 'slug',
                        'terms' => $term,
                    ),
                ),
                'post_status' => 'publish',
                'posts_per_page' => '100',
                'paged' => get_query_var('paged'),
            ));
            ?>

            <?php if ($query->have_posts()) : ?>
                <div class="recruitment_archs">
                    <p class="head"><?php echo get_the_archive_title(); ?></p>
                    <div class="ra_list">
                        <?php while ($query->have_posts()) : $query->the_post(); ?>
                            <dl class="jobItem">
                                <dt>
                                    <?php
                                    $terms = get_the_terms($post->ID, 'interview_division');
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
                        <?php endwhile; ?>
                    </div>
                </div>
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
