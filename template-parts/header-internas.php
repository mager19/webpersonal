<section class="cabezal--internas">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php 
					if ( has_term( 'video', 'tipoContenido')){
						$icono = '<img src="' . get_template_directory_uri() . '/img/video.png">';
					}
					else if( has_term( 'podcast', 'tipoContenido')){
						$icono = '<img src="' . get_template_directory_uri() . '/img/podcast.png">';
					}
					else $icono = '<img src="' . get_template_directory_uri() . '/img/article.png">';
				 ?>
				<h2><?php echo $icono ?><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</section>