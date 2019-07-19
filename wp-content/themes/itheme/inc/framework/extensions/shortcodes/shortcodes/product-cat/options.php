<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
};
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC',
    'taxonomy'=>'product_cat'
));
$listselect=array();
foreach ($categories as $key=>$value):
    $listselect[$value->slug]=$value->name;
endforeach;

$options = array(
	'style' => array(
		'type'     => 'multi-picker',
		'label'    => false,
		'desc'     => false,
		'picker' => array(
			'ruler_type' => array(
				'type'    => 'select',
				'label'   => __( 'Show Product', 'akasa' ),
				'desc'    => __( 'Shor product New Product by Category.', 'akasa' ),
				'choices' => array(
					'new'  => __( 'New', 'akasa' ),
					'category' => __( 'By Category', 'akasa' ),
				)
			)
		),
		'choices'     => array(
			'category' => array(
				'category' => array(
                    'type'  => 'select',
                    'label' => __( 'Category Select', 'akasa' ),
                    'desc'  => __( 'Choosen  Category in Setting', 'akasa' ),
                    'choices' => $listselect,
                    'value' => 300
				)
			)
		)
	)
);
