<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
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
	exit;
}

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product );
if ( $product->is_in_stock()  && $product->get_regular_price()) : ?>




    <div class="col-xs-12 col-sm-12 col-md-12 nopadding add-tocart-box">

        <form class="cart" method="post" enctype='multipart/form-data'>

            <?php
            do_action( 'woocommerce_before_add_to_cart_button' );
            ?>
            <div class="row">

                <div class="col-xs-6 col-sm-6 col-md-6 left">
                    <input type="hidden" name="add-to-cart" value="<?=get_the_ID(); ?>">
                    <input type="hidden" name="product_id" value="<?=get_the_ID(); ?>">
                    <button type="submit" value="submit" class="btn-add-to-cart">Add to Bag</button>
                </div>

                <?php
    if(get_field('product_text_video_url')):
                ?>
                <div class="col-xs-6 col-md-6 col-sm-6 right">
                   <a href="<?=get_field('product_text_video_url',get_the_ID(),false); ?>" data-fancybox >
                       <button  class="link-box-view-video">
                           <i class="fa fa-play"></i>
                           Watch Video</button >
                   </a>
                </div>
        <?php
        endif;
        ?>

            </div>
            <?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>
        </form>

    </div>



<?php endif; ?>
