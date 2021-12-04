@section('title','لیست کاربران')
<div>
    <div class="content-wrapper" style="min-height: 583px;">
        <!-- Content Header (Page header) -->
    @include(config('user.extends.breadcrumb'))
    <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">@yield('title')</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <label for="table_search"></label>
                                        <input type="text" name="table_search" id="table_search"
                                               class="form-control float-right" placeholder="جستجو">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive table-bordered p-0">
                                <table class="table table-hover">
                                    <tbody>
                                    <tr class="table-primary">
                                        <th>شماره</th>
                                        <th>آیدی</th>
                                        <th>تصویر</th>
                                        <th>نام</th>
                                        <th>نام خانوادگی</th>
                                        <th>ایمیل</th>
                                        <th>موبایل</th>
                                        <th>نام کاربری</th>
                                        <th>وضعیت</th>
                                        <th>نوع اشتراک</th>
                                        <th>تاریخ ثبت نام</th>
                                        <th>عملیات</th>
                                    </tr>
                                    @foreach ($users as $value=>$user)
                                        <tr>
                                            <td>{{$value+1}}</td>
                                            <td>{{$user->id}}</td>
                                            <td>
                                                <img src="" alt="">
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{$user->last_name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->mobile}}</td>
                                            <td>{{$user->username}}</td>
                                            <td>
                                                @if($user->email_verified)
                                                    <span class="badge badge-success">تایید شده</span>
                                                @else
                                                    <span class="badge badge-danger">تایید نشده</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($user->account_type == 0)
                                                    <span class="badge badge-success">عضویت معمولی</span>
                                                @elseif($user->account_type == 1)
                                                    <span class="badge badge-danger">عضویت برنزی</span>
                                                @elseif($user->account_type == 2)
                                                    <span class="badge badge-light">عضویت نقره ای</span>
                                                @elseif($user->account_type == 3)
                                                    <span class="badge badge-warning">عضویت طلایی</span>
                                                @endif
                                            </td>
                                            <td>{{jdate($user->created_at)->format('%A, %d %B %Y')}}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <button type="button" class="btn btn-danger btn-sm ml-2">
                                                        حذف</button>
                                                    <button type="button" class="btn btn-success btn-sm">
                                                        ویرایش</button>
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
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>
