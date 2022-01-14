<div>
    @section('title','افزودن کاربر')
    <div class="content-wrapper" style="min-height: 583px;">
        @include(config('user.extends.breadcrumb'))
        <section class="content">
            <div class="container-fluid">
                <form action="" wire:submit.prevent="userForm" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">اطلاعات اولیه</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">نام</label>
                                        <input id="name" type="text" class="form-control" wire:model.lazy="user.name"
                                               placeholder="نام را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">نام خانوادگی</label>
                                        <input id="lastname" type="text" class="form-control" wire:model.lazy="user.last_name"
                                               placeholder="نام خانوادگی را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">نام کاربری</label>
                                        <input id="username" type="text" class="form-control" wire:model.lazy="user.username"
                                               placeholder="نام کاربری را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">ایمیل</label>
                                        <input id="email" type="text" class="form-control" wire:model.lazy="user.email"
                                               placeholder="ایمیل  کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">موبایل</label>
                                        <input id="mobile" type="text" class="form-control" wire:model.lazy="user.mobile"
                                               placeholder="موبایل کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">رمز عبور</label>
                                        <input id="password" type="password" class="form-control" wire:model.lazy="user.password"
                                               placeholder="رمز عبور کاربری را وارد کنید">
                                    </div>
                                    {{-- <div class="form-group">--}}
                                    {{--     <label for="password-con">تکرار رمز عبور</label>--}}
                                    {{--     <input id="password-con" type="password" class="form-control"--}}
                                    {{--            wire:model.lazy="user.password-com"--}}
                                    {{--            placeholder="تکرار رمز عبور کاربری را وارد کنید">--}}
                                    {{-- </div>--}}
                                    <div class="pl-5 pr-5 pt-3 pb-2 w-100">
                                        <button type="submit" class="btn btn-warning w-100">ایجاد کاربر</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">اطلاعات اختیاری</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="image">تصویر کاربر</label>
                                        <input id="image" type="file" class="form-control" wire:model.lazy="profile_photo_path"
                                               placeholder="تصویر کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="cover">کاور پروفایل کاربر</label>
                                        <input id="cover" type="file" class="form-control" wire:model.lazy="cover"
                                               placeholder="کاور پروفایل کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="country">کشور</label>
                                        <input id="country" type="text" class="form-control" wire:model.lazy="user.country"
                                               placeholder="کشور کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="province">استان</label>
                                        <input id="province" type="text" class="form-control" wire:model.lazy="user.state"
                                               placeholder="استان کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="city">شهر</label>
                                        <input id="city" type="text" class="form-control" wire:model.lazy="user.city"
                                               placeholder="شهر کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="about">درباره کاربر</label>
                                        <textarea id="about" class="form-control" rows="3" wire:model.lazy="user.about_us"
                                                  placeholder="وارد کردن اطلاعات ..."></textarea>
                                    </div>
                                    {{--<div class="pl-5 pr-5 pt-5 pb-1 w-100">--}}
                                    {{--<button type="submit" class="btn btn-primary w-100">ایجاد کاربر</button>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
