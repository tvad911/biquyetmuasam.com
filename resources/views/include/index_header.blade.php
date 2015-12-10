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

<body class="fullwidth">

    <div id="loader">
        <div class="loader-container">
            <img src="images/loader.gif" alt="" class="loader-site">
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
                                    <img src="upload/shop_single_01.png" class="img-responsive" alt="">
                                </div>
                                <div class="item">
                                    <img src="upload/shop_single_02.png" class="img-responsive" alt="">
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

    <div class="fullwidth-topbar">
        <div class="container">
            <div class="topbar">
                <div class="topbar-wrapper clearfix">
                    <div class="pull-left">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-cart-plus"></i> Cart: (2 items) <span class="dropme"></span></button>
                            <ul class="dropdown-menu cartdrop" role="menu">
                                <li>
                                    <a href="#">
                                    <img title="product" alt="product" class="alingleft" src="upload/shop_menu_01.jpg">
                                    <h4>Custom Boxer Item <small>Quantity : 1 - Price : $23.12</small></h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <img title="product" alt="product" class="alingleft" src="upload/shop_menu_02.jpg">
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
                    </div><!-- end left -->

                    <div class="pull-right">
                        <p><i class="fa fa-gift"></i> Buy one get one special deal for 2015</p>
                    </div><!-- end right -->
                </div><!-- end topbar-wrapper -->
            </div><!-- end topbar -->
        </div><!-- end container -->
    </div><!-- end fullwidth header -->

    @include('index_menu')