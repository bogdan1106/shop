@extends('admin.layout')


@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Редактировать пользователя
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">

                {{Form::open([
                'route' => ['users.update', $user->id],
                'method' => 'put',
                ])}}


                <div class="box-body">
                    <div class="col-md-6">

                        <h4>{{$user->name}}</h4>
                        <br>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" {{$user->active == 2 ? 'checked' : ''}} name="status" type="checkbox" >
                                     Забанен
                                </label>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-default">Назад</button>
                    <button class="btn btn-success pull-right">Редактировать</button>
                </div>
                {{Form::close()}}

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection