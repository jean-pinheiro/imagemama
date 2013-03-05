<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>
		<?php
			wp_title( '|', true, 'right' );
			bloginfo( 'name' );
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		?>
	</title>
	<?php general_call(); ?>
	<?php wp_head(); ?>
</head>

<body>

<div id="body">
	
	<div id="header">
		<div id="top">
			<a href="<?php bloginfo('url') ?>" title="Imagem Mama">
				<h1 id="logo" class="txtindent"><?php bloginfo('name') ?></h1>
			</a>
			<span id="slogan"></span>
			<span id="icon-tel"></span>
			<a href="<?php bloginfo('url'); ?>/fale-conosco" title="Fale Conosco">
				<h2 id="icon-mail" class="txtindent">Contato</h2>
			</a>
			<span id="icon-busca"></span>
			<span id="tel"></span>
			<a href="<?php bloginfo('url'); ?>/fale-conosco" title="Fale Conosco">
				<span id="mail"></span>
			</a>
			<span id="busca">
				<form name="form1" method="get" action="<?php bloginfo('url') ?>" role="search">
                   <input type="text" name="s" id="s" value="O que você procura?" onfocus="if(this.value=='O que você procura?'){this.value=''};" onblur="if(this.value==''){this.value='O que você procura?'};" class="form" holder="O que você procura?" />
                </form>
			</span>
		</div>
		
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'div', 'container_id' => 'menu_top_int', 'menu_id' => 'menu' ) ); ?>
		
	</div>
