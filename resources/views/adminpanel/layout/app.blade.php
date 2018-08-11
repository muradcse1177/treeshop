<!doctype html>
<html lang="en">
<head>
    <title>@yield('title') | Tree Shop Admin Panel</title>
    @section('header')
        @include('adminpanel.layout.header')
    @show
</head>

<body class="hold-transition fixed sidebar-mini">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Site wrapper -->
    <div class="wrapper">
        <header class="main-header">
            <a href="index-2.html" class="logo"> <!-- Logo -->
                <span class="logo-mini">
                            <!--<b>A</b>H-admin-->
                            <img src="/adminpanel/assets/dist/img/logo-mini.png" alt="img">
                        </span>
                <span class="logo-lg">
                            <!--<b>Admin</b>H-admin-->
                            <img src="/adminpanel/assets/dist/img/logo.png" alt="img">
                        </span>
            </a>
            @section('navbar')
                @include('adminpanel.layout.navbar')
            @show @section('sidebar')
                @include('adminpanel.layout.sidebar')
            @show
        </header>
        @yield('content')
        @show @section('footer')
            @include('adminpanel.layout.footer')
        @show
    </div>
</body>
</html>