<x-airshare-layout>
<section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{$service->featuredImage}}" data-offset="0" >
		<div class="container">
            <div class="breadcrumb-content text-white">
                <h1>{{$service->name}}</h1>
                
            </div>
		</div>
</section>

<section class="blog-single-area ">
     <div class="container">
          <div class="row">
               <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="blog-single-wrapper">
                         <div class="blog-single-content">
                             
                              <div class="blog-info">
                                   <div class="blog-details">
            
                                    {!! $service->description !!}
                                        
                                    </div>
                                 
                              </div>
                              
                             
                         </div>
                    </div>
               </div>
               <div class="col-lg-3 col-md-4 col-sm-12">
                  
                    
               </div>
          </div>
     </div>
</section>


</x-airshare-layout>
