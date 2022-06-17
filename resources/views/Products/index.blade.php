@extends('layouts.app')
@section('products_open','menu-open')
@section('products','active')
@section('products_index','active')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                    {{-- <img src="{{asset('uploads/location.png')}}" class="image-title-card" alt="medical-center-location"> --}}
                        كل  المنتجات
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table  table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم المنتج</th>
                                <th>الكمية</th>
                                <th>نوع الكمية</th>
                                <th>يمتمي للاسرة </th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->type}}</td>
                                <td>{{$item->family_type}}</td>

                                <td>
                                    <div>
                                        <form action="{{route('products.destroy',$item->id)}}" method="POST">
                                            {{ csrf_field()}}
                                            {{ method_field('delete') }}
                                            <a href="{{route('products.edit',$item->id)}}" class="btn btn-primary">
                                                <span>تعديل</span>
                                                <i class="fa fa-refresh"></i>
                                            </a>
                                            <button type="submit" class="btn btn-danger"></i>&nbsp;
                                                <span>حذف</span>
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach



                        </tbody>

                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
@endsection
