<?php get_header(); ?>

	<div id="content">
		<div id="refcontent">
			<div id="main">
				<div id="col-1">
					<ul>
					<?php query_posts( array ( 'cat' => '1', 'showposts' => 2 ) ); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
						<?php if ( has_post_thumbnail() ) { ?>
							<li>
   	                    		<?php the_post_thumbnail( 'banner', array('class' => 'mini')); ?>
   	                    		<div class="tarja-transp"><?php the_title(); ?></div>
   	                    		<div class="social">
   	                    			<!--span id="face-bottom"><?php /* echo do_shortcode( '[wpsr_facebook]' ) */ ?></span>
   	                    			<span id="twitter-bottom"><?php /* echo do_shortcode( '[wpsr_retweet]' ) */ ?></span>
   	                    			<span id="plus-bottom"><?php /* echo do_shortcode( '[wpsr_plusone]' ) */ ?></span-->
   	                    		</div>
   	                    	</li>
	                    <?php } ?>
                    <?php endwhile; ?>
                	<?php wp_reset_query(); ?>
                	</ul>
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
			<div id="listpages">
				<ul>
					<?php query_posts( array ( 'cat' => '14', 'showposts' => 4 ) ); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
						<?php if ( has_post_thumbnail() ) { ?>
		                   	<li>
								<p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
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
				<?php $sticky = get_option('sticky_posts') ; ?>
				<?php query_posts( array ( 'category_name' => 'espaco-do-medico', 'showposts' => 1, 'post__in' => $sticky ) ); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="cat-int-1">
                    	<div class="title_category">
                    		<a href="<?php bloginfo('url') ?>/?cat=<?php the_category_ID(); ?>"><?php single_cat_title(); ?></a>
                    	</div>
						<p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						<div class="listint">
							<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
						</div>
						<a href="<?php the_permalink(); ?>" class="more">Leia mais</a>
					</div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>

				<?php $sticky = get_option('sticky_posts') ; ?>
				<?php query_posts( array ( 'category_name' => 'espaco-do-paciente', 'showposts' => 1, 'post__in' => $sticky ) ); ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                    <div class="cat-int-2">
                    	<div class="title_category">
                    		<a href="<?php bloginfo('url') ?>/?cat=<?php the_category_ID(); ?>"><?php single_cat_title(); ?></a>
                    	</div>
						<p class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
						<div class="listint">
							<a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
						</div>
						<a href="<?php the_permalink(); ?>" class="more">Leia mais</a>
					</div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>

			</div>
		</div>
	</div>
	
<?php get_footer(); ?>