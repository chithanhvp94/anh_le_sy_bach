<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>
<div class="box-center-shop-template-home">

    <div class="box-center-shop-template-home" >
        <div class="col-xs-12 col-sm-12 col-md-12 nopadding owl-carousel owl-theme box-div-shop-template" >
            <?php foreach ( $atts['tabs'] as $tab ) : ?>
            <div class="col-xs-12 col-sm-12 col-md-12 items-box-div-shop-template" >
                <a href="<?=esc_url($tab['tab_link']); ?>" ><img src="<?=$tab['tab_img']['url']; ?>" /> </a>
                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-secondary-wide-shop" >
                    <h2><?=$tab['tab_title']; ?></h2>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center text-secondary-dark-shop" >
                    <?=do_shortcode($tab['tab_content']); ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center" >
                    <a href="<?=esc_url($tab['tab_link']); ?>" class="button-outline" ><?=__('Select','akasa'); ?></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
