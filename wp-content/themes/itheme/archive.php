<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
};

get_header();
do_action('breadcrumb_template');

//do_action('before_archive_template');
get_parent_category_template(get_cat_ID(single_cat_title( '', false )));
?>
<div class="col-xs-12 col-sm-12 col-md-12 most-popular most-popular-not-custom" >
    <div class="container nopadding" >
        <div class="box-content-single-product-details" >



            <div class="row">


                <div class="col-xs-12 col-sm-12 col-md-12 left-most-popular" >

                    <div class="col-xs-12 col-sm-9 col-md-9 nopadding title-most-popular" >
                      <?php
                      the_archive_title( '<h1 class="archive-page-title">', '</h1>' );
                      ?>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 nopadding" >
                      <?php do_action('search_sidebar_template'); ?>
                    </div>



                        <?php
                        the_archive_description( '<div class="col-xs-12 col-sm-12 col-md-12 nopadding taxonomy-description">', '</div>' );
                        ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding list-most-popular">

                        <div class="row10 loop-items-post">

                            <?php
                            if(have_posts()):
                            while (have_posts()):
                            the_post();
                            get_template_part('content','loop');
                            endwhile;
                            endif;
                            ?>


                        </div>

                        <?php do_action('pagination_template'); ?>


                    </div>


                </div>





            </div>
        </div>
    </div>
</div>


<?php
do_action( 'woocommerce_end_single_template_product' );
get_footer(); ?>
