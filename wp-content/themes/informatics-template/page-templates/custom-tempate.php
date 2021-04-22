<?php
/*
* Template Name: Custom Template
*/
get_header(); ?>

<main id="main" class="site-main">

<?php
while ( have_posts() ) : the_post();
	?>
		<?php the_content(); ?>
	<?php
endwhile; // End of the loop.
?>

</main><!-- #main -->

<?php
get_footer();
