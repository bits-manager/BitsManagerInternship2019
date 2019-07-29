
@extends('layouts.frontend-master')
@section('content')


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
								<li ><a href="about">{{trans('sentence.about')}}</a></li>


									<li class="active"><a href="contact">{{trans('sentence.contact')}}</a></li>
                                  
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
                                        <li ><a href="{{route('admin.dashboard')}}" style="color: #000"> Login</a></li>
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

<div class="contact">

              
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-4">
					<div class="contact_info">
						<div class="section_title">Get in touch with us</div>
						<div class="section_subtitle">Say hello</div>
						<div class="contact_info_text"><p>Customer easy to join admin address,email and can be call phone and also can  search in map .</p></div>
						<div class="contact_info_content">
							<ul class="contact_info_list">
							 	<!-- <li>
									<div><strong>Address :</strong>1481 Creekside Lane , CA 93424</div>
									
								</li>
								<li>
									<div><strong>Phone :</strong>09423251986</div>
									
								</li>
								<li>
									<div><strong>Email :</strong>hninwaiwai@gmail</div> -->
									
								</li>

								<li>
									<div><strong>Address :</strong> {{$address->address}}</div>
									
								</li>
								<li>
									<div><strong>Phone :</strong> {{$address->phone}}</div>
									
								</li>
								<li>
									<div><strong>Email :</strong> {{$address->email}}</div>
									
								</li>
								
							</ul>    
						</div>
						
					</div>
				</div>

				<!-- Contact Form -->
				

                 <div class="card-body">
               @if($message=Session::get('info'))
                 <div class="alert alert-info alert-block">
                 <button type ="button" class="close" data-dismiss="alert">x</button>
                 <strong>{{$message}}</strong>
                 </div>
               @endif
                     <div class="col-lg-8">
					<div class="contact_form_container">
						<form method="post" action="{{ route('admin.contact.store') }}" class="contact_form" id="contact_form">

						 {{ csrf_field() }}
							<div class="row">
								<!-- Name -->
	                               <div class="col-lg-6 contact_name_col">
									<input type="text" name="contact_name" class="contact_input" placeholder="Name" required="required">
								</div>
								<!-- Email -->
								<div class="col-lg-6">
									<input type="email" name="email" class="contact_input" placeholder="E-mail" required="required">
								</div>
							</div>
							<div><input type="text" name="subject" class="contact_input" placeholder="Subject"></div>
							<div><textarea name="message" class="contact_textarea contact_input" placeholder="Message" required="required"></textarea></div>
							<button type="submit" name="btnSubmit" class="contact_button button">send</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Map -->

	<div class="earth3dmap-com">
		<iframe id="iframemap" src="https://maps.google.com/maps?q=No.+%28A%2C+15%29S%2C+77th+Street+and+Between+of+31st+x%2C+32nd+Street%2C+%E1%80%99%E1%80%94%E1%80%B9%E1%80%90%E1%80%9C%E1%80%B1%E1%80%B8&amp;ie=UTF8&amp;iwloc=&amp;output=embed" width="100%" height="500" frameborder="0" scrolling="no"></iframe>
	</div>
	@endsection
