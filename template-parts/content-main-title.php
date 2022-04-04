<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IPZE
 */

?>


	<section class="large-title">
		
		<?php if ( has_post_thumbnail()) : ?>
			<div class="large-title-img" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>') ;">
				<div class="container">
					<div class="large-title-breadcrumb"><?php get_breadcrumb(); ?></div>	
				</div>
		
				<div class="large-title-img-blurcolor"></div>
				
				<div class="large-title-title-div container">
					<?php the_title( '<h1 class="large-title-title">', '</h1>' ); ?>
				</div>
			</div>	
		<?php endif; ?> 
	
	</section><!-- .entry-header -->


