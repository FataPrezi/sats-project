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

{{-- FIL INFO --}}
{{-- <div class="widget-fil-info-head">
  <div class="widget-fil-info-head-title pull-left">Fil info</div>
  <a href="/minpmin" class="widget-fil-info-head-link pull-right">tout voir</a>
  </div>
  <div class="media widget-fil-info-item">
  <div class="media-left widget-fil-info-item-img">
  <div data-href="https://www.football365.fr/samuel-etoo-soppose-a-lidee-dune-can-quatre-ans-9743794.html">
  <img class="media-object lazy-load" src="https://www.football365.fr/wp-content/themes/core/assets/images/blank.gif" data-src="https://cdn.football365.fr/wp-content/uploads/se/2020/02/ETOO_120220-60x60.jpg" alt="Samuel Eto'o s'oppose � l'id�e d'une CAN tous les quatre ans">
  </div>
  </div>
  <div class="media-body media-middle">
  <h3 class="widget-fil-info-item-title"> <a href="https://www.football365.fr/samuel-etoo-soppose-a-lidee-dune-can-quatre-ans-9743794.html">Samuel Eto'o s'oppose � l'id�e d'une CAN tous les quatre ans</a> </h3>
  <div class="widget-fil-info-item-date">12 f�vrier 2020 � 14h05</div>
  </div>
  <span class="widget-fil-info-item-count">1</span>
  </div> 
  <div class="media widget-fil-info-item">
  <div class="media-left widget-fil-info-item-img">
  <div data-href="https://www.football365.fr/real-madrid-pret-a-payer-clause-dun-defenseur-de-valladolid-9743788.html">
  <img class="media-object lazy-load" src="https://www.football365.fr/wp-content/themes/core/assets/images/blank.gif" data-src="https://cdn.football365.fr/wp-content/uploads/se/2020/02/Mohammed-Salisu-60x60.jpg" alt="Jeune et pas cher, Salisu (Valladolid) fait saliver le Real Madrid">
  </div>
  </div>
  <div class="media-body media-middle">
  <h3 class="widget-fil-info-item-title"> <a href="https://www.football365.fr/real-madrid-pret-a-payer-clause-dun-defenseur-de-valladolid-9743788.html">Jeune et pas cher, Salisu (Valladolid) fait saliver le Real Madrid</a> </h3>
  <div class="widget-fil-info-item-date">12 f�vrier 2020 � 13h45</div>
  </div>
  <span class="widget-fil-info-item-count">2</span>
  </div> 
  <div class="media widget-fil-info-item">
  <div class="media-left widget-fil-info-item-img">
  <div data-href="https://www.football365.fr/destination-exotique-edinson-cavani-psg-9743767.html">
  <img class="media-object lazy-load" src="https://www.football365.fr/wp-content/themes/core/assets/images/blank.gif" data-src="https://cdn.football365.fr/wp-content/uploads/se/2020/01/cavani-60x60.jpg" alt="Une destination exotique pour Edinson Cavani (PSG) ?">
  </div>
  </div>
  <div class="media-body media-middle">
  <h3 class="widget-fil-info-item-title"> <a href="https://www.football365.fr/destination-exotique-edinson-cavani-psg-9743767.html">Une destination exotique pour Edinson Cavani (PSG) ?</a> </h3>
  <div class="widget-fil-info-item-date">12 f�vrier 2020 � 13h00</div>
  </div>
  <span class="widget-fil-info-item-count">3</span>
  </div> 
  <div class="media widget-fil-info-item">
  <div class="media-left widget-fil-info-item-img">
  <div data-href="https://www.football365.fr/sadio-mane-liverpool-dattaque-apres-trois-semaines-dabsence-9743758.html">
  <img class="media-object lazy-load" src="https://www.football365.fr/wp-content/themes/core/assets/images/blank.gif" data-src="https://cdn.football365.fr/wp-content/uploads/se/2020/02/LIVERPOOL_MANE_120220-60x60.jpg" alt="Sadio Man� (Liverpool) d'attaque apr�s trois semaines d'absence">
  </div>
  </div>
  <div class="media-body media-middle">
  <h3 class="widget-fil-info-item-title"> <a href="https://www.football365.fr/sadio-mane-liverpool-dattaque-apres-trois-semaines-dabsence-9743758.html">Sadio Man� (Liverpool) d'attaque apr�s trois semaines d'absence</a> </h3>
  <div class="widget-fil-info-item-date">12 f�vrier 2020 � 12h40</div>
  </div>
  <span class="widget-fil-info-item-count">4</span>
  </div> 
  <div class="media widget-fil-info-item">
  <div class="media-left widget-fil-info-item-img">
  <div data-href="https://www.football365.fr/avantmatch/chaine-streaming-enjeux-savoir-lyon-marseille-coupe-de-france-9743701.html">
  <img class="media-object lazy-load" src="https://www.football365.fr/wp-content/themes/core/assets/images/blank.gif" data-src="https://cdn.football365.fr/wp-content/uploads/se/2020/02/Alvaro-Gonzalez-Marseille-60x60.jpg" alt="Cha�ne, streaming, enjeux... Tout savoir sur Lyon-Marseille en Coupe de France">
  </div>
  </div>
  <div class="media-body media-middle">
  <h3 class="widget-fil-info-item-title"> <a href="https://www.football365.fr/avantmatch/chaine-streaming-enjeux-savoir-lyon-marseille-coupe-de-france-9743701.html">Cha�ne, streaming, enjeux... Tout savoir sur Lyon-Marseille en Coupe de France</a> </h3>
  <div class="widget-fil-info-item-date">12 f�vrier 2020 � 12h31</div>
  </div>
  <span class="widget-fil-info-item-count">5</span>
  </div>  --}}
   
@endsection