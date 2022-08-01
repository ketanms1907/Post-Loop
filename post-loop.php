<div class="row">
<?php
$args = array('posts_per_page' => 4,
'category_name' => 'latest',
'post_status' => 'publish',
'post_type' => 'post',
'order' => 'DESC' );
$posts_array = get_posts( $args );
foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
<div class="col-md-3 col-sm-6 col-xs-6">
<div class="news-box">
<?php
if ( has_post_thumbnail() ) {
echo get_the_post_thumbnail();
}
?>
<h4> <?php the_title(); ?> </h4>
<p><?php the_content(); ?> </p> <p><?php echo get_post_meta(get_the_ID(), "Price", true); ?></p>
</div>
</div>
<?php endforeach;
wp_reset_postdata();?>
</div>
