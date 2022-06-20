@extends('layouts.app')
@section('report_open','menu-open')
@section('report','active')
@section('report_product','active')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                    {{-- <img src="{{asset('uploads/location.png')}}" class="image-title-card" alt="medical-center-location"> --}}
                        تقرير عن عدد المنتجات
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table  table-striped">
                        <thead>
                            <tr>
                                <th>الاسر الصغيرة </th>
                                <th>الاسر المتوسطة </th>
                                <th>الاسر الكبيرة </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$small}}</td>
                                <td>{{$medium}}</td>
                                <td>{{$larg}}</td>
                            </tr>



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
