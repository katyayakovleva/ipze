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
                $latest_news = get_posts(
                    array(
                        'category' => 'news',
                        'orderby' => 'date',
                    )
                );
            ?>

            <div class="row items">
                <?php 
                    foreach ( $latest_news as $post ) :?>
                        <div class="item-wrapper col-sm-6 col-md-4">
                            <div class="tile">
                                <a class="image" href="<?php echo  get_permalink($post->ID); ?>" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>')">
                                </a>
                                <a class="caption" href="<?php echo  get_permalink($post->ID); ?>">
                                    <h3><?php the_title()?></h3>
                                </a>
                            </div>
                        </div>
                <?php
                    endforeach; 
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
