<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boda Chinos & Pablito') }}</title>

    <!-- Scripts -->
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
   
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">


    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <!-- Book Flip plugin -->
    <link rel="stylesheet" type="text/css" href="css/defaultt.css" />
    <link rel="stylesheet" type="text/css" href="css/bookblock.css" />
    <!-- custom demo style -->
    <link rel="stylesheet" type="text/css" href="css/demoo.css" />
    <script src="js/modernizr.custom.js"></script>







  
</head>
<body>
    
    <div id="app">
        {{-- Include Page Content --}}
        @yield('content')     
       
    </div>
</body>

@yield('page-script')

<script type="text/javascript">
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {shrinkLogo()};

function shrinkLogo() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("logo_alpha").style.width = "130px";
  } else {
    document.getElementById("logo_alpha").style.width = "200px";
  }
}
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $( "#logo_alpha" ).hover(
            function() {
                $( this ).addClass( "animate__animated" );
                $( this ).addClass( "animate__rubberBand" );
            }, function() {
                $( this ).removeClass( "animate__animated" );
                $( this ).removeClass( "animate__rubberBand" );
            }
        );
    });
</script>
</html>
