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

<div id="main-page-tile">

    <?php get_template_part( 'template-parts/content', 'main-title' );?>
    <?php get_template_part( 'template-parts/content', 'page' );?>

</div>

<?php
get_footer();
