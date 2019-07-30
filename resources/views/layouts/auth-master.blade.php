<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Bluesky template project">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- language -->
<meta name="csrf-token" content="{{ csrf_token() }}">



  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login &mdash; Stisla</title>


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


  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">


</head>

<body>
<div class="super_container">
    
     
         @include('frontend.partials.menu')
          


 </style>
  <style type="text/css">
 .show-on-hover:hover > ul.dropdown-menu {
    display: block; 
    padding-left: 11px; 
}
.a{
  color:#000;
}
#ul{


}

 </style>


  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col">
          
          <div class="header_content d-flex flex-row align-items-center justify-content-start">

             <div>
              <a href="#"><img src="../frontendassets/images/hallmyanmar.png" alt="" style="width: 200px"></a>

            </div> 
            <nav class="main_nav">
              <ul>
                <li><a href="homes">{{trans('sentence.home')}}</a>
                </li>
                <li><a href="about">{{trans('sentence.about')}}</a></li>


                  <li><a href="contact">{{trans('sentence.contact')}}</a></li>
                                  
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{trans('sentence.language')}}<span class="caret"></span>
                            </a>
                           
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                <a class="dropdown-item has-icon text-primary"  href="frontend/lang/en"><img src="{{asset('assets/img/us.png')}}" width="30px" height="20x"> English</a>

                               
                                
                                 <a class="dropdown-item has-icon text-primary"  href="frontend/lang/my"><img src="{{asset('assets/img/my.png')}}" width="30px" height="20x"> Myanmar</a>
                                
                            </div>
                        </li>
                  
                
                  
                <li class="upper-links dropdown show-on-hover"><a class="links dropdown-toggle" 
                  data-toggle="dropdown" href="#"> {{trans('sentence.account')}}</a>
                  <ul class="dropdown-menu" role="menu" id="ul">

                    @if(Auth::check())
                    
                                    <li>Hi, {{ Auth::user()->name }}</li>
                                        <li><a href="{{route('admin.dashboard')}}" class="dropdown-item has-icon text-primary" >
                                           Dashboard</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"></i> Logout
                                        </a></li>
                                    @else

                                        <li ><a href="{{route('admin.dashboard')}}" style="color: #000"> Login</a></li>

                                        <li ><a href="{{route('admin.dashboard')}}" class="dropdown-item has-icon text-primary" style="color: #000"><i class="fa fa-user"></i> Login</a></li>

                                    @endif 
                        </ul> 
                </li>
              </ul>
            </nav>
            
            <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="login-brand">

              <img src="../frontendassets/images/hallmyanmar1.jpg" alt="logo" width="300" class=" rounded-circle">

            </div>
            @if(session()->has('info'))
            <div class="alert alert-primary">
                {{ session()->get('info') }}
            </div>
            @endif
            @if(session()->has('status'))
            <div class="alert alert-info">
                {{ session()->get('status') }}
            </div>
            @endif
            @yield('content')
            <div class="simple-footer">
              Copyright &copy; {{ env('APP_NAME') }} {{ date('Y') }}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
   @include('frontend.partials.footer')
         
</div>
  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
</body>
</html>
