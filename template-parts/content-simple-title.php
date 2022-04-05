<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IPZE
 */

?>


<section class="simple-title">
	<div class="parent">
		<div class="arrow-div">
			<i class="arrow left"></i>
		</div>
		<?php get_breadcrumb(); ?>	
	</div>
	<?php the_title( '<h1 class="title">', '</h1>' ); ?>
</section><!-- .entry-header -->

