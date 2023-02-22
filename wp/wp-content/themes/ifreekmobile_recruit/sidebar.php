<div class="right">
    <div class="item">
        <p class="sort_title">カテゴリー</p>
        <div class="sort_box">
            <p class="selected">
                <?php if(is_category()) : ?>
                    <?php single_tag_title(); ?><i class="fas fa-angle-down"></i>
                <?php else : ?>
                    すべて<i class="fas fa-angle-down"></i>
                <?php endif; ?>
            </p>
            <ul>
                <?php if(is_category()) : ?>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">すべて</a></li>
                <?php endif; ?>
                <?php wp_list_categories( 'title_li=' ); ?>
            </ul>
        </div>
    </div>

    <div class="item">
        <p class="sort_title">年号</p>
        <div class="sort_box">
            <p class="selected">
                <?php if(is_year()) : ?>
                    <?php echo get_the_archive_title(); ?><i class="fas fa-angle-down"></i>
                <?php else : ?>
                    すべて<i class="fas fa-angle-down"></i>
                <?php endif; ?>
            </p>
            <ul>
                <?php if(is_year()) : ?>
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/">すべて</a></li>
                <?php endif; ?>
                <?php
                    $year=NULL;
                    $args = array(
                    'post_type' => 'post', // 投稿タイプの指定
                    'orderby' => 'date', // 日付順
                    'order' => 'DESC',
                    'posts_per_page' => -1 // すべての投稿を表示する
                    );
                    $the_query = new WP_Query($args);
                    if ( $the_query->have_posts() ) {
                    while ($the_query->have_posts()): $the_query->the_post();
                        // 同じ年の場合
                        if ( $year != get_the_date('Y') ) {
                        // 年を取得
                        $year = get_the_date('Y');
                        // 年別アーカイブリストの表示
                        echo '<li><a href="'.home_url( '/' ).$year.'">'.$year.'年</a></li>';
                        }
                    endwhile;
                    wp_reset_postdata();
                    }
                ?>
            </ul>
        </div>
    </div>
</div>
