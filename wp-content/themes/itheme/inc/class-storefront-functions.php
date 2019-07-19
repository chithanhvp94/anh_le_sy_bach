<?php
/**
 * Storefront  functions.
 *
 * @package storefront
 */

function page_visua_include_dir_template($template){
    if(is_page()){

        $getfield=(int) get_field('full_page_template',get_the_ID());
        if($getfield==1){
            remove_default_template_header_page();
            $template=MY_TEMPLATE_CUSTOM.'/visual.php';
        }

    }
    if(is_category()){

        $queried_object = get_queried_object();
        $taxonomy = $queried_object->taxonomy;
        $term_id = $queried_object->term_id;

        $getfield=(int) get_field('blog_category','category_'.$term_id);
        if($getfield==1){

            remove_action('before_archive_template','get_all_category_template');
            $template=get_template_directory().'/blog.php';
        }

    }
    return $template;
}
function remove_default_template_header_page(){
    if(is_page()){
        $getfield=(int) get_field('full_page_template',get_the_ID());

        if($getfield==1){

            apply_filters('remove_menu_template_custom',true);
           remove_action('header_template',array('storefront_class_template','menu_template_custom'),1);
        }

    }
}

function related_post_template(){
global $post;
    ?>

    <div class="col-xs-12 col-sm-12 col-md-12 nopadding blog-transforming">
        <div class="row10">


            <div class="col-xs-12 col-sm-12 col-md-12 nopadding related-post-template">

                <div class="col-xs-12 col-sm-12 col-md-12 padding0 post-related" >
                    <?=__('Post Related','akasa'); ?>
                </div>
                <?php
                $all_tags = get_tags();
                $tag_id = array();
                foreach( $all_tags as $tag ) {
                    $tag_id[] = $tag->term_id;
                }
                $args = array(
                    'showposts' => 3,
                    'tag__in' => $tag_id
                );
                $wp=new WP_Query($args);
                if($wp->have_posts()):
                    while ($wp->have_posts()):
                        $wp->the_post();
                        ?>
                        <div class="col-xs-6 col-sm-4 col-md-4 padding10 text-center items-post-cat-home">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('full'); ?>
                            </a>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-post-home-cat text-center">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                                <a href="<?php the_permalink(); ?>" class="button-pill"><?=__('Hair Extensions','akasa'); ?></a>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>

            </div>




        </div>
    </div>


<?php
}

function post_new_template(){
    ?>
    <div class="row10 blog-transforming">

        <div class="col-xs-12 col-sm-12 col-md-12 nopadding related-post-template">

            <div class="col-xs-12 col-sm-12 col-md-12 padding10 post-related" >
                <?=__('Post news','akasa'); ?>
            </div>
            <?php
            $wp=new WP_Query("showposts=3");
            if($wp->have_posts()):
                while ($wp->have_posts()):
                    $wp->the_post();
                    ?>
                    <div class="col-xs-12 col-sm-6 col-md-4 padding10 text-center items-post-cat-home">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>
                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-post-home-cat text-center">
                            <a href="<?php the_permalink(); ?>"><?php the_title();?>/a>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center">
                            <a href="<?php the_permalink(); ?>" class="button-pill"><?=__('Hair Extensions','akasa'); ?></a>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            wp_reset_postdata();
            ?>

        </div>




    </div>
<?php
}

function get_all_category_template(){

    $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC'
    ) );
    ?>

    <div style="display:none;">
        <?php
        print_r($categories);
        ?>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding flickity-owl-template owl-carousel owl-theme" >

        <?php
        foreach ($categories as $key=>$value):
        ?>
        <div class="items-flickity-owl-template" >
            <a href="<?=get_category_link($value->term_id); ?>" ><img src="<?php
                $variable = get_field('image_category', 'category_'.$value->term_id);
                echo $variable['url'];
                ?>" />
                <span><?=$value->name; ?></span>
            </a>
        </div>

            <?php
            endforeach;
            ?>



    </div>

    <?php
}

function get_parent_category_template($parent){

    $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC'
    ) );
    ?>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding flickity-owl-template owl-carousel owl-theme" >

        <?php
        foreach ($categories as $key=>$value):
        if($parent == $value->category_parent){?>
        <div class="items-flickity-owl-template" >
            <a href="<?=get_category_link($value->term_id); ?>" ><img src="<?php
                $variable = get_field('image_category', 'category_'.$value->term_id);
                echo $variable['url'];
                ?>" />
                <span><?=$value->name; ?></span>
            </a>
        </div>

            <?php
            }
            endforeach;
            ?>



    </div>

    <?php
}




if(!function_exists("add_to_cart_template")){
    function add_to_cart_template() {

        if(isset($_POST['productid'])){

            $id=(int) $_POST['productid'];

            global $woocommerce;
            $pr=new WC_Product($id);
            if($pr){
                $woocommerce->cart->add_to_cart($id);
                $htmlbox=apply_filters('box_show_add_tocart_template',$id);
                header('Content-Type: application/json');
                echo json_encode(array("htmlbox" => $htmlbox));
            }

        }
        exit;
    }
}

function woocommerce_mini_cart_scroll(){
?>

        <a href="javascript:;" id="cartToggle">
            <span class="first"><?=__('Cart','akasa'); ?></span>
            <span id="cartCount"><?=WC()->cart->get_cart_contents_count(); ?></span>
        </a>

        <div class="box-mini-cart-template-scroll">
            <?php woocommerce_mini_cart(); ?>
        </div>

<?php
if(isset($_POST['exitfc']) && (int) $_POST['exitfc']==1){
    exit;
}
}

function blog_top_post_header(){
?>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding top-post-header owl-carousel owl-theme" >
        <?php
        $wp=new WP_Query("showposts=6");
        if($wp->have_posts()):
            while ($wp->have_posts()):
                $wp->the_post();
                ?>
                <div class="items-top-post-header" >
                    <a href="<?php the_permalink(); ?>" class="t_images" >
                        <?php the_post_thumbnail('full'); ?></a>
                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center tax-items-top-post" >
                        <?php the_category(' '); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" >
                        <?php the_title(); ?>
                    </a>
                </div>
                <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>


    </div>
<?php
}

function blog_template_get_videobox(){
    $queried_object = get_queried_object();
    $taxonomy = $queried_object->taxonomy;
    $term_id = $queried_object->term_id;
    if(get_field('category_video_url','category_'.$term_id)):
        $imgcat=get_field('image_category','category_'.$term_id);
        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 box-content-get-inspired-with-our-hair noborder box-word-product box-word-product-blog">
            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6 nopadding left">
                    <a data-fancybox href="<?=get_field('category_video_url','category_'.$term_id,false); ?>">
                        <img src="<?=$imgcat['url']; ?>"> </a>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 nopadding right">

                    <div class="ratio-get-inspired-with-our-hair">

                        <div class="position-ratio-get-inspired-with-our-hair">

                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-ratio-get-inspired-with-our-hair">
                                <a data-fancybox href="<?=get_field('category_video_url','category_'.$term_id,false); ?>">
                                    <?=__('LONGER, FULLER HAIR IN 5 MINUTES.','akasa'); ?>
                                </a>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-box-ratio-get-inspired-with-our-hair">
                                <a data-fancybox href="<?=get_field('category_video_url','category_'.$term_id,false); ?>">
                                    <?php the_title(); ?>
                                </a>
                                <div class="col-xs-12 col-sm-12 col-md-12 nopadding">
                                    <a  data-fancybox href="<?=get_field('category_video_url','category_'.$term_id,false); ?>">
                                        <span><strong><?=__('Watch the video','akasa'); ?></strong></span>
                                    </a>
                                </div>
                            </div>


                        </div>



                    </div>

                </div>
            </div>



        </div>

        <?php
    endif;
}

function blog_category_post_object(){
    $queried_object = get_queried_object();
    $taxonomy = $queried_object->taxonomy;
    $term_id = $queried_object->term_id;
    ?>
        <div class="row10 blog-transforming">
    <?php
    $object=get_field('category_post_object','category_'.$term_id);
    foreach ($object as $key=>$value):
        ?>
        <div class="col-xs-12 col-sm-6 col-md-4 padding10 text-center items-post-cat-home" >
            <a href="<?=get_the_permalink($value->ID); ?>" >
                <?=get_the_post_thumbnail($value->ID,'full');?> </a>
            <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-post-home-cat text-center" >
                <a href="<?=get_the_permalink($value->ID); ?>" ><?php the_title(); ?></a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center" >
                <a href="<?=get_the_permalink($value->ID); ?>" class="button-pill" ><?=__('Hair Extensions','akasa'); ?></a>
            </div>
        </div>
    <?php endforeach;
    ?>
        </div>
            <?php
}


function feature_post_in_category(){

    $queried_object = get_queried_object();
    $taxonomy = $queried_object->taxonomy;
    $term_id = $queried_object->term_id;
    $object=get_field('feature_category_post_object','category_'.$term_id);
    $imgobject=get_field('image_feature_category_post_object','category_'.$term_id);
   if($object && $imgobject):
    ?>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding box-content-get-inspired-with-our-hair">
        <div class="col-xs-12 col-sm-6 col-md-6 nopadding left">
            <a href="<?=get_the_permalink($object->ID); ?>">
               <img src="<?=$imgobject['url']; ?>" />
            </a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-6 nopadding right">

            <div class="ratio-get-inspired-with-our-hair">

                <div class="position-ratio-get-inspired-with-our-hair">

                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding title-ratio-get-inspired-with-our-hair">
                       <?php
                       if(get_the_category($object->ID) && count(get_the_category($object->ID))>0){
                           $catfirst=get_the_category($object->ID)[0];
                          echo $catfirst->name;
                       }
                       ?>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center title-box-ratio-get-inspired-with-our-hair">
                        <a href="<?=get_the_permalink($object->ID); ?>"><?=get_the_title($object->ID); ?></a>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center content-ratio-box-content-get-inspired-with-our-hair">
                        <?=wp_trim_words(strip_tags(strip_shortcodes(get_the_excerpt($object->ID))),20); ?>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 nopadding text-center readmore-link">
                        <a href="<?=get_the_permalink($object->ID); ?>"><?=__('Continue reading','akasa'); ?></a>
                    </div>

                </div>



            </div>

        </div>

    </div>
<?php
endif;
}