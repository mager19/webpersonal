<div class="col-md-6 col-sm-12">
	<article class="trabajo__item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="trabajo__categoria">
			<a href="#"><?php the_terms($post->ID, 'tipo', '','  ,  '); ?></a>
		</div>			
		<a href="<?php permalink_link(); ?>">
			<?php the_post_thumbnail( $size = 'imagen-trabajos');?>
		</a>
		<h3><a href="<?php permalink_link(); ?>"><?php the_title(); ?></a></h3>
	</article>
</div>