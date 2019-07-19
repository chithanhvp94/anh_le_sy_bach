<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
'title'=>array(
    'type'          => 'text',
    'label'         => __( 'Title List' ),
    'popup-title'   => __( 'Add/Edit Title List', 'akasa' ),
    'desc'          => __( 'Create your Title List', 'akasa' ),
),
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'List Luxy', 'akasa' ),
		'popup-title'   => __( 'Add/Edit List Luxy', 'akasa' ),
		'desc'          => __( 'Create your List Luxy', 'akasa' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(
            'tab_icon'   => array(
                'type'  => 'icon',
                'label' => __('Title', 'akasa')
            ),
            'tab_title'   => array(
                'type'  => 'text',
                'label' => __('Title', 'akasa')
            ),
            'tab_content'   => array(
                'type'  => 'wp-editor',
                'label' => __('Content', 'akasa')
            ),
		)
	)
);