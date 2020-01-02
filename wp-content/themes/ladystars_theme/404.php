<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
};
get_header();
?>
<div class="col-xs-12 col-sm-12 col-md-12 page404" >
    <img src="<?=get_template_directory_uri(); ?>/assets/imgs/banner.png" />
    <h1>The Requested Url Was Not Found !...</h1>
    <p><em>Sorry! Evidently the document you were looking for has either been moved or no longer exist,,</em></p>
</div>
<?php get_footer(); ?>
