<?php
/**
 * Template Name: Загаоловк з зображенням 
 *
 * @package IPZE
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

    <main id="main-page-tile " class="container page">

        <?php
            get_template_part( 'template-parts/content', 'main-title' );
            get_template_part( 'template-parts/content', 'page' );
        ?>

    </main><!-- #main -->

<?php
get_footer();
