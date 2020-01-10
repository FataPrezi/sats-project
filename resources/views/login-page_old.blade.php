@extends('default')
@section('content')

  <div class="page-header clear-filter" filter-color="orange">
    {{-- <div class="page-header-image" style="background-image:url({{asset('../public/asset/assets/img/login.jpg')}});">
    </div> --}}
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <table>
            <form class="form" method="" action="">
              {{-- <div class="card-header text-center">
                <div class="logo-container">
                  <img src="{{asset('../public/asset/assets/img/now-logo.png')}}" alt="">
                </div> --}}
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                <input type="text" class="form-control" placeholder="Nom...">             
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" placeholder="Prenom..." class="form-control" />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" placeholder="Email..." class="form-control" />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" placeholder="Telephone..." class="form-control" />
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" placeholder="Naissance(JJ/MM/ANNEE)..." class="form-control" />
                </div>

               {{--  <div class="input-group no-border input-lg"> 
                    <div class="input-group-prepend"> 
                        <span class="input-group-text">
                            <i class="now-ui-icons text_caps-small"></i>
                          </span>                
                    <div class="datepicker-container">
                        <div class="form-group">
                        </div>
                      </div>
                    <input type="text" class="form-control date-picker" value="Date of Birth" data-datepicker-color="primary" />
                </div>
                  </div> --}}

                  <div class="input-group no-border input-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons text_caps-small"></i>
                      </span>
                    </div>
                    <input type="text" placeholder="CIN..." class="form-control" />
                  </div>
                  <div class="input-group no-border input-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons text_caps-small"></i>
                      </span>
                    </div>
                    <input type="text" placeholder="Statut..." class="form-control" />
                  </div>
                  <div class="input-group no-border input-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons text_caps-small"></i>
                      </span>
                    </div>
                    <input type="text" placeholder="Niveau d'études..." class="form-control" />
                  </div>
                  
              </div>
              <div class="card-footer text-center">
                <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">Envoyer</a>
                <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">Annuler</a>
                <div class="pull-left">
                  <h6>
                    <a href="#pablo" class="link">Create Account</a>
                  </h6>
                </div>
                <div class="pull-right">
                  <h6>
                    <a href="#pablo" class="link">Need Help?</a>
                  </h6>
                </div>
            </form>   
          </table>       
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  


