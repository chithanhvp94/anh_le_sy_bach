<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$getmenu= get_terms( 'nav_menu', array( 'hide_empty' => true ) );
$option_listmenu=array();
foreach ($getmenu as $key=>$value){
    $option_listmenu[$value->term_id]=$value->name;
}
$options = array(
    'menuselect'  => array(
        'type'  => 'select',
        'label' => __( 'Menu Select', 'akasa' ),
        'desc'  => __( 'Enter Menu in slider', 'akasa' ),
        'choices' => $option_listmenu,
        'value' => 300
    ),
	'shortcodeslider'    => array(
		'type'  => 'text',
		'label' => __( 'Shortcode Plugins WP LayerSlider', 'akasa' ),
		'desc'  => __( 'Insert Shortcode Plugins WP LayerSlider', 'akasa' )
	)

);
