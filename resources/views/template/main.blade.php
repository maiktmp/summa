<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logob-summa-untitle.png') }}"/>
    <title>@yield('title', 'Summa Multimarcas')</title>
    <!-- Stylesheets -->
    @include('template.global_css')
    @stack('css')
</head>
<body>
<div class='main-container'>
    <header>
        @include('components.navbar')
    </header>
    <section class="wrapper">
        @yield('content')
    </section>
    @include('components.footer')
</div>
{{--<!-- Javascript -->--}}
@include('template.global_js')
@stack('scripts')
</body>
</html>
