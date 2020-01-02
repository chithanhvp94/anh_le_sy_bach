<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
};

$atp=$product->get_gallery_image_ids();
$atp_first=$atp[0];
?>
<div class="col-xs-6 col-sm-4 col-md-3 item-product-loop">


    <div class="col-xs-12 col-sm-12 col-md-12 nopadding thumbnail-product">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('medium'); ?>
            <div class="before-image-hover">
                <?php
                if($atp_first){
                    $imgsrc=wp_get_attachment_image_src($atp_first,'medium');
                    ?>
                    <img src="<?=$imgsrc[0]; ?>">
                <?php
                }
                ?>

            </div>

        </a>
        <span data-fancybox="modal" data-src="#modal-quick-view-product<?=get_the_ID(); ?>" class="quick-view-product">
                                    Xem nhanh
                                </span>

        <?php
//        if( $product->is_type( 'simple' ) ):
//        if ( $product->is_in_stock() && $product->get_regular_price()) : 
        ?>
<!--        <a href="javascript:;" data-id="<?=get_the_ID(); ?>" class="btn-add-to-cart link-btn-add-to-cart"></a>-->
        <?php
//        endif;
//        endif;
        ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-product-loop">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center price-product-loop">
        <?=$product->get_price_html();?>
    </div>
<!--
    <div class="col-xs-12 col-sm-12 col-md-12 text-center nopadding note-sale-text-product">
        Buy Now, Pay Later!
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center nopadding payment-method-product">
        <?php
        echo wpautop(get_field('product_text_sale'));
        ?>
    </div>
-->
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center learn-more">
        <a href="<?php the_permalink(); ?>" class="btn-learn-more">Xem thêm</a>
    </div>


</div>

<?php
do_action('after_loop_item_product');
?>
