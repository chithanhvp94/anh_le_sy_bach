<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
};
get_header();
do_action('before_archive_template');
?>



<?php
do_action('before_blog_template');
//get_all_category_template();
?>

<div style="display:none;">
   <?php
//        $categories = get_the_category();
//        $category_id = $categories[0]->cat_ID;
//        print_r($category_id);
//        print_r('<br>');
//        print_r($categories);
//        print_r('<br>');
//        print_r(get_cat_ID(single_cat_title('')));
    ?>
</div>
    <div class="col-xs-12 col-sm-12 col-md-12 most-popular" >
        <div class="container nopadding" >
            <div class="box-content-single-product-details" >



                <div class="row">


                    <div class="col-xs-12 col-sm-8 col-md-8 left-most-popular" >

                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-most-popular" >
                            MOST POPULAR
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding list-most-popular">

                            <div class="row10">

                                <?php
                                if(have_posts()):
                                    while (have_posts()):
                                        the_post();
                                        get_template_part('content','blog');
                                    endwhile;
                                endif;
                                ?>






                            </div>

                        </div>


                    </div>
                    <?php
                    get_sidebar('blog');
                    ?>





                </div>
            </div>
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 nopadding loop-info-product loop-info-product-most-popular">
        <div class="container">

            <div class="box-content-single-product-details">









                <?php do_action('wp_template_blog'); ?>














            </div>

        </div>
    </div>


<?php
do_action('after_content_blog');
do_action( 'woocommerce_end_single_template_product' );
get_footer();
?>