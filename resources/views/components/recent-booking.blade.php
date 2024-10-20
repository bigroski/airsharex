<div class="col-xxl-6 order-2 order-xxl-1">
										<!--begin::Advance Table Widget 2-->
	<div class="card card-custom card-stretch gutter-b">
		<!--begin::Header-->
		<div class="card-header border-0 pt-5">
			<h3 class="card-title align-items-start flex-column">
				<span class="card-label font-weight-bolder text-dark">Recent Bookings</span>
				<!-- <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span> -->
			</h3>
		</div>
		<!--end::Header-->
		<!--begin::Body-->
		<div class="card-body pt-2 pb-0 mt-n3">
			<div class="table-responsive">
				<table class="table table-borderless table-vertical-center">
					<thead>
						
					</thead>
					<tbody>
						@foreach($bookings as $booking)
						@php
                      	$data = $booking->searchDetail;
						@endphp
						<tr>
							<td class="pl-0 py-4">
								<strong style="color: red;"> #: {{$booking->booking_reference_id}}</strong><br />
								<b>{{$data['DepartureCity']}} To {{$data['ArrivalCity']}}</b><br />
								
								Operator: {{$data['OperatorName']}}<br />
								<span class="text-muted font-weight-500">Seats: {{$booking->total_seats}}</span><br />
								<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{$booking->booking_name}}</a>
								<div>
									<span class="font-weight-bolder">Phone:</span>
									<a class="text-muted font-weight-bold text-hover-primary" href="#">{{$booking->booking_emergency_contact}}</a>
								</div><br />

							</td>
							<td class="text-right">
								<span class="text-dark-75 font-weight-bolder d-block font-size-lg">NPR. {{$booking->total_amount}}</span>
								<span class="text-muted font-weight-bold">{{$booking->payment_method}}</span>
							</td>
							
							<td class="text-right">
								<span class="label label-lg label-light-success label-inline">{{$booking->confirmation_status}}</span>
							</td>
							
						</tr>
						@endforeach
						
					</tbody>
				</table>
			</div>
		</div>
		<!--end::Body-->
	</div>
	<!--end::Advance Table Widget 2-->
</div>