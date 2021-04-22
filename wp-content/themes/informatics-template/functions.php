<?php
/**
 * WP Bootstrap 4 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Informatics_Template
 */

if ( ! function_exists( 'informatics_template_setup' ) ) :
	function informatics_template_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'informatics-template', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		// Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

		// Enable Post formats
		add_theme_support( 'post-formats', array( 'gallery', 'video', 'audio', 'status', 'quote', 'link' ) );

		// Enable support for woocommerce.
		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'informatics-template' ),
			'menu-2' => esc_html__( 'Secondary', 'informatics-template' ),
			'quick-links' => __('Quick Links', 'informatics-template')
		) );

		// Switch default core markup for search form, comment form, and comments
		add_theme_support( 'html5', array(
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'wp_bootstrap_4_custom_background_args', array(
			'default-color' => 'f8f9fa',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for core custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'informatics_template_setup' );




/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_4_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_4_content_width', 800 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_4_content_width', 0 );




/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_4_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'informatics-template' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'informatics-template' ),
		'before_widget' => '<section id="%1$s" class="widget border-bottom %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'informatics-template' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'informatics-template' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'informatics-template' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'informatics-template' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'informatics-template' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'informatics-template' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 4', 'wp-bootstrap-4' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'wp-bootstrap-4' ),
		'before_widget' => '<section id="%1$s" class="widget wp-bp-footer-widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title h6">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'wp_bootstrap_4_widgets_init' );


function ikreativ_async_scripts($url)
{
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
	return str_replace( '#asyncload', '', $url )."' async='async"; 
    }
add_filter( 'clean_url', 'ikreativ_async_scripts', 11, 1 );


/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_4_scripts() {
// 	wp_register_style('font-awesome-all','https://use.fontawesome.com/releases/v5.5.0/css/all.css');
// 	wp_enqueue_style('font-awesome-all');
// 	wp_register_style('informatics-css',get_template_directory_uri().'/informatics.css');
// 	wp_enqueue_style('informatics-css');
// 	wp_register_script('vue-script','https://cdn.jsdelivr.net/npm/vue',array(), '', false);
// 	wp_enqueue_script('vue-script');
// 	wp_register_script('info-js','/wp-content/themes/informatics-template/assets/js/informatics.js#asyncload',array(), '', true);
// 	wp_enqueue_script('info-js');
// 	wp_register_script('scroll-reveal','https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js#asyncload',array(), '', true);
// 	wp_enqueue_script('scroll-reveal');
// 	wp_register_script('informatics-js',get_template_directory_uri().'/assets/js/informatics.js',[],'',true);
// 	wp_enqueue_script('informatics-js');

	wp_enqueue_style( 'open-iconic-bootstrap', get_template_directory_uri() . '/assets/css/open-iconic-bootstrap.css', array(), 'v4.0.0', 'all' );
	wp_enqueue_style( 'bootstrap-4', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), 'v4.0.0', 'all' );
	
	
	wp_enqueue_style( 'wp-bootstrap-4-style', get_stylesheet_uri(), array(), '1.0.2', 'all' );

	wp_enqueue_script( 'bootstrap-4-js', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), 'v4.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wp_bootstrap_4_scripts' );


/**
 * Registers an editor stylesheet for the theme.
 */
function wp_bootstrap_4_add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'wp_bootstrap_4_add_editor_styles' );


// Implement the Custom Header feature.
require get_template_directory() . '/inc/custom-header.php';

// Implement the Custom Comment feature.
require get_template_directory() . '/inc/custom-comment.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Functions which enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Custom Navbar
require get_template_directory() . '/inc/custom-navbar.php';

// Customizer additions.
require get_template_directory() . '/inc/tgmpa/tgmpa-init.php';

// Use Kirki for customizer API
require get_template_directory() . '/inc/theme-options/add-settings.php';

// Customizer additions.
require get_template_directory() . '/inc/customizer.php';

// Load Jetpack compatibility file.
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Load WooCommerce compatibility file.
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


// for SVG
function add_file_types_to_uploads($file_types){
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes );
	return $file_types;
}
add_action('upload_mimes', 'add_file_types_to_uploads');

function custom_excerpt_length($length) {
  return 20;
}
add_filter('excerpt_length', 'custom_excerpt_length',999);


function wpbsearchform( $form ) {
 
    $form = '<form role="search" method="get" class="searchform wp-bootstrap-4-searchform mt-4 mb-3" action="' . home_url( '/' ) . '" >
    <div>
    <input type="text" class="s form-control faq-search"" value="' . get_search_query() . '" name="s" id="s" placeholder="Type keywords to find answers"/>
    </div>
    </form>';
 
    return $form;
}
 
add_shortcode('wpbsearch', 'wpbsearchform');


add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 5; // 3 products per row
	}
}

function action_woocommerce_before_main_content( ) { 
	// make action magic happen here... 
	?>
	<div class="ads-wrapper mb-3">
		<div class="row">
			<div class="col-4">
			  <a href="#"><img src="https://www.informatics.edu.ph/wp-content/uploads/2020/06/Digital-Trans-1.jpg" alt="" class="img-fluid"></a>
			</div>
			<div class="col-4">
				<a href="#"><img src="https://www.informatics.edu.ph/wp-content/uploads/2020/06/Tech-and-Dev-2.jpg" alt="" class="img-fluid"></a>
			</div>
			<div class="col-4">
				<a href="#"><img src="https://www.informatics.edu.ph/wp-content/uploads/2020/06/Expert.jpg" alt="" class="img-fluid"></a>
            </div>
        </div>	
    </div>
	<?php
}; 
         
// add the action 
// add_action( 'woocommerce_before_main_content', 'action_woocommerce_before_main_content', 10, 2 ); 


function register_shop_menu(){
	register_nav_menu('shop-menu',__('Shop Menu'));
}
add_action('init','register_shop_menu');

function register_shop_sub_menu(){
	register_nav_menu('shop-sub-menu',__('Shop Sub Menu'));
}
add_action('init','register_shop_sub_menu');




function iconic_format_price_range( $price, $from, $to ) {

	
    return "<div class='' style='margin-top:-20px; margin-left:5px;'>".$price."</div>";


} 


add_filter( 'woocommerce_format_price_range', 'iconic_format_price_range', 10, 3 );


function give_profile_name(){
    $user=wp_get_current_user();
    $name=$user->user_firstname; 
    return (!empty($name)) ? $name : "Login";
}

add_shortcode('profile_name', 'give_profile_name');

add_filter( 'wp_nav_menu_objects', 'my_dynamic_menu_items' );
function my_dynamic_menu_items( $menu_items ) {
    foreach ( $menu_items as $menu_item ) {
        if ( '#profile_name#' == $menu_item->title ) {
            global $shortcode_tags;
            if ( isset( $shortcode_tags['profile_name'] ) ) {
                // Or do_shortcode(), if you must.
                $menu_item->title = call_user_func( $shortcode_tags['profile_name'] );
            }    
        }
    }

    return $menu_items;
} 


function my_hide_shipping_when_free_is_available( $rates ) {
	

	if(is_user_logged_in()){
		$customer_orders = get_posts( array(
			'numberposts' => -1,
			'meta_key'    => '_customer_user',
			'meta_value'  => get_current_user_id(),
			'post_type'   => wc_get_order_types(),
			'post_status' => array_keys( wc_get_order_statuses() ),
		) );
		
// 		 var_dump(count($customer_orders));
// 		 die;

		if(count($customer_orders)>0){
			foreach ( $rates as $rate_id => $rate ) {
				if ( 'flat_rate' === $rate->method_id ) {
// 					unset( $rates[ $rate_id ] );
					$rate->cost="00.00";
				}
			}
		}
		
	}
	return $rates;
}
add_filter( 'woocommerce_package_rates', 'my_hide_shipping_when_free_is_available', 100 );


// Additionals for Woocommerce
add_filter('woocommerce_shipping_package_name', 'change_shipping_text_to_delivery', 20, 3 );
function change_shipping_text_to_delivery( $sprintf, $i, $package ) {
    $sprintf = sprintf( _nx( 'Additional Costs', 'Additional Costs %d', ( $i + 1 ), 'additional costs', 'woocommerce' ), ( $i + 1 ) );
    return $sprintf;
}

add_action('woocommerce_single_product_summary', 'custom_product_note', 100 );
function custom_product_note($prod) {
	
	global $product;
	$car = $product->get_category_ids();
	

	
	if(array_search(35,$car) === 0){
	}else{
		echo '<br><div>';

		woocommerce_form_field('customer_note', array(
			'type' => 'textarea',
			'class' => array( 'my-field-class form-row-wide') ,
			'label' => __('Email for this course before adding to cart(required)') ,
			'placeholder' => __('Enter Email Here') ,
			'required' => true,
		) , '');

		echo '</div>';
		?>
 <script type="text/javascript">
	jQuery(document).ready(function($){
		function validateEmail(email) {
			var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			if (!emailReg.test(email)) {
				return true;
			} else {
				return false;
			}
		}




		$('#customer_note').css('width',"300px");
		$('#customer_note_field').css({display:'flex',flexDirection:'column'});
		$('.single_add_to_cart_button').prop('disabled','true');

        $('#customer_note').on( 'input blur', function() {
            $('#product_note').val($(this).val());
        });
		$('#customer_note').on('input',function(){
			if(!validateEmail($(this).val()) && $(this).val()!=""){
				$('.single_add_to_cart_button').removeAttr('disabled');
			}else{
				$('.single_add_to_cart_button').prop('disabled','true');
			}
			
			
		});
	});
	
   
    </script>
	
		<?php
		
		
	}
  

    //
 
   

}



// Custom hidden field in add to cart form
add_action( 'woocommerce_before_add_to_cart_button', 'hidden_field_before_add_to_cart_button', 5 );
function hidden_field_before_add_to_cart_button(){
    echo '<input type="hidden" name="product_note" id="product_note" value="">';
}

// Add customer note to cart item data
add_filter( 'woocommerce_add_cart_item_data', 'add_product_note_to_cart_item_data', 20, 2 );
function add_product_note_to_cart_item_data( $cart_item_data, $product_id ){
    if( isset($_POST['product_note']) && ! empty($_POST['product_note']) ){
        $product_note = sanitize_textarea_field( $_POST['product_note'] );
        $cart_item_data['product_note'] = $product_note;
    }
    return $cart_item_data;
}


function plugin_republic_get_item_data( $item_data, $cart_item_data ) {
	if( isset( $cart_item_data['product_note'] ) ) {
	$item_data[] = array(
	'key' => __( 'Email for this course', 'plugin-republic' ),
	'value' => wc_clean( $cart_item_data['product_note'] )
	);
	}
	return $item_data;
   }
   add_filter( 'woocommerce_get_item_data', 'plugin_republic_get_item_data', 10, 2 );

   function plugin_republic_checkout_create_order_line_item( $item, $cart_item_key, $values, $order ) {
	if( isset( $values['product_note'] ) ) {
	$item->add_meta_data(
	__( 'Email for this course', 'plugin-republic' ),
	$values['product_note'],
	true
	);
	}
   }
   add_action( 'woocommerce_checkout_create_order_line_item', 'plugin_republic_checkout_create_order_line_item', 10, 4 );

   function plugin_republic_order_item_name( $product_name, $item ) {
	if( isset( $item['product_note'] ) ) {
	$product_name .= sprintf(
	'<ul><li>%s: %s</li></ul>',
	__( 'Email for this course', 'plugin_republic' ),
	esc_html( $item['product_note'] )
	);
	}
	return $product_name;
   }
   add_filter( 'woocommerce_order_item_name', 'plugin_republic_order_item_name', 10, 2 );
   
   add_action( 'woocommerce_review_order_before_submit', 'bbloomer_privacy_message_below_checkout_button' );
	
   function bbloomer_privacy_message_below_checkout_button() {
	  echo '
	  <div class="text-danger text-left" style="width:100%;">
	      <input type="checkbox" id="accept-placing-order">
	  <small>
	  I agree that all courses offered on this page are pure online and only technical support regarding my account login credentials will be provided.</small>
	  </div><br>'.
		  "<script type='text/javascript'>
			jQuery(document).ready(function($){
				$('#place_order').prop('disabled','true');
				$('#accept-placing-order').click(function(){
					if(this.checked){
						$('#place_order').removeAttr('disabled');
					}else{
					$('#place_order').prop('disabled','true');
					}
				});
				console.log('sample');
			});
    </script>";
   }


	add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
	function woocommerce_custom_single_add_to_cart_text() {
		global $product;
	    $car = $product->get_category_ids();
	
		if(array_search(35,$car) === 0){
			return __( 'Go to Collection', 'woocommerce' ); 
		}
		return __( 'Add to Cart', 'woocommerce' ); 
		
	}


	add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
	function woocommerce_custom_product_add_to_cart_text() {
		global $product;
	    $car = $product->get_category_ids();
	
		if(array_search(35,$car) === 0){
			return __( 'Go to Collection', 'woocommerce' ); 
		}
		
		return __( 'Select Options', 'woocommerce' ); 
	}

	