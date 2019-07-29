	<!-- Menu -->

	<!-- Menu -->

	<div class="menu trans_500" >
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo">
				<a href="#">
					<div class="logo_container d-flex flex-row align-items-start justify-content-start">
						<div class="logo_image"><div><img src="../frontendassets/images/logo.png" alt=""></div></div>
					</div>
				</a>
			</div>
			<ul>

				<li class="active"><a href="homes"> {{trans('sentence.home')}}</a></li>
                <li><a href="about"> {{trans('sentence.about')}}</a></li>
				
				<li><a href="contact">{{trans('sentence.contact')}}</a></li>
                 <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> {{trans('sentence.language')}}
                            	<span class="caret"></span>
                            </a>
                           
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="lang/en"><img src="{{asset('assets/img/us.png')}}" width="30px" height="20x"> English</a>
                                
                                 <a class="dropdown-item" href="lang/my"><img src="{{asset('assets/img/my.png')}}" width="30px" height="20x"> Myanmar</a>
                                
                            </div>
                        </li>
				                <li class="upper-links dropdown show-on-hover"><a class="links dropdown-toggle" 
									data-toggle="dropdown" href="#">  {{trans('sentence.account')}}</a>

								  <ul class="dropdown-menu" role="menu" id="ul">

								  	@if(Auth::check())
								  	
                                    <li>Hi, {{ Auth::user()->name }}</li>
                                        <li><a href="{{route('admin.dashboard')}}" class="dropdown-item has-icon text-primary" >
                                           Dashboard</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"></i> Logout
                                        </a></li>
                                    @else
                                        <li ><a href="{{route('admin.dashboard')}}">Login</a></li>
            					        
                                    @endif 
          						  </ul> 
								</li>
							</ul>
							
			</ul>
		</div>
		<div class="menu_phone"><span>call us: </span>652 345 3222 11</div>
	</div>