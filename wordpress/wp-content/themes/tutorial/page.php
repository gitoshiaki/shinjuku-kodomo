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
            <!-- タイトル表示 -->
            <h2 class = "titleName_smh"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
            </a></h2>
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
    <?php get_sidebar(); ?><!-- サイドバーの表示 -->
  </body>
</html>