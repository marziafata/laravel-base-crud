<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('page-title')</title>
    <script src="https://momentjs.com/downloads/moment-with-locales.min.js" charset="utf-8"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js"></script> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('partials.menu')
    @yield('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js')}}" charset="UTF-8"></script>

    {{-- <!-- Handlebars     -->
<script id="entry-template" type="text/x-handlebars-template">
</script> --}}
</body>
</html>
