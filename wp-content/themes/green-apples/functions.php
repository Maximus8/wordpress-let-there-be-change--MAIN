<?php

add_action( 'after_setup_theme', 'greenapples_add_editor_styles' );
add_action( 'after_setup_theme', 'greenapples_setup' );
function greenapples_setup()
{
load_theme_textdomain( 'greenapples', get_template_directory() . '/languages' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
function register_my_menu() {
  register_nav_menu('main',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );
}

add_theme_support( 'custom-background' );
function greenapples_add_editor_styles() {
    add_editor_style( 'custom-editor-style.css' );
}
add_action( 'wp_enqueue_scripts', 'greenapples_load_scripts' );
function greenapples_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'greenapples_enqueue_comment_reply_script' );
function greenapples_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'greenapples_title' );
function greenapples_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'greenapples_filter_wp_title' );
function greenapples_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'greenapples_widgets_init' );
function greenapples_widgets_init()
{
register_sidebar( array (
'name' => __( 'sidebar', 'greenapples' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

register_sidebar( array (
'name' => __('Right Widget Area', 'greenapples'),
'id' => 'secondary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );

}
function greenapples_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'greenapples_comments_number' );
function greenapples_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}