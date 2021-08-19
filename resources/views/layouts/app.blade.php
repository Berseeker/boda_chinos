<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boda Chinos & Pablito') }}</title>

    <!-- Scripts -->
    
    
  







  
</head>
<body>
    
    <div id="app">
        {{-- Include Page Content --}}
        @yield('content')     
       
    </div>
</body>

@yield('page-script')

</html>
