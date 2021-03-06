@extends('layouts.frontend-master')

@section('content')
<style>
	.icon{
		color: #3399FF;
	}
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
	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				
               @foreach($hall as $hall)

				<!-- About Image -->
				<div class="col-lg-5">
					<div class="about_image"><img src="{{URL::to('/')}}/images/{{$hall->hall_image}}" class="rounded" alt="" style="width:600px;height:250px;">
					</div>
				</div>

				<!-- About Content -->
				<div class="col-lg-7">
					
						<div class="section_title" style="font-style:italic;line-height: 1.2;"  ><marquee>{{$hall->hall_name}}</marquee></div>
						
							<div>
								<label class="label_style"><i class="fa fa-map-marker icon"></i> {{$hall->address}}</label><br>
								
								<label class="label_style"><i class="fa fa-phone icon"></i> {{$hall->phone_no}}
								</label><br>
								<label class="label_style"><i class="fa fa-clock-o icon"></i> {{$hall->open_time}}  to   {{$hall->close_time}}</label>
							
						     </div>

						
					
				</div>
             @endforeach
			</div>
			<!-- Event -->
				<div class="row">
				<div class="col">
					<div class="section_title">Events</div>
				</div>

			</div>
			<div class="row recent_row" >
				@foreach($event as $event)
				<div class="col-sm-4">
					 
							<!-- Slide -->
							<div >

								<div class="recent_item">
									<div class="recent_item_inner" >
										<div class="recent_item_image">
											<a href="eventdetail?id={{$event->id}}"><img src="{{URL::to('/')}}/images/{{$event->image}}" alt="" height="350"></a>

										</div>
										
										<div class="recent_item_body">
												<div class="item_title text-center"><a href="eventdetail?id={{$event->id}}">{{$event->event_name}} Detail</a></div>
												
										</div>
										
										
									</div>
								</div>
							</div>
                        
						
				</div>
				 @endforeach
			</div>
		
		</div>
	</div>
	
@endsection
