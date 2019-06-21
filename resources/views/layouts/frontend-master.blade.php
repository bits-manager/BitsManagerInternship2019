<!DOCTYPE html>
<html lang="en">
<head>
<title>Bluesky</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="/frontendassets/styles/bootstrap4/bootstrap.min.css">
<link href="../frontendassets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<link rel="stylesheet" type="text/css" href="/frontendassets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="/frontendassets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="/frontendassets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="/frontendassets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="/frontendassets/styles/responsive.css">

<link rel="stylesheet" type="text/css" href="/frontendassets/plugins/rangeslider.js-2.3.0/rangeslider.css">
<link rel="stylesheet" type="text/css" href="/frontendassets/styles/contact.css">
<link rel="stylesheet" type="text/css" href="/frontendassets/styles/contact_responsive.css">
</head>
<body>
	<div class="super_container">
		 @include('frontend.partials.header')
		 @include('frontend.partials.menu')
		   <div class="main-content">
            @yield('content')
           </div>
	    @include('frontend.partials.newsletter')
	    @include('frontend.partials.footer')
    </div>
<script src="/frontendassets/js/jquery-3.2.1.min.js"></script>
<script src="/frontendassets/styles/bootstrap4/popper.js"></script>
<script src="/frontendassets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="/frontendassets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/frontendassets/plugins/easing/easing.js"></script>
<script src="/frontendassets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/frontendassets/js/custom.js"></script>
<script src="/frontendassets/plugins/rangeslider.js-2.3.0/rangeslider.min.js"></script>
<script src="/frontendassets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="/frontendassets/js/contact.js"></script>

</body>
</html>