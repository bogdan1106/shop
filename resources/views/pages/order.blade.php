
@extends('pages.layout')
@section('title', 'Categories')


@section('content')
    <!--start-breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Categories</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->


    <!--account-starts-->
    <div class="account">
        <div class="container">
            <div class="account-top heading">
                <h2 class="">Оформить заказ</h2>
            </div>
            <div class="account-main">
                <div class="col-md-8 col-sm-12 account-left">
                    <form action="{{route('basket-confirm')}}" method="post" class="account-bottom">
                      @csrf
                        <input  placeholder="Ваш город" name="city" type="text" tabindex="3" required>
                        <input placeholder="Ваше имя" name="name" type="text" tabindex="4" required>
                        <input placeholder="Телефон" name="phone" type="text" tabindex="5" required>
                        <div class="address">
                            <h3> Price ${{$price}}</h3>
                            <input type="submit" value="Заказать">
                        </div>
                    </form>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--account-end-->






@endsection