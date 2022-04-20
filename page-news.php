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
                $category_id = get_cat_ID( 'news' );
                $posts = get_posts(
                    array(
                        'showposts' => -1,
                        'category' => $category_id,
                        'orderby' => 'date',
                    )
                );
                get_template_part( 'template-parts/content', 'posts-list' );
            ?>
            
        </div>
    </div>
</div>


<?php
get_footer();
