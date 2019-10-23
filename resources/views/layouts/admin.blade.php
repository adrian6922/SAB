<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SAB | @yield('title')</title>
        <!--Styles-->
        <link rel="stylesheet" href="{{ asset('css/normalize.css') }} ">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!--Fuente-->
        <link href="https://fonts.googleapis.com/css?family=DM+Serif+Display|Hind|Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        
        <!-- link de datatable -->
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

         <!-- datepicker jquery-ui -->
         <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        
        <!--Estilos autor-->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <!--Icono de pagina-->
        <link rel="icon" type="image/ico" href=" {{ asset('') }} ">

</head>

    <body>
        @include('accessories.menu') <!--menu-administrador-->
        <!--imagen de carga-->
        <span class="spinner-border mensaje" id="mensaje"></span>

        @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    <!-- infinite scroll plugin -->
    <script src="{{asset('js/infinite-scroll.pkgd.min.js')}}"></script>

    <!-- datatable js-->
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('js/datatable.js') }}"></script>
    <script src="{{ asset('js/datatable_sin_orden.js') }}"></script>

    <!-- script de regiones y comunas -->
    <script src="{{ asset('js/regiones_chile.js') }}"></script>

    <!-- script validador de rut -->
    <script src="{{ asset('js/validar_rut.js') }}"></script>

    <!-- jquery datepicker-->
    <script src="{{ asset('js/datepicker.js') }}"></script>

    <script>
        $("#mensaje").hide();
    </script>


@yield('scripts')
