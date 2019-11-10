<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ladystars_theme
 */

get_header();
?>
    <div class="col-xs-12 col-sm-12 col-md-12 breadcrumb-post">
        <div class="container">
            <?php woocommerce_breadcrumb(' / '); ?>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 most-popular single-post-template">
        <div class="container nopadding">
            <div class="box-content-single-product-details">
                <div class="row">
                    <?php
                    if(have_posts()):
                        while (have_posts()):
                            the_post();
                            get_template_part('template-parts/content','single');
                        endwhile;
                    endif;
                    wp_reset_query();
                    get_sidebar();
                    related_post_template();
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
