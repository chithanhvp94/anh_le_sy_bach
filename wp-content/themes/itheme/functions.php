<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
};

@include "inc/framework.php";
@include "inc/config.php";
@include "inc/class-storefront.php";

add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs1', 98 );
function woo_rename_tabs1( $tabs ) {

	$tabs['description']['title'] = __( 'Thông tin chi tiết' );		// Rename the description tab
	$tabs['reviews']['title'] = __( 'Đánh giá' );				// Rename the reviews tab

	return $tabs;

}

/**
 * Change number of products that are displayed per page (shop page)
 */
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 120;
  return $cols;
}

