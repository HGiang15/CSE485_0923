<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/homepage.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/icon/font_awe/css/all.min.css') }}">
</head>
<body>
    {{-- Header GN --}}
    @yield('header')

    
    {{-- Main Content KN --}}
    <div class="container-fluid">
        @yield('main')
    </div>


    {{-- Footer GN --}}
    @include('layouts.footer')
    <script src="{{ asset('/assets/js/bootstrap.bundle.js') }}"></script>
</body>
</html>