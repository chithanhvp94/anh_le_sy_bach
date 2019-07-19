<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'title' => array(
        'type'   => 'text',
        'label'  => __( 'Title Content Box', 'akasa' ),
        'desc'   => __( 'Enter some content for this text', 'akasa' )
    ),
	'content' => array(
		'type'   => 'wp-editor',
		'label'  => __( 'Content Box', 'akasa' ),
		'desc'   => __( 'Enter some content for this Editor', 'akasa' )
	),
    'link' => array(
        'type'   => 'text',
        'label'  => __( 'Link More', 'akasa' ),
        'desc'   => __( 'Enter some URL Link More', 'akasa' )
    ),
);
