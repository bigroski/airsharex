<!-- Featured servces -->
<section id="featured-services" class="featured-services">
      <div class="container">
     
	      <div class="d-flex justify-content-center sub-title">Simplifying</div>
	      <h3 class="d-flex justify-content-center title">Featured Services</h3>
      
        <div class="row gy-4">
          @if($featuredServices)
          @foreach($featuredServices as $service)
          <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="zoom-out">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">{{$service->name}}</a></h4>
              <p>{{$service->short_description}}</p>
            </div>
          </div><!-- End Service Item -->
          @endforeach
          @endif

          
        </div>

      </div>
</section>
<!-- Featured services -->