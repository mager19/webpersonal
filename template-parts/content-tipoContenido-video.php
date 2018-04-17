<div class="col-md-10 offset-md-1 col-sm-12">
	<article class="video__item">
		<a href="<?php permalink_link(); ?>">
			<?php the_post_thumbnail( $size = 'imagen-cover');?>
		</a>
		<h3><a href="<?php permalink_link(); ?>"><?php the_title(); ?></a></h3>
		<p><?php the_excerpt(); ?></p>
	</article>
</div>