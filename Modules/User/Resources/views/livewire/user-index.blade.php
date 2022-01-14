<div>
    @section('title','لیست کاربران')
    <div class="content-wrapper" style="min-height: 583px;" wire:init="loadUser">
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
                                <h3 class="card-title d-inline-block">@yield('title')</h3>
                                <div class="card-tools d-flex">
                                    <a href="{{route('user.add')}}" type="button"
                                       class="btn btn-primary btn-sm d-inline-block ml-2">افزودن کاربران</a>
                                    <form action="" onclick="event.preventDefault()">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <label for="table_search"></label>
                                            <input type="text" id="table_search"
                                                   wire:model.debounce.1000="search"
                                                   class="form-control float-right" placeholder="جستجو">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive table-striped table-bordered p-0"
                                 style="display:block;overflow-x:scroll;">
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
                                        <th>وضعیت ایمیل</th>
                                        <th>نوع اشتراک</th>
                                        <th>تاریخ ثبت نام</th>
                                        <th>عملیات</th>
                                    </tr>
                                    @if ($readyToLoad)
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
                                                    @if($user->status == 1)
                                                        <span wire:click="updateStatusToDisable({{$user->id}})"
                                                              style="cursor: pointer;"
                                                              class="badge badge-success">فعال</span>
                                                    @else
                                                        <span wire:click="updateStatusToEnable({{$user->id}})"
                                                              style="cursor: pointer;"
                                                              class="badge badge-danger">بلاک شده</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($user->email_verified_at)
                                                        <span style="cursor: pointer;"
                                                              class="badge badge-success">تایید شده</span>
                                                    @else
                                                        <span wire:click="updateEmailToDisable({{$user->id}})"
                                                              style="cursor: pointer;"
                                                              class="badge badge-danger">تایید نشده</span>
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
                                                        <button type="button"
                                                                wire:click="deleteUser({{$user->id}})"
                                                                class="btn btn-danger btn-sm ml-2">
                                                            حذف
                                                        </button>
                                                        <a href="{{route('user.edit',$user)}}" type="button"
                                                           class="btn btn-success btn-sm">ویرایش</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        {{-- <div class="d-flex justify-content-center mt-3">--}}
                                        {{--     {{$users->render()}}--}}
                                        {{-- </div>--}}
                                    @else
                                        <tr>
                                            <td colspan="13" rowspan="5" class="text-center">
                                                <div class="alert alert-warning">
                                                    در حال خواندن اطلاعات از دیتابیس ....
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            @if ($readyToLoad)
                                <div class="d-flex justify-content-center mt-3">
                                    {{$users->links()}}
                                </div>
                        @endif
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
