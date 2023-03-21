<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @stack('prepend-style')
    @include('include.style')
    @stack('addon-style')
    
    <title>@yield('title')</title>
</head>

<body>
    <!-- Navbar -->
    @include('include.navbar')
    
    @yield('content')

    @include('include.footer')
    @stack('prepend-script')
    @include('include.script')
    @stack('addon-script')

</body>

</html>