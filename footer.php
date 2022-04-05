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
			<div class="col-sm-6 col-md-4">
				<p>
					<em class="title">Кафедра АПЕПС ТЕФ КПІ ім. І. Сікорського</em>
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
			<div class="col-sm-4 col-md-7 footer-menu-div">
				<nav id="site-navigation" class="footer-menu">
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
					<a href="#"><i class="fa fa-plus-square-o"></i> Додати контент </a>
				</div>
			</div>


			<div class="col-sm-2 col-md-1 soc-menu">
				<a href="#">
					<i class="fa fa-search"></i>
				</a>
				<a href="#" target="_blank">
					<i class="fa fa-facebook"></i>
				</a>
			</div>
		</div>

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="flogo"></a>

		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
