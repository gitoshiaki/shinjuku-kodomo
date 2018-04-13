<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title> <!-- 管理画面から設定するサイトタイトルが表示される -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/pre.css"  type="text/css" media="screen" /> <!-- 先程作成したスタイルシートをインクルード -->
        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>
  <body>
  <div class = "top-wrapper1">
                    <img src = "<?php echo get_template_directory_uri(); ?>/image/fpic1.png" class = "pic111">
                    <img src = "<?php echo get_template_directory_uri(); ?>/image/fpic2.png" class = "pic222">
                    <h2 class = "prev-theme1">今後の活動</h2>
                    </div>
            <div class = "wp-content1">
                <div class = "icon14">
                    <img src = "<?php echo get_template_directory_uri(); ?>/image/fpic3.png" class = "pic333">
                    <h2 class = "icon-sentence">鑑賞会をみる</h2>
                </div>
                 <div class = "icon24">
                    <img src = "<?php echo get_template_directory_uri(); ?>/image/fpic4.png" class = "pic444">
                    <h2 class = "icon-sentence">その他のイベントをみる</h2>
                    </div>

            <?php
$args = array(
  'post_type' => 'event', /* カスタム投稿名が「event」の場合 */
  'posts_per_page' => 5, /* 表示する数 */
); ?>
 
<?php $my_query = new WP_Query( $args ); ?>
 <div class = "event-posts">
<ul class = "pst1">
 
<?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
 
<!-- ▽ ループ開始 ▽ -->
 
  <li>
    <?php 
if(has_tag("鑑賞会")== "true"){
  ?>
<img src = "<?php echo get_template_directory_uri(); ?>/images/sp-icon.png" class = "sp-icon">
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
            <h2 class = "titleName">
            <?php the_title(); ?>
          </h2>
            <!-- タグ表示 -->
            <p class = "tag-text"><?php the_terms($post->ID,'event_taxonomy'); ?></p>
            <!-- 投稿日時表示 -->
            <p class="post_time"><?php the_time('F jS, Y'); ?></p>
            <div class = "p-sentence">
            <?php the_excerpt(); ?>

</div>
</div>
  </li>
 
<!-- △ ループ終了 △ -->
 
<?php endwhile; ?>
 
</ul>
 
</div>

    <?php wp_footer(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
  </body>
</html>