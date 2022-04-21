<?php
/**
 * Template part for displaying posts
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
	</div>


</article><!-- #post-<?php the_ID(); ?> -->
