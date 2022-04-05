<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package IPZE
 */

?>


	<section class="main-title">
		<div class="poster">
			<?php if ( has_post_thumbnail()) : ?>
				<div class="poster-bg" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>') ;">
					
				</div>	
				
				<div class="parent">
					
					<div class="arrow-div">
						<i class="arrow left"></i>
					</div>
					
						<?php get_breadcrumb(); ?>	
				
					
				</div>
				<?php the_title( '<h1 class="title">', '</h1>' ); ?>
					
			<?php endif; ?>
		</div>
		
	</section><!-- .main-title -->


