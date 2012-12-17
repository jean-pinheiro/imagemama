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
						<iframe width="293" height="165" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=+&amp;q=r+coronel+linhares,+950+aldeota&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Cel.+Linhares,+950+-+Aldeota,+Fortaleza+-+Cear%C3%A1,+60170-241&amp;ll=-3.742006,-38.495895&amp;spn=0.002907,0.005252&amp;t=m&amp;z=14&amp;output=embed">
						</iframe>
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