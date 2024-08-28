<x-airshare-layout>
<section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0" >
		<div class="container">
            <div class="breadcrumb-content text-white">
                <h1>Gallery</h1>
                <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p>
            </div>
		</div>
</section>
 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio" data-aos="fade-up">



<div class="container" data-aos="fade-up" data-aos-delay="200">

  <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">


    <div class="row g-6 portfolio-container">
    @if($galleries->isEmpty())
        <p>No gallery data available.</p>
    @else
    @foreach($galleries as $key => $gallery)
               
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="{{ $gallery->getFeaturedImageAttribute()}}" alt="Album Feature" class="{{$gallery->name}}" onclick="openAlbum('albumContainer-{{$key}}')">
        <h2>{{$gallery->name}}</h2>
        <p>{{$gallery->description}}</p>
        <div id="albumContainer-{{$key}}" class="lightbox-cont" style="display:none;">
            @foreach($gallery->allGalleryImages as $images)
            <a href="{{ $images->getFullUrl() }}" title="" data-gallery="portfolio-gallery" class="glightbox preview-link">
              <img src="{{ $images->getFullUrl() }}" class="img-fluid" alt="">
            </a> 
            @endforeach
            <!-- Add more child images as needed -->
      </div>
        <!-- <a href="{{ $gallery->getFeaturedImageAttribute()}}" title="Branding 3" data-gallery="portfolio-gallery" class="glightbox preview-link">
          <img src="{{ $gallery->getFeaturedImageAttribute()}}" class="img-fluid" alt="">
        </a> 
        <div class="portfolio-info">
          <h4>{{$gallery->name}}</h4>
        </div> -->
        
      </div><!-- End Portfolio Item -->
    @endforeach
    @endif
      

    </div><!-- End Portfolio Container -->

  </div>

</div>
</section><!-- End Portfolio Section -->

<script>
function openAlbum(galleryID) {
    alert(galleryID);

    document.getElementById(galleryID).style.display = "block";
    document.querySelector('#'+galleryID+' a').click();
    document.addEventListener('lightbox:close', function(){
      hideAlbumContainer(galleryID);
      $('.lightbox-cont').hide();
    });
}

function hideAlbumContainer(galleryID) {
  // alert(galleryId);
    document.getElementById(galleryID).style.display = "none";
}

const observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
        if (!document.querySelector('.lightboxOverlay')) {
            hideAlbumContainer();
        }
    });
});

observer.observe(document.body, { childList: true, subtree: true });
</script>
</x-airshare-layout>

