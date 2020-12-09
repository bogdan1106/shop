
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
    <script src="/js/update.js"></script>
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

<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-phone"></i> +955 123 4567</a></li>
                        <li><a href="#myModal" class="trigger-btn" data-toggle="modal"><i class="fa fa-envelope"></i> contact@example.com</a></li>
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
                            @else
                            <li><a href="{{route('register')}}"><i class="fa fa-user"></i> register</a></li>
                            <li><a href="{{route('login')}}"><i class="fa fa-user"></i> login</a></li>
                            @endif
                            <li><a href="cart.html"><i class="fa fa-cart-arrow-down"></i> My Cart</a></li>
                                <li><a id="wishlist-header-link" href="{{route('wishlist')}}"><i class="fa fa-heart"></i>
                                        Wishlist {{$countUserLikes ? '(' . $countUserLikes. ')' : ''}}</a></li>

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
    <a href="{{route('index')}}"><h1>Original Watches</h1></a>
</div>
<!--start-logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
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