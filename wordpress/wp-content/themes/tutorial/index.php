<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title> <!-- 管理画面から設定するサイトタイトルが表示される -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css"  type="text/css" media="screen" /> <!-- 先程作成したスタイルシートをインクルード -->
                <!-- ビューポートの設定 -->
	<meta name="viewport" content="width=device-width,initial-scale=1">
        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>
  <body>
  <div class = "wrapper">
  <div class = "top-wrapper">
    
  <img src="<?php echo get_template_directory_uri(); ?>/images/pic1.png" class = "pic1">
  <img src = "<?php echo get_template_directory_uri(); ?>/images/pic2.png" class = "pic2">
  <img src = "<?php echo get_template_directory_uri(); ?>/images/pic-smh.png" class = "pic-smh">
   <h2 class = "prev-theme">過去の活動</h2>
  </div>
  <section class = "top-line"></section>
  <div class = "contents-wrapper">
           <!-- 背景画像 -->
           <img src = "<?php echo get_template_directory_uri(); ?>/images/bg-icon1.png" class = "bg icon1">
           <img src = "<?php echo get_template_directory_uri(); ?>/images/bg-icon2.png" class = "bg icon2">
           <img src = "<?php echo get_template_directory_uri(); ?>/images/bg-icon3.png" class = "bg icon3">
           <img src = "<?php echo get_template_directory_uri(); ?>/images/bg-icon4.png" class = "bg icon4">

    <div class="p-content">
      <ul class="posts">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <li class="post">
          <?php 
if(has_tag("鑑賞会")== "true"){
  ?>
<img src = "<?php echo get_template_directory_uri(); ?>/images/sp-icon.png" class = "sp-icon">
<?php
}else{
?>
  <img src = "<?php echo get_template_directory_uri(); ?>/images/sp-icon2.png" class = "sp-icon22">
<?php
}
?>
            <!-- アイキャッチ表示 -->
          <div class = "eye-catch">
            <?php $thumb = get_the_post_thumbnail( $post_id, 'post-thumbnail' );
            echo $thumb;
            ?>
            </div>
            <div class = "post-contents">
            <!-- タイトル表示 -->
            <h2 class = "titleName"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
            </a></h2>
            <!-- タグ表示 -->
            <p class = "tag-text"><?php the_tags('<span class="ptags">','</span><span class="ptags">','</span>'); ?></p>
            <!-- 投稿日時表示 -->
            <p class="post_time"><?php the_time('F jS, Y'); ?></p>
            <div class = "p-sentence">
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">続きを読む</a>
</div>
</div>
          </li>
        <?php endwhile; else : ?>
          <p><?php _e( '投稿はありません。' ); ?></p>
        <?php endif; ?>
      </ul>
      <!-- ぺージネーション -->
      <div class = "pp-menu">
      <?php
if (function_exists("pagination")) {
	pagination($additional_loop->max_num_pages);
}
?>
</div>

<!-- スマホ版アーカイブ -->
<div class = "index-text_smh">
	<h2>しぼり込み</h2>
	<img src = "<?php echo get_template_directory_uri(); ?>/images/index-icon.png" class = "index-pic">
</div>
<div class = "tag-list_smh">
      <h2 class = "left-liner">タグ一覧</h2>
    <ul>
<?php
$posttags = get_tags();
if ($posttags) {
foreach($posttags as $tag) {
echo '<li class= "tag-each"><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a> ('. $tag->count . ")</li>";
}         
}
?>
</ul>
	</div>
	
<div class = "archive-lists_smh">
<h2 class = "left-liner">更新月一覧</h2>
<ul class="archive-list">
<?php
$year_prev = null;
$months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,
                                    YEAR( post_date ) AS year,
                                    COUNT( id ) as post_count FROM $wpdb->posts
                                    WHERE post_status = 'publish' and post_date <= now( )
                                    and post_type = 'post'
                                    GROUP BY month , year
                                    ORDER BY post_date DESC");
foreach($months as $month) :
$year_current = $month->year;
if ($year_current != $year_prev){
if ($year_prev != null){?>
            </ul></li>
        <?php } ?>
<li><h2><span><?php echo $month->year; ?></h2></span><ul>
    <?php } ?>
    <li>
        <a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>">
            <?php echo date("n", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>月
            (<?php echo $month->post_count; ?>)
        </a>
    </li>
    <?php $year_prev = $year_current;
    endforeach; ?>
</ul></li></ul>
</div>


    <?php get_sidebar(); ?><!-- サイドバーの表示 -->

    </div>
    <section class = "top-line"></section>
            <div class = "footer">
                    <img src = "<?php echo get_template_directory_uri(); ?>/images/pic3.png" class = "pic3">
                    <img src = "<?php echo get_template_directory_uri(); ?>/images/pic4.png" class = "pic4">
                    <img src = "<?php echo get_template_directory_uri(); ?>/images/pic5.png" class = "pic5">
            </div>
    </div>
</div>
    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
  </body>
</html>