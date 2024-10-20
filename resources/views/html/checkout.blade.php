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
    @csrf
    <section class=" checkout new-layout">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-8 col-lg-8">
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


                            <div class="end-time-date">
                                 <div class="start-time-icon">
                                       <i class="fal fa-calendar"></i>
                                 </div>
                                 <div class="start-time-info">
                                      
                                       <h6 class="end-time-text">{{$flightData['TripDate']}}</h6>
                                  </div>
                           </div>
                          </div>

                        </div>

                        <div class="flight-booking-details mt-3">
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
                            
                          </div>
                          <!-- <div class="flight-booking-duration">
                            <span class="duration-text"></span>
                          </div> -->
                        </div>
                      </div>

                    </div>

                  </div>
                <div class="traveller-details">
                <div class="row">
                    <div class="col-md-12">
                      <!-- passenger list -->
                        <h4>Traveller Details @if(!$user)or <a href="">Login</a> @endif</h4>

                        <h6>Contact Details</h6>
                        <div class="row">                                               
                          <div class="col-md-4 col-12">
                            @if($user)

                            <div class="user-detail">
                              <i class="fa fa-user"></i>
                            {{ $user->name}}
                            </div>
                            @else
                              <div class="form-floating mb-3">
                                  <input type="text" name="name"  class="form-control" id="floatingNameMain" placeholder="Name" required>
                                  <label for="floatingNameMain">Name</label>
                              </div>
                            @endif
                          </div>
                          <div class="col-md-4 col-12">
                            @if($user)
                            <div class="user-detail">
                              <i class="fa fa-envelope-circle"></i>{{$user->email}}
                            </div>
                            @else
                            
                              <div class="form-floating mb-3">
                                  <input type="text" name="email"  class="form-control" id="floatingEmail" placeholder="Email" required>
                                  <label for="floatingEmail">Email</label>
                              </div>
                            @endif
                          </div>
                          <div class="col-md-4 col-12">
                            @if($user)
                              <div class="user-detail">
                                <i class="fa fa-phone"></i>{{$user->phone}}
                              </div>
                              
                            @else
                              <div class="form-floating mb-3">
                                  <input type="text" name="phone" class="form-control" id="floatingPhone" placeholder="Phone Number" required>
                                  <label for="floatingPhone">Phone Number</label>
                              </div>
                            @endif
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 col-12">
                            @if($user)
                              <div class="user-detail">
                                <i class="fa fa-address-card"></i>{{$user->address}}
                              </div>
                            @else
                              <div class="form-floating mb-3">
                                  <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
                                  <label for="address">Address</label>
                              </div>
                            @endif
                          </div>
                          <div class="col-md-4 col-12">
                            @if($user)
                              <div class="user-detail">
                                <i class="fa fa-city"></i>{{$user->city}}
                              </div>
                            @else
                              <div class="form-floating mb-3">
                                  <input type="text" name="city" class="form-control" id="floatingCity" placeholder="City" required>
                                  <label for="floatingCity">City</label>
                              </div>
                            @endif
                          </div>
                          <div class="col-md-4 col-12">
                            @if($user)
                              <div class="user-detail">
                                <i class="fa fa-location"></i> {{$user->state}}
                              </div>
                            @else
                              <div class="form-floating mb-3">
                                  <input type="text" name="state" class="form-control" id="floatingState" placeholder="State" required>
                                  <label for="floatingState">State</label>
                              </div>
                            @endif
                          </div>
                        </div>

                        <p class="note">Your booking details will be sent to this email address and mobile number.</p>
                        
                        @for ($i = 0; $i < $seatCount; $i++) 
                        <h6>Passanger {{ $i+1 }}</h6>
                                <div class="card border-1 rounded-3 mb-2">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-2 col-4">
                                                <div class="form-floating">
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
                                            <div class="col-md-2 col-2">
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
                                            <div class="col-md-8 col-6">
                                                <div class="form-floating ">
                                                    <input type="text" name="PassengerDetail[{{ $i }}][name]" class="form-control" id="floatingName" placeholder="Full Name" required>
                                                    <label for="name">Passenger Name</label>

                                                </div>
                                            </div>

                                            <?php /* ?>
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
                                      

                                      <?php */ ?>
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
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="bg-light shadow-md rounded p-3">
              <h3 class="text-5 mb-3">Fare Details</h3>
              <ul class="list-unstyled">
                <li class="mb-2">Base Fare <span class="float-right text-4 font-weight-500 text-dark">NPR. {{$flightData['TicketSellingRate']}}</span><br>
                <!--   <small class="text-muted">Adult : 2, Child : 0, Infant : 0</small> <span class="seat-amount "> <i class="fal fa-seat-airline"></i> {{$seatCount}} pax</span> -->
                </li>
                <li class="mb-2">Number Of Passangers <span class="float-right text-4 font-weight-500 text-dark">{{$seatCount}}</span></li>
                <!-- <li class="mb-2">Taxes &amp; Fees <span class="float-right text-4 font-weight-500 text-dark">$215</span></li>
                <li class="mb-2">Insurance <span class="float-right text-4 font-weight-500 text-dark">$95</span></li> -->
              </ul>
              <div class="text-dark bg-light-4 text-4 font-weight-600 p-3"> Total Amount <span class="float-right text-6">  <span class="price-amount">NPR. {{$flightData['TicketSellingRate'] * $seatCount}}/-</span>
                               </span> </div>
              <input type="hidden" name="trip_id" value="{{$flightData['TripId']}}" class="form-control" id="floatingTripId" placeholder="Full Name">
              <input type="hidden" name="flight_search_detail_id" value="{{$flightSearch->id}}">
                    
              <button class="mt-4 btn btn-lg btn-dark btn-block"  type="submit">Proceed To Payment</button>
            </div>
          </>
          <?php /* ?>
          // ujjwol comment
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
          <?php */ ?>
        </div>

      </div>
    </section>
                </form>

</x-airshare-layout>