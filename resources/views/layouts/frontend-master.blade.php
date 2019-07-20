<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<title>Bluesky</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- language -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="/frontendassets/styles/bootstrap4/bootstrap.min.css">
<link href="/frontendassets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" type="text/css" href="/frontendassets/styles/about.css">
<link rel="stylesheet" type="text/css" href="/frontendassets/styles/about_responsive.css">

<link rel="stylesheet" type="text/css" href="/frontendassets/styles/properties.css">
<link rel="stylesheet" type="text/css" href="/frontendassets/styles/properties_responsive.css">
 
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
         @include('frontend.partials.footer')
 
    </div>
<script src="/frontendassets/js/jquery-3.2.1.min.js"></script>



<script src="/frontendassets/plugins/greensock/TweenMax.min.js"></script>
<script src="/frontendassets/plugins/greensock/TimelineMax.min.js"></script>
<script src="/frontendassets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="/frontendassets/plugins/greensock/animation.gsap.min.js"></script>
<script src="/frontendassets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="/frontendassets/js/about.js"></script>




<script src="/frontendassets/js/properties.js"></script>

<script src="/frontendassets/styles/bootstrap4/popper.js"></script>
<script src="/frontendassets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="/frontendassets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="/frontendassets/plugins/easing/easing.js"></script>
<script src="/frontendassets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/frontendassets/js/custom.js"></script>
<script src="/frontendassets/plugins/rangeslider.js-2.3.0/rangeslider.min.js"></script>
<script src="/frontendassets/plugins/parallax-js-master/parallax.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAek8mUtwgSQKv_6DPa6RVToBMspOi74ak"></script><script src="/frontendassets/js/contact.js"></script>

</body>
</html>