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
				the_post();

				the_post_thumbnail();
			?>

				<div class="row">
					<div class="col-md-9 col-sm-12">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime nulla explicabo amet voluptatibus ratione numquam soluta commodi, vel consequuntur repellat ad. Non itaque, optio minus omnis quam assumenda voluptatum molestiae.
					</div>

					<div class="col-3 col- d-none d-sm-block">
						side bar
					</div>
				</div>
			
			<?
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
