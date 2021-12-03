<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>
<body class="font-montserrat">
    <header>
        @include('components.top_menu')
    </header>
    @yield('content')
    <footer>
        @if(request()->is('/') || request()->is('login/*') || request()->is('register/*'))
            <div class="container m-auto">
                <div class="absolute right-0 bottom-0 -z-1">
                    <img class="h-790px" src="{{ asset('img/footerImg.png') }}" alt="footerImg">
                </div>
            </div>
        @else
            @include('components.footer')
        @endif
    </footer>
</body>
</html>
