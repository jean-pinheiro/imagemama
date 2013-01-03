<?php 

include_once 'includes/thumbs.php';
include_once 'includes/sidebar.php';
include_once 'includes/social-media.php';

add_theme_support( 'automatic-feed-links' );
register_nav_menus( array('header-menu' => __( 'Menu Principal' ) ) );
register_nav_menus( array('footer-menu' => __( 'Menu Rodapé' ) ) );

/* Chamadas gerais */
function general_call(){
	wp_enqueue_style( "reset", get_bloginfo('template_directory')."/css/reset.css", "", "1.0", "all" );
	wp_enqueue_style( "general", get_bloginfo('template_directory')."/css/general.css", "", "1.0", "all" );
	wp_enqueue_script( "jCycle", get_bloginfo('template_directory')."/js/jquery.cycle.all.js", array('jquery') );
	wp_enqueue_script( "ajax", get_bloginfo('template_directory')."/js/ajax.js", array('jquery') );
	wp_enqueue_script( "Custom", get_bloginfo('template_directory')."/js/custom_script.js", array('jCycle') );
}
/* Fim chamadas */


function limit_posts_per_page() {
	if ( is_category() || is_search() ){return 2;}
}

add_filter('pre_option_posts_per_page', 'limit_posts_per_page');

?>
