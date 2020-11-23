

@extends('pages.layout')
@section('title', 'Main page')


@section('content')


<!--bottom-header-->

<br><br>


<div class="container">

    <div class="col-md-12">
        <div class="text-content">

            <p>В наши дни наручные часы рассматриваются больше как символ статуса, нежели устройство для определения времени. Сейчас практически любые электронные устройства имеют на дисплее отображение времени. Механические наручные часы в цифровую эпоху постепенно превращаются из функционального предмета в объект современной культуры.

                Если зайти в зал заседаний совета директоров любой из компаний, входящей в глобальный топ-100 Forbes или Fortune, то вы наверняка увидите у каждого присутствующего наручные часы. Среди них обязательно будут такие известные марки как Rolex, Vacheron Constantin, Frank Müller, Jaeger-LeCoultre и Patek Phillipe. Однако, так было отнюдь не всегда. Ровно сто лет назад ни один уважающий себя джентльмен ни за что не стал бы надевать часы на руку. В те времена настоящий мужчина носил исключительно карманные часы. Предпочтительным символом статуса был золотой «полухантер» на золотой цепочке.
            </p>
            <h3>Первые мужские наручные часы</h3>
            <p>
                Все начало меняться в конце девятнадцатого века, когда военные обнаружили, что в бою носить часы на руке гораздо удобнее. Карманные часы были громоздкими и ими было труднее пользоваться во время сражения. Именно военные придумали примитивные кожаные ремни или футляры на руку, куда вставляли карманные часы, тем самым освобождая руки для ведения боя.
                Сейчас трудно сказать, военные какой из стран первыми стали использовать наручные часы. Вероятнее всего, это были англичане. В 19 веке Англия вела постоянные боевые действия в своих многочисленных колониях в Азии и Африке. Англичане обладали самым современным вооружением и использовали передовую тактику ведения боя.
            </p>

        </div>
    </div>
</div>
<!--product-starts-->
<div class="product">
    <div class="container">
        <div class="product-top">
                <div class="product-one">
                    @foreach($products as $product)
                    <div class="col-md-3 product-left">
                        <div class="product-main simpleCart_shelfItem">
                            <a href="{{route('product', $product->id)}}" class="mask"><img class="img-responsive zoom-img" src="{{$product->getImgPath()}}" alt="" /></a>
                            <div class="product-bottom">
                                <a href="{{route('product', $product->id)}}" class="product-link">{{$product->name}}</a>
                                <h4>{{$product->getCategory()->title}}</h4>
                                <h4><a class="item_add" href="{{route('product', $product->id)}}"><i></i></a> <span class=" item_price">${{$product->price}}</span></h4>
                            </div>
                            <div class="srch">
                                <span>-50%</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
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