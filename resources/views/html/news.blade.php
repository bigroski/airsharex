<x-airshare-layout>
  @php
    $banner_image = asset('vendor/airsharex/assets/img/banner.jpeg');
    if(isset($selectedCategory) && $selectedCategory->featured_image != ''){
      $banner_image = $selectedCategory->featured_image;
    }
  @endphp
  <section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ $banner_image }}" data-offset="0">
    <div class="container">
      <div class="breadcrumb-content text-white">
        @if(isset($selectedCategory))
        <h1>{{$selectedCategory->name}}</h1>

        @else
        <h1>News</h1>
        @endif
        @if(isset($selectedCategory))
        <p>{{$selectedCategory->short_description}}</p>
        @endif
      </div>
    </div>
  </section>
  <section class="blog-single-area ">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-8 col-sm-12">
          <div class="row">
               @foreach($posts as $post)
               <div class="col-md-6 col-lg-4">
                   <div class="blog-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">
                     <div class="blog-item-img">
                       <img src="{{$post->featured_image}}" alt="Thumb">
                     </div>
                     <div class="blog-item-info">
                       <div class="blog-item-meta">
                         <ul>
                           <li>
                             <a href="#">
                               <i class="bi bi-person"></i> By {{$post->user->name}} </a>
                           </li>
                           <li>
                              <a href="#">
                                   <i class="bi bi-calendar"></i> {{$post->created_at->toFormattedDateString()}} 
                              </a>
                           </li>
                         </ul>
                       </div>
                       <h4 class="blog-title">
                         <a href="{{route('site.news-detail', $post->slug)}}">{{$post->title}}</a>
                       </h4>
                       <a class="btn btn-danger mt-3" href="{{route('site.news-detail', $post->slug)}}">Read More</a>
                     </div>
                   </div>
               </div>
               @endforeach
            
          </div>
          <div class="pagination-area">
            <div aria-label="Page navigation example">
               {!! $posts->links() !!}
              <ul class="pagination" style="display: none;">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">
                      <i class="far fa-angle-double-left"></i>
                    </span>
                  </a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">
                      <i class="far fa-angle-double-right"></i>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
          @include('partials.sidebar')
          
        </div>
      </div>
    </div>
  </section>
</x-airshare-layout>