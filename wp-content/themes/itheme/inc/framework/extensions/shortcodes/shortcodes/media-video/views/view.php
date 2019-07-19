<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div class="col-xs-12 col-sm-12 col-md-12 nopadding box-video-template">
    <div class="box-center-shop">
        <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-video-template-shop-secondary text-center">

            <div class="left">
                <a href="<?=$atts['url']; ?>" data-fancybox>
                    <span class="fa fa-play"></span>
                    <img src="<?=$atts['upload']['url']; ?>"> </a>
            </div>

            <div class="right">
                <div class="title-right-box-shop-video">
                    <span> <?=$atts['title']; ?></span>
                </div>

                <div class="text-info-watch-video">
                    <?=$atts['description']; ?>
                </div>
            </div>

        </div>
    </div>
</div>
