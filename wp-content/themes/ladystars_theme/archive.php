<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
    <div class="col-xs-12 col-sm-12 col-md-12 most-popular most-popular-not-custom" >
        <div class="container nopadding" >
            <div class="box-content-single-product-details" >
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 left-most-popular" >
                        <div class="col-xs-12 col-sm-9 col-md-9 nopadding title-most-popular" ><?php the_archive_title( '<h1 class="archive-page-title">', '</h1>' );?></div>
                        <div class="col-xs-12 col-sm-3 col-md-3 nopadding" >
                            <form action="<?=home_url(); ?>" method="get" class="form-search-sidebar-post" autocomplete="off">
                                <input type="text" name="s" placeholder="Search" class="search-post-input">
                                <button type="submit" value="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <?php the_archive_description( '<div class="col-xs-12 col-sm-12 col-md-12 nopadding taxonomy-description">', '</div>' );?>
                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding list-most-popular">
                            <div class="row10 loop-items-post">
                                <?php
                                if(have_posts()):
                                    while (have_posts()):
                                        the_post();
                                        get_template_part('template-parts/content');
                                    endwhile;
                                endif;
                                ?>
                            </div>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
get_footer();
