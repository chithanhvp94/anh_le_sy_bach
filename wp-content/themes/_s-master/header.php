<?php global $redux_theme;?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<style>
    <?php
    
    $cssFiles_1 = array(
      get_stylesheet_directory()."/main.css"
    );
    $cssFiles_2 = array(
      get_stylesheet_directory()."/css/owl.carousel.css"
    );
    $cssFiles_3 = array(
      get_stylesheet_directory()."/css/owl.theme.default.css"
    );
    $cssFiles_4 = array(
      get_stylesheet_directory()."/css/font-awesome.css"
    );
    $buffer_1 = "";
    foreach ($cssFiles_1 as $cssFile) {
      $buffer_1 .= file_get_contents($cssFile);
    }
    foreach ($cssFiles_2 as $cssFile) {
      $buffer_1 .= file_get_contents($cssFile);
    }
    foreach ($cssFiles_3 as $cssFile) {
      $buffer_1 .= file_get_contents($cssFile);
    }
    foreach ($cssFiles_4 as $cssFile) {
      $buffer_1 .= file_get_contents($cssFile);
    }
    $buffer_1 = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer_1);
    //
    $buffer_1 = str_replace(': ', ':', $buffer_1);
    $buffer_1 = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer_1);
    echo($buffer_1);
?>
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<nav id="site-navigation-top" class="t_top_menu">
		    <div class="container">
			    <?php wp_nav_menu(
                    array(
                        'theme_location' => 'menu-2',
                        'menu_id' => 'top-menu-1',
                        'container' => ''
                    ) ); ?>
		    </div>
		</nav><!-- #site-navigation -->
        <section class="t_sec_head">
            <div class="container">
                <div class="t_right">
                    <div>
                        <div class="form-search-template-header padding10 t_right" >
                            <?php get_search_form(); ?>
                        </div>
                        <div class="mini-cart-header t_right" >
                            <a href="javascript:;" id="btntogglemini" >
                                <span class="icon-cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                <span class="text-mini-cart"><?=__('Cart','akasa'); ?></span>
                                <span class="cartCount-mini-cart"><?=WC()->cart->get_cart_contents_count(); ?></span>
                            </a>
                            <div class="box-mini-cart-template">
                                <?php woocommerce_mini_cart(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        $top_menu = '';
        if ( is_front_page() || is_home() ) :
        $top_menu = 'home_menu';
        else :
        $top_menu = 'page_menu';
        endif; ?>
		<nav id="site-navigation" class="<?=$top_menu?> main-navigation" role="navigation">
		    <div class="container">
                <span class="menu-toggle">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </span>
			    <?php wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                    'container' => ''
                ) ); ?>
		    </div>
			
		</nav><!-- #site-navigation -->
		<?php if ( is_front_page() || is_home() ) : ?>
		<section class="t_slider">
            <div class="t_s_slider owl-carousel owl-theme">
            <?php
            $ttt_slider = $redux_theme['pri_slides'];
            foreach($ttt_slider as $t_items){?>
                <div class="t_item">
                    <div class="t_img">
                        <img src="<?php echo $t_items['image']?>">
                    </div>
                    <div class="t_title">
                        <?php echo $t_items['title']?>
                    </div>
                    <div class="t_buttonlink">
                        <a href="<?php echo $t_items['url']?>"><?php echo $t_items['description']?></a>
                    </div>
                </div>
            <?php } //end foreach
            ?>
            </div>
		</section>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
