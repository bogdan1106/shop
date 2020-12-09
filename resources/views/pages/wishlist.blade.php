

@extends('pages.layout')
@section('title', 'Main page')


@section('content')

      <div class="container">

        <div class="col-md-12">
            <h2> {{$products->count() == 0 ? 'Список желаний пуст': 'Список желаний' }}</h2>
        </div>
    </div>



    <!--product-starts-->
    <div class="product">
        <div class="container">
            <div class="product-top">
                <div class="product-one">
                    @if($products->count() > 0)
                    @foreach($products as $product)
                        <div class="col-md-3 product-left" id="product-{{$product->id}}">

                            <div class="product-main simpleCart_shelfItem">
                                <a href="{{route('product', $product->id)}}" class="mask"><img class="img-responsive zoom-img" src="{{$product->getImgPath()}}" alt="" width="300px" /></a>
                                <div class="product-bottom">
                                    <a href="{{route('product', $product->id)}}" class="product-link">{{$product->name}}</a>
                                    <h4>{{$product->getCategory()->title}}</h4>
                                    <h4><a class="item_add" href="{{route('product', $product->id)}}"><i></i></a> <span class=" item_price">${{$product->price}}</span></h4>
                                    <button class="btn btn-primary" data-id="{{$product->id}}">В корзину</button>
                                    <button class="btn btn-danger delete-button"   data-id="{{$product->id}}">Удалить</button>
                                </div>
                                <div class="srch">
                                    <span>-50%</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @endif
                    <div class="clearfix"></div>
                </div>


            </div>
        </div>
    </div>
    <!--product-end-->
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