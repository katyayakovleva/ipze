<?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package IPZE
 */

?>

<section class="posts">

            <div class="row items">
                <?php 
                    
                    foreach ( $posts as $post ) :?>
                        <div class="item-wrapper col-sm-6 col-md-4">
                            <div class="post" >
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a class="image" href="<?php echo  get_permalink($post->ID); ?>" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>')">
                                    </a>
                                <?php else: ?>
                                    <a class="image default-image" href="<?php echo  get_permalink($post->ID); ?>" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/logo-alpha.png)">
                                    </a>
                                <?php endif; ?>
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

</section><!-- #post-<?php the_ID(); ?> -->
