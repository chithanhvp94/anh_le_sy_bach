<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( 'category' === $atts['style']['ruler_type'] ):
    $args=array(
        'post_type'=>'product',
        'showposts'=>6,
        'product_cat'=>$atts['style']['category']['category']
    );
else:
    $args=array(
        'post_type'=>'product',
        'showposts'=>6
    );
endif;
do_action('shop_the_look',$args);
?>
