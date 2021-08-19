
@extends('layouts/app' )


@section('content')

<h1 class="center-text">Osi & Pablo 2021</h1>

<div class="invites">
    <form method="POST" action="/profile" class="form-inv">
        @csrf

        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
    </form>
</div>

<div class="container">
    <div class="main clearfix">
        <ul class="bb-custom-grid" id="bb-custom-grid">
            <li>
                <h3>Neonmob set</h3>
                <div class="bb-bookblock">
                    <div class="bb-item">
                        <a href="{{ asset('img/novios/newyear.jpeg') }}"><img src="{{ asset('img/novios/newyear.jpeg') }}" alt="image01" class="img-novios"/></a>
                    </div>
                    <div class="bb-item"><img src="{{ asset('img/novios/novios.jpeg') }}" alt="image02" class="img-novios"/></div>
                    <div class="bb-item"><img src="images/demo3/3.jpg" alt="image03" class="img-novios"/></div>
                    <div class="bb-item"><img src="images/demo3/4.jpg" alt="image04" class="img-novios"/></div>
                </div>
                <nav>
                    <span class="bb-current"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </nav>
            </li>
            <li>
                <h3>Illustration Work</h3>
                <div class="bb-bookblock">
                    <div class="bb-item"><img src="images/demo3/5.jpg" alt="image05"/></div>
                    <div class="bb-item"><img src="images/demo3/6.jpg" alt="image06"/></div>
                    <div class="bb-item"><img src="images/demo3/7.jpg" alt="image07"/></div>
                    <div class="bb-item"><img src="images/demo3/8.jpg" alt="image08"/></div>
                </div>
                <nav>
                    <span class="bb-current"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </nav>
            </li>
            <li>
                <h3>Everyday Monsters</h3>
                <div class="bb-bookblock">
                    <div class="bb-item"><img src="images/demo3/9.jpg" alt="image09"/></div>
                    <div class="bb-item"><img src="images/demo3/10.jpg" alt="image10"/></div>
                    <div class="bb-item"><img src="images/demo3/11.jpg" alt="image11"/></div>
                    <div class="bb-item"><img src="images/demo3/12.jpg" alt="image12"/></div>
                </div>
                <nav>
                    <span class="bb-current"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </nav>
            </li>
            <li>
                <h3>Signage for the Office</h3>
                <div class="bb-bookblock">
                    <div class="bb-item"><img src="images/demo3/13.jpg" alt="image13"/></div>
                    <div class="bb-item"><img src="images/demo3/14.jpg" alt="image14"/></div>
                    <div class="bb-item"><img src="images/demo3/15.jpg" alt="image15"/></div>
                    <div class="bb-item"><img src="images/demo3/16.jpg" alt="image16"/></div>
                </div>
                <nav>
                    <span class="bb-current"></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </nav>
            </li>
        </ul>
    </div>
</div><!-- /container -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/jquerypp.custom.js"></script>
<script src="js/jquery.bookblock.js"></script>
<script type="text/javascript">
    var Page = (function() {

        var $grid = $( '#bb-custom-grid' );

        return {
            init : function() {
                $grid.find( 'div.bb-bookblock' ).each( function( i ) {
                    
                    var $bookBlock = $( this ),
                        $nav = $bookBlock.next().children( 'span' ),
                        bb = $bookBlock.bookblock( {
                            speed : 600,
                            shadows : false
                        } );
                        
                    // add navigation events
                    $nav.each( function( i ) {
                        $( this ).on( 'click touchstart', function( event ) {
                            var $dot = $( this );
                            $nav.removeClass( 'bb-current' );
                            $dot.addClass( 'bb-current' );
                            $bookBlock.bookblock( 'jump', i + 1 );
                            return false;
                        } );
                    } );
                    
                    // add swipe events
                    $bookBlock.children().on( {
                        'swipeleft' : function( event ) {
                            $bookBlock.bookblock( 'next' );
                            return false;
                        },
                        'swiperight' : function( event ) {
                            $bookBlock.bookblock( 'prev' );
                            return false;
                        }

                    } );
                    
                } );
            }
        };

    })();
</script>
<script>
        Page.init();
</script>

@endsection


