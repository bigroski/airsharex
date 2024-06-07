
 <section id="scheduled-flight" class="scheduled-flight">
      <div class="container" data-aos="zoom-out">
		<div class="title d-flex justify-content-center">{{$title}}</div>

        <div class="scheduled-slider swiper">
		
          <div class="swiper-wrapper align-items-center">
          	@if(is_array($locations))
          		@foreach($locations as $location)
            <div class="swiper-slide">
			<a href="{{$location->url}}">
				@if(property_exists($location, 'featured_image'))
				<img src="{{ $location->featured_image }}" class="img-fluid" alt="">
				@endif
				<label>{{$location->title}}</label></a>
			</div>
				@endforeach
			@endif
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
