<html>
    <head>
        <title> appblade - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            メインのサイドバー
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
