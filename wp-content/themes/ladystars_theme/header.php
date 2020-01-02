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
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-108805453-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-108805453-1');
</script>

<meta name="google-site-verification" content="2wpyHQyp3wTtXWAvk5x-pigBRMyg8uZ-TT-_54ODsWY" />

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1757834367851909');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1757834367851909&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '178574862922878');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=178574862922878&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - AdWords: 829075581 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-829075581"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-829075581');
</script>
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
