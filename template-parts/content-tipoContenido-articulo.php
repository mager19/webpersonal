<div class="col-md-6 col-sm-12">
	<article class="articulo__item">
		<a href="<?php permalink_link(); ?>">
			<?php the_post_thumbnail( $size = 'imagen-cover');?>
		</a>
		<h3><a href="<?php permalink_link(); ?>"><?php the_title(); ?></a></h3>
		<p><?php the_excerpt(); ?></p>
		<a class="articulo__item__readmore" href="<?php the_permalink(); ?>">Leer Completo</a>
	</article>
</div>