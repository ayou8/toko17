<!DOCTYPE html>
<html lang="en">

<head>

    <title> <?php echo "Toko17.com- ".$all_data[0]->nama_produk; ?></title>

 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="keywords" content="<?php echo "Toko17.com - ".$all_data[0]->nama_produk; ?>">
  <meta name="developer" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta property="og:url"           content="{{ url()->current() }}">
        <meta property="og:type"          content="website" />
        <meta property="og:title"         content="{{ $all_data[0]->nama_produk }}" />
        <meta property="og:description"   content="<?php 
            echo htmlspecialchars($all_data[0]->spesifikasi);?>" />
          
        <meta property="og:fb:app_id"   content="134169943958988" />

        <meta property="og:image"         content="https://tokokids.com/assets/uploads/products/<?php echo $all_data['gambar'][0]->nama_gambar;?>" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="100" />
        <meta property="og:image:height" content="80" />
        <meta property="og:image:alt" content="{{$all_data[0]->nama_produk}}" />

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
<script>window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));</script>
<style type="text/css">
  .you-para{
  position:relative;
  float:left;
  width: 50%;
}
</style>

</head>

<body>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.12&appId=1731352243581812&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
 <?php   echo "<tr><td>".$i." - ".$value->name."</td>"; echo "<td>".$value->quantity."</td>"; echo "<td>Rp".number_format($value->price, 2, ',', '.')."</td></tr>";?> 

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
  <div style="height: 48px"></div>
  <nav class="navbar navbar-expand-lg navbar-dark  mt-3" style="background-color: #E60443">

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
           <form class="form-inline ml-auto"  action="{{ url('/cari') }}">
          <div class="md-form my-0">
           
          </div>
          <div class="md-form my-0">
             
            <input class="form-control typeahead " type="text" placeholder="Search" aria-label="Search" style="background-color: #fff;color: #000;padding: 5px;width: 320px;font-size: 12px" name="q">
            <select class="form-control " type="text" placeholder="Search" aria-label="Search" style="background-color: #fff;color: #000;margin: 5px;width: 130px;padding: 8px;font-size: 12px">
              <option >Semua Kategori</option>
              <option >Fashion</option>
            </select>
          </div>
          <button href="#!" class="form-control btn-default" type="submit">  <i class="material-icons">search</i></button>
        </form>

        </div>
        <!-- Collapsible content -->

      </nav>
  <!--Main layout-->
  <main class="mt-5 ">
    
<div class="container">@if (session('status'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Selamat</strong> Barang Belanjaan Anda Sudah dimasukkan kedalam keranjang Belanja!.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

   @endif
 </div>
<!-- Modal: modalQuickView -->

    <div class="container dark-grey-text "><ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home
</a></li>
    <li class="breadcrumb-item"><a href="#">{{ $all_data[0]->mainkategori }}</a></li>
    <li class="breadcrumb-item active">{{ $all_data[0]->nama_produk }}</li>
</ol>
 <div class="row">
          <div class="col-md-4">

            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
              <!--Slides-->
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="https://tokokids.com/assets/uploads/products/<?php echo $all_data[0]->nama_gambar;?>"
                    alt="First slide">
                </div>
                <?php foreach ($all_data['gambar'] as $key => $value) {
                  # code...
               ?>
                <div class="carousel-item">
                  <img class="d-block w-100" src="https://tokokids.com/assets/uploads/products/<?php echo $value->nama_gambar;?>"
                    alt="">
                </div>
               <?php
             }
             ?>
              </div>
              <!--/.Slides-->
              <!--Controls-->
              <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              
            </div>
            <!--/.Carousel Wrapper-->
              Share: 
<h3>
<div class="fb-share-button" data-href="{{ url()->current() }}" data-layout="box_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Bagikan</a></div>
<a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text= {{ $all_data[0]->nama_produk }} #toko17.id"
  data-size="large">
Tweet</a> <a href="https://api.whatsapp.com/send?text={{url()->current() }}"><font><i class="fa fa-whatsapp"></i></font></a></h3>
          </div><div class=""></div>
          <div class="col-lg-6">
         
           

            <!--Accordion wrapper-->
            <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

              <!-- Accordion card -->
              <div class="card ">

                <!-- Card header -->
                <div class="card-header text-md-left" role="tab" id="headingOne" style="background-color: #fff">
                    <h2 class="h2-responsive product-name black-text">
              <strong><?php echo $all_data[0]->nama_produk;?></strong>
            </h2>
                   <h4 class="h4-responsive">
              <span class="red-text" style="size: 16px">
                <strong><B>Rp{{ number_format($all_data[0]->harga, 2, ',', '.') }}</B></strong>
              </span>
             
            </h4>
                    

                </div>

                <!-- Card body -->
             
                  <div class="card-body"><h5 class="mb-0"><strong>
                      Deskripsi </strong>
                    </h5>
                        {{  $all_data[0]->deskripsi }} <p />
                        <div class="fb-like" 
      data-href="{{ url()->current() }}" 
      data-layout="standard" 
      data-action="like" 
      data-show-faces="true">
    </div>
                  </div>
                 
              </div>
              <!-- Accordion card -->

              <!-- Accordion card -->
              <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingTwo">
                  <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false"
                    aria-controls="collapseTwo">
                    <h5 class="mb-0">
                      Details <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                  <div class="card-body">
                    {{  $all_data[0]->spesifikasi }}
                  </div>
                </div>
              </div>
              <!-- Accordion card -->

              <!-- Accordion card -->
              <div class="card">

                <!-- Card header -->
                <div class="card-header" role="tab" id="headingThree">
                  <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false"
                    aria-controls="collapseThree">
                    <h5 class="mb-0">
                      Shipping <i class="fa fa-angle-down rotate-icon"></i>
                    </h5>
                  </a>
                </div>

                <!-- Card body -->
                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                  data-parent="#accordion">
                  <div class="card-body">Cek Biaya Kirim Ke Darah Anda, Pilih Provinsi dan Kab/Kota.
                    <iframe src="https://tokokids.com/dashboard/ns" style="border: 0px; width: 100%;min-height:300px"></iframe>
                  </div>
                </div>
              </div>
              <!-- Accordion card -->
            </div>
            <!--/.Accordion wrapper-->
                <form  action="{{ URL::to('troli') }}" class="form-inline" role="form">

            <!-- Add to Cart -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-8">
                  <div class="md-form">
                    <select class="form-control  colorful-select dropdown-primary">
                      <option value="" disabled selected >Piliha Warna</option>
                      <option value="1">White</option>
                      <option value="2">Black</option>
                      <option value="3">Pink</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="md-form">
                    <select class=" form-control   mdb-select colorful-select dropdown-primary">
                      <option value="" disabled selected>Pilih Ukuran</option>
                      <option value="1">XS</option>
                      <option value="2">S</option>
                      <option value="3">L</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="text-center">

                <div class="buy">
                    {{ csrf_field() }}
                    <input type="hidden" name="product_id" value="{{ $all_data[0]->kode_produk }}">
                    <input type="hidden" name="product_name" value="{{ $all_data[0]->nama_produk }}">
                    <input type="hidden" name="product_price" value="{{ $all_data[0]->harga }}">
                    <input type="number" name="product_qty" value="1" class="form-control col-xs-6">
                    <button type="submit"  class="btn btn-red">Beli                  <i class="fa fa-cart-plus ml-4" aria-hidden="true"></i>
</button>
                  </form>
                  </div>
              </div>
            </div>
            <!-- /.Add to Cart -->
          </div>
          <div class="col-md-2 col-xs-3 card testimonial-card">
        <!--Background color-->
        <div class="card-up info-color"></div>
        <!--Avatar-->
        <div class="avatar mx-auto white text-center" style="width: 70% ;padding:10px">
          <img src="http://toko17.id/public/toko17c.png" class="rounded img-fluid">
        </div>
        <div class="card-body">
          <a class="twitter-follow-button"
  href="https://twitter.com/hiasana_store">
Follow @Toko17</a>
          <!--Quotation-->
          <p class="dark-grey-text mt-4">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- mobile -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-5998054285587200"
           data-ad-slot="1739805662"
           data-ad-format="auto"
           data-full-width-responsive="true"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>          </p>
        </div>
      </div></div>
        </div>
      <!--Grid row-->
    
      </div>
      <!--Grid row-->

  </main>
  <!--Main layout-->
<section class="text-center my-5">
<div class="container">
  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Produk Lainnya</h2>
  <!-- Section description -->
 

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <?php foreach ($all_data['relation'] as $key => $value) {
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
                    <a href="'.URL::to('/produkdetail')."/".$value->seo.'" class="dark-grey-text">'.$value->nama_produk.'
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
    ?>
    
    <!-- Grid column -->
<?php } ?>
    <!-- Grid column -->
   

 

  </div>
  <!-- Grid row -->
</div>
</section>

<!-- Section: Products v.4 -->
  <!--Footer--><div class="container">
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
              <li><i class="fa fa-whatsapp"></i>  <a href="https://api.whatsapp.com/send?phone=6281360313113&text=Assalamualaikum%20Toko17.id">Chat Via WA</a></li>
              <li><i class="fa fa-envelope-o"></i><a href=""> info@tokokids.com</a></li>
              <li><i class="fa fa-facebook"></i><a href="https://www.facebook.com/tokokidsdotcom/"> tokokids</a></li>
              <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/tokokids.com_/"> tokokids.com_</a></li>

            </ul>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h5 class="text-uppercase">Links</h5>

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
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>