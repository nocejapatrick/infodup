<?php
/*
* Template Name: Program-sidebar
*/

get_header(); ?>

    <div class="container-fluid fluid-2">
        <div class="row">
            <div class="col-md-9 wp-bp-content-width">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <?php get_template_part( 'template-parts/no-card-part', 'page' ); ?>
                    </main><!-- #main -->
                </div><!-- #primary -->
            </div>
            <!-- /.col-md-8 -->

            <div class="col-md-3 wp-bp-sidebar-width program-sidebar">
				<!-- <div class="mt-md-3r mt-2">
					<div class="widget-title">
						<h5 class="h6" style="margin:0px;">PROGRAMS</h5>
					</div>
					<?php wp_nav_menu(array('menu'=>'custom-side-menu','link_before' => '<span class="position-absolute" style="left:30px;"><i class="fas fa-caret-right"></i></span>') ); ?>
                </div> -->
                <div class="mt-3 sticky-top " style="top:25%;">
                    <button id="programs-btn" class="btn btn-block btn-informatics-blue no-border m-0 font-weight-bold" style="font-size:24px;"><span>INQUIRE NOW </span><span><i class="fas fa-chevron-right"></i></button>
						
						
						<?php 
							global $post;
							if($post->ID != 66){ ?>
						<button class="btn btn-block btn-informatics-blue no-border m-0 font-weight-bold mt-3" style="font-size:24px;" onclick="window.open('/apply-online/','_blank')">APPLY NOW</button>
						<button class="btn btn-block btn-informatics-blue no-border m-0 font-weight-bold mt-3" style="font-size:20px;" onclick="window.open('https://drive.google.com/file/d/1yX3OZSMJ-eA6-xNiZR8GSndUlPJA-7q3/view','_blank')">Download Brochure</button>
						
						<?php }else{ ?>
						<button class="btn btn-block btn-informatics-blue no-border m-0 font-weight-bold mt-3" style="font-size:20px;" onclick="window.open('/request-demo-form','_blank')">Corporate Packages</button>
						<button class="btn btn-block btn-informatics-blue no-border m-0 font-weight-bold mt-3" style="font-size:24px;" onclick="window.open('/shop','_blank')">Enroll Online Now</button>
						<?php }?>
				
						
						<!-- <button class="btn btn-block btn-informatics-blue no-border m-0 font-weight-bold mt-3" style="font-size:18.5px;" onclick="window.open('/admissions/download-application-form/')">DOWNLOAD APPLICATION FORM </button> -->
						
                    <div class="mt-4 position-relative program-contact-form">
<!--                       echo do_shortcode('[contact-form-7 id="1771" title="Program Form"]') -->
						<?php echo do_shortcode( '[wpforms id="3842" title="false" description="false"]' ); ?>
                    </div>
                </div>
                
            </div>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->
			<!-- <script>
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
        </script> -->
    </div>
    <?php get_template_part('template-parts/whats-happening','whats'); 
//          get_template_part('template-parts/download-content','dl');
    ?>
    <!-- /.container -->

<?php
get_footer();
