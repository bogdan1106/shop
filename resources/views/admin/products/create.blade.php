@extends('admin.layout')


@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Добавить товар
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">

                {{Form::open([
                'route' => 'products.store',
                'files' => true,
                ])}}

                <div class="box-header with-border">
                    <h3 class="box-title">Добавляем товар</h3>
                </div>
                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            @include('admin.errors')
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>



                        <div class="form-group">
                            <label for="exampleInputFile">Лицевая картинка</label>
                            <input type="file" name="image" id="exampleInputFile">

                            <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            {{
                                Form::select('category_id',
                                 $categories,
                                  null,
                                 ['class' => 'form-control select2'])
                             }}
                        </div>

                        <!-- Price -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Цена</label>
                            <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>

                        <!-- checkbox -->
                        {{--<div class="form-group">--}}
                        {{--<label>--}}
                        {{--<input name="" type="checkbox" class="minimal">--}}
                        {{--</label>--}}
                        {{--<label>--}}
                        {{--В наличии--}}
                        {{--</label>--}}
                        {{--</div>--}}

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Описание</label>
                            <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button class="btn btn-default">Назад</button>
                    <button class="btn btn-success pull-right">Добавить</button>
                </div>
                {{Form::close()}}

            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection


