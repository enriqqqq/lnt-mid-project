<!DOCTYPE html>
<html lang="en">
<head>
    @yield('head')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <header>
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
            <p>&#169 2023: Footer.com</p>
        </footer>
    </div>
</body>
</html>