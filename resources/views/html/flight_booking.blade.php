<x-airshare-layout>
    <section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0">
        <div class="container">
            <div class="breadcrumb-content text-white">
                <h1>Booking details </h1>
                <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p>
            </div>
        </div>
    </section>
    <section class=" checkout">
        <section class=" checkout">
            <div class="container">




                <div class="row">
                    <form name="flight-customer-form" action="{{ route('book.flight') }}" method="POST" id="checkoutForm">
                        @csrf

                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <h5 class="card-title text-center mb-5  fs-5">Customer Details</h5>


                            <div class="card border-1 shadow rounded-3">
                                <div class="card-body p-4 p-sm-5">

                                    <div class="form-floating mb-3">
                                        <!-- <label for="from">From</label> -->
                                        <select name="nationality" class="test_skill form-control " placeholder="to">
                                            <!-- <option >POK</option> -->
                                            @foreach ($nationalities as $nationality)
                                            <option value="{{ $nationality['NationalityCode'] }}">{{ $nationality['Nationality']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-floating mb-3">

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="customer_contact_no" class="form-control" id="floatingName" placeholder="Full Name">
                                        <label for="name">Contact Number</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" name="customer_email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                                        <label for="email">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="emergency_contact_number" class="form-control" id="floatingPhone" placeholder="Phone Number">
                                        <label for="phone">Emergency Contact Number</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="booking_name" class="form-control" id="floatingPhone" placeholder="Phone Number">
                                        <label for="phone">Booking Name</label>

                                    </div>


                                </div>
                            </div>
                            <h5 class="card-title text-center mb-5  fs-5">Payamnt Details</h5>

                            <div class="card border-1 shadow rounded-3 ">
                                <div class="card-body p-4 p-sm-5">

                                    <div class="form-floating mb-3">
                                        <label for="from">Payment Method</label>
                                        <input type="text" name="payment_method" class="form-control" id="floatingPhone" placeholder="Phone Number">

                                    </div>
                                    <div class="form-floating mb-3">
                                        <label for="from">Total amount</label>
                                        <input type="text" name="total_amount" class="form-control" id="floatingPhone" placeholder="Phone Number">

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="received_amount" class="form-control" id="floatingName" placeholder="Full Name">
                                        <label for="name">Received amount</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" name="card_type" class="form-control" id="floatingEmail" placeholder="name@example.com">
                                        <label for="email">Card Type</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="card_holders_name" class="form-control" id="floatingPhone" placeholder="Phone Number">
                                        <label for="phone">Card Holder's Name</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="card_number" class="form-control" id="floatingPhone" placeholder="Phone Number">
                                        <label for="phone">Card Number Number</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="card_bank_name" class="form-control" id="floatingPhone" placeholder="Phone Number">
                                        <label for="phone">Card Bank Name</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="card_bank_id" class="form-control" id="floatingPhone" placeholder="Phone Number">
                                        <label for="phone">Card Bank Id</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="card_expiry_date" class="form-control" id="floatingAddress" placeholder="Address">
                                        <label for="name">Card expirty Date</label>

                                    </div>



                                </div>
                            </div>

                            
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-6">
                            <h5 class="card-title text-center mb-5  fs-5">Passanger Details</h5>


                            <div class="card border-1 shadow rounded-3">
                                <div class="card-body p-4 p-sm-5">

                                    <div class="form-floating mb-3">
                                        <!-- <label for="from">From</label> -->
                                        <select name="salutation" class="test_skill form-control" placeholder="Salutation">
                                            @foreach ($salutations as $salutation)
                                            <option value="{{ $salutation['SalutationId'] }} - {{ $salutation['Salutation'] }}">{{ $salutation['Salutation'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <!-- <label for="from">From</label> -->
                                        <select name="gender" class="test_skill form-control" placeholder="Salutation">
                                            @foreach ($genders as $gender)
                                            <option value="{{ $gender['GenderId'] }} - {{ $gender['Gender'] }}">{{ $gender['Gender'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" class="form-control" id="floatingName" placeholder="Full Name">
                                        <label for="name">Passanger Name</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                                        <label for="email">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="phone" class="form-control" id="floatingPhone" placeholder="Phone Number">
                                        <label for="phone">Phone Number</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="emergency_contact_number" class="form-control" id="floatingPhone" placeholder="Phone Number">
                                        <label for="phone">Emergency Contact Number</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="address" class="form-control" id="floatingAddress" placeholder="Address">
                                        <label for="name">Age</label>

                                    </div>



                                </div>
                            </div>
                            <div class="card border-1 shadow rounded-3 ">
                                <div class="card-body p-4 p-sm-5">

                                    <div class="form-floating mb-3">
                                        <!-- <label for="from">From</label> -->
                                        <select name="salutation" class="test_skill form-control" placeholder="Salutation">
                                            @foreach ($salutations as $salutation)
                                            <option value="{{ $salutation['SalutationId'] }} - {{ $salutation['Salutation'] }}">{{ $salutation['Salutation'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <!-- <label for="from">From</label> -->
                                        <select name="gender" class="test_skill form-control" placeholder="Salutation">
                                            @foreach ($genders as $gender)
                                            <option value="{{ $gender['GenderId'] }} - {{ $gender['Gender'] }}">{{ $gender['Gender'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" class="form-control" id="floatingName" placeholder="Full Name">
                                        <label for="name">Passanger Name</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                                        <label for="email">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="phone" class="form-control" id="floatingPhone" placeholder="Phone Number">
                                        <label for="phone">Phone Number</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="emergency_contact_number" class="form-control" id="floatingPhone" placeholder="Phone Number">
                                        <label for="phone">Emergency Contact Number</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="address" class="form-control" id="floatingAddress" placeholder="Address">
                                        <label for="name">Age</label>

                                    </div>



                                </div>
                            </div>
                            <div class="card border-1 shadow rounded-3 pt-2 ">
                                <div class="card-body p-4 p-sm-5">

                                    <div class="form-floating mb-3">
                                        <!-- <label for="from">From</label> -->
                                        <select name="salutation" class="test_skill form-control" placeholder="Salutation">
                                            @foreach ($salutations as $salutation)
                                            <option value="{{ $salutation['SalutationId'] }} - {{ $salutation['Salutation'] }}">{{ $salutation['Salutation'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <!-- <label for="from">From</label> -->
                                        <select name="gender" class="test_skill form-control" placeholder="Salutation">
                                            @foreach ($genders as $gender)
                                            <option value="{{ $gender['GenderId'] }} - {{ $gender['Gender'] }}">{{ $gender['Gender'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" class="form-control" id="floatingName" placeholder="Full Name">
                                        <label for="name">Passanger Name</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                                        <label for="email">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="phone" class="form-control" id="floatingPhone" placeholder="Phone Number">
                                        <label for="phone">Phone Number</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="emergency_contact_number" class="form-control" id="floatingPhone" placeholder="Phone Number">
                                        <label for="phone">Emergency Contact Number</label>

                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="address" class="form-control" id="floatingAddress" placeholder="Address">
                                        <label for="name">Age</label>

                                    </div>



                                </div>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" name="toc_accepted" value="" id="rememberPasswordCheck">
                                <label class="form-check-label" for="rememberPasswordCheck">
                                    I accept <a href="">term & conditions</a> and <a href="">privacy policy</a>.
                                </label>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12 pt-5">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Confirm Booking</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            </div>
        </section>

</x-airshare-layout>