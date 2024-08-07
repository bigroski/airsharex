<x-airshare-layout>

<section class=" light ken-burn-center" data-parallax="scroll" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}">
	
	<div class="hero-content">
		<div class="container">
			<div class="hero-container">
			<h2>Helecoptor Flights</h2>
			<p>made Easy by</p>
			<h1>airshare X</h1>
			</div>
		</div>
	
	</div>
</section>
<section class="component-filter filter">
	<div class="container">
		<div class="filter-container">
		<ul class="nav nav-tabs horizontal-scroll-tabs" id="myTab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="book-tab" data-bs-toggle="tab" data-bs-target="#book" type="button" role="tab" aria-controls="book" aria-selected="true"><i class="lni lni-plane"></i> Book A Flight</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="schedule-tab" data-bs-toggle="tab" data-bs-target="#schedule" type="button" role="tab" aria-controls="schedule" aria-selected="false" tabindex="-1"><i class="lni lni-helicopter"></i> Schedule Flight</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="rescue-tab" data-bs-toggle="tab" data-bs-target="#rescue" type="button" role="tab" aria-controls="rescue" aria-selected="false" tabindex="-1"><i class="lni lni-first-aid"></i> Rescue</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="sharing-tab" data-bs-toggle="tab" data-bs-target="#sharing" type="button" role="tab" aria-controls="sharing" aria-selected="false" tabindex="-1"><i class="lni lni-users"></i> Sharing</button>
			</li>
			<!-- Add more items as needed -->
			</ul>

			<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="book" role="tabpanel" aria-labelledby="book-tab">
				<form>
			<div class="my-3">
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			<label class="form-check-label" for="inlineRadio1">One way</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
			<label class="form-check-label" for="inlineRadio2">Two way</label>
			</div>
			</div>
			<div class="row g-3">
			<div class="col-lg-2 col-md-4 ol-sm-6 col-12">
				<select class="test_skill form-control" placeholder="From">
					<option >KTM</option>
				</select>
			</div>
			<div class="col-lg-2 col-md-4 col-sm-6 col-12">
				<select class="test_skill form-control " placeholder="to">
					<option >POK</option>
				</select>
			</div>
			<div class="col-lg-5 col-md-4 col-sm-6 col-12">
				<div id="foo">
					<input type="text" name="start" id="start" class="form-control date-picker" placeholder="Depature">
					<input type="text" name="end" id="end" class="form-control date-picker" placeholder="Arrival">
				</div>
			</div>
				
			
			<div class="col-lg-2 col-md-4 col-sm-6 col-12 passanger-card">
				<button type="button" id="toggleButton" class="form-control passanger-popup" >passenger<span id="totalContainer">
        : <span id="totalQuantity">0</span>
    </span></button>
					<div class="count-table" id="popup">
						<div class="pass-count" >
							<h4>Adult</h4> 
							<div class="adder qty-container">
								<input type='button' value='-' class='qtyminus' field='quantity' />
								<input type='text' name='quantity' value='0' class='qty' />
								<input type='button' value='+' class='qtyplus' field='quantity' />
							</div>
						</div>
						<div class="pass-count">
							<h4>Child</h4> 
							<div class="adder qty-container">
								<input type='button' value='-' class='qtyminus' field='quantity' />
								<input type='text' name='quantity' value='0' class='qty' />
								<input type='button' value='+' class='qtyplus' field='quantity' />
							</div>
						</div>
						<div class="pass-count">
							<h4>Infant</h4> 
							<div class="adder qty-container">
								<input type='button' value='-' class='qtyminus' field='quantity' />
								<input type='text' name='quantity' value='0' class='qty' />
								<input type='button' value='+' class='qtyplus' field='quantity' />
							</div>
						</div>
					</div>

			</div>
			<div class="col-lg-1 col-md-4 col-sm-6 col-12">
				
				<button type="submit" class="btn btn-danger mb-3"><i class="lni lni-search"></i></button>
			</div>
			
			</div>
			</form>
			</div>
			<div class="tab-pane fade" id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
			<form>
			<div class="my-3">
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			<label class="form-check-label" for="inlineRadio1">One way</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
			<label class="form-check-label" for="inlineRadio2">Two way</label>
			</div>
			</div>
			<div class="row g-3">
			<div class="col-md-3 col-sm-6 col-12">
			
			<input type="text"  class="form-control" placeholder="From">
			</div>
			<div class="col-md-3 col-sm-6 col-12">
			
			<input type="text" class="form-control"  placeholder="To">
			</div>
			<div class="col-md-2 col-sm-6 col-12">
			
			<input type="date" class="form-control" >
			</div>
			<div class="col-md-2 col-sm-6 col-12">
			
			<input type="date" class="form-control" >
			</div>
			<div class="col-md-1 col-sm-6 col-12">
			
			<input type="number" class="form-control"  >
			</div>

			<div class="col-md-1 col-sm-6 col-12">
			<button type="submit" class="btn btn-danger mb-3">Search</button>
			</div>
			
			</div>
			</form>
			</div>
			<div class="tab-pane fade" id="rescue" role="tabpanel" aria-labelledby="rescue-tab">
			<form>
			<div class="my-3">
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			<label class="form-check-label" for="inlineRadio1">One way</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
			<label class="form-check-label" for="inlineRadio2">Two way</label>
			</div>
			</div>
			<div class="row g-3">
			<div class="col-md-3 col-sm-6 col-12">
			
			<input type="text"  class="form-control" placeholder="From">
			</div>
			<div class="col-md-3 col-sm-6 col-12">
			
			<input type="text" class="form-control"  placeholder="To">
			</div>
			<div class="col-md-2 col-sm-6 col-12">
			
			<input type="date" class="form-control" >
			</div>
			<div class="col-md-2 col-sm-6 col-12">
			
			<input type="date" class="form-control" >
			</div>
			<div class="col-md-1 col-sm-6 col-12">
			
			<input type="number" class="form-control"  >
			</div>

			<div class="col-md-1 col-sm-6 col-12">
			<button type="submit" class="btn btn-danger mb-3">Search</button>
			</div>
			
			</div>
			</form>
			</div>
			<div class="tab-pane fade" id="sharing" role="tabpanel" aria-labelledby="sharing-tab">
			<form>
			<div class="my-3">
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			<label class="form-check-label" for="inlineRadio1">One way</label>
			</div>
			<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
			<label class="form-check-label" for="inlineRadio2">Two way</label>
			</div>
			</div>
			<div class="row g-3">
			<div class="col-md-3 col-sm-6 col-12">
			
			<input type="text"  class="form-control" placeholder="From">
			</div>
			<div class="col-md-3 col-sm-6 col-12">
			
			<input type="text" class="form-control"  placeholder="To">
			</div>
			<div class="col-md-2 col-sm-6 col-12">
			
			<input type="date" class="form-control" >
			</div>
			<div class="col-md-2 col-sm-6 col-12">
			
			<input type="date" class="form-control" >
			</div>
			<div class="col-md-1 col-sm-6 col-12">
			
			<input type="number" class="form-control"  >
			</div>

			<div class="col-md-1 col-sm-6 col-12">
			<button type="submit" class="btn btn-danger mb-3">Search</button>
			</div>
			
			</div>
			</form>
			</div>
			</div>
		</div>
			
	</div>
</section>

 <!-- ======= schedule Section ======= -->
 <section id="scheduled-flight" class="scheduled-flight">
      <div class="container" data-aos="zoom-out">
		<div class="title d-flex justify-content-center">Schedule Flights</div>

        <div class="scheduled-slider swiper">
		
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide">
			<a href=""><img src="{{ asset('vendor/airsharex/assets/img/services-1.jpg') }}" class="img-fluid" alt="">
				<label>Langtang</label></a>
			</div>
            <div class="swiper-slide"><a href=""><img src="{{ asset('vendor/airsharex/assets/img/services-2.jpg') }}" class="img-fluid" alt=""><label>Pokhara</label></a></div>
            <div class="swiper-slide"><a href=""><img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt=""><label>EBC</label></a></div>
            <div class="swiper-slide"><a href=""><img src="{{ asset('vendor/airsharex/assets/img/services-4.jpg') }}" class="img-fluid" alt=""><label>Illam</label></a></div>
            <div class="swiper-slide"><a href=""><img src="{{ asset('vendor/airsharex/assets/img/services-5.jpg') }}" class="img-fluid" alt=""><label>Biratnagar</label></a></div>
            <div class="swiper-slide"><a href=""><img src="{{ asset('vendor/airsharex/assets/img/services-1.jpg') }}" class="img-fluid" alt=""><label>Dharan</label></a></div>
            <div class="swiper-slide"><a href=""><img src="{{ asset('vendor/airsharex/assets/img/services-2.jpg') }}" class="img-fluid" alt=""><label>Kathmandu</label></a></div>
            <div class="swiper-slide"><a href=""><img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt=""><label>Goshainkunda</label></a></div>
          </div>
		  <div class="arrow-left">
				<i class="lni lni-arrow-left-circle"></i>
          </div>
		  <div class="arrow-right">
		  		<i class="lni lni-arrow-right-circle"></i>
          </div>
        </div>

      </div>
    </section><!-- End schedule Section -->

<!-- ======= Wy choose us Section ======= -->
<section id="why-choose" class="why-choose">
      <div class="container">
		<div class="title d-flex justify-content-center">Why Choose Us</div>
		<div class="title-details">Proin luctus semper lobortis. Nunc efficitur ipsum a nisl euismod porttitor. Phasellus ac imperdiet odio. Proin commodo mattis justo vel gravida. In sollicitudin hendrerit elit eu dapibus. Phasellus ut tortor a dui viverra posuere id id lorem. Nulla et eros efficitur, pharetra felis quis, mollis felis.</div>
       <div class="row">
		<div class="col-lg-4 col-md-6 col-sm-12 col-12">
			<div class="why-wrapper">
				<img src="{{ asset('vendor/airsharex/assets/img/heli1.jpeg') }}" />
				<div class="content">
				<h3><a href="">Helecoptor Charter</a></h3>
					<p>Proin luctus semper lobortis. Nunc efficitur ipsum a nisl euismod porttitor. Phasellus ac imperdiet odio. Proin commodo mattis justo vel gravida. In sollicitudin hendrerit elit eu dapibus. Phasellus ut tortor a</p>
					<a href="" class="readmore">Read More</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12 col-12">
			<div class="why-wrapper">
				<img src="{{ asset('vendor/airsharex/assets/img/heli1.jpeg') }}" />
				<div class="content">
					<h3><a href="">Helecoptor Charter</a></h3>
					<p>Proin luctus semper lobortis. Nunc efficitur ipsum a nisl euismod porttitor. Phasellus ac imperdiet odio. Proin commodo mattis justo vel gravida. In sollicitudin hendrerit elit eu dapibus. Phasellus ut tortor a</p>
					<a href="" class="readmore">Read More</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-12 col-12">
			<div class="why-wrapper">
				<img src="{{ asset('vendor/airsharex/assets/img/heli1.jpeg') }}" />
				<div class="content">
				<h3><a href="">Helecoptor Charter</a></h3>
					<p>Proin luctus semper lobortis. Nunc efficitur ipsum a nisl euismod porttitor. Phasellus ac imperdiet odio. Proin commodo mattis justo vel gravida. In sollicitudin hendrerit elit eu dapibus. Phasellus ut tortor a</p>
					<a href="" class="readmore">Read More</a>
				</div>
			</div>
		</div>
	   </div>
      </div>
	  <div class="img-box-5"><img alt="spinner" loading="lazy" width="193" height="193" decoding="async" data-nimg="1" class="img-1 spin-right" srcset="{{ asset('vendor/airsharex/assets/img/about-bg.png') }}" src="{{ asset('vendor/airsharex/assets/img/about-bg.png') }}" style="color: transparent;"></div>
	
	</section><!-- End Wy choose us  Section -->
	
	
	<!-- ======= CTA Section ======= -->
	<section id="cta" class="cta header-image light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="100" data-image-src="{{ asset('vendor/airsharex/assets/img/hd-1.jpg') }}">
	
	<div class="cta-content">
		<div class="container">
		<div class="row d-flex justify-content-center align-items-center text-white">
			<div class="col-md-6 col-sm-12 col-12">
				<h2><span>Daily</span> Mountain Flight</h2>
			</div>
			<div class="col-md-6 col-sm-12 col-12 ">
				<div class="cta-details d-flex justify-content-end ">
					<div class="table-responsive">
						<table class="table table-striped">
							<tbody>
								<tr>
									<td>
									<p><strong>Airlines&nbsp;</strong></p>
									</td>
									<td>
									<p><strong>Departure time | Arrival Time&nbsp;</strong></p>
									</td>
								</tr>
								<tr>
									<td>
									<p>Buddha Airlines&nbsp;</p>
									</td>
									<td>
									<p>06:15 am -- 07:15 am every day&nbsp;</p>
									</td>
								</tr>
								<tr>
									<td>
									<p>Yeti Airlines&nbsp;</p>
									</td>
									<td>
									<p>06:30 am -- 07:30 am&nbsp; every day&nbsp;</p>
									</td>
								</tr>
								<tr>
									<td>
									<p>Shree Airlines&nbsp;</p>
									</td>
									<td>
									<p>06:30 am -- 07:30 am&nbsp; every day&nbsp;</p>
									</td>
								</tr>
							</tbody>
						</table>
					</div>


				</div>
				<div class="btn-link d-flex justify-content-end">
					<a  href="">Explore</a>
				</div>
				
			

			</div>
		</div>

        

      </div>
    </section>
	<!-- End CTA Section -->

<!-- ======= Offered tickets ======= -->
<section id="tickets" class="tickets ">
<div class="container">
<div class="title d-flex">Tickets in offers</div>
<div class="swiper grideSwiper">

    <div class="swiper-wrapper">
	<div class="swiper-slide">
				<div class="ticket-card">
					<div class="card-image">
						<img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt="">
					</div>
					<div class="card-details">
						<ul>
							<li class="sub-title">TIA - PKR</li>
							<li class="company" ><i class="lni lni-helicopter"></i> Prabhu Helicoptor</li>
							<li class="date"><i class="lni lni-calendar"></i> 21st January</li>
							<li class="count"><i class="lni lni-user"></i> 3 pax</li>
							<li class="amount">NPR 35000/- <del> NPR 55000/-</del></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="ticket-card">
					<div class="card-image">
						<img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt="">
					</div>
					<div class="card-details">
						<ul>
							<li class="sub-title">TIA - PKR</li>
							<li class="company" ><i class="lni lni-helicopter"></i> Prabhu Helicoptor</li>
							<li class="date"><i class="lni lni-calendar"></i> 21st January</li>
							<li class="count"><i class="lni lni-user"></i> 3 pax</li>
							<li class="amount">NPR 35000/- <del> NPR 55000/-</del></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="ticket-card">
					<div class="card-image">
						<img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt="">
					</div>
					<div class="card-details">
						<ul>
							<li class="sub-title">TIA - PKR</li>
							<li class="company" ><i class="lni lni-helicopter"></i> Prabhu Helicoptor</li>
							<li class="date"><i class="lni lni-calendar"></i> 21st January</li>
							<li class="count"><i class="lni lni-user"></i> 3 pax</li>
							<li class="amount">NPR 35000/- <del> NPR 55000/-</del></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="ticket-card">
					<div class="card-image">
						<img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt="">
					</div>
					<div class="card-details">
						<ul>
							<li class="sub-title">TIA - PKR</li>
							<li class="company" ><i class="lni lni-helicopter"></i> Prabhu Helicoptor</li>
							<li class="date"><i class="lni lni-calendar"></i> 21st January</li>
							<li class="count"><i class="lni lni-user"></i> 3 pax</li>
							<li class="amount">NPR 35000/- <del> NPR 55000/-</del></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="ticket-card">
					<div class="card-image">
						<img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt="">
					</div>
					<div class="card-details">
						<ul>
							<li class="sub-title">TIA - PKR</li>
							<li class="company" ><i class="lni lni-helicopter"></i> Prabhu Helicoptor</li>
							<li class="date"><i class="lni lni-calendar"></i> 21st January</li>
							<li class="count"><i class="lni lni-user"></i> 3 pax</li>
							<li class="amount">NPR 35000/- <del> NPR 55000/-</del></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="ticket-card">
					<div class="card-image">
						<img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt="">
					</div>
					<div class="card-details">
						<ul>
							<li class="sub-title">TIA - PKR</li>
							<li class="company" ><i class="lni lni-helicopter"></i> Prabhu Helicoptor</li>
							<li class="date"><i class="lni lni-calendar"></i> 21st January</li>
							<li class="count"><i class="lni lni-user"></i> 3 pax</li>
							<li class="amount">NPR 35000/- <del> NPR 55000/-</del></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="ticket-card">
					<div class="card-image">
						<img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt="">
					</div>
					<div class="card-details">
						<ul>
							<li class="sub-title">TIA - PKR</li>
							<li class="company" ><i class="lni lni-helicopter"></i> Prabhu Helicoptor</li>
							<li class="date"><i class="lni lni-calendar"></i> 21st January</li>
							<li class="count"><i class="lni lni-user"></i> 3 pax</li>
							<li class="amount">NPR 35000/- <del> NPR 55000/-</del></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="ticket-card">
					<div class="card-image">
						<img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt="">
					</div>
					<div class="card-details">
						<ul>
							<li class="sub-title">TIA - PKR</li>
							<li class="company" ><i class="lni lni-helicopter"></i> Prabhu Helicoptor</li>
							<li class="date"><i class="lni lni-calendar"></i> 21st January</li>
							<li class="count"><i class="lni lni-user"></i> 3 pax</li>
							<li class="amount">NPR 35000/- <del> NPR 55000/-</del></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="ticket-card">
					<div class="card-image">
						<img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt="">
					</div>
					<div class="card-details">
						<ul>
							<li class="sub-title">TIA - PKR</li>
							<li class="company" ><i class="lni lni-helicopter"></i> Prabhu Helicoptor</li>
							<li class="date"><i class="lni lni-calendar"></i> 21st January</li>
							<li class="count"><i class="lni lni-user"></i> 3 pax</li>
							<li class="amount">NPR 35000/- <del> NPR 55000/-</del></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="swiper-slide">
				<div class="ticket-card">
					<div class="card-image">
						<img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt="">
					</div>
					<div class="card-details">
						<ul>
							<li class="sub-title">TIA - PKR</li>
							<li class="company" ><i class="lni lni-helicopter"></i> Prabhu Helicoptor</li>
							<li class="date"><i class="lni lni-calendar"></i> 21st January</li>
							<li class="count"><i class="lni lni-user"></i> 3 pax</li>
							<li class="amount">NPR 35000/- <del> NPR 55000/-</del></li>
						</ul>
					</div>
				</div>
			</div>
    </div>
	
    <div class="swiper-pagination"></div>
  </div>
</div>


</section>
<!-- End Offered tickets-->

<!-- ======= Start Blogs ======= -->
<section id="blogs" class="blogs">
<div class="container">
<div class="title d-flex justify-content-center">Blogs</div>
	<div class="row">
		<div class="col-lg-6 col-md-12">

		

			<div class="blog featured-blog">
				<div class="background-img" style="background-image: url('{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}')"></div>
				<div class="post__text inverse-text">
					<div class="post__text-wrap">
						<div class="post__text-inner">
							<h3 class="post__title typescale-2">Mt. Everest Flight Tour for Nepali, Indian and Foreigners - Discount Prices</h3>
							<div class="post__excerpt">The Shadow Brokers group unleashed an exploit that fueled a global ransomware attack. Now they say they've got more where that came from.</div>
							<div class="post__meta">
					 <time class="time published" datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am">
					 <i class="lni lni-alarm-clock"></i> 2 hours ago</time>
					</div>
				</div>
			</div>
		</div>
				<a href="#single-url" class="link-overlay"></a>
			</div>
		</div>
		<div class="col-lg-6 col-md-12">
		<div class="blog ">
			<div class="post__thumb">
				<a href="#single-url"><img src="{{ asset('vendor/airsharex/assets/img/blog1.jpg') }}"></a>
			</div>
			<div class="post__text">
				<h3 class="post__title typescale-2"><a href="#single-url">Best season for Mountain Flight to see Mt. Everest</a></h3>
				<div class="post__meta">
					 <time class="time published" datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours ago</time> 
					</div>
				</div>
			</div>
			<div class="blog ">
			<div class="post__thumb">
				<a href="#single-url"><img src="{{ asset('vendor/airsharex/assets/img/blog2.jpg') }}"></a>
			</div>
			<div class="post__text">
				<h3 class="post__title typescale-2"><a href="#single-url">Everest Mountain Flight in Nepal – From Kathmandu</a></h3>
				<div class="post__meta">
					 <time class="time published" datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours ago</time> 
					</div>
				</div>
			</div>
			<div class="blog ">
			<div class="post__thumb">
				<a href="#single-url"><img src="{{ asset('vendor/airsharex/assets/img/blog3.jpg') }}"></a>
			</div>
			<div class="post__text">
				<h3 class="post__title typescale-2"><a href="#single-url">Tesla will reveal the finished Model 3 in July</a></h3>
				<div class="post__meta">
					 <time class="time published" datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours ago</time> 
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

</section>
	
<!-- End Blogs-->

	
</x-airshare-layout>
