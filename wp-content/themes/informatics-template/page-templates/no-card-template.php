<?php
/*
* Template Name: No Card
*/

get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 wp-bp-content-width">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <?php get_template_part( 'template-parts/no-card-part', 'page' ); ?>
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
            <!-- /.col-md-8 -->

            <div class="col-md-4 wp-bp-sidebar-width">
                <?php get_sidebar(); ?>
            </div>
            <?php get_template_part('template-parts/whats-happening','whats'); ?>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

<?php
get_footer();
