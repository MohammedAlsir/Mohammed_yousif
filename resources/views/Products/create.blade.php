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
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">الاسرة</label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <select required class="form-control" name="family_type" id="">
                                        <option value="">اختر الاسرة</option>
                                        <option value="1">اسرة صغيرة</option>
                                        <option value="2">اسرة متوسطة</option>
                                        <option value="3">اسرة كبيرة</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row" >
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">الكمية</label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <select class="form-control" required name="amount1" id="">
                                        {{-- <option value=""></option> --}}

                                        <option  value="">اختر الكمية</option>
                                        <option  class="one" value="1">1</option>
                                        <option  class="one" value="2">2</option>
                                        <option  class="one" value="3">3</option>
                                        <option  class="one" value="4">4</option>
                                        <option  class="one" value="5">5</option>
                                        <option  class="one" value="6">6</option>
                                        <option  class="one" value="7">7</option>
                                        <option  class="one" value="8">8</option>
                                        <option  class="one" value="9">9</option>
                                        <option  class="one" value="10">10</option>

                                        <option class="two" value="11">11</option>
                                        <option class="two" value="12">12</option>
                                        <option class="two" value="13">13</option>
                                        <option class="two" value="14">14</option>
                                        <option class="two" value="15">15</option>
                                        <option class="two" value="16">16</option>
                                        <option class="two" value="17">17</option>
                                        <option class="two" value="18">18</option>
                                        <option class="two" value="19">19</option>
                                        <option class="two" value="20">20</option>

                                        <option  class="three" value="21">21</option>
                                        <option  class="three" value="22">22</option>
                                        <option  class="three" value="23">23</option>
                                        <option  class="three" value="24">24</option>
                                        <option  class="three" value="25">25</option>
                                        <option  class="three" value="26">26</option>
                                        <option  class="three" value="27">27</option>
                                        <option  class="three" value="28">28</option>
                                        <option  class="three" value="29">29</option>
                                        <option  class="three" value="30">30</option>
                                    </select>
                                </div>
                            </div>

                             {{-- <div class="form-group row" id="two">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">الكمية</label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <select class="form-control" required name="amount2" id="">
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row" id="three">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">الكمية</label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <select class="form-control" required name="amount3" id="">

                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                            </div> --}}

                            <div class="form-group row">
                                <label class="col-md-3 col-sm-3 col-xs-4 control-label">نوع الكمية</label>
                                <div class="col-md-6 col-sm-9 col-xs-8">
                                    <input required type="text"  class="form-control" name="type" >
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


