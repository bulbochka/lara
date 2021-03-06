<!DOCTYPE html>
<html>
    <head>
        <title>Logo`vo</title>

            <meta charset="utf–8">
            <meta name="viewport" content="width=device–width, initial–scale=1.0">
            <meta name="description" content="">
            <meta name="author" content="">

            <link href="{{asset('css/style.css')}}" rel="stylesheet">
            <link href="{{asset('css/app.css')}}" rel="stylesheet">
            <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
            <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
            <link href="{{asset('css/slick.css')}}" rel="stylesheet">
            <link href="{{asset('css/slick-theme.css')}}" rel="stylesheet">

            <script type="text/javascript" src="{{asset('js/js.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
            <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
    </head>

    <body>
        @include('layouts.nav')
        @include('layouts.message')
        @yield('content')
        @include('product.layout-product-page')
        @include('layouts.footer')
    </body>
</html>