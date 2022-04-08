<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package IPZE
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="container">

		<div class="row">
			<div class="col-md-4 col-lg-4">
				<p>
					<em class="title">Кафедра ІПЗЕ ТЕФ КПІ ім. І. Сікорського</em>
				</p>
				<p>
					Київ, вул. Політехнічна, 6, корпус 5, кімн. 513
				</p>
				<p>
					<span class="phone">
					+38 (044) 204-80-90
					</span>
				</p>
			</div>
			<div class=" col-md-6 col-lg-7 fmenu">
				<nav id="footer-navigation" class="footer-menu">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'menu_id'        => 'footer-menu',
							)
						);
					?>
				</nav><!-- #site-navigation -->
				<div class="sys-in">
					<a href="#"><i class="fas fa-plus-square"></i> Додати контент </a>
				</div>
			</div>

			<div class="col-md-2 col-lg-1 foot-soc-menu">
                <a href=""><i class="fa fa-search"></i> </a>
                <a href=""><i class="fab fa-telegram-plane"></i></a>
                <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
			</div>
		</div>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="flogo"><img src="<?php echo get_template_directory_uri(); ?> . /assets/img/ipze_logo_footer.svg"></a>

		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
