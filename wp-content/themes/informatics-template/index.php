<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Informatics_Template
 */

get_header(); ?>




<div class="section-container-holder">
                <div class="three-programs-container ">
                    <div class="d-flex flex-wrap align-items-center justify-content-center">
                        <div class="three-program text-center text-white font-weight-bold">
                           <a href="/programs/senior-high-school-tracks/" class="text-white">SENIOR HIGH SCHOOL</a>
                        </div>
                        <div class="three-program text-center text-white font-weight-bold">
                           <a href="/programs/bachelors-degree-programs/" class="text-white">BACHELOR'S DEGREE</a>
                        </div>
                        <div class="three-program text-center text-white font-weight-bold">
                            <a href="/programs/short-courses-ict/" class="text-white">SHORT COURSES</a>
                        </div>
                        <div class="three-program text-center text-white font-weight-bold">
                            <a href="/programs/diploma-courses/" class="text-white">DIPLOMA COURSES</a>
                        </div>
                        <div class="three-programs-underline"></div>
                    </div>
                </div>
                <div class="section-container choose-informatics-section pb-md-5 bg-white" style="overflow: hidden;">

                    <div class="content py-5">
                        <div class="container mt-md-5 mt-0">
                            <div class="row">
                                <div class="col-md-12 mt-md-4">
                                    <h1 class="text-center text-uppercase my-3 font-weight-bold">Why Choose Informatics?</h1>
                                    <p class="text-center my-3">Informatics values your dreams as much as we
                                        value quality education. Thus, putting you first by
                                        providing a well-rounded curriculum that leads to employability and
                                        sustainability is our utmost
                                        priority.</p>
                                </div>
                                <div class="container my-3">
                                <div class="row">
                                    <div class="col-md-4 text-center reasons" style="visibility: visible;"><div class="px-3 py-2 mx-lg-5 px-sm-5"><div class="img-holder-main"><img src="<?php echo get_template_directory_uri().'/assets/images/home/';?>global.svg" alt="" class="img-fluid"></div></div> <p class="font font-italic font-weight-light">Globally Recognized</p></div>
                                    <div class="col-md-4 text-center reasons" style="visibility: visible;"><div class="px-3 py-2 mx-lg-5 px-sm-5"><div class="img-holder-main"><img src="<?php echo get_template_directory_uri().'/assets/images/home/';?>qualified.svg" alt="" class="img-fluid"></div></div> <p class="font font-italic font-weight-light">International Qualified Graduates</p></div>
                                    <div class="col-md-4 text-center reasons" style="visibility: visible;"><div class="px-3 py-2 mx-lg-5 px-sm-5"><div class="img-holder-main"><img src="<?php echo get_template_directory_uri().'/assets/images/home/';?>employment.svg" alt="" class="img-fluid"></div></div> <p class="font font-italic font-weight-light">Guaranteed Employment</p></div>
                                    <!-- <div class="col-md-4 text-center reasons" v-for="reason in reasons">
                                        <div class="px-3 py-2 mx-lg-5 px-sm-5">
                                            <div class="img-holder-main">
                                                <img :src="reason.icon" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <p class="white font font-italic font-weight-light">{{reason.why}}</p>
                                    </div> -->
                                </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn btn-informatics-blue border-blue-hover no-border" onclick="window.location.href = '/about-us'">Learn More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-container-holder" id="whats-happening">
                <div class="section-container">
                    <div class="content py-5">
                        <div class="container-fluid fluid-2">
                            <div class="row">
                                <div class="col-md-12 ">
                                    <h1 class="text-uppercase font-weight-bold section-home-title"><span>What's</span> Happening?</h1>
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
										<?php
										$posts = new WP_Query(['posts_per_page'=>2]);
										if ( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); ?>
                                        <article class="col-6 mt-3 mt-md-5 home-posts position-relative">
                                            <div class="posts-date text-center text-white">
                                                <?php echo get_the_date("M");?><br>
                                                <?php echo get_the_date("d");?>
                                            </div>
                                            <div class="post-entry" >
                                                <!-- <img class="img-fluid" alt="ASEAN Competition" src="http://info.test/wp-content/uploads/2018/12/Article-3.jpg"> -->
                                               <a href="<?php echo the_permalink();?>">
                                                    <picture class="d-block w-100 img-fluid" >
                                                        <source srcset="<?php the_post_thumbnail_url( 'thumbnail' );?>" media="(max-width: 760px)">
                                                        <img class="d-block w-100 img-fluid" src="<?php the_post_thumbnail_url( 'medium_large' );  ?>" alt="<?php echo the_title();?>">
                                                    </picture>
                                                </a>
                                            </div>
                                            <div class="content-title mt-3">
                                                <h4><?php the_title();?></h4>
                                            </div>
                                            <div class="content-excerpt">
                                                <?php the_excerpt();?>
                                            </div>

                                        </article>
										<?php endwhile; else : ?>
											<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
										<?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-md-5 mt-2 text-center">
                                    
                                    <a href="<?php echo get_site_url();?>/informatics-blogs/">
                                        <button class="btn btn-informatics-blue no-border font-source-sans border-blue-hover">See More</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-container-holder">
                <div class="section-container" style="background:white !important;">
                    <div class="content py-5">
                        <div class="container-fluid fluid-2">
                            <div class="row">
                                <div class="col-md-12">
                                <h1 class="text-uppercase font-weight-bold section-home-title"><span>Level Up</span> With Us</h1>
                                </div>
                            </div>
                            <div class="row mt-3 mt-md-5">
                                <div class="col-md-6 text-center text-md-left home-video-container">
									 <iframe width="100%" 
                                    src="https://www.youtube.com/embed/WorDh24wCO0=5s?loop=1&playlist=4CtH2oUZ9lo,WorDh24wCO0,3bWoct1zEow,m7NnqXlksCk&t=5s" allowfullscreen="allowfullscreen"
        mozallowfullscreen="mozallowfullscreen" 
        msallowfullscreen="msallowfullscreen" 
        oallowfullscreen="oallowfullscreen" 
        webkitallowfullscreen="webkitallowfullscreen" id="AB-vid" allow="autoplay;">
                                    </iframe>
                                </div>
                                <div class="col-md-6 main-video-description mt-3 mt-md-0">
                                From its humble beginning as a premiere IT training institution founded in 1993, Informatics Philippines has successfully penetrated the academic industry as a premiere educational institution offering degree and diploma programs in the fields of Information and Communication Technology (ICT) and Business Management.
                                <br><br>
                                Informatics also offers short IT training courses for corporations and individuals to get high-end skills in information technology, providing professionals with a competitive edge to succeed in the IT industry. Equipped with state-of-art equipment and flexible platforms, Informatics’ committed team of trainers continues to train and upgrade themselves in response to the rapid developments in IT. Informatics is well-poised to provide advanced training for professionals and place them in the forefront of information technology.
                                <br><br>
                                At Informatics, we take every program from Senior High to BS Degrees to the next level 
                                by powering our courses with technology, allowing students to master the digital age and 
                                compete in their chosen field anywhere in the world!
                                </div>
                            </div>
<!-- 							<div class="row mt-5 flex-row-reverse">
                                <div class="col-md-6 text-center text-md-left">
                                    <iframe width="770" height="382"
                                    src="https://www.youtube.com/embed/WorDh24wCO0" allowfullscreen="allowfullscreen"
        mozallowfullscreen="mozallowfullscreen" 
        msallowfullscreen="msallowfullscreen" 
        oallowfullscreen="oallowfullscreen" 
        webkitallowfullscreen="webkitallowfullscreen" id="main-vid">
                                    </iframe>
                                </div>
                                <div class="col-md-6 main-video-description mt-3 mt-md-0">
                                From its humble beginning as a premiere IT training institution founded in 1993, Informatics Philippines has successfully penetrated the academic industry as a premiere educational institution offering degree and diploma programs in the fields of Information and Communication Technology (ICT) and Business Management.
                                <br><br>
                                Informatics also offers short IT training courses for corporations and individuals to get high-end skills in information technology, providing professionals with a competitive edge to succeed in the IT industry. Equipped with state-of-art equipment and flexible platforms, Informatics’ committed team of trainers continues to train and upgrade themselves in response to the rapid developments in IT. Informatics is well-poised to provide advanced training for professionals and place them in the forefront of information technology.
                                <br><br>
                                At Informatics, we take every program from Senior High to BS Degrees to the next level 
                                by powering our courses with technology, allowing students to master the digital age and 
                                compete in their chosen field anywhere in the world!
                                </div>
                            </div> -->
                        </div>
                    </div> 
                </div>
            </div>
           
            <div class="section-container-holder up-anim">
                <div class="section-container alumni-testimonies">
                    <div class="content py-5">
                        <div class="container-fluid fluid-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="text-uppercase font-weight-bold section-home-title"><span>Alumni's</span> Testimonies</h1>
                                </div>
                                <div class="col-md-12">
                                    <div class="position-relative alumni-container">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <div class="alumni mx-2 mx-md-3">
                                                 <div class="img-circle-container active" style="background: url(/wp-content/uploads/2018/12/Mark-Bernales.jpg) no-repeat center center; background-size:cover;"></div>
                                                
                                            </div>
                                            <div class="alumni mx-2 mx-md-3">
                                                   <div class="img-circle-container" style="background: url(/wp-content/uploads/2018/12/Norina-May.jpg) no-repeat center center; background-size:cover;"></div>
                                            </div>
                                            <div class="alumni mx-2 mx-md-3">
                                                 <div class="img-circle-container" style="background: url(/wp-content/uploads/2018/12/Jiovanney.jpg); no-repeat center center; background-size:cover;"></div>
                                            </div>
                                            <div class="alumni mx-2 mx-md-3">
                                                  <div class="img-circle-container" style="background: url(/wp-content/uploads/2018/12/Rupen.jpg); no-repeat center center; background-size:cover;"></div>
                                            </div>
                                        </div>

                                        <div class="mt-3 position-relative text-center alumni-testimony-container">
                                            <div class="alumni-testimony active">
                                                <h3 class="font-weight-bold">Mark Bernales</h3>
                                                <p>“I was looking for ways to graduate in a short span of time without compromising the quality of education and I think that’s how Informatics has helped me a lot.”</p>
                                            </div>

                                            <div class="alumni-testimony">
                                                <h3 class="font-weight-bold">Dorina May Luna</h3>
                                                <p>“Informatics made a big difference in my life.” Informatics did not fail her with her dream of working abroad through advanced approach of education.”</p>
                                            </div>

                                            <div class="alumni-testimony">
                                                <h3 class="font-weight-bold">Jiovanney Emmanuel Bustamante</h3>
                                                <p>“Informatics allowed me to grow professionally.” Informatics values every student and provide them the greatest services to make each one of them industry ready individuals.”</p>
                                            </div>

                                            <div class="alumni-testimony">
                                                <h3 class="font-weight-bold">Rupen Rajkarnikar</h3>
                                                <p>“Informatics is worldwide, students will definitely get jobs easily.” Informatics offered him a vast curriculum that allowed him to experience different subjects and broaden his horizons.”</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- #content -->
            <div class="section-container-holder up-anim">
                <div class="section-container bg-white industry-partners">
                    <div class="content py-5">
                        <div class="container-fluid fluid-2">
                            <div class="row">
                                <div class="col-md-12">
                                <h1 class="text-uppercase font-weight-bold section-home-title"><span>Industry</span> Partners</h1>
                                </div>
                                <div class="col-md-12">
                                    <div class="row align-items-center justify-content-around flex-wrap">
                                            <div class="col-md-3 col-4 text-center mt-3 mb-2 mt-md-0 partner">
                                                <img src="/wp-content/uploads/2019/07/MS-Imagine-Academy-Logo-min.png" alt="Microsoft Imagine Academy">
                                            </div>
                                            <div class="col-md-3 col-4 text-center my-2 partner">
                                                <img src="/wp-content/uploads/2018/12/Comptia-e1545010727697.jpg" alt="Comptia">
                                            </div>
                                            <div class="col-md-3 col-4 text-center my-2 partner">
                                                <img src="/wp-content/uploads/2019/07/Percipio-Logo-min.png" alt="Percipio">
                                            </div>
                                    </div>
									<div class="row align-items-center justify-content-around flex-wrap">
									     <div class="col-md-3 col-4 text-center my-2 partner">
                                                <img src="/wp-content/uploads/2019/07/PhilSmile-Logo-min.png" alt="PhilSmile">
                                            </div>

                                            <div class="col-md-3 col-4 text-center my-2 partner">
                                                <img src="/wp-content/uploads/2018/12/cybersecurity.png" alt="Cyber Security">
                                            </div>

                                            <div class="col-md-3 col-4 text-center my-2 partner">
                                                <img src="/wp-content/uploads/2018/12/Google-Apps-for-Educ-e1545010754643.png" alt="Google Apps for Educ">
                                            </div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

<?php
get_footer();
?>
<script type="text/javascript">
                (function () {
                    
                    var $ = jQuery;
                    window.sr = ScrollReveal();

                    sr.reveal('.main-video-description',{origin:'bottom',distance:'300px',duration:1800})
					sr.reveal('.alumni-testimony.active',{origin:'bottom',distance:'200px',duration:2000,delay:1400})
					
                  
					
					$(document).ready(function(){

						$('.close-container').click(function(){
							$('.whole-pop-up-container').fadeOut(700);
                         });
                


                         $('.img-circle-container').click(function(i){
                            $('.alumni-testimony').removeClass('active');
                            $('.img-circle-container').removeClass('active');

                            var circles = $(this).addClass('active');
                           
                            var items = $.makeArray($('.img-circle-container'));
                            
                            $($('.alumni-testimony')[items.indexOf(this)]).addClass('active');

                         });


                         $('.three-program').mouseover(function(){
                            $('.three-programs-underline').css('backgroundColor',$(this).css('backgroundColor'));
                         });

					 });
					
                    // $('.carousel').carousel({
                    //     interval: 30000
                    // })
                    // 
                    // 
                    // 
                    // var vm = new Vue({
						
                    //     el: '#page',
                    //     data() {
                    //         return {
                    //             partners: [
                    //                 {
                    //                     link: 'http://info.test/wp-content/uploads/2019/07/MS-Imagine-Academy-Logo-min.png'
                    //                 },
                    //                 {
                    //                     link: 'http://info.test/wp-content/uploads/2018/12/Comptia-e1545010727697.jpg'
                    //                 },
                    //                 {
                    //                     link: 'http://info.test/wp-content/uploads/2018/12/cybersecurity.png'
                    //                 },
                    //                 {
                    //                     link: 'http://info.test/wp-content/uploads/2019/07/Percipio-Logo-min.png'
                    //                 },
                    //                 {
                    //                     link: 'http://info.test/wp-content/uploads/2018/12/Google-Apps-for-Educ-e1545010754643.png'
                    //                 },
                    //                 {
                    //                     link: 'http://info.test/wp-content/uploads/2019/07/PhilSmile-Logo-min.png'
                    //                 },
                    //             ],
                    //             testimonials: [
                    //                 {
                    //                     image: `http://info.test/wp-content/uploads/2018/12/Mark-Bernales.jpg`,
                    //                     message: `“I was looking for ways to graduate in a short span of time without compromising the quality of education and I think that’s how Informatics has helped me a lot.”`,
                    //                     person: `-Mark Bernales`
                    //                 },
                    //                 {
                    //                     image: `http://info.test/wp-content/uploads/2018/12/Norina-May.jpg`,
                    //                     message: `“Informatics made a big difference in my life.” Informatics did not fail her with her dream of working abroad through advanced approach of education.`,
                    //                     person: `-Dorina May Luna`
                    //                 },
                    //                 {
                    //                     image: `http://info.test/wp-content/uploads/2018/12/Jiovanney.jpg`,
                    //                     message: `“Informatics allowed me to grow professionally.” Informatics values every student and provide them the greatest services to make each one of them industry ready individuals.`,
                    //                     person: `-Jiovanney Emmanuel Bustamante`
                    //                 },
                    //                 {
                    //                     image: `http://info.test/wp-content/uploads/2018/12/Rupen.jpg`,
                    //                     message: `“Informatics is worldwide, students will definitely get jobs easily.” Informatics offered him a vast curriculum that allowed him to experience different subjects and broaden his horizons.`,
                    //                     person: `-Rupen Rajkarnikar`
                    //                 }
                    //             ],
                    //             reasons: [
                    //                 {
                    //                     icon: 'http://info.test/wp-content/uploads/2019/01/global.svg',
                    //                     why: 'Globally Recognized'
                    //                 },
                    //                 {
                    //                     icon: 'http://info.test/wp-content/uploads/2019/01/qualified.svg',
                    //                     why: 'International Qualified Graduates'
                    //                 },
                    //                 {
                    //                     icon: 'http://info.test/wp-content/uploads/2019/01/employment.svg',
                    //                     why: 'Guaranteed Employment'
                    //                 }
                    //             ],
                    //             test:'test',
					// 			content: null,
					// 			slide: 1,
					// 			currentSlide: 1,
					// 			intervalId: null,
					// 			dots: 0

                    //         }
                    //     },
                    //     mounted() {
                    //        $ = jQuery;
					// 		this.content = $('#slider-content')[0];
					// 		this.dots = Math.ceil(($('#slider-content')[0].scrollWidth / ($('#slider-content').width())-.1));
                    //     },
                    //     methods:{
                    //         pressedArrow(varia){
                    //             this.$refs.arrows.interval(varia)
                    //         },
					// 		getDotColor(dot){
					// 			console.log(dot)
					// 			if(this.currentSlide == dot){
					// 				return "#cccccc"
					// 			} else {
					// 				return "#9f9f9f";
					// 			}

					// 		},
					// 		changeSlide(e) {

					// 			let slide = ($(e.target).data('slide') * $('#slider-container').width()) - $('#slider-container').width();

					// 			$('#slider-content').animate({
					// 				scrollLeft: slide
					// 			});

					// 			this.currentSlide = $(e.target).data('slide');
					// 		},
					// 		loopSlide(slide) {
					// 			slide = (slide * $('#slider-container').width()) - $('#slider-container').width();
					// 			$('#slider-content').animate({
					// 				scrollLeft: slide
					// 			});
					// 		},
					// 		interval(item) {
					// 			if(item == 'left'){
					// 				this.currentSlide--;
					// 				if(this.currentSlide <= 0){
					// 					this.currentSlide = this.dots
					// 				}
					// 			}else{
					// 				this.currentSlide++;
					// 			}
					// 			if (this.currentSlide > this.dots) {
					// 				this.currentSlide = 1;
					// 			}
					// 			this.loopSlide(this.currentSlide);
					// 		},
					// 		hover(status) {
					// 			if (status == 'out') {
					// 				this.intervalId = setInterval(this.interval, this.sliderSpeed);
					// 			}
					// 			if (status == 'in') {
					// 				clearInterval(this.intervalId);
					// 			}
					// 		},
					// 		testing(){
					// 			console.log("TESTING")
					// 		}
                    //     }
                    // })
                })();
            </script>
