<?php
/**
 * Single variation cart button
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>



<div class="col-xs-12 col-sm-12 col-md-12 nopadding add-tocart-box woocommerce-variation-add-to-cart variations_button">

    <form>

        <div class="row">

            <div class="col-xs-6 col-sm-6 col-md-6 left">
                <input type="hidden" name="add-to-cart" value="<?php echo absint( $product->get_id() ); ?>" />
                <input type="hidden" name="product_id" value="<?php echo absint( $product->get_id() ); ?>" />
                <input type="hidden" name="variation_id" class="variation_id" value="0" />
                <button type="submit" value="submit" class="single_add_to_cart_button button alt btn-add-to-cart">Add to Bag</button>
            </div>


            <?php
            if(get_field('product_text_video_url')):
                ?>
                <div class="col-xs-6 col-md-6 col-sm-6 right">
                    <a href="<?=get_field('product_text_video_url'); ?>" data-fancybox >
                        <button  class="link-box-view-video">
                            <i class="fa fa-play"></i>
                            Watch Video</button >
                    </a>
                </div>
                <?php
            endif;
            ?>

        </div>
    </form>

</div>