<section id="tickets" class="tickets ">
	<div class="container">
	<div class="title d-flex mb-0">{{$title}}</div>
	<div class="swiper grideSwiper">
	    <div class="swiper-wrapper">
			@if(count($offers) > 0)
				@foreach($offers as $key => $offer)
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
									
									
									<!-- <form name="flight-book-form"
                                        id="filghtBookForm"
                                        action="{{route('search.checkout')}}" method="get">
                                        <input type="hidden" name="trip_id"
                                              id="TripId"
                                              value="{{$offer['TripId']}}">
                                        <input type="hidden"
                                              name="total_seat"
                                              id="TotalSeat"
                                              value={{$offer['AvailableSeat']}}>
 -->
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
                                        <a class="btn btn-danger " data-bs-toggle="modal" href="#exampleModalToggle-{{$key}}" role="button" >Detail</a>
                                        <!-- <button class="btn btn-danger"
                                              onclick="redirectToCheckout($offer['SearchMasterId'])"
                                              value="Book Now">Book
                                              Now</button>
                                              </div> -->
                                        

                                  <!-- </form> -->

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

	  @if(count($offers) > 0)
		@foreach($offers as $key => $offer)
		<div class="modal fade" id="exampleModalToggle-{{$key}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                                    <div class="modal-content">
                                                          <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalToggleLabel">Flight Details</h5>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                          </div>
                                                                <div class="modal-body">
                                                                <div class="flight-booking-detail">

                                                                <div class="flight-booking-detail-wrapper">
                                                                      <div class="row">
                                                                            
                                                                            <div class="col-lg-12 col-xl-12">
                                                                                  <div class="flight-booking-detail-right">
                                                                                        <ul class="nav nav-tabs" id="frTab1"
                                                                                              role="tablist">
                                                                                              <li class="nav-item"
                                                                                                    role="presentation">
                                                                                                    <button class="nav-link active"
                                                                                                          id="fr-tab1"
                                                                                                          data-bs-toggle="tab"
                                                                                                          data-bs-target="#fr-tab-pane1"
                                                                                                          type="button" role="tab"
                                                                                                          aria-controls="fr-tab-pane1"
                                                                                                          aria-selected="true">Flight Detail</button>
                                                                                              </li>
                                                                                              <li class="nav-item"
                                                                                                    role="presentation">
                                                                                                    <button class="nav-link"
                                                                                                          id="fr-tab2"
                                                                                                          data-bs-toggle="tab"
                                                                                                          data-bs-target="#fr-tab-pane2"
                                                                                                          type="button" role="tab"
                                                                                                          aria-controls="fr-tab-pane2"
                                                                                                          aria-selected="false">Fare</button>
                                                                                              </li>
                                                                                              <li class="nav-item"
                                                                                                    role="presentation">
                                                                                                    <button class="nav-link"
                                                                                                          id="fr-tab3"
                                                                                                          data-bs-toggle="tab"
                                                                                                          data-bs-target="#fr-tab-pane3"
                                                                                                          type="button" role="tab"
                                                                                                          aria-controls="fr-tab-pane3"
                                                                                                          aria-selected="false">Policy</button>
                                                                                              </li>
                                                                                        </ul>
                                                                                        <div class="tab-content" id="frTabContent1">
                                                                                              <div class="tab-pane fade show active"
                                                                                                    id="fr-tab-pane1" role="tabpanel"
                                                                                                    aria-labelledby="fr-tab1"
                                                                                                    tabindex="0">
                                                                                                    <div
                                                                                                          class="flight-booking-detail-info">
                                                                                                          <table
                                                                                                                class="table table-borderless">
                                                                                                                <tr>
                                                                                                                       <th>Flight</th>
                                                                                                                       <th>Pickup</th>
                                                                                                                       <th>Dropoff</th>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                       <td>{{ $offer['DepartureCity']}}
                                                                                                                             -
                                                                                                                             {{ $offer['ArrivalCity']}}
                                                                                                                       </td>
                                                                                                                       {{--
                                                                                                                       <td>{{$offer['PickupStation'][0]['StationName']}}</td>
                                                                                                                       <td>{{$offer['DropoffStation'][0]['StationName']}}</td>
                                                                                                                       --}}
                                                                                                                </tr>
                                                                                                          </table>
                                                                                                    </div>
                                                                                              </div>
                                                                                              <div class="tab-pane fade"
                                                                                                    id="fr-tab-pane2" role="tabpanel"
                                                                                                    aria-labelledby="fr-tab2"
                                                                                                    tabindex="0">
                                                                                                    <div
                                                                                                          class="flight-booking-detail-info">
                                                                                                          <table
                                                                                                                class="table table-borderless">
                                                                                                                <tr>
                                                                                                                      <th>Fare Summary
                                                                                                                      </th>
                                                                                                                      <th>Base Fare</th>
                                                                                                                      <!-- <th>Tax</th> -->
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                      <td>Adult x 1</td>
                                                                                                                      <td>Rs
                                                                                                                            {{$offer['TicketSellingRate']}}
                                                                                                                      </td>
                                                                                                                      <!-- <td>-</td> -->
                                                                                                                </tr>
                                                                                                                <!-- <tr>
                                                                                                                      <td>Child x 1</td>
                                                                                                                      <td>-</td>
                                                                                                                      <td>-</td>
                                                                                                                </tr> -->
                                                                                                          </table>
                                                                                                    </div>
                                                                                              </div>
                                                                                              <div class="tab-pane fade"
                                                                                                    id="fr-tab-pane3" role="tabpanel"
                                                                                                    aria-labelledby="fr-tab3"
                                                                                                    tabindex="0">
                                                                                                    <div
                                                                                                          class="flight-booking-detail-info">
                                                                                                          <div
                                                                                                                class="flight-booking-policy">
                                                                                                                N/A
                                                                                                          </div>
                                                                                                    </div>
                                                                                              </div>
                                                                                        </div>
                                                                                        <div class="flight-booking-detail-price-outer" style="margin-top: 15px;">
                                                                                              <form name="flight-book-form"
                                                                                                    id=""
                                                                                                    action="{{route('search.checkout')}}" method="get">
                                                                                                    <input type="hidden" name="trip_id"
                                                                                                          id="TripId"
                                                                                                          value="{{$offer['TripId']}}">
                                                                                                    <input type="hidden" name="referenc" value="offer-{{$offer['TripId']}}">


                                                                                                    <div class="flight-booking-detail-price-1">
                                                                                                    <div class="book-details">
                                                                                                          <div class="flight-seat-amount">
                                                                                                                Rs. {{$offer['TicketSellingRate']  }}<small style="font-size: 12px;"> / pax </small>
                                                                                                          </div>

                                                                                                          <div
                                                                                                                class="flight-tickets-left">
                                                                                                                 {{$offer['AvailableSeat']}}
                                                                                                                Seats Left 
                                                                                                          </div>
                                                                                                    </div>
                                                                                                          <div class="book-btn">
                                                                                                          <p>Enter the number of passenger you want to reserve.</p>
                                                                                                                  <div class="flight-booking-detail-price-title">
                                                                                                                       
                                                                                                                       <input type="text"
                                                                                                                        class="form-control" 
                                                                                                                        name="total_seat"
                                                                                                                        max={{$offer['AvailableSeat']}}
                                                                                                                        placeholder="No. of pax" 
                                                                                                                        required
                                                                                                                        >
                                                                                                                  </div>
                                                                                                                <button class="btn btn-danger" onclick="redirectToCheckout($data['SearchMasterId'])"
                                                                                                                value="Book Now">Book Now</button>
                                                                                                          </div>
                                                                                                    
                                                                                                          </div>
                                                                                                    

                                                                                              </form>
                                                                                        </div>
                                                                                  </div>
                                                                            </div>
                                                                      </div>
                                                                </div>

                                                                </div>
                                                                </div>
                                                          
                                                    </div>
                                                    </div>
                                              </div>
		@endforeach
	@endif
	</div>


</section>
<!-- End Offered tickets