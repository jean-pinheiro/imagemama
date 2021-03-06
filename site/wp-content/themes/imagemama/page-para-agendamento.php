<?php get_header(); ?>

	<div id="content">
		<div id="refcontent" class="refcontent">
			<div id="main">

				<div id="col-int">
					<a class="titlecat" href="<?php $link = get_permalink(); echo $link; ?>/ ?>"><?php the_title(); ?></a>
					<?php while ( have_posts() ) : the_post(); ?>
   	                    <div class="destaque-int">
   	                    	<?php 
   	                    	if ( has_post_thumbnail() ) {
   	                    		the_post_thumbnail( 'destaque-interna', array('class' => 'img-destaque')); 
   	                    	}
   	                    	?>
   	                    </div>

						<div class="listint" style="border: none;">
							<?php the_content(); ?>
						</div>

						<?php previous_posts_link( __( 'anterior' ) ); ?>
						<?php next_posts_link( __( 'próxima') ); ?>

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