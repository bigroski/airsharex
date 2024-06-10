<section class="history">
    <div class="container">
    <div class="sub-title">{{$leading}}</div>
    <div class="title d-flex ">{{$title}}</div>
    <div class="history-slider swiper">
        <swip-nav>
            <div class="arrow arrow-left">
				<i class="lni lni-arrow-left-circle"></i>
          </div>
		  <div class="arrow arrow-right">
		  		<i class="lni lni-arrow-right-circle"></i>
          </div>
        </swip-nav>
          <div class="swiper-wrapper">
            @foreach($counters as $counter)
            <div class="swiper-slide">
              <div class="history-list">
                 <div class="history-content">
                    <h5 class="year"> {{$counter->year}} </h5>
                    <p><strong>{{$counter->title}}</strong></p>
                    <p>{{$counter->url}}</p>
                    
                </div>
              </div>
            </div><!-- End testimonial item -->

            @endforeach
            
          </div>
          <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
