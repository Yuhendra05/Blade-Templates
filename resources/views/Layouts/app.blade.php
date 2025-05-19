<!DOCTYPE html>

<html>

<head> 
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('partials.header')

    <div class="container mt-4">
        @yield('content')
    </div>
    @include('partials.footer')
</body>

</html>