    
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>YouMaju &mdash; Profile</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <meta charset="utf-8">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> 


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>

  <div class="site-wrap">

    <!-- <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> -->
    
    <header class="site-navbar" role="banner">

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
  <div class="imagee"><h1><a href="index.html">
     <img src="{{asset('images/youMaju_polos2.png')}}">
      </a></h1></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" 
    data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Beranda
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Notifikasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pesan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ url('/logout') }}">Keluar</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>
    </header>
      <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/pr.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          
          <div class="profile" data-aos="fade-up" data-aos-delay="400">
          <img src="<?= $user['profilePic']?>">
          <div>
            <h2 class="text-white font-weight-light font-weight-bold"><?= $user['nama'] ?>
                      <a href="#"> <i class="fa fa-cog" aria-hidden="true" data-toggle="modal" data-target="#modalLoginAvatar"></i></a>
                      </h2>
          </div>
          <div class="subs">
            <p class="breadcrumb-custom">  
             <h4> <i class="fa fa-youtube" aria-hidden="true"></i><a><?= $user['subsCount']?></a><a> Subscriber</a></p>
        </div>           
          </div>
        </div>
      </div>
    </div> 

    <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="<?= $user['profilePic']?>" alt="avatar" class="rounded-circle img-responsive">       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="false">&times;</span>   
         
      </div>
      <!--Body-->
      <div class="modal-body mb-1">
          <div class="col">
            <div class="form-group">
              <h5><label>Nama</label></h5>
               <input class="form-control" type="text" name="username" placeholder="Nama Lengkap" value="<?= $user['nama']?>">
             </div>
            </div>
               
           <div class="col">
            <div class="form-group">
             <h5><label>Email</label><h5>
               <input class="form-control" type="text" placeholder="user@example.com">
             </div>
             </div>

             <div class="col">
              <div class="form-group">
               <h5><label>Tanggal Lahir</label><h5>
               <input class="form-control" type="date" name="bday">
             </div>
             </div>

             <div class="col">
              <div class="form-group">
               <h5><label>Jenis Kelamin</label><h5>
               <input class="form-control" type="text" placeholder="P/L">
             </div>
             </div>
           </div>     
      
        <div class="text-center mt-4">
          <button class="btn btn-primary py-3 px-5" style="margin-bottom: 20px; margin-top:-20px;">Simpan</button>
        </div>
      </div>

    </div>
  </div>
</div>    
  
    <div class=" modal-body ">
    
    <div class="creator_section_wrapper">
    <div class="row">   
    <div class="  col-lg-12 col-sm-6 mb-4">
      <div class=" videoo">
      <h2>Video</h2>
      <?php foreach($embedVideo as $video):?>  
              <?= $video;?>
        <!-- <div class="card-body">
          <h4 class="card-title">
            <a href="#">Project One</a>
          </h4>
          <div class="meta mb-4 subss">  <img src="{{asset('images/youtube.png')}}"> Jan 18, 2019<span class="mx-2">&bullet;</span> <a href="#">News</a></div>
        </div> -->
        <?php endforeach;?>
      </div>
    
    </div>

  </div>
    </div>     
    </div>

    <div class="container text-center pb-5">
       <!-- Pagination -->
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
    </li>
  </ul>

    </div>

    
    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">YouMaju</h2>
                <ul class="list-unstyled">
                <li><a href="#">Tentang Kami</a></li>
                  <li><a href="#">Bantuan</a></li>
                  <li><a href="#">Kontak Kami</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Majuers ikuti media sosial kami!</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

  <!-- <script>
    $('#orangeModalSubscription').modal('hide');
$('body').removeClass('modal-open');
$('.modal-backdrop').remove();
  </script> -->
  </body>
</html>