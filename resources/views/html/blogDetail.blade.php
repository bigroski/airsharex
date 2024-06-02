<x-tukicms::site-layout>
<div class="container">
	 <div id="blog" class="row"> 
                
      	<div class="col-sm-2 paddingTop20">
      		<x-blog-sidebar />
        </div>
               
<!-- details card section starts from here -->
<section class="details-card">
    <div class="container">
        <div class="row">
            <h3>{{$post->title}}</h3>
            <span><h4>{{$post->created_at->toDayDateTimeString()}}</h4></span>
            <img src="{{$post->featured_image}}" alt="">
            {!! $post->description !!}
            
            
        </div>
    </div>
</section>
<!-- details card section starts from here -->
               <div class="col-md-12 gap10"></div>
             </div>
</div>
</x-tukicms::site-layout>

