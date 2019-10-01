<?php 
$success_message = '';
$error_message = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('images/logo_youmaju_1.png')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/user.css')}}">

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
		
			<div class="row">
				<div class="col-sm-3 profile-sec">
						<div class="photo-profile">
							<img src="{{ asset('images/person_1.jpg')}}" alt="no-photo" class="rounded-circle mx-auto my-3 d-block" width="100" height="100">
							<p class="text-center username">Abdurrasyid Habib</p>
							<p class="text-center jml-subs">999M Subs</p>
							<p class="text-center jml-vids">999 Vids</p>

						</div>
				</div>
				<div class="col-sm-6 timeline">
					<div class=""></div>
				</div>
				<div class="col-sm-3 recommend-sec">
					<div class=""></div>
				</div>

			</div>
		
		
	</div>
</body>
</html>