<?php 
add_action( 'widgets_init', 'latest_topic_widgets' );
function latest_topic_widgets() {
    register_sidebar( array(
        'name' => __( 'Latest_topic', 'latest-topic' ),
        'id' => 'latest-topic',
        'description' => __( 'Widgets in this area will be shown on topic.', 'latest-topic' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
    ) );
}
?>