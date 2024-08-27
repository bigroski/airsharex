<!-- ======= Offered tickets ======= -->
<section id="tickets" class="tickets ">
	<div class="container">
	<div class="title d-flex mb-0">{{$title}}</div>
	<div class="swiper grideSwiper">
	    <div class="swiper-wrapper">
			@if(count($offers) > 0)
				@foreach($offers as $offer)
				<div class="swiper-slide">
					<div class="ticket-card">
						<div class="card-image">
							<img src="{{ $offer['OperatorLogo'] }}" class="img-fluid" alt="">
						</div>
						<div class="card-details">
							<ul>
								<li class="sub-title">{{$offer['RouteName']}}</li>
								<li class="company" ><i class="lni lni-helicopter"></i> {{$offer['OperatorName']}}</li>
								<li class="date"><i class="lni lni-calendar"></i> {{$offer['TripDate']}}</li>
								<li class="count"><i class="lni lni-user"></i> {{$offer['AvailableSeat']}}</li>
								<li class="amount">NPR {{$offer['NewRate']}}/- <del> NPR {{$offer['ActualRate']}}/-</del></li>
							</ul>
						</div>
					</div>
				</div>
				@endforeach
			@endif
				
				
	    </div>
		<div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
	    <div class="swiper-pagination"></div>
	  </div>
	</div>


</section>
<!-- End Offered tickets-->