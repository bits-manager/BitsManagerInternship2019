@extends('layouts.frontend-master')

@section('content')
<style>
	.icon{
		color: #3399FF;
	}
</style>
	
	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				
                @foreach($hall as $hall)

				<!-- About Image -->
				<div class="col-lg-5">
					<div class="about_image"><img src=
						"{{URL::to('/')}}/image/{{$hall->hall_image}}" class="rounded" alt="" width="800" height="450"></div>
				</div>

				<!-- About Content -->
				<div class="col-lg-7">
					<div class="about_content">

						<div class="section_title" font-style="italic" ><marquee>{{$hall->hall_name}}</marquee></div>

						
							
								<label class="label_style"><i class="fa fa-map-marker icon"></i><b>Location : </b>{{$hall->address}}</label><br>
								<label class="label_style"><i class="fa fa-map-marker icon"></i> <b>State : </b>{{$hall->state_name}}</label><br>
								<label class="label_style"><i class="fa fa-map-marker icon"></i><b> City : </b>{{$hall->city_name}}</label><br>
								<label class="label_style"><i class="fa fa-map-marker icon"></i><b>Township : </b>{{$hall->township_name}}</label><br>
								<label class="label_style"><i class="fa fa-phone icon"></i> <b>Contact : </b>{{$hall->phone_no}}
								</label><br>
								<label class="label_style"><i class="fa fa-clock-o icon"></i> <b>Open Time : </b>{{$hall->open_time}}</label><br>
								<label class="label_style"><i class="fa fa-clock-o icon"></i><b> Close Time : </b>{{$hall->close_time}}</label>
							
						


						
					</div>
				</div>
             @endforeach
			</div>
			
		
		</div>
	</div>


	<!-- Event -->
	<div class="recent">
		<div class="container">
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
											<a href="eventdetail"><img src="{{URL::to('/')}}/image/{{$event->image}}" alt="" width="300" height="350"></a>
											<div class="centered" >{{$event->event_name}}</div>

										</div>
										
										<div class="recent_item_body">
												<div class="recent_item_title text-center"><a href="eventdetail" >View Event Detail</a></div>
												
										</div>
										
										
									</div>
								</div>
							</div>
                        
						
				</div>
				 @endforeach
			</div>
		</div>
	</div>
</div>

	
		
@endsection