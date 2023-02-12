<!DOCTYPE html>
<html lang="en">
<head>
    @yield('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library</title>
    <link rel="icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <header>
            @if(session()->has('message'))
                <div class="flash" x-data="{show:true}" x-init="setTimeout( ()=> show = false, 4500)" x-show="show">
                    <p>{{session('message')}}</p>
                </div>
            @endif
            <div class="logo">
                <a href="/"><img class="logo" src="{{asset('images/logo-white.png')}}" alt=""></a>
                <p class="title">Library</p>
            </div>
            <div class="btn">
                @yield('button')
            </div>
        </header>

        <main>
            @yield('main')
        </main>

        <footer>
            <p>&#169 2023: www.library.com</p>
        </footer>
    </div>
</body>
<script src="//unpkg.com/alpinejs" defer></script>
</html>