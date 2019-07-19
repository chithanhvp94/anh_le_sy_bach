<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
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
if(get_field('product_text_shipping')):
?>
<div class="col-xs-12 col-sm-12 col-md-12 nopadding shipping-product-text">
   <?=wpautop(get_field('product_text_shipping')); ?>
</div>
<?php
endif;
if(get_field('product_text_video_url')):
?>
<div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
    <div class="col-xs-12 col-sm-8 col-md-8 nopadding lear-more-video">

        <div class="box-content-text-lear-more-video">
            Learn more about <?php the_title(); ?>. Watch our video.
        </div>

        <div class="thumbnail-product-video" style="background-image: url('<?php
        $img=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'thumbnail');
        echo $img[0];
        ?>');">
            <a data-fancybox href="<?=get_field('product_text_video_url',get_the_ID(),false); ?>" data-fancybox=""></a>
        </div>
    </div>
</div>
<?php
endif;
?>

<div class="col-xs-12 col-sm-12 col-md-12 nopadding product_meta product_meta_template">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<span class="posted_in">' . _n( 'Category:', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

</div>
