<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('/AdminFolder/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">پنل مدیریت پونیشا</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" style="direction: ltr">
        <div style="direction: rtl">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img
                        src="{{asset('/AdminFolder/dist/img/avatar/avatar.jpg')}}"
                        class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">محمد شیخی</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                داشبورد
                                <span class="right badge badge-success">مدیریت</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fa fa-user"></i>
                            <p>
                                کاربران
                                <span class="right badge badge-danger">{{ \App\Models\User::count()}}</span>
                            </p>
                        </a>
                    </li>
                    {{--                    <li class="nav-item has-treeview">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-pie-chart"></i>--}}
                    {{--                            <p>--}}
                    {{--                                چارت‌ها--}}
                    {{--                                <i class="right fa fa-angle-left"></i>--}}
                    {{--                            </p>--}}
                    {{--                        </a>--}}
                    {{--                        <ul class="nav nav-treeview">--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>نمودار ChartJS</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>نمودار Flot</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>نمودار Inline</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item has-treeview">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-tree"></i>--}}
                    {{--                            <p>--}}
                    {{--                                اشیای گرافیکی--}}
                    {{--                                <i class="fa fa-angle-left right"></i>--}}
                    {{--                            </p>--}}
                    {{--                        </a>--}}
                    {{--                        <ul class="nav nav-treeview">--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>عمومی</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>آیکون‌ها</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>دکمه‌ها</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>اسلایدر‌ها</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item has-treeview">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-edit"></i>--}}
                    {{--                            <p>--}}
                    {{--                                فرم‌ها--}}
                    {{--                                <i class="fa fa-angle-left right"></i>--}}
                    {{--                            </p>--}}
                    {{--                        </a>--}}
                    {{--                        <ul class="nav nav-treeview">--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>اجزا عمومی</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>پیشرفته</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>ویشرایشگر</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item has-treeview">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-table"></i>--}}
                    {{--                            <p>--}}
                    {{--                                جداول--}}
                    {{--                                <i class="fa fa-angle-left right"></i>--}}
                    {{--                            </p>--}}
                    {{--                        </a>--}}
                    {{--                        <ul class="nav nav-treeview">--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>جداول ساده</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>جداول داده</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-header">مثال‌ها</li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-calendar"></i>--}}
                    {{--                            <p>--}}
                    {{--                                تقویم--}}
                    {{--                                <span class="badge badge-info right">2</span>--}}
                    {{--                            </p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item has-treeview">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-envelope-o"></i>--}}
                    {{--                            <p>--}}
                    {{--                                ایمیل‌ باکس--}}
                    {{--                                <i class="fa fa-angle-left right"></i>--}}
                    {{--                            </p>--}}
                    {{--                        </a>--}}
                    {{--                        <ul class="nav nav-treeview">--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>اینباکس</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>ایجاد</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>خواندن</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item has-treeview">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-book"></i>--}}
                    {{--                            <p>--}}
                    {{--                                صفحات--}}
                    {{--                                <i class="fa fa-angle-left right"></i>--}}
                    {{--                            </p>--}}
                    {{--                        </a>--}}
                    {{--                        <ul class="nav nav-treeview">--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>سفارشات</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>پروفایل</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>صفحه ورود</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>صفحه عضویت</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>قفل صفحه</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item has-treeview">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-plus-square-o"></i>--}}
                    {{--                            <p>--}}
                    {{--                                بیشتر--}}
                    {{--                                <i class="fa fa-angle-left right"></i>--}}
                    {{--                            </p>--}}
                    {{--                        </a>--}}
                    {{--                        <ul class="nav nav-treeview">--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>ارور 404</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>ارور 500</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>صفحه خالی</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                            <li class="nav-item">--}}
                    {{--                                <a href="#" class="nav-link">--}}
                    {{--                                    <i class="fa fa-circle-o nav-icon"></i>--}}
                    {{--                                    <p>صفحه شروع</p>--}}
                    {{--                                </a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-header">متفاوت</li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-file"></i>--}}
                    {{--                            <p>مستندات</p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-header">برچسب‌ها</li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-circle-o text-danger"></i>--}}
                    {{--                            <p class="text">مهم</p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-circle-o text-warning"></i>--}}
                    {{--                            <p>هشدار</p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a href="#" class="nav-link">--}}
                    {{--                            <i class="nav-icon fa fa-circle-o text-info"></i>--}}
                    {{--                            <p>اطلاعات</p>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
