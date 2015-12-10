<?php
/**
 * Laravel Wordpress functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage Wplaravel
 * @since 1.0
 */
define( 'RWMB_DIR', get_template_directory() . '/meta-box/' );
define( 'RWMB_URL', get_template_directory_uri() . '/meta-box/' );
define( 'REDUX_URL', get_template_directory_uri() . '/admin/' );
define( 'WPLA_URL', get_template_directory_uri() );
// echo RWMB_DIR . 'meta-box.php';
require_once RWMB_DIR . 'meta-box.php';
include 'demo.php';
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxFramework/ReduxCore/framework.php' );
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/ReduxFramework/sample/sample-config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/ReduxFramework/sample/sample-config.php' );
}

/**
 * Create Custom Menu
 */
add_theme_support( 'menus' );
register_nav_menus(
    array(
            'main-nav' => 'Menu chính'
    )
);

								/*<ul class="nav navbar-nav">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="fa fa-angle-down"></b></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="index-default.html">Default Version</a></li>
                                            <li><a href="index-one.html">Version One</a></li>
                                            <li><a href="index-two.html">Version Two</a></li>
                                            <li><a href="index-three.html">Version Three</a></li>
                                            <li><a href="index-four.html">Version Four</a></li>
                                        </ul>
                                    </li><!-- end mega menu -->
                                    <li><a href="about.html">About</a></li>
                                    <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Shopping <b class="fa fa-angle-down"></b></a>
                                        <ul class="dropdown-menu pink">
                                            <li>
                                            <div class="ttmenu-content">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="box">
                                                            <ul>
                                                                <li><a href="shop-single.html">Shop Single</a></li>
                                                                <li><a href="shop-single-alt.html">Shop Single Alt</a></li>
                                                                <li><a href="shop-product-list.html">Shop Product List</a></li>
                                                                <li><a href="shop-filterable-category.html">Shop Filterable</a></li>
                                                                <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                                <li><a href="shop-tag-index.html">Tag Index <span class="badge">NEW</span></a></li>
                                                                <li><a href="shop-cart.html">Shopping Cart</a></li>
                                                            </ul>
                                                        </div><!-- end box -->
                                                    </div><!-- end col -->
                                                    <div class="col-md-6">
                                                        <div class="box">
                                                            <ul>
                                                                <li><a href="shop-wishlist.html">Wishlist</a></li>
                                                                <li><a href="shop-checkout.html">Checkout</a></li>
                                                                <li><a href="shop-account.html">My Account</a></li>
                                                                <li><a href="shop-track.html">Order Tracking</a></li>
                                                                <li><a href="page-not-found.html">404 Not Found</a></li>
                                                                <li><a href="page-delivery.html">Delivery Time</a></li>
                                                                <li><a href="typography.html">Typography</a></li>
                                                                <li><a href="shortcodes.html">Shortcodes</a></li>
                                                            </ul>
                                                        </div><!-- end box -->
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div><!-- end ttmenu-content -->
                                            </li>
                                        </ul>
                                    </li><!-- end mega menu -->
                                    <li class="dropdown ttmenu-half"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Boutiques <b class="fa fa-angle-down"></b></a>
                                        <ul class="dropdown-menu blue">
                                            <li>
                                            <div class="ttmenu-content">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="box">
                                                            <ul>
                                                                <li><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested, 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also re. Sections 1.10.32 and 1.10.33 from.</p></li>
                                                            </ul>
                                                        </div><!-- end box -->
                                                    </div><!-- end col -->
                                                </div><!-- end row -->

                                                <hr>

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="box">
                                                            <ul>
                                                                <li><a href="shop-product-list.html">Toys and Stationery</a></li>
                                                                <li><a href="shop-product-list.html">Baby Safety Products</a></li>
                                                                <li><a href="shop-product-list.html">Gift Items</a></li>

                                                            </ul>
                                                        </div><!-- end box -->
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="box">
                                                            <ul>
                                                                <li><a href="shop-product-list.html">Organic Materials</a></li>
                                                                <li><a href="shop-product-list.html">Pregnant Products</a></li>
                                                                <li><a href="shop-product-list.html">Diapers and Wipes</a></li>
                                                            </ul>
                                                        </div><!-- end box -->
                                                    </div><!-- end col -->
                                                    <div class="col-md-4">
                                                        <div class="box">
                                                            <ul>
                                                                <li><a href="shop-product-list.html">Diapers and Wipes</a></li>
                                                                <li><a href="shop-product-list.html">Diapers and Wipes</a></li>
                                                                <li><a href="shop-product-list.html">Others</a></li>
                                                            </ul>
                                                        </div><!-- end box -->
                                                    </div><!-- end col -->
                                                </div><!-- end row -->
                                            </div><!-- end ttmenu-content -->
                                            </li>
                                        </ul>
                                    </li><!-- end mega menu -->
                                    <li><a href="testimonials.html">Testimonials</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul><!-- end nav navbar-nav -->*/


include_once 'custom/wp_walker.php';