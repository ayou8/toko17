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
    <a class="dropdown-item btn-square btn btn-success" href="checkout">Check Out</a></div>
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
  <div style="height: 55px;"></div>
  <main>
     <div class="container wow fadeIn">

      <!-- Heading -->
\
      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4"><h3 style="font-weight: bold;padding: 5px"> Form Data Pembeli</b></h3>

          <!--Card-->
          <div class="card">

            <!--Card content-->
               {!! Form::open(array( 'class' => 'card-body' )) !!}

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--firstName-->
                  <div class="md-form ">
                    <input type="text" id="firstName" class="form-control" name="firstname">
                    <label for="firstName" class="">Nama Depan</label>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-2">

                  <!--lastName-->
                  <div class="md-form">
                    <input type="text" id="lastName" class="form-control" name="lastname">
                    <label for="lastName" class="">Nama Belakang</label>
                  </div>

                </div>
                <!--Grid column-->

              </div>
                 <div class="row">

                <!--Grid column-->
                <div class="col-md-4 mb-2">

                  <!--firstName-->
                  <div class="md-form ">
                    <input type="text" id="hp" class="form-control" required="true" name="hp">
                    <label for="Handphone" class="">Handphone </label>
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-8 mb-2">

                  <!--lastName-->
                  <div class="md-form">
                     <input type="text" id="email" class="form-control" required="true" name="email">
                      <label for="email" class="">Email </label>
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <!--Username-->
              <!-- <div class="md-form input-group pl-0 mb-5">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control py-0" placeholder="Username" aria-describedby="basic-addon1">
              </div> -->

              <!--email-->
        

              <!--address-->
              <div class="md-form mb-5">
                <input type="text" id="address" class="form-control" placeholder="Masukkan Alamat Anda" name="alamat">
                <label for="address" class="">Alamat</label>
              </div>

              <!--address-2-->
              <div class="md-form mb-5">
                <input type="text" id="address-2" class="form-control" placeholder="Contoh : Nama gedung atau komplek" name="address2">
                <label for="address-2" class="">Alamat 2</label>
              </div>

              <!--Grid row-->
              <div class="row">

                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                  <label for="country">Provinsi</label>
                  <select name="propinsi" class="form-control"> 

                          <option value="">Pilih Provinsi</option>


                          @foreach ($states as $state)
                          <option value="{{ $state->idprovinsi }}">{{ $state->provinsi }}</option>
                          @endforeach
                       </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="state">Kabupaten</label>
                  <select name="city" class="form-control" id="city">   
                          <option value="">-- Provinsi Belum Dipilih --</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-4 col-md-6 mb-4">

                  <label for="zip">Zip</label>
                  <input type="text" class="form-control" id="zip" placeholder="" required name='kodepos'>
                  <div class="invalid-feedback">
                    Zip code required.
                  </div>

                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->

              <hr>

           
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>

            </form>

          </div>
          <!--/.Card-->

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

          <!-- Heading -->
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Keranjang Belanja Anda</span>
            <span class="badge badge-pill" style="background-color: #f00;"><?php echo count(Cart::getContent());?></span>
          </h4>

          <!-- Cart -->
          <ul class="list-group mb-3 z-depth-1"><li style="padding: 10px;text-align: left;"> <B>Nama Produk </B></li>
        <?php foreach ( Cart::getContent() as $value) {

                  echo '<li class="list-group-item d-flex justify-content-between lh-condensed">';

?>
                <div>
               <?php  echo "<h6 class='my-0'>".$value->name."</h6>";
                      echo "<small class='text-muted'>Banyak : ".$value->quantity." x @Rp".number_format($value->price, 2, ',', '.')."</small></div>";
                      $tot=$value->price*$value->quantity;
                      echo "<span class='text-muted'>Rp".number_format($tot, 2, ',', '.')."</span>"; ?>

<?php $i++; }   


?>
            <li style="padding: 10px;text-align: right;size: 18px;font-weight: bold;"> <strong>Total : Rp <?php echo number_format(Cart::getTotal(), 2, ',', '.') ?></strong></li>
           
          </ul>
          <!-- Cart -->

          <!-- Promo code -->
          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Redeem</button>
              </div>
            </div>
          </form>
          <!-- Promo code -->

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
              <li><i class="fa fa-mobile-phone"></i><a href="">+6281360313113</a></li>
              <li><i class="fa fa-envelope-o"></i><a href=""> info@tokokids.com</a></li>
              <li><i class="fa fa-facebook"></i><a href="https://www.facebook.com/tokokidsdotcom/"> tokokids</a></li>
              <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/tokokids.com_/"> tokokids.com_</a></li>

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
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#"> toko17.id</a>
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