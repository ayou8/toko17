<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="Toko online produk indonesia qualitas dunia, mari kita cintai produk dalam negeri" />
  <meta name="keywords" content="fashion, busana muslim, sepatu, pakaian olahraga, baju olah raga, baju kaos, baju kemeja, jilbab, gamis, mukena, tas ransel" />
     
  <title>Aiyub</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('css/app.css') }} " rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
 -->        <link rel="shortcut icon" sizes="114x114" href="http://img01.rl0.ru/00ca8ffd0e3ddc9ac5a8325608516028/c1169x1178/media-s3-us-east-1.ceros.com/nflpa/images/2016/01/02/8bb84d7bb2b5e3e3495609f090799922/17.png">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
        <link rel="shortcut icon" sizes="114x114" href="http://img01.rl0.ru/00ca8ffd0e3ddc9ac5a8325608516028/c1169x1178/media-s3-us-east-1.ceros.com/nflpa/images/2016/01/02/8bb84d7bb2b5e3e3495609f090799922/17.png">
<link rel="icon" type="image/gif" href="https://media.giphy.com/media/1wPCFatAgnQ25CwVgI/giphy.gif" />

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
            <a class="nav-link waves-effect" href="#">Keyboard
              <span class="sr-only">(current)</span>
            </a>
          </li>
          
           <li> </li>
        </ul><div class="col-md-8">
<form action="cari">
  <div class="form-row">
    <div class="col-7">
      <input type="text" class="typeahead form-control" placeholder="Cari menu" name="q">
    </div>
    <div class="col-3">
      <select class="form-control " type="text" placeholder="Search" aria-label="Search" >
              <option >All</option>
              <option >Makanan</option>
              <option >Minuman</option>

            </select>
    </div>
    <div class="col-2">
       <button href="#!" class="form-control btn-default" type="submit">  <i class="material-icons">search</i></button>
<!--       <input type="text" class="form-control" placeholder="Zip">
 -->    </div>




        <!-- Right -->
       

      </div></form></div>
<div class="col-md-3" style="margin: 5px">
 <ul class="navbar-nav nav-flex-icons">
          <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-shopping-cart"></i>
   Cart        &nbsp; &nbsp;  <font style="size: 18px"> <?php echo count(Cart::getContent());?> </font>

  </button>
  <div class="dropdown-menu">
  <div class="card" style="width: 18rem;">
  <div class="card-body" >
   <div class="col-md-12">
      <h4>Keranjang Belanja</h4>
            <?php echo "<b>Grand Total Rp".number_format(Cart::getTotal(), 2, ',', '.')."</b>";?>

      <table class="table table-striped" id="collapseExample">
        <thead>
          <tr>
            <th>Produk</th>
            <th>Qty</th>
            <th>Harga @</th>
           
          </tr>
        </thead>
        <tbody >

 
      </table>
    </div>
   
  
    <div class="dropdown-divider"></div><div class="text-center">
    <a class="dropdown-item btn-square btn btn-success" href="checkout">Check Out</a></div>
  </div>
</div>
  
  
</div>
        
</div>
    </div>
  </nav>
  <!-- Navbar -->


  <!--Main layout-->
  <div style="height: 50px;margin-top: 18px"></div>
  <main>
    <div class="container">

      <!--Navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark  mt-3 mb-1" style="background-color: #E60443">

        <!-- Navbar brand -->

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#kategori" aria-controls=""
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="kategori">
          <div class="md-form my-0 ">
          <!-- Links -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">All
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Minuman</a>
            </li>
  
            </li>
 <li class="nav-item">
              <a class="nav-link" href="#">makanan</a>
            </li>
            
          </ul>
          <!-- Links -->
</div></div>
<form action="cari">
  <div class="form-row col-md-12">
   
   
    <div class="col-4">
       <a href="#!" class="btn btn-white" style="padding: 8px">   <b>Join</b></a>
<!--       <input type="text" class="form-control" placeholder="Zip">
 -->    </div>
  </div>
</form>
          <!--  <form class="form-inline ml-auto">
          <div class="md-form my-0 col-md-5">
             <input class="form-control " type="text" id="word" placeholder="Search" aria-label="Search" style="background-color: #fff;width:100%;color: #000;font-size: 12px">
          </div>
          <div class="md-form my-0 col-md-2">
          


            <select class="form-control " type="text" placeholder="Search" aria-label="Search" style="background-color: #fff;color: #000;margin: 5px;width: 130px;padding: 5px;font-size: 12px">
              <option >Semua Kategori</option>
              <option >Fashion</option>
            </select>
          </div>
            <div class="md-form my-0 col-md-2">

          <button href="#!" class="btn btn-outline-white btn-md my-0 ml-sm-2 waves-effect waves-light" type="submit">Search</button></div>
        </form> -->

        <!-- Collapsible content -->

      </nav>
      <!--/.Navbar-->
<!--Carousel Wrapper-->
          @if (session('status'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Selamat</strong> Barang Belanjaan Anda Sudah dimasukkan kedalam keranjang Belanja!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

   @endif
<div class="container">

<div  class="card" style="margin-bottom: 5px ">
<div class="row">   <div class="col-md-2" style="font-size: 10px;color: #000">

	<!-- Card Dark -->
<div class="card-header">
   <strong>makanan</strong>
  </div>
<ul class="list-group list-group-flush">
	<li class="list-group-item">  Makanan Berat</a></li>

   <li class="list-group-item"> Makananan Ringan</a></li>
     <li class="list-group-item"> Umum</a></li>
  <li class="list-group-item">

</ul>
<!-- Section: Testimonials v.1 -->
<!-- Card Dark --></div>
<div class="col-md-8" style="margin-top: 20px">
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
      <img class="d-block w-100" src="http://toko17.id/public/promotion/prom001.png" alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="http://toko17.id/public/promotion/promojacket_.png" alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="http://toko17.id/public/promotion/taspromo_o.png" alt="Third slide">
    </div>
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
<!--/.Carousel Wrapper-->


  

</div>
<div class="col-md-2" style="font-size: 10px"><div class="card-header">
   <strong>Minuman</strong>
  </div>
<!-- Card -->
<ul class="list-group list-group-flush">
  <li class="list-group-item">
   Minuman Berat
  </li>
   <li class="list-group-item"> Minuman Ringan</a></li>
 
 </ul>
<!-- Card -->

</div>

</div>
</div>

</div>

<!--/.Carousel Wrapper-->

      <!--Section: Products v.3-->
      <h2><strong>Promo Terbaru</strong></h2>
      <section class="text-center "> 
        <!--Grid row-->

        <div class="row wow fadeIn">

          <!--Grid column-->

            

        </div>
        <!--Grid row-->

</li>
</ul>

      </section>
      <!--Section: Products v.3-->
      <section class="text-center ">
        <!--Grid row-->

        <div class="row wow fadeIn">

          
        </div>
        <!--Grid row-->

</li>
</ul>

      </section>
      <!--Pagination-->
      <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">

          <!--Arrow left-->
         
        </ul>
      </nav>
      <!--Pagination-->
<!-- Modal: modalQuickView -->
<div class="card text-center">
  <div class="card-body" style="width: 100%;padding: 5px">
    <h4 class="card-title">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- bannerbawah -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5998054285587200"
     data-ad-slot="6458386047"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </h4>
   
  </div>
</div>
      <section class="text-center ">
        <!--Grid row-->

        <div class="row wow fadeIn">

          <!--Grid column-->

            


        </div>
        <!--Grid row-->

</li>
</ul>

      </section>
      <!--Section: Products v.3-->
 <h2><strong>Fashion</strong></h2>
      <section class="text-center ">
        <!--Grid row-->

        <div class="row wow fadeIn">

          <!--Grid column-->

             

        </div>
        <!--Grid row-->

</li>
</ul>

      </section>
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
            <h5 class="text-uppercase">Contact</h5>

            <ul class="list-unstyled">
              <li><i class="fa fa-whatsapp"></i>
              <a href="https://api.whatsapp.com/send?phone=6281360313113&amp;text=Assalamualaikum>Hubungi Via WA</a></li>
     
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
                <i class="fa fa-caret-right"></i>About Our Shop</a></li>
              </li>
              <li>
               <i class="fa fa-caret-right"></i>Our Team</a></li>
              </li>
              <li>
                <i class="fa fa-caret-right"></i>Our Blog</a></li>
              </li>
            </ul>



          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2021 Copyright:
      <a href="#"> aiyub</a>
    </div>
    <!-- Copyright -->

  <!-- Footer -->
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->

<!--   <script type="text/javascript" src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
 -->  <!-- Bootstrap tooltips -->
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
    var path = "{{ route('autocomplete') }}";
    $('input.typeahead').typeahead({
        source:  function (query, process) {
        return $.get(path, { query: query }, function (data) {
                return process(data);
            });
        }
    });
</script>
   
</body>

</html>