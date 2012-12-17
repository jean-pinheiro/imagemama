<?php get_header(); ?>

	<div id="content">
		<div id="refcontent" class="refcontent">
			<div id="main">

				<div id="col-int">
					<?php while ( have_posts() ) : the_post(); ?>
						<p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						<div class="listint">
							<?php the_content(); ?>
						</div>
                    <?php endwhile; ?>

                    <?php if ( ! have_posts() ) : ?>
						<p class="title">Nenhum post encontrado</p>
					<?php endif; ?>

				</div>

				<div id="col-2">

					<div id="where-is-here">
						<div class="where-is-here">Onde Estamos</div>
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

				</div>

			</div>

			<div style="clear:both;"></div>

		</div>
	</div>
	
<?php get_footer(); ?>