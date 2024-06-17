<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="single_pageTitle">
    <div class="inner">
        <div class="tag_date">
            <div class="news_item_tag">
                <?php foreach ((get_the_category()) as $cat) { ?>
                    <span class="cat <?php echo $cat->slug; ?>"><?php echo $cat->cat_name; ?></span>
                <?php } ?>
            </div>
            <span class="article_date"><?php the_time(get_option('date_format')); ?></span>
            <p class="back_home"><a href="<?php echo esc_url(home_url('/')); ?>news/"><span><i class="fas fa-angle-left"></i></span>一覧に戻る</a></p>
        </div>
        <h1><?php the_title(); ?></h1>
    </div>
</div>

<main id="main_wrap" role="main">

    <div class="page_section page_section__pink">
        <div class="middlewrap">
            <div class="whiteBox">
                <div class="single_content">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="thumbArea">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <?php the_content(); ?>
                </div>

                    <?php endwhile; else : ?>
                    <p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>
                <?php endif; ?>
            </div>


            <?php if (has_category()) {
                $catlist = get_the_category();
                $category = array();
                foreach ($catlist as $cat) {
                    $category[] = $cat->term_id;
                }
            }
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => '3', //表示させたい記事数
                'post__not_in' => array($post->ID), //現在の記事は含めない
                'category__in' => $category, //先ほど取得したカテゴリー内の記事
                'orderby' => 'rand' //ランダムで取得
            );
            $related_query = new WP_Query($args);
            if ($related_query->have_posts()) :
            ?>
            <h2 class="center-title mt80">関連ニュース</h2>

            <div class="news_archive">
                <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                    <div class="item animation">
                        <div class="img">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('large'); ?>
                            <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/default.jpg" alt="NO-IMAGE">
                            <?php endif; ?>
                        </div>
                        <div class="inner">
                            <div class="news_item_head">
                                <p class="date"><?php the_time(get_option('date_format')); ?></p>
                                <div class="news_item_tag">
                                    <?php foreach ((get_the_category()) as $cat) { ?>
                                        <p class="cat <?php echo $cat->slug; ?>"><?php echo $cat->cat_name; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="title_area">
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="float_link"></a>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); //最後に記事のリセット
                ?>
            </div>
            <?php endif; ?>

        </div>
    </div>

</main>

<?php get_footer(); ?>
