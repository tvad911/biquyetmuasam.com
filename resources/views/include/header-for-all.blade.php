<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/jquery.bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/owl.carousel/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/lib/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/option4.css') }}" />
    <title>Option4 - Kute shop - GFXFree.Net</title>

    <meta name="description" content="Chia sẻ bí quyết mua sắm hàng ngày,bí quyết mua sắm online,tư vấn chọn sản phẩm , mua sản phẩm">
    <meta name="keywords" content="web,design,html,css,html5,development">
    <meta name="robots" content="noodp,noydir">
    <link rel="canonical" href="http://biquyetmuasam.com">
    <link rel="next" href="http://biquyetmuasam.com">
    <link rel="publisher" href="https://plus.google.com/b/113591657045991604117/+Thachpham">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Bí quyết mua sắm">
    <meta property="og:description" content="Chia sẻ bí quyết mua sắm hàng ngày,bí quyết mua sắm online,tư vấn chọn sản phẩm , mua sản phẩm">
    <meta property="og:url" content="http://biquyetmuasam.com">
    <meta property="og:site_name" content="Bí quyết mua sắm">
    <meta property="fb:admins" content="100000042528792">
    <meta property="og:image" content="http://static.thach.io/wp-content/uploads/2015/03/tp-logo.png') }}">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:description" content="Chia sẻ bí quyết mua sắm hàng ngày,bí quyết mua sắm online,tư vấn chọn sản phẩm , mua sản phẩm">
    <meta name="twitter:title" content="Bí quyết mua sắm">
    <meta name="twitter:image" content="http://static.thach.io/wp-content/uploads/2015/03/tp-logo.png') }}">
    <meta name="language" content="english">
    <meta name="reply-to" content="email address">
    <meta name="web_author" content="text">
    <meta http-equiv="name" content="value">
</head>
<body class="category-page">
<!-- HEADER -->
<div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="{{ asset('assets/images/phone.png') }}" />00-62-658-658</a>
                <a href="#"><img alt="email" src="{{ asset('assets/images/email.png') }}" />Contact us today!</a>
            </div>
            <div class="currency ">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">USD</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Dollar</a></li>
                        <li><a href="#">Euro</a></li>
                      </ul>
                </div>
            </div>
            <div class="language ">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                      <img alt="email" src="{{ asset('assets/images/fr.jpg') }}" />French
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><img alt="email" src="{{ asset('assets/images/en.jpg') }}" />English</a></li>
                        <li><a href="#"><img alt="email" src="{{ asset('assets/images/fr.jpg') }}" />French</a></li>
                    </ul>
                </div>
            </div>
            <div class="support-link">
                <a href="#">Services</a>
                <a href="#">Support</a>
            </div>
            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="#">Compare</a></li>
                        <li><a href="#">Wishlists</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="index.php"><img alt="Kute shop - GFXFree.Net" src="{{ asset('assets/images/logo.png') }}" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form class="form-inline">
                      <div class="form-group form-category">
                        <select class="select-category">
                            <option value="2">All Categories</option>
                            <option value="1">Men</option>
                            <option value="2">Women</option>
                        </select>
                      </div>
                      <div class="form-group input-serach">
                        <input type="text"  placeholder="Keyword here...">
                      </div>
                      <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
            <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
                <a class="cart-link" href="order.html">
                    <span class="title">Shopping cart</span>
                    <span class="total">2 items - 122.38 €</span>
                    <span class="notify notify-left">2</span>
                </a>
                <div class="cart-block">
                    <div class="cart-block-content">
                        <h5 class="cart-title">2 Items in my cart</h5>
                        <div class="cart-block-list">
                            <ul>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="{{ asset('assets/data/product-100x122.jpg') }}" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                    </div>
                                </li>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="{{ asset('assets/data/product-s5-100x122.jpg') }}" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="toal-cart">
                            <span>Total</span>
                            <span class="toal-price pull-right">122.38 €</span>
                        </div>
                        <div class="cart-buttons">
                            <a href="order.html" class="btn-check-out">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                    <h4 class="title">
                        <span class="title-menu">Categories</span>
                        <span class="btn-open-mobile pull-right"><i class="fa fa-bars"></i></span>
                    </h4>
                    <div class="vertical-menu-content is-home">
                        <ul class="vertical-menu-list">
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/1.png') }}">Electronics</a></li>
                            <li>
                                <a class="parent" href="#"><img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/2.png') }}">Sports &amp; Outdoors</a>
                                <div class="vertical-dropdown-menu">
                                    <div class="vertical-groups col-sm-12">
                                        <div class="mega-group col-sm-4">
                                            <h4 class="mega-group-header"><span>Tennis</span></h4>
                                            <ul class="group-link-default">
                                                <li><a href="#">Tennis</a></li>
                                                <li><a href="#">Coats &amp; Jackets</a></li>
                                                <li><a href="#">Blouses &amp; Shirts</a></li>
                                                <li><a href="#">Tops &amp; Tees</a></li>
                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                <li><a href="#">Intimates</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-group col-sm-4">
                                            <h4 class="mega-group-header"><span>Swimming</span></h4>
                                            <ul class="group-link-default">
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Coats &amp; Jackets</a></li>
                                                <li><a href="#">Blouses &amp; Shirts</a></li>
                                                <li><a href="#">Tops &amp; Tees</a></li>
                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                <li><a href="#">Intimates</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-group col-sm-4">
                                            <h4 class="mega-group-header"><span>Shoes</span></h4>
                                            <ul class="group-link-default">
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Coats &amp; Jackets</a></li>
                                                <li><a href="#">Blouses &amp; Shirts</a></li>
                                                <li><a href="#">Tops &amp; Tees</a></li>
                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                <li><a href="#">Intimates</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-custom-html col-sm-12">
                                            <a href="#"><img src="{{ asset('assets/data/banner-megamenu.jpg') }}" alt="Banner"></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/3.png') }}">Smartphone &amp; Tablets</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/4.png') }}">Health &amp; Beauty Bags</a></li>
                            <li>
                                <a class="parent" href="#">
                                <img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/5.png') }}">Shoes &amp; Accessories</a>
                                <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            <div class="mega-group col-sm-12">
                                                <h4 class="mega-group-header"><span>Special products</span></h4>
                                                <div class="row mega-products">
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="{{ asset('assets/data/p10.jpg') }}" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="{{ asset('assets/data/p11.jpg') }}" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="{{ asset('assets/data/p12.jpg') }}" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="{{ asset('assets/data/p13.jpg') }}" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/6.png') }}">Toys &amp; Hobbies</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/7.png') }}">Computers &amp; Networking</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/8.png') }}">Laptops &amp; Accessories</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/9.png') }}">Jewelry &amp; Watches</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/10.png') }}">Flashlights &amp; Lamps</a></li>
                            <li>
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/11.png') }}">
                                    Cameras &amp; Photo
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/5.png') }}">
                                    Television
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/7.png') }}">Computers &amp; Networking
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/6.png') }}">
                                    Toys &amp; Hobbies
                                </a>
                            </li>
                            <li class="cat-link-orther">
                            <a href="#"><img class="icon-menu" alt="Funky roots" src="{{ asset('assets/data/9.png') }}">Jewelry &amp; Watches</a></li>
                        </ul>
                        <div class="all-category"><span class="open-cate">All Categories</span></div>
                    </div>
                </div>
                </div>
                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Fashion</a>
                                        <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{ asset('assets/data/men.png') }}" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">MEN'S</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Skirts</a></li>
                                                    <li class="link_container"><a href="#">Jackets</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Pants</a></li>
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{ asset('assets/data/women.png') }}" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">WOMEN'S</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Skirts</a></li>
                                                    <li class="link_container"><a href="#">Jackets</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Pants</a></li>
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{ asset('assets/data/kid.png') }}" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Kids</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Shoes</a></li>
                                                    <li class="link_container"><a href="#">Clothing</a></li>
                                                    <li class="link_container"><a href="#">Tops</a></li>
                                                    <li class="link_container"><a href="#">Scarves</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                             <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <a href="#">
                                                            <img class="img-responsive" src="{{ asset('assets/data/trending.png') }}" alt="sport">
                                                        </a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">TRENDING</a>
                                                    </li>
                                                    <li class="link_container"><a href="#">Men's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Kid's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Women's Clothing</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Sports</a></li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Foods</a>
                                            <ul class="mega_dropdown dropdown-menu" style="width: 830px;">
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Asian</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Vietnamese Pho</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Noodles</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Seafood</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Sausages</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Meat Dishes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Desserts</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">European</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Greek Potatoes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Famous Spaghetti</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Famous Spaghetti</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Chicken</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Italian Pizza</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">French Cakes</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">FAST</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Hamberger</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Pizza</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Noodles</a>
                                                    </li>
                                                    <li class="link_container group_header">
                                                        <a href="#">Sandwich</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Salad</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Paste</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="#">Tops</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-3">
                                                <ul class="block">
                                                    <li class="img_container">
                                                        <img src="{{ asset('assets/data/banner-topmenu.jpg') }}" alt="Banner">
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle" data-toggle="dropdown">Digital</a>
                                        <ul class="dropdown-menu container-fluid">
                                            <li class="block-container">
                                                <ul class="block">
                                                    <li class="link_container"><a href="#">Mobile</a></li>
                                                    <li class="link_container"><a href="#">Tablets</a></li>
                                                    <li class="link_container"><a href="#">Laptop</a></li>
                                                    <li class="link_container"><a href="#">Memory Cards</a></li>
                                                    <li class="link_container"><a href="#">Accessories</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="category.html">Furniture</a></li>
                                    <li><a href="category.html">Jewelry</a></li>
                                    <li class="dropdown">
                                        <a href="category.html" class="dropdown-toggle">Pages</a>
                                        <ul class="mega_dropdown dropdown-menu" style="width: 830px; left: 36px;">
                                            <li class="block-container col-sm-4">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Page</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="category.html">Category Left Sidebar</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="category2.html">Category Right Sidebar</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="detail.html">Product Left Sidebar</a>
                                                    </li>

                                                    <li class="link_container">
                                                        <a href="detail2.html">Product Full width</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="detail3.html">Product Right Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-4">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Page</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="compare.html">Compare</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="order.html">Order</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="checkout.html">Checkout</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="login.html">Login</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="block-container col-sm-4">
                                                <ul class="block">
                                                    <li class="link_container group_header">
                                                        <a href="#">Page</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="blog.html">Blog</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="blog-detail.html">Blog Post</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="about.html">About Us</a>
                                                    </li>
                                                    <li class="link_container">
                                                        <a href="contact.html">Contact Us</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->