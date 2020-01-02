<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
};
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<style>
        <?php
        
        $cssFiles_1 = array(
            get_stylesheet_directory()."/css/bootstrap.css",
            get_stylesheet_directory()."/css/bootstrap-theme.min.css",
            get_stylesheet_directory()."/css/font-awesome.css",
            get_stylesheet_directory()."/owl/assets/owl.carousel.css",
            get_stylesheet_directory()."/css/jquery.fancybox.css",
            get_stylesheet_directory()."/owl/assets/owl.theme.default.css",
            get_stylesheet_directory()."/css/jquery.mmenu.all.css",
            get_stylesheet_directory()."/inc/framework/extensions/shortcodes/shortcodes/section/static/css/background.css",
          get_stylesheet_directory()."/inc/framework/extensions/shortcodes/shortcodes/section/static/css/styles.css",
            get_stylesheet_directory()."/main.css",
            get_stylesheet_directory()."/css/responsive.css"
        );
        $buffer_1 = "";
        foreach ($cssFiles_1 as $cssFile) {
          $buffer_1 .= file_get_contents($cssFile);
        }
        $buffer_1 = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer_1);
        $buffer_1 = str_replace(': ', ':', $buffer_1);
        $buffer_1 = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '    ', '    '), '', $buffer_1);
        echo($buffer_1);
    ?>
    </style>

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
<?php
do_action('header_template');
?>