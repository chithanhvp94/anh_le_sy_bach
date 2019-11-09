<?php
/**
 * ladystars_theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ladystars_theme
 */

if ( ! function_exists( 'ladystars_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ladystars_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ladystars_theme, use a find and replace
		 * to change 'ladystars_theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ladystars_theme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'ladystars_theme' ),
			'menu-sticky' => 'Menu sticky',
			'menu-footer-social' => 'Menu footer mạng xã hội',
			'menu-footer-contact' => 'Menu footer liên hệ',
			'menu-footer-product' => 'Menu footer sản phẩm',
			'menu-footer-info' => 'Menu footer giới thiệu',
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'ladystars_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
        // Declare WooCommerce support.
        add_theme_support( 'woocommerce' );
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );
        remove_action('woocommerce_after_single_product_summary','woocommerce_output_related_products',20);
	}
endif;
add_action( 'after_setup_theme', 'ladystars_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ladystars_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'ladystars_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'ladystars_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ladystars_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'ladystars_theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'ladystars_theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ladystars_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ladystars_theme_scripts() {
	wp_enqueue_style( 'ladystars_theme-style', get_stylesheet_uri() );

    wp_enqueue_style( 'ladystars_theme-layerslider', get_template_directory_uri() . '/assets/css/layerslider.css');
    wp_enqueue_style( 'ladystars_theme-style_c', get_template_directory_uri() . '/assets/css/style.css');
	wp_enqueue_script( 'ladystars_theme-greensock', get_template_directory_uri() . '/assets/js/greensock.js', array('jquery'), '', true );
	wp_enqueue_script( 'ladystars_theme-layerslider.kreaturamedia.jquery', get_template_directory_uri() . '/assets/js/layerslider.kreaturamedia.jquery.js', array('jquery'), '', true );
	wp_enqueue_script( 'ladystars_theme-layerslider.transitions', get_template_directory_uri() . '/assets/js/layerslider.transitions.js', array('jquery'), '', true );
	wp_enqueue_script( 'ladystars_theme-core', get_template_directory_uri() . '/assets/js/core.js', array('jquery'), '', true );
	wp_enqueue_script( 'ladystars_theme-lsJquery', get_template_directory_uri() . '/assets/js/lsJquery.js', array('jquery'), '', true );
	wp_enqueue_script( 'ladystars_theme-transition', get_template_directory_uri() . '/assets/js/transition.js', array('jquery'), '', true );
	wp_enqueue_script( 'ladystars_theme-background', get_template_directory_uri() . '/assets/js/background.js', array('jquery'), '', true );
	wp_enqueue_script( 'ladystars_theme-background.init', get_template_directory_uri() . '/assets/js/background.init.js', array('jquery'), '', true );
	wp_enqueue_script( 'ladystars_theme-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'ladystars_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/helper.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function woocommerce_output_related_products_template() {
    global $product;

    $cats_array=array();
    $cats = wp_get_post_terms(get_the_ID(), "product_cat" );
    foreach ( $cats as $cat ) {
        $cats_array[] .= $cat->term_id;
    }

    $tags_array=array();
    $tags = wp_get_post_terms(get_the_ID(), "product_tag" );
    foreach ( $tags as $tag ) {
        $tags_array[] .= $tag->term_id;
    };
    $wp = new WP_Query(
        array(
            'posts_per_page' => 4,
            'post_type' => 'product',
            'post__not_in' => array(get_the_ID()),
            'tax_query' => array(
                'relation' => 'OR',
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'id',
                    'terms' => $cats_array
                ),
                array(
                    'taxonomy' => 'product_tag',
                    'field' => 'id',
                    'terms' => $tags_array
                )
            )
        )
    );
    if($wp->have_posts()):
        while ($wp->have_posts()):
            $wp->the_post();
            $product=new WC_Product(get_the_ID());
            wc_get_template_part( 'content', 'product' );
        endwhile;
    endif;
    wp_reset_postdata();
}

add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs1', 98 );
function woo_rename_tabs1( $tabs ) {
    $tabs['description']['title'] = __( 'Thông tin chi tiết' );
    unset($tabs['reviews']);

    return $tabs;
}
add_action('woocommerce_mini_cart_scroll','woocommerce_mini_cart_scroll');
add_action( 'wp_ajax_nopriv_woocommerce_mini_cart_scroll', 'woocommerce_mini_cart_scroll');
add_action( 'wp_ajax_woocommerce_mini_cart_scroll', 'woocommerce_mini_cart_scroll' );

function woocommerce_mini_cart_scroll(){ ?>
    <a href="javascript:;" id="cartToggle">
        <span class="first">Cart</span>
        <span id="cartCount"><?=WC()->cart->get_cart_contents_count(); ?></span>
    </a>
    <div class="box-mini-cart-template-scroll"><?php woocommerce_mini_cart(); ?></div>
    <?php
    if(isset($_POST['exitfc']) && (int) $_POST['exitfc']==1){
        exit;
    }
}

function get_menu_by_location($menu_name)
{
    $locations = get_nav_menu_locations();
    $menu_id   = $locations[ $menu_name ] ;
    return wp_get_nav_menu_object( $menu_id );
}
