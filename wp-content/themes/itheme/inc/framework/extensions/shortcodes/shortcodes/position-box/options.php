<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
    'box_img' => array(
        'label'         => __( 'Images Position Box', 'akasa' ),
        'desc'          => __( 'Images your Position Box', 'akasa' ),
        'type'  => 'upload'
    ),

    'box_tax' => array(
        'label'         => __( 'Text Before Title', 'akasa' ),
        'desc'          => __( 'Enter Text Before Title', 'akasa' ),
        'type'  => 'text'
    ),
    'box_title' => array(
        'label'         => __( 'Title Position Box', 'akasa' ),
        'desc'          => __( 'Title your Position Box', 'akasa' ),
        'type'  => 'text'
    ),
    'box_content' => array(
        'label'         => __( 'Content Position Box', 'akasa' ),
        'desc'          => __( 'Content your Position Box', 'akasa' ),
        'type'  => 'wp-editor'
    ),
    'box_link' => array(
        'label'         => __( 'Link Position Box', 'akasa' ),
        'desc'          => __( 'Link your Position Box', 'akasa' ),
        'type'  => 'text'
    ),
    'background_color' => array(
        'label' => __('Background Color', 'akasa'),
        'desc'  => __('Please select the background color', 'akasa'),
        'type'  => 'color-picker',
    ),
);