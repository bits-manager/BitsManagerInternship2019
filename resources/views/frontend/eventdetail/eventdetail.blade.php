@extends('layouts.frontend-master')

@section('content')

  
<style>

	.section_title_service{
	font-style: italic;
	text-align: center;
}
</style>

<div class="about">
		<div class="container">
			<div class="row">
				
				<!-- About Content -->
				<div class="col-lg-4">
					<div class="about_content">
						@foreach($data as $eventhall)
                          <img src="{{URL::to('/')}}/images/{{$eventhall->image}}" class="img-thumbnail" width="400"/>
                          
                         @endforeach
                        
					</div>
				</div>
				<!-- About Content -->
                <div class="col-lg-8">
					<div class="about_content">
					
                     <div class="section_title  section_title_service" >Service</div><br>
                        <div><b>Hall Name :: {{$eventhall->hall_name}}</b></div>
                        <div><b>Event Name :: {{$eventhall->event_name}}</b></div>
                      <div> {!!$eventhall->description!!}</div>
                     </div> 
				</div>

			</div>
			
		
		</div>
	</div>

@endsection