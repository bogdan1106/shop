@extends('admin.layout')


@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Продукты - главная
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Листинг сущности</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{route('products.create')}}" class="btn btn-success">Добавить</a>
                    </div>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th>Категория</th>
                            <th>Картинка</th>
                            <th>Цена</th>
                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}
                                </td>
                                <td>{{$product->category ? $product->category->title : 'no'}}</td>
                                <td>
                                    <img src="{{$product->getImgPath()}}" alt="" width="100">
                                </td>
                                <td>{{$product->price ? $product->price : 'no price'}}</td>
                                <td><a href="{{route('products.edit', $product->id)}}" class="fa fa-pencil"></a>
                                    {{Form::open([
                                    'route' => ['products.destroy', $product->id],
                                    'method' => 'delete'
                                    ])}}

                                    <button type="submit" class="delete">
                                        <i href="#" class="fa fa-remove"></i>
                                    </button>

                                    {{Form::close()}}
                                </td>
                            </tr>
                        @endforeach

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



@endsection
