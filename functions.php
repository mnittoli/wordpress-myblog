<?php function new_excerpt_more( $more ) {
	return ' <a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'Read More', 'your-text-domain' ) . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
?>
<?php function myblog_scripts() {
	wp_enqueue_style('myblog-style',get_template_directory_uri().'/style.css');
	wp_register_script('jquery','http://ajax.googleapis/com/ajax/libs/jquery/1.3.2/jquery.min.js',fasle,'1.3.2',true);
}
add_action(‘wp_enqueue_scripts’,’myblog_scripts’);
?>
<?php function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' ); ?>
<?php
add_theme_support( 'post-thumbnails' ); ?>