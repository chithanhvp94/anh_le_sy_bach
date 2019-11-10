<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ladystars_theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-primary">
    <?php get_template_part('template-parts/header/primary')?>
    <nav id="menu-template-mobile">
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
            'items_wrap' => '<ul>%3$s</ul>',
            'item_spacing' => 'preserve',
            'depth' => 0,
            'walker' =>'',
            'theme_location' => 'menu-1' );
        wp_nav_menu($args);
        ?>
    </nav>
    <div class="col-xs-12 col-sm-12 col-md-12 nopadding scroll-menu-template">

        <div class="col-xs-12 col-sm-12 col-md-1 logo-sticky">
            <a href="<?php echo home_url()?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/mock/imgs/logo_fix.png"> </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-9 menu-sticky">
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
                'items_wrap' => '<ul>%3$s</ul>',
                'item_spacing' => 'preserve',
                'depth' => 0,
                'walker' =>'',
                'theme_location' => 'menu-sticky' );
            wp_nav_menu($args);
            ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2 search-mini-form">
            <div class="top-cart"><?php do_action('woocommerce_mini_cart_scroll'); ?></div>
            <div class="btn-event-icon-search">
                <i class="fa fa-search"></i>
                <div class="box-search-form-sticky">
                    <form action="<?php echo home_url()?>" autocomplete="off">
                        <input type="text" name="s" class="input-search" placeholder="Search">
                        <input type="hidden" name="post_type" value="product">
                        <button type="submit" class="icon-search"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php if (is_home() || is_front_page()) {

    } else {?>
        <div class="col-xs-12 col-sm-12 col-md-12 nopadding menu-custom">
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
                        'theme_location' => 'menu-1' );

                    wp_nav_menu($args);
                    ?>
                </div>
            </div>
        </div>
    <?php }?>
