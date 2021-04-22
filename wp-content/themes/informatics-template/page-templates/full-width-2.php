<?php
/*
* Template Name: Full Width Without Container 2
*/

get_template_part( '/template-parts/header-2', 'header-2' ); ?>

    <div class="">
        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page-full' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                get_template_part('template-parts/download-content','dl');
                ?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

<?php
get_footer();
