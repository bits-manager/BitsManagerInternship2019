 
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
							<a href="#"><img src="../frontendassets/images/hallmyanmar.jpg" alt="" style="width: 200px"></a>

						</div> 
						<nav class="main_nav">
							<ul>
								<li><a href="homes"><i class="fa fa-home"></i> Home</a>
								</li>
								<li><a href="about">About us</a></li>
								<li><a href="properties">Properties</a></li>
								<li><a href="contact">Contact</a></li>
								<li class="upper-links dropdown show-on-hover"><a class="links dropdown-toggle" 
									data-toggle="dropdown" href="#"><i class="fa fa-user-circle-o"></i> Account</a>
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