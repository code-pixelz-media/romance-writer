<?php
add_action('wp_enqueue_scripts', 'child_theme_oceanwp_enqueue_styles');
function child_theme_oceanwp_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('cpm-child-style', get_stylesheet_directory_uri() . '/style.css');
	wp_enqueue_script('cpm-child-js', get_stylesheet_directory_uri() . '/main.js');
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


// registering custom sidebar
// add_action( 'widgets_init', 'latest_topic_widgets' );
// function latest_topic_widgets() {
//     register_sidebar( array(
//         'name' => __( 'Latest_topic', 'latest-topic' ),
//         'id' => 'latest-topic',
//         'description' => __( 'Widgets in this area will be shown on topic.', 'latest-topic' ),
//         'before_widget' => '<li id="%1$s" class="widget %2$s">',
//     'after_widget'  => '</li>',
//     'before_title'  => '<h2 class="widgettitle">',
//     'after_title'   => '</h2>',
//     ) );
// }