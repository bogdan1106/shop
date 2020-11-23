

@extends('pages.layout')
@section('title', 'Main page')


@section('content')


    <!--bottom-header-->



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
            @if (session()->has('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ session()->get('success') }}</strong>
                </div>
            @elseif(session()->has('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ session()->get('error') }}</strong>
                </div>
            @endif
            <div class="register-top heading">
                <h2>Log In</h2>
            </div>
            <div class="register-main ">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="col-md-8 col-sm-12  col-md-offset-2 account-left">
                        <input placeholder="Email address" name="email" value="{{old('email')}}" type="text" tabindex="3" required >
                        <input placeholder="Password" name="password" type="password" tabindex="4" required >

                        <div class="address justify-content-center submit ">
                            <a class="forgot" data-toggle="modal" data-target="#myModal" href="#">forgot password?</a>
                            <input type="submit" class="address submit"  value="Войти">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--register-end-->




        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">Для восстановления пароля введите ваш имейл</h6>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form id="myForm" action="{{route('forgot-password')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email" required="required">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Отправить</button>
                            </div>
                        </form>
                    </div>
                </div>
        </div>

    </div>



@endsection