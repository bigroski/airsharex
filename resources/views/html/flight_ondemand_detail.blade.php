<x-airshare-layout>
    <!-- Breadcrumbs -->

    <section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0">
        <div class="container">
            <div class="breadcrumb-content text-white">
                <h1>Flight On Demand Details</h1>
                <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs -->

    <!-- About -->
    <section class="about-section">
        <div class="container">
            @if($storeData['status']==200)
            <div class="booking-details">
                <div class="row">
                    <div class="card border-1 shadow rounded-3 mb-5  p-3 col-sm-6">
                        <p> <Strong>Booking ID: </strong> {{$storeData['booking_id']}}</p>
                        <p> <Strong>Arrival Date: </strong> {{$storeData['arrival_date']}}</p>
                        <p> <Strong>Return Date: </strong> {{$storeData['return_date']}}</p>
                    </div>
                    <div class="card border-1 shadow rounded-3 mb-5  p-3 col-sm-6">
                        <p> <Strong>Service Type: </strong> {{$storeData['service_type']}}</p>
                        <p> <Strong>Departure: </strong> {{$storeData['destination_from']}}</p>
                        <p> <Strong>Destinaton: </strong> {{$storeData['destination_to']}}</p>
                    </div>
                </div>
                <div class="bg-theme card border-1 shadow rounded-3 mb-5">
                    <div class="card-body p-3 p-sm-3">


                        <p><strong>Booking Name: </strong> {{$storeData['booking_name']}}</p>
                        <p><strong>Booking Status: </strong> {{$storeData['status_message']}}</p>
                        <p><strong>Email : </strong> {{$storeData['email']}}</p>
                        <p><strong>Contact Number: </strong> {{$storeData['contact_number']}}</p>
                        <p><strong>Total Passanger: </strong> {{$storeData['total_passanger']}}</p>





                    </div>
                </div>

            </div>
            @else
            <div class="bg-theme card border-1 shadow rounded-3 mb-5">
                    <div class="card-body p-3 p-sm-3">
                        <p><strong>Unable to process request </strong> {{$storeData['status_message']}}</p>    
                    </div>
                </div>
            @endif
        </div>
    </section>

</x-airshare-layout>