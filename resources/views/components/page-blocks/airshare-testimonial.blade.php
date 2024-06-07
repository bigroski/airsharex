
<!--testimonials  -->
<section class="testimonials-section" >
		<div class="container">
    <div class="sub-title">{{$leading}}</div>
    <div class="title d-flex ">{{$title}}</div>
    <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">
            @foreach($testimonials as $testimonial)
            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="thumb d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img src="{{ $testimonial->featured_image }}" class="testimonial-img" alt="">
                  </div>
                  <div class="flex-grow-1 ms-3"><h6 class="mb-0">{{$testimonial->testifier_name}}</h6><p class="mb-0">{{$testimonial->testifier_location}}</p></div>
                </div>
             
                <div class="testimonial-content">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  {{$testimonial->description}}
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                </div>
                
              </div>
            </div><!-- End testimonial item -->
            @endforeach
            
            
          </div>
          <div class="swiper-pagination"></div>
        </div>
    

</div>
		</div>
</section>
<!-- testimonials -->