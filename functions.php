<?php function myblog_scripts() {
	wp_enqueue_style('myblog-style',get_template_directory_uri().'/style.css');
	wp_register_script('jquery','http://ajax.googleapis/com/ajax/libs/jquery/1.3.2/jquery.min.js',fasle,'1.3.2',true);
}
add_action(‘wp_enqueue_scripts’,’myblog_scripts’);
?>