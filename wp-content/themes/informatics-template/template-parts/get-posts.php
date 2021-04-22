<?php

global $post;
 $args = array( 'posts_per_page' => 5);

 $myposts = get_posts( $args );
 foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
  <?php  get_template_part( 'content-nocard', 'page2' ); ?>
 <?php endforeach; 
  wp_reset_postdata();?>