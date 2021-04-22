<?php
/*
* Template Name: Informatics Blogs
*/

get_header(); ?>

    <div class="container-fluid fluid-2">
        <div class="row">
            <div class="col-md-12 wp-bp-content-width">
                <div id="primary" class="content-area informatics-blogs">
                    <main id="main" class="site-main">
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h2><?php echo get_the_title() ?></h2>
                            </div>
                        </div>
                        <div class="row mt-4">
                         <?php

                            global $post;
                             

                             $myposts = new WP_Query(array('posts_per_page'=>8,'paged'=>( get_query_var('paged') ) ? get_query_var('paged') : 1));
                             while ( $myposts->have_posts() ) : $myposts->the_post(); ?>
                              <article id="post-<?php the_ID(); ?>" <?php post_class( 'nocard col-md-3 col-12 p-3' ); ?>>
								<div class="my-post">
									<a href="<?php the_permalink();?>">
										<?php echo get_the_post_thumbnail($myposts->post_id, 'medium')?>
									</a>
										<h4 class="mt-3 my-post-title"><?php the_title();?></h4>
										<div class="mt-md-3 mt-1 mb-1 my-post-excerpt">
										 <?php the_excerpt();?>
										 </div>
								</div>
										 <div class="text-right mb-2">
											 <a href="<?php the_permalink();?>">Read More</a>
										 </div>
							</article>
                             <?php endwhile; 
							function my_custom_pagination($numpages = '', $pagerange = '', $paged = '', $search = false) {

								if (empty($pagerange)) {
									$pagerange = 2;
								}

								/**
								 * This first part of our function is a fallback
								 * for custom pagination inside a regular loop that
								 * uses the global $paged and global $wp_query variables.
								 * 
								 * It's good because we can now override default pagination
								 * in our theme, and use this function in default queries
								 * and custom queries.
								 */
								global $paged;
								if (empty($paged)) {
									$paged = 1;
								}
								if ($numpages == '') {
									global $wp_query;
									$numpages = $wp_query->max_num_pages;
									if (!$numpages) {
										$numpages = 1;
									}
								}

								if ($search) {
									$format = '&paged=%#%';
								} else {
									$format = 'page/%#%';
								}
								/**
								 * We construct the pagination arguments to enter into our paginate_links
								 * function. 
								 */
								$pagination_args = array(
									'base' => get_pagenum_link(1) . '%_%',
									'format' => $format,
									// 'format' => '&paged=%#%',
									'total' => $numpages,
									'current' => $paged,
									'show_all' => False,
									'end_size' => 1,
									'mid_size' => $pagerange,
									'prev_next' => True,
									'prev_text' => __('Back'),
									'next_text' => __('Onwards'),
									'type' => 'plain',
									'add_args' => false,
									'add_fragment' => ''
								);

								$paginate_links = paginate_links($pagination_args);

								if ($paginate_links) {
									echo "<nav class='custom-pagination' style='width:100%'>";
									//echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
									echo $paginate_links;
									echo "</nav>";
								}
							}
							
							?>
                        </div>
						<div class="row text-right mb-4">
							<?php my_custom_pagination($myposts->max_num_pages, "", $paged);
                              wp_reset_postdata(); ?>
						</div>
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
            <!-- /.col-md-8 -->

            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

<?php
get_footer();
