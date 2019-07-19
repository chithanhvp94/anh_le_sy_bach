<div class="col-xs-12 col-sm-12 col-md-12 most-popular single-post-template">
    <div class="container nopadding">
        <div class="box-content-single-product-details">



            <div class="row">

                <div class="box-content-single-product-details">
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-page">
                        <h1>
                           <?php the_title(); ?>
                        </h1>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-12 col-md-12 left-most-popular">
                    <?php the_content(); ?>
                </div>

                <?php
                do_action('after_single_page');
                ?>






            </div>
        </div>
    </div>
</div>