<?php
add_action('wp_enqueue_scripts', 'child_theme_oceanwp_enqueue_styles');
function child_theme_oceanwp_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('cpm-child-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_style('cpm-child-js', get_stylesheet_directory_uri() . '/main.js');
}


// add_filter('bbp_get_the_content', 'comment_tinymce_form_defaults', 999, 2);
function comment_tinymce_form_defaults($args) {
	ob_start();
	wp_editor( '', 'comment', array(
		'wpautop' => true,
		'media_buttons' => true,
		'textarea_rows' => '10',
		// 'dfw' => true,
		// 'default_editor' => false,
		// 'drag_drop_upload' => true,
		'teeny' => true,
		'quicktags' => true,
		'tinymce' => array('bold,italic,underline,strikethrough,bullist,numlist,code,blockquote,link,unlink,outdent,indent,|,undo,redo,fullscreen')
	) );
	$args = ob_get_clean();
	return $args;
}

add_filter('bbp_after_get_the_content_parse_args', function($args = array()){
    $args['tinymce'] = true;
    $args['teeny'] = false;
    $args['quicktags'] = true;
    $args['wpautop'] = true;
	$args['media_buttons'] = true;
	$args['textarea_rows'] = '10';
    
    return $args;
});