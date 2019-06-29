	<!-- Menu -->

	<div class="menu trans_500">
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
				<li class="active"><a href="homes" style="color: #fff"><i class="fa fa-home"></i> Home</a></li>
                <li><a>About us</a></li>
				<li><a>Properties</a></li>
				<li><a href="contact" style="color: #fff">Contact</a></li>
				                <li class="upper-links dropdown show-on-hover"><a class="links dropdown-toggle" 
									data-toggle="dropdown" href="#"style="color: #fff"><i class="fa fa-user-circle-o"></i> Account</a>
								  <ul class="dropdown-menu" role="menu" id="ul">

								  	@if(Auth::check())
								  	
                                    <li>Hi, {{ Auth::user()->name }}</li>
                                        <li><a href="{{route('admin.dashboard')}}" class="dropdown-item has-icon text-primary" >
                                          <i class="fa fa-user"></i> Dashboard</a></li>
                                        <div class="dropdown-divider"></div>
                                        <li><a href="{{ route('logout') }}" class="dropdown-item has-icon text-danger"></i> Logout
                                        </a></li>
                                    @else
                                        <li ><a href="{{route('admin.dashboard')}}" style="color: #000"><i class="fa fa-user"></i> Login</a></li>
            					        <li ><a href="#" style="color: #000"><i class="fa fa-address-card-o"></i> Register</a></li>
                                    @endif 
          						  </ul> 
								</li>
							</ul>
							
			</ul>
		</div>
		<div class="menu_phone"><span>call us: </span>652 345 3222 11</div>
	</div>