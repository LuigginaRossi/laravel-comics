<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel Comics</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>
<body>
    
    {{-- nav-bar --}}
    @include('components.nav_bar')

    {{-- thumb --}}
    @include('components.thumb')

    {{-- main --}}
    {{-- @include('components.main') --}}
    @yield('main-posts')
    @yield('main-games')
    
    {{-- shop --}}
    @include('components.shop')

    {{-- footer --}}
    @include('components.footer')

    {{-- second Footer --}}
    @include('components.second_footer')
</body>
</html>