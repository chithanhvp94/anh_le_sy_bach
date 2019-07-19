<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'label'  => array(
		'label' => __( 'Button Label', 'akasa' ),
		'desc'  => __( 'This is the text that appears on your button', 'akasa' ),
		'type'  => 'text',
		'value' => 'Submit'
	),
	'link'   => array(
		'label' => __( 'Button Link', 'akasa' ),
		'desc'  => __( 'Where should your button link to', 'akasa' ),
		'type'  => 'text',
		'value' => '#'
	),
	'target' => array(
		'type'  => 'switch',
		'label'   => __( 'Open Link in New Window', 'akasa' ),
		'desc'    => __( 'Select here if you want to open the linked page in a new window', 'akasa' ),
		'right-choice' => array(
			'value' => '_blank',
			'label' => __('Yes', 'akasa'),
		),
		'left-choice' => array(
			'value' => '_self',
			'label' => __('No', 'akasa'),
		),
	),
	'color'  => array(
		'label'   => __( 'Button Color', 'akasa' ),
		'desc'    => __( 'Choose a color for your button', 'akasa' ),
		'type'    => 'select',
		'choices' => array(
			''      => __('Default', 'akasa'),
			'black' => __( 'Black', 'akasa' ),
			'blue'  => __( 'Blue', 'akasa' ),
			'green' => __( 'Green', 'akasa' ),
			'red'   => __( 'Red', 'akasa' ),
		)
	),
);