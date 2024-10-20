<div class="col-xxl-6 order-2 order-xxl-1">
										<!--begin::Advance Table Widget 2-->
	<div class="card card-custom card-stretch gutter-b">
		<!--begin::Header-->
		<div class="card-header border-0 pt-5">
			<h3 class="card-title align-items-start flex-column">
				<span class="card-label font-weight-bolder text-dark">Recent On Demand</span>
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
						@foreach($onDemands as $booking)
						
						<tr>
							<td class="pl-0 py-4">
								<b>{{$booking->destination_from}} To {{$booking->destination_to}}</b><br />
								<a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">{{$booking->booking_name}}</a>
								<div>
									<span class="font-weight-bolder">Phone:</span>
									<a class="text-muted font-weight-bold text-hover-primary" href="#">{{$booking->contact_number}}</a>
								</div><br />

							</td>
							<td class="">
								<span class="text-dark-75 font-weight-bolder d-block font-size-lg">Seats. {{$booking->total_passanger}}</span>
								<span class="text-muted font-weight-bold">{{$booking->booking_notes}}</span>
							</td>
							
							<td class="text-right">
								<span class="label label-lg label-light-success label-inline">{{$booking->arrival_date}}</span>
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