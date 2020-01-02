<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style' => array(
		'type'     => 'multi-picker',
		'label'    => false,
		'desc'     => false,
		'picker' => array(
			'ruler_type' => array(
				'type'    => 'select',
				'label'   => __( 'Ruler Type', 'akasa' ),
				'desc'    => __( 'Here you can set the styling and size of the HR element', 'akasa' ),
				'choices' => array(
					'line'  => __( 'Line', 'akasa' ),
					'space' => __( 'Whitespace', 'akasa' ),
				)
			)
		),
		'choices'     => array(
			'space' => array(
				'height' => array(
					'label' => __( 'Height', 'akasa' ),
					'desc'  => __( 'How much whitespace do you need? Enter a pixel value. Positive value will increase the whitespace, negative value will reduce it. eg: \'50\', \'-25\', \'200\'', 'akasa' ),
					'type'  => 'text',
					'value' => '50'
				)
			)
		)
	)
);
