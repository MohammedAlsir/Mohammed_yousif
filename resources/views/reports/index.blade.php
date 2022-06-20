@extends('layouts.app')
@section('report_open','menu-open')
@section('report','active')
@section('report_index','active')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                    {{-- <img src="{{asset('uploads/location.png')}}" class="image-title-card" alt="medical-center-location"> --}}
                       تقرير عن المنتجات
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->amount}}</td>
                                <td>{{$item->type}}</td>
                                <td>
                                    @if($item->family_type == 1)
                                    اسرة صغيرة
                                    @elseif($item->family_type == 2)
                                    اسرة متوسطة
                                    @else
                                    اسرة كبيرة
                                    @endif
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
