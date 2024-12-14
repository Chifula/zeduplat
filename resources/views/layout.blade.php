<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
    @include('navbar')
    <div class="content">
        @yield('content')
    </div>
    @include('footer')
</body>
</html>
