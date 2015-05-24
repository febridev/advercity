<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Advercity</title>
	<link rel="stylesheet" href="{{asset('/font-awesome/font-awesome.min.css')}}">
	<script src="{{asset('/jquery/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('/onepagescroll/jquery.onepage-scroll.min.js')}}" type="text/javascript"></script>
	<link rel="stylesheet" href="{{asset('/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('/onepagescroll/onepage-scroll.css')}}">
</head>
<header>
	<h1><a href="#">Advercity</a></h1>
</header>
<body>
	<div class="main">
		<section class="one">
			<div class="page-container">
				<h2>Advercity</h2>
				<p>Where are you,</p>
				<p>is many event</p>
				<i class="fa fa-camera-retro fa-lg"></i>
			</div>
		</section>
		
		<section class="two">
			<div class="page-container">
				<h2>Always update with new event, everywhere</h2>
				<p>asdasdsadddddddddddasdasdsadddddddddddasdasdsadddddddddddasdasdsadddddddddddasdasdsadddddddddddasdasdsadddddddddddasdasdsadddddddddddasdasdsadddddddddddasdasdsadddddddddddasdasdsadddddddddddasdasdsaddddddddddd</p>
			</div>
		</section>
		
		<section class="three">
			<div class="page-container">
				<h2>Please Login here -> if you update</h2>
			</div>
		</section>
	</div>
</body>
<script>
$(".main").onepage_scroll({
		sectionContainer: "section"
	});	
</script>

</html>