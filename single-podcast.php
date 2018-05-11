<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portafolio
 */

get_header();
get_template_part( 'template-parts/header', 'internas');
?>
<div class="container">
	<div class="row">
		<div class="col-12">			
			<?php
			while ( have_posts() ) :
				the_post();?>

				<div class="contenedor">
					<iframe id='audio_23657401' frameborder='0' allowfullscreen='' scrolling='no' height='200' style='border:1px solid #EEE; box-sizing:border-box; width:100%;' src="https://co.ivoox.com/es/player_ej_<?php the_field('urlpodcast'); ?>_4_1.html?c1=ff6600"></iframe>

					<p><?php the_content(); ?></p>
				</div>
				
				<?php 
					get_template_part('template-parts/content', 'trabajemos');

					the_post_navigation();

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div>
	</div>
</div>

<?php

get_footer();
