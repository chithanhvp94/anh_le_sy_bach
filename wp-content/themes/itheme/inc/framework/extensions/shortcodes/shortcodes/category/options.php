<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
$listselect=array();
foreach ($categories as $key=>$value):
    $listselect[$value->term_id]=$value->name;
    endforeach;
$options = array(
    'menuselect'  => array(
        'type'  => 'select',
        'label' => __( 'Category Select', 'akasa' ),
        'desc'  => __( 'Choosen  Category in Setting', 'akasa' ),
        'choices' => $listselect,
        'value' => 300
    )

);
