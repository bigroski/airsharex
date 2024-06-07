<x-airshare-layout>
  <section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0">
    <div class="container">
      <div class="breadcrumb-content text-white">
        <h1>News</h1>
        <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p>
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
          <aside class="sidebar">
            <div class="widget search">
              <h5 class="widget-title">Search</h5>
              <form class="blog-search-form">
                <input type="text" class="form-control" placeholder="Search Here...">
                <button type="submit">
                  <i class="far fa-search"></i>
                </button>
              </form>
            </div>
            <div class="widget category">
              <h5 class="widget-title">Category</h5>
              <div class="category-list">
               @foreach($categories as $category)
                <a href="#">
                  <i class="far fa-arrow-right"></i>{{$category->name}} <span>({{$category->posts()->count()}})</span>
                </a>
                @endforeach
                
              </div>
            </div>
            <div class="widget sidebar-tag">
              <h5 class="widget-title">Popular Tags</h5>
              <div class="tag-list">
                <a href="#">Booking</a>
                <a href="#">Business</a>
                <a href="#">Tour</a>
                <a href="#">Flight</a>
                <a href="#">Cruise</a>
                <a href="#">Activity</a>
                <a href="#">Luxury</a>
                <a href="#">Travel</a>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
</x-airshare-layout>