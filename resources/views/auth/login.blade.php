<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>aiyubm.my.id</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/app.css') }} " rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/bootstrap.min.css') }}" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <link rel="shortcut icon" sizes="114x114" href="http://img01.rl0.ru/00ca8ffd0e3ddc9ac5a8325608516028/c1169x1178/media-s3-us-east-1.ceros.com/nflpa/images/2016/01/02/8bb84d7bb2b5e3e3495609f090799922/17.png">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<style type="text/css">
  .you-para{
  position:relative;
  float:left;
  width: 50%;
}
</style>
</head>

<body>

  <!-- Navbar -->

   <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar" >
    <div class="container">

      <!-- Brand -->

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link waves-effect" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect" href="" target="_blank">Tentang Kami</a>
          </li>
           <li> </li>
        </ul>


        <!-- Right -->
    

    </div>
  </nav>
  <!-- Navbar -->


  <!--Main layout-->
  <div style="height: 78px;"></div>
  <main>
     <div class="container wow fadeIn">

      <!-- Heading -->
      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4"><h3 style="font-weight: bold;padding: 5px"> </b></h3>

          <!--Card-->
          <div class="card">
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">
<div id="carousel-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-1z" data-slide-to="1"></li>
    <li data-target="#carousel-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://img-global.cpcdn.com/recipes/50b11a03b113b3e1/1200x630cq70/photo.jpg" alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="https://i.ytimg.com/vi/WvMhyyW-7CI/maxresdefault.jpg" alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
   
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
           </div>
       </div>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4"><div class="text-center">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
          </h4>
            </div>
          <div class="card">

          <!-- Heading -->
          <!-- Cart -->
           {!! Form::open(array( 'class' => 'card-body' )) !!}

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-10  offset-md-1"> <div class="text-center">           <span class="text-muted text-center"><h2 style="font-weight: bold">Login</h2></span></div>


                  <!--firstName-->
                  <div class="md-form ">
                    <input type="text" id="email" class="form-control" name="email">
                    <label for="email" class="">Email</label>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-10  offset-md-1">

                  <!--lastName-->
                  <div class="md-form">
                    <input type="password" id="password" class="form-control" name="password">
                    <label for="password" class="">Password</label>
                  </div>

                </div>
                <!--Grid column-->

              </div>
                  <div class="form-group row">
                            <div class="col-md-12 offset-md-0">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

           
              <button class="btn btn-danger btn-lg btn-block" type="submit">Login</button>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
            </form>
          <!-- Cart -->

      </div>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->

    </div>
   
  </main>
  <!--Main layout-->
<div class="container">
  <div class="row">
    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="our-services-wrapper mb-60">
              <div class="services-inner">
                <div class="our-services-img">
                <img src="https://www.orioninfosolutions.com/assets/img/icon/Agricultural-activities.png" width="68px" alt="">
                </div>
                <div class="our-services-text" style="padding: 10px">
                  <h4>Metode Pembayaran</h4>
                  <p><img src="https://percetakanpurwakarta.files.wordpress.com/2017/05/metode-pembayaran.jpg" style="width: 100%;"></img></p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="our-services-wrapper mb-60">
              <div class="services-inner">
                <div class="our-services-img">
                </div>
                <div class="our-services-text" style="padding: 10px">
                  <h4>Jasa Pengiriman</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="our-services-wrapper mb-60">
              <div class="services-inner">
                <div class="our-services-img">
                </div>
                <div class="our-services-text" style="padding: 10px">
                  <h4>Proses Pengiriman Barang</h4>
                </div>
              </div>
            </div>
          </div>
  </div>
</div>
    <div> 

    </div>
  </div>

  <!--Footer-->
 <footer class="page-footer font-small pt-4" style="background-color: #E60443">

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left" style="background-color: #E60443">

      <!-- Grid row -->
      <div class="row" >

        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">

          <!-- Content -->
              </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Contact</h5>

            <ul class="list-unstyled">
              <li><i class="fa fa-mobile-phone"></i><a href="">+6281360313113</a></li>
                  </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">CUSTOM SERVICE</h5>

            <ul class="list-unstyled">
              <li>
                <li><a href=""> <i class="fa fa-caret-right"></i>contact</a></li>
              </li>
              <li>
            
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2021 Copyright:
      <a href="#"> muhammad@aiyub</a>
    </div>
    <!-- Copyright -->

  <!-- Footer -->
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->

  <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
    
</script>
<script type="text/javascript">
  $("select[name='propinsi']").change(function(){
      var id_country = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "<?php echo route('kota') ?>",
          method: 'POST',
          data: {id_country:id_country, _token:token},
          success: function(data) {
            $("select[name='city'").html('');
            $("select[name='city'").html(data.options);
          }
      });
  });
</script>
</body>

</html>