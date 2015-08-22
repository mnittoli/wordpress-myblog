<?php function myblog_scripts() {
	wp_enqueue_style( ‘style’,get_stylesheet_uri() );
}
add_action(‘wp_enqueue_scripts’,’myblog_scripts’);
?>