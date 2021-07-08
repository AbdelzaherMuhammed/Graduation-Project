<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/css/animate.css') }}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>



@yield('content')





<script src="{{ asset('front/js/jquery-3.5.1.slim.min.js') }}"></script>
<script src="{{ asset('front/js/popper.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/js/wow.min.js') }}"></script>

<script>
    new WOW().init();
</script>
@stack('scripts')
</body>
</html>