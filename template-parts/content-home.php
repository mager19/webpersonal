<?php 
	$args = array( 'post_type' => array('trabajos', 'post', 'contenido'), 'posts_per_page' => '6');
	$loop = new WP_Query( $args );

	if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="col-6">
			<div class="contenido__item">
				<?php the_post_thumbnail($size = 'imagen-front'); ?>
				<div class="contenido__info">
					<h4>
					<?php 
						if ( get_post_type( get_the_ID() ) == 'trabajos' ) {
						   the_terms($post->ID, 'tipo', '',' - ');
						}
						else if ( get_post_type( get_the_ID() ) == 'contenido' ){
							the_terms($post->ID, 'tipoContenido', '',' - ');
						}
						else the_terms($post->ID, 'category', '',' - ');
					
					?></h4>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
					<p><?php the_excerpt(); ?></p>
				</div>
			</div>							
		</div>
	<!-- post -->
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>	