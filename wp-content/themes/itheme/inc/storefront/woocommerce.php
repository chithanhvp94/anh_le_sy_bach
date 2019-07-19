<?php
class storefront_woocommerce{

    public function __construct(){
        add_action('after_loop_archive_wc',array($this,'pagination_archive_wc_template'));

        add_action('after_loop_archive_wc',array($this,'template_description_product_cat'));

        add_action('before_loop_archive_wc',array($this,'breadcrumb_archive_wc'));

        add_action('before_loop_archive_wc',array($this,'display_type_product_cat_template'));

        add_action('woocommerce_output_related_products_template',array($this,'woocommerce_output_related_products_template'));

        add_action('woocommerce_after_single_template_product',array($this,'loop_info_product_box'));

        add_action('woocommerce_after_single_template_product',array($this,'adapter_product_template'));

        add_action('woocommerce_after_single_template_product',array($this,'template_asked_questions'));

        add_action('woocommerce_after_single_template_product',array($this,'button_talk_to_us'));

        add_action('woocommerce_end_single_template_product',array($this,'shop_the_look_product'));

        require_once dirname( __FILE__ ) . '/template-ajax.php';

        add_action('after_loop_item_product',array($this,'modal_product_template'));
        add_action('modal_product_template',array($this,'modal_product_template'));

        add_action('woocommerce_before_single_product_summary',array($this,'slider_product_mobile_template'));
    }
    public function template_description_product_cat(){
        if(is_product_category()):
        $term=get_query_var('product_cat');
        $termmeta=get_term_by('slug',$term,'product_cat');
        ?>

        <div class="col-xs-12 col-sm-12 col-md-12 nopadding description-endt-taxonomy">
            <?php
            $variable = get_field('template_description_product_cat', 'product_cat_'.$termmeta->term_id);
            echo wpautop($variable);
            ?>
        </div>
<?php
endif;
    }
    public function breadcrumb_archive_wc(){
        ?>

        <div class="col-xs-12 col-sm-12 col-md-12 nopadding breadcrumb">
            <div class="container">
                <?php
                woocommerce_breadcrumb(' / ');
                ?>
            </div>
        </div>

<?php
    }
    public function pagination_archive_wc_template(){
        ?>
<div class="col-xs-12 col-sm-12 col-md-12 nopadding pagination">
    <?php
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
    ?>
</div>


<?php

    }
    public function display_type_product_cat_template(){
        if(is_product_category()):
        $term=get_query_var('product_cat');
        $termmeta=get_term_by('slug',$term,'product_cat');
        $display_type = get_term_meta( $termmeta->term_id, 'display_type', true );
        if($display_type=='subcategories'||$display_type=='both'){
            ?>


            <div class="col-xs-12 col-sm-12 col-md-12 nopadding template-dir">

                <div class="container">
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-page-template">
                        <h1><?=$termmeta->name; ?></h1>
                    </div>


                    <?php
                    the_archive_description( '<div class="col-xs-12 col-sm-12 col-md-12 nopadding description-taxonomy">', '</div>' );
                    ?>
                    <div class="row">
<!--                        <div style="display:none;">-->
                        <div>
                            <?php
                            $wp=new WP_Query("showposts=8&product_cat=".$termmeta->slug);
                            if($wp->have_posts()):
                                while ($wp->have_posts()):
                                    $wp->the_post();
                                    $product=new WC_Product(get_the_ID());
                                    $attachment_ids = $product->get_gallery_image_ids();
                                    $atimgid=get_post_thumbnail_id(get_the_ID());
                                    $t_img=wp_get_attachment_image_src($atimgid,'thumbnail_id');
                            ?>
                            <div class="col-xs-6 col-sm-4 col-md-3 item-product-cat-parent">
                                <a href="<?php the_permalink(); ?>"><img src="<?php echo $t_img[0];?>"> </a>
                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-product-items">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center box-btn-items-product-cat">
                                    <a href="<?php the_permalink(); ?>" class="colBtn"><?=__('Select Your Product','akasa'); ?></a>
                                </div>
                            </div>
                            <?php
                            endwhile;
                            endif;
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>

                    <div class="row" style="display:none;">

                        <?php
                        $product_categories = get_categories( apply_filters( 'woocommerce_product_subcategories_args', array(
                            'parent'       => $termmeta->term_id,
                            'menu_order'   => 'ASC',
                            'hide_empty'   => 0,
                            'hierarchical' => 1,
                            'taxonomy'     => 'product_cat',
                            'pad_counts'   => 1,
                        ) ) );

                        foreach ($product_categories as $key=>$value):
                            $link=get_term_link($value->slug,'product_cat');
                        ?>
                        
                        <div class="col-xs-6 col-sm-4 col-md-3 item-product-cat-parent">
                            <a href="<?=$link; ?>"><img src="<?php
                      $image_cat=get_term_meta( $value->term_id, 'thumbnail_id', true);
                      $img=wp_get_attachment_image_src($image_cat,'full');
                      echo $img[0];
                                ?>"> </a>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-product-items">
                                <h3><a href="<?=$link; ?>"><?=$value->name; ?></a></h3>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center number-product">
                                <?=$value->count; ?> <?=__('Product','akasa'); ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center box-btn-items-product-cat">
                                <a href="<?=$link; ?>" class="colBtn"><?=__('Select Your Product','akasa'); ?></a>
                            </div>
                        </div>
                            <?php
                            endforeach;
                            ?>


                    </div>
                </div>
            </div>
<?php
            if($display_type=='both'){
                ?>


                <div class="col-xs-12 col-sm-12 col-md-12 nopadding main-product">

                    <div class="container">


                        <div class="row">


                            <?php get_sidebar('product'); ?>

                            <div class="col-xs-12 col-sm-12 col-md-9 template-main-loop">





                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding sort-template-wc">

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding list-items-product">


                                    <div class="row5">

                                        <?php
                                        if(have_posts()):
                                            while (have_posts()):
                                                the_post();


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
            }
        }
        endif;
    }
    public function woocommerce_output_related_products_template(){
        global $post;
        global $product;
        ?>



            <?php
            $cats_array=array();
            $cats = wp_get_post_terms(get_the_ID(), "product_cat" );
            foreach ( $cats as $cat ) {
                $cats_array[] .= $cat->term_id;
            };
            $tags_array=array();
            $tags = wp_get_post_terms(get_the_ID(), "product_tag" );
            foreach ( $tags as $tag ) {
                $tags_array[] .= $tag->term_id;
            };
        $wp = new WP_Query(
            array(
                'posts_per_page' => 4,
                'post_type' => 'product',
                'post__not_in' => array(get_the_ID()),
                'tax_query' => array(
                        'relation' => 'OR',
                        array(
                                'taxonomy' => 'product_cat',
                                'field' => 'id',
                                'terms' => $cats_array
                        ),
                    array(
                        'taxonomy' => 'product_tag',
                        'field' => 'id',
                        'terms' => $tags_array
                    )
                )
            )
        );
        if($wp->have_posts()):
            while ($wp->have_posts()):
                $wp->the_post();
        $product=new WC_Product(get_the_ID());
            wc_get_template_part( 'content', 'product' );
                endwhile;
                endif;
                wp_reset_postdata();
    }
    public function loop_info_product_box(){
        ?>
        <div class="col-xs-12 col-sm-12 nopadding loop-info-product">
            <div class="container">

                <div class="box-content-single-product-details">


                    <!--div class="row">

                        <div class="col-xs-12 col-sm-6 col-md-6 left-details">


                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-block">
                                <h2><?=__("It's all in the details",'akasa'); ?></h2>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding info-excerpt-details">
                                <?=wp_trim_words(strip_tags(strip_shortcodes(get_the_content())),40,'...'); ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding">
                                <a data-fancybox data-fancybox="modal" data-src="#modal-content-single-product"  href="javascript:;" class="view-full">
                                   <?=__('View full details product','akasa'); ?>
                                </a>
                            </div>






                            <div id="modal-content-single-product" >
                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-modal-content-single-product" >
                                    <?php the_title(); ?>
                                </div>
                                <?php
                                the_content();
                                ?>
                            </div>



                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6 right-details">

                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-block">
                                <h2><?=__('Free shipping & 30-day returns','akasa'); ?></h2>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding info-excerpt-details">
                            <?=wp_trim_words(strip_shortcodes(strip_tags(get_field('product_text_shipping_sale'))),40,'...'); ?>
                              </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding">
                                <a data-fancybox data-fancybox="modal" data-src="#modal-content-shipping-product" href="javascript:;" class="view-full">
                                    <?=__('View full shipping &amp; returns details','akasa');?>
                                </a>
                            </div>


                            <div id="modal-content-shipping-product" >
                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-modal-content-single-product" >
                                    <?=__('Free shipping & 30-day returns','akasa'); ?>
                                </div>
                                <?=wpautop(get_field('product_text_shipping_sale')); ?>
                            </div>

                        </div>


                    </div -->

                    <?php
                    if(get_field('product_see_how_it_works')):
                    ?>
                    <div class="col-xs-12 col-sm-12 col-md-12 box-content-get-inspired-with-our-hair noborder box-word-product">


                        <div class="row">

                            <div class="col-xs-6 col-sm-6 col-md-6 nopadding left">
                                <!--a data-fancybox href="<?=get_field('product_see_how_it_works',get_the_ID(),false); ?>"><?php the_post_thumbnail('full'); ?> </a-->
                                <a data-fancybox href="<?=get_field('product_see_how_it_works',get_the_ID(),false); ?>"><img src="<?=wp_get_attachment_url( get_field('product_see_how_it_works_image',get_the_ID(),false) ); ?>" /> </a>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 nopadding right">

                                <div class="ratio-get-inspired-with-our-hair">

                                    <div class="position-ratio-get-inspired-with-our-hair">

                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-ratio-get-inspired-with-our-hair">
                                            <!--a data-fancybox href="<?=get_field('product_see_how_it_works',get_the_ID(),false); ?>">
                                                <?=__('LONGER, FULLER HAIR IN 5 MINUTES.','akasa'); ?>
                                            </a-->
											<a data-fancybox href="<?=get_field('product_see_how_it_works',get_the_ID(),false); ?>">
                                                <?=get_field('product_see_how_it_works_title1',get_the_ID(),false); ?>
                                            </a>
                                        </div>

                                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-box-ratio-get-inspired-with-our-hair">
                                            <a data-fancybox href="<?=get_field('product_see_how_it_works',get_the_ID(),false); ?>">
                                                <!--<?=__('See how it works','akasa'); ?>
                                                <span><?=__('Watch the video','akasa'); ?></span>-->
												<?=get_field('product_see_how_it_works_title2',get_the_ID(),false); ?>
                                                <span><?=get_field('product_see_how_it_works_title3',get_the_ID(),false); ?></span>
                                            </a>
                                        </div>


                                    </div>



                                </div>

                            </div>
                        </div>



                    </div>
                        <?php
                        endif;


                        if(get_field('product_post_object')):
                        ?>

                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-post-in-product">
                        <?=__('POPULAR HAIR TUTORIALS','akasa'); ?>
                    </div>

                    <div class="row10" >

                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding owl-post-in-product owl-post-cat-home owl-carousel owl-theme" >

                            <?php
                            $postinproduct=get_field('product_post_object');
                            foreach ($postinproduct as $key=>$value):
                            ?>
                            <div class="col-xs-12 col-sm-12 col-md-12 padding10 text-center items-post-cat-home" >
                                <a href="<?=get_the_permalink($value->ID); ?>" >
                                 <?=get_the_post_thumbnail($value->ID,'full'); ?>
                                </a>
                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-post-home-cat text-center" >
                                    <a href="<?=get_the_permalink($value->ID); ?>" ><?=$value->post_title; ?></a>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center" >
                                    <a href="<?=get_the_permalink($value->ID); ?>" class="button-pill" ><?=__('Hair Extensions','akasa'); ?></a>
                                </div>
                            </div>
                                <?php
                                endforeach;
                                ?>

                        </div>


                    </div>
                            <?php
                            endif;
                            ?>






                </div>

            </div>
        </div>

<?php
}
public function template_asked_questions(){
        global $post;
        global $product;
    $entries = get_post_meta( get_the_ID(), 'yourprefix_group_field_template', true );
    if($entries):

    ?>

    <div class="col-xs-12 col-sm-12 col-md-12 frequently-asked-questions">
        <div class="container">
            <div class="box-content-single-product-details">

                <h2 class="title-frequently-asked-questions"><?=__('Frequently Asked Questions','akasa'); ?></h2>

                <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-frequently-asked-questions">

                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                        <?php
                        $dem=1;
        foreach ($entries as $key=>$value):
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingpanel<?=$dem; ?>">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$dem; ?>" aria-expanded="false" aria-controls="collapse<?=$dem; ?>">
                                        <?=$value['title']; ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse<?=$dem; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingpanel<?=$dem;?>">
                                <div class="panel-body">
                                    <?=wpautop($value['description']); ?>
                                </div>
                            </div>
                        </div>

            <?php
        $dem++;
        endforeach;
            ?>

                    </div>




                </div>





            </div>
        </div>
    </div>

<?php

endif;
}
public function button_talk_to_us(){
	global $redux_theme;
   ?>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center medium-down-one-whole">
        <h4 class="title-medium-down-one-whole"><?=__('Still got a question?','akasa'); ?></h4>
        <a href="<?=get_the_permalink($redux_theme['opt-page-contact']); ?>"><button class="btn-talk-to-us"><?=__('Talk to us','akasa'); ?></button></a>
    </div>
<?php
}
public function adapter_product_template(){
    if(get_field('title_editor_adapter_product') && get_field('text_editor_adapter_product') && get_field('image_adapter_product')):
    ?>

    <div class="col-xs-12 col-sm-12 col-md-12 product-multi-tone" >
        <div class="container" >
            <div class="box-content-single-product-details" >
                <div class="row" >

                    <div class="col-xs-12 col-sm-4 col-md-4 left" >

                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-content-left" >

                            <h2 class="title-product-multi-tone"><?=get_field('title_editor_adapter_product'); ?></h2>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding description-product-multi-tone" >
                                <?=wpautop(get_field('text_editor_adapter_product')); ?>
                            </div>


                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 right" >
                        <img src="<?php
                        print_r(get_field('image_adapter_product')['url']);
                        ?>" />
                    </div>





                </div>
            </div>
        </div>
    </div>
<?php
endif;
}
public function shop_the_look_product(){
    $args=array(
        'post_type'=>'product',
        'showposts'=>6
    );
    global $redux_theme;
    ?>
    <section class="fw-main-row shop_the_look_product" >
        <div class="full-width">


            <div class="row">
                <div class="col-xs-12">
                    <?=wpautop($redux_theme['opt-footer-product']); ?>
                 </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
<?php
    do_action('shop_the_look',$args);
    ?>
                </div></div></div></section>
                    <?php
}

public function modal_product_template(){
    global $product;
    $atp=$product->get_gallery_image_ids();
    $atp[]=get_post_thumbnail_id(get_the_ID());
    ?>
    <div id="modal-quick-view-product<?=get_the_ID();?>" class="modal-shop-product hidden-template">
        <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-modal" >
            <div class="row" >

                <div class="col-xs-12 col-sm-6 col-md-6 left" >



                    <div id="modal-quick-carousel-example-generic<?=get_the_ID(); ?>" class="carousel slide" data-ride="carousel">


                        <ol class="carousel-indicators">
                            <?php
                            $test=0;
                            foreach ($atp as $k=>$v):
                                ?>
                                <li data-target="#modal-quick-carousel-example-generic<?=get_the_ID(); ?>" data-slide-to="<?=$test; ?>" class="<?php echo $test==0?'active':''; ?>"></li>
                                <?php
                                $test++;
                            endforeach;
                            ?>
                        </ol>


                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php
                            $test=0;
                            foreach ($atp as $k=>$v):
                                ?>
                                <div class="item <?php echo $test==0?'active':''; ?>">
                                    <img src="<?php $imgz=wp_get_attachment_image_src($v,'full');
                                    print_r($imgz[0]);
                                    ?>" alt="<?php the_title(); ?>">
                                </div>
                                <?php
                                $test++;
                            endforeach;
                            ?>
                        </div>

                        <a class="left carousel-control" href="#modal-quick-carousel-example-generic<?=get_the_ID(); ?>" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only"><?=__('Previous','akasa'); ?></span>
                        </a>
                        <a class="right carousel-control" href="#modal-quick-carousel-example-generic<?=get_the_ID(); ?>" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only"><?=__('Next','akasa'); ?></span>
                        </a>
                    </div>



                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 right" >


                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center" >
                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center thumbnail-box" >
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding price-box" >
                            <?php echo $product->get_price_html(); ?>
                        </div>
                        <span class="title-box-template"><?php the_title(); ?></span>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center" >
                        <?php
    if( $product->is_type( 'simple' ) ):
    if ($product->is_in_stock() && $product->get_regular_price()):
    ?>
                        <a href="javascript:;" data-id="<?=get_the_ID(); ?>" class="link-btn-add-to-cart btnaddtocart" ><?=__('Add to cart','akasa'); ?></a>

        <?php
    else:
        ?>
        <a href="javascript:;" class="btnaddtocart" ><?=__('Contact','akasa'); ?></a>
        <?php
    endif;
    endif;
        ?>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-description" >
                        <?=strip_shortcodes(get_the_excerpt()); ?>...
                    </div>

                </div>

            </div>
        </div>
    </div>

<?php
}
public function slider_product_mobile_template(){
    global $product;
    $atp=$product->get_gallery_image_ids();
    $atp[]=get_post_thumbnail_id(get_the_ID());
?>
<div class="col-xs-12 col-sm-12 col-md-12 slider-mobile-template">



    <div id="carousel-mobile-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php
            $dem=0;
            foreach ($atp as $key=>$value):
            ?>
            <li data-target="#carousel-mobile-generic" data-slide-to="<?=$dem; ?>" class="<?php echo $dem==0?'active':''; ?>"></li>
                <?php
            $dem++;
                endforeach;
                ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
    <?php
    $dem=0;
    foreach ($atp as $key=>$value):
        ?>
            <div class="item <?php echo $dem==0?'active':''; ?>">
                <img src="<?php
                $img=wp_get_attachment_image_src($value,'full');
                echo $img[0];
                ?>" alt="<?php the_title(); ?>">
            </div>
<?php
    $dem++;
        endforeach;
        ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-mobile-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only"><?=__('Previous','akasa'); ?></span>
        </a>
        <a class="right carousel-control" href="#carousel-mobile-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only"><?=__('Next','akasa'); ?></span>
        </a>
    </div>



</div>
<?php
}
}
new storefront_woocommerce();