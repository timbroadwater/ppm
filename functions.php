<?php
add_action( 'after_setup_theme', 'ppm2019_setup' );
function ppm2019_setup() {
load_theme_textdomain( 'ppm2019', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'ppm2019' ) ) );
}
add_action( 'wp_enqueue_scripts', 'ppm2019_load_scripts' );
function ppm2019_load_scripts() {
wp_enqueue_style( 'ppm2019-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'ppm2019_footer_scripts' );
function ppm2019_footer_scripts() {
?>
<script>
jQuery(document).ready(function ($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});
</script>
<?php
}
add_filter( 'document_title_separator', 'ppm2019_document_title_separator' );
function ppm2019_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'ppm2019_title' );
function ppm2019_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'ppm2019_read_more_link' );
function ppm2019_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'ppm2019_excerpt_read_more_link' );
function ppm2019_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'ppm2019_image_insert_override' );
function ppm2019_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'ppm2019_widgets_init' );
function ppm2019_widgets_init() {
register_sidebar( array(
'name' => esc_html__( 'Sidebar Widget Area', 'ppm2019' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => '</li>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Left',
'id' => 'footer-sidebar-1',
'description' => 'Address in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Middle',
'id' => 'footer-sidebar-2',
'description' => 'Social media in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array(
'name' => 'Footer Right',
'id' => 'footer-sidebar-3',
'description' => 'Contact in the footer area',
'before_widget' => '<aside id="%1$s" class="widget %2$s">',
'after_widget' => '</aside>',
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'ppm2019_pingback_header' );
function ppm2019_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'ppm2019_enqueue_comment_reply_script' );
function ppm2019_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function ppm2019_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'ppm2019_comment_count', 0 );
function ppm2019_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}