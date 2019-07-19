<?php
/**
 * Storefront hooks
 *
 * @package storefront
 */
add_filter( 'template_include','page_visua_include_dir_template');

add_action('init','remove_default_template_header_page');

add_action('after_loop_post','related_post_template');

add_action('after_single_page','post_new_template');

add_action('before_archive_template','get_all_category_template');

add_action('before_blog_template','blog_top_post_header');
//add_action('before_blog_template','get_all_category_template');

add_filter('box_show_add_tocart_template','box_show_add_tocart_template',10,1);

add_action( 'wp_ajax_nopriv_add_to_cart_template', 'add_to_cart_template' );

add_action( 'wp_ajax_add_to_cart_template', 'add_to_cart_template' );

add_action('woocommerce_mini_cart_scroll','woocommerce_mini_cart_scroll');



add_action( 'wp_ajax_nopriv_woocommerce_mini_cart_scroll', 'woocommerce_mini_cart_scroll');

add_action( 'wp_ajax_woocommerce_mini_cart_scroll', 'woocommerce_mini_cart_scroll' );


add_action('wp_template_blog','feature_post_in_category');
add_action('wp_template_blog','blog_category_post_object');
add_action('wp_template_blog','blog_template_get_videobox');