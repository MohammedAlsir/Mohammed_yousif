@extends('layouts.app')
@section('offers_open','menu-open')
@section('offers','active')
{{-- @section('medical_center_create','active') --}}
@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <!-- left column -->
            <div class="col-md-11">
                <!-- Horizontal Form -->
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">
                        {{-- <img src="{{asset('uploads/location.png')}}" class="image-title-card" alt="medical-center-location"> --}}
                            تعديل بيانات العرض
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('offers.update',$item->id)}}" class="form-horizontal">
                        @csrf
                        @method('put')
                        <div class="card-body custom-design">

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">اسم العرض </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required value="{{$item->name}}" type="text"  class="form-control" name="name" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">تفاصيل العرض</label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <textarea required name="details" id="" class="form-control" cols="30" rows="10">{{$item->details}}</textarea>
                                </div>
                            </div>

                            <!-- /.card-body -->
                            {{-- <div class="card-footer"> --}}
                            <div class="form-group row">
                                <div class="col-md-3 col-sm-3 col-xs-4"></div>
                                <button type="submit" class="btn btn-block btn-info col-md-6 col-sm-9 col-xs-8">
                                    <span>تعديل</span>
                                    <i class="fa fa-send"></i>
                                </button>
                        </div>
                            <!-- /.card-footer -->
                    </form>
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (left) -->

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

@endsection


