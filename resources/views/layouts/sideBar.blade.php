 <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">

                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">لوحة التحكم</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">

                        <img src="{{ asset('dist/img/avatar5.png') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{route('profile')}}" class="d-block">{{Auth::user()->name}}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="{{route('home')}}" class="nav-link @yield('home')">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p> الرئيسية</p>
                            </a>
                        </li>

                        {{-- الأعضاء --}}
                        <li class="nav-item has-treeview  @yield('users_open')">
                            <a href="#" class="nav-link @yield('users')">
                            <i class="nav-icon fas fa-th"></i>
                            {{-- <img src="{{asset('uploads/location_64px.png')}}" alt=""> --}}

                            <p>
                            <i class="right fas fa-angle-left"></i>
                            الأعضاء
                            </p>
                            </a>
                            <ul class="nav nav-treeview" >
                                <li class="nav-item">
                                    <a href="{{route('users.index')}}" class="nav-link @yield('users_index')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>كل الأعضاء</p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="{{route('users.create')}}" class="nav-link @yield('users_create')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>إضافة منتج جديد</p>
                                    </a>
                                </li> --}}
                            </ul>
                        </li>
                        {{-- الأعضاء --}}


                          {{-- المنتجات --}}
                        <li class="nav-item has-treeview  @yield('products_open')">
                            <a href="#" class="nav-link @yield('products')">
                            <i class="nav-icon fas fa-th"></i>
                            {{-- <img src="{{asset('uploads/location_64px.png')}}" alt=""> --}}

                            <p>
                            <i class="right fas fa-angle-left"></i>
                            المنتجات
                            </p>
                            </a>
                            <ul class="nav nav-treeview" >
                                <li class="nav-item">
                                    <a href="{{route('products.index')}}" class="nav-link @yield('products_index')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>كل المنتجات</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('products.create')}}" class="nav-link @yield('products_create')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>إضافة منتج جديد</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- المنتجات --}}

                        {{-- العروض --}}
                        <li class="nav-item has-treeview  @yield('offers_open')">
                            <a href="#" class="nav-link @yield('offers')">
                            <i class="nav-icon fas fa-th"></i>
                            {{-- <img src="{{asset('uploads/location_64px.png')}}" alt=""> --}}

                            <p>
                            <i class="right fas fa-angle-left"></i>
                            العروض
                            </p>
                            </a>
                            <ul class="nav nav-treeview" >
                                <li class="nav-item">
                                    <a href="{{route('offers.index')}}" class="nav-link @yield('offers_index')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>كل العروض</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('offers.create')}}" class="nav-link @yield('offers_create')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>إضافة عرض جديد</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- العروض --}}


                         {{-- الطلبات  --}}
                        <li class="nav-item has-treeview  @yield('orders_open')">
                            <a href="#" class="nav-link @yield('orders')">
                            <i class="nav-icon fas fa-th"></i>
                            {{-- <img src="{{asset('uploads/location_64px.png')}}" alt=""> --}}

                            <p>
                            <i class="right fas fa-angle-left"></i>
                            الطلبات
                            </p>
                            </a>
                            <ul class="nav nav-treeview" >
                                <li class="nav-item">
                                    <a href="{{route('orders.index')}}" class="nav-link @yield('orders_index')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>كل الطلبات </p>
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a href="{{route('orders.create')}}" class="nav-link @yield('orders_create')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>إضافة منتج جديد</p>
                                    </a>
                                </li> --}}
                            </ul>
                        </li>
                        {{-- الطلبات  --}}

                        {{-- التقارير --}}
                        <li class="nav-item has-treeview  @yield('report_open')">
                            <a href="#" class="nav-link @yield('report')">
                            <i class="nav-icon fas fa-th"></i>
                            {{-- <img src="{{asset('uploads/location_64px.png')}}" alt=""> --}}

                            <p>
                            <i class="right fas fa-angle-left"></i>
                            التقارير
                            </p>
                            </a>
                            <ul class="nav nav-treeview" >
                                <li class="nav-item">
                                    <a href="{{route('report.product')}}" class="nav-link @yield('report_product')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>تقرير عدد الطلبيات</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('report.index')}}" class="nav-link @yield('report_index')">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>تقرير عن المنتجات</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- التقارير --}}

                        {{-- <li class="nav-item">
                            <a href="{{route('setting')}}" class="nav-link @yield('setting')">
                            <i class="nav-icon far fa-calendar-alt"></i>
                            <p>
                                الاعدادات العامة
                            </p>
                            </a>
                        </li> --}}

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
