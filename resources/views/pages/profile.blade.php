
@extends('pages.layout')
@section('title', 'Single')
@section('content')

    <div class="container">
        <div id="main">
            <div class="row" id="real-estates-detail">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <header class="panel-title">
                                <div class="text-center">
                                    <strong>Пользователь сайта</strong>
                                </div>
                            </header>
                        </div>
                        <div class="panel-body">
                            <div class="text-center" id="author">
                                <img id="avatar" src="{{$user->image ? $user->getImgPath(): '/images/users/no-img.png'}}" width="200" height="200">
                                <h3>{{$user->name}}</h3>
                                <a href="#" class="add-cart item_add" 
                                   onclick="document.getElementById('form_id').submit();">Обновить фото</a>
                                <br>
                                <br>



                                <input id="sortpicture" type="file" name="sortpic" />
                                <button id="upload">Upload</button>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="panel">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <div class="panel-body">
                            <div id="myTabContent" class="tab-content">
                                <h4>Профиль</h4>
                                <hr>
                                <div class="tab-pane fade active in" id="detail">

                                    <table class="table table-th-block">
                                        <tbody>
                                        <tr><td class="active">Имя:</td><td>{{$user->name}}</td></tr>
                                        <tr><td class="active">email:</td><td>{{$user->email}}</td></tr>
                                        <tr><td class="active">Зарегистрирован:</td><td id="change-info">{{$user->getDateRegistration()}}</td></tr>
                                        <tr><td class="active">Город:</td><td>{{$user->city ? $user->city : '-'}}</td></tr>
                                        <tr><td class="active">Улица:</td><td>{{$user->address ? $user->address : '-'}}</td></tr>
                                        <tr><td class="active">Отделение почты:</td><td>{{$user->post_office_number ? $user->post_office_number : '-'}}</td></tr>
                                        <tr><td class="active">Телефон:</td><td>{{$user->phone_number ? '0'.$user->phone_number : '-'}}</td></tr>

                                        </tbody>
                                    </table>
                                </div>
                                <button id="edit-button" class="btn btn-primary">Редактировать</button>
                                <div class="tab-pane fade" id="contact">
                                    <p></p>
                                </div>
                            </div>
                        </div>

                    </div>




                    <div class="panel" id="form-panel">
                        <div class="panel-body">
                            <div  class="tab-content">
                                <h4>Редактировать</h4>
                                <hr>
                                <div class="tab-pane fade active in" >
                                    <form action="{{route('users-update')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Имя:</label>
                                            <input type="text" class="form-control" name="name"  value="{{$user->name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" name="email"  value="{{$user->email}}">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="city">Город:</label>
                                            <input type="text" class="form-control" name="city"  value="{{$user->city}}">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="address">Адресс:</label>
                                            <input type="text" class="form-control" name="address"  value="{{$user->address}}">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="post_office_number">Отделение:</label>
                                            <input type="text" class="form-control" name="post_office_number"  value="{{$user->post_office_number}}">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone_number">Телефон:</label>
                                            <input type="text" class="form-control" name="phone_number"  value="{{$user->phone_number ? '0'.$user->phone_number : ""}}">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>

    </div><!-- /.main -->
    </div><!-- /.container -->

  @endsection
