<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portafolio
 */

get_header();
?>

		<?php if ( have_posts() ) : ?>

				<header class="trabajos-header">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h2><img src="<?php echo get_template_directory_uri()?>/img/work.png">Trabajos realizados</h2>
								<?php
								the_archive_description( '<div class="archive-description">', '</div>' );
								?>
							</div>
						</div>
					</div>					
				</header><!-- .page-header -->
				<div class="container">
					<div class="row">
						
						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

					</div><!-- #main -->
					
					<?php get_template_part( 'template-parts/content', 'trabajemos' ); ?>
				</div><!-- #primary -->

<?php

get_footer();
