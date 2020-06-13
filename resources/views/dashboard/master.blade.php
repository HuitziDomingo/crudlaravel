<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Modulo Admin</title>
</head>
<body>

    @include('dashboard.partials.nav-header-main')

    <div class="container">
        @include('dashboard.partials.session-flash-status')
        <!--esta seccion ira cambiando segun sea necesario--->
        @yield('content')
    </div>
    @include('dashboard.partials.footer-scripts')
</body>
</html>