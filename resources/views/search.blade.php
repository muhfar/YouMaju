<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="{{ asset('images/logo_youmaju_1.png')}}">

  <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{ asset('/css/user.css')}}">
  <link rel="stylesheet" type="text/javascript" href="{{ asset('/js/myscript.js')}}">
  <link rel="stylesheet" href="{{ asset('/css/templatemo-main.css')}}">


  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

  <title>Search</title>
</head>

<body>
  <!-- navbar -->
  <nav>
          <div class="logo">
             
          <a href="#"> <img src="{{asset('images/youMaju_polos2.png')}}"></a>
          
          </div>
          <div class="mini-logo">
             
          <a href="#"> <img src="{{asset('images/fav_icon_you_maju_YB.png')}}" style="max-width: 50px; margin-bottom:20px"></a>
          
          </div>
          <ul>
            <li><a href="#"><i class="fa fa-home"></i> <em>Home</em></a></li>
            <li><a href="#"><i class="fa fa-search"></i> <em>Search</em></a></li>
            <!-- <li><a href="#"><i class="fa fa-book-reader"></i> <em>Story</em></a></li> -->
            <li><a href="{{url('/profile/')}}"><i class="fa fa-video"></i> <em>My Videos</em></a></li>
        </ul>
        
  </nav>
  <!-- end navbar -->

  
 
          <div class="search-user" style="width:80%; float: right">
            <div class="content first-content">   
                        <!-- Search form -->
          <div class="md-form mt-0"style="margin-bottom: 20px; width:90%">
            <form action="/search" method="POST">
              @csrf
              <!-- <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"> -->
              <input class="form-control" type="text" placeholder="Search" aria-label="Search" name="username">
              <!-- <input class="form-control-sm" type="submit" value="Cari"> -->
            </form>
          </div>               
      <!-- Page Heading -->
      <div class="row d-flex">
      <?php foreach ($channel as $channel): ?>
      <a href="{{url('/profile')}}/<?= $channel['idChannelYoutube'] ?>">
          <div class="col-lg-4 col-md-6 justify-content-around my-3">
            <div class="media">
              <img class="img-thumbnails" style="height:100px; width: 100px;margin:0 5px" src="<?= $channel['profilePic']?>">
              <div class="media-body">
                  <h6 style="color: white; margin-left:5px">
                    <?= $channel['nama'] ?>
                  </h6>
              <p style="color: white; margin-left:5px"><?= $channel['videoCount']?> Video</p> 
              <p style="color: white; margin-left:5px"><?= $channel['subsCount']?> Subscribers</p>
              <!-- <a class="btn btn-primary btn-sm ml-1" href="#">Subscribe</a> -->
             <!--  <div class="g-ytsubscribe" data-channelid="<?= $channel['idChannelYoutube']?>" data-layout="default" data-count="hidden" target="_blank"></div> -->
              </div>
            </div>
          </div>
        </a>  
          
        
        <hr> 
      <?php endforeach ?>
      </div> 
      <!-- /.row -->

      

     

</div></div>

<script src="https://apis.google.com/js/platform.js"></script>
</body>

</html>