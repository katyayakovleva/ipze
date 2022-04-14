<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package IPZE
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--<div id="page" class="site">-->
<!--	<a class="skip-link screen-reader-text" href="#primary">--><?php //esc_html_e( 'Skip to content', 'ipze' ); ?><!--</a>-->
    <header>
        <div class="container">
            <div class="row logo-row">
                <div class="col-sm-12">
                    <div>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ipze_logo.svg" alt="ІПЗЕ">
                        </a>
                    </div>

                    <div class="lans">
                        <span class="lans-text">
                            <a href="" class="">Укр.</a>
                            <span class="stick">|</span>
                            <a href="" class="">Eng.</a>
                        </span>
                    </div>
                    <div class="header_burger">
                        <span></span>
                    </div>
                </div>
            </div>
            <div class="row menu-row">
<!--                <div class="col-md-2 col-name">-->
<!--                    <a href="" class="name-a">-->
<!--                        <h1>                        КАФЕДРА ІПЗЕ ТЕФ<br> КПІ <span>ім.</span> І. СІКОРСЬКОГО                                            </h1>                    </a>-->
<!--                </div>-->
                <div class="col-md-11 menu_back">
                    <nav id="site-navigation" class="head_menu">
                        <span class="burger_lans lans-text">
                            <a href="" class="">Укр.</a>
                            <span class="stick">|</span>
                            <a href="" class="">Eng.</a>
                        </span>
                        <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ipze' ); ?></button> -->
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main-menu',
                                'menu_id'        => 'primary-menu',
                                'depth'          => '3'
                            )
                        );
                        ?>
                        <div class="burger_soc-menu">
                            <i id="search-icon-burger" class="fa fa-search"></i> 
                            <a href=""><i class="fab fa-telegram-plane"></i></a>
                            <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        </div>
                        <form id="search-form-burger" class="search-form-burger" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input type="text" class="search-field" name="s" placeholder="Пошук..." value="<?php echo get_search_query(); ?>">
                        </form>
                    </nav><!-- #site-navigation -->
                </div>
                <div class="col-md-1 soc-menu">
                    <i id="search-icon" class="fa fa-search"></i>
                    <a href=""><i class="fab fa-telegram-plane"></i></a>
                    <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
            <div >
                <form id="search-form" class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <input type="text" class="search-field" name="s" placeholder="Пошук..." value="<?php echo get_search_query(); ?>">
                    <!-- <i id="boxclose" class="fa fa-times" aria-hidden="true"></i> -->
                </form>
            </div>

           
        </div>
        
    </header>


