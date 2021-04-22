<?php
/*
* Template Name: Percipio-sidebar
*/

get_header(); ?>

    <div class="container-fluid fluid-2">
        <div class="row">
                <div class="col-md-12 my-card-2">
                <?php if ( is_sticky() ) : ?>
			<span class="oi oi-bookmark wp-bp-sticky text-muted" title="<?php echo esc_attr__( 'Sticky Post', 'wp-bootstrap-4' ); ?>"></span>
		<?php endif; ?>
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title card-title h2">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title card-title h3"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark" class="text-dark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta text-muted">
				<?php wp_bootstrap_4_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->
                </div>
               
                <div class="col-md-3 wp-bp-sidebar-width program-sidebar">
				
                <div class="mt-3 sticky-top " style="top:213px;">
					<a href="https://drive.google.com/file/d/1yX3OZSMJ-eA6-xNiZR8GSndUlPJA-7q3/view?usp=sharing" class="btn btn-block btn-informatics-blue no-border m-0 font-weight-bold text-center mb-4" style="font-size:15px;" target="_blank"><span>Download our Informatics <br>  Online Schooling Brochure</span></a>
					<a href="/shop" class="btn btn-block btn-informatics-blue no-border m-0 font-weight-bold text-center mb-4" style="font-size:18px;" target="_blank"><span>Browse our Online <br> Courses</span></a>
                    <a href="https://www.informatics.edu.ph/request-demo-form/" id="programs-btn" class="btn btn-block btn-informatics-blue no-border m-0 font-weight-bold" style="font-size:18px;"><span>Customized <br>Corporate Packages </span><span><i class="fa fa-chevron-right"></i></a>
                    
                </div>
                
            </div>

            <div class="col-md-6 wp-bp-content-width">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <?php get_template_part( 'template-parts/no-card-part', 'page' ); ?>
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
            <!-- /.col-md-8 -->

           






            <div class="col-md-3 wp-bp-sidebar-width program-sidebar">
				    <div class="mt-3r">
				    	<div class="widget-title">
					    	<h5 class="h6" style="margin:0px;">RESOURCES</h5>
					    </div>
                        <div class="menu-custom-side-menu-container">
                        <ul id="menu-custom-side-menu" class="menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page page_item page-item-62 current_page_item menu-item-1275">
                            <a href="https://www.skillsoft.com/platform-solution/percipio/" target="_blank">
                                <span class="position-absolute" style="left:30px;">
                                    <i class="fas fa-caret-right"></i>
                                </span>
                                Percipio Benefits and Features
                            </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1276">
                                <a href="https://www.skillsoft.com/platform-solution/percipio/percipio-elsa/ " target="_blank">
                                    <span class="position-absolute" style="left:30px;">
                                        <i class="fas fa-caret-right"></i>
                                    </span>
                                    Percipio's Embedded Learning Synchronized Assistant (ELSA) 
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1276" >
                                <a href="https://www.youtube.com/watch?v=bCvIM7AgeLw" target="_blank">
                                    <span class="position-absolute" style="left:30px;">
                                        <i class="fas fa-caret-right"></i>
                                    </span>
                                    Introducing Percipio
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1276">
                                <a href="https://www.youtube.com/watch?v=1DPIeFgDyJA" target="_blank">
                                    <span class="position-absolute" style="left:30px;">
                                        <i class="fas fa-caret-right"></i>
                                    </span>
                                    A Day in the Life of a Percipio User
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1276">
                                <a href="https://www.youtube.com/watch?v=5PC7FkwMjao" target="_blank">
                                    <span class="position-absolute" style="left:30px;">
                                        <i class="fas fa-caret-right"></i>
                                    </span>
                                    Acquire Knowledge with Percipio
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1276">
                                <a href="https://www.skillsoft.com/online-learning-resources/?filter=video" target="_blank">
                                    <span class="position-absolute" style="left:30px;">
                                        <i class="fas fa-caret-right"></i>
                                    </span>
                                    Watch Testimonials
                                </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
			<script>
        var $= jQuery;
         $('#program-form').submit(function(e){
             e.preventDefault();
            var my_user = {
                sender_email: $('#user-email').val(),
                receipient_email: 'info.marketing@informatics.com.ph',
				sender_name:$('#user-name').val(),
                message: $('#message').val()
            };
			 alert("Message SuccessFully Send");
				$('#user-email').val("");
				$('#user-name').val("");
				$('#message').val("");
		
            fetch('https://system.informatics-inculab.com/api/inquiry',{
                method: 'POST',
                body: JSON.stringify(my_user),
				mode:'cors',
                headers:{
                     'Accept': 'application/json',
    				'Content-Type': 'application/json'
                }
            }).then((response)=>{
              return response.json();
            }).then((myJson)=>{
	
            }).catch((error)=>{
				console.log(error)
			})
         })
        </script>
    </div>
    <?php get_template_part('template-parts/whats-happening','whats'); 
         get_template_part('template-parts/download-content','dl');
    ?>
    <!-- /.container -->

<?php
get_footer();
