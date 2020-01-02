<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
};
class  StoreFront_funtions_template{

    public function __construct(){
        add_filter('acf/settings/path',array($this,'my_acf_settings_path'));
        add_filter('acf/settings/dir',array($this,'my_acf_settings_dir'));
        add_filter('acf/settings/show_admin', '__return_false');
        add_action('init',array($this,'product_custom_template_acf'));
        add_action('init',array($this,'menu_custom_template_acf'));
        add_action('init',array($this,'menu_custom_template_page_acf'));
        add_action('init',array($this,'category_custom_template_acf'));
    }

    function my_acf_settings_path( $path ) {

        // update path
        $path = get_stylesheet_directory() . '/inc/core/';

        // return
        return $path;

    }
    function my_acf_settings_dir( $dir ) {

        // update path
        $dir = get_stylesheet_directory_uri() . '/inc/core/';

        // return
        return $dir;

    }


    public function menu_custom_template_acf(){

        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array(
                'key' => 'custom_menu_template',
                'title' => __('Editor HTML Text Menu','akasa'),
                'fields' => array (),
                'location' => array (
                    array (
                        array (
                            'param' => 'nav_menu_item',
                            'operator' => '==',
                            'value' => 'all',
                        ),
                    ),
                ),
            ));


            acf_add_local_field(array(
                'key' => 'request_text_menu',
                'label' => '<br/>'.__('Do not display the navigation label instead of your content below','akasa'),
                'name' => 'request_text_menu',
                'type' => 'radio',
                'choices' => array(
                    0=> __('Không','akasa'),
                    1=>__('Có','akasa')
                ),

                /* (bool) Allow a custom choice to be entered via a text input */
                'other_choice' =>0,

                /* (bool) Allow the custom value to be added to this field's choices. Defaults to 0.
                Will not work with PHP registered fields, only DB fields */
                'save_other_choice' =>0,

                'parent' => 'custom_menu_template'
            ));
            acf_add_local_field(array(
                'key' => 'image_menu',
                'label' => '',
                'name' => 'menu_image',
                'type' => 'image',
                'parent' => 'custom_menu_template'
            ));

            acf_add_local_field(array(
                'key' => 'text_menu',
                'label' => '',
                'name' => 'menu_title',
                'type' => 'wysiwyg',
                'toolbar' => 'full',
                'media_upload'=>false,
                'parent' => 'custom_menu_template'
            ));

        endif;


    }
    public function menu_custom_template_page_acf(){

        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array(
                'key' => 'custom_page_template',
                'title' =>__('Option Your Page','akasa'),
                'fields' => array (),
                'position' => 'side',
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'page',
                        ),
                    ),
                ),
            ));

            acf_add_local_field(array(
                'key' => 'full_page_template',
                'label' => '<br/>'.__('Uninstall the default look','akasa'),
                'name' => 'full_page_template',
                'type' => 'radio',
                'choices' => array(
                    0=>__('Không','akasa'),
                    1=>__('Có','akasa')
                ),
                'other_choice' =>0,
                'save_other_choice' =>0,
                'parent' => 'custom_page_template'
            ));


        endif;
    }



    public function category_custom_template_acf(){

        if( function_exists('acf_add_local_field_group') ):

            acf_add_local_field_group(array(
                'key' => 'custom_category_template',
                'fields' => array (),
                'location' => array (
                    array (
                        array (
                            'param' => 'taxonomy',
                            'operator' => '==',
                            'value' => 'category',
                        ),
                    ),
                ),
            ));

            acf_add_local_field(array(
                'key' => 'image_category',
                'label' =>__('Image Category','akasa'),
                'name' => 'image_category',
                'type' => 'image',
                'parent' => 'custom_category_template'
            ));

            acf_add_local_field(array(
                'key' => 'blog_category',
                'label' =>__('Category Is Blog','akasa'),
                'name' => 'blog_category',
                'type' => 'radio',
                'choices' => array(
                    0	=> __('No Blog','akasa'),
                    1=>__('Blog','akasa')
                ),
                'parent' => 'custom_category_template'
            ));
            acf_add_local_field(array(
                'key' => 'category_video_url',
                'label' =>__('Category URL Video','akasa'),
                'name' => 'category_video_url',
                'type' => 'oembed',
                'parent' => 'custom_category_template'
            ));
            acf_add_local_field(array(
                'key' => 'image_feature_category_post_object',
                'label' => __('Feature Image Category','akasa'),
                'name' => 'image_feature_category_post_object',
                'type' => 'image',
                'parent' => 'custom_category_template'
            ));

            acf_add_local_field(array(
                'key' => 'feature_category_post_object',
                'label' => __('Feature Post in category','akasa'),
                'name' => 'feature_category_post_object',
                'type' => 'post_object',
                'post_type' => 'post',
                'multiple' => 0,
                'parent' => 'custom_category_template'
            ));

            acf_add_local_field(array(
                'key' => 'category_post_object',
                'label' =>__('Custom Post in category','akasa'),
                'name' => 'category_post_object',
                'type' => 'post_object',
                'post_type' => 'post',
                'multiple' => 1,
                'parent' => 'custom_category_template'
            ));


            acf_add_local_field_group(array(
                'key' => 'custom_product_cat_template',
                'fields' => array (),
                'location' => array (
                    array (
                        array (
                            'param' => 'taxonomy',
                            'operator' => '==',
                            'value' => 'product_cat',
                        ),
                    ),
                ),
            ));

            acf_add_local_field(array(
                'key' => 'template_description_product_cat',
                'label' =>__('Description Product Category','akasa'),
                'name' => 'template_description_product_cat',
                'type' => 'wysiwyg',
                'toolbar' => 'full',
                'media_upload'=>1,
                'parent' => 'custom_product_cat_template'
            ));


        endif;
    }

    public function product_custom_template_acf(){


            acf_add_local_field_group(array(
                'key' => 'custom_product_template_acf',
                'fields' => array (),
                'title' =>__('Your option option your product','akasa'),
                'position'=>'normal',
                'location' => array (
                    array (
                        array (
                            'param' => 'post_type',
                            'operator' => '==',
                            'value' => 'product',
                        ),
                    ),
                ),
            ));

            acf_add_local_field(array(
                'key' => 'product_text_sale',
                'label' =>__('Product Note','akasa'),
                'name' => 'product_text_sale',
                'type' => 'wysiwyg',
                'toolbar' => 'full',
                'media_upload'=>1,
                'parent' => 'custom_product_template_acf'
            ));


        acf_add_local_field(array(
            'key' => 'product_text_head',
            'label' => __('Product Head','akasa'),
            'name' => 'product_text_head',
            'type' => 'text',
            'parent' => 'custom_product_template_acf'
        ));
        acf_add_local_field(array(
            'key' => 'product_text_shipping',
            'label' =>__('Product Free Shipping','akasa'),
            'name' => 'product_text_shipping',
            'type' => 'wysiwyg',
            'toolbar' => 'full',
            'media_upload'=>1,
            'parent' => 'custom_product_template_acf'
        ));

        acf_add_local_field(array(
            'key' => 'product_text_video_url',
            'label' => __('Product URL Video','akasa'),
            'name' => 'product_text_video_url',
            'type' => 'oembed',
            'parent' => 'custom_product_template_acf'
        ));




        acf_add_local_field_group(array(
            'key' => 'custom_product_shipping_template_acf',
            'fields' => array (),
            'title' =>__('Info Product','akasa'),
            'position'=>'normal',
            'location' => array (
                array (
                    array (
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'product',
                    ),
                ),
            ),
        ));

        acf_add_local_field(array(
            'key' => 'product_text_shipping_sale',
            'label' => __('Product Shipping','akasa'),
            'name' => 'product_text_shipping_sale',
            'type' => 'wysiwyg',
            'toolbar' => 'full',
            'media_upload'=>1,
            'parent' => 'custom_product_shipping_template_acf'
        ));
		acf_add_local_field(array(
            'key' => 'product_see_how_it_works_image',
            'label' => __('Hình đại diện cho video','akasa'),
            'name' => 'product_see_how_it_works_image',
            'type' => 'image',
            'parent' => 'custom_product_shipping_template_acf'
        ));
        acf_add_local_field(array(
            'key' => 'product_see_how_it_works',
            'label' => __('Product URL Video See how it works','akasa'),
            'name' => 'product_see_how_it_works',
            'type' => 'oembed',
            'parent' => 'custom_product_shipping_template_acf'
        ));

		acf_add_local_field(array(
            'key' => 'product_see_how_it_works_title1',
            'label' => __('Title 1','akasa'),
            'name' => 'product_see_how_it_works_title1',
            'type' => 'text',
            'parent' => 'custom_product_shipping_template_acf',
			'default_value' => 'LONGER, FULLER HAIR IN 5 MINUTES.',
        ));
		
		acf_add_local_field(array(
            'key' => 'product_see_how_it_works_title2',
            'label' => __('Title 2','akasa'),
            'name' => 'product_see_how_it_works_title2',
            'type' => 'text',
            'parent' => 'custom_product_shipping_template_acf',
			'default_value' => 'See how it works',
        ));
		
		acf_add_local_field(array(
            'key' => 'product_see_how_it_works_title3',
            'label' => __('Title 3','akasa'),
            'name' => 'product_see_how_it_works_title3',
            'type' => 'text',
            'parent' => 'custom_product_shipping_template_acf',
			'default_value' => 'Watch the video',
        ));
		
        acf_add_local_field(array(
            'key' => 'product_post_object',
            'label' =>__('Product post','akasa'),
            'name' => 'product_post_object',
            'type' => 'post_object',
            'post_type' => 'post',
            'multiple' => 1,
            'parent' => 'custom_product_shipping_template_acf'
        ));




        acf_add_local_field_group(array(
            'key' => 'product_adapter_template',
            'fields' => array (),
            'title' => __('Adapter Product','akasa'),
            'position'=>'normal',
            'location' => array (
                array (
                    array (
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'product',
                    ),
                ),
            ),
        ));
        acf_add_local_field(array(
            'key' => 'title_editor_adapter_product',
            'label' => __('Title Adapter','akasa'),
            'name' => 'title_editor_adapter_product',
            'type' => 'text',
            'parent' => 'product_adapter_template'
        ));
        acf_add_local_field(array(
            'key' => 'text_editor_adapter_product',
            'label' =>__('Product Adapter','akasa'),
            'name' => 'text_editor_adapter_product',
            'type' => 'wysiwyg',
            'toolbar' => 'full',
            'media_upload'=>1,
            'parent' => 'product_adapter_template'
        ));

        acf_add_local_field(array(
            'key' => 'image_adapter_product',
            'label' =>__('Image Adapter','akasa'),
            'name' => 'image_adapter_product',
            'type' => 'image',
            'parent' => 'product_adapter_template'
        ));

    }
}
new StoreFront_funtions_template();