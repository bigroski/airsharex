<!-- Breadcrumbs -->
<section class="m-0 p-0 google-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.295765284791!2d85.32103037551992!3d27.708152976182106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1907d3626ff5%3A0xbc394a3c7512ee0a!2sDhobidhara%20Marg%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1716710935376!5m2!1sen!2snp" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <div class="location-wrapper">
        @if(is_array($offices))
            @foreach($offices as $office)
                <div class="contact-info">
                    <ul>
                        <li class="sub-title">{{$office->office_name}} </li>
                        <li>{{$office->office_address}}</li>
                        @if($office->office_phone)
                        <li><strong>Phone:</strong> {{$office->office_phone}}</li>
                        @endif
                        @if($office->office_email)
                        <li><strong>Email:</strong> {{$office->office_email}}</li>
                        @endif
                    </ul>
                </div>
            @endforeach
        @endif
    </div>
</section>
<!-- About -->
<section class="contact-section" >
		<div class="container">
             <h2 class="title">{{$title}}</h2>
            <div class="row">
            <div class="col-md-6 col-sm-12">
                    <div class="contact-img">
                        @if(is_array($feature))
                            @foreach($feature as $key => $image)
                                @if(property_exists($image, 'featured_image'))
                                <img src="{{ asset($image->featured_image) }}" class="abt-img{{$key+1}}" />
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
               
                <div class="col-md-6 col-sm-12">
                  <div class="contact-form">
                        {{$description}}
                        <form name="qryform"  id="qryform" method="post" action="{{route('site.processContact')}}" >
                            @csrf
                            <div class="form-group">
                            <label>Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
                            </div>
                            <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" id="name" placeholder="Enter Email" name="email" required>
                            </div>
                            
                            <div class="form-group">
                            <label>Phone No.:</label>
                            <input type="text" class="form-control" id="phone" placeholder="Enter Phone no." name="phone" required>
                            </div>
                            <div class="form-group">
                            <label>Subject:</label>
                            <input type="text" class="form-control" id="name" placeholder="Subject" name="subject" required>
                            </div>
                            
                            <div class="form-group">
                            <label>Message:</label>
                            <textarea name="issues" class="form-control" id="iq" placeholder="Enter your Message" required></textarea>
                            </div>
                            <div id="recaptcha"></div>
                            <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                            <button type="submit" class="btn btn-lg btn-danger mt-3">Submit</button>
                        </form>
                  </div>
                </div>
            </div>
		</div>
</section>
<!-- About -->
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