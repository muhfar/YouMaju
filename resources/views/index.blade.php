<!DOCTYPE html>
<html lang="en">

<head>
  <title>YouMaju</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700">
  <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

  <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

  <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">



  <link rel="stylesheet" href="{{asset('css/aos.css')}}">

  <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body class="bg-shape">

  <div class="site-wrap">

    <header class="site-navbar py-3" role="banner">

      <div class="container blank">
        <div class="align-items-center" data-aos="fade-up" data-aos-delay="400">
          <div class="imagee">
            <h1><a href="index.html">
                <img src="{{asset('images/youMaju_polos2.png')}}">
              </a></h1>
          </div>

          <!-- <div class="col-12 col-md-10 d-none d-xl-block"> -->
          <!-- <nav class="site-navigation position-relative text-right" role="navigation">

        <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li class="has-children">
            <a href="services.html">Services</a>
            <ul class="dropdown">
              <li><a href="#">Air Freight</a></li>
              <li><a href="#">Ocean Freight</a></li>
              <li><a href="#">Ground Shipping</a></li>
              <li><a href="#">Warehousing</a></li>
              <li><a href="#">Storage</a></li>
            </ul>
          </li>
          <li><a href="industries.html">Industries</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact</a></li>
        </ul>
      </nav> -->
          <!-- </div> -->


          <!-- <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" 
    style="position: relative; top: 3px;">
    <a href="#" class="site-menu-toggle js-menu-toggle text-white">
    <span class="icon-menu h3"></span></a></div>

    </div> -->

        </div>
      </div>

    </header>
    <div class="site-blocks-cover hero-banner overlay" style="background-image: url(images/backk.jpg);" data-stellar-background-ratio="0.5">
      <div class="container blank">
        <div class="row text-md-left">
          <div class="col-md-6 col-lg-5 mb-5 mb-md-0">
            <h2>CREATE</h2>
            <h2> CONNECT</h2>
            <h2>MAKE AN IMPACT</h2>
            <p align="justify">YouMaju membantu majuers belajar membuat content yang positive, menarik, dan
              impactfull. Kemudian dengan YouMaju kamu dapat dengan mudah membangun koneksi antar content creator, dan saling support temanmu
              dengan cara memberikan feedback terbaik majuers. Selalu Bagikan ceritamu pada yang lain untuk menyebar dampak positif.</p>

            <a href="{{ url('/redirect') }}" class=" btn-outline btn-xl ">Gabung Sekarang!</a>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="site-section">
    <div class="container">

      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary jodol">
          <h1 class="mb-0" style="color:#3c3c32">YouMaju</h1>
          <p class="color-black-opacity-5" style="color:#343a40">Apa Aja Sih yang Ada di YouMaju?</p>
        </div>
      </div>
      <div class="row align-items-stretch">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary">
                <img src="{{asset('images/connection.png')}}" style="height :100px">
              </span></div>
            <div class="tulisan">
              <h3>YouCreate</h3>
              <p>YouMaju menciptakan content yang positive, menarik, dan impacfull di YouMaju&hellip;</p>
              <p class="mb-0"><a href="{{url("/youcreate")}}" class="btn-primary btn-outline btn-x" style="color:#343a40">Pelajari Lebih Lanjut</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary">
                <img src="{{asset('images/studying.png')}}" style="height :100px">
              </span></div>
            <div class="tulisan">
              <h3>YouConnect</h3>
              <p>YouMaju menghubungkan sesama content creator, Support dan berikan feedback anda&hellip;</p>
              <p class="mb-0"><a href="{{url("/youconnect")}}" class="btn-primary  btn-outline btn-x " style="color:#343a40">Pelajari Lebih Lanjut</a></p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="unit-4 d-flex">
            <div class="unit-4-icon mr-4"><span class="text-primary">
                <img src="{{asset('images/networking.png')}}" style="height :100px">
              </span></div>
            <div class="tulisan">
              <h3>YouMakeImpact</h3>
              <p>YouMaju dengan ceritamu, kemudian bagikan ke yang lain Untuk membuat&hellip;</p>
              <p class="mb-0"><a href="{{url("/youmakeimpact")}}" class="btn-primary btn-outline btn-x " style="color:#343a40">Pelajari Lebih Lanjut</a></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>



  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
        </div>
      </div>
      <img src="{{asset('images/teaser_youmaaju.gif')}}" class="img-fluid" alt="">
    </div>
  </section>

  <!-- <div class="site-section border-bottom">
      <div class="container">

        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Testimonials</h2>
          </div>
        </div>

        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="{{asset('images/person_3.jpg')}}" alt="Image" class="img-fluid mb-3">
                <p>John Smith</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>
          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="{{asset('images/person_2.jpg')}}" alt="Image" class="img-fluid mb-3">
                <p>Christine Aguilar</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="{{asset('images/person_4.jpg')}}" alt="Image" class="img-fluid mb-3">
                <p>Robert Spears</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

          <div>
            <div class="testimonial">
              <figure class="mb-4">
                <img src="{{asset('images/person_5.jpg')}}" alt="Image" class="img-fluid mb-3">
                <p>Bruce Rogers</p>
              </figure>
              <blockquote>
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
            </div>
          </div>

        </div>
      </div>
    </div> -->

  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center mb-5">

        <!-- <div class="row mb-3 align-items-stretch"> -->
        <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
          <div class="unit-4-icon mr-4 icon">
            <img src="{{asset('images/fav_icon_you_maju_YB.png')}}" alt="Image" class="img-fluid">

          </div>
        </div>
        <div class="col-md-6 col-lg-6 mb-4 mb-lg-4">
          <div class="h-entry">
            <p>YouMaju memberikan kemudahan pada youtuber pemula sebagai sebagai sarana pembelajaran,
              koneksi dan memberikan dampak positif. Di YouMaju, konten creator dapat berjejaring dan
              saling support antara sesama content creator dengan menonton dan memberikan feedback yang membangun. #yukmajubersama </p>
          </div>
        </div>
      </div>
      <!-- </div> -->
    </div>
    <div class="site-section block-13">
      <div class="container"></div>


      <div class="owl-carousel nonloop-block-13">
        <div>
          <a href="#" class="unit-1 text-center">
            <iframe width="345" height="190" src="https://www.youtube.com/embed/heaUWNHEW2I" frameborder="0" allow="accelerometer; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="unit-1-text">
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <iframe width="345" height="190" src="https://www.youtube.com/embed/JDaLje1TLiU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="unit-1-text">
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <iframe width="345" height="190" src="https://www.youtube.com/embed/IdCxiXEfHk4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="unit-1-text">
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <iframe width="345" height="190" src="https://www.youtube.com/embed/AP0NACavjfk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="unit-1-text">
            </div>
          </a>
        </div>

        <div>
          <a href="#" class="unit-1 text-center">
            <iframe width="345" height="190" src="https://www.youtube.com/embed/fg72DS56lwE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="unit-1-text">
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section border-top">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12 jodol">
          <h4 class="mb-5 text-black">Belajar dan Cari Koneksi Kemudian Temukan Peluang Berbagi Ceritamu!</h4>
          <a href="{{ url('/redirect') }}" class="btn btn-primary btn-outline btn-xl ">Gabung Sekarang!</a>

        </div>
      </div>
    </div>
  </div>

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
                <li><a href="#">Kontak Kami</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h2 class="footer-heading mb-4">Majuers ikuti media sosial kami!</h2>
              <a href="https://www.instagram.com/youmaju_/" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
            </div>
          </div>
        </div>
        <div class="row col-md-4 text-center">
          <div class="col-md-12">
            <div class="border-top">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy; YouMaju <script>
                  document.write(new Date().getFullYear());
                </script>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>

        </div>
      </div>
  </footer>


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

</body>

</html>