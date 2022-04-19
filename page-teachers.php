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
             
                $posts1 = get_posts(
                    array(
                        'post_type' => 'teacher',
                        'orderby' => 'title',
                        'order'   => 'ASC',
                        'post__not_in' => get_option('sticky_posts'),
                    )
                );
                
                $posts2 = get_posts(
                    array(
                        'post_type' => 'teacher',
                        'orderby' => 'title',
                        'order'   => 'ASC',
                        'post__in' => get_option('sticky_posts')
                    )
                );
                $posts = array_merge($posts2, $posts1);
            
            get_template_part( 'template-parts/content', 'posts-list' );
        ?>

    </main><!-- #main -->

<?php
get_footer();
