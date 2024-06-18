<aside class="sidebar">
                         <div class="widget search">
                              <h5 class="widget-title">Search</h5>
                              <form action="{{route('news.search')}}" method="GET" class="blog-search-form">
                                   <input type="text" name="query" class="form-control" placeholder="Search Here...">
                                   <button type="submit">
                                        <i class="far fa-search"></i>
                                   </button>
                              </form>
                         </div>
                         <div class="widget category">
                              <h5 class="widget-title">Category</h5>
                              <div class="category-list">
                                   @foreach($categories as $category)
                                   <a href="{{route('site.news-category', $category->slug)}}">
                                        <i class="far fa-arrow-right"></i>{{$category->name}} <span>({{$category->posts()->count()}})</span>
                                   </a>
                                   @endforeach
                              </div>
                         </div>
                         <div class="widget recent-post">
                              <h5 class="widget-title">Recent Post</h5>
                              @foreach($recents as $recent)
                              <div class="recent-post-single">
                                   <div class="recent-post-img">
                                        <img src="{{$recent->featured_image}}" alt="thumb">
                                   </div>
                                   <div class="recent-post-bio">
                                        <h6>
                                             <a href="{{route('site.news-detail', $recent->slug)}}">{{$recent->title}}</a>
                                        </h6>
                                        <span>
                                             <i class="bi bi-stopwatch"></i>{{$recent->created_at->toFormattedDateString()}} </span>
                                   </div>
                              </div>
                              @endforeach
                         </div>
                       
                         <div class="widget sidebar-tag">
                              <h5 class="widget-title">Popular Tags</h5>
                              <div class="tag-list">
                                   @foreach($popularTags as $tags)
                                   <a href="{{route('site.news-tag', $tags->slug)}}">
                                        {{$tags->name}}</a>
                                   @endforeach
                              </div>
                         </div>
                    </aside>