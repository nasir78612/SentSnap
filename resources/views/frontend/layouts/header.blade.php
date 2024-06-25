<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamingtheme.kiendaotac.com/html/stelina/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Mar 2024 04:18:43 GMT -->
<head>
<title>@yield('title') | ScentScap</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('frontend/images/favicon.png')}}"/>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{ url('frontend/css/bootstrap.min.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/css/font-awesome.min.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/css/owl.carousel.min.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/css/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/css/jquery-ui.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/css/slick.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/css/chosen.min.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/css/pe-icon-7-stroke.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/css/magnific-popup.min.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/css/lightbox.min.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/js/fancybox/source/jquery.fancybox.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/css/jquery.scrollbar.min.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/css/mobile-menu.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/fonts/flaticon/flaticon.css')}}"/>
    <link rel="stylesheet" href="{{ url('frontend/css/style.css')}}"/>
</head>
<body class="home">
<header class="header style7">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-left">
                <div class="header-message">
                    Welcome to our online store!
                </div>
            </div>
            <div class="top-bar-right">
                <div class="header-language">
                    <div class="stelina-language stelina-dropdown">
                        <a href="#" class="active language-toggle" data-stelina="stelina-dropdown">
									<span>
										English (USD)
									</span>
                        </a>
                        <ul class="stelina-submenu">
                            <li class="switcher-option">
                                <a href="#">
											<span>
												French (EUR)
											</span>
                                </a>
                            </li>
                            <li class="switcher-option">
                                <a href="#">
											<span>
												Japanese (JPY)
											</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="header-user-links">
                    <li>
                        <a href="{{url('/login')}}">Login or Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-header">
            <div class="row">
                <div class="col-lg-3 col-sm-4 col-md-3 col-xs-7 col-ts-12 header-element">
                    <div class="logo">
                        <a href="{{url('/index-2')}}">
                            <img src="frontend/images/logoscent.png" alt="img">
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-8 col-md-6 col-xs-5 col-ts-12">
                    <div class="block-search-block">
                        <form class="form-search form-search-width-category">
                            <div class="form-content">
                                <div class="category">
                                    <select title="cate" data-placeholder="All Categories" class="chosen-select"
                                            tabindex="1">
                                        <option value="United States">Accessories</option>
                                        <option value="United Kingdom">Accents</option>
                                        <option value="Afghanistan">Desks</option>
                                        <option value="Aland Islands">Sofas</option>
                                        <option value="Albania">New Arrivals</option>
                                        <option value="Algeria">Bedroom</option>
                                    </select>
                                </div>
                                <div class="inner">
                                    <input type="text" class="input" name="s" value="" placeholder="Search here">
                                </div>
                                <button class="btn-search" type="submit">
                                    <span class="icon-search"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-12 col-md-3 col-xs-12 col-ts-12">
                    <div class="header-control">
                        <div class="block-minicart stelina-mini-cart block-header stelina-dropdown">
                            <a href="javascript:void(0);" class="shopcart-icon" data-stelina="stelina-dropdown">
                                Cart
                                <span class="count">
										0
										</span>
                            </a>
                            <div class="shopcart-description stelina-submenu">
                                <div class="content-wrap">
                                    <h3 class="title">Shopping Cart</h3>
                                    <ul class="minicart-items">
                                        <li class="product-cart mini_cart_item">
                                            <a href="#" class="product-media">
                                                <img src="frontend/images/item-minicart-1.jpg" alt="img">
                                            </a>
                                            <div class="product-details">
                                                <h5 class="product-name">
                                                    <a href="#">Bibliotheque</a>
                                                </h5>
                                                <div class="variations">
															<span class="attribute_color">
																<a href="#">Black</a>
															</span>
                                                    ,
                                                    <span class="attribute_size">
																<a href="#">300ml</a>
															</span>
                                                </div>
                                                <span class="product-price">
															<span class="price">
																<span>$45</span>
															</span>
														</span>
                                                <span class="product-quantity">
															(x1)
														</span>
                                                <div class="product-remove">
                                                    <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-cart mini_cart_item">
                                            <a href="#" class="product-media">
                                                <img src="frontend/images/item-minicart-2.jpg" alt="img">
                                            </a>
                                            <div class="product-details">
                                                <h5 class="product-name">
                                                    <a href="#">Soap Dining Solutions</a>
                                                </h5>
                                                <div class="variations">
															<span class="attribute_color">
																<a href="#">Black</a>
															</span>
                                                    ,
                                                    <span class="attribute_size">
																<a href="#">300ml</a>
															</span>
                                                </div>
                                                <span class="product-price">
															<span class="price">
																<span>$45</span>
															</span>
														</span>
                                                <span class="product-quantity">
															(x1)
														</span>
                                                <div class="product-remove">
                                                    <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-cart mini_cart_item">
                                            <a href="#" class="product-media">
                                                <img src="frontend/images/item-minicart-3.jpg" alt="img">
                                            </a>
                                            <div class="product-details">
                                                <h5 class="product-name">
                                                    <a href="#">Dining Solutions Soap</a>
                                                </h5>
                                                <div class="variations">
															<span class="attribute_color">
																<a href="#">Black</a>
															</span>
                                                    ,
                                                    <span class="attribute_size">
																<a href="#">300ml</a>
															</span>
                                                </div>
                                                <span class="product-price">
															<span class="price">
																<span>$45</span>
															</span>
														</span>
                                                <span class="product-quantity">
															(x1)
														</span>
                                                <div class="product-remove">
                                                    <a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="subtotal">
                                        <span class="total-title">Subtotal: </span>
                                        <span class="total-price">
													<span class="Price-amount">
														$135
													</span>
												</span>
                                    </div>
                                    <div class="actions">
                                        <a class="button button-viewcart" href="shoppingcart.html">
                                            <span>View Bag</span>
                                        </a>
                                        <a href="{{url('/checkout')}}" class="button button-checkout">
                                            <span>Checkout</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-account block-header stelina-dropdown">
                            <a href="javascript:void(0);" data-stelina="stelina-dropdown">
                                <span class="flaticon-user"></span>
                            </a>
                            <div class="header-account stelina-submenu">
                                <div class="header-user-form-tabs">
                                    <ul class="tab-link">
                                        <li class="active">
                                            <a data-toggle="tab" aria-expanded="true" href= "{{url('/login')}}" >Login</a>
                                        </li>
                                        <li>
                                            <a data-toggle="tab" aria-expanded="true" href="{{url('/login')}}" >Register</a>
                                        </li>
                                    </ul>
                                    <div class="tab-container">
                                        <div id="header-tab-login" class="tab-panel active">
                                            <form method="post" class="login form-login">
                                                <p class="form-row form-row-wide">
                                                    <input type="email" placeholder="Email" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <input type="password" class="input-text" placeholder="Password">
                                                </p>
                                                <p class="form-row">
                                                    <label class="form-checkbox">
                                                        <input type="checkbox" class="input-checkbox">
                                                        <span>
																	Remember me
																</span>
                                                    </label>
                                                    <input type="submit" class="button" value="Login">
                                                </p>
                                                <p class="lost_password">
                                                    <a href="#">Lost your password?</a>
                                                </p>
                                            </form>
                                        </div>
                                        <div id="header-tab-rigister" class="tab-panel">
                                            <form method="post" class="register form-register">
                                                <p class="form-row form-row-wide">
                                                    <input type="email" placeholder="Email" class="input-text">
                                                </p>
                                                <p class="form-row form-row-wide">
                                                    <input type="password" class="input-text" placeholder="Password">
                                                </p>
                                                <p class="form-row">
                                                    <input type="submit" class="button" value="Register">
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="menu-bar mobile-navigation menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav-container rows-space-20">
        <div class="container">
            <div class="header-nav-wapper main-menu-wapper">
                <div class="vertical-wapper block-nav-categori">
                    <div class="block-title">
							<span class="icon-bar">
								<span></span>
								<span></span>
								<span></span>
							</span>
                        <span class="text">All Categories</span>
                    </div>
                    <div class="block-content verticalmenu-content">
                        <ul class="stelina-nav-vertical vertical-menu stelina-clone-mobile-menu">
                            <li class="menu-item">
                                <a href="#" class="stelina-menu-item-title" title="New Arrivals">New Arrivals</a>
                            </li>
                            <li class="menu-item">
                                <a title="Hot Sale" href="#" class="stelina-menu-item-title">Hot Sale</a>
                            </li>
                            <li class="menu-item menu-item-has-children">
                                <a title="Accessories" href="#" class="stelina-menu-item-title">Accessories</a>
                                <span class="toggle-submenu"></span>
                                <ul role="menu" class=" submenu">
                                    <li class="menu-item">
                                        <a title="Living" href="#" class="stelina-item-title">Living</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Accents" href="#" class="stelina-item-title">Accents</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="New Arrivals" href="#" class="stelina-item-title">New Arrivals</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Accessories" href="#" class="stelina-item-title">Accessories</a>
                                    </li>
                                    <li class="menu-item">
                                        <a title="Bedroom" href="#" class="stelina-item-title">Bedroom</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a title="Accents" href="#" class="stelina-menu-item-title">Accents</a>
                            </li>
                            <li class="menu-item">
                                <a title="Tables" href="#" class="stelina-menu-item-title">Tables</a>
                            </li>
                            <li class="menu-item">
                                <a title="Dining" href="#" class="stelina-menu-item-title">Dining</a>
                            </li>
                            <li class="menu-item">
                                <a title="Lighting" href="#" class="stelina-menu-item-title">Lighting</a>
                            </li>
                            <li class="menu-item">
                                <a title="Office" href="#" class="stelina-menu-item-title">Office</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-nav">
                    <div class="container-wapper">
                        <ul class="stelina-clone-mobile-menu stelina-nav main-menu " id="menu-main-menu">
                        <li class="menu-item ">
                                <a href="{{url('/')}}"  class="stelina-menu-item-title"   title="Home">Home</a>
                                <span class="toggle-submenu"></span>
                                <ul class="submenu">
                                    <li class="menu-item">
                                      
                                </ul>
                            </li>
                            <li class="menu-item ">
                                <a href="{{url('/shop')}}"  class="stelina-menu-item-title"  title="Shop">Shop</a>
                                <span class="toggle-submenu"></span>
                                <ul class="submenu">
                                <li class="menu-item">
                                    
                                </ul>
                            </li>
                          
                            <li class="menu-item ">
                                <a href="{{url('/blog')}}" class="stelina-menu-item-title"
                                   title="Blogs">Blogs</a>
                                <span class="toggle-submenu"></span>
                                <ul class="submenu">
                                    
                                       
                                    </li>
                                    
                                        <span class="toggle-submenu"></span>
                                        <ul class="submenu">
                                            
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('/about')}}" class="stelina-menu-item-title" title="About">About</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{url('/contact')}}" class="stelina-menu-item-title" title="Contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>