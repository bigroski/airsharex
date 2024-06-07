<!--team  -->
<section class="team-section" >
	<div class="container">
    <div class="sub-title">{{$leading}}</div>
    <div class="title d-flex ">{{$title}}</div>
        <div class="row gy-5">
            @foreach($teams as $team)
            <div class="col-xl-3 col-md-6 d-flex aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                <div class="team-member">
                    <div class="member-img">
                    <img src="{{ $team->featured_image }}" class="img-fluid" alt="">
                    </div>
                    <div class="member-info">
                    <div class="name"><h4>{{$team->name}}</h4>
                    <span>{{$team->position}}</span>
                    </div>
                    <div class="short-intro">{{$team->description}}</div>
                    
                    </div>
                </div>
            </div><!-- End Team Member -->
            @endforeach

            
        </div>
	</div>
</section>
<!-- team -->
