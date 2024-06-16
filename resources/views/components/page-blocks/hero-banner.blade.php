<section class=" light ken-burn-center" data-parallax="scroll" data-image-src="{{ $featured_image }}">
	
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
			<div class="col-lg-2 col-md-4 ol-sm-6 col-12">
				<select class="test_skill form-control" placeholder="From">
					<option >KTM</option>
				</select>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 col-12">
				<select class="test_skill form-control " placeholder="to">
					<option >POK</option>
				</select>
			</div>
			<div class="col-lg-5 col-md-4 col-sm-6 col-12">
				<div id="foo">
					<input type="text" name="start" id="start" class="form-control date-picker" placeholder="Depature">
					<input type="text" name="end" id="end" class="form-control date-picker" placeholder="Arrival">
				</div>
			</div>
				
			
			<div class="col-lg-2 col-md-4 col-sm-6 col-12 passanger-card">
				<button type="button" id="toggleButton" class="form-control passanger-popup" >passenger<span id="totalContainer">
        : <span id="totalQuantity">0</span>
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

			</div>
			<div class="col-lg-1 col-md-4 col-sm-6 col-12">
				
				<button type="submit" class="btn btn-danger mb-3"><i class="lni lni-search"></i></button>
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
