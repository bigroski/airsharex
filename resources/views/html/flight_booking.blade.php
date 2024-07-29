<x-airshare-layout>
    <section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0">
        <div class="container">
            <div class="breadcrumb-content text-white">
                <h1>Booking details </h1>
                <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat
                    vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio
                    volutpat maximus</p>
            </div>
        </div>
    </section>
    <section class=" checkout">
        <section class=" checkout">
            <div class="container">
                <!-- <form name="flight-customer-form" action="{{ route('confirm.booking-flight') }}" method="POST" id="confirmBookingForm"> -->
                <form name="flight-customer-form" action="{{ route('confirm.process-payment') }}" method="POST" id="confirmBookingForm">
                    @csrf

                    <div class="row">
                        <div class="col-md-8 col-sm-12">
                            <div class="booking-details">

                                <div class="bg-theme card border-1 shadow rounded-3 mb-5">
                                    <div class="card-body p-3 p-sm-3">

                                        <p><strong>Ticket booking No. : </strong> {{$bookingDetails['TicketBookingNumber']}}
                                            <!-- 91A80447-0A94-49DE-AF66-8B9E1B8B25D2 -->
                                             <input type="hidden" name = "ticket_booking_number" value="{{$bookingDetails['TicketBookingNumber']}}">
                                        </p>
                                        <p><strong>Total Seat: </strong> {{$bookingDetails['TotalSeat']}}</p>
                                        
                                        <input type="hidden" name = "total_seats" value="$bookingDetails['TotalSeat']">

                                        <p><strong>Amount: </strong>Rs. {{$bookingDetails['TotalAmount']}}</p>

                                    </div>
                                </div>




                            </div>

                            <div class="passanger-details">

                                <div class="card border-1 shadow rounded-3 mb-2">
                                    <div class="card-body p-3 p-sm-3">
                                        <h5 class="card-title  mb-2">Passanger Details</h5>

                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="booking_name" class="form-control" id="floatingBookingName" placeholder="Booking Name">
                                                    <label for="Booking Name">Booking Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="emergency_contact_number" class="form-control" id="floatingEmergContactNumber" placeholder="Emergency Contact Number">
                                                    <label for="floatingEmergContactNumber">Emergency Contact Number</label>

                                                </div>

                                            </div>


                                        </div>


                                    </div>
                                </div>

                               
                                @for ($i = 0; $i < $bookingDetails['TotalSeat']; $i++) <div class="card border-1 shadow rounded-3 mb-2">
                                    <div class="card-body p-3 p-sm-3">
                                        <div class="row">
                                            <div class="col-md-2 col-2">
                                                <div class="form-floating mb-3">
                                                    <select name="PassengerDetail[{{ $i }}][salutation]" class="form-control" placeholder="Salutation">
                                                    <option value="">Select Salutation</option>   

                                                    @foreach ($salutations as $salutation)
                                                        <option value="{{ $salutation['SalutationId'] }} - {{ $salutation['Salutation'] }}">
                                                            {{ $salutation['Salutation'] }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-10">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="PassengerDetail[{{ $i }}][name]" class="form-control" id="floatingName" placeholder="Full Name">
                                                    <label for="name">Passanger Name</label>

                                                </div>
                                            </div>
                                            <div class="col-md-2 col-12">
                                                <div class="form-floating mb-3">
                                                    <!-- <label for="from">From</label> -->
                                                    <select name="PassengerDetail[{{ $i }}][gender]" class="form-control" placeholder="Salutation">
                                                    <option value="">Select Gender</option>   
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
                                            <div class="col-md-2 col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="number" name="PassengerDetail[{{ $i }}][age]" class="form-control" id="floatingAge" placeholder="Address">
                                                    <label for="floatingAge">Age</label>

                                                </div>
                                        </div>

                                        <div class="row">

                                            
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="email" name="PassengerDetail[{{ $i }}][email]" class="form-control" id="floatingEmail" placeholder="name@example.com">
                                                    <label for="email">Email address</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="PassengerDetail[{{ $i }}][phone]"  class="form-control" id="floatingPhone" placeholder="Phone Number">
                                                    <label for="phone">Phone Number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="PassengerDetail[{{ $i }}][emergency_contact_number]" class="form-control" id="floatingPhone" placeholder="Phone Number">
                                                    <label for="emergencyContactNumber">Emergency Contact Number</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                            </div>
                            @endfor
                            <!-- <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" name="toc_accepted" value=""
                                        id="rememberPasswordCheck">
                                    <label class="form-check-label" for="rememberPasswordCheck">
                                        I accept <a href="">term & conditions</a> and <a href="">privacy
                                            policy</a>.
                                    </label>
                                </div> -->
                            <div class="col-sm-12 col-md-12 col-lg-12 pt-5">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Confirm Booking</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="customer-details">
                            <div class="bg-slate-50 card border-1 shadow rounded-3 mb-5">
                                <div class="card-body p-3 p-sm-3">
                                    <h5 class="card-title mb-2">Customer Details</h5>
                                    <p><strong>Name:</strong> {{$user->name}}</p>
                                    <p><strong>Email:</strong> {{$user->email}}</p>
                                    <p><strong>Phone:</strong> {{$user->phone?? 'N/A'}}</p>
                                    <p><strong>Nationality:</strong> Nepalese</p>


                                </div>
                            </div>
                        </div>



                        <div class="card border-1 shadow rounded-3 mb-5">

                            <div class="card-body p-3 p-sm-3">
                                <h5 class="card-title mb-3">Payment Mode</h5>
                                <div class="form-floating mb-3">
                                    <label for="floatingPaymentMethd">Payment Method</label>
                                    <input type="text" name="payment_method" class="form-control" value="{{old('payment_method')}}" id="floatingPaymentMethd" placeholder="Payment Method">

                                </div>
                                <div class="form-floating mb-3">
                                    <label for="floatingToatalAmount">Total Amount</label>
                                    <input type="text" name="total_amount" class="form-control" value="{{$bookingDetails['TotalAmount']}}" id="floatingToatalAmount" readonly placeholder="Total Amount">

                                </div>
                                <!-- <div class="form-floating mb-3">
                                    <input type="text" name="received_amount" class="form-control" id="floatingName" placeholder="Full Name">
                                    <label for="name">Received amount</label>

                                </div> -->
                                <div class="form-floating mb-3">
                                    <input type="string" name="card_type" class="form-control" value="{{old('card_type')}}" id="floatingCardType" placeholder="name@example.com">
                                    <label for="floatingCardType">Card Type</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="card_holders_name" value="{{old('card_holders_name')}}" class="form-control" id="floatingCardHolderName" placeholder="Card Holder's Name">
                                    <label for="floatingCardHolderName">Card Holder's Name</label>

                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="card_number" value="{{old('card_number')}}" class="form-control" id="floatingPhoneCardNumber" placeholder="Card Number">
                                    <label for="floatingPhoneCardNumber">Card Number Number</label>

                                </div>
                                
                                
                                <div class="form-floating mb-3">
                                <!-- <input type="text" name="start_date" id="start" value="{{old('start_date')}}" class="form-control date-picker" placeholder="Depature Date"></span> -->

                                    <input type="text" name="card_expiry_date" value="{{old('card_expiry_date')}}"class="form-control date-picker" id="floatingCArdExpiryDate" placeholder="Card Expiry Date">
                                    <label for="floatingCArdExpiryDate">Card expirty Date</label>

                                </div>



                            </div>
                        </div>
                    </div>
            </div>

            </form>

            </div>


        </section>

</x-airshare-layout>