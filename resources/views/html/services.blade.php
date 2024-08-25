<x-airshare-layout>
<!-- Breadcrumbs -->
<section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0" >
		<div class="container">
            <div class="breadcrumb-content">
                <h1 class="text-white">Services</h1>
                <p class="text-white">Discover our exceptional range of services designed to deliver unmatched convenience and luxury. From streamlined booking processes to personalized experiences, we are committed to providing you with the highest level of comfort and efficiency in every journey.</p>
            </div>
		</div>
</section>
<!-- Breadcrumbs -->

<!-- Services -->
@foreach($services as $service)
<section class="component component-image-text image-text image-on-@if($loop->even){{'right'}}@else{{'left'}}@endif">
    <div class="container d-flex align-items-sm-center">
        <div class="col-image">
        <img src="{{ $service->featured_image }}" alt="&nbsp;" width="440" height="500">
        </div>
        <div class="col-content">
            <div class=""></div>
            <h2 class="title">{{$service->name}}</h2>
            <div class="entry-content">
                {!! $service->description !!}
                
            </div>
                

        </div>
    </div>
    
    <div class="img-box-5"><img alt="spinner" loading="lazy" width="193" height="193" decoding="async" data-nimg="1" class="img-1 spin-right" srcset="{{ asset('vendor/airsharex/assets/img/about-bg.png') }}" src="{{ asset('vendor/airsharex/assets/img/about-bg.png') }}" style="color: transparent;"></div>
</section>
@endforeach
<!-- services -->

</x-airshare-layout>

