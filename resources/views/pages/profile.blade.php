
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
                                <img src="{{$user->image ? $user->getImgPath(): '/images/users/no-img.png'}}" width="200" height="200">
                                <h3>{{$user->name}}</h3>
                                <a href="#" class="add-cart item_add" onclick="document.getElementById('form_id').submit();">Обновить фото</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div id="myTabContent" class="tab-content">
                                <hr>
                                <div class="tab-pane fade active in" id="detail">
                                    <h4>История профиля</h4>
                                    <table class="table table-th-block">
                                        <tbody>
                                        <tr><td class="active">Зарегистрирован:</td><td>12-06-2016</td></tr>
                                        <tr><td class="active">Последняя активность:</td><td>12-06-2016 / 09:11</td></tr>
                                        <tr><td class="active">Страна:</td><td>Россия</td></tr>
                                        <tr><td class="active">Город:</td><td>Волгоград</td></tr>
                                        <tr><td class="active">Пол:</td><td>Мужской</td></tr>
                                        <tr><td class="active">Полных лет:</td><td>43</td></tr>
                                        <tr><td class="active">Семейное положение:</td><td>Женат</td></tr>
                                        <tr><td class="active">Рейтинг пользователя:</td><td><i class="fa fa-star" style="color:red"></i> <i class="fa fa-star" style="color:red"></i> <i class="fa fa-star" style="color:red"></i> <i class="fa fa-star" style="color:red"></i> 4/5</td></tr>
                                        <tr><td class="active">Плагин рейтинга:</td><td><a href="https://bootstraptema.ru/stuff/plugins_bootstrap/improvement/bootstrap_star_rating/12-1-0-73" target="_blank">http://goo.gl/bGGXuw</a></td></tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="col-md-12" id="">
                                    <h4>Восстановление пароля</h4>
                                    <p>Забыли пароль?
                                    </p> <form action="{{route('forgot-password')}}" method="post">
                                        @csrf
                                        <label for="email" >Ваш Email:</label>
                                        <input type="text" size="3" name="email" class="form-control">
                                    </form>
                                </div>


                                <div class="tab-pane fade" id="contact">
                                    <p></p>
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
