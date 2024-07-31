<x-airshare-layout>
     <section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true"
          data-natural-height="1080" data-natural-width="1920" data-bleed="0"
          data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0">
          <div class="container">
               <div class="breadcrumb-content text-white">
                    <h1>Search Widget</h1>
                    <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat
                         vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio
                         volutpat maximus</p>
               </div>
          </div>
     </section>
     <section class="search search-filter">
          <div class="flight-booking flight-list py-120">
               <div class="container">
                    <div class="row">
                         <div class="col-lg-4 col-xl-3 mb-4">
                              <div class="booking-sidebar">
                                   <form name="flight-search-form" id="filghtSearchForm" action="{{url('/search')}}" method="get">
                                        <div class="booking-item">
                                             <h4 class="booking-title">Search</h4>
                                             
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-2">
                                                  <label for="from">From City</label>
                                                  <select name="from" class="test_skill form-control" placeholder="From">
                                                       <!-- <option >KTM</option> -->
                                                       @foreach ($cities as $city)
                                                         <option value="{{ $city['CityId'] }} - {{ $city['CityName'] }}" @if($searchData['from'] == $city['CityId'].' - '. $city['CityName']) selected @endif>
                                                               {{ $city['CityName'] }}</option>
                                                    @endforeach
                                                  </select>
                                                  @if ($errors->has('from'))
                                                    <span class="text-danger">{{ $errors->first('from') }}</span>
                                                  @endif
                                             </div>
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-2">
                                                  <label for="to">To City</label>

                                                  <select name="to" class="test_skill form-control " placeholder="to">
                                                       <!-- <option >POK</option> -->
                                                       @foreach ($cities as $city)
                                                              <option value="{{ $city['CityId'] }} - {{ $city['CityName'] }}" @if($searchData['to'] == $city['CityId'].' - '. $city['CityName']) selected @endif>
                                                                    {{ $city['CityName'] }}</option>
                                                       @endforeach
                                                  </select>
                                                  @if ($errors->has('to'))
                                                    <span class="text-danger">{{ $errors->first('to') }}</span>
                                                  @endif
                                             </div>
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-2">
                                                  <label for="nationality">Nationality</label>

                                                  <select name="nationality" class="test_skill form-control "
                                                       placeholder="to">
                                                       <!-- <option >POK</option> -->
                                                       @foreach ($nationalities as $nationality)
                                                            <option value="{{ $nationality['NationalityCode'] }}" @if($searchData['nationality'] == $nationality['NationalityCode']) selected @endif>
                                                               {{ $nationality['Nationality']}}</option>
                                                      @endforeach
                                                  </select>
                                                  @if ($errors->has('nationality'))
                                                    <span class="text-danger">{{ $errors->first('nationality') }}</span>
                                                  @endif
                                             </div>
                                             <div class="col-lg-12 col-md-12 col-sm-12 col-12 pt-2">
                                                  <label for="heliServiceType">Heli Service Type</label>

                                                  <select name="heliServiceType" class="test_skill form-control "
                                                       placeholder="to">
                                                       <!-- <option >Select Heli service Type</option> -->
                                                       @foreach ($heliServiceTypes as $heliServicdType)
                                                         <option value="{{ $heliServicdType['ServiceTypeId'] }}" @if($searchData['heliServiceType'] == $heliServicdType['ServiceTypeId']) selected @endif>
                                                               {{ $heliServicdType['ServiceType']}}</option>
                                                       @endforeach
                                                  </select>
                                             </div>
                                        </div>
                                        <div class="booking-item">
                                             <h4 class="booking-title">Flight Date</h4>
                                             <div class="flight-time">
                                                  <label>Departure</label>
                                                  <input class="form-control date-picker mb-2" name="start_date" type="text"
                                                       value="@if($searchData['start_date']){{$searchData['start_date']}}@endif">
                                                  @if ($errors->has('start_date'))
                                                    <span class="text-danger">{{ $errors->first('start_date') }}</span>
                                                  @endif
                                             </div>
                                        </div>
                                        <div class="booking-item">
                                             <div class="passanger-card">
                                               <label for="seatCount">Number of Seats</label>
                                               <input type="hidden" name="seat_count" id="seatCount" value="@if($searchData['seat_count']){{$searchData['seat_count']}}@endif">
                                               <button type="button" id="toggleButton" class="form-control passanger-popup">Passenger<span id="totalContainer">
                                                       : <span id="totalQuantity">@if($searchData['seat_count']){{$searchData['seat_count']}}@else{{'0'}}@endif</span>
                                                   </span></button>
                                               <div class="count-table" id="popup">
                                                   <div class="pass-count">
                                                       <h4>Adult</h4>
                                                       <div class="adder qty-container">
                                                           <input type='button' value='-' class='qtyminus' field='quantity' />
                                                           <input type='text' name='quantity' value='@if($searchData['seat_count']){{$searchData['seat_count']}}@else{{'0'}}@endif' class='qty' />
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
                                        </div>
                                        <div class="booking-item" style="display :none;">
                                             <h4 class="booking-title">Flight Price</h4>
                                             <div class="flight-price">
                                                  <div class="price-range-slider">
                                                       <div class="price-range-info">
                                                            <label for="priceRange1">Price:</label>
                                                            <input type="text" class="priceRange" id="priceRange1" readonly>
                                                       </div>
                                                       <div id="price-range1" class="price-range slider"></div>
                                                  </div>
                                             </div>
                                        </div>
                                        <button type="submit" class="btn btn-danger mt-4" id="filghtSearchButton"><i class="lni lni-search"></i> Search Now</button>

                                   </form>
                              </div>
                         </div>
                         <div class="col-lg-8 col-xl-9">
                              <div class="col-md-12">
                                   <div class="booking-sort">
                                        <h5 class="card-title mb-0 fw-light fs-5">{{count($returnData)}} Results Found
                                        </h5>

                                        <div class="col-md-3 booking-sort-box">
                                             <select class="select">
                                                  <option value="1">Sort By Default</option>
                                                  <option value="2">Sort By Popular</option>
                                                  <option value="3">Sort By Low Price</option>
                                                  <option value="4">Sort By High Price</option>
                                             </select>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   @forelse ($returnData as $data)


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
                                                                                   <h6 class="start-time-text">
                                                                                          {{$data['DepartureTime']}}</h6>
                                                                                   <span
                                                                                          class="flight-destination">{{$data['DepartureCity']}}</span>
                                                                             </div>
                                                                       </div>
                                                                       <div class="flight-stop">
                                                                             <span class="flight-stop-number">{{$data['ExpectedTravelDuration']}} h</span>
                                                                             <div class="flight-stop-arrow"></div>
                                                                       </div>
                                                                       <div class="end-time">
                                                                             <div class="start-time-icon">
                                                                                   <i class="fal fa-plane-arrival"></i>
                                                                             </div>
                                                                             <div class="start-time-info">
                                                                                   <h6 class="end-time-text">
                                                                                          {{$data['ArrivalTime']}}</h6>
                                                                                   <span
                                                                                          class="flight-destination">{{$data['ArrivalCity']}}</span>
                                                                             </div>
                                                                       </div>
                                                                 </div>
                                                                 
                                                          </div>
                                                    </div>
                                                    <div class="flight-booking-price">
                                                          <div class="price-info">

                                                                 <span class="price-amount">Rs
                                                                       {{$data['TicketSellingRate']}}</span>
                                                          </div>
                                                          <div class="date">
                                                               <i class="fa fa-calendar"></i>{{$data['TripDate']}}
                                                          </div>
                                                          <a class="btn btn-danger" href="#flight-booking-collapse1"
                                                                 data-bs-toggle="collapse" role="button"
                                                                 aria-expanded="false"
                                                                 aria-controls="flight-booking-collapse1">Flight Details </a>
                                                    </div>
                                              </div>
                                              <div class="flight-booking-detail">

                                                    <div class="collapse" id="flight-booking-collapse1">
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
                                                                                                      aria-selected="true">Baggage</button>
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
                                                                                                                   <th>Cabin</th>
                                                                                                                   <th>Check In</th>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                   <td>{{ $data['DepartureCity']}}
                                                                                                                         -
                                                                                                                         {{ $data['ArrivalCity']}}
                                                                                                                   </td>
                                                                                                                   <td>7 KG</td>
                                                                                                                   <td>20 KG
                                                                                                                   </td>
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
                                                                                                                   <th>Tax</th>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                   <td>Adult x 1</td>
                                                                                                                   <td>Rs
                                                                                                                         {{$data['TicketSellingRate']}}
                                                                                                                   </td>
                                                                                                                   <td>-</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                   <td>Child x 1</td>
                                                                                                                   <td>-</td>
                                                                                                                   <td>-</td>
                                                                                                            </tr>
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
                                                                                                            <ul>
                                                                                                                   <li> 1. Refund and
                                                                                                                         Date Change are
                                                                                                                         done as per the
                                                                                                                         following
                                                                                                                         policies. </li>
                                                                                                                   <li> 2. Refund
                                                                                                                         Amount= Refund
                                                                                                                         Charge (as per
                                                                                                                         airline policy
                                                                                                                         + ShareTrip
                                                                                                                         Convenience
                                                                                                                         Fee). </li>
                                                                                                                   <li> 3. Date Change
                                                                                                                         Amount= Date
                                                                                                                         Change Fee (as
                                                                                                                         per Airline
                                                                                                                         Policy +
                                                                                                                         ShareTrip
                                                                                                                         Convenience
                                                                                                                         Fee). </li>
                                                                                                            </ul>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                   </div>
                                                                                   <div class="flight-booking-detail-price-outer">
                                                                                          <form name="flight-book-form"
                                                                                                id="filghtBookForm"
                                                                                                action="{{route('search.checkout')}}" method="get">
                                                                                                <input type="hidden" name="trip_id"
                                                                                                      id="TripId"
                                                                                                      value="{{$data['TripId']}}">
                                                                                                <input type="hidden"
                                                                                                      name="total_seat"
                                                                                                      id="TotalSeat"
                                                                                                      value={{$seatCount}}>

                                                                                                <input type="hidden"
                                                                                                      name="TxnRefId" id="TxnRefId"
                                                                                                      value={{$TransactionRefId}}>
                                                                                                      <input type="hidden"
                                                                                                      name="TxnRefId" id="TxnRefId"
                                                                                                      value={{$TransactionRefId}}>
                                                                                                      <input type="hidden"
                                                                                                      name="TxnRefId" id="TxnRefId"
                                                                                                      value={{$TransactionRefId}}>
                                                                                                      <input type="hidden"
                                                                                                      name="masterSerarchId" id="masterSerarchId"
                                                                                                      value={{$searchMasterId}}>

                                                                                                      <div class="flight-booking-detail-price">
                                                                                                      <div class="book-btn">
                                                                                                      <div
                                                                                                            class="flight-detail-price-amount">
                                                                                                           Rs. {{$data['TicketSellingRate']}} </div>

                                                                                                      <h6
                                                                                                            class="flight-booking-detail-price-title">
                                                                                                            Total ({{$seatCount}}
                                                                                                            Traveler)</h6>
                                                                                                </div>
                                                                                                <button class="btn btn-danger"
                                                                                                      onclick="redirectToCheckout($data['SearchMasterId'])"
                                                                                                      value="Book Now">Book
                                                                                                      Now</button>
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