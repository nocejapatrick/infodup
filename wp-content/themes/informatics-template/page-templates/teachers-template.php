<?php 
/*
* Template Name: Teacher Template
*/
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<meta name="author" content="Informatics">
	<meta name="description" content="Informatics College">
	<meta name = "keywords" content = "Informatics, Information Technology, IT College" />
	<meta name="description" content="Informatics College">
	<link rel="profile" href="http://shop.informatics.com//wp-content/uploads/2018/09/cropped-cropped-Logo-192x192-32x32.png">
	<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
<!-- 	<link rel="stylesheet" href="/wp-content/themes/informatics-template/informatics.css"> -->
<!-- 	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,600" rel="stylesheet"> -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/vue"></script> -->
	<!-- <script src="/wp-content/themes/informatics-template/assets/js/informatics.js"></script> -->
<!-- 	<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script> -->
	<?php wp_head(); ?>
	<!-- Facebook Pixel Code -->
	<style>
		@font-face{
			font-family:'Montserrat';
			src: url('/wp-content/themes/informatics-template/assets/fonts/Montserrat-Regular.ttf');
			font-weight:normal;
		}
		@font-face{
			font-family:'Montserrat';
			src: url('/wp-content/themes/informatics-template/assets/fonts/Montserrat-Bold.ttf');
			font-weight:bold;
		}
		@font-face {
			font-family: 'Source Sans Pro';  
			src: url('/wp-content/themes/informatics-template/assets/fonts/SourceSansPro-Light.ttf');  
			font-weight: 300;  
		}
		@font-face {
			font-family: 'Source Sans Pro';  
			src: url('/wp-content/themes/informatics-template/assets/fonts/SourceSansPro-SemiBold.ttf');  
			font-weight: 600;  
		}
		@font-face {
			font-family: 'Open Sans';  
			src: url('/wp-content/themes/informatics-template/assets/fonts/OpenSans-Regular.ttf');  
			font-weight: normal;  
		}

		* {
        box-sizing: border-box;
        font-family: "Montserrat";
      }
      .center-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60%;
        height: 700px;
        overflow: hidden;
        flex-wrap: wrap;
      }

      .d-flex {
        display: flex;
      }

      .taguig-bg-image {
        flex: 0 0 33.3333%;
        display: flex;
        align-items: center;
        position: relative;
        justify-content: center;
        transition: 0.4s all ease-in-out;
        cursor: pointer;
      }

      .taguig-bg-image:nth-child(1) {
        background-image: linear-gradient(
            to bottom,
            rgb(160 160 160 / 52%),
            rgb(0 0 0 / 73%)
          ),
          url(/wp-content/uploads/2020/08/Tectoc-min.jpg);
        background-size: cover;
        background-position: -65px 0px;
      }

      .taguig-bg-image:nth-child(2) {
        background-image: linear-gradient(
            to bottom,
            rgb(160 160 160 / 52%),
            rgb(0 0 0 / 73%)
          ),
          url(/wp-content/uploads/2020/08/Brightspace-min.jpg);
        background-size: cover;
        background-position: center top;
      }

      .taguig-bg-image:nth-child(3) {
        background-image: linear-gradient(
            to bottom,
            rgb(160 160 160 / 52%),
            rgb(0 0 0 / 73%)
          ),
          url(/wp-content/uploads/2020/08/TEacher-min.jpg);
        background-size: cover;
        background-position: -32px 0px;
      }


      .text {
        color: white;
        font-weight: bold;
        font-size: 1.3em;
        text-align: center;
      }

      @media (max-width: 500px) {
        .center-container {
          width: 70%;
          height: auto;
        }

        .taguig-bg-image {
          flex: 0 0 100%;
          height: 180px;
        }

        .text {
          font-size: 1em;
        }
        .taguig-bg-image:nth-child(1) {
          background-position: center center;
        }

        .taguig-bg-image:nth-child(2) {
          background-position: center top;
        }

        .taguig-bg-image:nth-child(3) {
          background-position: center center;
        }
      }
	</style>
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	 fbq('init', '1215461905258986'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=1215461905258986&ev=PageView
	&noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
	
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123894731-1"></script>
    <script>
     window.dataLayer = window.dataLayer || [];
     function gtag(){dataLayer.push(arguments);}
     gtag('js', new Date());

     gtag('config', 'UA-123894731-1');
   </script>
   <style>
	   html,body{
			margin:0px !important;
		}
       .teacher-logo-container{
           width:500px;
           margin:auto;
       }
	
	   .fluid-3{
		width:32%;   
	   }
	   
       @media screen and (max-width:724px){
        .teacher-logo-container{
            width:80%;
            margin:0px auto;
        }
		   .fluid-3{
			   width:100%;   
		   }
       }
   </style>
</head>
<body <?php body_class(); ?>>

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
                ?>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>
</body>
</html>