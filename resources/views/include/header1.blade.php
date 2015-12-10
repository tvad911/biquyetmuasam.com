<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from templatevisual.com/demo/kalista/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 21 Oct 2015 14:16:39 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kalista - Kids Store e-Commerce HTML5 Template</title>

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}" />

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('rs-plugin/css/settings.css') }}" media="screen" />

    <!-- Custom CSS -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <div id="loader">
        <div class="loader-container">
            <img src="{{ asset('images/loader.gif') }}" alt="" class="loader-site">
        </div>
    </div>

<div id="wrapper">
    <!-- Modal -->
    <div class="modal fade modalexample" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body row">
                    <div class="col-md-6">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="{{ asset('upload/shop_single_01.png') }}" class="img-responsive" alt="">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('upload/shop_single_02.png') }}" class="img-responsive" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                                <i class="sr-only">Previous</i>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                                <i class="sr-only">Next</i>
                            </a>
                        </div>
                    </div><!-- end col -->
                    <div class="col-md-6">
                        <div class="pull-left">
                            <h4>Advanced Classic Pants</h4>
                        </div>
                        <div class="pull-right">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <span>$31.12</span>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div><!-- end rating -->

                        <p>Lorem ipsum dolor sit amet isse potenti. Vesquam ante aliquet lacusemper elit. Cras neque nulla, convallis non commodo et, euismod nonsese. At vero.</p>

                        <div class="btn-group">
                            <a href="shop-cart.html" class="btn btn-primary" title="">ADD TO CART</a>
                        </div>
                        <div class="addw">
                            <a href="shop-wishlist.html"><i class="fa fa-heart-o"></i> Add to Wishlist</a>
                        </div><!-- end addw -->
                    </div><!-- end col -->
                </div><!-- end modal-body -->
            </div><!-- end modal-content -->
        </div><!-- end modal-diolog -->
    </div><!-- end modal -->

    <div class="container">
        <div class="topbar">
            <div class="topbar-wrapper">
                <div class="text-left">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cart-plus"></i> Cart: (2 items) <span class="dropme"></span></button>
                        <ul class="dropdown-menu cartdrop" role="menu">
                            <li>
                                <a href="#">
                                <img title="product" alt="product" class="alingleft" src="{{ asset('upload/shop_menu_01.jpg') }}">
                                <h4>Custom Boxer Item <small>Quantity : 1 - Price : $23.12</small></h4>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <img title="product" alt="product" class="alingleft" src="{{ asset('upload/shop_menu_02.jpg') }}">
                                <h4>A Man Shoe <small>Quantity : 1 - Price : $23.12</small></h4>
                                </a>
                            </li>
                            <li>
                                <a href="shop-checkout.html" class="btn btn-primary">Checkout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">En <span class="dropme"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">GR</a></li>
                            <li><a href="#">TR</a></li>
                            <li><a href="#">AB</a></li>
                            <li><a href="#">SP</a></li>
                            <li><a href="#">IT</a></li>
                        </ul>
                    </div><!-- /btn-group -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dollar"></i> Euro <span class="dropme"></span></button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="fa fa-euro"></i> Dollar</a></li>
                            <li><a href="#"><i class="fa fa-turkish-lira"></i> YTL</a></li>
                            <li><a href="#"><i class="fa fa-yen"></i> Yen</a></li>
                        </ul>
                    </div>
                </div><!-- end right -->
            </div><!-- end topbar-wrapper -->
        </div><!-- end topbar -->

        <header class="header">
            <div class="container-wrapper">
                <div class="hovermenu ttmenu">
                    <div class="headerbg hidden-xs hidden-sm"></div>
                    <div class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="logo">
                                <a class="navbar-brand" href="index-2.html"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                            </div>
                        </div><!-- end navbar-header -->

                        {!! larwp_nav_menu( array(
                            'theme_location'  => 'main-nav',
                            'menu'            => '',
                            'container'       => 'div',
                            'container_class' => 'navbar-collapse collapse',
                            'container_id'    => 'main-nav',
                            'menu_class'      => 'nav navbar-nav',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => new WP_Walker_Nav_Menu()
                            ) );
                        !!}


                        <?php $args = array(
                                'order'                  => 'ASC',
                                'orderby'                => 'menu_order',
                                'post_type'              => 'nav_menu_item',
                                'post_status'            => 'publish',
                                'output'                 => ARRAY_A,
                                'output_key'             => 'menu_order',
                                'nopaging'               => true,
                                'update_post_term_cache' => false );
                            $menu_slug = 'main-nav';
                            $locations = get_nav_menu_locations();


                            // // var_dump($locations);
                            // if (isset($locations[$args->theme_location])) {
                            //     $menu_id = $locations[$args->theme_location];
                            // }
                            $items = wp_get_nav_menu_items(4);
                            echo '<pre>';
                            foreach ($items as $key => $item) {
                                var_dump($item);
                            }
                            echo '</pre>';
                        ?>



                        {{-- <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
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
                            </ul><!-- end nav navbar-nav -->
                        </div><!--/.nav-collapse --> --}}
                    </div><!-- end navbar navbar-default clearfix -->
                </div><!-- end menu 1 -->
            </div><!-- end container -->
        </header>

        <div class="header-bottom">
            <div class="row">
                <div class="col-md-9">
                    <div class="custom-menu">
                        <p>Dear customer, welcome to the Kalista, please <a href="#">login</a> or <a href="#">create an account</a></p>
                    </div><!-- end menu -->
                </div><!-- end col -->

                <div class="col-md-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products..." />
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="button">
                                <span class="fa fa-search"></span>
                            </button>
                        </span>
                    </div>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end header-bottom -->