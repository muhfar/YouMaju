    
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>YouMaju &mdash; Profile</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="{{ asset('images/logo_youmaju_1.png')}}">

  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/user.css')}}">
  <link rel="stylesheet" type="text/javascript" href="{{ asset('/js/myscript.js')}}">
  <link rel="stylesheet" href="{{ asset('/css/templatemo-main.css')}}">


  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

  </head>
  <body>
  <?php
    $segment2 = Request::segment(2);
  ?>
@if (session('status-success'))
    <div class="alert alert-success">
        {{ session('status-success') }}
    </div>
@elseif(session('status-error'))
    <div class="alert alert-danger">
        {{ session('status-error') }}
    </div>
@endif

<!-- navbar -->
  <nav>
          <div class="logo">
             
          <a href="#"> <img src="{{asset('images/youMaju_polos2.png')}}"></a>
          
          </div>
          <div class="mini-logo">
             
          <a href="#"> <img src="{{asset('images/fav_icon_you_maju_YB.png')}}" style="max-width: 50px; margin-bottom:20px;margin-left:-10px"></a>
          
          </div>
          <ul>
            <li><a href="#"><i class="fa fa-home"></i> <em>Home</em></a></li>
            <li><a href="{{url('/profile')}}/<?= session('idChannelYoutube') ?>"><i class="fa fa-user"></i> <em>Profile</em></a></li>
            <li><a href="{{url('/search')}}"><i class="fa fa-search"></i> <em>Search</em></a></li>
            <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out-alt"></i> <em>Log Out</em></a></li>
          </ul>
        
  </nav>
  <!-- end navbar -->
  <div class="profile-user">
            <div class="content first-content">   
                        <!-- Search form -->
          <div class="md-form mt-0"style="margin-bottom: 20px; width:90%">
          <div class="row align-items-center justify-content-center text-center">
          
          <div class="profile" data-aos="fade-up" data-aos-delay="400">
          <img src="<?= $user['profilePic']?>">
          <div>
            <h2 class="text-white font-weight-light font-weight-bold"><?= $user['nama']?>
            </h2>
          </div>
          <div class="subs">
            <h4 class="breadcrumb-custom">  
             <i class="fab fa-youtube" aria-hidden="true"></i> <?= $user['subsCount']?> Subscriber
            </h4> 
            <!-- Check if show my profile -->
            @if($segment2 != session('idChannelYoutube'))
             <!-- Text Subscribing -->
              @if($subscribe['subscribing'] == '1')
                <h6 class="text-following"><?= $user['nama'] ?> Telah Subscribe Anda</h6>
              @elseif($subscribe['subscribing'] == '403')
                <h6 class="text-following">Subscription <?= $user['nama'] ?> bersifat rahasia</h6>
              @else
                <h6 class="text-following mt-1"><?= $user['nama'] ?> Belum Subscribe Anda</h6>
              @endif
              <!-- Button Subscribe -->
              <a class="g-ytsubscribe" data-channelid="<?= $user['idChannelYoutube'] ?>" data-layout="default" data-count="hidden" target"_blank"></a>
            <!--
              @if($subscribe['subscribe'])
                <a type="button" class="btn btn-dark btn-subscribe" href="{{ url('profile/unsubscribe')}}/<?= $user['idChannelYoutube'] ?>">Disubscribe</a>
              @else
                <a type="button" class="btn btn-warning btn-subscribe" href="{{ url('profile/subscribe')}}/<?= $user['idChannelYoutube'] ?>">Subscribe</a>
              @endif-->
            @endif
             <!-- End Check my profile -->    
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
          <!-- Page Heading -->
      <div class=" modal-body ">
    
    <div class="creator_section_wrapper">
    <div class="row">   
    <div class="col-sm-12 mb-4">
    <h2>Video</h2>
      <div class="videoo">
      <?php foreach($embedVideo as $video):?>  
        <?= $video;?>
      <?php endforeach;?>
      </div>
    
    </div>

    </div>
    </div>     
    </div>    
      </div>

  </div>

  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>

  <script src="{{asset('js/main.js')}}"></script>

  <!-- <script>
    $('#orangeModalSubscription').modal('hide');
$('body').removeClass('modal-open');
$('.modal-backdrop').remove();
  </script> -->
  </body>
</html>