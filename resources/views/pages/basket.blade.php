
@extends('pages.layout')
@section('title', 'Main page')

@section('content')

    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Checkout</li>
            </ol>
        </div>
    </div>
    </div>
    <!--end-breadcrumbs-->
    <!--start-ckeckout-->
    <div class="ckeckout">
        <div class="container">

            @if ($order == 'empty'|| $order->products->count() <1  )
                <div class="ckeck-top heading">
                    <h2> Basket is empty</h2>
                </div>
            @else
            <div class="ckeck-top heading">
                <h2>CHECKOUT</h2>
            </div>
            <div class="ckeckout-top">
                <div class="cart-items">
                    <h3>My Shopping Bag ({{$order->products()->count()}})</h3>





                        @if($order)
                        @foreach ($order->products as $product)
                        <ul class="cart-header">
                            <div class="close1"> </div>
                            <li class="ring-in"><a href="single.html" ><img src="images/c-1.jpg" class="img-responsive" alt=""></a>
                            </li>
                            <li><span class="name">{{$product->name}}</span></li>
                            <li><span class="cost">$ {{$product->price}}</span></li>
                            <li>
                                <h3>{{$product->pivot->count}}</h3>
                                <form action="{{route('basket-add', $product->id)}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-info"><i class="fa fa-plus" aria-hidden="true"></i></button>
                                </form> <p></p>
                                <form action="{{route('basket-remove', $product->id)}}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-info"><i class="fa fa-minus" aria-hidden="true"></i></button>
                                </form>
                            </li>
                            <li><span class="cost">$ {{$product->getCountPrice($product->pivot->count)}}</span></li>
                            <div class="clearfix"> </div>

                        </ul>
                            @endforeach
                            <p class="text-right"> total = {{$order->getTotalPrice()}}</p>
                            <a href="{{route('order')}}" class=" pull-right add-cart item_add">Продолжить</a>
                            @endif
                    @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end-ckeckout-->
    <!--information-starts-->
    <div class="information">
        <div class="container">
            <div class="infor-top">
                <div class="col-md-3 infor-left">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#"><span class="fb"></span><h6>Facebook</h6></a></li>
                        <li><a href="#"><span class="twit"></span><h6>Twitter</h6></a></li>
                        <li><a href="#"><span class="google"></span><h6>Google+</h6></a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>Information</h3>
                    <ul>
                        <li><a href="#"><p>Specials</p></a></li>
                        <li><a href="#"><p>New Products</p></a></li>
                        <li><a href="#"><p>Our Stores</p></a></li>
                        <li><a href="contact.html"><p>Contact Us</p></a></li>
                        <li><a href="#"><p>Top Sellers</p></a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>My Account</h3>
                    <ul>
                        <li><a href="account.html"><p>My Account</p></a></li>
                        <li><a href="#"><p>My Credit slips</p></a></li>
                        <li><a href="#"><p>My Merchandise returns</p></a></li>
                        <li><a href="#"><p>My Personal info</p></a></li>
                        <li><a href="#"><p>My Addresses</p></a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>Store Information</h3>
                    <h4>The company name,
                        <span>Lorem ipsum dolor,</span>
                        Glasglow Dr 40 Fe 72.</h4>
                    <h5>+955 123 4567</h5>
                    <p><a href="mailto:example@email.com">contact@example.com</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--information-end-->


@endsection