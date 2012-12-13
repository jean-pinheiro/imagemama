<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width" />
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
	<?php if(is_home()){home_call();} ?>
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
			<a href="<?php bloginfo('url'); ?>/contato" title="Contato">
				<h2 id="icon-mail" class="txtindent">Contato</h2>
			</a>
			<span id="icon-busca"></span>
			<span id="tel"></span>
			<a href="<?php bloginfo('url'); ?>/contato" title="Contato">
				<span id="mail"></span>
			</a>
			<span id="busca">
				<form name="form1" method="get" action="" role="search">
                   <input type="text" name="s" id="s" value="Procurar" onfocus="if(this.value=='Procurar'){this.value=''};" onblur="if(this.value==''){this.value='Procurar'};" class="form" holder="O que Você procura?" />
                </form>
			</span>
		</div>
		
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'div', 'container_id' => 'menu_top_int', 'menu_id' => 'menu' ) ); ?>
		
	</div>
