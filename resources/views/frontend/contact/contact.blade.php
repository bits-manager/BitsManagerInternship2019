<style type="text/css">
#hallhome{
          height:200px;
	      background-color:rgb(241, 246, 249);
         }
</style>
@extends('layouts.frontend-master')
@section('content')
	
 

<div class="contact">

              
		<div class="container">
			<div class="row">

				<!-- Contact Info -->
				<div class="col-lg-4">
					<div class="contact_info">
						<div class="section_title">Get in touch with us</div>
						<div class="section_subtitle">Say hello</div>
						<div class="contact_info_text"><p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus porttitor.Sed lectus urna, ultricies sit amet risus eget.</p></div>
						<div class="contact_info_content">
							<ul class="contact_info_list">
								<li>
									<div>Address:</div>
									<div>1481 Creekside Lane Avila Beach, CA 93424</div>
								</li>
								<li>
									<div>Phone:</div>
									<div>+53 345 7953 32453</div>
								</li>
								<li>
									<div>Email:</div>
									<div>yourmail@gmail.com</div>
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

	<!-- Map -->

	<div class="contact_map">
		<!-- Google Map -->
		<div class="map">
			<div id="google_map" class="google_map">
				<div class="map_container">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div>
	@endsection
