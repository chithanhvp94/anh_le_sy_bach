<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
};
?>

<div class="col-xs-12 col-sm-12 col-md-12 nopadding even-more-reasons-to-love-luxy" >


    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-event-more-love-luxy" >
        <?=$atts['title'];?>
    </div>

    <div class="box-template-event" >

        <div class="col-xs-12 col-sm-12 col-md-12 nopadding current-even-more-reasons-to-love-luxy owl-carousel owl-theme" >

            <?php
            foreach ( $atts['tabs'] as $tab ) : ?>
            <div class="col-xs-12 col-sm-12 col-md-12 padding10 items-event" >
                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center icon-box-event" >
                    <i class="<?=$tab['tab_icon']; ?>"></i>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-event text-center" >
                    <?=$tab['tab_title']; ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center content-event" >
                    <?=do_shortcode(wpautop($tab['tab_content'])); ?>
                </div>
            </div>
                <?php
            endforeach; ?>

        </div>

    </div>
</div>
