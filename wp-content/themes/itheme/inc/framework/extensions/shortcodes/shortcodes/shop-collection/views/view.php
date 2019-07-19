<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<div class="col-xs-12 col-sm-12 col-md-12 nopadding box-template" >
    <div class="box-center" >

        <div class="col-xs-12 col-sm-12 col-md-12 nopadding owl-carousel owl-theme box-template-home">

            <?php foreach ( $atts['tabs'] as $tab ) : ?>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center item-box-template" >
                <a href="<?=esc_url($tab['tab_link']); ?>" ><img src="<?php print_r($tab['tab_img']['url']); ?>" /> </a>
                <div class="col-xs-12 col-sm-12 col-md-12 nopadding info-item-box-template" >
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-box" >
                        <h2><?=$tab['tab_title']; ?></h2>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center text-items-box-template" >
                       <?=do_shortcode($tab['tab_content']); ?>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center" >
                        <a href="<?=esc_url($tab['tab_link']); ?>" class="button-outline" ><?=__('Shop Collection','akasa'); ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>


    </div>
</div>