<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
};
get_header();
?>

<div class="col-xs-12 col-sm-12 col-md-12 most-popular most-popular-not-custom">
    <div class="container nopadding">
        <div class="box-content-single-product-details">



            <div class="row">


                <div class="col-xs-12 col-sm-12 col-md-12 left-most-popular">

                    <div class="col-xs-12 col-sm-9 col-md-9 nopadding title-most-popular">
                        ALl Post
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 nopadding">
                        <?php do_action('search_sidebar_template'); ?>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding list-most-popular">

                        <div class="row10 loop-items-post">

                            <?php
                            if(have_posts()):
                            while (have_posts()):
                            the_post();
                           get_template_part('content','loop');
                            endwhile;
                            endif;
                            wp_reset_query();
                            ?>




                        </div>

                        <?php do_action('pagination_template'); ?>



                    </div>


                </div>





            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
