<div class = "index-text">
	<h2>しぼり込み</h2>
	<img src = "<?php echo get_template_directory_uri(); ?>/images/index-icon.png" class = "index-pic">
</div>
<div class = "tag-list">
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
	<div class = "popular-posts">
	<h2 class = "left-liner">人気ランキング</h2>
	<ol>
	<?php $popular = new WP_Query(array('posts_per_page'=>5, 'meta_key'=>'popular_posts', 'orderby'=>'meta_value_num', 'order'=>'DESC'));
			while ($popular->have_posts()) : $popular->the_post(); ?>
	<li class = "popular-list">
	<div class="popular_thumbnail">
	  <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
			<?php if ( has_post_thumbnail() ):  ?>
			<?php echo get_the_post_thumbnail($post_id, 'thumbnail'); ?>
			<?php else:  ?>
			 No image
			<?php endif; ?>
			</a>
	  </div>
	<div class="popular_entrytitle">
	  <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
	</div>
	</li>
			<?php endwhile; wp_reset_postdata(); ?>
	</ol>
</div>
<div class = "archive-lists">
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