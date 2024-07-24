<section class=" light ken-burn-center" data-parallax="scroll" data-image-src="{{ asset($featured_image) }}">
	
	<div class="hero-content">
		<div class="container">
			<div class="hero-container">
			<h2>{{$title}}</h2>
			<p>{{$sub_title}}</p>
			<h1>{{$description}}</h1>
			</div>
		</div>
	
	</div>
</section>
<section class="component-filter filter">
	<div class="container">
		<div class="filter-container">
		<ul class="nav nav-tabs horizontal-scroll-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="book-tab" data-bs-toggle="tab" data-bs-target="#book" type="button" role="tab" aria-controls="book" aria-selected="true"><i class="lni lni-plane"></i> Book A Flight</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="schedule-tab" data-bs-toggle="tab" data-bs-target="#schedule" type="button" role="tab" aria-controls="schedule" aria-selected="false" tabindex="-1"><i class="lni lni-helicopter"></i> Schedule Flight</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="rescue-tab" data-bs-toggle="tab" data-bs-target="#rescue" type="button" role="tab" aria-controls="rescue" aria-selected="false" tabindex="-1"><i class="lni lni-first-aid"></i> Rescue</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="sharing-tab" data-bs-toggle="tab" data-bs-target="#sharing" type="button" role="tab" aria-controls="sharing" aria-selected="false" tabindex="-1"><i class="lni lni-users"></i> Sharing</button>
			</li>
			<!-- Add more items as needed -->
			</ul>

			<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
				<form name="flight-search-form" id="filghtSearchForm" action="{{route('site.search')}}" method="get">
				<!-- @csrf -->
			<!-- <div class="my-3">
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="filght_type" id="inlineRadio1" value="oneway">
			<label class="form-check-label" for="inlineRadio1">One way</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="filght_type" id="inlineRadio2" value="twoway">
			<label class="form-check-label" for="inlineRadio2">Two way</label>
			</div>
			</div> -->
			
			
			@if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
			<div class="row g-3">
			<div class="row g-3">
				<div class="col-lg-2 col-md-4 ol-sm-6 col-12">
					<label for="from">Departure {{ old('from')}}</label>
					<select name = "from" class="form-control" placeholder="From">
					<option value="" >Select Departure</option>
					@foreach ($cities as $city)
					@php
    // Combine city ID and name with a delimiter
    $combinedCity = $city['CityId'] . ' - ' . $city['CityName'];
@endphp
						<option value="{{ $city['CityId'] }} - {{ $city['CityName'] }}" {{ old('from') == $combinedCity  ? 'selected' : '' }} ">{{ $city['CityName'] }}</option>
					@endforeach
					</select>
					@if ($errors->has('from'))
                    <span class="text-danger">{{ $errors->first('from') }}</span>
                    @endif
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-12">
				<label for="to">Destination</label>

					<select name = "to" class="form-control " placeholder="to">
					<option value="" >Select Destination</option>

						@foreach ($cities as $city)
						@php
    // Combine city ID and name with a delimiter
    $combinedCity = $city['CityId'] . ' - ' . $city['CityName'];
@endphp
						<option value="{{ $city['CityId'] }} - {{ $city['CityName'] }}" {{ old("to") == $combinedCity? 'selected' : '' }}>{{ $city['CityName'] }}</option>
					@endforeach
					</select>
					@if ($errors->has('to'))
                    <span class="text-danger">{{ $errors->first('to') }}</span>
                    @endif
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-12">
				<label for="nationality">Nationality</label>

					<select name = "nationality" class="form-control " placeholder="to">
						<option value="" >Select Nationality</option>
						@foreach ($nationalities as $nationality)
						<option value="{{ $nationality['NationalityCode'] }}" {{ old("nationality") == $nationality['NationalityCode'] ? 'selected' : '' }}>{{ $nationality['Nationality']}}</option>
					@endforeach
					</select>
					@if ($errors->has('nationality'))
                    <span class="text-danger">{{ $errors->first('nationality') }}</span>
                    @endif
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6 col-12">
				<label for="heliServiceType">Heli Service Type</label>

					<select name = "heliServiceType" class="form-control " placeholder="to">
						<option value="" >Select Heli Service Type</option>
						@foreach ($heliServiceTypes as $heliServicdType)
						<option value="{{ $heliServicdType['ServiceTypeId'] }}"  {{ old("heliServiceType") == $heliServicdType['ServiceTypeId'] ? 'selected' : '' }}>{{ $heliServicdType['ServiceType']}}</option>
					@endforeach
					</select>
					@if ($errors->has('heliServiceType'))
                    <span class="text-danger">{{ $errors->first('heliServiceType') }}</span>
                    @endif
				</div>
			</div>
				<div class="col-lg-4 col-md-4 col-sm-6 col-12">
					
					<label for="start_date">Departure Date</label>

						<input type="text" name="start_date" value="{{old('start_date')}}" id="start" class="form-control date-picker" placeholder="Depature">
						@if ($errors->has('start_date'))
                    <span class="text-danger">{{ $errors->first('start_date') }}</span>
                    @endif
					</div>
				
			
				<div class="col-lg-2 col-md-4 col-sm-6 col-12 passanger-card">
				<label for="seatCount">Number of Seats</label>
					<input type="hidden" name="seat_count" id="seatCount">
					
					<button type="button" id="toggleButton" class="form-control passanger-popup" >passenger<span id="totalContainer">
						: <span id="totalQuantity">{{old('start_date')??0}}</span>
							</span></button>
						<div class="count-table" id="popup">
							<div class="pass-count" >
								<h4>Adult</h4> 
								<div class="adder qty-container">
									<input type='button' value='-' class='qtyminus' field='quantity' />
									<input type='text' name='quantity' value='0' class='qty' />
									<input type='button' value='+' class='qtyplus' field='quantity' />
								</div>
							</div>
							<div class="pass-count">
								<h4>Child</h4> 
								<div class="adder qty-container">
									<input type='button' value='-' class='qtyminus' field='quantity' />
									<input type='text' name='quantity' value='0' class='qty' />
									<input type='button' value='+' class='qtyplus' field='quantity' />
								</div>
							</div>
							<div class="pass-count">
								<h4>Infant</h4> 
								<div class="adder qty-container">
									<input type='button' value='-' class='qtyminus' field='quantity' />
									<input type='text' name='quantity' value='0' class='qty' />
									<input type='button' value='+' class='qtyplus' field='quantity' />
								</div>
							</div>
						</div>

						@if ($errors->has('seat_count'))
                    <span class="text-danger">{{ $errors->first('seat_count') }}</span>
                    @endif
					</div>
				
				<div class="col-lg-1 col-md-4 col-sm-6 col-12">
					
					<button type="submit" class="btn btn-danger mb-3" id="filghtSearchButton"><i class="lni lni-search"></i></button>
				</div>
			
			</div>
			</form>
			</div>
			<div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
			<form action="{{route('site.search')}}" method="get">
			<div class="my-3">
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			<label class="form-check-label" for="inlineRadio1">One way</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
			<label class="form-check-label" for="inlineRadio2">Two way</label>
			</div>
			</div>
			<div class="row g-3">
			<div class="col-md-3 col-sm-6 col-12">
			
			<input type="text"  class="form-control" placeholder="From">
			</div>
			<div class="col-md-3 col-sm-6 col-12">
			
			<input type="text" class="form-control"  placeholder="To">
			</div>
			<div class="col-md-2 col-sm-6 col-12">
			
			<input type="date" class="form-control" >
			</div>
			<div class="col-md-2 col-sm-6 col-12">
			
			<input type="date" class="form-control" >
			</div>
			<div class="col-md-1 col-sm-6 col-12">
			
			<input type="number" class="form-control"  >
			</div>

			<div class="col-md-1 col-sm-6 col-12">
			<button type="submit" class="btn btn-danger mb-3">Search</button>
			</div>
			
			</div>
			</form>
			</div>
			<div class="tab-pane fade" id="rescue" role="tabpanel" aria-labelledby="rescue-tab">
			<form action="{{route('site.search')}}" method="get">
			<div class="my-3">
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			<label class="form-check-label" for="inlineRadio1">One way</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
			<label class="form-check-label" for="inlineRadio2">Two way</label>
			</div>
			</div>
			<div class="row g-3">
			<div class="col-md-3 col-sm-6 col-12">
			
			<input type="text"  class="form-control" placeholder="From">
			</div>
			<div class="col-md-3 col-sm-6 col-12">
			
			<input type="text" class="form-control"  placeholder="To">
			</div>
			<div class="col-md-2 col-sm-6 col-12">
			
			<input type="date" class="form-control" >
			</div>
			<div class="col-md-2 col-sm-6 col-12">
			
			<input type="date" class="form-control" >
			</div>
			<div class="col-md-1 col-sm-6 col-12">
			
			<input type="number" class="form-control"  >
			</div>

			<div class="col-md-1 col-sm-6 col-12">
			<button type="submit" class="btn btn-danger mb-3">Search</button>
			</div>
			
			</div>
			</form>
			</div>
			<div class="tab-pane fade" id="sharing" role="tabpanel" aria-labelledby="sharing-tab">
			<form action="{{route('site.search')}}" method="get">
			<div class="my-3">
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			<label class="form-check-label" for="inlineRadio1">One way</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
			<label class="form-check-label" for="inlineRadio2">Two way</label>
			</div>
			</div>
			<div class="row g-3">
			<div class="col-md-3 col-sm-6 col-12">
			
			<input type="text"  class="form-control" placeholder="From">
			</div>
			<div class="col-md-3 col-sm-6 col-12">
			
			<input type="text" class="form-control"  placeholder="To">
			</div>
			<div class="col-md-2 col-sm-6 col-12">
			
			<input type="date" class="form-control" >
			</div>
			<div class="col-md-2 col-sm-6 col-12">
			
			<input type="date" class="form-control" >
			</div>
			<div class="col-md-1 col-sm-6 col-12">
			
			<input type="number" class="form-control"  >
			</div>

			<div class="col-md-1 col-sm-6 col-12">
			<button type="submit" class="btn btn-danger mb-3">Search</button>
			</div>
			
			</div>
			</form>
			</div>
			</div>
		</div>
			
	</div>
</section>
