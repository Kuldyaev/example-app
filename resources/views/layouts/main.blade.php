<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@section('title')Страница @show</title>
    </head>
    <body class="antialiased">
        <h1>ПОРТАЛ НОВОСТЕЙ</h1>
        <br>
@yield('menu')
        <br>
@yield('content')
    </body>
</html>