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
                                        <label>
                                            <input type="text" name="table_search"
                                                   class="form-control float-right" placeholder="جستجو">
                                        </label>
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
                                    <tr>
                                        <th>شماره</th>
                                        <th>کاربر</th>
                                        <th>تاریخ</th>
                                        <th>وضعیت</th>
                                        <th>دلیل</th>
                                    </tr>
                                    <tr>
                                        <td>۱۸۳</td>
                                        <td>محمد</td>
                                        <td>۱۱-۷-۲۰۱۴</td>
                                        <td><span class="badge badge-success">تایید شده</span></td>
                                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                                    </tr>
                                    <tr>
                                        <td>۲۱۹</td>
                                        <td>توحید</td>
                                        <td>۱۱-۷-۲۰۱۴</td>
                                        <td><span class="badge bg-danger">در حال بررسی</span></td>
                                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                                    </tr>
                                    <tr>
                                        <td>۶۵۷</td>
                                        <td>رضا</td>
                                        <td>۱۱-۷-۲۰۱۴</td>
                                        <td><span class="badge badge-primary">تایید شده</span></td>
                                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                                    </tr>
                                    <tr>
                                        <td>۱۷۵</td>
                                        <td>پرهام</td>
                                        <td>۱۱-۷-۲۰۱۴</td>
                                        <td><span class="badge badge-danger">رد شده</span></td>
                                        <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</td>
                                    </tr>
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
