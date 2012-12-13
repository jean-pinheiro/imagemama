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
	
	<!--script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script-->
	
	<!--script type="text/javascript">
	
		function feedback(linkback){
				$("#body_content").text("Carregando...");
				var link = $(linkback).attr("rel");
				$("#body_content").load(link + " .ref", function() {
					$("#body_content a").each(function(){
					var url = $(this).attr("href");
					$(this).attr("rel", url);
					var urlString = url.toString();
					var urlArray = urlString.split("/");
					if (urlArray.pop()==""){
						var campo = urlArray.length-1;
						var urlFinish = urlArray[campo]}
						else {
							var urlFinish = urlArray.pop();
					}
					$(this).attr("href", "#"+urlFinish);
					});
				});
		}
	
		/* Converte todos os links do menu */
		$(document).ready(function(){
			$("#menu a, #body_content a").each(function(){
				var url = $(this).attr("href");
				$(this).attr("rel", url);
				var urlString = url.toString();
				var urlArray = urlString.split("/");
				if (urlArray.pop()==""){
					var campo = urlArray.length-1;
					var urlFinish = urlArray[campo]}
					else {
						var urlFinish = urlArray.pop();
				}
				$(this).attr("href", "#"+urlFinish);
			});		
		})
		/* -------------------------------- */
		
		/* Faz o load e converte os links carregados */		
		$(document).ready(function(){
			$("#menu a, #body_content a").on("click", function(){
				feedback(this);
			});
		});
		
		/* ---------------------------------------- */
		
	</script-->
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
			<span id="busca"></span>
		</div>
		
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => 'div', 'container_id' => 'menu_top_int', 'menu_id' => 'menu' ) ); ?>
		
	</div>
