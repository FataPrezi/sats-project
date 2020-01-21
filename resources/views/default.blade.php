<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
 <html lang="en"> 

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('../public/asset/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('../public/asset/assets/img/favicon_2.png')}}"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    SATS
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link type="text/css" href="{{asset('../public/asset/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link type="text/css" href="{{asset('../public/asset/assets/css/now-ui-kit.css?v=1.3.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link type="text/css" href="{{asset('../public/asset/assets/demo/demo.css')}}" rel="stylesheet" />
</head>

{{-- <body class="index-page sidebar-collapse"> --}}
  
  <div> @include('navbar')</div>
  
   <div class="wrapper">
     <div class="page-header clear-filter" filter-color="">
       <div class="page-header-image" data-parallax="true" style="background-image:url({{asset('../public/asset/assets/img/wallpaper6.jpg')}});">
      </div>  
      <div class="container">

        {{-- Message à afficher si enregistrement candidature reussi --}}
        @if(session()->has('message'))
        <div class="alert alert-primary"> 
          {{ session()->get('message') }}
        </div>
        @endif

        {{-- <div class="content-center brand">
           <img class="n-logo" src="{{asset('../public/asset/assets/img/now-logo.png')}}" alt=""> 
          <h3 class="h1-seo">SATS</h3>
          <h3>MANUTENTION | DOUANES | LOGISTIQUE | SHIPPING</h3>
        </div>  --}}

        {{-- Carousel --}}
        
              {{-- <div class="title">
                <h4>Carousel</h4>
              </div> --}}
              <br>
  <br>
              @yield('content')
              {{-- <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12">
                    <div class="bd-example">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img src="{{('../public/asset/assets/img/port.jpg')}}" class="d-block w-100" alt="...">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <img src="{{('../public/asset/assets/img/docker2.jpg')}}" class="d-block w-100" alt="...">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                            </div>
                            <div class="carousel-item">
                              <img src="{{('../public/asset/assets/img/bg8.jpg')}}" class="d-block w-100" alt="...">
                              <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                              </div>
                            </div>
                          </div>
                          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                      </div>
                </div>
              </div> --}}
           
          {{-- End Carousel --}}

        <!--
        <h6 class="category category-absolute">Designed by
          <a href="http://invisionapp.com/" target="_blank">
            <img src="{{asset('../public/asset/assets/img/invision-white-slim.png')}}" class="invision-logo" />
          </a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">
            <img src="{{asset('../public/asset/assets/img/creative-tim-white-slim2.png')}}" class="creative-tim-logo" />
          </a>.</h6>
        -->
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('../public/asset/assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('../public/asset/assets/js/core/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('../public/asset/assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="{{asset('../public/asset/assets/js/plugins/bootstrap-switch.js')}}"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="{{asset('../public/asset/assets/js/plugins/nouislider.min.js')}}" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="{{asset('../public/asset/assets/js/plugins/bootstrap-datepicker.js')}}" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="{{asset('../public/asset/assets/js/now-ui-kit.js?v=1.3.0')}}" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      // the body of this function is in assets/js/now-ui-kit.js
      nowuiKit.initSliders();
    });

    function scrollToDownload() {

      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
<div> @include('footer')</div>
{{-- </body> --}}
 </html> 