<?php
/**
 * Template part for displaying page content in page.php
 *
 *
 * @package IPZE
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="">
        <?php 
            $args = array(
                'parent' => $post->ID,
                'post_type' => 'page',
                'post_status' => 'publish',
                'sort_column' => 'menu_order'
            ); 
            $pages = get_pages($args);      
        ?>
        <ul class=""> 
            <?php foreach( $pages as $page ) { ?>
                <li>
                    <a href="<?php echo  get_permalink($page->ID); ?>" rel="bookmark" title="<?php echo $page->post_title; ?>">
                        <div class=""><?php echo get_the_post_thumbnail($page->ID, 'small-thumb'); ?></div>
                        <div>
                            <h3 class=""><?php echo $page->post_title; ?></h3>
                        </div>
                        <span class=""><?php echo get_post_meta($page->ID, 'desc', true); ?></span>
                    </a>
                </li>
            <?php } ?>
        </ul>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
