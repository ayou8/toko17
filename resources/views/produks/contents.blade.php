  
@extends('layouts.appproduk')
@section('content')
  <div class="container">

      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark  mt-3 mb-5" style="background-color: #E60443">

        <!-- Navbar brand -->
        <span class="navbar-brand">Keywprds:</span>

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
<div class="container">
<div class="row">   <div class="col-md-3"><!-- Card Dark -->
<ul class="list-group list-group-flush" style="font-size: 13px">
  <li class="list-group-item"><strong>Kategori</strong><br/><br/>
    <a href="kategori/filter?filter={{ Crypt::encryptString('5') }}"><img src="https://image.flaticon.com/icons/svg/415/415013.svg" style="width: 22px"> IBU &amp; ANAK </a>
  </li>
   <li class="list-group-item"><a class="xt-nav-link" href="kategori/filter?filter={{ Crypt::encryptString('6') }}"><img src="https://image.flaticon.com/icons/svg/163/163834.svg" alt="High five free icon" style="width: 22px;height: 22px"> BOYS</a></li>
     <li class="list-group-item"><a class="xt-nav-link" href="https://tokokids.com/produk?kategori=girls"><img src="https://image.flaticon.com/icons/svg/163/163802.svg" alt="High five free icon" style="width: 22px;height: 22px"> GIRLS</a></li>
  <li class="list-group-item">
<a class="xt-nav-link" href="https://tokokids.com/fashion"><img src="https://tokokids.com/assets/icon/302645.png" style="width:22px;height: 22px"> Fashion</a>
  </li>
  <li class="list-group-item"><a href="https://tokokids.com/produk?kategori=mainan"><img src='https://tokokids.com/assets/icon/417752.png' style="width: 22px" class="fa fa-child" aria-hidden="true"></img> MAINAN / TOYS</a></li>
  <li class="list-group-item"><a class="" href="https://tokokids.com/produk?kategori=pakaian muslim"><img src="https://image.flaticon.com/icons/svg/548/548948.svg" style="width: 22px;height: 22px">MUKENA &amp; HIJAB</a></li>
  <li class="list-group-item"><a class="xt-nav-link" href="https://tokokids.com/produk?kategori=perlengkapan-sekolah"><img src="https://tokokids.com/assets/icon/201615.png" style="width: 22px;height: 22px"> Perlengkapan Sekolah</a></li>
  <li class="list-group-item"><a class="xt-nav-link" href="https://tokokids.com/produk?kategori=Souvenir-Aksesoris"><img src="https://tokokids.com/assets/icon/614665.png" style="width:  24px"> Souvenir &amp; Accessories
</a></li>
    <li class="list-group-item">
      <a class="xt-nav-link" href="https://tokokids.com/produk?kategori=Souvenir-Aksesoris"><img src="https://cdn0.iconfinder.com/data/icons/daily-boxes/150/gift-box-64.png
" style="width:  24px">
   Cari Kado</li>

</ul>
<!-- Section: Testimonials v.1 -->
<!-- Card Dark --></div>
<div class="col-md-7">

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

<!-- Grid row -->

    <!-- Grid column -->

<div class="col-md-12" style="padding: 1px;margin: 2px">
<div class="card" style="background-color: #f44248;padding:10px;color: #FFF">
  <h4><strong><font>PROMOPENGGUNABARU</font></strong></h4>
  <p>This is where I would type real copy if this wasn't just in codepen!</p>
</div>
</div>

    <!-- Grid column -->

  

</div>
<div class="col-md-2">
<!-- Card -->
<div class="card" style="background-color:#fff">

  <!-- Card image -->
  
  <!-- Button -->

  <!-- Card content -->
  <div class="card-body">

    <!-- Title -->
    <h4 class="card-title">    <button type="submit" class="btn btn-danger btn-md">Join</button>
</h4>
    <hr>
    <!-- Text -->
    <p class="card-text justify-content-center" >Silahkan Join menjadi anggota Tokokids dan dapatkan update produk tebaru, Diskon berbagai produk dan marchandise menarik selama persediaan masih ada.</p>

  </div>

  <!-- Card footer -->
  <div class="rounded-bottom mdb-color lighten-1 text-center pt-3">
    <ul class="list-unstyled list-inline font-small">
      <li class="list-inline-item pr-2 white-text"><i class="fa fa-bell pr-1"></i>@tokokids</li>
      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fa fa-comments-o pr-1"></i>12</a></li>
      <li class="list-inline-item pr-2"><a href="#" class="white-text"><i class="fa fa-facebook pr-1"> </i>21</a></li>
      <li class="list-inline-item"><a href="#" class="white-text"><i class="fa fa-twitter pr-1"> </i>5</a></li>
    </ul>
  </div>

</div>
<!-- Card -->

</div>

</div>
</div>
<div class="row text-justify" ><!-- Card group -->

<div class="col-md-4 col">
<div class="promoBox danger-box" >
  <h4><strong>PROMOCASHBACK</strong></h4>
  <p>This is where I would type real copy if this wasn't just in codepen!</p>
</div>
</div>
<div class="col-md-4 col">
<div class="promoBox danger-box text-right">
  <h4><strong>PROMOONGKIR</strong></h4>
  <p>This is where I would type real copy if this wasn't just in codepen!</p>
</div>
</div>
<div class="col-md-4 col">
<div class="promoBox danger-box text-right">
  <h4><strong>PROMOMARCHINDHISE</strong></h4>
  <p>This is where I would type real copy if this wasn't just in codepen!</p>
</div>
</div>
</div>
</div>
<!--/.Carousel Wrapper-->
<div class="container">
<div class="row">
      <!--Section: Products v.3-->
      <div class="col-md-12"><h2>Mom & Kids</h2></div>
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          
            <?php
                foreach ($all_data['mom'] as $key => $value) {
                   $old= $value->harga;
                   $persen=$old *(20/100);
                    $olp=$old+15000+$persen;
                      # code...
            echo '<div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
              <div class="view overlay">';
              echo '<img src="https://tokokids.com/assets/uploads/products/'.$value->nama_gambar.'" alt="" style="width:100%;height:180px;">';
          echo     '<a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body text-center">'.$value->mainkategori.'
                <!--Category & Title-->
               
                <h5>
                  <strong>
           
                    <a href="'.URL::to('/produkdetail')."/".$value->seo.'/'.Crypt::encryptString($value->kode_produk).'" class="dark-grey-text">'.$value->nama_produk.'
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold black-text" style="font-size:15px">
                  <strong>Rp'.number_format($value->harga, 2, ',', '.').'</strong>
                </h4>
              <button class="form-control btn-danger">Beli </button>';
echo '<hr /><strong><span class="old-price" style="font-size: 15px"><del style="color: #f00">Rp'.number_format($olp, 2, ',', '.').'</del></span></strong>

              </div>
              <!--Card content-->
            </div>
            <!--Card-->

          </div>';

                }

            ?>

            <!--Card-->
       
          <!--Grid column-->

          <!--Grid column-->
         


       

        </div>
        <!--Grid row-->

   
      </section>
       <div class="col-md-12"><h2>Makanan dan Nutrisi</h2></div>
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          
            <?php
                foreach ($all_data['nutrisi'] as $key => $value) {
                   $old= $value->harga;
                   $persen=$old *(20/100);
                    $olp=$old+15000+$persen;
                      # code...
            echo '<div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
              <div class="view overlay">';
              echo '<img src="https://tokokids.com/assets/uploads/products/'.$value->nama_gambar.'" alt="" style="width:100%;height:180px;">';
          echo     '<a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body text-center">'.$value->mainkategori.'
                <!--Category & Title-->
               
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">'.$value->nama_produk.'
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold black-text" style="font-size:15px">
                  <strong>Rp'.number_format($value->harga, 2, ',', '.').'</strong>
                </h4>
              <button class="form-control btn-danger">Beli </button>';
echo '<hr /><strong><span class="old-price" style="font-size: 15px"><del style="color: #f00">Rp'.number_format($olp, 2, ',', '.').'</del></span></strong>

              </div>
              <!--Card content-->
            </div>
            <!--Card-->

          </div>';

                }

            ?>

            <!--Card-->
       
          <!--Grid column-->

          <!--Grid column-->
         


       

        </div>
        <!--Grid row-->

   
      </section>
        <div class="col-md-12"><h2>Fashion</h2></div>
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          
            <?php
                foreach ($all_data['fashion'] as $key => $value) {
                   $old= $value->harga;
                   $persen=$old *(20/100);
                    $olp=$old+15000+$persen;
                      # code...
            echo '<div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
              <div class="view overlay">';
              echo '<img src="https://tokokids.com/assets/uploads/products/'.$value->nama_gambar.'" alt="" style="width:100%;height:180px;">';
          echo     '<a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body text-center">'.$value->mainkategori.'
                <!--Category & Title-->
               
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">'.$value->nama_produk.'
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold black-text" style="font-size:15px">
                  <strong>Rp'.number_format($value->harga, 2, ',', '.').'</strong>
                </h4>
              <button class="form-control btn-danger">Beli </button>';
echo '<hr /><strong><span class="old-price" style="font-size: 15px"><del style="color: #f00">Rp'.number_format($olp, 2, ',', '.').'</del></span></strong>

              </div>
              <!--Card content-->
            </div>
            <!--Card-->

          </div>';

                }

            ?>

            <!--Card-->
       
          <!--Grid column-->

          <!--Grid column-->
         


       

        </div>
        <!--Grid row-->

   
      </section>
       <div class="col-md-12"><h2>Mainan</h2></div>
      <section class="text-center mb-4">

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          
            <?php
                foreach ($all_data['mainan'] as $key => $value) {
                   $old= $value->harga;
                   $persen=$old *(20/100);
                    $olp=$old+15000+$persen;
                      # code...
            echo '<div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
              <div class="view overlay">';
              echo '<img src="https://tokokids.com/assets/uploads/products/'.$value->nama_gambar.'" alt="" style="width:100%;height:180px;">';
          echo     '<a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>

              <!--Card content-->
              <div class="card-body text-center">'.$value->mainkategori.'
                <!--Category & Title-->
               
                <h5>
                  <strong>
                    <a href="" class="dark-grey-text">'.$value->nama_produk.'
                    </a>
                  </strong>
                </h5>

                <h4 class="font-weight-bold black-text" style="font-size:15px">
                  <strong>Rp'.number_format($value->harga, 2, ',', '.').'</strong>
                </h4>
              <button class="form-control btn-danger">Beli </button>';
echo '<hr /><strong><span class="old-price" style="font-size: 15px"><del style="color: #f00">Rp'.number_format($olp, 2, ',', '.').'</del></span></strong>

              </div>
              <!--Card content-->
            </div>
            <!--Card-->

          </div>';

                }

            ?>

            <!--Card-->
       
          <!--Grid column-->

          <!--Grid column-->
         


       

        </div>
        <!--Grid row-->

   
      </section>
      <!--Section: Products v.3-->

      <!--Pagination-->
    
      <!--Pagination-->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <h2>OUR SERVICES</h2>
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
                  <h4>Proses</h4>
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

    @endsection
