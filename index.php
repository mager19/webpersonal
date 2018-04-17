<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portafolio
 */

get_header();

// Seccion cabezal
get_template_part( 'template-parts/contenido', 'cabezal' );

?>


<!-- Section Contenido -->
<section class="contenido contenedor">
	<div class="container">
		<div class="row">
			<div class="col-md-5 offset-md-7 col-12">
				<div class="menuTrabajo">
					<?php 
					get_template_part( 'template-parts/menu', 'secundario' );
					?>
				</div>
			</div>
		</div>
		<div class="row row-eq-height">			
			<?php
				get_template_part( 'template-parts/content', 'home');
			 ?>
		</div>
	</div>
</section>



<!-- Section Instagram -->
<section class="instagram contenedor">
	<div class="container">
		<div class="row">
			<div class="col-5 offset-7">
				<h3 class="titleInstagram">Soy yo / Instagram</h3>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<div class="instagramFeed" id="instafeed">					
		</div>			
		
	</div>
</section>

<?php

get_footer();
