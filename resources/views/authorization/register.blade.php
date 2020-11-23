

@extends('pages.layout')
@section('title', 'Main page')


@section('content')


    <!--bottom-header-->

    <br><br>

    <!--bottom-header-->
    <!--start-breadcrumbs-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-main">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Register</li>
                </ol>
            </div>
        </div>
    </div>
    <!--end-breadcrumbs-->
    <!--register-starts-->
    <div class="register">
        <div class="container">
            <div class="register-top heading">
                <h2>REGISTER</h2>
            </div>
            <div class="register-main ">
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="col-md-8 col-sm-12  col-md-offset-2 account-left">
                        <input placeholder="Name" name="name" type="text" tabindex="1" >
                        <input placeholder="Email address" name="email" value="{{old('email')}}" type="text" tabindex="3" >
                        <input placeholder="Password" name="password" type="password" tabindex="4" >
                        <div class="address justify-content-center submit ">
                            <input type="submit" class="address submit "  value="Submit">
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>
    <!--register-end-->



@endsection