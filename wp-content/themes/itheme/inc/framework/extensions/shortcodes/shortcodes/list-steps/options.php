<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'text'=>array(
        'type'=>'text',
        'label'         => __( 'Text steps', 'akasa' ),
        'desc'          => __( 'Create your Text steps', 'akasa' ),
    ),
	'tabs' => array(
		'type'          => 'addable-popup',
		'label'         => __( 'List steps', 'akasa' ),
		'popup-title'   => __( 'Add/Edit List steps', 'akasa' ),
		'desc'          => __( 'Create your List steps', 'akasa' ),
		'template'      => '{{=tab_title}}',
		'popup-options' => array(

            'tab_title'   => array(
                'type'  => 'text',
                'label' => __('Title', 'akasa')
            ),
            'tab_link'   => array(
                'type'  => 'text',
                'label' => __('Link', 'akasa')
            ),
		)
	)
);