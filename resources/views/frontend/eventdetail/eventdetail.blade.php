@extends('layouts.frontend-master')

@section('content')

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
                          <img src="{{URL::to('/')}}/image/{{$eventhall->image}}" class="img-thumbnail" width="500"/><div class="centered" >{{$eventhall->event_name}}</div>
                          
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