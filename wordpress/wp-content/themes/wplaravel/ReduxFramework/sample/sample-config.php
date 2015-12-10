<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "redux_demo";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();

    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'WP Laravel', 'redux-framework-demo' ),
        'page_title'           => __( 'WP Laravel', 'redux-framework-demo' ),
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

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    // $args['admin_bar_links'][] = array(
    //     'id'    => 'redux-docs',
    //     'href'  => 'http://docs.reduxframework.com/',
    //     'title' => __( 'Documentation', 'redux-framework-demo' ),
    // );

    // $args['admin_bar_links'][] = array(
    //     //'id'    => 'redux-support',
    //     'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
    //     'title' => __( 'Support', 'redux-framework-demo' ),
    // );

    // $args['admin_bar_links'][] = array(
    //     'id'    => 'redux-extensions',
    //     'href'  => 'reduxframework.com/extensions',
    //     'title' => __( 'Extensions', 'redux-framework-demo' ),
    // );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    // $args['share_icons'][] = array(
    //     'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
    //     'title' => 'Visit us on GitHub',
    //     'icon'  => 'el el-github'
    //     //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    // );
    // $args['share_icons'][] = array(
    //     'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
    //     'title' => 'Like us on Facebook',
    //     'icon'  => 'el el-facebook'
    // );
    // $args['share_icons'][] = array(
    //     'url'   => 'http://twitter.com/reduxframework',
    //     'title' => 'Follow us on Twitter',
    //     'icon'  => 'el el-twitter'
    // );
    // $args['share_icons'][] = array(
    //     'url'   => 'http://www.linkedin.com/company/redux-framework',
    //     'title' => 'Find us on LinkedIn',
    //     'icon'  => 'el el-linkedin'
    // );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> General
    Redux::setSection( $opt_name, array(
        'title'            => __( 'General Settings', 'redux-framework-demo' ),
        'id'               => 'general_settings',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-info-circle'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Quick Start', 'redux-framework-demo' ),
        'id'         => 'quick_start',
        'desc'       => __( 'Các thiết lập cho nhanh', 'redux-framework-demo' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'style_sheet',
                'type'     => 'select',
                'url'      => true,
                'title'    => __( 'Theme Stylesheet', 'redux-framework-demo' ),
                'compiler' => 'true',
                'desc'     => __( 'Change your theme Css file , template.', 'redux-framework-demo' ),
                'subtitle' => __( 'Select your themes alternative color scheme.', 'redux-framework-demo' ),
                'options'  => array( 'default.css' => 'default.css', 'color1.css' => 'color1.css' ),
            ),
            array(
                'id'       => 'logo',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'Logo', 'redux-framework-demo' ),
                'compiler' => 'true',
                'desc'     => __( 'Basic media uploader with disabled URL input field.', 'redux-framework-demo' ),
                'subtitle' => __( 'Upload any media using the WordPress native uploader', 'redux-framework-demo' ),
                'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' )
            ),
            array(
                'id'       => 'favicon',
                'type'     => 'media',
                'url'      => true,
                'title'    => __( 'Favicon', 'redux-framework-demo' ),
                'compiler' => 'true',
                'desc'     => __( 'Upload a 16px x 16px ico image that will represent your website\'s favicon.', 'redux-framework-demo' ),
                'subtitle' => __( 'Upload any media using the WordPress native uploader', 'redux-framework-demo' ),
                'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' )
            ),
            array(
                'id'          => 'seo_title',
                'type'        => 'text',
                'title'       => __( 'Seo title', 'redux-framework-demo' ),
                'subtitle'    => __( 'Tiêu đề', 'redux-framework-demo' ),
                'desc'        => __( 'Tiêu đề dành cho seo', 'redux-framework-demo' )
            ),
            array(
                'id'          => 'seo_keyword',
                'type'        => 'text',
                'title'       => __( 'Seo keywords', 'redux-framework-demo' ),
                'subtitle'    => __( 'Từ khóa', 'redux-framework-demo' ),
                'desc'        => __( 'Keyword', 'redux-framework-demo' )
            ),
            array(
                'id'          => 'seo_description',
                'type'        => 'textarea',
                'title'       => __( 'Description', 'redux-framework-demo' ),
                'subtitle'    => __( 'Mô tả', 'redux-framework-demo' ),
                'desc'        => __( 'Description', 'redux-framework-demo' )
            ),
            array(
                'id'          => 'tracking_code',
                'type'        => 'textarea',
                'title'       => __( 'Tracking Code', 'redux-framework-demo' ),
                'subtitle'    => __( 'Tracking Code', 'redux-framework-demo' ),
                'desc'        => __( 'Paste your Google Analytics (or other) tracking code here. This will be added into the footer template of your theme.', 'redux-framework-demo' )
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Display Options', 'redux-framework-demo' ),
        'id'         => 'display_option',
        'desc'       => __( 'Các thiết lập cho các trang liên quan', 'redux-framework-demo' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'comment',
                'type'     => 'select',
                'url'      => true,
                'title'    => __( 'Post/Page Comments', 'redux-framework-demo' ),
                'compiler' => 'true',
                'desc'     => __( 'Select if you want to enable/disable comments on posts and/or pages.', 'redux-framework-demo' ),
                'subtitle' => __( 'Lựa chọn loại post/ page nào bạn muốn hiển thị comment', 'redux-framework-demo' ),
                'options'  => array( 'all' => 'Posts / Pages', 'post' => 'Posts Only', 'page' => 'Pages Only' , 'none' => 'None' ),
            ),
            array(
                'id'       => 'post_content',
                'type'     => 'select',
                'url'      => true,
                'title'    => __( 'Post Content', 'redux-framework-demo' ),
                'compiler' => 'true',
                'desc'     => __( 'Select if you want to show the full content or the excerpt on posts.', 'redux-framework-demo' ),
                'subtitle' => __( 'Lựa chọn kiểu hiển thị dữ liệu.', 'redux-framework-demo' ),
                'options'  => array( 'excerpt' => 'The Excerpt', 'full_content' => 'Full content'),
            ),
            array(
                'id'       => 'display_breadscrumb',
                'type'     => 'checkbox',
                'title'    => __( 'Display Breadscrumb', 'redux-framework-demo' ),
                'subtitle' => __( 'Hiển thị thanh Breadscrumb', 'redux-framework-demo' ),
                'desc'     => __( 'Display dynamic breadcrumbs on each page of your website.', 'redux-framework-demo' ),
                'default'  => 1,
                'options'  => array(
                    '1' => 'Display Breadscrumb',
                )
            ),
            array(
                'id'       => 'display_pagination',
                'type'     => 'checkbox',
                'title'    => __( 'Display Pagination', 'redux-framework-demo' ),
                'subtitle' => __( 'Hiển thị phân trang', 'redux-framework-demo' ),
                'desc'     => __( 'Display pagination on the blog.', 'redux-framework-demo' ),
                'default'  => '1',
                'options'  => array(
                    '1' => 'Display Pagination',
                )
            ),
            array(
                'id'       => 'display_pagination_style',
                'type'     => 'select',
                'title'    => __( 'Pagination Style', 'redux-framework-demo' ),
                'subtitle' => __( 'Kiểu style phân trang', 'redux-framework-demo' ),
                'desc'     => __( 'Select the style of pagination you would like to use on the blog.', 'redux-framework-demo' ),
                'default'  => 'number',
                'options'  => array( 'number' => 'Numbers', 'button' => 'Next/Previous'),
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Custom Style', 'redux-framework-demo' ),
        'id'         => 'custom_style',
        'desc'       => __( 'Các thiết lập cho trang chủ', 'redux-framework-demo' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'custom-css',
                'type'     => 'ace_editor',
                'title'    => __( 'CSS Code', 'redux-framework-demo' ),
                'subtitle' => __( 'Paste your CSS code here.', 'redux-framework-demo' ),
                'mode'     => 'css',
                'theme'    => 'monokai',
                'desc'     => 'Possible modes can be found at <a href="' . 'http://' . 'ace.c9.io" target="_blank">',
                'default'  => "#header{\n   margin: 0 auto;\n}"
            ),
            array(
                'id'       => 'custom-js',
                'type'     => 'ace_editor',
                'title'    => __( 'JS Code', 'redux-framework-demo' ),
                'subtitle' => __( 'Paste your JS code here.', 'redux-framework-demo' ),
                'mode'     => 'javascript',
                'theme'    => 'chrome',
                'desc'     => 'Possible modes can be found at <a href="' . 'http://' . 'ace.c9.io" target="_blank">',
                'default'  => "jQuery(document).ready(function(){\n\n});"
            ),
            array(
                'id'         => 'custom-php',
                'type'       => 'ace_editor',
                'full_width' => true,
                'title'      => __( 'PHP Code', 'redux-framework-demo' ),
                'subtitle'   => __( 'Paste your PHP code here.', 'redux-framework-demo' ),
                'mode'       => 'php',
                'theme'      => 'chrome',
                'desc'       => 'Possible modes can be found at <a href="' . 'http://' . 'ace.c9.io" target="_blank">',
                'default'    => '<?php
    echo "PHP String";'
            ),
            )
        ));

    Redux::setSection( $opt_name, array(
        'title'            => __( 'Styling Options', 'redux-framework-demo' ),
        'id'               => 'styling_option',
        'desc'             => __( 'These are really basic fields!', 'redux-framework-demo' ),
        'customizer_width' => '400px',
        'icon'             => 'el el-wrench'
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Background', 'redux-framework-demo' ),
        'id'         => 'backgournd',
        'desc'       => __( 'Thiết lập background', 'redux-framework-demo' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'body_background',
                'type'     => 'background',
                'output'   => array( 'body' ),
                'title'    => __( 'Body Background', 'redux-framework-demo' ),
                'subtitle' => __( 'Body background with image, color, etc.', 'redux-framework-demo' ),
                // 'default'   => '#FFFFFF',
            ),
        ),
        'desc'       => __( 'Các thiết lập style cho background.', 'redux-framework-demo' ),
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Link Color', 'redux-framework-demo' ),
        'desc'       => __( 'Các thiết lập style cho link', 'redux-framework-demo' ),
        'id'         => 'link_color',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-link-color',
                'type'     => 'link_color',
                'title'    => __( 'Links Color Option', 'redux-framework-demo' ),
                'subtitle' => __( 'Only color validation can be done on this field type', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                //'regular'   => false, // Disable Regular Color
                //'hover'     => false, // Disable Hover Color
                //'active'    => false, // Disable Active Color
                //'visited'   => true,  // Enable Visited Color
                'default'  => array(
                    'regular' => '#aaa',
                    'hover'   => '#bbb',
                    'active'  => '#ccc',
                )
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Slides', 'redux-framework-demo' ),
        'id'         => 'wplaravel-slides',
        'desc'       => __( '' ),
        'subsection' => false,
        'fields'     => array(
            array(
                'id'          => 'home-slides',
                'type'        => 'slides',
                'title'       => __( 'Home Slide', 'redux-framework-demo' ),
                'subtitle'    => __( 'Thêm slide vào Slide đầu tiên của trang chủ.', 'redux-framework-demo' ),
                'desc'        => __( 'Vui lòng chọn ảnh , điền thông tin.', 'redux-framework-demo' ),
                'placeholder' => array(
                    'title'       => __( 'This is a title', 'redux-framework-demo' ),
                    'description' => __( 'Description Here', 'redux-framework-demo' ),
                    'url'         => __( 'Give us a link!', 'redux-framework-demo' ),
                ),
            ),
        )
    ) );

    // -> START Typography
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Typography', 'redux-framework-demo' ),
        'id'     => 'typography',
        'desc'   => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ),
        'icon'   => 'el el-font',
        'fields' => array(
            array(
                'id'       => 'display_typography',
                'type'     => 'checkbox',
                'title'    => __( 'Enable Custom Typography', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 1,
                'options'  => array(
                    '1' => 'Enable the use of custom typography for your site. Custom styling will be output in your sites HEAD.',
                )
            ),
            array(
                'id'       => 'body_typography',
                'type'     => 'typography',
                'title'    => __( 'Body Font', 'redux-framework-demo' ),
                'subtitle' => __( 'Specify the body font properties.', 'redux-framework-demo' ),
                'google'   => true,
                'default'  => array(
                    'color'       => '#dd9933',
                    'font-size'   => '30px',
                    'font-family' => 'Arial,Helvetica,sans-serif',
                    'font-weight' => 'Normal',
                ),
            ),
            array(
                'id'          => 'navigation_typography',
                'type'        => 'typography',
                'title'       => __( 'Navigation', 'redux-framework-demo' ),
                'font-backup' => true,
                'all_styles'  => true,
                'output'      => array( 'h2.site-description, .entry-title' ),
                'compiler'    => array( 'h2.site-description-compiler' ),
                'units'       => 'px',
                'subtitle'    => __( 'Typography option with each property can be called individually.', 'redux-framework-demo' ),
                'default'     => array(
                    'color'       => '#333',
                    'font-style'  => '700',
                    'font-family' => 'Abel',
                    'google'      => true,
                    'font-size'   => '16px',
                    'line-height' => '40px'
                ),
            ),
            array(
                'id'          => 'page_title',
                'type'        => 'typography',
                'title'       => __( 'Page Title', 'redux-framework-demo' ),
                'font-backup' => true,
                'all_styles'  => true,
                'output'      => array( 'h2.page_title, .entry-title' ),
                'compiler'    => array( 'h2.page_title' ),
                'units'       => 'px',
                'subtitle'    => __( 'Change the page title.', 'redux-framework-demo' ),
                'default'     => array(
                    'color'       => '#333',
                    'font-style'  => '700',
                    'font-family' => 'Abel',
                    'google'      => true,
                    'font-size'   => '16px',
                    'line-height' => '40px'
                ),
            ),
            array(
                'id'          => 'post_title',
                'type'        => 'typography',
                'title'       => __( 'Post Title', 'redux-framework-demo' ),
                'font-backup' => true,
                'all_styles'  => true,
                'output'      => array( 'h2.page_title, .entry-title' ),
                'compiler'    => array( 'h2.page_title' ),
                'units'       => 'px',
                'subtitle'    => __( 'Change the post title.', 'redux-framework-demo' ),
                'default'     => array(
                    'color'       => '#333',
                    'font-style'  => '700',
                    'font-family' => 'Abel',
                    'google'      => true,
                    'font-size'   => '16px',
                    'line-height' => '40px'
                ),
            ),
            array(
                'id'          => 'post_meta',
                'type'        => 'typography',
                'title'       => __( 'Post Meta', 'redux-framework-demo' ),
                'font-backup' => true,
                'all_styles'  => true,
                'output'      => array( 'h2.page_title, .entry-title' ),
                'compiler'    => array( 'h2.page_title' ),
                'units'       => 'px',
                'subtitle'    => __( 'Change the post meta.', 'redux-framework-demo' ),
                'default'     => array(
                    'color'       => '#333',
                    'font-style'  => '700',
                    'font-family' => 'Abel',
                    'google'      => true,
                    'font-size'   => '16px',
                    'line-height' => '40px'
                ),
            ),
            array(
                'id'          => 'post_entry',
                'type'        => 'typography',
                'title'       => __( 'Post Entry', 'redux-framework-demo' ),
                'font-backup' => true,
                'all_styles'  => true,
                'output'      => array( 'h2.page_title, .entry-title' ),
                'compiler'    => array( 'h2.page_title' ),
                'units'       => 'px',
                'subtitle'    => __( 'Change the post entry.', 'redux-framework-demo' ),
                'default'     => array(
                    'color'       => '#333',
                    'font-style'  => '700',
                    'font-family' => 'Abel',
                    'google'      => true,
                    'font-size'   => '16px',
                    'line-height' => '40px'
                ),
            ),
            array(
                'id'          => 'widget_title',
                'type'        => 'typography',
                'title'       => __( 'Widget Titles', 'redux-framework-demo' ),
                'font-backup' => true,
                'all_styles'  => true,
                'output'      => array( 'h2.page_title, .entry-title' ),
                'compiler'    => array( 'h2.page_title' ),
                'units'       => 'px',
                'subtitle'    => __( 'Change the widget titles.', 'redux-framework-demo' ),
                'default'     => array(
                    'color'       => '#333',
                    'font-style'  => '700',
                    'font-family' => 'Abel',
                    'google'      => true,
                    'font-size'   => '16px',
                    'line-height' => '40px'
                ),
            ),
        )
    ) );

    // -> START Typography
    Redux::setSection( $opt_name, array(
        'title'  => __( 'Layout Options', 'redux-framework-demo' ),
        'id'     => 'layout_option',
        'desc'   => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ),
        'icon'   => 'el el-th',
        'fields' => array(
            array(
                'id'       => 'layout_option_enable',
                'type'     => 'checkbox',
                'title'    => __( 'Enable boxed layout', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( ' Wrap your site content inside a frame.', 'redux-framework-demo' ),
                'default'  => 1,
                'options'  => array(
                    '1' => 'Enable the use of custom typography for your site. Custom styling will be output in your sites HEAD.',
                )
            ),
            array(
                'id'       => 'main_layout',
                'type'     => 'image_select',
                'title'    => __( 'Main Layout', 'redux-framework-demo' ),
                'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
                'desc'     => __( 'This uses some of the built in images, you can use them for layout options.', 'redux-framework-demo' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),
                    '4' => array(
                        'alt' => '3 Column Middle',
                        'img' => ReduxFramework::$_url . 'assets/img/3cm.png'
                    ),
                    '5' => array(
                        'alt' => '3 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/3cl.png'
                    ),
                    '6' => array(
                        'alt' => '3 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/3cr.png'
                    )
                ),
                'default'  => '3'
            ),
            array(
                'id'       => 'blog_layout',
                'type'     => 'image_select',
                'title'    => __( 'Blog Layout', 'redux-framework-demo' ),
                'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
                'desc'     => __( 'This uses some of the built in images, you can use them for layout options.', 'redux-framework-demo' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),
                    '4' => array(
                        'alt' => '3 Column Middle',
                        'img' => ReduxFramework::$_url . 'assets/img/3cm.png'
                    )
                ),
                'default'  => '3'
            ),
            array(
                'id'       => 'blog_single_layout',
                'type'     => 'image_select',
                'title'    => __( 'Blog Single Layout', 'redux-framework-demo' ),
                'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
                'desc'     => __( 'This uses some of the built in images, you can use them for layout options.', 'redux-framework-demo' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),
                    '4' => array(
                        'alt' => '3 Column Middle',
                        'img' => ReduxFramework::$_url . 'assets/img/3cm.png'
                    )
                ),
                'default'  => '3'
            ),
            array(
                'id'       => 'page_layout',
                'type'     => 'image_select',
                'title'    => __( 'Page Layout', 'redux-framework-demo' ),
                'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
                'desc'     => __( 'This uses some of the built in images, you can use them for layout options.', 'redux-framework-demo' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),
                    '4' => array(
                        'alt' => '3 Column Middle',
                        'img' => ReduxFramework::$_url . 'assets/img/3cm.png'
                    )
                ),
                'default'  => '3'
            ),
            array(
                'id'       => 'shop_layout',
                'type'     => 'image_select',
                'title'    => __( 'Shop Layout', 'redux-framework-demo' ),
                'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
                'desc'     => __( 'This uses some of the built in images, you can use them for layout options.', 'redux-framework-demo' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),
                    '4' => array(
                        'alt' => '3 Column Middle',
                        'img' => ReduxFramework::$_url . 'assets/img/3cm.png'
                    )
                ),
                'default'  => '3'
            ),
            array(
                'id'       => 'shop_single_layout',
                'type'     => 'image_select',
                'title'    => __( 'Shop Single Layout', 'redux-framework-demo' ),
                'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
                'desc'     => __( 'This uses some of the built in images, you can use them for layout options.', 'redux-framework-demo' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => '1 Column',
                        'img' => ReduxFramework::$_url . 'assets/img/1col.png'
                    ),
                    '2' => array(
                        'alt' => '2 Column Left',
                        'img' => ReduxFramework::$_url . 'assets/img/2cl.png'
                    ),
                    '3' => array(
                        'alt' => '2 Column Right',
                        'img' => ReduxFramework::$_url . 'assets/img/2cr.png'
                    ),
                    '4' => array(
                        'alt' => '3 Column Middle',
                        'img' => ReduxFramework::$_url . 'assets/img/3cm.png'
                    )
                ),
                'default'  => '3'
            ),
        )
    ));

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Homepage', 'redux-framework-demo' ),
        'id'     => 'home_option',
        'desc'   => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ),
        'icon'   => 'el el-home-alt'
        )
    );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Featured Items', 'redux-framework-demo' ),
        'id'         => 'feature_item',
        'desc'       => __( '', 'redux-framework-demo' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'feature_item_enable',
                'type'     => 'checkbox',
                'title'    => __( 'Enable Featured Items', 'redux-framework-demo' ),
                'subtitle' => __( 'Tin nổi bật', 'redux-framework-demo' ),
                'desc'     => __( 'Hiển thị tin nổi bật trên Homepage', 'redux-framework-demo' ),
                'default'  => 1,
                'options'  => array(
                    '1' => 'Enable the use of custom typography for your site. Custom styling will be output in your sites HEAD.',
                )
            ),
            array(
                'id'       => 'feature_item_title',
                'type'     => 'text',
                'title'    => __( 'Feature items title', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Feature items title', 'redux-framework-demo' ),
                'default'  => 'Featured Items',
            ),
            array(
                'id'       => 'count_feature_item',
                'type'     => 'text',
                'title'    => __( 'Show many feature items', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Show many feature items', 'redux-framework-demo' ),
                'default'  => '8',
            ),
            array(
                'id'       => 'testimonials_item_enable',
                'type'     => 'checkbox',
                'title'    => __( 'Testimonials', 'redux-framework-demo' ),
                'subtitle' => __( 'Ý kiến khách hàng', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 1,
                'options'  => array(
                    '1' => 'Enable Testimonials on Homepage.',
                )
            ),
            array(
                'id'       => 'testimonials_item_title',
                'type'     => 'text',
                'title'    => __( 'Testimonials title', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Testimonials title', 'redux-framework-demo' ),
                'default'  => 'Kalista Testimonials',
            ),
            array(
                'id'       => 'count_testimonials_item',
                'type'     => 'text',
                'title'    => __( 'Show many Testimonials items', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Show many feature items', 'redux-framework-demo' ),
                'default'  => '8',
            ),
            array(
                'id'       => 'recent_item_enable',
                'type'     => 'checkbox',
                'title'    => __( 'Recent Items', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 1,
                'options'  => array(
                    '1' => 'Enable the use of custom typography for your site. Custom styling will be output in your sites HEAD.',
                )
            ),
            array(
                'id'       => 'recent_item_title',
                'type'     => 'text',
                'title'    => __( 'Recent Items title', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Feature items title', 'redux-framework-demo' ),
                'default'  => 'Recent Items',
            ),
            array(
                'id'       => 'count_recent_item',
                'type'     => 'text',
                'title'    => __( 'Count recent items', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Show many feature items', 'redux-framework-demo' ),
                'default'  => '8',
            ),
            array(
                'id'       => 'home_banner_enable',
                'type'     => 'checkbox',
                'title'    => __( 'Home Banner', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 1,
                'options'  => array(
                    '1' => 'Enable the use of custom typography for your site. Custom styling will be output in your sites HEAD.',
                )
            ),
            array(
                'id'       => 'count_home_banner',
                'type'     => 'text',
                'title'    => __( 'Show many feature items', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Show many feature items', 'redux-framework-demo' ),
                'default'  => '3',
            ),
            array(
                'id'       => 'blog_item_enable',
                'type'     => 'checkbox',
                'title'    => __( 'From the Blog', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 1,
                'options'  => array(
                    '1' => 'Enable the use of custom typography for your site. Custom styling will be output in your sites HEAD.',
                )
            ),
            array(
                'id'       => 'blog_item_title',
                'type'     => 'text',
                'title'    => __( 'Blog items title', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Blog items title', 'redux-framework-demo' ),
                'default'  => 'From the Blog',
            ),
            array(
                'id'       => 'sub_blog_item_description',
                'type'     => 'text',
                'title'    => __( 'Sub Blog items description', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Sub Blog items description', 'redux-framework-demo' ),
                'default'  => 'Listed below our awesome blog posts with carousel widget',
            ),
            array(
                'id'       => 'count_blog_item',
                'type'     => 'text',
                'title'    => __( 'Show many blog items', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Show many feature items', 'redux-framework-demo' ),
                'default'  => '8',
            ),
            array(
                'id'       => 'subscribe_us_enable',
                'type'     => 'checkbox',
                'title'    => __( 'Subscribe Us', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 1,
                'options'  => array(
                    '1' => 'Enable the use of custom typography for your site. Custom styling will be output in your sites HEAD.',
                )
            ),
            array(
                'id'       => 'subscribe_us_title',
                'type'     => 'text',
                'title'    => __( 'Subscribe Us title', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Subscribe Us title', 'redux-framework-demo' ),
                'default'  => 'Subscribe Us',
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Blogs', 'redux-framework-demo' ),
        'id'         => 'blog_item',
        'desc'       => __( '', 'redux-framework-demo' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'blog_item_enable',
                'type'     => 'checkbox',
                'title'    => __( 'Enable Featured Items', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( '', 'redux-framework-demo' ),
                'default'  => 1,
                'options'  => array(
                    '1' => 'Enable the use of custom typography for your site. Custom styling will be output in your sites HEAD.',
                )
            ),
            array(
                'id'       => 'blog_title',
                'type'     => 'text',
                'title'    => __( 'Blogs title', 'redux-framework-demo' ),
                'subtitle' => __( '', 'redux-framework-demo' ),
                'desc'     => __( 'Blogs title', 'redux-framework-demo' ),
                'default'  => 'Blogs Title',
            ),
            array(
                'id'       => 'count_blogs_item',
                'type'     => 'text',
                'title'    => __( 'Show many blog items', 'redux-framework-demo' ),
                'subtitle' => __( 'Subtitle', 'redux-framework-demo' ),
                'desc'     => __( 'Show many blog items on per page', 'redux-framework-demo' ),
                'default'  => '8',
            ),
            array(
                'id'       => 'blogs_order_type',
                'type'     => 'select',
                'title'    => __( 'Order Type', 'redux-framework-demo' ),
                'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'options'  => array(
                    'asc'  => 'Asc',
                    'desc' => 'Desc',
                ),
                'default'  => 'desc'
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Social', 'redux-framework-demo' ),
        'id'         => 'social',
        'desc'       => __( 'Social', 'redux-framework-demo' ),
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'facebook_url',
                'type'        => 'text',
                'title'    => __( 'Facebook URL', 'redux-framework-demo' ),
                'subtitle' => __( 'Facebook!', 'redux-framework-demo' ),
                'placeholder' => '',
            ),
            array(
                'id'       => 'google_url',
                'type'        => 'text',
                'title'    => __( 'Google URL', 'redux-framework-demo' ),
                'subtitle' => __( 'Google!', 'redux-framework-demo' ),
                'placeholder' => '',
            ),
            array(
                'id'       => 'twitter_url',
                'type'        => 'text',
                'title'    => __( 'Twitter URL', 'redux-framework-demo' ),
                'subtitle' => __( 'Twitter!', 'redux-framework-demo' ),
                'placeholder' => '',
            ),
            array(
                'id'       => 'pinterest_url',
                'type'        => 'text',
                'title'    => __( 'Pinterest URL', 'redux-framework-demo' ),
                'subtitle' => __( 'Pinterest!', 'redux-framework-demo' ),
                'placeholder' => '',
            ),
            array(
                'id'       => 'linkedin_url',
                'type'        => 'text',
                'title'    => __( 'Linked in URL', 'redux-framework-demo' ),
                'subtitle' => __( 'Linked in!', 'redux-framework-demo' ),
                'placeholder' => '',
            )
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'  => __( 'Footer Customization', 'redux-framework-demo' ),
        'id'     => 'footer_custom',
        'desc'   => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ),
        'icon'   => 'el el-website',
        'fields' => array(
            array(
                'id'       => 'footer_widget',
                'type'     => 'image_select',
                'title'    => __( 'Footer Widget Areas', 'redux-framework-demo' ),
                'subtitle' => __( 'No validation can be done on this field type', 'redux-framework-demo' ),
                'desc'     => __( 'This uses some of the built in images, you can use them for layout options.', 'redux-framework-demo' ),
                //Must provide key => value(array:title|img) pairs for radio options
                'options'  => array(
                    '1' => array(
                        'alt' => 'None',
                        'img' => ReduxFramework::$_url . 'assets/img/layout-off.png'
                    ),
                    '2' => array(
                        'alt' => '1 Widget',
                        'img' => ReduxFramework::$_url . 'assets/img/footer-widgets-1.png'
                    ),
                    '3' => array(
                        'alt' => '2 Widgets',
                        'img' => ReduxFramework::$_url . 'assets/img/footer-widgets-2.png'
                    ),
                    '4' => array(
                        'alt' => '3 Widgets',
                        'img' => ReduxFramework::$_url . 'assets/img/footer-widgets-3.png'
                    ),
                    '5' => array(
                        'alt' => '4 Widgets',
                        'img' => ReduxFramework::$_url . 'assets/img/footer-widgets-4.png'
                    )
                ),
                'default'  => '4'
            ),
            array(
                'id'       => 'main_phone1',
                'type'        => 'text',
                'title'    => __( 'Mobile', 'redux-framework-demo' ),
                'subtitle' => __( 'Thông tin giới thiệu về bản quyền nội dung!', 'redux-framework-demo' ),
                'placeholder' => 'Vui lòng nhập Mobile.',
            ),
            array(
                'id'       => 'main_phone2',
                'type'        => 'text',
                'title'    => __( 'Home Phone', 'redux-framework-demo' ),
                'subtitle' => __( 'Thông tin giới thiệu về bản quyền nội dung!', 'redux-framework-demo' ),
                'placeholder' => 'Vui lòng nhập Phone.',
            ),
            array(
                'id'       => 'copyright',
                'type'        => 'text',
                'title'    => __( 'Copyright', 'redux-framework-demo' ),
                'subtitle' => __( 'Thông tin giới thiệu về bản quyền nội dung!', 'redux-framework-demo' ),
                'placeholder' => 'Vui lòng nhập Copyright.',
            )
        )
    ));

    Redux::setSection( $opt_name, array(
        'title' => __( 'Advanced Features', 'redux-framework-demo' ),
        'icon'  => 'el el-thumbs-up',
        // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'Callback', 'redux-framework-demo' ),
        'id'         => 'additional-callback',
        'desc'       => __( 'For full documentation on this field, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/fields/callback/" target="_blank">docs.reduxframework.com/core/fields/callback/</a>',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-custom-callback',
                'type'     => 'callback',
                'title'    => __( 'Custom Field Callback', 'redux-framework-demo' ),
                'subtitle' => __( 'This is a completely unique field type', 'redux-framework-demo' ),
                'desc'     => __( 'This is created with a callback function, so anything goes in this field. Make sure to define the function though.', 'redux-framework-demo' ),
                'callback' => 'redux_my_custom_field'
            ),
        )
    ) );

    // -> START Validation
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Field Validation', 'redux-framework-demo' ),
        'id'         => 'validation',
        'desc'       => __( 'For full documentation on validation, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/the-basics/validation/" target="_blank">docs.reduxframework.com/core/the-basics/validation/</a>',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-text-email',
                'type'     => 'text',
                'title'    => __( 'Text Option - Email Validated', 'redux-framework-demo' ),
                'subtitle' => __( 'This is a little space under the Field Title in the Options table, additional info is good in here.', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'validate' => 'email',
                'msg'      => 'custom error message',
                'default'  => 'test@test.com',
            ),
            array(
                'id'       => 'opt-text-post-type',
                'type'     => 'text',
                'title'    => __( 'Text Option with Data Attributes', 'redux-framework-demo' ),
                'subtitle' => __( 'You can also pass an options array if you want. Set the default to whatever you like.', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'data'     => 'post_type',
            ),
            array(
                'id'       => 'opt-multi-text',
                'type'     => 'multi_text',
                'title'    => __( 'Multi Text Option - Color Validated', 'redux-framework-demo' ),
                'validate' => 'color',
                'subtitle' => __( 'If you enter an invalid color it will be removed. Try using the text "blue" as a color.  ;)', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' )
            ),
            array(
                'id'       => 'opt-text-url',
                'type'     => 'text',
                'title'    => __( 'Text Option - URL Validated', 'redux-framework-demo' ),
                'subtitle' => __( 'This must be a URL.', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'validate' => 'url',
                'default'  => 'http://reduxframework.com',
            ),
            array(
                'id'       => 'opt-text-numeric',
                'type'     => 'text',
                'title'    => __( 'Text Option - Numeric Validated', 'redux-framework-demo' ),
                'subtitle' => __( 'This must be numeric.', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'validate' => 'numeric',
                'default'  => '0',
            ),
            array(
                'id'       => 'opt-text-comma-numeric',
                'type'     => 'text',
                'title'    => __( 'Text Option - Comma Numeric Validated', 'redux-framework-demo' ),
                'subtitle' => __( 'This must be a comma separated string of numerical values.', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'validate' => 'comma_numeric',
                'default'  => '0',
            ),
            array(
                'id'       => 'opt-text-no-special-chars',
                'type'     => 'text',
                'title'    => __( 'Text Option - No Special Chars Validated', 'redux-framework-demo' ),
                'subtitle' => __( 'This must be a alpha numeric only.', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'validate' => 'no_special_chars',
                'default'  => '0'
            ),
            array(
                'id'       => 'opt-text-str_replace',
                'type'     => 'text',
                'title'    => __( 'Text Option - Str Replace Validated', 'redux-framework-demo' ),
                'subtitle' => __( 'You decide.', 'redux-framework-demo' ),
                'desc'     => __( 'This field\'s default value was changed by a filter hook!', 'redux-framework-demo' ),
                'validate' => 'str_replace',
                'str'      => array(
                    'search'      => ' ',
                    'replacement' => 'thisisaspace'
                ),
                'default'  => 'This is the default.'
            ),
            array(
                'id'       => 'opt-text-preg_replace',
                'type'     => 'text',
                'title'    => __( 'Text Option - Preg Replace Validated', 'redux-framework-demo' ),
                'subtitle' => __( 'You decide.', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'validate' => 'preg_replace',
                'preg'     => array(
                    'pattern'     => '/[^a-zA-Z_ -]/s',
                    'replacement' => 'no numbers'
                ),
                'default'  => '0'
            ),
            array(
                'id'                => 'opt-text-custom_validate',
                'type'              => 'text',
                'title'             => __( 'Text Option - Custom Callback Validated', 'redux-framework-demo' ),
                'subtitle'          => __( 'You decide.', 'redux-framework-demo' ),
                'desc'              => __( 'Enter <code>1</code> and click <strong>Save Changes</strong> for an error message, or enter <code>2</code> and click <strong>Save Changes</strong> for a warning message.', 'redux-framework-demo' ),
                'validate_callback' => 'redux_validate_callback_function',
                'default'           => '0'
            ),
            //array(
            //    'id'                => 'opt-text-custom_validate-class',
            //    'type'              => 'text',
            //    'title'             => __( 'Text Option - Custom Callback Validated - Class', 'redux-framework-demo' ),
            //    'subtitle'          => __( 'You decide.', 'redux-framework-demo' ),
            //    'desc'              => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
            //    'validate_callback' => array( 'Class_Name', 'validate_callback_function' ),
            //    // You can pass the current class
            //    // Or pass the class name and method
            //    //'validate_callback' => array(
            //    //    'Redux_Framework_sample_config',
            //    //    'validate_callback_function'
            //    //),
            //    'default'           => '0'
            //),
            array(
                'id'       => 'opt-textarea-no-html',
                'type'     => 'textarea',
                'title'    => __( 'Textarea Option - No HTML Validated', 'redux-framework-demo' ),
                'subtitle' => __( 'All HTML will be stripped', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'validate' => 'no_html',
                'default'  => 'No HTML is allowed in here.'
            ),
            array(
                'id'       => 'opt-textarea-html',
                'type'     => 'textarea',
                'title'    => __( 'Textarea Option - HTML Validated', 'redux-framework-demo' ),
                'subtitle' => __( 'HTML Allowed (wp_kses)', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'validate' => 'html', //see http://codex.wordpress.org/Function_Reference/wp_kses_post
                'default'  => 'HTML is allowed in here.'
            ),
            array(
                'id'           => 'opt-textarea-some-html',
                'type'         => 'textarea',
                'title'        => __( 'Textarea Option - HTML Validated Custom', 'redux-framework-demo' ),
                'subtitle'     => __( 'Custom HTML Allowed (wp_kses)', 'redux-framework-demo' ),
                'desc'         => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'validate'     => 'html_custom',
                'default'      => '<p>Some HTML is allowed in here.</p>',
                'allowed_html' => array(
                    'a'      => array(
                        'href'  => array(),
                        'title' => array()
                    ),
                    'br'     => array(),
                    'em'     => array(),
                    'strong' => array()
                ) //see http://codex.wordpress.org/Function_Reference/wp_kses
            ),
            array(
                'id'       => 'opt-textarea-js',
                'type'     => 'textarea',
                'title'    => __( 'Textarea Option - JS Validated', 'redux-framework-demo' ),
                'subtitle' => __( 'JS will be escaped', 'redux-framework-demo' ),
                'desc'     => __( 'This is the description field, again good for additional info.', 'redux-framework-demo' ),
                'validate' => 'js'
            ),
        )
    ) );

    // -> START Required
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Field Required / Linking', 'redux-framework-demo' ),
        'id'         => 'required',
        'desc'       => __( 'For full documentation on validation, visit: ', 'redux-framework-demo' ) . '<a href="//docs.reduxframework.com/core/the-basics/required/" target="_blank">docs.reduxframework.com/core/the-basics/required/</a>',
        'subsection' => true,
        'fields'     => array(
            array(
                'id'       => 'opt-required-basic',
                'type'     => 'switch',
                'title'    => 'Basic Required Example',
                'subtitle' => 'Click <code>On</code> to see the text field appear.',
                'default'  => false
            ),
            array(
                'id'       => 'opt-required-basic-text',
                'type'     => 'text',
                'title'    => 'Basic Text Field',
                'subtitle' => 'This text field is only show when the above switch is set to <code>On</code>, using the <code>required</code> argument.',
                'required' => array( 'opt-required-basic', '=', true )
            ),
            array(
                'id'   => 'opt-required-divide-1',
                'type' => 'divide'
            ),
            array(
                'id'       => 'opt-required-nested',
                'type'     => 'switch',
                'title'    => 'Nested Required Example',
                'subtitle' => 'Click <code>On</code> to see another set of options appear.',
                'default'  => false
            ),
            array(
                'id'       => 'opt-required-nested-buttonset',
                'type'     => 'button_set',
                'title'    => 'Multiple Nested Required Examples',
                'subtitle' => 'Click any buton to show different fields based on their <code>required</code> statements.',
                'options'  => array(
                    'button-text'     => 'Show Text Field',
                    'button-textarea' => 'Show Textarea Field',
                    'button-editor'   => 'Show WP Editor',
                    'button-ace'      => 'Show ACE Editor'
                ),
                'required' => array( 'opt-required-nested', '=', true ),
                'default'  => 'button-text'
            ),
            array(
                'id'       => 'opt-required-nested-text',
                'type'     => 'text',
                'title'    => 'Nested Text Field',
                'required' => array( 'opt-required-nested-buttonset', '=', 'button-text' )
            ),
            array(
                'id'       => 'opt-required-nested-textarea',
                'type'     => 'textarea',
                'title'    => 'Nested Textarea Field',
                'required' => array( 'opt-required-nested-buttonset', '=', 'button-textarea' )
            ),
            array(
                'id'       => 'opt-required-nested-editor',
                'type'     => 'editor',
                'title'    => 'Nested Editor Field',
                'required' => array( 'opt-required-nested-buttonset', '=', 'button-editor' )
            ),
            array(
                'id'       => 'opt-required-nested-ace',
                'type'     => 'ace_editor',
                'title'    => 'Nested ACE Editor Field',
                'required' => array( 'opt-required-nested-buttonset', '=', 'button-ace' )
            ),
            array(
                'id'   => 'opt-required-divide-2',
                'type' => 'divide'
            ),
            array(
                'id'       => 'opt-required-select',
                'type'     => 'select',
                'title'    => 'Select Required Example',
                'subtitle' => 'Select a different option to display its value.  Required may be used to display multiple & reusable fields',
                'options'  => array(
                    'no-sidebar'    => 'No Sidebars',
                    'left-sidebar'  => 'Left Sidebar',
                    'right-sidebar' => 'Right Sidebar',
                    'both-sidebars' => 'Both Sidebars'
                ),
                'default'  => 'no-sidebar',
                'select2'  => array( 'allowClear' => false )
            ),
            array(
                'id'       => 'opt-required-select-left-sidebar',
                'type'     => 'select',
                'title'    => 'Select Left Sidebar',
                'data'     => 'sidebars',
                'default'  => '',
                'required' => array( 'opt-required-select', '=', array( 'left-sidebar', 'both-sidebars' ) )
            ),
            array(
                'id'       => 'opt-required-select-right-sidebar',
                'type'     => 'select',
                'title'    => 'Select Right Sidebar',
                'data'     => 'sidebars',
                'default'  => '',
                'required' => array( 'opt-required-select', '=', array( 'right-sidebar', 'both-sidebars' ) )
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'title'      => __( 'WPML Integration', 'redux-framework-demo' ),
        'desc'       => __( 'These fields can be fully translated by WPML (WordPress Multi-Language). This serves as an example for you to implement. For extra details look at our <a href="//docs.reduxframework.com/core/advanced/wpml-integration/" target="_blank">WPML Implementation</a> documentation.', 'redux-framework-demo' ),
        'subsection' => true,
        // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
        'fields'     => array(
            array(
                'id'    => 'wpml-text',
                'type'  => 'textarea',
                'title' => __( 'WPML Text', 'redux-framework-demo' ),
                'desc'  => __( 'This string can be translated via WPML.', 'redux-framework-demo' ),
            ),
            array(
                'id'      => 'wpml-multicheck',
                'type'    => 'checkbox',
                'title'   => __( 'WPML Multi Checkbox', 'redux-framework-demo' ),
                'desc'    => __( 'You can literally translate the values via key.', 'redux-framework-demo' ),
                //Must provide key => value pairs for multi checkbox options
                'options' => array(
                    '1' => 'Option 1',
                    '2' => 'Option 2',
                    '3' => 'Option 3'
                ),
            ),
        )
    ) );

    Redux::setSection( $opt_name, array(
        'icon'            => 'el el-list-alt',
        'title'           => __( 'Customizer Only', 'redux-framework-demo' ),
        'desc'            => __( '<p class="description">This Section should be visible only in Customizer</p>', 'redux-framework-demo' ),
        'customizer_only' => true,
        'fields'          => array(
            array(
                'id'              => 'opt-customizer-only',
                'type'            => 'select',
                'title'           => __( 'Customizer Only Option', 'redux-framework-demo' ),
                'subtitle'        => __( 'The subtitle is NOT visible in customizer', 'redux-framework-demo' ),
                'desc'            => __( 'The field desc is NOT visible in customizer.', 'redux-framework-demo' ),
                'customizer_only' => true,
                //Must provide key => value pairs for select options
                'options'         => array(
                    '1' => 'Opt 1',
                    '2' => 'Opt 2',
                    '3' => 'Opt 3'
                ),
                'default'         => '2'
            ),
        )
    ) );

    if ( file_exists( dirname( __FILE__ ) . '/../README.md' ) ) {
        $section = array(
            'icon'   => 'el el-list-alt',
            'title'  => __( 'Documentation', 'redux-framework-demo' ),
            'fields' => array(
                array(
                    'id'       => '17',
                    'type'     => 'raw',
                    'markdown' => true,
                    'content_path' => dirname( __FILE__ ) . '/../README.md', // FULL PATH, not relative please
                    //'content' => 'Raw content here',
                ),
            ),
        );
        Redux::setSection( $opt_name, $section );
    }
    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
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
                $return['error'] = $field;
                $field['msg']    = 'your custom error message';
            }

            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = 'your custom warning message';
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
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

