<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
};
get_header();
?>
<?php
if(have_posts()):
    while (have_posts()):
        the_post();
the_content();
    endwhile;
endif;
wp_reset_query();
 get_footer(); ?>
