<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$basicSetting->site_name}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
        <style>
            
        </style>
        <link href="{{asset('vendor/airsharex/assets/css/tailwind.css')}}" rel="stylesheet">
        <!-- Vendor CSS Files -->
        <link href="{{asset('vendor/airsharex/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/airsharex/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/airsharex/assets/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/airsharex/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/airsharex/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
        <link  href="{{asset('vendor/airsharex/assets/css/jquery.timepicker.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/airsharex/assets/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/airsharex/assets/css/select2.min.css')}}" rel="stylesheet" />
        <!-- Styles -->
        <link href="{{asset('vendor/airsharex/assets/css/lineicons.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/airsharex/assets/css/all-fontawesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('vendor/airsharex/assets/css/variables.css')}}" rel="stylesheet">
        <link href="{{asset('/vendor/airsharex/assets/css/airshare.css')}}" rel="stylesheet">
        <!-- <script src="https://kit.fontawesome.com/6feba47ccd.js" crossorigin="anonymous"></script> -->
        <!-- <script src="vendor/jquery/dist/jquery.min.js"></script>
        <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
 -->
        <script  src="{{asset('js/validation/flightSearchValidation.js')}}" crossorigin="anonymous"></script>

        
    </head>
    <body class="antialiased">
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{url('/')}}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{$appearanceSetting->logo}}" alt="">
        <!-- <h1>HeroBiz<span>.</span></h1> -->
        
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          {!! getFrontEndMenu() !!}
        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->
      @if(Auth::user())
      <div class="nav-right">   <a class="signup" href="{{url('/profile')}}"><i class="lni lni-user"></i> {{Auth::user()->name}}</a> </div>
      @else
      <div class="nav-right"> 
          <a class="login" href="{{route('public.login')}}">Login</a>  
          <a class="signup" href="{{route('public.register')}}">Signup</a> </div>
      @endif
    </div>
  </header><!-- End Header -->
        @include('partials.flash')
        {{$slot}}


        <footer style="background:url({{asset('vendor/airsharex/assets/img/footer-bg.jpeg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                      <div class="footer-widget-contact">
                          <a href="{{url('/')}}" class="footer-logo d-flex align-items-center">
                            <img src="{{asset('vendor/airsharex/assets/img/logo.png')}}" alt="">
                          </a>
                          <div class="contact-info">
                            <ul>
                              <li>{{$basicSetting->address}}</li>
                              <li><strong>Phone:</strong> {{$basicSetting->contact_number}}</li>
                              <li><strong>Email:</strong> {{$basicSetting->email}}</li>
                            </ul>
                          </div>
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                      <div class="row">
                          <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                              <div class="footer-widget footer-links">
                                  <h4>About AirshareX</h4>
                                  <ul>
                                      <Li>
                                      <i class="bi bi-chevron-right"></i><a href="{{url('/')}}"> Home</a>
                                      </Li>
                                      <Li>
                                      <i class="bi bi-chevron-right"></i> <a href="{{url('/about')}}">About us</a>
                                      </Li>
                                      <Li>
                                      <i class="bi bi-chevron-right"></i>  <a href="{{url('/ourservice')}}">Services</a>
                                      </Li>
                                      
                                      
                                  </ul>
                              </div>
                          </div>
                          <div class="col-lg-3 col-md-4 col-sm-12 col-12 footer-links">
                          <div class="footer-widget">
                                  <h4>Our Services</h4>
                                  <ul>
                                      <Li>
                                      <i class="bi bi-chevron-right"></i><a href="{{url('/home')}}"> Search Tickets</a>
                                      </Li>
                                      <Li>
                                      <i class="bi bi-chevron-right"></i><a href="{{url('/privacypolicy')}}">Privacy policy</a></Li>
                                      <Li>
                                      <i class="bi bi-chevron-right"></i><a href="{{url('/disclaimer')}}">Disclaimer</a>
                                      </Li>
                                      
                                  </ul>
                              </div>
                          </div>
                        
                          <div class="col-lg-6 col-md-4 col-sm-12 col-12 footer-links">
                          <div class="footer-widget">
                                  <h4>Newsletter Module</h4>
                                  <p>Signup to our Newsletter to receive latest updates</p>
                                  <form method="POST" action="{{ route('web.mailing-list.store') }}">
                                  @csrf
                                  <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                                    <label for="floatingInput">Email address</label>
                                  </div>
                                  <div class="d-flex">
                <button class="btn btn-danger btn-footer" type="submit">Subscribe</button>
              </div>
                                    </form>
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
            </div>
                 <!-- ======= Clients Section ======= -->
            <section id="clients" class="clients">
              <div class="container">
                        <div class="title"><h3>In Association With</h3></div>
                <div class="clients-slider swiper">
                  <div class="swiper-wrapper align-items-center">
                    @foreach($featuredVendors as $vendor)
                        <div class="swiper-slide"><img src="{{ $vendor->featured_image }}" class="img-fluid" alt=""></div>
                    @endforeach
                    
                  
                  </div>
                </div>

              </div>
            </section><!-- End Clients Section -->

            <div class="copyright-info">
              <div class="container">
              © Copyright AirshareX. All Rights Reserved 
              </div>
            </div>

           
        </footer>
        @yield('page-scripts')
        <script src="{{asset('vendor/airsharex/assets/vendor/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/airsharex/assets/vendor/parallax.min.js')}}"></script>
        <script src="{{asset('vendor/airsharex/assets/js/jquery.timepicker.min.js')}}"></script>
        <script src="{{asset('vendor/airsharex/assets/js/counter-up.js')}}"></script>
        <script src="{{asset('vendor/airsharex/assets/js/select2.min.js')}}"></script>
        <script src="{{asset('vendor/airsharex/assets/js/jquery-ui.min.js')}}"></script>
        <script src="{{asset('vendor/airsharex/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('vendor/airsharex/assets/vendor/aos/aos.js')}}"></script>
        <script src="{{asset('vendor/airsharex/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
        <script src="{{asset('vendor/airsharex/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('vendor/airsharex/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

      <!-- Template Main JS File -->
        <script src="{{asset('vendor/airsharex/assets/js/main.js')}}"></script>

  
      
    </body>
</html>
