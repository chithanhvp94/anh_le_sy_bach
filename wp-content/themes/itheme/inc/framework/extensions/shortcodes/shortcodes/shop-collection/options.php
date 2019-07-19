<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'List', 'akasa' ),
		'popup-title'   => __( 'Add/Edit List', 'akasa' ),
		'desc'          => __( 'Create your List', 'akasa' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
            'tab_img'   => array(
                'type'  => 'upload',
                'label' => __('Image', 'akasa')
            ),
		    'tab_title'   => array(
				'type'  => 'text',
				'label' => __('Title', 'akasa')
			),
            'tab_link'   => array(
                'type'  => 'text',
                'label' => __('Link', 'akasa')
            ),
			'tab_content' => array(
				'type'  => 'textarea',
				'label' => __('Content', 'akasa')
			)
		)
	)
);