
@extends('layouts/app' )


@section('content')

<!-- Page -->
<div class="gla_page" id="gla_page">

    
    
    <!-- To Top -->
    <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>


    <!-- Music -->
    <div class="gla_music_icon">
        <i class="ti ti-music"></i>
    </div>
    <div class="gla_music_icon_cont">
        <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/241787418&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/joseanlog" title="Jósean Log" target="_blank" style="color: #cccccc; text-decoration: none;">Jósean Log</a> · <a href="https://soundcloud.com/joseanlog/chachacha-acustico" title="Chachachá (acústico)" target="_blank" style="color: #cccccc; text-decoration: none;">Chachachá (acústico)</a></div>
        <!--iframe src="https://soundcloud.com/joseanlog/chachacha-acustico&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe-->
    </div>
    
    <!-- Header -->
    <header>       

        <nav class="gla_light_nav gla_transp_nav">

            <div class="container">
                
                <div class="gla_logo_container clearfix">
                    <img src="images/glanz_logo.png" alt="" class="gla_logo_rev">
                    <div class="gla_logo_txt">
                        <!-- Logo -->
                        <a href="/" class="gla_logo">Chinos & Juanpi</a>
                        
                        <!-- Text Logo -->
                        <div class="gla_logo_und">Octubre 21, 2021</div>
                    </div>
                </div>

                <!-- Menu -->
                <div class="gla_main_menu gla_main_menu_mobile">
                    
                    <div class="gla_main_menu_icon">
                        <i></i><i></i><i></i><i></i>
                        <b>Menu</b>
                        <b class="gla_main_menu_icon_b">Back</b>
                    </div>
                </div>
            </div>
            <!-- container end -->
        </nav>
        
    </header>
    <!-- Header End -->


    <!-- Slider -->
    <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed"  data-image="{{ asset('images/playa.jpeg') }}" data-stellar-background-ratio="0.8">

        <!-- Over -->
        <div class="gla_over" data-color="#1e1d2d" data-opacity="0.2"></div>


        <div class="container">

            
            <!-- Slider Texts -->
            <div class="gla_slide_txt gla_slide_center_middle text-center">
                 <div class="gla_flower gla_flower2">
                    <div class="gla_flower2_name_l">Osiris <b>Te esperamos</b></div>
                    <div class="gla_flower2_name_r">Pablo <b>Octubre 21, 2021</b></div>
                    <img src="{{ asset('images/togethe.jpeg') }}" alt="">
                </div>

                
            </div>
            <!-- Slider Texts End -->
        
        </div>
        <!-- container end -->

        <!-- Slide Down -->
        <a class="gla_scroll_down gla_go" href="#gla_content">
            <b></b>
            Scroll
        </a>


    </div>
    <!-- Slider End -->

    <!-- Content -->
    <section id="gla_content" class="gla_content">


       <!-- section -->
        <section class="gla_section gla_image_bck" data-color="#fafafd">
                     
            <div class="container text-center">
                <p><img src="{{ asset('images/animations/flower5.gif') }}" data-bottom-top="@src:images/animations/flower5.gif; opacity:1" class="gla_animated_flower" height="150" alt=""></p>
                <h2>Nuestra Historia</h2>
                <h3 class="gla_subtitle">2th Noviembre</h3>
                
                <p>Nos conocimos una noche de bar, sin intención de conocer a alguien y con objetivos diferentes. Al finalizar la noche lo que parecía una amistad se transformo al paso del tiempo en la relaciòn que acompañaran este 21 de octubre  </p>
   
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{ asset('images/arena.jpeg') }}">
            
            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            
            <div class="container text-center">
                <p><img src="{{ asset('images/animations/savethedate_wh.gif') }}" data-bottom-top="@src:images/animations/savethedate_wh.gif" height="150" alt=""></p>
                <h2>Octubre 21th, 2021</h2>
                <h3 class="gla_subtitle">Salón Quinta Punta Sam,<br>Cancún,  MX</h3>
                <div class="gla_countdown" data-year="2021" data-month="10" data-day="21"></div>
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section">
            
            
            <div class="container text-center">
                <p><img src="{{ asset('images/animations/flower6.gif') }}" data-bottom-top="@src:images/animations/flower6.gif; opacity:1" class="gla_animated_flower" height="110" alt=""></p>
                <h2>Detalles Boda</h2>
                <h3 class="gla_subtitle">Cuándo & Dónde</h3>
                <p>Nuestra boda será en el registro civil sólo con las/os testigas/os, después estaremos en el salón Quinta Punta Sam donde realizaremos una union espiritual y posteriormente se dará inicio a la celebración. </p>
                <div class="row text-center">
                    <div class="col-md-4 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{ asset('images/boda_civil.jpeg') }}"></div>
                        <h3>La Boda Civil</h3>
                        <p>12:00 PM – 1:00 PM<br>
                        Registro Civil,<br>
                        Cancún<br>
                        MX</p>
                        <a href="https://www.google.com.mx/maps/place/DIRECCI%C3%93N+DE+REGISTRO+CIVIL+-+Oficial%C3%ADa+01+y+Oficial%C3%ADa+02/@21.1615027,-86.8284827,18.1z/data=!4m12!1m6!3m5!1s0x8f4c2c0737a9f0ab:0x1a0a54df0bd2c1b9!2sParque+de+las+Palapas!8m2!3d21.1611457!4d-86.8274882!3m4!1s0x8f4c2c07236d5771:0xd887a1d6aeeb4125!8m2!3d21.1618759!4d-86.8280604" target="_blank" class="btn">View Map</a>
                    </div>
                    <div class="col-md-4 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{ asset('images/ritual.jpeg') }}"></div>
                        <h3>Unión Espiritual</h3>
                        <p>1:00 PM – 1:30 PM<br>
                        Salón Quinta Punta Sam,<br>
                        Cancún<br>
                        MX</p>
                        <a href="https://www.google.com.mx/maps/place/Sal%C3%B3n+De+Eventos+Quinta+Punta+Sam/@21.2162308,-86.8048248,17z/data=!3m1!4b1!4m5!3m4!1s0x8f4c2f21ee2048b5:0xdf68beee4801608f!8m2!3d21.2162302!4d-86.8026138" target="_blank" class="btn">View Map</a>
                    </div>
                    <div class="col-md-4 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{ asset('images/salon.jpeg') }}"></div>
                        <h3>Celebración</h3>
                        <p>1:30 PM – 11:30 PM<br>
                        Salón Quinta Punta Sam,<br>
                        Cancún<br>
                        MX</p>
                        <a href="https://www.google.com.mx/maps/place/Sal%C3%B3n+De+Eventos+Quinta+Punta+Sam/@21.2162308,-86.8048248,17z/data=!3m1!4b1!4m5!3m4!1s0x8f4c2f21ee2048b5:0xdf68beee4801608f!8m2!3d21.2162302!4d-86.8026138" target="_blank" class="btn">View Map</a>
                    </div>
                </div>

                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" data-image="http://placehold.it/1400x800">
            
            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            
            <div class="container text-center">
                <p><img src="images/animations/rsvp_wh.gif" data-bottom-top="@src:images/animations/rsvp_wh.gif" height="200" alt=""></p>
                
                <div class="row">
                    <div class="col-md-8 col-md-push-2">
                        <form action="https://formspree.io/your@mail.com" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Your name*</label>
                                    <input type="text" name="name" class="form-control form-opacity">
                                </div>
                                <div class="col-md-6">
                                    <label>Your e-mail*</label>
                                    <input type="text" name="email" class="form-control form-opacity">
                                </div>
                  
                                <div class="col-md-6">
                                    <label>Will you attend?</label>

                                    <input type="radio" name="attend" value="Yes, I will be there">
                                    <span>Yes, I will be there</span><br>
                                    <input type="radio" name="attend" value="Sorry, I can't come">
                                    <span>Sorry, I can't come</span>
                                    
                                </div>
                                <div class="col-md-6">
                                    <label>Meal preference</label>
                                    <select name="meal" class="form-control form-opacity">
                                        <option value="I eat anything">I eat anything</option>
                                        <option value="Beef">Beef</option>
                                        <option value="Chicken">Chicken</option>
                                        <option value="Vegetarian">Vegetarian</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label>Notes</label>
                                    <textarea name="message" class="form-control form-opacity"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn submit" value="Send">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck">
            
            
            <div class="container text-center">
                <p><img src="{{ asset('images/animations/flower7.gif') }}" data-bottom-top="@src:images/animations/flower7.gif; opacity:1" class="gla_animated_flower" height="110" alt=""></p>
                <h2>The Day They Got Engaged</h2>
                <p>Andy and Jeska met in university in the Graphic Design program. They both remember each other from orientation, but it wasn’t love at first sight, that’s for sure. Andy remembers Jeska as a ‘snooty art bitch (having been in the visual arts program at the time), and she remembers Andy being an ‘arrogant computer nerd’, boasting his knowledge of Macs over the other students.</p>
                
                <!-- filters -->
                <div class="button-group filter-button-group">
                    <a data-filter="*">Show All</a>
                    <a data-filter=".engagement">Engagement</a>
                    <a data-filter=".ceremony">Ceremony</a>
                </div>
                <!-- filters end -->

                <!-- grid -->
                <div class="gla_portfolio_no_padding grid">
                    
                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            
    

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item engagement">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item ceremony">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            

                        </div>
                    </div>

                    




                 </div>
                 <!-- grid end -->
                

                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck gla_wht_txt gla_fixed" data-stellar-background-ratio="0.8" data-image="http://placehold.it/1400x800">

            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            
            <div class="container text-center">


                <h2>Registry</h2>
                <p>We’re lucky enough to have nearly everything we need for our home already. And since neither of us has ever been outside of North America, we want our honeymoon to be extra special! If you want to help make it unforgettable, you can contribute using the link to the right. If you would like to give us something to update our home, we’ve compiled a short registry as well.</p>

                <!-- icon boxes -->
                <div class="gla_icon_boxes gla_partners row">
                    
                        
                    <!-- item -->
                    <div class="gla_partner_box">
                        <a href="#"><img src="http://placehold.it/250x100" height="80" alt=""></a>
                    </div>

                    <!-- item -->
                    <div class="gla_partner_box">
                        <a href="#"><img src="http://placehold.it/250x100" height="80" alt=""></a>
                    </div>

                    <!-- item -->
                    <div class="gla_partner_box">
                        <a href="#"><img src="http://placehold.it/250x100" height="80" alt=""></a>
                    </div>

                    <!-- item -->
                    <div class="gla_partner_box">
                        <a href="#"><img src="http://placehold.it/250x100" height="80" alt=""></a>
                    </div>

                    <!-- item -->
                    <div class="gla_partner_box">
                        <a href="#"><img src="http://placehold.it/250x100" height="80" alt=""></a>
                    </div>

                    <!-- item -->
                    <div class="gla_partner_box">
                        <a href="#"><img src="http://placehold.it/250x100" height="80" alt=""></a>
                    </div>

                    <!-- item -->
                    <div class="gla_partner_box">
                        <a href="#"><img src="http://placehold.it/250x100" height="80" alt=""></a>
                    </div>

                    <!-- item -->
                    <div class="gla_partner_box">
                        <a href="#"><img src="http://placehold.it/250x100" height="80" alt=""></a>
                    </div>

                    <!-- item -->
                    <div class="gla_partner_box">
                        <a href="#"><img src="http://placehold.it/250x100" height="80" alt=""></a>
                    </div>

                    <!-- item -->
                    <div class="gla_partner_box">
                        <a href="#"><img src="http://placehold.it/250x100" height="80" alt=""></a>
                    </div>
    

                </div>
                <!-- icon boxes end -->
                         
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck" data-color="#fff">
            
            
            <div class="container text-center">

                <h2>The Wedding Party</h2>
                
                <!-- filters -->
                <div class="button-group filter-button-group">
                    <a data-filter="*">Show All</a>
                    <a data-filter=".groomsmen">Groomsmen</a>
                    <a data-filter=".bridesmaids">Bridesmaids</a>
                </div>
                <!-- filters end -->

                <!-- grid -->
                <div class="gla_portfolio_no_padding grid">
                    
                    <div class="col-sm-4 gla_anim_box grid-item bridesmaids">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            
                            <a href="#" class="gla_shop_item_title">
                                Andrew & Joanna
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item bridesmaids">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            
                            <a href="#" class="gla_shop_item_title">
                                Stewart & Ann
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item bridesmaids">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            
                            <a href="#" class="gla_shop_item_title">
                                Mark & Jenny
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item broombridesmaidssmen">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            
                            <a href="#" class="gla_shop_item_title">
                                Izzy & Katy
                            </a>
                        </div>
                    </div>



                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            
                            <a href="#" class="gla_shop_item_title">
                                Bob
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                            
                            <a href="#" class="gla_shop_item_title">
                                Mark
                            </a>
                        </div>
                    </div>


                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                        </div>
                    </div>


                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>                        
                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item groomsmen">
                        <div class="gla_shop_item">
                            <a href="http://placehold.it/1400x800" class="lightbox">
                                <img src="http://placehold.it/600x600" alt="">
                            </a>
                        </div>
                    </div>

                 </div>
                 <!-- grid end -->
                

                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->




        <!-- section -->
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="http://placehold.it/1400x800">
            
            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            
            <div class="container text-center">
                <p><img src="images/animations/thnyou_wh.gif" alt="" height="200" data-bottom-top="@src:images/animations/thnyou_wh.gif"></p>

                
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->

    

            
        

    </section>
    <!-- Content End -->
    

    

</div>
<!-- Page End -->



@endsection


