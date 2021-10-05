<!DOCTYPE html>

{{-- This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only. --}}

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{ __('CRM') }}</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.companies.index') }}" class="dropdown-item">
                            <i class="fas fa-address-card mr-2"></i>
                            {{ auth()->user()->companies()->count().__(' clients') }}
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.users.show', Auth::user()) }}" class="dropdown-item">
                            <i class="fas fa-user mr-2"></i>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                            <i class="fas fa fa-home mr-1"></i>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <center><span class="brand-text font-weight-light">{{ __('Mini-CRM') }}</span></center>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->

                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>{{ __('Dashboard') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.users.index') }}" class="nav-link">
                                <i class="far fa fa-users nav-icon"></i>
                                <p>{{ __('Usuarios') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.companies.index') }}" class="nav-link">
                                <i class="far fa-address-card nav-icon"></i>
                                <p>{{ __('Clientes') }}</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('permits.permits') }}" class="nav-link">
                                <i class="far fa fa-home nav-icon"></i>
                                <p>{{ __('Permisos') }}</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <main class="py-4">
                @yield('content')
            </main>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="text-center text-white" style="background-color: #f1f1f1;">
            <!-- Grid container -->
            <div class="container pt-4">
                <!-- Section: Social media -->
                <section class="mb-4">

                    <!-- Google -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://www.google.es/"
                        role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="https://www.instagram.com/rafa_ortega89/" role="button" data-mdb-ripple-color="dark"><i
                            class="fab fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1"
                        href="https://www.linkedin.com/in/rafael-a-ortega-valderrama-ab7a1aa8/" role="button"
                        data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                    <!-- Github -->
                    <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="https://github.com/raortega8906"
                        role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
                </section>
                <!-- Section: Social media -->
            </div>
            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © {{ date('Y') }} Copyright:
                <a class="text-dark" href="https://rafaelortegaweb.herokuapp.com/">Rafael A. Ortega</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- ./footer -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/js/adminlte.min.js') }}"></script>
</body>

</html>
