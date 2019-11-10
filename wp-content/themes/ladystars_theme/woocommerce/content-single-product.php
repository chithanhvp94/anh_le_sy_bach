<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<div class="col-xs-12 col-sm-12 col-md-12 nopadding primary-product-template" >
    <div class="container" >
        <?php do_action( 'woocommerce_before_single_product' ); ?>
        <div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php do_action( 'woocommerce_before_single_product_summary' );?>
            <div class="col-xs-12 col-sm-12 col-md-5 open-list-info-productentry-summary">
                <?php do_action( 'woocommerce_single_product_summary' );?>
            </div><!-- .summary -->
            <?php do_action( 'woocommerce_after_single_product_summary' ); ?>
        </div>
        <?php do_action( 'woocommerce_after_single_product' ); ?>
    </div>
</div>
<?php do_action( 'woocommerce_after_single_template_product' ); ?>
<div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center medium-down-one-whole">
    <h4 class="title-medium-down-one-whole">Still got a question?</h4>
    <a href="<?=home_url('/contact')?>"><button class="btn-talk-to-us">Talk to us</button></a>
</div>
<div class="col-xs-12 col-sm-12 col-md-12 list-items-product list-post-related" >
    <div class="container" >
        <div class="col-xs-12 col-sm-12 col-md-12 nopadding post-related">
            Product Related
        </div>
        <div class="row5">
        <?php woocommerce_output_related_products_template(); ?>
        </div>
    </div>
</div>
