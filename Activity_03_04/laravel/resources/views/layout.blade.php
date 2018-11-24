<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>@yield('titulo', 'Academic System')</title>
    </head>

    <body>

        <ul>
            <li><a href="/">Main</a></li>
            <li><a href="/lista">List</a></li>
            <li><a href="/info">Information</a></li>
            <li><a href="/contato">Contato</a></li>
        </ul>

        @yield('content')

    </body>
</html>
