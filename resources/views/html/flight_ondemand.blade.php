<x-airshare-layout>
    <section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0">
        <div class="container">
            <div class="breadcrumb-content text-white">
                <h1>Flight On Demand </h1>
                <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat
                    vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio
                    volutpat maximus</p>
            </div>
        </div>
    </section>
    <section class=" checkout">
        <section class=" checkout">
            <div class="container">
            <!-- @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
              @endif -->
                <form name="flight-booking-ondemand-form" action="{{ route('store.booking.ondemand') }}" method="POST" id="bookingOnDemandForm">
                    @csrf

                    <div class="col-md-12 col-sm-12">
                        <div class="customer-details">
                            <div class="bg-slate-50 card border-1 shadow rounded-3 mb-5">

                                <div class="card-body p-3 p-sm-3">
                                    <h3>Flight On Demand </h3>
                                    <div class="row">

                                        <div class="col-md-6 col-12">
                                            <!-- <div class="form-floating mb-3"> -->
                                            <label for="from">Departure </label>
                                            <select name="destination_from" class="form-control" placeholder="From">
                                                <!-- <option >KTM</option> -->
                                                <option value="">Select Departure</option>
                                                @foreach ($cities as $city)
                                                @php
                                                $combinedCity = $city['CityName'];
                                                @endphp
                                                <option value=" {{ $city['CityName'] }}" {{ old('destination_from') == $combinedCity  ? 'selected' : '' }} ">{{ $city['CityName'] }}</option>
                                                @endforeach

                                            </select>
                                                @if ($errors->has('destination_from'))
                                                    <span class=" text-danger">{{ $errors->first('destination_from') }}</span>
                                                    @endif
                                                    <!-- </div> -->
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label for="from">Destination </label>
                                            <select name="destination_to" class="form-control" placeholder="From">
                                                <!-- <option >KTM</option> -->
                                                <option value="">Select Destination</option>
                                                @foreach ($cities as $city)
                                                @php
                                                $combinedCity =  $city['CityName'];
                                                @endphp
                                                <option value="{{ $city['CityName'] }}" {{ old('destination_from') == $combinedCity  ? 'selected' : '' }} ">{{ $city['CityName'] }}</option>
                                                @endforeach

                                            </select>
                                                @if ($errors->has('destination_from'))
                                                    <span class=" text-danger">{{ $errors->first('destination_from') }}</span>
                                                    @endif
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label for="from">Service Type </label>
                                            <select name="service_type" class="form-control" placeholder="service Type">
                                                <!-- <option >KTM</option> -->
                                                <option value="">Select Service Type</option>
                                                @foreach ($heliServiceTypes as $heliServicdType)
                                                @php
                                                $combinedService = $heliServicdType['ServiceTypeId'] . ' - ' . $heliServicdType['ServiceType'];
                                                @endphp
                                                <option value="{{ $heliServicdType['ServiceTypeId'] }} - {{ $heliServicdType['ServiceType'] }}" {{ old("service_type") == $combinedService  ? 'selected' : '' }}>{{ $heliServicdType['ServiceType']}}</option>
                                                @endforeach

                                            </select>
                                            @if ($errors->has('service_type'))
                                            <span class=" text-danger">{{ $errors->first('service_type') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating mb-3">
                                                <span>
                                                    <label for="arrival_date">Arrival Date </label>
                                                    <input type="text" name="arrival_date" id="start" value="{{old('arrival_date')}}" class="form-control date-picker" placeholder="Arrival Date"></span>
                                                @if ($errors->has('arrival_date'))
                                                <span class="text-danger">{{ $errors->first('arrival_date') }}</span>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating mb-3">
                                                <span>
                                                    <label for="return_date">Return Date </label>
                                                    <input type="text" name="return_date" id="start" value="{{old('return_date')}}" class="form-control date-picker" placeholder="Return Date"></span>
                                                @if ($errors->has('return_date'))
                                                <span class="text-danger">{{ $errors->first('return_date') }}</span>
                                                @endif

                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="booking_name" class="form-control" value="{{old('booking_name')}}" id="floatingBookingName" placeholder="Booking Name">
                                                <label for="Booking Name">Booking Name</label>
                                                @if ($errors->has('booking_name'))
                                                <span class="text-danger">{{ $errors->first('booking_name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="contact_number" value="{{old('contact_number')}}" class="form-control" id="floatingContactNumber" placeholder="Contact Number">
                                                <label for="floatingContactNumber"> Contact Number</label>
                                                @if ($errors->has('contact_number'))
                                                <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="email" value="{{old('email')}}" class="form-control" id="floatingEmail" placeholder="Email">
                                                <label for="floatingEmail"> Eamil</label>
                                                @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="pickup_location"  value="{{old('pickup_location')}}" class="form-control" id="floatingPickupLocation" placeholder="Contact Number">
                                                <label for="floatingPickupLocation"> Pickup Location</label>
                                                @if ($errors->has('pickup_location'))
                                                <span class="text-danger">{{ $errors->first('pickup_location') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-12">

                                            <div class="form-floating mb-3">
                                            <input type="number" name="adult_passanger" value="{{old('adult_passanger')}}" class="form-control" id="floatinAdultPassanger" placeholder="No Of Seats(Adult)">
                                            <label for="floatinAdultPassanger"> No Of Seats(Adult) </label>
                                            @if ($errors->has('adult_passanger'))
                                                <span class="text-danger">{{ $errors->first('adult_passanger') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-12">

                                            <div class="form-floating mb-3">
                                            <input type="number" name="child_passanger" value="{{old('child_passanger')}}" class="form-control" id="floatingChildPassanger" placeholder="No Of Seats(Child)">
                                            <label for="floatingChildPassanger"> No Of Seats(Child) </label>

                                            </div>

                                        </div>
                                        <div class="col-md-6 col-12">

                                            <div class="form-floating mb-3">
                                            <input type="number" name="infant_passanger" value="{{old('infant_passanger')}}" class="form-control" id="floatingInfantPassanger" placeholder="No Of Seats(Infants)">
                                            <label for="floatingChildPassanger"> No Of Seats(Infants) </label>

                                            </div>

                                        </div>
                                        
                                        <div class="col-md-6 col-12">
                                            <div class="form-floating mb-3">
                                                <textarea type="text" name="booking_notes" value="{{old('booking_notes')}}" class="form-control" id="floatingBookingNotes" placeholder="Contact Number">
                                                </textarea><label for="floatingBookingNotes"> Booking Notes</label>
                                                @if ($errors->has('booking_notes'))
                                                <span class="text-danger">{{ $errors->first('booking_notes') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">

                                <button type="submit" class="btn btn-danger mt-4" id="filghtSearchButton">Submit</button>
                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>
            </div>

            </form>

            </div>


        </section>

</x-airshare-layout>