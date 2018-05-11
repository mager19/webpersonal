<section class="cabezal">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php 

					$args = array( 'page_id' => 14);
					$loop = new WP_Query( $args );

					if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<h2><?php the_content(); ?></h2>
					<!-- post -->
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					<!-- no posts found -->
					<?php endif; 

				 ?>
			</div>
			<div class="col-12">
				<div class="menu__social">
					<nav>
						<?php
						wp_nav_menu( array(
							'theme_location' => 'menuSocial',
							'menu_class' 	 => 'menuSocial'
						) );
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</div>
	</div>
</section>