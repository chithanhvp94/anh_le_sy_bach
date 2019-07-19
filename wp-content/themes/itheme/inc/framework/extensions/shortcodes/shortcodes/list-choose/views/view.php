<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
};
$dem=1;
?>
<div class="shop-text-secondary-dark" >
    <?php
    foreach ( $atts['tabs'] as $tab ) : ?>
        <div class="col-xs-12 col-sm-12 col-md-12 nopadding">

            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-shop-text-secondary-dark">
                <?=$dem.' . '.$tab['tab_title']; ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 nopadding info-shop-text-secondary-dark text-center">
                <?=wpautop($tab['tab_content']); ?>
            </div>

        </div>

        <?php
        $dem++;
    endforeach; ?>
</div>
