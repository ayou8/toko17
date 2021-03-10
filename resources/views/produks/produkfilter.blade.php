<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Tokokids.com</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/app.css') }} " rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/bootstrap.min.css') }}" rel="stylesheet">

  
</head>

<body>

  <!-- Navbar -->

  <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar" >
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">
        <strong class="blue-text"><img src="https://tokokids.com/assets/images/lotk.png" style="width: 180px"></img></strong>
      </a>

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
            <a class="nav-link waves-effect" href="https://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">Tentang Tokokids</a>
          </li>
          
        </ul>


        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect">
              <span class="badge red z-depth-1 mr-1" id="todos"> 0 </span>
              <i class="fa fa-shopping-cart"></i>
              <span class="clearfix d-none d-sm-inline-block"> Cart </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="nav-item">
            <a href="login" class="nav-link border border-light rounded waves-effect"
              target="_parent">
              <i class="fa fa-check mr-2"></i>Login
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->


  <!--Main layout-->
  <div style="height: 48px"></div>
  <main>
    <div class="container">

      <!--Navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark  mt-3 mb-5" style="background-color: #E60443">

        <!-- Navbar brand -->
        <span class="navbar-brand">Keywords:</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#kategori" aria-controls="basicExampleNav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="kategori">

          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">All
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">#BajuMuslim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">#MainanAnak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">#CariKado</a>
            </li>

          </ul>
          <!-- Links -->

           <form class="form-inline ml-auto">
          <div class="md-form my-0">
           
          </div>
          <div class="md-form my-0">
            <input class="form-control " type="text" placeholder="Search" aria-label="Search" style="background-color: #fff;color: #000;padding: 5px;width: 320px;font-size: 12px">
            <select class="form-control " type="text" placeholder="Search" aria-label="Search" style="background-color: #fff;color: #000;margin: 5px;width: 130px;padding: 5px;font-size: 12px">
              <option >Semua Kategori</option>
              <option >Fashion</option>
            </select>
          </div>
          <button href="#!" class="btn btn-outline-white btn-md my-0 ml-sm-2 waves-effect waves-light" type="submit">Search</button>
        </form>

        </div>
        <!-- Collapsible content -->

      </nav>
      <!--/.Navbar-->
<!--Carousel Wrapper-->
<nav>
    <div class="nav-wrapper">
      <div class="col ">
        <a href="#!" class="breadcrumb">{{ $all_data['kat'][0]->mainkategori }}
</a>
        
      </div>
    </div>
  </nav>
<div class="container">

<div class="card" style="margin-bottom: 5px ">
<div class="row">   <div class="col-md-3"><!-- Card Dark -->
<ul class="list-group list-group-flush">
  <li class="list-group-item"><strong>Kategori</strong><br/><br/>
    <a href="?filter={{ Crypt::encryptString('5') }}"><img src="https://image.flaticon.com/icons/svg/415/415013.svg" style="width: 22px"> IBU &amp; ANAK </a>
  </li>
   <li class="list-group-item"><a class="xt-nav-link" href="?filter={{ Crypt::encryptString('6') }}"><img src="https://image.flaticon.com/icons/svg/163/163834.svg" alt="High five free icon" style="width: 22px;height: 22px"> BOYS</a></li>
     <li class="list-group-item"><a class="xt-nav-link" href="?filter={{ Crypt::encryptString('4') }}"><img src="https://image.flaticon.com/icons/svg/163/163802.svg" alt="High five free icon" style="width: 22px;height: 22px"> GIRLS</a></li>
  <li class="list-group-item">
<a class="xt-nav-link" href="?filter={{ Crypt::encryptString('2') }}"><img src="https://tokokids.com/assets/icon/302645.png" style="width:22px;height: 22px"> Fashion</a>
  </li>
  <li class="list-group-item"><a href="?filter={{ Crypt::encryptString('1') }}"><img src='https://tokokids.com/assets/icon/417752.png' style="width: 22px" class="fa fa-child" aria-hidden="true"></img> MAINAN / TOYS</a></li>
  <li class="list-group-item"><a class="" href="?filter={{ Crypt::encryptString('7') }}"><img src="https://image.flaticon.com/icons/svg/548/548948.svg" style="width: 22px;height: 22px">MUKENA &amp; HIJAB</a></li>
   

</ul>
<!-- Section: Testimonials v.1 -->
<!-- Card Dark --></div>
<div class="col-md-6" style="margin-top: 20px">
<!--Carousel Wrapper-->
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
      <img class="d-block w-100" src="https://www.thegreatcourses.com/media/catalog/product/cache/1/plus_image/800x451/0f396e8a55728e79b48334e699243c07/9/5/9531.1534513422.jpg" alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="https://tokokids.com/assets/assets/babyyou.jpg" alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="https://www.lynwoodcc.com.au/wp-content/uploads/sites/4/events/lyn-kids-day-generic-1024x576.jpg" alt="Third slide">
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->


  

</div>
<div class="col-md-3">
<!-- Card -->
<ul class="list-group list-group-flush">
  <li class="list-group-item"><strong>Kategori</strong><br/><br/>
    <a href="?filter={{ Crypt::encryptString('5') }}"><img src="https://image.flaticon.com/icons/svg/415/415013.svg" style="width: 22px"> IBU &amp; ANAK </a>
  </li>
   <li class="list-group-item"><a class="xt-nav-link" href="?filter={{ Crypt::encryptString('6') }}"><img src="https://image.flaticon.com/icons/svg/163/163834.svg" alt="High five free icon" style="width: 22px;height: 22px"> BOYS</a></li>
     <li class="list-group-item"><a class="xt-nav-link" href="?filter={{ Crypt::encryptString('6') }}"><img src="https://image.flaticon.com/icons/svg/163/163802.svg" alt="High five free icon" style="width: 22px;height: 22px"> GIRLS</a></li>
  <li class="list-group-item">
<a class="xt-nav-link" href="https://tokokids.com/fashion"><img src="https://tokokids.com/assets/icon/302645.png" style="width:22px;height: 22px"> Fashion</a>
  </li>
  <li class="list-group-item"><a href="https://tokokids.com/produk?kategori=mainan"><img src='https://tokokids.com/assets/icon/417752.png' style="width: 22px" class="fa fa-child" aria-hidden="true"></img> MAINAN / TOYS</a></li>
  <li class="list-group-item"><a class="" href="https://tokokids.com/produk?kategori=pakaian muslim"><img src="https://image.flaticon.com/icons/svg/548/548948.svg" style="width: 22px;height: 22px">MUKENA &amp; HIJAB</a></li>
   

</ul>
<!-- Card -->

</div>

</div>
</div>

</div>

<!--/.Carousel Wrapper-->

      <!--Section: Products v.3-->
      <section class="text-center ">
        <!--Grid row-->
        <div class="row wow fadeIn">


          <!--Grid column-->

             <?php

                foreach ($all_data['mom'] as $key => $value) {
                   $old= $value->harga;
                   $persen=$old *(20/100);
                    $olp=$old+15000+$persen;
                      # code...
            echo '<div class="col-md-3 col-xs-6 mb-4">
                    <div class="card">
              <div class="view overlay">';
              echo '<img src="https://tokokids.com/assets/uploads/products/'.$value->nama_gambar.'" alt="" style="width:100%;height:180px;">';
          echo     '<a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
               
                <h5 style="font-size:14px">
                  <strong>
                    <a href="'.URL::to('/produkdetail')."/".$value->seo.'/'.Crypt::encryptString($value->kode_produk).'" class="dark-grey-text">'.$value->nama_produk.'
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold red-text" style="font-size:15px">
                  <strong>Rp'.number_format($value->harga, 2, ',', '.').'</strong>
                </h4>
              
              ';
echo '<hr />
<div class="text-right">
 <button class="col-md-12 form-control btn-danger" style="padding:4px">Beli </button>
 </div>

</div>
              </div>
              <!--Card content-->
            
            <!--Card-->

          </div>';

                }


            ?>

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Products v.3-->

      <!--Pagination-->
      <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">

          <!--Arrow left-->
          <li class="page-item ">
                       <?php echo $all_data['mom']->withPath('?filter='.$_GET['filter']) ?>

          </li>
        </ul>
      </nav>
      <!--Pagination-->
<!-- Modal: modalQuickView -->
<div class="col-md-12"><div class="card text-center" style="width: 100%;">
  <div class="card-body">
    <h4 class="card-title">Special title treatment</h4>
   
  </div>
</div></div>

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
                <img src="https://www.orioninfosolutions.com/assets/img/icon/Agricultural-activities.png" width="68px" alt="">
                </div>
                <div class="our-services-text" style="padding: 10px">
                  <h4>Jasa Pengiriman</h4>
                  <p><img src="https://tasjebret.com/image/cache/catalog/logo-jasa-kirim-pos-jne-tiki-870x444.png" style="width: 100%"></img></p>
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
                  <p><img src="https://podotuku.com/images/pengiriman_barang_new.png" style="width: 100%"></p>
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
          <h5 class="text-uppercase">tokokids.com</h5>
          <p style="color: #FFF">Kami adalah toko online untuk menyediakan kebutuhan dan perlengkapan anak-anak,bayi dan ibu. Kami memfokuskan diri dalam bidang Kids,Baby&Moms baik dalam partai besar maupun kecil.</p>

        </div>
        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none pb-3">

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#"> tokokids.com</a>
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
</body>
<script>
$(function(){
    $('.updateTodoCount').click(function(){
        $.ajax({
            url: "/total-todos",
            success: function( response ) {
                $('#totalTodos').text( response );
                        setInterval(ajaxCall, 3000);

            }
        });
    });
});
</script>
</html>