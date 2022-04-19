<?php
/**
 * The template for displaying all pages
 
 * @package IPZE
 */

get_header();
?>
<div class="page-news">
    <div class="news-wr">
        <div class="container">
            <h2><a href="#">Новини</a></h2>
            <?php 
                $posts = get_posts(
                    array(
                        'category' => 'news',
                        'orderby' => 'date',
                        'post__not_in' => get_option('sticky_posts')
                    )
                );
                // $posts2 = get_posts(
                //     array(
                //         'category' => 'news',
                //         // 'orderby' => 'date',
                //         'post__in' => get_option('sticky_posts')
                //     )
                // );
                // $posts = array_merge($posts2, $posts1);
                get_template_part( 'template-parts/content', 'posts-list' );
            ?>

            
        </div>
    </div>
</div>


<?php
get_footer();
