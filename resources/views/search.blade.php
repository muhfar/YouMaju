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
            <li><a href="#"><i class="fa fa-book-reader"></i> <em>Story</em></a></li>
            <li><a href="#"><i class="fa fa-video"></i> <em>My Videos</em></a></li>
        </ul>
        
  </nav>
  <!-- end navbar -->

  
  <div class="slides">
          <div class="slide">
            <div class="content first-content">   
                        <!-- Search form -->
          <div class="md-form mt-0"style="margin-bottom: 20px">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
          </div>               
      <!-- Page Heading -->

      <?php foreach ($channel as $channel): ?>
        <div class="row">
          <div class="col-md-5">
            <a href="#">
              <div class="" style="width: 240px;">
                  <div class="media">
                      <a class="thumbnail pull-left" href="{{ url('/search') }}">
                          <img class="media-object" src="<?= $channel['profilePic']?>">
                      </a>
                      <div>
                          <h6 style="color: white; margin-left:5px">
                            <?= $channel['nama'] ?>
                          </h6>
                      <p style="color: white; margin-left:5px"><?= $channel['videoCount']?> Video</p> 
                      <p style="color: white; margin-left:5px"><?= $channel['subsCount']?> Subscribers</p>
                          <p>
                              <a class="btn" href="#" style="color: #ffff00;margin-left:5px">Subscribe</a>
                          </p>
                      </div>
                  </div>
              </div>
            </a>
          </div>
        </div> 
        <hr> 
      <?php endforeach ?>
      
      <!-- /.row -->

      

     

</div></div></div>
</body>

</html>