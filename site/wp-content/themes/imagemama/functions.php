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
}
/* Fim chamadas */

/* Chamadas para home */
function home_call(){
	wp_enqueue_script( "jCycle", get_bloginfo('template_directory')."/js/jquery.cycle.all.js", array('jquery') );
	
	function jcycle(){
		?>
		<script type="text/javascript">
			jQuery(document).ready(function(){
				jQuery('#col-1').cycle({ 
    				fx:    'fade', 
    				speed:  2000
    			});
			});
		</script>
		<?php
	}
	add_action('wp_head','jcycle');
}
/* Fim chamadas */

?>