<x-airshare-layout>
<section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0" >
		<div class="container">
            <div class="breadcrumb-content text-white">
                <h1>Login</h1>
                <!-- <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p> -->
            </div>
		</div>
</section>
<section class="login">
<div class="row">

      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-bold fs-5">Sign In</h5>
            <form action="{{route('login')}}" method="POST" id="registrationForm" novalidate>
              @csrf
              @method('post')
              <div class="form-floating mb-3 form-group">
                <input type="email" name="email" class="form-control" id="floatingInputEmail" placeholder="name@example.com">
                <span class="icon-inside"><i class="fas fa-envelopes"></i></span>
                <label for="floatingInputEmail">Email address</label>
                @error('email')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating mb-3 form-group">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <span class="icon-inside"><i class="fas fa-eye-slash"></i></span>
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                  in</button>
              </div>
              <label class="form-check-label justify-center d-flex my-2 gap-2">Forgot Password??  <a href="{{route('public.forgot-password')}}"> Click here to Reset</a></label>
              <hr class="my-4">
              <div class="d-grid mb-2">
                <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-google me-2"></i> Sign in with Google
                </button>
              </div>
              <div class="d-grid">
                <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>


</x-airshare-layout>