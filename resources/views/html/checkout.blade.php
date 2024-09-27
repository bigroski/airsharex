<x-airshare-layout>
  <section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0">
    <div class="container">
      <div class="breadcrumb-content text-white">
        <h1>Checkout </h1>
        <p>Check details, select payment methods, and confirm your flight in a few clicks to quickly and easily complete your helicopter reservation with AirshareX.</p>
      </div>
    </div>
  </section>
  <form name="flight-customer-form" action="{{ route('book.flight') }}" method="POST" id="checkoutForm">
    <section class=" checkout">
      <div class="container">




        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">

            <div class="flight-booking flight-list py-120">

              <div class="row">
                <div class="col-lg-12">
                  <div class="flight-booking-item">
                    <div class="flight-booking-wrapper">
                      <div class="flight-booking-info flight-checkout">
                        <div class="flight-booking-content">
                          <div class="flight-booking-airline justify-between ">
                            <div class="d-flex items-center gap-2 max-sm-flex-col">
                              <div class="flight-airline-img">
                                <img src="{{$flightData['OperatorLogo']}}" alt>

                              </div>
                              <h5 class="flight-airline-name">{{$flightData['OperatorName']}}</h5>
                            </div>


                            <div class="flight-booking-price-1">

                              <div class="price-info text-end">

                                <span class="price-amount">NPR. {{$flightData['TicketSellingRate'] * $seatCount}}/-</span><br />
                                <span class="seat-amount "> <i class="fal fa-seat-airline"></i> {{$seatCount}} pax</span>
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class="flight-booking-content mt-3">
                          <div class="flight-booking-time">
                            <div class="start-time">
                              <div class="start-time-icon">
                                <i class="fal fa-plane-departure"></i>
                              </div>
                              <div class="start-time-info">
                                <span class="flight-destination"> {{$flightData['DepartureCity']}}</span>
                                <h6 class="start-time-text">{{$flightData['DepartureTime']}}</h6>
                              </div>
                            </div>
                            <div class="flight-stop">
                              <span class="flight-stop-number">{{$flightData['ExpectedTravelDuration']}}h</span>
                              <div class="flight-stop-arrow"></div>
                            </div>
                            <div class="end-time">
                              <div class="start-time-icon">
                                <i class="fal fa-plane-arrival"></i>
                              </div>
                              <div class="start-time-info">
                                <span class="flight-destination"> {{$flightData['ArrivalCity']}}</span>
                                <h6 class="end-time-text">{{$flightData['ArrivalTime']}}</h6>
                              </div>
                            </div>
                            <div class="end-time">
                                 <div class="start-time-icon">
                                       <i class="fal fa-calendar"></i>
                                 </div>
                                 <div class="start-time-info">
                                       <span class="flight-destination">Date</span>
                                       <h6 class="end-time-text">{{$flightData['TripDate']}}</h6>
                                  </div>
                           </div>
                          </div>
                          <div class="flight-booking-duration">
                            <span class="duration-text"></span>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <!-- passenger list -->
                        <h4>Traveller Details</h4>
                          @for ($i = 0; $i < $seatCount; $i++) 
                                <div class="card border-1 shadow rounded-3 mb-2">
                                    <div class="card-body p-3 p-sm-3">
                                        <div class="row">
                                            <div class="col-md-4 col-4">
                                                <div class="form-floating mb-3">
                                                    <select name="PassengerDetail[{{ $i }}][salutation]" class="form-control" placeholder="Salutation" required>
                                                    <option value="">Title</option>   

                                                    @foreach ($salutations as $salutation)
                                                        <option value="{{ $salutation['SalutationId'] }} - {{ $salutation['Salutation'] }}">
                                                            {{ $salutation['Salutation'] }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-8 col-8">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="PassengerDetail[{{ $i }}][name]" class="form-control" id="floatingName" placeholder="Full Name" required>
                                                    <label for="name">Passenger Name</label>

                                                </div>
                                            </div>
                                            <div class="col-md-3 col-12">
                                                <div class="form-floating mb-3">
                                                    <!-- <label for="from">From</label> -->
                                                    <select name="PassengerDetail[{{ $i }}][gender]" class="form-control" placeholder="Salutation" required>
                                                    <option value="">Gender</option>   
                                                    @foreach ($genders as $gender)
                                                        @php
                                                        $combinedGender = $gender['GenderId'] . ' - ' . $gender['Gender'];
                                                        @endphp
                                                        <option value="{{ $gender['GenderId'] }} - {{ $gender['Gender'] }}" >
                                                            {{ $gender['Gender'] }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-3 col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="number" name="PassengerDetail[{{ $i }}][age]" class="form-control" id="floatingAge" placeholder="Address" required min="1">
                                                    <label for="floatingAge">Age</label>

                                                </div>
                                        
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="email" name="PassengerDetail[{{ $i }}][email]" class="form-control" id="floatingEmail" placeholder="name@example.com" required>
                                                    <label for="email">Email address</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">

                                            
                                            
                                           
                                            <div class="col-md-6 col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="PassengerDetail[{{ $i }}][phone]"  class="form-control" id="floatingPhone" placeholder="Phone Number" required>
                                                    <label for="phone">Phone Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="PassengerDetail[{{ $i }}][emergency_contact_number]" class="form-control" id="floatingPhone" placeholder="Phone Number" required>
                                                    <label for="emergencyContactNumber">Emergency Contact Number</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                  </div>
                            @endfor
                          <!-- End Passenger List -->
                    </div>
                    
                  </div>
                </div>




              </div>

            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-4">

            <div class="card border-0 shadow rounded-3 bg-red">
              <div class="card-body p-2 p-sm-3">
                <h5 class="card-title text-center mb-2 text-white fs-5">Checkout</h5>
                <!-- <form name="flight-book-form" id="filghtBookForm" action="/checkout" method="get"> -->
              @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif

                
                  @csrf
                  <div class="form-floating mb-3">
                    <input type="hidden" name="trip_id" value="{{$flightData['TripId']}}" class="form-control" id="floatingTripId" placeholder="Full Name">
                    <input type="text" name="name" class="form-control" id="floatingName" value="{{ $user->name}}" placeholder="Full Name">
                    <label for="name">Full Name</label>
                    @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                  </div>
                  <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control" id="floatingEmail" value="{{ $user->email}}" placeholder="name@example.com">
                    <label for="email">Email address</label>
                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" name="phone" class="form-control" id="floatingPhone" value="{{ $user->phone ?? old('phone')}}" placeholder="Phone Number">
                    <label for="phone">Phone Number</label>
                    @if ($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                    @endif

                  </div>


                  <div class="form-floating mb-3">
                    <input type="text" name="state" class="form-control" id="floatingState" value="{{ $user->state ?? old('state')}} " placeholder="state">
                    <label for="phone">State</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" name="city" value="{{ $user->city ?? old('city')}}" class="form-control" id="floatingCity" placeholder="city">
                    <label for="city">City</label>
                    @if ($errors->has('city'))
                    <span class="text-danger">{{ $errors->first('city') }}</span>
                    @endif
                  </div>
                  <div class="form-floating mb-3">
                    <input type="text" name="address" class="form-control" value="{{ $user->address_one ?? old('state') }}" id="floatingAddress" placeholder="Address">
                    <label for="name">Address</label>

                  </div>

                  <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" name="toc_accepted" value="" id="rememberPasswordCheck">
                    <label class="form-check-label text-white" for="rememberPasswordCheck">
                      I accept <a href="">term & conditions</a> and <a href="">privacy policy</a>.
                    </label>
                  </div>
                  <div class="d-grid gap-4">
                    <button class="btn btn-black btn-login text-uppercase fw-bold" type="submit">Checkout</button>

                  </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
                </form>

</x-airshare-layout>