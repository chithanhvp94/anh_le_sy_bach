<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();
?>
<div class="col-xs-12 col-sm-12 col-md-12 nopadding primary-product-template">
    <?php
    do_action('before_loop_archive_wc');
    ?>
</div>


<?php while ( have_posts() ) : the_post(); ?>

    <?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile;?>

<?php do_action( 'woocommerce_end_single_template_product' ); ?>

<?php get_footer();

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
