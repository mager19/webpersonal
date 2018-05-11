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
			<div class="contenedor">

				<?php
					while ( have_posts() ) :
						the_post();
					?>

					<iframe id="player" type="text/html" width="100%" height="550"
					  src="https://www.youtube.com/embed/<?php the_field('urlvideo'); ?>"
					  frameborder="0">
					</iframe>

					<div class="single__info">
						<div class="row">
							<div class="col-12">
								<script src="https://apis.google.com/js/platform.js"></script>
								<div class="g-ytsubscribe" data-channelid="UCAP5gFl_ZkCFTB7QtmhDTRQ" data-layout="full" data-count="hidden"></div>
								<p><?php the_content(); ?></p>
							</div>							
						</div>						
					</div>					
			</div>		
				<?php get_template_part( 'template-parts/content', 'trabajemos' ); 
				
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
