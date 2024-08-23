<x-airshare-layout>
  <section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0">
    <div class="container">
      <div class="breadcrumb-content text-white">
        <h1>Checkout </h1>
        <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p>
      </div>
    </div>
  </section>
  <section class=" checkout">
    <section class=" checkout">
      <div class="container">




        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7">

            <div class="flight-booking flight-list py-120">

              <div class="row">
                <div class="col-lg-12">
                  <div class="flight-booking-item">
                    <div class="flight-booking-wrapper">
                      <div class="flight-booking-info">
                        <div class="flight-booking-content">
                          <div class="flight-booking-airline justify-between ">
                            <div class="d-flex items-center gap-2 max-sm-flex-col">
                              <div class="flight-airline-img">
                                <img src="{{$flightData['OperatorLogo']}}" alt>

                              </div>
                              <h5 class="flight-airline-name">{{$flightData['OperatorName']}}</h5>
                            </div>


                            <div class="flight-booking-price-1">

                              <div class="price-info">

                                <span class="price-amount">{{$flightData['TicketSellingRate']}}</span>
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
                                <h6 class="start-time-text">{{$flightData['DepartureTime']}}</h6>
                                <span class="flight-destination"> {{$flightData['DepartureCity']}}</span>
                              </div>
                            </div>
                            <div class="flight-stop">
                              <span class="flight-stop-number">Non Stop</span>
                              <div class="flight-stop-arrow"></div>
                            </div>
                            <div class="end-time">
                              <div class="start-time-icon">
                                <i class="fal fa-plane-arrival"></i>
                              </div>
                              <div class="start-time-info">
                                <h6 class="end-time-text">{{$flightData['ArrivalTime']}}</h6>
                                <span class="flight-destination"> {{$flightData['ArrivalCity']}}</span>
                              </div>
                            </div>
                          </div>
                          <div class="flight-booking-duration">
                            <span class="duration-text">{{$flightData['ExpectedTravelDuration']}}h</span>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div>
                </div>




              </div>

            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-5">

            <div class="card border-0 shadow rounded-3 bg-red">
              <div class="card-body p-4 p-sm-5">
                <h5 class="card-title text-center mb-5 text-white fs-5">Checkout</h5>
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

                <form name="flight-customer-form" action="{{ route('book.flight') }}" method="POST" id="checkoutForm">
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

                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

</x-airshare-layout>