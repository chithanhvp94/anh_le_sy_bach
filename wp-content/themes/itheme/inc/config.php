<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_theme";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_theme/opt_name', $opt_name );

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         =>'Theme Options',
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Theme Options', '' ),
        'page_title'           => __( 'Theme Options', '' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
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

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( 'Akasa Media JSC Professional website design on open source platform', 'akasa' ), $v );
    } else {
        $args['intro_text'] = __( 'Akasa Media JSC Professional website design on open source platform', 'akasa' );
    }
    $args['footer_text'] = __( 'Please click Save Changes to save the configuration information for your website', 'akasa' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */


    // -> START Basic Fields
    Redux::setSection( $opt_name, array(
        'title'            => __( 'General configuration', 'akasa' ),
        'id'               => 'garena',
        'desc'             => __( 'General configuration for your website!', 'akasa' ),
        'customizer_width' => '400px'
    ) );

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Header Page', 'akasa' ),
        'id'               => 'basic-header',
        'subsection'       => true,
        'customizer_width' => '450px',
        'desc'             => __('Configure the header for your website','akasa'),
        'fields'           => array(
            array(
                'id'       => 'opt-logo-mobile',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'Mobile Logo','akasa' ),
                'compiler' => 'true',
                //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
                'desc'     => __( 'Logo for your website on mobile','akasa' ),
                'subtitle' => __( 'Upload any media using the WordPress native uploader', 'akasa' )
            ),
            array(
                'id'    => 'opt-note1',
                'type'  => 'info',
                'style' => 'info',
                'title' => __( 'Configuration Menu', 'akasa' ),
                'desc'  => __( 'Please create a menu in the Admin interface and select Menu display for the interface here. (Please do not select the same menu).', 'akasa' )
            ),
            array(
                'id'       => 'menu-header',
                'type'     => 'select',
                'data'     => 'menus',
                'title'    => __( 'Menus Header Page', 'akasa' ),
                'subtitle' => __( 'Please select the top menu for your website.', 'akasa' ),
                'desc'     => __( 'The top menu is not displayed on your phone or tablet', 'akasa' ),
            ),

            array(
                'id'       => 'menu-primary',
                'type'     => 'select',
                'data'     => 'menus',
                'title'    => __( 'Menus Primary', 'akasa' ),
                'subtitle' => __( 'Please select the Main Menu for your Website.', 'akasa' ),
                'desc'     => __( 'Please select this menu item (Menu is not visible on your phone or tablet display)', 'akasa' ),
            ),

            array(
                'id'       => 'menu-mobile',
                'type'     => 'select',
                'data'     => 'menus',
                'title'    => __( 'Menus Mobile', 'akasa' ),
                'subtitle' => __( 'Please select Menu for your mobile device.', 'akasa' ),
                'desc'     => __( 'Please select Menu for your mobile device.', 'akasa' ),
            ),



        )
    ) );


Redux::setSection( $opt_name, array(
    'title'            => __( 'Menu Sticky','akasa' ),
    'id'               => 'menu-sticky',
    'subsection'       => true,
    'customizer_width' => '500px',
    'desc'             => __('Configure Sticky Menu for your website (Menu When page is closed)','akasa'),
    'fields'           => array(

        array(
            'id'    => 'opt-alert2',
            'type'  => 'info',
            'style' => 'success',
            'icon'  => 'el el-info-circle',
            'title' => __( 'Configure menu when scrolling the page','akasa' ),
            'desc'  => __( 'Please configure menu when scrolling your website (Menu not showing on mobile)','akasa' )
        ),
        array(
            'id'       => 'opt-logo-sticky',
            'type'     => 'media',
            'url'      => true,
            'title'    => __( 'Sicky Logo','akasa' ),
            'compiler' => 'true',
            //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
            'desc'     => __( 'Logo for your website on the menu bar when scrolling the page','akasa' )
        ),
        array(
            'id'       => 'menu-sticky',
            'type'     => 'select',
            'data'     => 'menus',
            'title'    => __( 'Menus Sticky', 'akasa' ),
            'subtitle' => __( 'Please select Menu when scrolling your site.', 'akasa' ),
            'desc'     => __( 'Please select Menu when scrolling your site.', 'akasa' ),
        ),



    )));
Redux::setSection( $opt_name, array(
    'title'            => __( 'Footer','akasa' ),
    'id'               => 'menu-footer',
    'subsection'       => true,
    'desc'             =>__('Configure Footer for your website','akasa'),
    'fields'           => array(

        array(
            'id'    => 'opt-alert3',
            'type'  => 'info',
            'style' => 'success',
            'icon'  => 'el el-info-circle',
            'title' => __( 'Menu Footer','akasa' ),
            'desc'  => __( 'Please configure the footer menu at the bottom of your web page','akasa' )
        ),
        array(
            'id'       => 'opt-menu-footer',
            'type'     => 'select',
            'sortable'=>true,
            'data'     => 'menus',
            'multi'    => true,
            'title'    => __( 'Menus Footer', 'akasa' ),
            'subtitle' => __( 'Please select the Footer Menu at the bottom of your web page.', 'akasa' ),
            'desc'     => __( 'Please select Menu footer for your website.', 'akasa' ),
        ),


        array(
            'id'      => 'opt-footer-product',
            'type'    => 'editor',
            'title'   => __( 'The bottom of the page introduces the product.','akasa' ),
            'default' => 'Powered by Akasa.',
            'args'    => array(
                'wpautop'       => true,
                'media_buttons' => true,
                'textarea_rows' => 7,
                'teeny'         => true,
                'quicktags'     => true,
            )
        ),

            array(
                'id'      => 'opt-copyright',
                'type'    => 'editor',
                'title'   => __( 'Content at the bottom of your web page.','akasa' ),
                'default' => 'Powered by Akasa.',
                'args'    => array(
                    'wpautop'       => true,
                    'media_buttons' => true,
                    'textarea_rows' => 7,
                    'teeny'         => true,
                    'quicktags'     => true,
                )
            ),
			
 array(
            'id'       => 'opt-page-contact',
            'type'     => 'select',
            'data'     => 'page',
            'title'    => __( 'Page Contact', 'akasa' ),
            'subtitle' => __( 'Please select Page Contact for your web page.', 'akasa' ),
            'desc'     => __( 'Please select Page Contact for your website.', 'akasa' ),
        ),
        array(
            'id'         => 'opt-ace-editor-php',
            'type'       => 'ace_editor',
            'full_width' => true,
            'title'      => __( 'PHP Code', 'akasa' ),
            'mode'       => 'php',
            'theme'      => 'chrome',
        ),


    )));

