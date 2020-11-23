
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    {{--<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />--}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link href="/fonts/fontawesome-free-5.14.0-web/css/all.css" rel="stylesheet"> <!--load all styles -->
    <!--jQuery(necessary for Bootstrap's JavaScript plugins)-->
    {{--<script src="/js/jquery-1.11.0.min.js"></script>--}}
    {{--<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>--}}
    <script src="/js/like.js"></script>
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/css/header.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--start-menu-->
    <script src="/js/simpleCart.min.js"> </script>

    <link href="/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="/js/memenu.js"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <!--dropdown-->

</head>
<body>


{{--<!--top-header-->--}}
{{--<div class="top-header">--}}
    {{--<div class="container">--}}
        {{--<div class="top-header-main">--}}
            {{--<div class="col-md-6 top-header-left">--}}
                {{--@if (session()->has('success'))--}}
                    {{--<p class="alert-danger">{{session()->get('success')}}</p>--}}
                {{--@endif--}}

            {{--</div>--}}
            {{--<div class="col-md-6 top-header-left">--}}
                {{--<div class="cart box_1">--}}
                    {{--<a href="checkout.html">--}}
                        {{--<div class="total">--}}
                            {{--<span class="simpleCart_total"></span></div>--}}
                        {{--<img src="images/cart-1.png" alt="" />--}}
                    {{--</a>--}}
                    {{--<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>--}}
                    {{--<div class="clearfix"> </div>--}}
                {{--</div>--}}
                {{--<div class="user_in_header col-sm-5">--}}

                    {{--@if (auth()->user())--}}
                        {{--<h3> Hello {{auth()->user()->name}}--}}
                            {{--<a href="{{route('logout')}}">Log out</a>--}}
                        {{--</h3>--}}
                    {{--@else <h3><a href="{{route('login')}}">Login</a> <a href="{{route('register')}}">Register</a></h3>--}}
                    {{--@endif--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}




<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-phone"></i> +955 123 4567</a></li>
                        <li><a href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-envelope"></i> contact@example.com</a></li>
                        <a href="#" >Click to Open Login Modal</a>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="header-area">
                    <div class="user-menu">
                        <ul>
                            @if (auth()->user())

                                <li><a href="{{route('profile')}}"><i class="fa fa-user"></i> My Account</a></li>
                                <li><a href="{{route('logout')}}"><i class="fa fa-user"></i> logout</a></li>
                                <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            @else
                            <li><a href="{{route('register')}}"><i class="fa fa-user"></i> register</a></li>
                            <li><a href="{{route('login')}}"><i class="fa fa-user"></i> login</a></li>
                            @endif
                            <li><a href="cart.html"><i class="fa fa-cart-arrow-down"></i> My Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->





<!--top-header-->
<!--start-logo-->
<div class="logo">
    <a href="index.html"><h1>Luxury Watches</h1></a>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="top-nav">
                    <ul class="memenu skyblue"><li class=""><a href="{{route('index')}}">Home</a></li>
                        <li class="grid"><a href="#">Men</a>
                            <div class="mepanel">
                                <div class="row">
                                    <div class="col1 me-one">
                                        <h4>Shop</h4>
                                        <ul>
                                            <li><a href="products.html">New Arrivals</a></li>
                                            <li><a href="products.html">Blazers</a></li>
                                            <li><a href="products.html">Swem Wear</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Handbags</a></li>
                                            <li><a href="products.html">T-Shirts</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">My Shopping Bag</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Style Zone</h4>
                                        <ul>
                                            <li><a href="products.html">Shoes</a></li>
                                            <li><a href="products.html">Watches</a></li>
                                            <li><a href="products.html">Brands</a></li>
                                            <li><a href="products.html">Coats</a></li>
                                            <li><a href="products.html">Accessories</a></li>
                                            <li><a href="products.html">Trousers</a></li>
                                        </ul>
                                    </div>
                                    <div class="col1 me-one">
                                        <h4>Popular Brands</h4>
                                        <ul>
                                            <li><a href="products.html">499 Store</a></li>
                                            <li><a href="products.html">Fastrack</a></li>
                                            <li><a href="products.html">Casio</a></li>
                                            <li><a href="products.html">Fossil</a></li>
                                            <li><a href="products.html">Maxima</a></li>
                                            <li><a href="products.html">Timex</a></li>
                                            <li><a href="products.html">TomTom</a></li>
                                            <li><a href="products.html">Titan</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="grid"><a href="typo.html">Blog</a>
                        </li>



                        <li class="grid"><a href="{{route('categories')}}">Categories</a></li>
                        <li class="grid"><a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 header-right">
                <div class="search-bar">
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>


@yield('content');

<div id="myModal" class="modal fade">

    <a href="#">yo</a>
</div>

<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 footer-left">
                <form>
                    <input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
            <div class="col-md-6 footer-right">
                <p>© 2020 Luxury Watches.
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-end-->




</body>
</html>