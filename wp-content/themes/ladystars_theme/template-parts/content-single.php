<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
};
?>
<div class="box-content-single-product-details">
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-page">
        <h1>
            <?php the_title(); ?>
        </h1>
    </div>
</div>


<div class="col-xs-12 col-sm-8 col-md-8 left-most-popular">
    <?php the_content(); ?>

    <div class="col-xs-12 col-sm-12 col-md-12 nopadding addthis" >
        <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53b0dacb67434f4b"></script>
        <!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_inline_share_toolbox_akvh"></div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding tags-template">
        Tags : <?php the_tags(' '); ?>
    </div>
</div>

