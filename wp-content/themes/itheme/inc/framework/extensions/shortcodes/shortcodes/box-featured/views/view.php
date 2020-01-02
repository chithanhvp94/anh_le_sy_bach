<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<div class="col-xs-12 col-sm-12 col-md-12 text-center title-page-featured">
    <?=$atts['box_title']; ?>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 nopadding content-box-page-featured">
    <?=wpautop($atts['box_content']); ?>
</div>