<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'title'  => array(
        'type'  => 'text',
        'label' => __( 'Title', 'akasa' ),
        'desc'  => __( 'Enter a value for the Title Video', 'akasa' ),
        'value' => 300
    ),
    'upload' => array(
        'type'  => 'upload',
        'label' => __( 'Image Video', 'akasa' ),
        'desc'  => __( 'Enter a value for the Image video', 'akasa' )
    ),
	'url'    => array(
		'type'  => 'text',
		'label' => __( 'Video URL', 'akasa' ),
		'desc'  => __( 'Insert Video URL to embed this video', 'akasa' )
	),
	'description'  => array(
		'type'  => 'text',
		'label' => __( 'Description Video', 'fw' ),
		'desc'  => __( 'Enter a value for the Description Video', 'akasa' ),
		'value' => 300
	),

);
