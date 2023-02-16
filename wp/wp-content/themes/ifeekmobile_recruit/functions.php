<?php

//WordPressのバージョン表示を削除
remove_action('wp_head', 'wp_generator');

add_editor_style('assets/css/cmn.css');
add_editor_style('editor-style.css'); //エディタ専用


//ロゴ変更
function my_login_style()
{
    wp_enqueue_style('custom-login', get_template_directory_uri() . '/assets/css/login.css');
}
add_action('login_enqueue_scripts', 'my_login_style');

// ロゴのリンク先を指定
function my_login_logo_url()
{
    return get_bloginfo('url');
}
add_filter('login_headerurl', 'my_login_logo_url');
// ロゴのtitleテキストを指定
function my_login_logo_tit()
{
    return get_option('blogname');
}
add_filter('login_headertitle', 'my_login_logo_tit');



// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}



/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
  if (is_category()) {
    $title = single_cat_title('',false);
  } elseif (is_tag()) {
    $title = single_tag_title('',false);
  } elseif (is_tax()) {
    $title = single_term_title('',false);
  } elseif (is_post_type_archive() ){
    $title = post_type_archive_title('',false);
  } elseif (is_month()) {
    $title = get_the_time('Y年n月');
  } elseif (is_year()) {
    $title = get_the_time('Y年');
  } elseif (is_search()) {
    $title = '検索結果：'.esc_html( get_search_query(false) );
  } elseif (is_404()) {
    $title = '「404」ページが見つかりません';
  } else {

  }
  return $title;
});



//固定ページ自動整形解除
add_filter('the_content', 'wpautop_filter', 9);
function wpautop_filter($content)
{
  global $post;
  $remove_filter = false;

  $arr_types = array('page'); //自動整形を無効にする投稿タイプを記述
  $post_type = get_post_type($post->ID);
  if (in_array($post_type, $arr_types)) {
    $remove_filter = true;
  }

  if ($remove_filter) {
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
  }

  return $content;
}



// spanの自動削除を解除
function custom_tiny_mce_before_init($init_array)
{
  $init_array['valid_elements'] = '*[*]';
  $init_array['extended_valid_elements'] = '*[*]';
  return $init_array;
}
add_filter('tiny_mce_before_init', 'custom_tiny_mce_before_init');


// tableのwidth height自動追加を解除
function customize_tinymce_settings($mceInit)
{
  $mceInit['table_resize_bars'] = false;
  $mceInit['object_resizing'] = "img";
  return $mceInit;
}
add_filter('tiny_mce_before_init', 'customize_tinymce_settings', 0);


// 固定ページの親子関係の設定
function page_is_ancestor_of($slug)
{
  global $post;

  // 親か判別したい固定ページスラッグからページ情報を取得
  $page = get_page_by_path($slug);
  $result = false;
  if (isset($page)) {
    foreach ($post->ancestors as $ancestor) {
      if ($ancestor == $page->ID) {
        $result = true;
      }
    }
  }
  return $result;
}



// アイキャッチ画像を使用
add_theme_support('post-thumbnails');



// 投稿の表示を変更
add_action( 'admin_menu', 'edit_admin_menus' );
function edit_admin_menus() {
  global $menu;
  global $submenu;
  $menu[5][0] = '活動報告';
  $submenu['edit.php'][5][0] = '活動報告一覧';
}

//メディアの移動
function customize_menus(){
  global $menu;
  $menu[19] = $menu[10];
  unset($menu[10]);
}
add_action( 'admin_menu', 'customize_menus' );


// 親ページの条件分岐
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}

//カスタム投稿タイプの検索
add_filter('template_include', 'custom_search_template');
function custom_search_template($template)
{
  if (is_search()) {
    $post_types = get_query_var('post_type');
    foreach ((array) $post_types as $post_type) {
      $templates[] = "search-{$post_type}.php";
    }
    $templates[] = 'search.php';
    $template = get_query_template('search', $templates);
  }
  return $template;
}


//検索対象にカスタムフィールドを含める
function cf_search_join( $join ) {
	global $wpdb;
	if ( is_search() ) {
		$join .= ' LEFT JOIN ' . $wpdb->postmeta . ' ON ' . $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
	}
	return $join;
}
add_filter( 'posts_join', 'cf_search_join' );

function cf_search_where( $where ) {
	global $wpdb;
	if ( is_search() ) {
		$where = preg_replace(
			"/\(\s*" . $wpdb->posts . ".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
			"(" . $wpdb->posts . ".post_title LIKE $1) OR (" . $wpdb->postmeta . ".meta_value LIKE $1)", $where );

		// 特定のカスタムフィールドを検索対象から外す（※１）
//		$where .= " AND (" . $wpdb->postmeta . ".meta_key NOT LIKE 'number')";
//		$where .= " AND (" . $wpdb->postmeta . ".meta_key NOT LIKE 'zip')";
//		$where .= " AND (" . $wpdb->postmeta . ".meta_key NOT LIKE 'access')";
	}
	return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

function cf_search_distinct( $where ) {
	global $wpdb;
	if ( is_search() ) {
		return "DISTINCT";
	}
	return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

/* 投稿アーカイブページの作成 */
function post_has_archive( $args, $post_type ) {

	if ( 'post' == $post_type ) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'columns'; //任意のスラッグ名
	}
	return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

// 記事の続きを読むを消す
function new_excerpt_more($more) {
  return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

// 投稿一覧本文抜粋の文字数変更
function wpdocs_custom_excerpt_length( $length ) {
  return 200;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



// contact form 7 確認用メールアドレス validation 追加
add_filter( 'wpcf7_validate_email', 'wpcf7_validate_email_filter_extend', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_validate_email_filter_extend', 11, 2 );
function wpcf7_validate_email_filter_extend( $result, $tag ) {
  $type = $tag['type'];
  $name = $tag['name'];
  $_POST[$name] = trim( strtr( (string) $_POST[$name], "n", " " ) );
  if ( 'email' == $type || 'email*' == $type ) {
    if (preg_match('/(.*)_confirm$/', $name, $matches)){ //確認用メルアド入力フォーム名を ○○○_confirm としています。
      $target_name = $matches[1];
      if ($_POST[$name] != $_POST[$target_name]) {
        if (method_exists($result, 'invalidate')) {
          $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
        } else {
          $result['valid'] = false;
          $result['reason'][$name] = '確認用のメールアドレスが一致していません';
        }
      }
    }
  }
  return $result;
}



//カスタム投稿
add_action('init', 'create_post_type');
function create_post_type()
{
  // 政策
  register_post_type(
    'policies',
    array(
      'label' => '政策',
      'labels' => array(
        'name' => __('政策'),
        'singular_name' => __('政策'),
        'all_items' => __('政策一覧')
      ),
      'public' => true,
      'menu_position' => 4,
      'supports' => array(
        'title','editor','thumbnail',
        'custom-fields','excerpt','author','trackbacks',
        'comments','revisions','page-attributes'
      ),
      'has_archive' => false
    )
  );

  // 実績
  register_post_type(
    'results',
    array(
      'label' => '実績',
      'labels' => array(
        'name' => __('実績'),
        'singular_name' => __('実績'),
        'all_items' => __('実績一覧')
      ),
      'public' => true,
      'menu_position' => 4,
      'supports' => array(
        'title','editor','thumbnail',
        'custom-fields','excerpt','author','trackbacks',
        'comments','revisions','page-attributes'
      ),
      'has_archive' => false
    )
  );

  register_taxonomy(
    'results_year',
    'results',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => '年',
      'sigular_label' => '年',
      'public' => true,
      'show_ui' => true,
    )
  );

  // なかむらギャラリー
  register_post_type(
    'gallery',
    array(
      'label' => '動画で見る',
      'labels' => array(
        'name' => __('なかむらギャラリー'),
        'singular_name' => __('なかむらギャラリー'),
        'all_items' => __('なかむらギャラリー一覧')
      ),
      'public' => true,
      'menu_position' => 4,
      'supports' => array(
        'title','editor','thumbnail',
        'custom-fields','excerpt','author','trackbacks',
        'comments','revisions','page-attributes'
      ),
      'has_archive' => true
    )
  );

  register_taxonomy(
    'gallery_cat',
    'gallery',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'sigular_label' => 'カテゴリー',
      'public' => true,
      'show_ui' => true,
    )
  );
}
