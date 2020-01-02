<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
?>

<div class="col-xs-12 col-sm-12 col-md-12 nopadding get-inspired-with-our-hair" >
    <div class="container padding10" >



        <div class="box-get-inspired-with-our-hair" >

            <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-content-get-inspired-with-our-hair" >
                <div class="col-xs-12 col-sm-6 col-md-6 nopadding left" >
                    <a href="<?=esc_url($atts['box_link']); ?>" >
                        <img src="<?=esc_url($atts['box_img']['url']); ?>" /> </a>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 nopadding right" style="background-color: <?=$atts['background_color']; ?>" >

                    <div class="ratio-get-inspired-with-our-hair" >

                        <div class="position-ratio-get-inspired-with-our-hair" >

                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-ratio-get-inspired-with-our-hair" >
                                <a href="<?=esc_url($atts['box_link']); ?>" > <?=$atts['box_tax']; ?></a>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-box-ratio-get-inspired-with-our-hair" >
                                <a href="<?=esc_url($atts['box_link']); ?>" > <?=$atts['box_title']; ?></a>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center content-ratio-box-content-get-inspired-with-our-hair" >
                          <?=wpautop($atts['box_content']); ?>
                             </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center readmore-link" >
                                <a href="<?=esc_url($atts['box_link']); ?>" ><?=__('Continue reading','akasa'); ?></a>
                            </div>

                        </div>



                    </div>

                </div>

            </div>







        </div>

    </div>
</div>
