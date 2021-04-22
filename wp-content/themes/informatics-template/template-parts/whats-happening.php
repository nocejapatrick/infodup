<div class="section-container-holder" id="whats-happening">
                <div class="section-container">
                    <div class="content py-5">
                        <div class="container-fluid fluid-2">
                            <div class="row">
                                <div class="col-md-12 text-center text-md-left">
                                    <h1 class="text-uppercase">What's Happening?</h1>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">


                                        <?php
										$posts = new WP_Query(['posts_per_page'=>3]);
										if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
                                        <article class="col-md-4 mt-5 mt-md-3 px-md-3">
                                            <div class="post-entry" >
                                                <!-- <img class="img-fluid" alt="ASEAN Competition" src="https://www.informatics.edu.ph/wp-content/uploads/2018/12/Article-3.jpg"> -->
                                            <picture class="d-block w-100 img-fluid" >
                                                <source srcset="<?php the_post_thumbnail_url('thumbnail');?>">
                                                <img class="d-block w-100 img-fluid" src="<?php the_post_thumbnail_url( 'medium' );  ?>" alt="First Slide">
                                            </picture>
                                            </div>
                                            <div class="content-title mt-3">
                                                <h4><?php the_title();?></h4>
                                            </div>
                                            <div class="content-excerpt">
                                                <?php the_excerpt();?>
                                                   
                                            </div>
 											<div class="col-12 text-right mt-2">
                                                         <a href="<?php the_permalink();?>" class="more-link">Read More</a>
                                                    </div>
                                        </article>
										<?php endwhile; else : ?>
											<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
										<?php endif; ?>
                                        
                                        
                                    </div>
                                </div>
                                <div class="col-md-12 mt-5 text-center">
                                    
                                    <a href="<?php echo get_site_url();?>/whats-happening-v2">
                                        <button class="btn btn-informatics-blue no-border font-source-sans">See More</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>