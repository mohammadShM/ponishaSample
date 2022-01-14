<div>
    @section('title','ویرایش کاربر')
    <div class="content-wrapper" style="min-height: 583px;">
        @include(config('user.extends.breadcrumb'))
        <section class="content">
            <div class="container-fluid">
                <form action="">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">اطلاعات اولیه</h3>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="name">نام</label>
                                        <input id="name" type="text" class="form-control"
                                               placeholder="نام را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastname">نام خانوادگی</label>
                                        <input id="lastname" type="text" class="form-control"
                                               placeholder="نام خانوادگی را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="username">نام کاربری</label>
                                        <input id="username" type="text" class="form-control"
                                               placeholder="نام کاربری را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">ایمیل</label>
                                        <input id="email" type="text" class="form-control"
                                               placeholder="ایمیل  کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">موبایل</label>
                                        <input id="mobile" type="text" class="form-control"
                                               placeholder="موبایل کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">رمز عبور</label>
                                        <input id="password" type="text" class="form-control"
                                               placeholder="رمز عبور کاربری را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="password-con">تکرار رمز عبور</label>
                                        <input id="password-con" type="text" class="form-control"
                                               placeholder="تکرار رمز عبور کاربری را وارد کنید">
                                    </div>
                                    <div class="pl-5 pr-5 pt-4 pb-1 w-100">
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
                                        <input id="image" type="file" class="form-control"
                                               placeholder="تصویر کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="cover">کاور پروفایل کاربر</label>
                                        <input id="cover" type="file" class="form-control"
                                               placeholder="کاور پروفایل کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="ountry">کشور</label>
                                        <input id="ountry" type="text" class="form-control"
                                               placeholder="کشور کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="province">استان</label>
                                        <input id="province" type="text" class="form-control"
                                               placeholder="استان کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="city">شهر</label>
                                        <input id="city" type="text" class="form-control"
                                               placeholder="شهر کاربر را وارد کنید">
                                    </div>
                                    <div class="form-group">
                                        <label for="about">درباره کاربر</label>
                                        <textarea id="about" class="form-control" rows="3"
                                                  placeholder="وارد کردن اطلاعات ..."></textarea>
                                    </div>
                                    <div class="pl-5 pr-5 pt-5 pb-1 w-100">
                                        <button type="submit" class="btn btn-primary w-100">ایجاد کاربر</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
