<div class="col-md-4 col-sm-6">
	<article class="podcast__item">
		<a href="<?php permalink_link(); ?>">
			<?php the_post_thumbnail( $size = 'imagen-front');?>
		</a>
		<h3><a href="<?php permalink_link(); ?>"><?php the_title(); ?></a></h3>
		<p><?php the_excerpt(); ?></p>
		<audio controls>
		  <source src="<?php the_field('urlLarga'); ?>" type="audio/mpeg">
			Your browser does not support the audio element.
		</audio>

		<a class="ver_entrada" href="<?php the_permalink(); ?>">Ver entrada Completa</a>
	</article>
</div>