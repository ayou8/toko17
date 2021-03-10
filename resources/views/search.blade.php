<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Toko17.id</title>
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

   <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar" style="margin-bottom: 5px ">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand waves-effect" href="{{ URL::to('/') }}" target="_parent">
        <strong class="blue-text"><img src="http://toko17.id/public/toko17c.png" style="width: 180px"></img></strong>
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
            <a class="nav-link waves-effect" href="" target="_blank">Tentang Tokokids</a>
          </li>
           <li> </li>
        </ul>


        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
          <!-- Example single danger button -->
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-shopping-cart"></i>
   Cart        &nbsp; &nbsp;  <font style="size: 18px"> <?php echo count(Cart::getContent());?> </font>

  </button>
  <div class="dropdown-menu">
  <div class="card" style="width: 18rem;">
  <div class="card-body" style="padding: 5px">
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

 <?php 
      # code...
  $i=1;
 foreach ( Cart::getContent() as $value) {
    
    

    
?>
 <?php   echo "<tr><td>".$value->name."</td>"; echo "<td>".$value->quantity."</td>"; echo "<td>Rp".number_format($value->price, 2, ',', '.')."</td></tr>";?> 

<?php $i++; }   ?>
        </tbody>
        
      </table>
    </div>
   
  
    <div class="dropdown-divider"></div><div class="text-center">
    <a class="dropdown-item btn-square btn btn-success" href="{{ url('/checkout') }}">Check Out</a></div>
  </div>
</div>
  
  
</div>
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
              <i class="fa fa-user mr-2"></i>Login
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->


  <!--Main layout-->
  <div style="height: 65px;"></div>
  <main >
    <div class="container">

      <!--Navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #E60443; ">
     	<!-- Button trigger modal-->
<button type="button" class="btn btn-outline-white" data-toggle="modal" data-target="#modalCart" style="padding: 4px">        
	<span class="navbar-toggler-icon"></span>
</button>

<!-- Modal: modalCart -->
<div class="modal fade" id="modalCart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <!--Header-->
     
      <!--Body-->
      <div class="modal-body">

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

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <i class="btn btn-outline-primary" data-dismiss="modal">Close</i>
      </div>
    </div>
  </div>
</div>

        <!-- Navbar brand -->
        <span class="navbar-brand">Keywords:</span>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#kategori" aria-controls=""
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="kategori">
          <div class="md-form my-0 ">
          <!-- Links -->
         
          <!-- Links -->
</div></div>
<form action="cari">
  <div class="form-row col-md-12">
    <div class="col-7">
      <input type="text" class="typeahead form-control" placeholder="Cari Produk" name="q">
    </div>
    <div class="col-3">
      <select class="form-control " type="text" placeholder="Search" aria-label="Search" >
              <option >All</option>
              <option >Fashion</option>
            </select>
    </div>
    <div class="col-2">
       <button href="#!" class="form-control btn-default" type="submit">  <i class="material-icons">search</i></button>
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

<div class="" style="margin-bottom: 5px ">
<div class="row">   


<!-- Section: Testimonials v.1 -->
<!-- Card Dark -->
<div class="col-md-12" style="margin-top: 20px;background-color: #fff">


 <div class="row wow fadeIn">
 	<div class="col-md-12" style="padding: 10px"><?php 
        if(count($q['q'])>0){
            echo "ditemukan sebanyak <strong>". count($q['q'])." data</<strong> dengan kata kunci <B><i>'".$q['key']."'</i></b> <hr/>"; 
          }
          else {

            echo "Data tidak ditemukan dengan kata kunci <strong>".$q['key']."</strong> <hr/>"; 

          }

            ?>
</div>
          <!--Grid column-->

             <?php

                foreach ($q['q'] as $key => $value) {
                   $old= $value->harga;
                   $persen=$old *(20/100);
                    $olp=$old+15000+$persen;
            echo '<div class="col-md-3 col-xs-6 mb-4 you-para" style="background-color:white;border:1px">
              <div class="view overlay">';
          echo     '<a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body text-center">
                <!--Category & Title-->
               
                <h5 style="font-size:14px">
                  <strong>
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold red-text" style="font-size:13px">
                  <strong>Rp'.number_format($value->harga, 2, ',', '.').'</strong>
                </h4>
              
              ';
echo '<hr />
<div class="text-right"><form action="troli">
    <input name="id" type="hidden" value="'.$value->id.'">
    <input name="harga" type="hidden" value="'.$value->harga.'">
    <input name="nama" type="hidden" value="'.$value->nama.'">
    <input name="banyak" type="hidden" value="1">
    <input name="kategori" type="hidden" value="'.$value->nama.'">

 <button class="col-md-12 form-control btn-danger" id="addcart" style="padding:4px">Beli </button>
 </div></form>

</div>
              <!--Card content-->
            
            <!--Card-->

          </div>';


                }


            ?>

        </div>
  <nav class="d-flex justify-content-center wow fadeIn">
        <ul class="pagination pg-blue">
        		<?php $kunci = $q['key']; 
             echo $q['q']->withPath('cari?q='.$kunci.''); ?>
         
        </ul>
      </nav>

</div>

 
</div>
</div>

</div>

<!--/.Carousel Wrapper-->

  
      <!--Section: Products v.3-->
     
   
<!-- Modal: modalQuickView -->
<div class="card text-center">
  <div class="card-body" style="width: 100%;padding: 5px">
   
   
  </div>
</div>
  
      <!--Section: Products v.3-->
 <h2><strong>menu</strong></h2>
      <section class="text-center ">
        <!--Grid row-->

        <div class="row wow fadeIn">

          <!--Grid column-->

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
          <h5 class="text-uppercase">aiyub Resto</h5>
          <p style="color: #FFF">Kami menyediakan minuman dan makanan.</p>

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