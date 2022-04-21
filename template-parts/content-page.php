<?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package IPZE
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="content">
		<?php
		the_content();

		?>
	</div><!-- .content -->


</article><!-- #post-<?php the_ID(); ?> -->
