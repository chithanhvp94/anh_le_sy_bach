<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
};
    if ( ! class_exists( 'Redux' ) ) {
        return;
    }
    $opt_name = "redux_theme";
    $opt_name = apply_filters( 'redux_theme/opt_name', $opt_name );
    $theme = wp_get_theme();
    $args = array(
        'opt_name'             =>'Options',
        'display_name'         => 'Options',
        'display_version'      => $theme->get( 'Version' ),
        'menu_type'            => 'menu',
        'allow_sub_menu'       => true,
        'menu_title'           => __( 'Options', '' ),
        'page_title'           => __( 'Options', '' ),
        'google_api_key'       => '',
        'google_update_weekly' => false,
        'async_typography'     => true,
        'admin_bar'            => true,
        'admin_bar_icon'       => 'dashicons-portfolio',
        'admin_bar_priority'   => 50,
        'global_variable'      => '',
        'dev_mode'             => false,
        'update_notice'        => true,
        'customizer'           => true,
        'page_priority'        => null,
        'page_parent'          => 'themes.php',
        'page_permissions'     => 'manage_options',
        'menu_icon'            => '',
        'last_tab'             => '',
        'page_icon'            => 'icon-themes',
        'page_slug'            => '',
        'save_defaults'        => true,
        'default_show'         => false,
        'default_mark'         => '',
        'show_import_export'   => true,
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        'output_tag'           => true,
        'database'             => '',
        'use_cdn'              => true,
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Thiết kế website Wordpress Pro</p>', '' ), $v );
    } else {
        $args['intro_text'] = __( '<p>Thiết kế website Wordpress Pro</p>', '' );
    }
    $args['footer_text'] = __( '<p>Thiết kế website wordpress pro by Akasa.</p>', '' );

    Redux::setArgs( $opt_name, $args );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Cấu hình header', '' ),
        'id'               => 'basic_header',
        'desc'             => __( '', '' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-arrow-down'
    ) );
    Redux::setSection( $opt_name, array(
            'title'            => __( 'logo website', '' ),
            'id'               => 'bds_logo',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                array(
                    'id'       => 'media_pri_logo',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __( 'logo header', 'redux-framework-demo' ),
                    'compiler' => 'true',
                    //'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
//                    'hint'      => array(
//                        'title'     => 'Hint Title',
//                        'content'   => 'This is a <b>hint</b> for the media field with a Title.',
//                    )
                ),
            )
    ));
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Cấu hình slider', '' ),
        'id'               => 'basic_slider',
        'desc'             => __( '', '' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-arrow-down',
        'fields'           => array(
            array(
                'id'          => 'pri_slides',
                'type'        => 'slides',
                'title'       => __( 'Slides Options', 'redux-framework-demo' ),
                'subtitle'    => __( 'Unlimited slides with drag and drop sortings.', 'redux-framework-demo' ),
                'desc'        => __( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo' ),
                'placeholder' => array(
                    'title'       => __( 'This is a title', 'redux-framework-demo' ),
                    'description' => __( 'Description Here', 'redux-framework-demo' ),
                    'url'         => __( 'Give us a link!', 'redux-framework-demo' ),
                ),
            ),
        )
    ) );
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Cấu hình trang chủ', '' ),
        'id'               => 'basic_home',
        'desc'             => __( '', '' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-home'
    ) );
    Redux::setSection( $opt_name, array(
            'title'            => __( 's1', '' ),
            'id'               => 'basic_s1',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                 array(
                    'id'          => 'text-title-s1',
                    'type'        => 'text',
                    'title'       => __( 'tiêu đề', 'redux-framework-demo' ),
                    'default' => 'WHY LUXY HAIR?',
                ),
                array(
                    'id'      => 'text-editer-s1',
                    'type'    => 'editor',
                    'title'   => __( 'nội dung s1', '' ),
                    'default' => 'With high quality clip-in Luxy Hair extensions, you can finally have that fuller and longer hair you have always dreamed of. Instant length and volume. No damage. Super easy to use.',
                    'args'    => array(
                        'wpautop'       => true,
                        'media_buttons' => true,
                        'textarea_rows' => 15,
                        'teeny'         => true,
                        'quicktags'     => true,
                    )
                ),
                array(
                    'id'          => 'text-titlebutton-s1',
                    'type'        => 'text',
                    'title'       => __( 'title button', 'redux-framework-demo' ),
                    'default' => 'learn more',
                ),
                array(
                    'id'          => 'text-linkbutton-s1',
                    'type'        => 'text',
                    'title'       => __( 'link button', 'redux-framework-demo' ),
                    'default' => '#',
                ),
            )
    ));
    Redux::setSection( $opt_name, array(
            'title'            => __( 's2', '' ),
            'id'               => 'basic_s2',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                 array(
                    'id'          => 'text-title-s2',
                    'type'        => 'text',
                    'title'       => __( 'tiêu đề', 'redux-framework-demo' ),
                    'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
                    'desc'        => __( 'Field Description', 'redux-framework-demo' ),
                    'default' => 'Before & After',
                ),
                array(
                    'id'       => 'media_pri_s2',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => __( 'background s2', 'redux-framework-demo' ),
                    'compiler' => 'true',
                ),
                
                array(
                    'id'          => 'text-clickvideo-s2',
                    'type'        => 'text',
                    'title'       => __( 'text click để hiển thị video', 'redux-framework-demo' ),
                    'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
                    'desc'        => __( 'Field Description', 'redux-framework-demo' ),
                    'default' => 'CLICK TO WATCH VIDEO',
                ),
                array(
                    'id'          => 'text-title1-s2',
                    'type'        => 'text',
                    'title'       => __( 'nội dung ngắn', 'redux-framework-demo' ),
                    'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
                    'desc'        => __( 'Field Description', 'redux-framework-demo' ),
                    'default' => 'Before and after transformation with 160g Ombre Blonde Luxy Hair extensions.',
                ),
                
            )
    ));
    Redux::setSection( $opt_name, array(
            'title'            => __( 's3', '' ),
            'id'               => 'basic_s3',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                array(
                    'id'          => 'opt-slides-s3',
                    'type'        => 'slides',
                    'title'       => __( 'Slides Options', 'redux-framework-demo' ),
                    'subtitle'    => __( 'Unlimited slides with drag and drop sortings.', 'redux-framework-demo' ),
                    'desc'        => __( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo' ),
                    'placeholder' => array(
                        'title'       => __( 'This is a title', 'redux-framework-demo' ),
                        'description' => __( 'Description Here', 'redux-framework-demo' ),
                        'url'         => __( 'Give us a link!', 'redux-framework-demo' ),
                    ),
                ),
                
            )
    ));
    Redux::setSection( $opt_name, array(
            'title'            => __( 's4', '' ),
            'id'               => 'basic_s4',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                 array(
                    'id'          => 'text-title-s4',
                    'type'        => 'text',
                    'title'       => __( 'tiêu đề', 'redux-framework-demo' ),
                    'subtitle'    => __( 'Subtitle', 'redux-framework-demo' ),
                    'desc'        => __( 'Field Description', 'redux-framework-demo' ),
                    'default' => 'Find Properties in These Cities',
                ),
                array(
                    'id'          => 'text-subtitle-s4',
                    'type'        => 'text',
                    'title'       => __( 'Subtitle', 'redux-framework-demo' ),
                    'default' => 'Here could be a nice sub title',
                ),
                array(
                    'id'          => 'opt-slides-s4',
                    'type'        => 'slides',
                    'title'       => __( 'Slides Options', 'redux-framework-demo' ),
                    'subtitle'    => __( 'Unlimited slides with drag and drop sortings.', 'redux-framework-demo' ),
                    'desc'        => __( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'redux-framework-demo' ),
                    'placeholder' => array(
                        'title'       => __( 'This is a title', 'redux-framework-demo' ),
                        'description' => __( 'Description Here', 'redux-framework-demo' ),
                        'url'         => __( 'Give us a link!', 'redux-framework-demo' ),
                    ),
                ),
                array(
                    'id'       => 'opt-required-s4a',
                    'type'     => 'switch',
                    'title'    => 'Bạn có bật section 1 không?',
                    'subtitle' => 'Click <code>On</code> to see the text field appear.',
                    'default'  => true
                ),
                array(
                    'id'       => 'opt-editor-s4a',
                    'type'     => 'editor',
                    'title'    => __( 'Nội dung cho section 1', 'redux-framework-demo' ),
                    'required' => array( 'opt-required-s4a', '=', true )
                ),
                array(
                    'id'       => 'opt-required-s4b',
                    'type'     => 'switch',
                    'title'    => 'Bạn có bật section 2 không?',
                    'subtitle' => 'Click <code>On</code> to see the text field appear.',
                    'default'  => false
                ),
                array(
                    'id'       => 'opt-editor-s4b',
                    'type'     => 'editor',
                    'title'    => __( 'Nội dung cho section 2', 'redux-framework-demo' ),
                    'required' => array( 'opt-required-s4b', '=', true )
                ),
                array(
                    'id'       => 'opt-required-s4c',
                    'type'     => 'switch',
                    'title'    => 'Bạn có bật section 3 không?',
                    'subtitle' => 'Click <code>On</code> to see the text field appear.',
                    'default'  => false
                ),
                array(
                    'id'       => 'opt-editor-s4c',
                    'type'     => 'editor',
                    'title'    => __( 'Nội dung cho section 3', 'redux-framework-demo' ),
                    'required' => array( 'opt-required-s4c', '=', true )
                ),
                array(
                    'id'          => 'opt-slides-s4b',
                    'type'        => 'slides',
                    'title'       => __( 'Slides Options', 'redux-framework-demo' ),
                    'placeholder' => array(
                        'title'       => __( 'This is a title', 'redux-framework-demo' ),
                        'description' => __( 'Description Here', 'redux-framework-demo' ),
                        'url'         => __( 'Give us a link!', 'redux-framework-demo' ),
                    ),
                ),
                array(
                    'id'          => 'text-bottom-s4',
                    'type'        => 'text',
                    'title'       => __( 'nội dung chân section 4', 'redux-framework-demo' ),
                    'default' => 'Have a question? We\'re here to help: email us or check out our support page .',
                ),
            )
    ));

    Redux::setSection( $opt_name, array(
            'title'            => __( 's5', '' ),
            'id'               => 'basic_s5',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                 array(
                    'id'          => 'text-title-s5',
                    'type'        => 'text',
                    'title'       => 'tiêu đề',
                    'default' => 'LADYSTARS - THƯƠNG HIỆU SỐ 1 TÓC GIẢ BẰNG TÓC THẬT CAO CẤP',
                ),
                array(
                    'id'          => 'opt-slides-s5',
                    'type'        => 'slides',
                    'title'       => 'Slides Options',
                    'placeholder' => array(
                        'title'       => 'This is a title',
                        'description' => 'Description Here',
                        'url'         => 'Give us a link!',
                    ),
                ),
            )
    ));
    Redux::setSection( $opt_name, array(
            'title'            => __( 's6', '' ),
            'id'               => 'basic_s6',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                 array(
                    'id'          => 'text-title-s6',
                    'type'        => 'text',
                    'title'       => 'tiêu đề',
                    'default' => 'GET INSPIRED WITH OUR HAIR TUTORIALS & BLOG',
                ),
                array(
                    'id'       => 'opt-media-s6',
                    'type'     => 'media',
                    'url'      => true,
                    'title'    => 'Hình ảnh',
                    'compiler' => 'true',
                ),
                array(
                    'id'          => 'text-cat-s6',
                    'type'        => 'text',
                    'title'       => 'tiêu đề category',
                    'default' => 'tóc giả',
                ),
                array(
                    'id'       => 'opt-required-s6link',
                    'type'     => 'switch',
                    'title'    => 'Bạn có bật link cho category không?',
                    'subtitle' => 'Click <code>On</code> to see the text field appear.',
                    'default'  => false
                ),
                array(
                    'id'       => 'opt-text-s6link',
                    'type'     => 'text',
                    'title'    => 'Đường dẫn',
                    'required' => array( 'opt-required-s6link', '=', true )
                ),
                array(
                    'id'          => 'text-titlepost-s6',
                    'type'        => 'text',
                    'title'       => 'tiêu đề post',
                    'default' => '6 lý do nên dùng tóc kẹp bằng tóc thật',
                ),
                array(
                    'id'       => 'opt-required-s6linkpost',
                    'type'     => 'switch',
                    'title'    => 'Bạn có bật link cho bài viết không?',
                    'subtitle' => 'Click <code>On</code> to see the text field appear.',
                    'default'  => false
                ),
                array(
                    'id'       => 'opt-text-s6linkpost',
                    'type'     => 'text',
                    'title'    => 'Đường dẫn',
                    'required' => array( 'opt-required-s6linkpost', '=', true )
                ),
                array(
                    'id'       => 'opt-editor-s6',
                    'type'     => 'editor',
                    'title'    => 'Nội dung post',
                ),
                array(
                    'id'          => 'opt-slides-s6',
                    'type'        => 'slides',
                    'title'       => 'Slides Options',
                    'placeholder' => array(
                        'title'       => 'This is a title',
                        'description' => 'Description Here',
                        'url'         => 'Give us a link!',
                    ),
                ),
                array(
                    'id'       => 'opt-text-s6thuonghieu',
                    'type'     => 'text',
                    'title'    => 'title thương hiệu',
                    'default' => 'THƯƠNG HIỆU ĐỒNG HÀNH',
                ),
                array(
                    'id'          => 'opt-slides-s6thuonghieu',
                    'type'        => 'slides',
                    'title'       => 'List thương hiệu',
                    'placeholder' => array(
                        'title'       => 'This is a title',
                        'description' => 'Description Here',
                        'url'         => 'Give us a link!',
                    ),
                ),
            )
    ));
    Redux::setSection( $opt_name, array(
            'title'            => __( 's7', '' ),
            'id'               => 'basic_s7',
            'subsection'       => true,
            'customizer_width' => '450px',
            'fields'           => array(
                 
                array(
                    'id'       => 'opt-editor-s7',
                    'type'     => 'editor',
                    'title'    => 'Nội dung s7',
                ),
            )
    ));
    Redux::setSection( $opt_name, array(
        'title'            => __( 'Cấu hình footer', '' ),
        'id'               => 'basic_footer',
        'desc'             => __( '', '' ),
        'customizer_width' => '400px',
        'icon'             => 'el el el-arrow-up'
    ) );
    Redux::setSection( $opt_name, array(
    'title'            => __( 'Bản quyền website', '' ),
    'id'               => 'basic_footer_editor_banquyen',
    'subsection'       => true,
    'desc'             => __( 'Custom List', '' ),
    'customizer_width' => '400px',
    'fields'           => array(
        array(
            'id'      => 'opt_basic_footer_editor_banquyen',
            'type'    => 'editor',
            'title'   => __( 'Bản quyền đặt ở chân trang', '' ),
            'default' => 'Powered by Akasa MeDia JC.',
            'args'    => array(
                'wpautop'       => true,
                'media_buttons' => true,
                'textarea_rows' => 15,
                'teeny'         => true,
                'quicktags'     => true,
            )
        )
    )));

    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
        }
    }
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', '' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', '' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }