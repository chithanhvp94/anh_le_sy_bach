<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style'   => array(
		'type'    => 'select',
		'label'   => __('Box Style', 'akasa'),
		'choices' => array(
			'fw-iconbox-1' => __('Icon above title', 'akasa'),
			'fw-iconbox-2' => __('Icon in line with title', 'akasa')
		)
	),
	'icon'    => array(
		'type'  => 'icon',
		'label' => __('Choose an Icon', 'akasa'),
	),
	'title'   => array(
		'type'  => 'text',
		'label' => __( 'Title of the Box', 'akasa' ),
	),
	'content' => array(
		'type'  => 'textarea',
		'label' => __( 'Content', 'akasa' ),
		'desc'  => __( 'Enter the desired content', 'akasa' ),
	),
);