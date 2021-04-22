<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Bootstrap_4
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'nocard col-md-4 col-sm-6 col-xs-6' ); ?>>
    <div class="my-card">
            <?php echo get_the_post_thumbnail()?>
            <h5 class="mt-3 happen-title"><?php the_title();?></h5>
            <div class="mt-3 mb-1">
             <?php the_excerpt();?>
             </div>
    </div>
             <div class="text-right mb-2">
                 <a href="<?php the_permalink();?>">Read More</a>
             </div>
</article><!-- #post-<?php the_ID(); ?> -->
