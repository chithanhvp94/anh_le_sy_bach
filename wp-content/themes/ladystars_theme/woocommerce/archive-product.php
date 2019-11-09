<?php
defined( 'ABSPATH' ) || exit;
get_header( 'shop' );
$termmeta = get_queried_object();
?>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding breadcrumb">
        <div class="container"><?php woocommerce_breadcrumb(' / '); ?></div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding main-product">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 template-main-loop">
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-page-template single-template-title">
                        <h1 class="archive-page-title"><?php single_cat_title("", true);?></h1>
                    </div>
                    <?php the_archive_description( '<div class="col-xs-12 col-sm-12 col-md-12 nopadding description-taxonomy">', '</div>' );?>
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding list-items-product">
                        <div class="row5 loop-items-post">
                            <?php
                            if (is_search()) {
                                if (have_posts()):
                                    while (have_posts()):
                                        the_post();
                                        wc_get_template_part('content', 'product');
                                    endwhile;
                                endif;
                            } else {
                                $cate = get_queried_object();
                                $cateID = $cate->term_id;
                                $tparams = array(
                                    'posts_per_page' => -1,
                                    'post_type' => 'product',
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'product_cat',
                                            'field' => 'id',
                                            'terms' => $cateID
                                        )
                                    )
                                );
                                $twc_query = new WP_Query($tparams);
                                if ($twc_query->have_posts()):
                                    while ($twc_query->have_posts()):
                                        $twc_query->the_post();
                                        wc_get_template_part('content', 'product');
                                    endwhile;
                                endif;
                                wp_reset_query();
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                        if (is_search()) { ?>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding pagination">
                                <?php
                                if(function_exists('load_more_button')){
                                    load_more_button();
                                }
                                else{
                                    global $wp_query;

                                    $big = 999999999;
                                    echo paginate_links( array(
                                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                                        'format' => '?paged=%#%',
                                        'prev_text'    => __('<i class="glyphicon glyphicon-chevron-left"></i>'),
                                        'next_text'    => __('<i class="glyphicon glyphicon-chevron-right"></i>'),
                                        'current' => max( 1, get_query_var('paged') ),
                                        'total' => $wp_query->max_num_pages
                                    ) );
                                }
                                ?>
                            </div>
                        <?php } else { ?>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding description-endt-taxonomy">
                                <?=get_field('template_description_product_cat', 'product_cat_'.$termmeta->term_id)?>
                            </div>
                        <?php }
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer( 'shop' );
