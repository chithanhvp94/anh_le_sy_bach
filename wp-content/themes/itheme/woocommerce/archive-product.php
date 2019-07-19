<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();
 do_action('before_loop_archive_wc');

$term=get_query_var('product_cat');
$termmeta=get_term_by('slug',$term,'product_cat');
$display_type = get_term_meta( $termmeta->term_id, 'display_type', true );

if(!$display_type||$display_type=='products'):
 ?>
<div class="col-xs-12 col-sm-12 col-md-12 nopadding main-product">

    <div class="container">


        <div class="row">


            <?php //get_sidebar('product'); ?>

            <div class="col-xs-12 col-sm-12 col-md-12 template-main-loop">

                <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-page-template single-template-title">
                   <?php
                   //the_archive_title( '<h1 class="archive-page-title">', '</h1>' );
                   ?>
                    <h1 class="archive-page-title"><?php single_cat_title("", true);?></h1>
                </div>
                <?php
                the_archive_description( '<div class="col-xs-12 col-sm-12 col-md-12 nopadding description-taxonomy">', '</div>' );
                ?>



                <div class="col-xs-12 col-sm-12 col-md-12 nopadding sort-template-wc">

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 nopadding list-items-product">


                    <div class="row5">
                        <?php
                        $cate = get_queried_object();
                        $cateID = $cate->term_id;
                        ?>
                        <div style="display:none">
                            <?php echo $cateID;?>
                        </div>
                        <?php
                        $tparams = array(
                            'posts_per_page' => -1,
                            'post_type' => 'product',
                            'tax_query'     => array(
                                array(
                                    'taxonomy'  => 'product_cat',
                                    'field'     => 'id', 
                                    'terms'     => $cateID
                                )
                            )
                        );
                        $twc_query = new WP_Query($tparams);
                        if($twc_query -> have_posts()):
                        while ($twc_query -> have_posts()):
                        $twc_query -> the_post();


                         wc_get_template_part( 'content', 'product' );

                        endwhile;
                        endif;
                        wp_reset_query();
                        ?>



                    </div>



                </div>

                <?php do_action('after_loop_archive_wc'); ?>

            </div>

        </div>



    </div>
</div>
<?php
endif;
get_footer( ); ?>
