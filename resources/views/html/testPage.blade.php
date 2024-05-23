<x-airshare-layout>

<section class="component component-hero hero">
	<div class="hero-image">
		<img src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" />
	</div>
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

       <div class="row">
		<div class="col-md-4 col-sm-6 col-12">
			<div class="why-wrapper">
				<img src="{{ asset('vendor/airsharex/assets/img/heli1.jpeg') }}" />
				<div class="content">
				<h3><a href="">Helecoptor Charter</a></h3>
					<p>Proin luctus semper lobortis. Nunc efficitur ipsum a nisl euismod porttitor. Phasellus ac imperdiet odio. Proin commodo mattis justo vel gravida. In sollicitudin hendrerit elit eu dapibus. Phasellus ut tortor a</p>
					<a href="" class="readmore">Read More</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-12">
			<div class="why-wrapper">
				<img src="{{ asset('vendor/airsharex/assets/img/heli1.jpeg') }}" />
				<div class="content">
					<h3><a href="">Helecoptor Charter</a></h3>
					<p>Proin luctus semper lobortis. Nunc efficitur ipsum a nisl euismod porttitor. Phasellus ac imperdiet odio. Proin commodo mattis justo vel gravida. In sollicitudin hendrerit elit eu dapibus. Phasellus ut tortor a</p>
					<a href="" class="readmore">Read More</a>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 col-12">
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
    </section><!-- End Wy choose us  Section -->


	<!-- ======= CTA Section ======= -->
	<section id="cta" class="cta">
	<div class="cta-image">
		<img src="{{ asset('vendor/airsharex/assets/img/cta-img.png') }}" />
	</div>
	<div class="cta-content">
		<div class="container">
		

        

      </div>
    </section>
	<!-- End CTA Section -->

<!-- ======= Offered tickets ======= -->
<section id="tickets" class="tickets">
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
		<div class="col-md-6">
			<div class="blog featured-blog">
				<figure class="img">
					<a href=""><img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt=""></a>
				</figure>
				<div class="blog-details">
					<h3><a href="">Lorem Ipsum is simply dummy text of the printing</a> </h3>
					<div class="date">21st Jan</div>
					<div class="excerpt">Maecenas volutpat, odio eget imperdiet faucibus, dui diam placerat turpis, non semper leo quam fringilla orci. Etiam vitae fringilla leo. Cras mollis ex vel mauris ullamcorper porta. Proin est felis, venenatis sed ex sit amet, luctus dictum tellus. Etiam</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="blog ">
				<figure class="img">
				<a href=""><img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt=""></a>
				</figure>
				<div class="blog-details">
					<h3><a href="">Lorem Ipsum is simply dummy text of the printing</a> </h3>
					<div class="date">21st Jan</div>
					
				</div>
			</div>
			<div class="blog ">
				<figure class="img">
				<a href=""><img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt=""></a>
				</figure>
				<div class="blog-details">
					<h3><a href="">Lorem Ipsum is simply dummy text of the printing</a></h3>
					<div class="date">21st Jan</div>
				
				</div>
			</div>
			<div class="blog ">
				<figure class="img">
				<a href=""><img src="{{ asset('vendor/airsharex/assets/img/services-3.jpg') }}" class="img-fluid" alt=""></a>
				</figure>
				<div class="blog-details">
					<h3><a href="">Lorem Ipsum is simply dummy text of the printing</a> </h3>
					<div class="date">21st Jan</div>
					
				</div>
			</div>
		</div>
	</div>
</div>

</section>
	
<!-- End Blogs-->

	
</x-airshare-layout>
