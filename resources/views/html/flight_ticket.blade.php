<x-airshare-layout>
    <!-- Breadcrumbs -->

    <section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0">
        <div class="container">
            <div class="breadcrumb-content text-white">
                <h1>Flight Ticket Details</h1>
                <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p>
            </div>
        </div>
    </section>
    <!-- Breadcrumbs -->

    <!-- About -->
    <section class="about-section">
        <div class="container">
            <div class="booking-details">

           <p> <Strong>Ticket No:  </strong> {{$data['TicketBookingNumber']}}</p>
           <p> <Strong>E-Ticket No:  </strong> {{$data['eTicketNumber']}}</p>

                <div class=" card border-1 shadow rounded-3 mb-5">
                    <div class="card-body p-4 p-sm-4">

                        
                             <img height=50 width=50 src="{{$data['CompanyLogo'] }}" alt="logo">
                            <h5>{{$data['OperatorName']}}</h5><span>{{$data['CompanyWebUrl']}}</span>

                        
                        
                        <p><strong>Operator Address: </strong> {{$data['OperatorAddress1']}}</p>
                        <p><strong>Operator Email: </strong> {{$data['OperatorEmailID']}}</p>
                        <p><strong>Contact No: </strong> {{$data['ContactNumber']}}</p>
                        <p><strong>Emergency Contact No: </strong> {{$data['EmergencyContactNumber']}}</p>

                    </div>
                  
                </div>
                <div class="bg-theme card border-1 shadow rounded-3 mb-5">
                    <div class="card-body p-3 p-sm-3">

                        <p><strong>Ticket Booking Agent. : </strong> {{$data['BookingAgent']}}
                        </p>

                        <p><strong>PNR: </strong> {{$data['MYPNR']}}</p>

                        <p><strong>Booking Name: </strong> {{$data['BookingName']}}</p>
                        <p><strong>Booking Status: </strong> {{$data['BookingStatus']}}</p>
                        <p><strong>Ticket Status: </strong> {{$data['TicketStatus']}}</p>
                        <p><strong>Payment Status: </strong> {{$data['PaymentStatus']}}</p>
                        <p><strong>Special Instruction: </strong> {{$data['SpecialInstruction']}}</p>
                        <p><strong>Total Amount: </strong> {{$data['TotalReceivedAmount']}}</p>

                        



                    </div>
                </div>




            </div>
            <div class="row">
                <div class="card border-1 shadow rounded-3 mb-2">

                    <h4 class="pt-2">Flight Details</h4>
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                            <tr class="booking-details">

                                <th>Sector</th>
                                <th>Deaprture Date </th>
                                <th>Deaprture Date (B.s.)</th>
                                <th>Deaprture time</th>

                                <th>Arrival Time </th>

                                <th>Flight No</th>
                                <th>Flight Charge</th>
                                <th>Departure Station</th>
                                <th>Arrival Station</th>
                                <th>Duration</th>

                            </tr>
                        </thead>
                        <tr>
                            <td>{{$data['DHTripDetail']['RouteName']}}</td>
                            <td>{{$data['DHTripDetail']['TripDate'] }}</td>
                            <td>{{$data['DHTripDetail']['TripDateBS'] }}</td>
                            <td>{{ $data['DHTripDetail']['DepartureTime']}}</td>
                            <td>{{ $data['DHTripDetail']['ArrivalTime']}}</td>

                            <td>{{$data['DHTripDetail']['CarriageNumberRef']}}</td>
                            <td> 5800</td>
                            <td>{{$data['DHTripDetail']['DepartureStation']}}</td>
                            <td>{{$data['DHTripDetail']['ArrivalStation']}}</td>
                            <td>{{$data['DHTripDetail']['ExpectedTravelDuration']}}</td>

                        </tr>
                    </table>
                </div>
<div class="flex">
                 <h5>Passanger Info</h5>
                 <p> (   Total no of passanger: {{$data['TotalSeat']}})</p>
</div>
                <div class="card border-1 shadow rounded-3 mb-2">
                    <table class="table table-bordered">

                    <thead class="thead-dark">
                    <tr class="booking-details">

                            <td>#SN</td>
                            <td>Ticket No</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Conatact No</td>

                            <td>Picking point</td>

                            <td>Droping Point</td>
                    </tr>
                    </thead>
                    @forelse ($data['TicketPaxDetail'] as $key=>$passanger)
                        <tr>
                            <td>{{$key +1}}</td>
                            <td>{{$passanger['TicketNo']}}</td>
                            <td>{{$passanger['Salutation']." " .
                                $passanger['PaxName']}}</td>
                                
                            <td>{{$passanger['EmailId']}}</td>
                            <td>{{$passanger['ContactNumber'] ??'N/A'}}</td>
                            <td>{{$passanger['PickingPoint']??'N/A'}}</td>
                            <td>{{$passanger['DropingPoint']??'N/A'}}</td>

                        </tr>
                        @empty
                                   <p>No data found.</p>
                                   @endforelse
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- About -->

</x-airshare-layout>