<?php //子テーマで利用する関数を書く

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}
// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');
// サイドバーの表示
register_sidebar(); 



// 人気記事設定
function my_custom_popular_posts($post_id) {
    $count_key = 'popular_posts';
    $count = get_post_meta($post_id, $count_key, true);
    if ($count == '') {
            $count = 0;
            delete_post_meta($post_id, $count_key);
            add_post_meta($post_id, $count_key, '0');
    } else {
            $count++;
            update_post_meta($post_id, $count_key, $count);
    }
}
function my_custom_track_posts($post_id) {
    if (!is_single()) return;
    if (empty($post_id)) {
            global $post;
            $post_id = $post->ID;
    }
    my_custom_popular_posts($post_id);
}
add_action('wp_head', 'my_custom_track_posts');

function my_custom_display_popular_posts($query) {
 
    if ( !is_admin() && $query->is_main_query() ) {
             
            $get_pop = (isset($_GET['popular-posts']) && !empty($_GET['popular-posts'])) ? true : false;
             
            if ($get_pop) {
                    $query->set('meta_key', 'popular_posts');
                    $query->set('orderby', 'meta_value_num');
                    $query->set('order', 'DESC');
                    add_action('loop_start' , 'my_custom__before_loop');
                    }
            }
    }
    add_action('pre_get_posts', 'my_custom_display_popular_posts');
    function my_custom__before_loop() {
            echo '<h3>アクセス数が多い人気順</h3>';
    }

    set_post_thumbnail_size( 400,400, array( 'center', 'center')  ); // 50 pixels wide by 50 pixels tall, crop from the center

//     ページネーション
function pagination($pages = '', $range = 2)
{
     $showitems = ($range * 2)+1;//表示するページ数（５ページを表示）

     global $paged;//現在のページ値
     if(empty($paged)) $paged = 1;//デフォルトのページ

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;//全ページ数を取得
         if(!$pages)//全ページ数が空の場合は、１とする
         {
             $pages = 1;
         }
     }

     if(1 != $pages)//全ページが１でない場合はページネーションを表示する
     {
		 echo "<div class=\"pagenation\">\n";
		 echo "<ul>\n";
		 //Prev：現在のページ値が１より大きい場合は表示
         if($paged > 1) echo "<li class=\"prev\"><a href='".get_pagenum_link($paged - 1)."'>前へ</a></li>\n";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                //三項演算子での条件分岐
                echo ($paged == $i)? "<li class=\"active\">".$i."</li>\n":"<li><a href='".get_pagenum_link($i)."'>".$i."</a></li>\n";
             }
         }
		//Next：総ページ数より現在のページ値が小さい場合は表示
		if ($paged < $pages) echo "<li class=\"next\"><a href=\"".get_pagenum_link($paged + 1)."\">次へ</a></li>\n";
		echo "</ul>\n";
		echo "</div>\n";
     }
}
//　jQueryを使えるようにする
//---------------------------------------------------------------------------
function add_jquery_scripts() {
    if(is_admin()) return; 
    wp_deregister_script( 'jquery'); 
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.2.min.js', array(), false, false);
    wp_enqueue_script( 'jquery-mig', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', array(), false, false);
}
add_action('wp_enqueue_scripts', 'add_jquery_scripts');

//カスタム投稿タイプ
//カスタム投稿タイプ
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type(
        'event', //投稿タイプ名
		array(
			'label' => '店舗情報',
			'description' => '店舗の紹介です',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'rewrite' => true,
			'query_var' => false,
			'has_archive' => true,
			'exclude_from_search' => false,
			'menu_position' => 20,
			'supports' => array(
				'title',
				'editor',
				'revisions',
                'page-attributes',
                'thumbnail',  // アイキャッチ画像
                'author',
                'custom-fields'
                ),
			'taxonomies' => array('event_taxonomy'),
			'labels' => array (
				'name' => '店舗情報',
				'all_items' => '店舗情報一覧'
			)
		)
	);
	
	register_taxonomy(
		'event_taxonomy', // 追加するタクソノミー名（英小文字とアンダースコアのみ）
		'event',  // どのカスタム投稿タイプに追加するか
		array(
			'hierarchical' => false,
            'label' => 'タグ',
            'labels' => array(
            'all_items' => 'タグ一覧',  // 投稿画面の右カラムに表示されるテキスト（投稿で言うタグ一覧）
            'add_new_item' => '新規タグを追加'  // 投稿画面の右カラムに表示されるタグ追加リンク
          ),
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'フロントページ/event'),
			'singular_label' => 'タグ'
		)
	);
}
// jquery読み込み
function my_scripts_method() {
  wp_enqueue_script(
    'custom-script',
    get_stylesheet_directory_uri().'/js/custom_script.js',
    array( 'jquery' ),
    '1.0',
    true
  );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

?>