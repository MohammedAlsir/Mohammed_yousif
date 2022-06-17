@extends('layouts.app')
@section('products_open','menu-open')
@section('products','active')
@section('products_create','active')
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
                        {{-- <img src="{{asset('uploads/add_list_64px.png')}}" class="image-title-card" alt="medical-center-add"> --}}
                            إضافة منتج جديد
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('products.store')}}" class="form-horizontal">
                        @csrf
                        <div class="card-body custom-design">

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">اسم المنتج </label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="text"  class="form-control" name="name" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">الكمية</label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="number"  class="form-control" name="amount" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">نوع الكمية</label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="text"  class="form-control" name="type" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">الاسرة</label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <select required class="form-control" name="family_type" id="">
                                        <option value="">اختر الاسرة</option>
                                        <option value="اسرة صغيرة">اسرة صغيرة</option>
                                        <option value="اسرة متوسطة">اسرة متوسطة</option>
                                        <option value="اسرة كبيرة">اسرة كبيرة</option>
                                    </select>
                                </div>
                            </div>

                            <!-- /.card-body -->
                            {{-- <div class="card-footer"> --}}
                            <div class="form-group row">
                                 <div class="col-md-3 col-sm-3 col-xs-4"></div>
                                <button type="submit" class="btn btn-block btn-info col-md-6 col-sm-9 col-xs-8">
                                    <span>إضـــافة</span>
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


