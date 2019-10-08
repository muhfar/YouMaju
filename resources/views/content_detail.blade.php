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

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

  <title>Content Detail</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="#"><img src="{{ asset('/images/fav_icon.png')}}" alt="">
    </a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdownId">
            <a class="dropdown-item" href="#">Action 1</a>
            <a class="dropdown-item" href="#">Action 2</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- Sidebar -->
  <div class="main-container container-fluid col-sm-12">
    <div class="row">
      <div class="navbar-side col-sm-1">
        <ul>
          <li>
            <div class="row">
              <div class="navside-icon container-fluid embed-responsive-1by1">
                <div class="icon">
                  <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                </div>
                <div class="icon-name">
                  <p>home</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="navside-icon container-fluid embed-responsive-1by1">
                <div class="icon">
                  <i class="fas fa-user-friends fa-2x"></i>
                </div>
                <div class="icon-name">
                  <p>friends</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="navside-icon container-fluid embed-responsive-1by1">
                <div class="icon">
                  <i class="fas fa-book-reader fa-2x "></i>
                </div>
                <div class="icon-name">
                  <p>Story</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="navside-icon container-fluid embed-responsive-1by1">
                <div class="icon">
                  <i class="fas fa-video fa-2x"></i>
                </div>
                <div class="icon-name">
                  <p>My Video</p>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="navside-icon container-fluid embed-responsive-1by1">
                <div class="icon">
                  <i class="fas fa-ellipsis-h fa-2x"></i>
                </div>
                <div class="icon-name">
                  <p></p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <!-- end sidebar -->

      <!-- main content -->
      <div class="main-content col-sm-8">
        <div class="row">
          <div class="main-vid-view embed-responsive embed-responsive-16by9 m-2">
            <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/C79LNjuZPgw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="row">
          <div class="main-vid-detail col-sm-12">
            <div class="content-detail">
              <div class="row vid-title">
                <h4 class="col-sm-12">Belajar dari orang Jepang, Passion aja ga cukup? 👉 Ikigai 📖LHTL #S02E03</h4>
              </div>
              <div class="row vid-details">
                <div class="info-left col-sm-4 d-flex justify-content-between">
                  <p>24 September 2019</p>
                  <p>67k view</p>
                </div>
                <ul class="icons-right col-sm-7 offset-1 d-flex justify-content-around">
                  <li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i> like</a></li>
                  <li><a href="#"><i class="fa fa-thumbs-down"></i> dislike</a></li>
                  <li><a href="#"><i class="fa fa-share" aria-hidden="true"></i> share</a></li>
                  <li><a href="#"> <i class="fa fa-bookmark" aria-hidden="true"></i> bookmark</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row owner-info d-flex align-items-center">
          <div class="left-hero col-sm-4 d-flex align-items-center">
            <div class="hero-img">
              <img class="img" src="images/person_1.jpg" alt="">
            </div>
            <div class="owner-detail ml-1 pt-1">
              <div class="name">
                <h6>hutata</h6>
              </div>
              <div class="subs">
                <p>290k subscribers</p>
              </div>
            </div>
          </div>
          <div class="right-subscribe col-sm-3 d-flex justify-content-around offset-5 align-items-center">
            <div class="subscribe">
              <button><a href="#">Subscribe</a></button>
            </div>
            <i class="fa fa-bell" aria-hidden="true"></i>
          </div>
        </div>
      </div>
      <!-- end main content -->
      <div class="sidebar col-sm-3">

      </div>
    </div>
  </div>
</body>

</html>