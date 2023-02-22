<?php get_header(); ?>

<div class="pageTitle">
    <div class="title_inner">
        <div class="text-area">
            <h1 class="jp">新着情報</h1>
            <p class="eng">NEWS</p>
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

    <div class="title_image" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/title/title_data.jpg);"></div>
</div>



<main id="main_wrap" role="main">
    <div class="page_section">
        <div class="wrap">
            <div class="news_single">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="single_title"><?php the_title(); ?></h1>
                <div class="post_data">
                    <p class="news_date"><?php the_time( get_option( 'date_format' ) ); ?></p>
                    <div class="single_cat_tag">
                        <?php
                        $postcats = get_the_category();
                        if( $postcats ){
                            foreach ( $postcats as $cat ) {
                                echo '<span>' . $cat->name . '</span>';
                            }
                        }
                        ?>
                    </div>
                </div>
          
                <div class="single_content">
                    <?php the_content(); ?>
                </div>
          
                <?php if ( has_post_thumbnail()): ?>
                    <div class="single_icatch">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
                
                <div class="single_page_navi">
                    <?php
                    $previous_post = get_previous_post();
                    if (!empty( $previous_post )): ?>
                        <a href="<?php echo get_permalink( $previous_post->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/angle_prev.png" alt="前の記事"></a>
                    <?php endif; ?>
            
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">一覧へ戻る</a>
                    <?php
                    $next_post = get_next_post();
                    if (!empty( $next_post )): ?>
                        <a href="<?php echo get_permalink( $next_post->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/angle_next.png" alt="次の記事"></a>
                    <?php endif; ?>
                </div>
        
                <?php endwhile; else: ?>
                    <p><?php echo "お探しの記事、ページは見つかりませんでした。"; ?></p>
                <?php endif; ?>
                
                <?php if(has_category() ) {
                    $catlist = get_the_category();
                    $category = array();
                    foreach($catlist as $cat){
                        $category[] = $cat->term_id;
                    }}
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => '3',
                        'post__not_in' => array( $post->ID ),
                        'category__in' => $category,
                        'orderby' => 'rand'
                    );
                    $related_query = new WP_Query( $args );
                ?>
                
                <?php if ( $related_query->have_posts() ) : ?>
                    <div class="big_title2">
                        <h2 class="jp">その他の活動報告</h2>
                    </div>
                    
                    <div class="page_reports">
                        <?php while ( $related_query->have_posts() ) : $related_query->the_post(); ?>
                            <div class="item animation">
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
                                        <div class="cat_tags">
                                            <?php foreach((get_the_category()) as $cat) { ?>
                                                <p class="ac_type <?php echo $cat->slug; ?>" data-lavel="<?php echo $cat->slug; ?>"><?php echo $cat->cat_name; ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
