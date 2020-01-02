<?
/*
 Template Name: Page full
 */
?>
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
get_template_part('content-page','full');
endwhile;
endif;
wp_reset_query();
?>

<?php get_footer(); ?>
