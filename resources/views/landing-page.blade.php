@extends('default')
@section('content')

 <div class="row justify-content-center"> 
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
                <img src="{{('../public/asset/assets/img/tournoi.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>SATS Vainqueur du tournoi de football Bollore 2019</h5>
                  {{-- <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> --}}
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{('../public/asset/assets/img/diner_gala.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>AFBOLL: Diner de gala avec Waly Seck</h5>
                  {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                </div>
              </div>
              <div class="carousel-item">
                <img src="{{('../public/asset/assets/img/wiken.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Weekend Bollore au Royal Saly</h5>
                  {{-- <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> --}}
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
</div>
@endsection