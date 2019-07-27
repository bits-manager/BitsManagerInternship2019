@extends('layouts.frontend-master')

@section('content')
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
								<li class="active"><a href="about">{{trans('sentence.about')}}</a></li>


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

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">

				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">

						<div class="section_title">About us</div>
						

						<div class="about_text">
						 <p style="font-size: 18px">The user can search halls on a single place. Hall's owner 
						 can advertise their halls , user can contact hall's owner to rent halls and
						 can know hall's locations.</p>
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-6">
					<div class="about_image"><img src="/frontendassets/images/abouthall.jpg" alt=""></div>
				</div>
			</div>
			

			 <div class="advans">
              		<div class="container">
              			<div class="contactus_text"><h4 style="font-size: 26px;color: black;margin-top: 0px;padding-bottom: 20px;">Advantages</h4></div>
              		    <div class="row">
                            
              			    <div class="col-lg-3">
              			     <div class="advan_outer">
              			       <div class="advan">
              					<div class="contactus_image"><img src="/frontendassets/images/times.jpg" alt="" style="width: 100px;height: 100px;margin-left:80px;margin-top: 10px; "></div>
              					<div class="recent_item_title text-center" style="padding-bottom: 20px;color:blue;">Save Time</div>
              			      </div>
                             </div>
              				</div>
              			
              				<div class="col-lg-3">
              				 <div class="advan_outer">
              				  <div class="advan">
              					<div class="contactus_image"><img src="/frontendassets/images/search.jpg" alt="" style="width: 100px;height: 100px;margin-left:80px;margin-top: 10px;"></div>
              					<div class="recent_item_title text-center" style="padding-bottom: 20px;color:blue;">Easy to Search</h4></div>
              				  </div>
              				 </div>
              				</div>
              
              				<div class="col-lg-3">
              				 <div class="advan_outer">
              				  <div class="advan">
              				    <div class="contactus_image"><img src="/frontendassets/images/phone.jpg" alt="" style="width: 100px;height: 100px;margin-left:80px;margin-top: 10px;"></div>
              				     <div class="recent_item_title text-center" style="padding-bottom: 20px;color:blue;">Easy to Contact</h4></div>
              				  </div> 
              				 </div>  
              			    </div>

              			    <div class="col-lg-3">
              			     <div class="advan_outer">
              			       <div class="advan">
              				    <div class="contactus_image"><img src="/frontendassets/images/save.jpg" alt="" style="width: 100px;height: 100px;margin-top: 10px;margin-left:80px;"></div>
              				    <div class="recent_item_title text-center" style="padding-bottom: 20px;color:blue;">Save Cost</h4></div>
              				  </div>
              			     </div>
              			    </div>
              				</div>
              			</div>
              		</div>
              	</div>	
				
			
		</div>
	</div>

	<!-- Realtors -->

	<div class="realtors">
		 
		<div class="container">
			<div class="row">
				<div class="col">

					<div class="section_title">The Realtors</div>		
				</div>
			</div>
			<div class="row realtors_row">
				
				<!-- Realtor -->
				<div class="col-lg-2 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="/frontendassets/images/hninwai.jpg" alt="" width="165" height="215"></div>
							<div class="realtor_body">
								<div class="realtor_title">Hnin Wai Wai</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

				<!-- Realtor -->
				<div class="col-lg-2 col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="/frontendassets/images/htay.jpg" alt=""  width="165" height="215"></div>
							<div class="realtor_body">
								<div class="realtor_title">Htay Htay Aung</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

				<!-- Realtor -->
				<div class="col-lg-2  col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="/frontendassets/images/waimi.jpg" alt="" width="165" height="215"></div>
							<div class="realtor_body">
								<div class="realtor_title">Wai Mi Aung</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>
                 <!-- Realtor -->
				<div class="col-lg-2  col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="/frontendassets/images/khaing.jpg" alt="" width="165" height="215"></div>
							<div class="realtor_body">
								<div class="realtor_title">Khaing Zin Tun</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>
				<!-- Realtor -->
				<div class="col-lg-2  col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="/frontendassets/images/hmn.jpg" alt="" width="165" height="215"></div>
							<div class="realtor_body">
								<div class="realtor_title">Htet Myat Noe</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>
				<!-- Realtor -->
				<div class="col-lg-2  col-md-6">
					<div class="realtor_outer">
						<div class="realtor">
							<div class="realtor_image"><img src="/frontendassets/images/hninthu.jpg" alt="" width="165" height="215"></div>
							<div class="realtor_body">
								<div class="realtor_title">Hnin Thu</div>
							</div>
							<div class="realtor_link"><a href="#">+</a></div>
						</div>
						<div class="realtor_link_background_container">
							<div><div class="realtor_link_background"></div></div>
						</div>
					</div>
				</div>

			</div>
		</div>
		 <div class="contactus">
              		<div class="container">
              			<div class="contactus_text"><h4 style="font-size: 26px;color: blue;margin-top: -60px;margin-bottom:20px;">Supported By</h4></div>
              		    <div class="row">

              				<div class="col-lg-3">
              					<div class="contactus_image" style=""><img src="/frontendassets/images/abouthall.jpg" alt=""></div>
              				</div>
              
              				<div class="col-lg-8">


              				<div class="contactus_text" style="">


<h3 style="font-size: 22px;color: blue;">
 <i class='fa fa-map-marker'></i> Bits  Manager  Co.,Ltd</h3>
<h6 style="font-size: 16px;color: blue;">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(IT Solutions Development)<br><br>
<i class="fa fa-address-card"></i> No.(A.15)S,77 Street,31*32,MDY<br><br>
<a href="http://www.bits-manager.com"> <i class='fa fa-wordpress'>
</i>  http://www.bits-manager.com</a><br><br>
<i class="fa fa-volume-control-phone"></i>  09-444200295,09-790798567 </h6><br>

              				

              					</div>
              				
              				</div>
              			</div>
              		</div>
              	</div>
	</div>
@endsection