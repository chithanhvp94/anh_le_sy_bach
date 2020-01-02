<?php
/**
 * Storefront Class
 *
 * @author   WooThemes
 * @since    2.0.0
 * @package  storefront
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Storefront' ) ) :


	class Storefront {

		private static $structured_data;


		public function __construct() {
            $this->define('MY_TEMPLATE_CUSTOM',dirname(__FILE__));


            load_theme_textdomain( 'storefront', get_template_directory() . '/languages' );
            add_action( 'after_setup_theme',          array( $this, 'setup' ) );
			add_action( 'widgets_init',               array( $this, 'widgets_init' ) );
			add_action( 'wp_enqueue_scripts',         array( $this, 'scripts' ),       10 );
			add_action( 'wp_enqueue_scripts',         array( $this, 'child_scripts' ), 30 ); // After WooCommerce.
			add_filter( 'body_class',                 array( $this, 'body_classes' ) );
			add_filter( 'wp_page_menu_args',          array( $this, 'page_menu_args' ) );
			add_action( 'wp_footer',                  array( $this, 'get_structured_data' ) );
            add_filter('fw_ext_shortcodes_disable_shortcodes',array($this,'_filter_theme_disable_default_shortcodes'));
            add_filter( 'wp_calculate_image_srcset', '__return_false' );

            require_once dirname( __FILE__ ) . '/class-storefront-template.php';

            require_once dirname( __FILE__ ) . '/storefront/functions.php';

            require_once dirname( __FILE__ ) . '/storefront/woocommerce.php';

            require_once dirname( __FILE__ ) . '/class-storefront-template-menu.php';

            require_once dirname( __FILE__ ) . '/class-storefront-filter.php';

            require_once dirname( __FILE__ ) . '/class-storefront-footer.php';

            new storefront_footer();
            require_once dirname( __FILE__ ) . '/class-storefront-functions.php';

            require_once dirname( __FILE__ ) . '/class-storefront-template-hooks.php';

            remove_action('woocommerce_after_single_product_summary','woocommerce_output_related_products',20);

            load_theme_textdomain( 'akasa', get_stylesheet_directory() . '/languages/' );

        }

		/**
		 * Sets up theme defaults and registers support for various WordPress features.
		 *
		 * Note that this function is hooked into the after_setup_theme hook, which
		 * runs before the init hook. The init hook is too late for some features, such
		 * as indicating support for post thumbnails.
		 */
		public function setup() {

			add_theme_support( 'post-thumbnails' );


			// Declare WooCommerce support.
			add_theme_support( 'woocommerce' );
			add_theme_support( 'wc-product-gallery-zoom' );
			add_theme_support( 'wc-product-gallery-lightbox' );
			add_theme_support( 'wc-product-gallery-slider' );
            add_theme_support('menus');
			// Declare support for title theme feature.
			add_theme_support( 'title-tag' );

		}

		/**
		 * Register widget area.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
		 */
		public function widgets_init() {



            $args = array(
                'name'          => __( 'Sidebar', 'Sidebar' ),
                'id'            => 'unique-sidebar-id1',
                'description'   => '',
                'class'         => '',
                'before_widget' => '<div id="%1$s" class="col-xs-12 col-sm-12 col-md-12 nopadding widget %2$s box-sidebar-template">',
                'after_widget'  => '</div>',
                'before_title'  => '<div class="col-xs-12 col-sm-12 col-md-12 nopadding title-sidebar">',
                'after_title'   => '</div>'
            );

            register_sidebar( $args );

		}

		/**
		 * Enqueue scripts and styles.
		 *
		 * @since  1.0.0
		 */

        public function _filter_theme_disable_default_shortcodes($to_disable) {
            $to_disable[] = 'accordion';
            $to_disable[] = 'button';

            return $to_disable;
        }
		public function scripts() {
			global $storefront_version;

			/**
			 * Styles
			 */
//            wp_enqueue_style( 'storefront-Roboto-Condensed', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:300,400,500,700', '', $storefront_version );
//            wp_enqueue_style( 'storefront-Montserrat',  'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700', '', $storefront_version );
//            wp_enqueue_style( 'storefront-bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css', '', $storefront_version );
//            wp_enqueue_style( 'storefront-bootstrap-theme', get_template_directory_uri().'/css/bootstrap-theme.min.css', '', $storefront_version );
//            wp_enqueue_style( 'storefront-font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', '', $storefront_version );
//            wp_enqueue_style( 'storefront-owl-carousel', get_template_directory_uri() . '/owl/assets/owl.carousel.css', '', $storefront_version );
//            wp_enqueue_style( 'storefront-css-fancybox', get_template_directory_uri() . '/css/jquery.fancybox.css', '', $storefront_version );
//            wp_enqueue_style( 'storefront-owl-theme-default', get_template_directory_uri() . '/owl/assets/owl.theme.default.css', '', $storefront_version );
//            wp_enqueue_style( 'storefront-jquery-mmenu', get_template_directory_uri() . '/css/jquery.mmenu.all.css', '', $storefront_version );
            wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css', '', $storefront_version );
//            wp_enqueue_style( 'storefront-responsive', get_template_directory_uri() . '/css/responsive.css', '', $storefront_version );

			/**
			 * Scripts
			 */
//            wp_enqueue_script( 'storefront-bootstrap.js', get_template_directory_uri() . '/js/bootstrap.js', array( ), '20120206', true );
//            wp_enqueue_script( 'storefront-jquery-fancybox', get_template_directory_uri() . '/js/jquery.fancybox.js', array( ), '20120206', true );
//            wp_enqueue_script( 'storefront-owl-carousel', get_template_directory_uri() . '/owl/owl.carousel.js', array(), '20130115', true );
//            wp_enqueue_script( 'storefront-jquery-mmenu', get_template_directory_uri() . '/js/jquery.mmenu.all.js', array(), '20130115', true );
//            wp_enqueue_script( 'storefront-site', get_template_directory_uri() . '/js/site.js', array(), '20130115', true );

		}

		/**
		 * Enqueue child theme stylesheet.
		 * A separate function is required as the child theme css needs to be enqueued _after_ the parent theme
		 * primary css and the separate WooCommerce css.
		 *
		 * @since  1.5.3
		 */
		public function child_scripts() {
			if ( is_child_theme() ) {
				wp_enqueue_style( 'storefront-child-style', get_stylesheet_uri(), '' );
			}
		}

		/**
		 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
		 *
		 * @param array $args Configuration arguments.
		 * @return array
		 */
		public function page_menu_args( $args ) {
			$args['show_home'] = true;
			return $args;
		}

		/**
		 * Adds custom classes to the array of body classes.
		 *
		 * @param array $classes Classes for the body element.
		 * @return array
		 */
		public function body_classes( $classes ) {
			// Adds a class of group-blog to blogs with more than 1 published author.
			if ( is_multi_author() ) {
				$classes[] = 'group-blog';
			}

			if ( ! function_exists( 'woocommerce_breadcrumb' ) ) {
				$classes[]	= 'no-wc-breadcrumb';
			}

			/**
			 * What is this?!
			 * Take the blue pill, close this file and forget you saw the following code.
			 * Or take the red pill, filter storefront_make_me_cute and see how deep the rabbit hole goes...
			 */
			$cute = apply_filters( 'storefront_make_me_cute', false );

			if ( true === $cute ) {
				$classes[] = 'storefront-cute';
			}


			// Add class when using homepage template + featured image
			if ( is_page_template( 'template-homepage.php' ) && has_post_thumbnail() ) {
				$classes[] = 'has-post-thumbnail';
			}

			return $classes;
		}


		/**
		 * Add styles for embeds
		 */

		/**
		 * Sets `self::structured_data`.
		 *
		 * @param array $json
		 */
		public static function set_structured_data( $json ) {
			if ( ! is_array( $json ) ) {
				return;
			}

			self::$structured_data[] = $json;
		}

		/**
		 * Outputs structured data.
		 *
		 * Hooked into `wp_footer` action hook.
		 */
		public function get_structured_data() {
			if ( ! self::$structured_data ) {
				return;
			}
			$structured_data['@context'] = 'http://schema.org/';

			if ( count( self::$structured_data ) > 1 ) {
				$structured_data['@graph'] = self::$structured_data;
			} else {
				$structured_data = $structured_data + self::$structured_data[0];
			}

			echo '<script type="application/ld+json">' . wp_json_encode( $this->sanitize_structured_data( $structured_data ) ) . '</script>';
		}

		/**
		 * Sanitizes structured data.
		 *
		 * @param  array $data
		 * @return array
		 */
		public function sanitize_structured_data( $data ) {
			$sanitized = array();

			foreach ( $data as $key => $value ) {
				if ( is_array( $value ) ) {
					$sanitized_value = $this->sanitize_structured_data( $value );
				} else {
					$sanitized_value = sanitize_text_field( $value );
				}

				$sanitized[ sanitize_text_field( $key ) ] = $sanitized_value;
			}

			return $sanitized;
		}

        private function define( $name, $value ) {
            if ( ! defined( $name ) ) {
                define( $name, $value );
            }
        }
	}
endif;

return new Storefront();
