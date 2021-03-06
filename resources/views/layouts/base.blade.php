<!DOCTYPE html>
<html class=" @stack('html-element-classes') " lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @hasSection('title')
            @yield('title') | {{ config('app.name') }}
        @else
            {{ config('app.name') }}
        @endif
    </title>

    <link rel="stylesheet" href="{{ mix('assets/css/e-ponto-bulma-theme.css') }}">
    @stack('css')
</head>

<body class=" @stack('body-element-classes') ">
    @yield('content')

    @stack('scripts')
</body>

</html>