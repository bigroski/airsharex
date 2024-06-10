<x-airshare-layout>
<section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0" >
		<div class="container">
            <div class="breadcrumb-content text-white">
                <h1>{{$post->title}}</h1>
                <p>{{$post->short_description}}</p>
            </div>
		</div>
</section>

<section class="blog-single-area ">
     <div class="container">
          <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="blog-single-wrapper">
                         <div class="blog-single-content">
                              <div class="blog-thumb-img">
                              <img src="{{ $post->featured_image }}" class="img-fluid" alt="">
                              </div>
                              <div class="blog-info">
                                   <div class="blog-meta">
                                        <div class="blog-meta-left">
                                             <ul>
                                                  @if($post->user)
                                                  <li>
                                                       <i class="bi bi-person"></i>
                                                            <a href="#">{{$post->user->name}}</a>
                                                       </li>
                                                  <li>
                                                  @endif
                                                  <i class="bi bi-chat-left"></i>3.2k Comments
                                                  </li>
                                                  <li>
                                                  <i class="bi bi-hand-thumbs-up"></i>1.4k Like
                                                  </li>
                                                  <li>
                                                  <i class="bi bi-calendar"></i>{{$post->created_at->toFormattedDateString()}}
                                                  </li>
                                             </ul>
                                        </div>
                                        <div class="blog-meta-right">
                                             <a href="#" class="share-link">
                                             <i class="bi bi-share"></i>Share </a>
                                        </div>
                                   </div>
                                   <div class="blog-details">
                                        <h3 class="blog-details-title mb-20">{{$post->title}}</h3>
                                        {!! $post->description !!}
                                        <hr>
                                        @if($post->categories)
                                        <div class="blog-details-tags pb-20">
                                             <h5>Tags : </h5>
                                             <ul>
                                                  @foreach($post->categories as $category)
                                                  <li>
                                                       <a href="#">{{$category->name}}</a>
                                                  </li>
                                                  @endforeach
                                                  @foreach($post->tags as $tag)
                                                  <li>
                                                       <a href="#">{{$tag->name}}</a>
                                                  </li>
                                                  @endforeach
                                             </ul>
                                        </div>
                                        @endif
                                   </div>
                                 
                              </div>
                              <div class="blog-comments">
                                   <h3>Comments (20)</h3>
                                   <div class="blog-comments-wrapper">
                                        <div class="blog-comments-single">
                                             <div class="blog-comments-img">
                                             
                                                  <img src="http://i.pravatar.cc/500?img=1" alt="thumb">
                                             </div>
                                             <div class="blog-comments-content">
                                                  <h5>Jesse Sinkler</h5>
                                                  <span>
                                                       <i class="bi bi-stopwatch"></i> 29 August, 2024 </span>
                                                  <p>There are many variations of passages the majority have suffered in some injected humour or randomised words which don't look even slightly believable.</p>
                                                  <a href="#">
                                                       <i class="far fa-reply"></i> Reply </a>
                                             </div>
                                        </div>
                                        <div class="blog-comments-single blog-comments-reply">
                                             <div class="blog-comments-img">
                                                  <img src="http://i.pravatar.cc/500?img=2" alt="thumb">
                                             </div>
                                             <div class="blog-comments-content">
                                                  <h5>Daniel Wellman</h5>
                                                  <span>
                                                       <i class="bi bi-stopwatch"></i> 29 August, 2024 </span>
                                                  <p>There are many variations of passages the majority have suffered in some injected humour or randomised words which don't look even slightly believable.</p>
                                                  <a href="#">
                                                       <i class="far fa-reply"></i> Reply </a>
                                             </div>
                                        </div>
                                        <div class="blog-comments-single">
                                             <div class="blog-comments-img">
                                                  <img src="http://i.pravatar.cc/500?img=3" alt="thumb">
                                             </div>
                                             <div class="blog-comments-content">
                                                  <h5>Kenneth Evans</h5>
                                                  <span>
                                                       <i class="bi bi-stopwatch"></i> 29 August, 2024 </span>
                                                  <p>There are many variations of passages the majority have suffered in some injected humour or randomised words which don't look even slightly believable.</p>
                                                  <a href="#">
                                                       <i class="far fa-reply"></i> Reply </a>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="blog-comments-form">
                                        <h3>Leave A Comment</h3>
                                        <form action="#">
                                             <div class="row">
                                                  <div class="col-md-6">
                                                       <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Your Name*">
                                                       </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                       <div class="form-group">
                                                            <input type="email" class="form-control" placeholder="Your Email*">
                                                       </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                       <div class="form-group">
                                                            <textarea class="form-control" rows="5" placeholder="Your Comment*"></textarea>
                                                       </div>
                                                       <button type="submit" class="theme-btn">Post Comment <i class="far fa-paper-plane"></i>
                                                       </button>
                                                  </div>
                                             </div>
                                        </form>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-12">
                    @include('partials.sidebar')
                    
               </div>
          </div>
     </div>
</section>


</x-airshare-layout>

