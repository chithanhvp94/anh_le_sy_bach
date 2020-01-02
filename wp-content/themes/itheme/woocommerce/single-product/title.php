<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author     WooThemes
 * @package    WooCommerce/Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
global $product;
if(get_field('product_text_head')):
?>
<div class="col-xs-12 col-sm-12 col-md-12 nopadding note-product-template">
    <?=get_field('product_text_head'); ?>
</div>
<?php
endif;
?>
<div class="col-xs-12 col-sm-12 col-md-12 nopadding title-page-template single-template-title" >
<?php
the_title( '<h1 class="product_title entry-title">', '</h1>' );
?>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 nopadding product_meta">
<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

    <span class="sku_wrapper"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></span>

<?php endif; ?>
</div>
