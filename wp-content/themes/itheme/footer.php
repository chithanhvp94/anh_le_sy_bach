<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
    global $redux_theme;
};
?>

<div class="col-xs-12 col-sm-12 col-md-12 nopadding footer" >
    <div class="container padding10" >

        <?php

        do_action('footer_template');
        ?>

    </div>
</div>
    <?php
 wp_footer(); ?>
</div>
<!--
box-show-add-tocart-template
-->
<div id="backtotop" ><i class="fa fa-angle-up"></i></div>
<div class="return-box-ajax-template" ></div>
<?php
$jsFiles = array(
  get_stylesheet_directory()."/js/bootstrap.min.js",
  get_stylesheet_directory()."/js/jquery.fancybox.js",
  get_stylesheet_directory()."/owl/owl.carousel.min.js",
  get_stylesheet_directory()."/js/jquery.mmenu.all.js",
  get_stylesheet_directory()."/js/site.js"
);
$js_buffer = "";
foreach ($jsFiles as $jsFile) {
  $js_buffer .= file_get_contents($jsFile);
}
$js_buffer = preg_replace('/\/\/\s.*.\n/', '', $js_buffer);
$js_buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $js_buffer);
// make it into one long line
$js_buffer = str_replace(array("\n","\r"),'',$js_buffer);
// replace all multiple spaces by one space
$js_buffer = preg_replace('!\s+!',' ',$js_buffer);
// replace some unneeded spaces, modify as needed
$js_buffer = str_replace(array(' {',' }','{ ','; '),array('{','}','{',';'),$js_buffer);
?>
<script>
    <?php
        echo($js_buffer);
//    echo '/*comment*/';
//    echo($js_buffer1);
    ?>
</script>
<?php print_r($redux_theme['opt-ace-editor-php']);?>
</body>
</html>
