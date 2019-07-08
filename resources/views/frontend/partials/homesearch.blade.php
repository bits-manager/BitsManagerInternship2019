<style>
#a{
	width: 25%;
}
</style>
<!-- Home Search -->
	<div class="home_search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_search_container">
						<div class="home_search_content">
							<form action="#" class="search_form d-flex flex-row align-items-start justfy-content-start">
								<div class="search_form_content d-flex flex-row align-items-start justfy-content-start flex-wrap">
									<div id="a">
										<select class="search_form_select" ng-model="selectedEvent" name="event_id" value="selectedEvent" ng-options="event_id as EventType.event_name for  event in event" 
										id="event">
										<option disabled selected>Event</optin>
										</select>
									</div>
									<div id="a">
										<select class="search_form_select" ng-model="selectedState" name="state_id" value="selectedState" ng-change="selectChange()" ng-options="state_id as state.state_name for state in states" id="state">
										<option disabled selected>State</option>
										</select>
									</div>
									<div id="a">
										<select class="search_form_select" ng-model="selectedCity" name="city_id" value="selectedCity" ng-options="city_id as city.city_name for  city in city" 
										id="city">
										<option disabled selected>City</optin>
										</select>
									</div id="a">
									
									<div id="a">
										<select class="search_form_select" ng-model="selectedState" 
										name="township_id" value="selectedTownship" ng-change="selectChange()" ng-options="township_id as township.township_name for state in states" 
										id="township">
										<option disabled selected>Township</option>
										</select>
									</div>
									
								
								</div>
								<button class="search_form_button ml-auto">search</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
