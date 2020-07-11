<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('page-title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.menu')
    @yield('content')

    <script src="{{ asset('js/app.js')}}" charset="UTF-8"></script>
</body>
</html>
