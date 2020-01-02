<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class yourprefix_template_cmb2{

    public function __construct(){
        add_action( 'cmb2_admin_init',array($this,'yourprefix_register_repeatable_group_field_metabox') );
    }
    function yourprefix_register_repeatable_group_field_metabox() {
        $prefix = 'yourprefix_group_';

        /**
         * Repeatable Field Groups
         */
        $cmb_group = new_cmb2_box( array(
            'id'           => $prefix . 'metabox',
            'title'        => __( 'Product Tab', 'akasa' ),
            'object_types' => array( 'product' ),
        ) );

        // $group_field_id is the field id string, so in this case: $prefix . 'demo'
        $group_field_id = $cmb_group->add_field( array(
            'id'          => $prefix . 'field_template',
            'type'        => 'group',
            'description' => __( 'Generates reusable form entries', 'akasa' ),
            'options'     => array(
                'group_title'   => __( 'Tab {#}', 'akasa' ), // {#} gets replaced by row number
                'add_button'    => __( 'Add Another Entry', 'akasa' ),
                'remove_button' => __( 'Remove Entry', 'akasa' ),
                'sortable'      => true, // beta
                'closed'     => true, // true to have the groups closed by default
            ),
        ) );


        $cmb_group->add_group_field( $group_field_id, array(
            'name'       => esc_html__( 'Entry Title', 'akasa' ),
            'id'         => 'title',
            'type'       => 'text',
            // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
        ) );

        $cmb_group->add_group_field( $group_field_id, array(
            'name'        => esc_html__( 'Description', 'akasa' ),
            'description' => esc_html__( 'Write a short description for this entry', 'akasa' ),
            'id'          => 'description',
            'type'        => 'wysiwyg',
        ) );


    }
}

new yourprefix_template_cmb2();