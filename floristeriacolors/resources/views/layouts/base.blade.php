<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Floristería Colors</title>        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        @include('layouts.head_css')

    </head>
    
    <body id="body">
        @include('layouts.header')

        <!--separador -->
        <div class="separador">
    
        </div>
        <!--fin separador -->
        @yield('content')

        
        @include('layouts.puntoscompra')
        @include('layouts.seccion2')      
        @include('layouts.footer')

        @include('layouts.script')
    </body>


