<?php
/**
 * Template Name: Сторінка зі списком постів
 *
 * @package IPZE
 */


get_header();

?>

    <main id="main-page-tile " class="container enter-page">

        <?php
            get_template_part( 'template-parts/content', 'main-title' );
            $category_id = get_cat_ID( 'science_events' );
            $posts = get_posts(
                array(
                    'showposts' => -1,
                    'category' => $category_id,
                    'orderby' => 'date',
                    
                )
            );
            get_template_part( 'template-parts/content', 'posts-list' );
        ?>

    </main><!-- #main -->

<?php
get_footer();
