<!-- ======= Start Blogs ======= -->
<section id="blogs" class="blogs">
<div class="container">
<div class="title d-flex justify-content-center">{{$title}}</div>
	<div class="row">
		@php
			$first = $posts->first();
			
			$slice = $posts->slice(1);
		@endphp
		<div class="col-lg-6 col-md-12">

		

			<div class="blog featured-blog">
				<div class="background-img" style="background-image: url('{{ $first->featured_image }}')"></div>
				<div class="post__text inverse-text">
					<div class="post__text-wrap">
						<div class="post__text-inner">
							<h3 class="post__title typescale-2">{{$first->title}}</h3>
							<div class="post__excerpt">{{$first->short_description}}</div>
							<div class="post__meta">
					 <time class="time published" datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am">
					 <i class="lni lni-alarm-clock"></i> {{ $first->created_at->diffForHumans(Carbon\Carbon::now()) }}</time>
					</div>
				</div>
			</div>
			</div>
				<a href="{{route('site.news-detail', $first->slug)}}" class="link-overlay"></a>
			</div>
		</div>
		<div class="col-lg-6 col-md-12">
			@foreach($slice as $slicePost)
			<div class="blog ">
				<div class="post__thumb">
					<a href="{{route('site.news-detail', $slicePost->slug)}}"><img src="{{ $slicePost->featured_image }}"></a>
				</div>
				<div class="post__text">
					<h3 class="post__title typescale-2"><a href="{{route('site.news-detail', $slicePost->slug)}}">{{$slicePost->title}}</a></h3>
					<div class="post__meta">
						 <time class="time published" datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>{{ $slicePost->created_at->diffForHumans(Carbon\Carbon::now()) }}</time> 
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>

</section>
	
<!-- End Blogs-->
