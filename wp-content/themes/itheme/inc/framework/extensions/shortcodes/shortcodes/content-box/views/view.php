<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>

<div class="col-xs-12 col-sm-12 col-md-12 nopadding homepage-featured-content">
	<div class="container padding10">


		<div class="theme-container text-center">
			<h1 class="title-secondary-wide"><?=$atts['title']; ?></h1>
			<div class="col-xs-12 col-sm-12 col-md-12 text-secondary-wide">
                <?php echo do_shortcode( wpautop($atts['content']) ); ?>
			</div>

			<a href="<?=esc_url($atts['link']); ?>" class="button-outline"><?=__('Learn more','akasa'); ?></a>

		</div>

	</div>
</div>
