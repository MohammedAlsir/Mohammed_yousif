@extends('layouts.app')
@section('offers_open','menu-open')
@section('offers','active')
@section('offers_index','active')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                    {{-- <img src="{{asset('uploads/location.png')}}" class="image-title-card" alt="medical-center-location"> --}}
                        كل  العروض
                    </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table  table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>عنوان العرض</th>
                                <th>تفاصيل العرض</th>
                                <th>العمليات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($collection as $item)
                            <tr>
                                <td>{{$index++}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->details}}</td>

                                <td>
                                    <div>
                                        <form action="{{route('offers.destroy',$item->id)}}" method="POST">
                                            {{ csrf_field()}}
                                            {{ method_field('delete') }}
                                            <a href="{{route('offers.edit',$item->id)}}" class="btn btn-primary">
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
