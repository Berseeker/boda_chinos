<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Boda Chinos & Pablito') }}</title>

    <!-- Scripts -->
    
    <script src="{{ asset('js/home/jquery.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.js') }}"></script>
    <script src="https://kit.fontawesome.com/8d420a663d.js" crossorigin="anonymous"></script>
    <!--script src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js" ></script-->
    <script src="{{ asset('js/home/jquery-slick.min.js') }}" ></script>
    <script src="{{ asset('js/home/TweenMax.min.js') }}" ></script>
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js" ></script-->
    
    <link rel="stylesheet" href="{{ asset('fonts/feather/iconfont.css') }}">


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/boots.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/slick.css') }}">
    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"-->
    <link rel="stylesheet" href="{{ asset('css/home/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home/hover.css') }}">

    <!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/-->
    <link rel="stylesheet" href="{{ asset('css/home/stack_motion/animate.css') }}">
    <script src="{{asset('js/home/stack_motion/anime.min.js')}}"></script>
    <script src="{{ asset('js/home/particles.js') }}"></script>
    





  
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
