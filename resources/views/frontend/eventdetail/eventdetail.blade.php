@extends('layouts.frontend-master')

@section('content')

  
<style>

	.section_title_service{
	font-style: italic;
	text-align: center;
}
</style>

<!-- Header -->
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
                                <a class="dropdown-item has-icon text-primary"  href="lang/en"><img src="{{asset('assets/img/us.png')}}" width="30px" height="20x"> English</a>
                                
                                 <a class="dropdown-item has-icon text-primary"  href="lang/my"><img src="{{asset('assets/img/my.png')}}" width="30px" height="20x"> Myanmar</a>
                                
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
                                        <li ><a href="{{route('admin.dashboard')}}" class="dropdown-item has-icon text-primary" style="color: #000"> Login</a></li>
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

<div class="about">
		<div class="container">
			<div class="row">
				
				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						@foreach($data as $eventhall)
                          <img src="{{URL::to('/')}}/images/{{$eventhall->image}}" class="img-thumbnail" width="500"/>
                          
                         @endforeach
                        
					</div>
				</div>
				<!-- About Content -->
     <div class="col-lg-6">
					<div class="about_content" style="color: #000;font-weight: 350;">

                        <div><b>{{$eventhall->hall_name}}</b></div>
                        <div><b>{{$eventhall->event_name}}</b></div>

                      <div> {!!$eventhall->description!!}</div>

                     </div> 
				</div>

			</div>
			
		
		</div>
	</div>

@endsection