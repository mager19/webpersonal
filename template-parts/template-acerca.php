<?php
/**
 * Template Name: Acerca de mi
 *
 * @package WordPress
 * @subpackage Portafolio
 * 
 */

get_header();?>

<header class="trabajos-header">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2><img src="<?php echo get_template_directory_uri() ?>/img/article.png">Acerca de mi</h2>
				<div class="archive-description">Te cuento un poco más acerca de mi.</div>	
			</div>
		</div>
	</div>					
</header><!-- .page-header -->

<div class="container contenedor">
	<div class="row">
		<?php
			while ( have_posts() ) :
				the_post();	?>
			
			<div class="col-4">
				<?php 
					the_post_thumbnail( $size = 'imagen-acerca'); 
				?>
			</div>

			<div class="col-8">
				<div class="contenido__acerca">
					<?php the_content(); ?>
				</div>
			</div>

			<?php
			endwhile; // End of the loop.
			?>
	</div>
</div>

<?php get_template_part( 'template-parts/content', 'trabajemos' ); 

get_footer();

