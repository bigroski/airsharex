<x-airshare-layout>
     <section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true"
          data-natural-height="1080" data-natural-width="1920" data-bleed="0"
          data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0">
          <div class="container">
               <div class="breadcrumb-content text-white">
                    <h1>Popular Trips for: <br />{{$title}}</h1>
                    
               </div>
          </div>
     </section>
     <section class="search search-filter">
          <div class="flight-booking flight-list py-120">
               <div class="container">
                    <div class="row">
                         
                         <div class="col-lg-12 col-xl-12 order-md-2 order-1">
                              <div class="col-md-12">
                                   <div class="booking-sort">
                                        <h5 class="card-title mb-0 fw-light fs-5">{{count($returnData)}} Results Found
                                        </h5>

                                        <!-- <div class="col-md-3 booking-sort-box">
                                             <select class="select">
                                                  <option value="1">Sort By Default</option>
                                                  <option value="2">Sort By Popular</option>
                                                  <option value="3">Sort By Low Price</option>
                                                  <option value="4">Sort By High Price</option>
                                             </select>
                                        </div> -->
                                   </div>
                              </div>
                              <div class="row">
                                
                                   @forelse ($returnData as $key => $data)


                                 <div class="col-lg-12">
                                        <div class="flight-booking-item">
                                              <div class="flight-booking-wrapper">
                                                    <div class="flight-booking-info">
                                                          <div class="flight-booking-content">
                                                                 <div class="flight-booking-airline">
                                                                       <div class="flight-airline-img">
                                                                             <img src="{{$data['OperatorLogo'] }}" alt>
                                                                             <br />
                                                                       <h5 class="flight-airline-name">
                                                                             {{$data['OperatorName']}}</h5>
                                                                       </div>
                                                                 </div>
                                                                 <div class="flight-booking-time">
                                                                       <div class="start-time">
                                                                             <div class="start-time-icon">
                                                                                   <i class="fal fa-plane-departure"></i>
                                                                             </div>
                                                                             <div class="start-time-info">
                                                                                   <span class="flight-destination">{{$data['DepartureCity']}}</span>
                                                                                   <h6 class="start-time-text">{{$data['DepartureTime']}}</h6>
                                                                             </div>
                                                                       </div>
                                                                       <div class="flight-stop">
                                                                             <span class="flight-stop-number">{{$data['ExpectedTravelDuration']}}</span>
                                                                             <div class="flight-stop-arrow"></div>
                                                                       </div>
                                                                       <div class="end-time">
                                                                             <div class="start-time-icon">
                                                                                   <i class="fal fa-plane-arrival"></i>
                                                                             </div>
                                                                             <div class="start-time-info">
                                                                                   <span class="flight-destination">{{$data['ArrivalCity']}}</span>
                                                                                   <h6 class="end-time-text"> {{$data['ArrivalTime']}}</h6>
                                                                             </div>
                                                                       </div>
                                                                       <div class="end-time">
                                                                             <div class="start-time-icon">
                                                                                   <i class="fal fa-calendar"></i>
                                                                             </div>
                                                                             <div class="start-time-info">
                                                                                   <span class="flight-destination">Flight Date</span>
                                                                                   <h6 class="end-time-text">{{$data['TripDate']}}</h6>
                                                                              </div>
                                                                       </div>
                                                                       
                                                                 </div>
                                                                 
                                                          </div>
                                                    </div>
                                                    <div class="flight-booking-price">
                                                          <div class="price-info">

                                                                 <span class="price-amount">Rs. {{$data['TicketSellingRate']}} (Per Pax)</span>
                                                          </div>
                                                          <div class="date">
                                                               <i class="fa fa-calendar"></i>{{$data['TripDate']}}
                                                          </div>
                                                          <a class="btn btn-outline-dark " data-bs-toggle="modal" href="#exampleModalToggle-{{$key}}" role="button" >Flight Details</a>
                                                    </div>
                                              </div>
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
                                                                                                                       <td>{{ $data['DepartureCity']}}
                                                                                                                             -
                                                                                                                             {{ $data['ArrivalCity']}}
                                                                                                                       </td>
                                                                                                                       <td>{{$data['PickupStation'][0]['StationName']}}</td>
                                                                                                                       <td>{{$data['DropoffStation'][0]['StationName']}}</td>
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
                                                                                                                            {{$data['TicketSellingRate']}}
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
                                                                                                                {!! $data['BookingPolicy'] !!}
                                                                                                          </div>
                                                                                                    </div>
                                                                                              </div>
                                                                                        </div>
                                                                                        <!-- <div class="flight-booking-detail-price-outer">
                                                                                              <form name="flight-book-form"
                                                                                                    id="filghtBookForm"
                                                                                                    action="{{route('search.checkout')}}" method="get">
                                                                                                    <input type="hidden" name="trip_id"
                                                                                                          id="TripId"
                                                                                                          value="{{$data['TripId']}}">
                                                                                                    <input type="hidden" name="referenc" value="route-{{$routeID}}-{{$data['TripId']}}">
                                                                                                    <input type="hidden"
                                                                                                          name="total_seat"
                                                                                                          id="TotalSeat"
                                                                                                          value={{$data['AvailableSeat']}}>

                                                                                                          <div class="flight-booking-detail-price">
                                                                                                          <div class="book-btn">
                                                                                                          <div
                                                                                                                class="flight-detail-price-amount">
                                                                                                                Rs. {{$data['TicketSellingRate']  * $data['AvailableSeat'] }} </div>
                                                                                                          <h6
                                                                                                                class="flight-booking-detail-price-title">
                                                                                                                Total ({{$data['AvailableSeat']}}
                                                                                                                Traveler)</h6>
                                                                                                    </div>
                                                                                                    <button class="btn btn-danger"
                                                                                                          onclick="redirectToCheckout($data['SearchMasterId'])"
                                                                                                          value="Book Now">Book
                                                                                                          Now</button>
                                                                                                          </div>
                                                                                                    

                                                                                              </form>
                                                                                        </div> -->
                                                                                        <div class="flight-booking-detail-price-outer" style="margin-top: 15px;">
                                                                                              <form name="flight-book-form"
                                                                                                    id=""
                                                                                                    action="{{route('search.checkout')}}" method="get">
                                                                                                    <input type="hidden" name="trip_id"
                                                                                                          id="TripId"
                                                                                                          value="{{$data['TripId']}}">
                                                                                                    <input type="hidden" name="referenc" value="route-{{$routeID}}-{{$data['TripId']}}">


                                                                                                    <div class="flight-booking-detail-price-1">
                                                                                                    <div class="book-details">
                                                                                                          <div class="flight-seat-amount">
                                                                                                                Rs. {{$data['TicketSellingRate']  }}<small style="font-size: 12px;"> / pax </small>
                                                                                                          </div>

                                                                                                          <div
                                                                                                                class="flight-tickets-left">
                                                                                                                 {{$data['AvailableSeat']}}
                                                                                                                Seats Left 
                                                                                                          </div>
                                                                                                    </div>
                                                                                                          <div class="book-btn">
                                                                                                          <p>Enter the number of passenger you want to reserve.</p>
                                                                                                                  <div class="flight-booking-detail-price-title">
                                                                                                                       
                                                                                                                       <input type="text"
                                                                                                                        class="form-control" 
                                                                                                                        name="total_seat"
                                                                                                                        max={{$data['AvailableSeat']}}
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
                                              
                                        </div>
                                 </div>
                                  @empty
                                      <p>No data found.</p>
                                 @endforelse


                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </section>

     <script>
          function redirectToCheckout(mastersearchId) {
               window.location.href = '/checkout?flight_search_id=' + mastersearchId;
          }
     </script>
</x-airshare-layout>