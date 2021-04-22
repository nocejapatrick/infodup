<div id="carouselExampleIndicators" class="carousel slide head-carousel" data-ride="carousel">

  <ol class="carousel-indicators">
  </ol>
  <div class="carousel-inner">
  <?php if(!is_woocommerce() && !is_cart() && !is_checkout()){?>
    <div class="carousel-item active">
		<a href="https://drive.google.com/file/d/1yX3OZSMJ-eA6-xNiZR8GSndUlPJA-7q3/view" target="_blank">
		<picture class="d-block w-100" >
          <source srcset="/wp-content/uploads/2020/08/Banner-1-min-600x338.jpg" media="(max-width: 500px)">
           <img class="d-block w-100" src="/wp-content/uploads/2020/08/Banner-1-min.jpg" alt="Informatics Banner">
      </picture>
			</a>
    </div>
	   <div class="carousel-item">
		<a href="/programs/" target="_blank">
		<picture class="d-block w-100" >
          <source srcset="/wp-content/uploads/2020/09/Website-Banner-SHS_HE-v2-min-600x338.jpg" media="(max-width: 500px)">
           <img class="d-block w-100" src="/wp-content/uploads/2020/09/Website-Banner-SHS_HE-v2-min.jpg" alt="Senior Highschool">
      </picture>
			</a>
    </div>
	     <div class="carousel-item">
		<a href="/programs/short-courses-ict/" target="_blank">
		<picture class="d-block w-100" >
          <source srcset="/wp-content/uploads/2020/09/Website-Banner-IEL-v2-min-600x338.jpg" media="(max-width: 500px)">
           <img class="d-block w-100" src="/wp-content/uploads/2020/09/Website-Banner-IEL-v2-min.jpg" alt="Informatics E-Learning">
      </picture>
			</a>
    </div>
	  <div class="carousel-item">
		<a href="https://www.teachnology.ph" target="_blank">
		<picture class="d-block w-100" >
			
          <source srcset="/wp-content/uploads/2021/01/Teachnology-Website-Banner-v1.1-min-600x338.jpg" media="(max-width: 500px)">
           <img class="d-block w-100" src="/wp-content/uploads/2021/01/Teachnology-Website-Banner-v1.1-min.jpg" alt="Teachnology Philippines">
      </picture>
			</a>
    </div>
    <div class="carousel-item">
    <?php
										$carousel = new WP_Query(['posts_per_page'=>1]);
										if ( $carousel->have_posts() ) : while ( $carousel->have_posts() ) : $carousel->the_post(); ?>
            <source srcset="<?php the_post_thumbnail_url( 'medium' );?>" media="(max-width: 500px)">
           <img class="d-block w-100" src="<?php the_post_thumbnail_url( 'large' );  ?>" alt="First Slide">
           <div class="carousel-title-container">
              <h3 class="text-white font-weight-bold"><?php the_title();?></h3>
           </div>
      <a href="<?php the_permalink();?>">
       <div class="overlay"></div>
      </a>
      <picture class="d-block w-100 d-flex align-items-center justify-content-center" >
      </picture>
      <?php
                    endwhile;
                  endif;
                  wp_reset_query();
                  ?>
    </div>
  <?php }else{?>
       <div class="carousel-item active">
		<a href="https://drive.google.com/file/d/1yX3OZSMJ-eA6-xNiZR8GSndUlPJA-7q3/view?usp=sharing" target="_blank">
		<picture class="d-block w-100" >
   <source srcset="/wp-content/uploads/2020/09/Website-Banner-IEL-v2-min-600x338.jpg" media="(max-width: 500px)">
           <img class="d-block w-100" src="/wp-content/uploads/2020/09/Website-Banner-IEL-v2-min.jpg" alt="Informatics E-Learning">
      </picture>
			</a>
    </div>
    
    <?php }?>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style="width:8%;">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style="width:8%;">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div>