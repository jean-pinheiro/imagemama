<?php get_header(); ?>

	<div id="content">
		<div id="refcontent" class="refcontent">
			<div id="main">

				<div id="col-int">
					<?php while ( have_posts() ) : the_post(); ?>
						<a class="titlecat" href="<?php bloginfo('url') ?>/?cat=<?php the_category_ID(); ?>"><?php single_cat_title(); ?></a>
						<p class="title-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						<span class="facebottom-int"><?php echo do_shortcode( '[facebottom]' ); ?></span>
   	                    <span class="twitterbottom-int"><?php echo do_shortcode( '[twitterbottom]' ); ?></span>
   	                    <span class="plusbottom-int"><?php echo do_shortcode( '[plusbottom]' ); ?></span>
   	                    <div class="destaque-int">
   	                    	<?php 
   	                    	if ( has_post_thumbnail() ) {
   	                    		the_post_thumbnail( 'destaque-interna', array('class' => 'img-destaque')); 
   	                    	} else {
   	                    		echo "<img src='".get_bloginfo('template_directory')."/images/destaque.jpg' class='img-destaque' />";
   	                    	}
   	                    	?>
   	                    	<a href="<?php the_permalink(); ?>" class="more-int">LEIA MAIS</a>
   	                    </div>

						<div class="listint">
							<?php the_excerpt(); ?>
						</div>

                    <?php endwhile; ?>

                    <?php if ( ! have_posts() ) : ?>
						<p class="title">Nenhum post encontrado</p>
					<?php endif; ?>

				</div>

				<div id="col-2">

					<div id="where-is-here">
						<h2 class="where-is-here">Onde Estamos</h2>
					</div>
					<div id="map">
					</div>
					<div id="address-1">
						<p class="first">Medical Ceniter</p>
						<p class="second">
							Rua Coronel Linhares, 950 Andar - L-2 - Sala 07 <br />
							Aldeota - Fortaleza-Ce - Fone/Fax: 85 3261.7172 - 3261.8902
						</p>
					</div>

					<?php
						if (is_active_sidebar('sidebar-principal') ) { dynamic_sidebar('sidebar-principal'); }
					?>

				</div>

			</div>

			<div style="clear:both;"></div>

		</div>
	</div>
	
<?php get_footer(); ?>