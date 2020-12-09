@extends('admin.layout')


@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Пользователи - главная
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

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Имя</th>
                            <th>Почта</th>
                            <th>Статус</th>
                            <th>Картинка</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users  as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}
                                </td>
                                <td>{{$user->email}} </td>
                                <td>{{$user->status()}} </td>
                                <td>
                                    <img src="{{$user->getImgPath()}}" alt="" width="100">
                                </td>
                                <td><a href="{{route('users.edit', $user->id)}}" class="fa fa-pencil"></a>
                                    {{Form::open([
                                    'route' => ['users.destroy', $user->id],
                                    'method' => 'delete'
                                    ])}}

                                   

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
