<?php
/**
 * Storefront template functions.
 *
 * @package storefront
 */
class storefront_class_template{

    public $redux_theme;
    public function __construct(){
        add_action('woocommerce_before_cart',array($this,'storefront_stepwizard'));
        add_action('storefront_stepwizard',array($this,'storefront_stepwizard'));
        add_action('breadcrumb_template',array($this,'breadcrumb_template'));
        add_action('pagination_template',array($this,'pagination_template'));
//        add_action('header_template',array($this,'header_template'));
        add_action('mini_cart_template',array($this,'mini_cart_template'));
        add_action('header_template',array($this,'header_login_template'));
        add_action('header_template',array($this,'menu_mobile_template'));
        add_action('header_template',array($this,'sitcky_menu_template'));
        add_action('search_sidebar_template',array($this,'search_sidebar_template'));
        add_action('menu_template_custom',array($this,'menu_template_custom'));
        add_filter('remove_menu_template_custom',array($this,'remove_menu_template_custom'));
        add_action('header_template',array($this,'menu_template_custom'));
        add_action('shop_the_look',array($this,'template_shop_the_look'));

        add_action( 'wp_ajax_nopriv_mini_cart_template',array($this,'mini_cart_template'));
        add_action( 'wp_ajax_mini_cart_template',array($this,'mini_cart_template') );

    }
    public function header_template(){
        global $redux_theme;

        ?>

        <div class="col-xs-12 col-sm-12 col-md-12 nopadding top-header" >
            <div class="container padding10" >
                <?php
                do_action('storefront_menu',$redux_theme['menu-header']);
                ?>

            </div>
        </div>

        <?php
    }

    public function header_login_template(){
        global $redux_theme;
        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 nopadding header" >
            <div class="container padding10" >


                <div class="col-xs-12 col-sm-12 col-md-12 text-center box-logo-mobile" >
                    <a href="<?=home_url(); ?>" >
                        <img src="<?=$redux_theme['opt-logo-mobile']['url']; ?>"/>

                    </a>
                </div>
<!--                <div class="col-xs-12 col-sm-12 col-md-12 box-header-mobile text-right">-->
                <div class="col-xs-12 col-sm-12 col-md-12 box-header-mobile text-left">
                    <a href="#menu-template-mobile" id="btnmobile" ><i class="fa fa-bars"></i></a>
                </div>

                <div class="right-header pull-right" >


                    <div class="form-search-template-header padding10 pull-right" >
                        <?php get_search_form(); ?>
                    </div>



                    <!--div class="customer-links-header pull-right" >
                        <?php
                        if(!is_user_logged_in()):
                        ?>
                        <ul>
                            <li><a href="javascript:;" class="link-login-template" ><?=__('Login','akasa'); ?></a>
                            <div class="box-login-template" >
                                <?php
                                echo do_shortcode('[ajax_login]');
                                ?>
                            </div>
                            </li>
                            <li><span class="or"> | </span></li>
                            <li><a href="javascript:void(0)" class="link-register-template" ><?=__('Register','akasa'); ?></a>
                                <div class="box-login-template box-registe-template" >
                                    <?php
                                    echo do_shortcode('[ajax_register]');
                                    ?>
                                </div>
                            </li>
                        </ul>
                            <?php
                        else:
                            ?>
                            <ul>
                                <li><a href="<?=get_the_permalink(get_option('woocommerce_myaccount_page_id')); ?>"  ><?=__('Account','akasa'); ?></a></li>

                            </ul>
                            <?php
                        endif; ?>
                    </div-->
                    <div class="mini-cart-header pull-right" >
                    <?php do_action('mini_cart_template'); ?>
                    </div>

                </div>

            </div>
        </div>


        <?php
    }

    public function mini_cart_template(){
        ?>

            <a href="javascript:;" id="btntogglemini" ><span class="icon-cart"></span>
                <span class="text-mini-cart"><?=__('Cart','akasa'); ?></span>
                <span class="cartCount-mini-cart"><?=WC()->cart->get_cart_contents_count(); ?></span></a>
            <div class="box-mini-cart-template">
                <?php woocommerce_mini_cart(); ?>
            </div>

<?php
        if(isset($_POST['exitfc']) && (int) $_POST['exitfc']==1){
            exit;
        }
    }
    public function menu_mobile_template(){
        global $redux_theme;
        $idtheme=(int) $redux_theme['menu-mobile'];
        ?>
        <nav id="menu-template-mobile" >
            <?php
            $args= array(
                'menu' =>$idtheme,
                'container' => '',
                'container_class' => '',
                'container_id' => '',
                'menu_class' => '',
                'menu_id' => '',
                'echo' => true,
                'fallback_cb' => 'wp_page_menu',
                'before' => '',
                'after' => '',
                'link_before' => '',
                'link_after' => '',
                'items_wrap' => '<ul>%3$s</ul>',
                'item_spacing' => 'preserve',
                'depth' => 0,
                'walker' =>'',
                'theme_location' => '' );
            wp_nav_menu($args);
            ?>
        </nav>

<?php
    }

    public function sitcky_menu_template(){
        global $redux_theme;
        $idtheme=(int) $redux_theme['menu-sticky'];
        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 nopadding scroll-menu-template" >

            <div class="col-xs-12 col-sm-12 col-md-1 logo-sticky" >
                <a href="<?=home_url(); ?>" ><img src="<?=$redux_theme['opt-logo-sticky']['url'];?>" /> </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 menu-sticky" >
                <?php
                $args= array(
                    'menu' =>$idtheme,
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => '',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul>%3$s</ul>',
                    'item_spacing' => 'preserve',
                    'depth' => 0,
                    'walker' =>'',
                    'theme_location' => '' );
                wp_nav_menu($args);
                ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2 search-mini-form" >

                 <div class="top-cart">
                <?php do_action('woocommerce_mini_cart_scroll'); ?>
                 </div>

                <div class="btn-event-icon-search" ><i class="fa fa-search"></i>

                    <div class="box-search-form-sticky" >
                    <?php get_search_form(); ?>
                    </div>

                </div>



            </div>


        </div>
<?php
    }

    public function action_menu_template(){
        global $redux_theme;
        $idtheme=(int) $redux_theme['menu-primary'];
?>
        <div class="col-xs-12 col-sm-12 col-md-12 menu-template" >
            <div class="container padding10" >


                    <?php
                    $args= array(
                        'container' => '',
                        'container_class' => '',
                        'container_id' => '',
                        'menu_class' => '',
                        'menu_id' => '',
                        'echo' => true,
                        'fallback_cb' => 'wp_page_menu',
                        'before' => '',
                        'after' => '',
                        'link_before' => '',
                        'link_after' => '',
                        'items_wrap' => '<ul id="menu-desktop">%3$s</ul>',
                        'item_spacing' => 'preserve',
                        'depth' => 0,
                        'theme_location' => '' );

                    do_action('storefront_menu',$idtheme,$args);
                    ?>




            </div>
        </div>
        <?php
}

    public function breadcrumb_template(){
        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 breadcrumb-post">
            <div class="container">
                <?php woocommerce_breadcrumb(' / '); ?>
            </div>
        </div>
        <?php
    }
    public function remove_menu_template_custom($check=false){
        if(isset($check) && is_bool($check)){

            if($check==true){

                remove_action('header_template',array($this,'menu_template_custom'));
            }
        }


}
    public static function menu_template_custom(){
        ?>

        <div class="col-xs-12 col-sm-12 col-md-12 nopadding menu-custom">
            <?php self::action_menu_template(); ?>

        </div>
        <?php
    }
    public function search_sidebar_template(){
        ?>
        <form action="<?=home_url(); ?>" method="get" class="form-search-sidebar-post" autocomplete="off">
            <input type="text" name="s" placeholder="Search" class="search-post-input">
            <button type="submit" value="submit"><i class="fa fa-search"></i></button>
        </form>
<?php
    }
    public function pagination_template(){
        ?>
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
            <?php
    }

    public  function template_shop_the_look($args=array()){
        if(isset($args) && is_array($args)){
            ?>
            <div class="col-xs-12 col-sm-12 col-md-12 nopadding shop-the-look owl-carousel owl-theme">

                <?php
                $dem=1;
                $wp=new WP_Query($args);
                if($wp->have_posts()):
                    while ($wp->have_posts()):
                        $wp->the_post();

                        $product=new WC_Product(get_the_ID());
                        $atp=$product->get_gallery_image_ids();
                        $atp[]=get_post_thumbnail_id(get_the_ID());

                        ?>
                        <div class="item">
                            <a href="javascript:;" data-fancybox="modal" data-src="#modal-quick-view-product<?=get_the_ID();?>" >
                                <div class="box-shop-the-look" style="background: url('<?php
                                $img=wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),'medium');
                                echo $img[0];
                                ?>') no-repeat center;background-size: cover;" >
                                    <span class="shop-the-look-btn"><?=__('Shop the look','akasa'); ?></span>
                                </div>
                            </a>


                           <?php do_action('modal_product_template'); ?>





                        </div>
                        <?php
                        $dem++;
                    endwhile;
                endif;
                wp_reset_postdata();
                ?>


            </div>
<?php
        }
    }

    public function storefront_stepwizard(){
        if(is_page()):

            if(get_the_ID()==get_option('woocommerce_cart_page_id') || get_the_ID()==get_option('woocommerce_checkout_page_id')):

                $curent_cart=0;
                $curent_checkout=0;
                $success=false;
            if(get_the_ID()==get_option('woocommerce_cart_page_id')){
                $curent_cart=get_option('woocommerce_cart_page_id');
            }
            if(get_the_ID()==get_option('woocommerce_checkout_page_id')){
                global $wp;
                if($wp->query_vars[get_option('woocommerce_checkout_order_received_endpoint')]){
                    $success=true;
                }
                else{
                    $curent_checkout=get_option('woocommerce_checkout_page_id');
                }

            };

        ?>
        <div class="col-xs-12 col-sm-12 col-md-12 nopadding stepwizard">
            <div class="stepwizard-row">
                <div class="stepwizard-step">
                    <button type="button" <?=get_the_ID()==$curent_cart?'':'disabled="disabled"'; ?> class="btn <?=get_the_ID()==$curent_cart?'btn-primary':'btn-default'; ?> btn-circle">1</button>
                    <p><?=__('Cart','akasa'); ?></p>
                </div>
                <div class="stepwizard-step">
                    <button type="button" <?=get_the_ID()==$curent_checkout?'':'disabled="disabled"'; ?>  class="btn <?=get_the_ID()==$curent_checkout?'btn-primary':'btn-default'; ?> btn-circle">2</button>
                    <p><?=__('Checkout','akasa'); ?></p>
                </div>
                <div class="stepwizard-step">
                    <button type="button" <?=$success==true?'':'disabled="disabled"'; ?> class="btn <?=$success==true?'btn-primary':'btn-default'; ?> btn-circle" >3</button>
                    <p><?=__('Success','akasa'); ?></p>
                </div>
            </div>
        </div>

<?php
            endif;
        endif;
    }
}
new storefront_class_template();