<?php $args = array('posts_per_page' => '',
'post_status' => 'publish',
'post_type' => '',
'order' => 'DESC' );
$posts_array = get_posts( $args );
foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
<?php endforeach;
wp_reset_postdata();?>
