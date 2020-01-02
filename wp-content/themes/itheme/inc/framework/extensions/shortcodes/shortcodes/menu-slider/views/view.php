<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<div class="col-xs-12 col-sm-12 col-md-12 nopadding slider" >

    <div class="col-xs-12 col-sm-12 col-md-12 menu-template" >
        <div class="container padding10" >

            <?php
            $idtheme=(int) $atts['menuselect'];
            if($idtheme):
            $args= array(
                'container' => '',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => '',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul id="menu-desktop">%3$s</ul>',
                'item_spacing' => 'preserve',
                'depth' => 0,
                'theme_location' => '' );

            do_action('storefront_menu',$idtheme,$args);
            endif;
            ?>

        </div>
    </div>

    <?=do_shortcode($atts['shortcodeslider']); ?>
</div>

