<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body>
        
        <h1>Hello,{{ $name }}</h1>
        <input name="radiing" value="value" type="radio" id="1"><label>test</label>
        <h3>common</h3>
        
        @yield('content')
    </body>
</html>
