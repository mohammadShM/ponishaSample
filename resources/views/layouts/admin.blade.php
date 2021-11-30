<!DOCTYPE html>
<html lang="fa">
<head>
    @include('layouts.adminFile.head')
    <title>پنل مدیریت | @yield('title')</title>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
@include('layouts.adminFile.navbar')
<!-- /.navbar -->
    <!-- Main Sidebar Container -->
@include('layouts.adminFile.sidebar')
    <!-- Content Wrapper. Contains page content -->
@yield('content')
    <!-- /.content-wrapper -->
@include('layouts.adminFile.footer')
</div>
<!-- ./wrapper -->
@include('layouts.adminFile.javascript')
</body>
</html>
