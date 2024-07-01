
<section class="about-section">
		<div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="sub-title">{{$leading}}</div>
                    <h2>{{$title}}</h2>
                    <p>{{$description}}</p>

                    <div class="row gy-4">
                      @if(is_array($counters))
                        @foreach($counters as $counter)
                      <div class="col-xl-4 col-md-6 d-flex aos-init aos-animate" data-aos="zoom-out">
                        <div class="count-item position-relative">
                          <div class="counts">
                          <span class="counter" data-count="+" data-to="{{$counter->url}}" data-speed="3000">{{$counter->url}}</span>
                            
                          </div>
                          <p>{{$counter->title}}</p>
                         
                        </div>
                      </div><!-- End Service Item -->
                        @endforeach
                      @endif
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="abt-img">
                        <img src="{{ asset($featured_image) }}" class="abt-img1" />
                        <img src="{{ asset($second_featured_image) }}" class="abt-img2" />
                    </div>
                </div>
               
            </div>
		</div>
</section>