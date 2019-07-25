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
				<div class="col-lg-6">
					<div class="about_content">
						@foreach($data as $eventhall)
                          <img src="{{URL::to('/')}}/images/{{$eventhall->image}}" class="img-thumbnail" width="500"/><div class="centered" >{{$eventhall->event_name}}</div>
                          
                         @endforeach
                        
					</div>
				</div>
				<!-- About Content -->
                <div class="col-lg-6">
					<div class="about_content">
					
                     <div class="section_title  section_title_service" >Service</div><br>
                        {{$eventhall->description}}
                     </div> 
				</div>

			</div>
			
		
		</div>
	</div>

@endsection