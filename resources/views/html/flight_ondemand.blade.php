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
                            <div class="bg-slate-50 card border-1 shadow rounded-3 mb-5 p-6">

                                <div class="card-body ">
                                 
                                    <div class="row">
                                    <div class=" col-12">
                                        <h6>Flight Details</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                        <div class="col-md-4 col-12">

                                             <div class=" mb-3">
                                          
                                            <select name="destination_from" class="form-control" placeholder="From" required>
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
                                                    </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                        <div class="  mb-3">
                                           
                                            <select name="destination_to" class="form-control" placeholder="From" required>
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
                                        </div>
                                        <div class="col-md-4 col-12">
                                        <div class=" mb-3">
                                           
                                            <select name="service_type" class="form-control" placeholder="service Type" required>
                                                <!-- <option >KTM</option> -->
                                                <option value="">Service Type</option>
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
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class=" mb-3">
                                                <span>
                                                   
                                                    <input type="text" name="arrival_date" id="start" value="{{old('arrival_date')}}" class="form-control date-picker" placeholder="Arrival Date" required></span>
                                                @if ($errors->has('arrival_date'))
                                                <span class="text-danger">{{ $errors->first('arrival_date') }}</span>
                                                @endif

                                            </div>
                                        </div>  
                                        <div class="col-md-4 col-12">
                                            <div class=" mb-3">
                                                <span>
                                                  
                                                    <input type="text" name="return_date" id="end" value="{{old('return_date')}}" class="form-control date-picker" placeholder="Return Date" required></span>
                                                @if ($errors->has('return_date'))
                                                <span class="text-danger">{{ $errors->first('return_date') }}</span>
                                                @endif

                                            </div>
                                        </div>

                                        <div class="col-md-4 col-12">
                                        <div class="passanger-card mb-3">
                                              
                                               <input type="hidden" name="seat_count" id="seatCount" value="0">
                                               
                                               <button type="button" id="toggleButton" class="form-control passanger-popup">Passenger<span id="totalContainer">
                                                       : <span id="totalQuantity">0</span> (Adult:<span id="totalAdults">0</span>, Child:<span id="totalChildren">0</span>, Infant:<span id="totalInfants">0</span>)
                                                   </span></button>
                                               <div class="count-table" id="popup">
                                                   <div class="pass-count">
                                                       <h4>Adult</h4>
                                                       <div class="adder qty-container">
                                                           <input type='button' value='-' class='qtyminus' field='adult_passanger' />
                                                           <input type='text' name='adult_passanger' value='0' class='qty' />
                                                           <input type='button' value='+' class='qtyplus' field='adult_passanger' />
                                                       </div>
                                                   </div>
                                                   <div class="pass-count">
                                                       <h4>Child</h4>
                                                       <div class="adder qty-container">
                                                           <input type='button' value='-' class='qtyminus' field='child_passanger' />
                                                           <input type='text' name='child_passanger' value='0' class='qty' />
                                                           <input type='button' value='+' class='qtyplus' field='child_passanger' />
                                                       </div>
                                                   </div>
                                                   <div class="pass-count">
                                                       <h4>Infant</h4>
                                                       <div class="adder qty-container">
                                                           <input type='button' value='-' class='qtyminus' field='infant_passanger' />
                                                           <input type='text' name='infant_passanger' value='0' class='qty' />
                                                           <input type='button' value='+' class='qtyplus' field='infant_passanger' />
                                                       </div>
                                                   </div>
                                               </div>
                                               @if ($errors->has('seat_count'))
                                                       <span class="text-danger">{{ $errors->first('seat_count') }}</span>
                                                       @endif
                                           </div>
                                        </div>
                                        <div class=" col-12"><h6>Customer Details</h6></div>
                                        <div class="col-md-12 col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="booking_name" class="form-control" value="{{old('booking_name')}}" id="floatingBookingName" placeholder="Booking Name" required>
                                                <label for="Booking Name">Booking Name</label>
                                                @if ($errors->has('booking_name'))
                                                <span class="text-danger">{{ $errors->first('booking_name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="contact_number" value="{{old('contact_number')}}" class="form-control" id="floatingContactNumber" placeholder="Contact Number" required>
                                                <label for="floatingContactNumber"> Contact Number</label>
                                                @if ($errors->has('contact_number'))
                                                <span class="text-danger">{{ $errors->first('contact_number') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="email" value="{{old('email')}}" class="form-control" id="floatingEmail" placeholder="Email" required>
                                                <label for="floatingEmail"> Email</label>
                                                @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col-md-4 col-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="pickup_location"  value="{{old('pickup_location')}}" class="form-control" id="floatingPickupLocation" placeholder="Contact Number" required>
                                                <label for="floatingPickupLocation"> Pickup Location</label>
                                                @if ($errors->has('pickup_location'))
                                                <span class="text-danger">{{ $errors->first('pickup_location') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                        <!-- <div class="col-md-6 col-12">

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

                                        </div>   -->
                                        
                                        <div class="col-md-12 col-12">
                                            <div class="form-floating mb-3">
                                                <textarea type="text" name="booking_notes" value="{{old('booking_notes')}}" class="form-control" id="floatingBookingNotes" placeholder="Contact Number" required></textarea><label for="floatingBookingNotes"> Booking Notes</label>
                                                @if ($errors->has('booking_notes'))
                                                <span class="text-danger">{{ $errors->first('booking_notes') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="col-md-12">
                                          <div id="recaptcha"></div>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-12">

                                            <button type="submit" class="btn btn-danger form-control" id="filghtSearchButton">Submit</button>
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
        @section('page-scripts')
            <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
            <script type="text/javascript">
                var onloadCallback = function() {
                    grecaptcha.render('recaptcha', {
                      'sitekey' : '6LekVwsTAAAAABjA9Aro5dm2mrl3kb6hMk6VsHhl'
                    });
                };


                
            </script>

        @endsection
   
</x-airshare-layout>
