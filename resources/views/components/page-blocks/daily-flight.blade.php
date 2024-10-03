<!-- ======= CTA Section ======= -->
<section id="cta" class="cta header-image light" data-parallax="true" data-natural-height="1080"
	data-natural-width="1920" data-bleed="100" data-image-src="{{ asset($featured_image) }}">

	<div class="cta-content">
		<div class="container">
			<div class="row d-flex justify-content-center align-items-center text-white">
				<div class="col-md-6 col-sm-12 col-12">
					<h2><span>{{$title}}</span> {{$sub_title}}</h2>
				</div>
				<div class="col-md-5 col-sm-12 col-12 ">
					<div class="card">
						

						<div class="card-block ">
							<div class="cta-details ">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th colspan="2">
													<p><strong>Popular Routes&nbsp;</strong></p>
												</th>
											</tr>
										</thead>
										<tbody>
											
											@foreach($popular as $popularItem)
											<tr>
												<td>
													<a href="{{route('site.popularRoute', [$popularItem['RouteId'], 'name' => $popularItem['RouteName']])}}">{{$popularItem['RouteName']}}</a>
												</td>
												<td>
												<a class="btn btn-outline-dark btn-sm " href="{{route('site.popularRoute', [$popularItem['RouteId'], 'name' => $popularItem['RouteName']])}}">Search Flights</a>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>


							</div>


							
						</div>
					</div>

					
				</div>
			</div>



		</div>
</section>
<!-- End CTA Section -->