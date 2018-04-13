<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title> <!-- 管理画面から設定するサイトタイトルが表示される -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" /> <!-- 先程作成したスタイルシートをインクルード -->
        <?php wp_head(); ?> <!-- 各種Wordpressスクリプトをインクルード -->
    </head>
  <body>
  <div class = "wrapper">
  <div class = "top-wrapper">
  <img src="<?php echo get_template_directory_uri(); ?>/images/pic1.png" class = "pic1">
  <img src = "<?php echo get_template_directory_uri(); ?>/images/pic2.png" class = "pic2">
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
          <li class="sspost">
            <!-- タイトル表示 -->
            <h2 class = "titleName-1"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
            <?php the_title(); ?>
            </a></h2>
            <!-- タグ表示 -->
            <p class = "tag-text-1"><?php the_tags(); ?></p>
            <!-- 投稿日時表示 -->
            <p class="post_time"><?php the_time('F jS, Y'); ?></p>
                        <!-- アイキャッチ表示 -->
          <div class = "eye-catch-1">
            <?php $thumb = get_the_post_thumbnail( $post_id, 'post-thumbnail' );
            echo $thumb;
            ?>
            </div>
            <div class = "p-sentence">
            <?php the_content(); ?>
</div>
          </li>
        <?php endwhile; else : ?>
          <p><?php _e( '投稿はありません。' ); ?></p>
        <?php endif; ?>
      </ul>
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
    <?php get_sidebar(); ?><!-- サイドバーの表示 -->
  </body>
</html>