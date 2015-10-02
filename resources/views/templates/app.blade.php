<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
        @yield('head')
    </head>
    <body>
        <div class="container">
            @include('templates/flash')
            @yield('content')
        </div>
        @yield('footer')

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(300)
    </script>
    </body>
</html>
