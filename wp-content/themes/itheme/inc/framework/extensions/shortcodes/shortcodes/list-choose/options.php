<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(

	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'List Choose', 'akasa' ),
		'popup-title'   => __( 'Add/Edit List Choose', 'akasa' ),
		'desc'          => __( 'Create your List Choose', 'akasa' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(

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