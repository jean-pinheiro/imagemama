<?php 

include_once 'includes/thumbs.php';
include_once 'includes/sidebar.php';

add_theme_support( 'automatic-feed-links' );
register_nav_menus( array('header-menu' => __( 'Menu Principal' ) ) );
register_nav_menus( array('footer-menu' => __( 'Menu Rodapé' ) ) );

/* Chamadas gerais */
function general_call(){
	wp_enqueue_style( "reset", get_bloginfo('template_directory')."/css/reset.css", "", "1.0", "all" );
	wp_enqueue_style( "general", get_bloginfo('template_directory')."/css/general.css", "", "1.0", "all" );
	wp_enqueue_script( "jCycle", get_bloginfo('template_directory')."/js/jquery.cycle.all.js", array('jquery') );
	wp_enqueue_script( "Ajax", get_bloginfo('template_directory')."/js/ajax.js", array('jquery') ) ;

	function jcycle(){
		?>
		<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery('#col-1 ul').cycle({ 
    				fx:    'fade', 
    				speed:  2000
    			});
			});
			jQuery(window).load(function(){
				var frame = '<iframe width="293" height="165" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=+&amp;q=r+coronel+linhares,+950+aldeota&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Cel.+Linhares,+950+-+Aldeota,+Fortaleza+-+Cear%C3%A1,+60170-241&amp;ll=-3.742006,-38.495895&amp;spn=0.002907,0.005252&amp;t=m&amp;z=14&amp;output=embed"></iframe>'
				jQuery("#map").append(frame);
			});
		</script>
		<?php
	}
	add_action('wp_head','jcycle');

}
/* Fim chamadas */


function limit_posts_per_page() {
	if ( is_category() || is_search() ){return 2;}
}

add_filter('pre_option_posts_per_page', 'limit_posts_per_page');

?>
