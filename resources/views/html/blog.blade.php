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
            @foreach($posts as $post)
            <div class="col-md-4">
                <div class="card-content">
                    <div class="card-img">
                        <img src="{{$post->featured_image}}" alt="">
                        <span><h4>{{$post->created_at->toDayDateTimeString()}}</h4></span>
                    </div>
                    <div class="card-desc">
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->short_description}}</p>
                            <a href="{{route('blogDetail', $post->id)}}" class="btn-card">Read More</a>   
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>
</section>
<!-- details card section starts from here -->
               <div class="col-md-12 gap10"></div>
             </div>
</div>
</x-tukicms::site-layout>

