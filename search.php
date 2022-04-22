<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package IPZE
 */

get_header();
?>

	<main id="primary" class="container enter-page">
		<section class="simple-title">
			<div class="parent">
				<div class="arrow-div">
					<i class="arrow left"></i>
				</div>
				<a href="<?php home_url()?>" rel="nofollow">Головна</a>	
			</div>
			<h1 class="title"> Пошук </h1>
		</section>
		
	<?php 
		get_search_form();
		if ( have_posts() ) : 
			get_template_part( 'template-parts/content', 'search' );
			the_posts_navigation();

		else :?>
		
		<p>На жаль нічого не знайдено.</p>

	<?php endif; ?>

	</main><!-- #main -->

<?php

get_footer();
