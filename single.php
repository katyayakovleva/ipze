<?php
/**
 * The template for displaying all single posts
 *
 * @package IPZE
 */

get_header();
?>

	<main id="primary" class="container enter-page single">

		<?php
			get_template_part( 'template-parts/content', "simple-title" );
			get_template_part( 'template-parts/content', "post" );

			

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		?>

	</main><!-- #main -->

<?php

get_footer();
