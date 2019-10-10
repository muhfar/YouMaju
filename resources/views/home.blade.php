<?php 
$success_message = '';
$error_message = '';
?>


<!-- AIzaSyCxZblpaPjt5hdY2jEoCuIQ_TRiHV2ZFO8 -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('images/logo_youmaju_1.png')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fontawesome-all.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/user.css')}}">

	<title>{{$title}}</title>
	<meta name="keywords" content="{{$keywords}}">
	<meta name="description" content="{{$description}}">

</head>
<body>
	<div class="header">
		<nav class="navbar navbar-light bg-light">
		 	<a class="navbar-brand" href="/home">
		    	<img src="{{ asset('images/fav_icon.png')}}" width="50" height="50" alt="Logo YouMaju">
		 	</a>
		</nav>
	</div>	
	<div class="home">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3 px-4 py-0 text-center">
					<div class="profile-sec rounded text-left">
						<div class="profile-photo">
							<img src="{{ asset('images/person_1.jpg')}}" alt="no-photo" class="rounded-circle mx-auto my-3 d-block" width="100" height="100">
						</div>
							<p class="text-center username">Abdurrasyid Habib</p>
							<p class="text-center jml-subs">999M Subs</p>
							<p class="text-center jml-vids">999 Vids</p>
						<hr>
						<div class="user-menu-sec">
							<div class="user-menu-item">
								<a href="#" class="btn btn-block">
									<span><i class="fas fa-search"></i></span>
									<span>Explore</span>
								</a>
							</div>
							<div class="user-menu-item">
								<a href="#" class="btn btn-block">
									<span><i class="fas fa-upload"></i></span>
									<span>Upload Vids</span>
								</a>
							</div>
							<div class="user-menu-item">
								<a href="#" class="btn btn-block">
									<span><i class="fas fa-bell"></i></span>
									<span>Notification</span>
								</a>
							</div>
							<div class="user-menu-item">
								<a href="#" class="btn btn-block">
									<span><i class="fa fa-envelope"></i></span>
									<span>Message</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6 text-center">
					<div class="timeline text-left">
						<div class="content">
							<div class="user-thumbnails ">
								<a href="#">
									<img src="{{ asset('images/person_1.jpg')}}" alt="no-photo" class="rounded-circle" width="50" height="50">
									<h4>
										Abdurrasyid Habib
									</h4>
								</a>
							</div>
							<div class="video">
								<iframe src="https://www.youtube.com/embed/N7-gniIB0Ls" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						<div class="content">
							<div class="user-thumbnails ">
								<a href="#">
									<img src="{{ asset('images/person_1.jpg')}}" alt="no-photo" class="rounded-circle" width="50" height="50">
									<h4>
										Abdurrasyid Habib
									</h4>
								</a>
							</div>
							<div class="video">
								<iframe src="https://www.youtube.com/embed/N7-gniIB0Ls" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div>
						</div>
						
					</div>
				</div>
				<div class="col-sm-3 text-center">
					<div class="recommend-sec">
						<div class="recommend-user">
							<div class="title">
								<h4>Recommend User</h4>
								<hr>
							</div>	
							<div class="content">
								<div class="user-img mx-auto">
									<img src="{{ asset('images/person_1.jpg')}}" alt="no-photo" class="rounded-circle" width="50" height="50">	
								</div>
								<div class="user-id ml-2">
									<p>Abdurrasyid Habib</p>
									<p>@abd_Habib</p>
								</div>
								
								<a class="btn-sm btn-danger ml-2">Subs!</a>
							</div>
							<div class="content">
								<div class="user-img mx-auto">
									<img src="{{ asset('images/person_1.jpg')}}" alt="no-photo" class="rounded-circle" width="50" height="50">	
								</div>
								<div class="user-id ml-2">
									<p>Abdurrasyid Habib</p>
									<p>@abd_Habib</p>
								</div>
								
								<a class="btn-sm btn-danger ml-2">Subs!</a>
							</div>
							<div class="content">
								<div class="user-img mx-auto">
									<img src="{{ asset('images/person_1.jpg')}}" alt="no-photo" class="rounded-circle" width="50" height="50">	
								</div>
								<div class="user-id ml-2">
									<p>Abdurrasyid Habib</p>
									<p>@abd_Habib</p>
								</div>
								
								<a class="btn-sm btn-danger ml-2">Subs!</a>
							</div>
							<div class="content">
								<div class="user-img mx-auto">
									<img src="{{ asset('images/person_1.jpg')}}" alt="no-photo" class="rounded-circle" width="50" height="50">	
								</div>
								<div class="user-id ml-2">
									<p>Abdurrasyid Habib adfa</p>
									<p>@abd_Habib</p>
								</div>
								
								<a class="btn-sm btn-danger ml-2">Subs!</a>
							</div>
						</div>
						
					</div>
				</div>

			</div>
		</div>
		
		
	</div>

	
	<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('js/popper.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/fontawesome-all.min.js')}}"></script>
</body>
</html>