<?php
/**
 * VW Ecommerce Store functions and definitions
 *
 * @package VW Ecommerce Store
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

/* Theme Setup */
if ( ! function_exists( 'vw_ecommerce_store_setup' ) ) :
 
function vw_ecommerce_store_setup() {

	$GLOBALS['content_width'] = apply_filters( 'vw_ecommerce_store_content_width', 640 );
	
	load_theme_textdomain( 'vw-ecommerce-store', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('vw-ecommerce-store-homepage-thumb',240,145,true);
	
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'vw-ecommerce-store' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', vw_ecommerce_store_font_url() ) );
}
endif;

// Theme Activation Notice
global $pagenow;

if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
add_action( 'admin_notices', 'vw_ecommerce_store_activation_notice' );
}

add_action( 'after_setup_theme', 'vw_ecommerce_store_setup' );

// Notice after Theme Activation
function vw_ecommerce_store_activation_notice() {
	echo '<div class="notice notice-success is-dismissible welcome-notice">';
	echo '<h3>'. esc_html__( 'Warm Greetings to you!!', 'vw-ecommerce-store' ) .'</h3>';
	echo '<p>'. esc_html__( 'Thank you for choosing VW Ecommerce Store Theme. Would like to have you on our Welcome page so that you can reap all the benefits of our VW Ecommerce Store Theme.', 'vw-ecommerce-store' ) .'</p>';
	echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=vw_ecommerce_store_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'vw-ecommerce-store' ) .'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function vw_ecommerce_store_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'vw-ecommerce-store' ),
		'description'   => __( 'Appears on blog page sidebar', 'vw-ecommerce-store' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'vw-ecommerce-store' ),
		'description'   => __( 'Appears on page sidebar', 'vw-ecommerce-store' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'vw-ecommerce-store' ),
		'description'   => __( 'Appears on page sidebar', 'vw-ecommerce-store' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 1', 'vw-ecommerce-store' ),
		'description'   => __( 'Appears on footer 1', 'vw-ecommerce-store' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 2', 'vw-ecommerce-store' ),
		'description'   => __( 'Appears on footer 2', 'vw-ecommerce-store' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 3', 'vw-ecommerce-store' ),
		'description'   => __( 'Appears on footer 3', 'vw-ecommerce-store' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Navigation 4', 'vw-ecommerce-store' ),
		'description'   => __( 'Appears on footer 4', 'vw-ecommerce-store' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Top Bar Social Media', 'vw-ecommerce-store' ),
		'description'   => __( 'Appears on top bar', 'vw-ecommerce-store' ),
		'id'            => 'social-links',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'vw-ecommerce-store' ),
		'description'   => __( 'Appears on shop page', 'vw-ecommerce-store' ),
		'id'            => 'woocommerce-shop-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Single Product Sidebar', 'vw-ecommerce-store' ),
		'description'   => __( 'Appears on shop page', 'vw-ecommerce-store' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'vw_ecommerce_store_widgets_init' );

/* Theme Font URL */
function vw_ecommerce_store_font_url() {
	$font_url      = '';
	$font_family   = array();
	$font_family[] = 'ZCOOL XiaoWei';
	$font_family[] = 'Krub:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i';
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Staatliches';
	$font_family[] = 'Fira Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen:300,400,700';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';		
	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function vw_ecommerce_store_scripts() {
	wp_enqueue_style( 'vw-ecommerce-store-font', vw_ecommerce_store_font_url(), array() );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css' );
	wp_enqueue_style( 'vw-ecommerce-store-basic-style', get_stylesheet_uri() );
	require get_parent_theme_file_path( '/inline-style.php' );
	wp_add_inline_style( 'vw-ecommerce-store-basic-style',$custom_css );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery') ,'',true);
	wp_enqueue_script( 'jquery-superfish', get_template_directory_uri() . '/assets/js/jquery.superfish.js', array('jquery') ,'',true);
	wp_enqueue_script( 'vw-ecommerce-store-custom-scripts-jquery', get_template_directory_uri() . '/assets/js/custom.js', array('jquery') );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/* Enqueue the Dashicons script */
	wp_enqueue_style( 'dashicons' );
}
add_action( 'wp_enqueue_scripts', 'vw_ecommerce_store_scripts' );

function vw_ecommerce_store_ie_stylesheet(){
	wp_enqueue_style('vw-ecommerce-store-ie', get_template_directory_uri().'/css/ie.css');
	wp_style_add_data( 'vw-ecommerce-store-ie', 'conditional', 'IE' );
}
add_action('wp_enqueue_scripts','vw_ecommerce_store_ie_stylesheet');

function vw_ecommerce_store_sanitize_dropdown_pages( $page_id, $setting ) {
  	// Ensure $input is an absolute integer.
  	$page_id = absint( $page_id );
  	// If $page_id is an ID of a published page, return it; otherwise, return the default.
  	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/*radio button sanitization*/
function vw_ecommerce_store_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

/* Excerpt Limit Begin */
function vw_ecommerce_store_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

//define
define('VW_ECOMMERCE_STORE_FREE_THEME_DOC','https://www.vwthemesdemo.com/docs/free-vw-ecommerce-store/','vw-ecommerce-store');
define('VW_ECOMMERCE_STORE_SUPPORT','https://wordpress.org/support/theme/vw-ecommerce-store/','vw-ecommerce-store');
define('VW_ECOMMERCE_STORE_REVIEW','https://wordpress.org/support/theme/vw-ecommerce-store/reviews/','vw-ecommerce-store');
define('VW_ECOMMERCE_STORE_BUY_NOW','https://www.vwthemes.com/themes/wordpress-ecommerce-theme/','vw-ecommerce-store');
define('VW_ECOMMERCE_STORE_LIVE_DEMO','https://www.vwthemes.net/vw-ecommerce-store-pro/','vw-ecommerce-store');
define('VW_ECOMMERCE_STORE_PRO_DOC','https://www.vwthemesdemo.com/docs/vw-ecommerce-store-pro/','vw-ecommerce-store');
define('VW_ECOMMERCE_STORE_FAQ','https://www.vwthemes.com/faqs/','vw-ecommerce-store');
define('VW_ECOMMERCE_STORE_CHILD_THEME','https://developer.wordpress.org/themes/advanced-topics/child-themes/','vw-ecommerce-store');
define('VW_ECOMMERCE_STORE_CONTACT','https://www.vwthemes.com/contact/','vw-ecommerce-store');
define('VW_ECOMMERCE_STORE_CREDIT','https://www.vwthemes.com/themes/free-wordpress-ecommerce-theme/','vw-ecommerce-store');

if ( ! function_exists( 'vw_ecommerce_store_credit' ) ) {
	function vw_ecommerce_store_credit(){
		echo "<a href=".esc_url(VW_ECOMMERCE_STORE_CREDIT).">".esc_html__('Ecommerce WordPress Theme','vw-ecommerce-store')."</a>";
	}
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'vw_ecommerce_store_loop_columns');
	if (!function_exists('vw_ecommerce_store_loop_columns')) {
		function vw_ecommerce_store_loop_columns() {
		return 3; // 3 products per row
	}
}

/* Implement the Custom Header feature. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* Customizer additions. */
require get_template_directory() . '/inc/social-widgets/social-icon.php';

/* Typography */
require get_template_directory() . '/inc/typography/ctypo.php';

/* Implement the About theme page */
require get_template_directory() . '/inc/getstart/getstart.php';