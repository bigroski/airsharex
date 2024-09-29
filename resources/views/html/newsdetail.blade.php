<x-airshare-layout>

@section('page_title', $post->title.' | ')
  
@section('meta')
<meta property="og:title" content="{{$post->title}}" />
<meta name="description" content="{{$post->short_description}}" />
<meta property="og:url" content="{{route('site.news-detail', $post->slug)}}" />
<meta property="og:image" content="{{ $post->featured_image }}" />
@endsection
  
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
                                                  <i class="bi bi-calendar"></i>{{$post->created_at->toFormattedDateString()}}
                                                  </li>
                                             </ul>
                                        </div>
                                        <div class="blog-meta-right">
                                             <?php $currentPageLink = url()->full(); ?>
                                                {!! Share::page($currentPageLink,'Share in social Meia')
                                                ->facebook()
                                                ->twitter()
                                                ->linkedin('Extra linkedin summary can be passed here')
                                                ->whatsapp() !!}
                                             <!-- <a href="#" class="share-link">
                                             <i class="bi bi-share"></i>Share </a> -->
                                        </div>
                                   </div>
                                   <div class="blog-details">
                                        <h3 class="blog-details-title mb-20">{{$post->title}}</h3>
                                        {!! $post->description !!}
                                        <hr>
                                        @if($post->categories)
                                        <div class="blog-details-tags pb-20">
                                             <!-- <h5>Tags : </h5> -->
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
                                   <h3>Comments ({{$post->comments()->count()}})</h3>
                                   <div class="blog-comments-wrapper">
                                        @foreach($post->comments as $comment)
                                        <div class="blog-comments-single">
                                             <div class="blog-comments-img">
                                             
                                                  <img src="{{asset('vendor/airsharex/assets/img/avatar.jpeg')}}" alt="thumb" style="width: 70px;">
                                             </div>
                                             <div class="blog-comments-content">
                                                  <h5>{{$comment->name}}</h5>
                                                  <span>
                                                       <i class="bi bi-stopwatch"></i> {{$comment->created_at->toFormattedDateString()}} </span>
                                                  <p>{{$comment->description}}</p>
                                                  <!-- <a href="#">
                                                       <i class="far fa-reply"></i> Reply </a> -->
                                             </div>
                                        </div>
                                        @endforeach
                                   </div>
                                   <div class="blog-comments-form">
                                        <h3>Leave A Comment</h3>
                                        <form action="{{route('site.processComment')}}" method="post">
                                             @csrf
                                             <div class="row">
                                                  <div class="col-md-6">
                                                       <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Your Name*" name="name" required>
                                                       </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                       <div class="form-group">
                                                            <input type="email" class="form-control" placeholder="Your Email*" name="email" required>
                                                       </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                       <div class="form-group">
                                                            <textarea class="form-control" rows="5" placeholder="Your Comment*" name="description" required></textarea>
                                                       </div>
                                                       <div id="recaptcha"></div>
                                                       <input type="hidden" name="post_id" value="{{$post->id}}">
                                                       <button type="submit" class="btn btn-lg btn-danger mt-3">Post Comment <i class="far fa-paper-plane"></i>
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

@section('page-scripts')
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('recaptcha', {
              'sitekey' : '6LekVwsTAAAAABjA9Aro5dm2mrl3kb6hMk6VsHhl'
            });
        };
    </script>

@endsection
</x-airshare-layout>

