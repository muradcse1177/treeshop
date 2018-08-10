<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>@yield('title') | Tree Shop</title>
        @section('header')
            @include('layout.header')
        @show
    </head>

    <body>
        <div class="wrapper">
            @section('navbar')
                @include('layout.navbar')
            @show
            @yield('content')
            @section('footer')
                @include('layout.footer')
            @show
        </div>
    </body>
</html>