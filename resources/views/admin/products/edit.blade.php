@extends('admin.layout')


@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Редактировать товар
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">

                {{Form::open([
                'route' => ['products.update', $product->id],
                'method' => 'put',
                'files' => true,
                ])}}


                <div class="box-body">
                    <div class="col-md-6">
                        <div class="form-group">
                            @include('admin.errors')
                            <label for="exampleInputEmail1">Название</label>
                            <input type="text" name="name" value="{{$product->name}}" class="form-control" id="exampleInputEmail1" placeholder="">
                        </div>

                        <div class="form-group">
                            <img src="{{$product->getImgPath()}}" alt="" class="img-responsive" width="200">
                            <label for="exampleInputFile">Лицевая картинка</label>
                            <input type="file" name="image" id="exampleInputFile">

                            <p class="help-block">Какое-нибудь уведомление о форматах..</p>
                        </div>
                        <div class="form-group">
                            <label>Категория</label>
                            {{
                                Form::select('category_id',
                                 $categories,
                                  $product->category_id,
                                 ['class' => 'form-control select2'])
                             }}
                        </div>

                        <!-- Price -->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Цена</label>
                            <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="{{$product->price}}">
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
                            <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$product->description}}</textarea>
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