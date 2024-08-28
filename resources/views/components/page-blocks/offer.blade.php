<section id="tickets" class="tickets ">
	<div class="container">
	<div class="title d-flex mb-0">{{$title}}</div>
	<div class="swiper grideSwiper">
	    <div class="swiper-wrapper">
			@if(count($offers) > 0)
				@foreach($offers as $offer)
				<div class="swiper-slide">
					<div class="ticket-card" style="height: auto;">
						<div class="card-image">
							<img src="{{ $offer['OperatorLogo'] }}" class="img-fluid" alt="">
						</div>
						<div class="card-details">
							<ul>
								<li class="sub-title">{{$offer['RouteName']}}</li>
								<li class="company" ><i class="lni lni-helicopter"></i> {{$offer['OperatorName']}}</li>
								<li class="date"><i class="lni lni-calendar"></i> {{$offer['TripDate']}}</li>
								<!-- <li class="count"><i class="lni lni-user"></i> {{$offer['AvailableSeat']}}</li> -->
								<!-- <li class="amount">NPR {{$offer['NewRate']}}/- </li> -->
								<li>
									<form name="flight-book-form"
                                        id="filghtBookForm"
                                        action="{{route('search.checkout')}}" method="get">
                                        <input type="hidden" name="trip_id"
                                              id="TripId"
                                              value="{{$offer['TripId']}}">
                                        <input type="hidden"
                                              name="total_seat"
                                              id="TotalSeat"
                                              value={{$offer['AvailableSeat']}}>

                                              <div class="flight-booking-detail-price">
                                              <div class="book-btn">
                                              <div
                                                    class="flight-detail-price-amount">
                                                   Rs. {{$offer['TicketSellingRate']}} </div>
                                                   <del> NPR {{$offer['ActualRate']}}/-</del>
                                              <h6
                                                    class="flight-booking-detail-price-title">
                                                    Total ({{$offer['AvailableSeat']}}
                                                    Traveler)</h6>
                                        </div>
                                        <button class="btn btn-danger"
                                              onclick="redirectToCheckout($offer['SearchMasterId'])"
                                              value="Book Now">Book
                                              Now</button>
                                              </div>
                                        

                                  </form>

								</li>
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
<!-- End Offered tickets