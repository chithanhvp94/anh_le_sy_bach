<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
};
get_header();
do_action('breadcrumb_template');
?>


<div class="col-xs-12 col-sm-12 col-md-12 most-popular single-post-template">
	<div class="container nopadding">
		<div class="box-content-single-product-details">



			<div class="row">

				<?php
				if(have_posts()):
				while (have_posts()):
				the_post();
				get_template_part('content','single');
				endwhile;
				endif;
				wp_reset_query();
				get_sidebar();
				do_action('after_loop_post');
				?>




			</div>
		</div>
	</div>
</div>



<?php get_footer(); ?>
