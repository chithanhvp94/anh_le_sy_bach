<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

		    'box_title'   => array(
				'type'  => 'text',
                'desc'          => __( 'Box Title featured', 'akasa' ),
				'label' => __('Title', 'akasa')
			),

			'box_content' => array(
				'type'  => 'wp-editor',
				'tinymce'=>true,
				'label' => __('Content', 'akasa'),
                'desc'          => __( 'Box Description featured', 'akasa' )
			)
);