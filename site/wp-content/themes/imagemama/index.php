<?php get_header(); ?>

	<div id="content">
		<div id="refcontent">
			<div id="main">
				<div id="col-1">
					<?php query_posts( array ( 'cat' => '1', 'showposts' => 2 ) ); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
						<?php if ( has_post_thumbnail() ) { ?>
   	                    	<?php the_post_thumbnail( 'banner', array('class' => 'mini')); ?>
	                    <?php } ?>
                    <?php endwhile; ?>
                	<?php wp_reset_query(); ?>
				</div>
				<div id="col-2">
					<iframe width="280" height="165" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=+&amp;q=r+coronel+linhares,+950+aldeota&amp;ie=UTF8&amp;hq=&amp;hnear=R.+Cel.+Linhares,+950+-+Aldeota,+Fortaleza+-+Cear%C3%A1,+60170-241&amp;ll=-3.742006,-38.495895&amp;spn=0.002907,0.005252&amp;t=m&amp;z=14&amp;output=embed">
					</iframe>
				</div>
			</div>
			<div id="listpages">
				<ul>
					<?php query_posts( array ( 'cat' => '14', 'showposts' => 4 ) ); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
						<?php if ( has_post_thumbnail() ) { ?>
		                   	<li>
								<a href="<?php the_permalink(); ?>"><p class="title"><?php the_title(); ?></p></a>
								<?php the_post_thumbnail( 'services', array('class' => 'mini')); ?>
								<div class="listint">
									<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
								</div>
							</li>
	                    <?php } ?>
                    <?php endwhile; ?>
                	<?php wp_reset_query(); ?>
				</ul>
			</div>
			<div id="categories">
				<?php query_posts( array ( 'category_name' => 'espaco-do-paciente', 'showposts' => 1 ) ); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="cat-int">
                    	<div class="title_category">
                    		<a href="<?php bloginfo('url') ?>/espaco-do-paciente"><?php single_cat_title(); ?></a>
                    	</div>
						<a href="<?php the_permalink(); ?>"><p class="title"><?php the_title(); ?></p></a>
						<div class="listint">
							<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
						</div>
						<div class="more">
							<a href="<?php the_permalink(); ?>">Leia mais</a>
						</div>
					</div>
                    <?php endwhile; ?>
                	<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>