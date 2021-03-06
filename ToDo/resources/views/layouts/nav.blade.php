<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <link rel="stylesheet" href="{{ asset('/css/CSS.css') }}">
        <script>window.Laravel = {csrfToken:'{{csrf_token()}}'}</script>

        <title>Cosas por hacer</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        
        </style>
    </head>
    <body style="margin:0">
        <nav class="navi">
            <a href="/main"><img id="icono" src="/imgs/laravelIcon.png" alt=""></a>
            
            <div>
                <a href="/salir">salir</a>
                <a href="/upload">subir archivo</a>
            </div>
        </nav>

        @yield('content')


    </body>
</html>