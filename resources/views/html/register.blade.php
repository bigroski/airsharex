<x-airshare-layout>
  <section class="component breadcrumbs" style="background:url('{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}');">
    <div class="container">
      <div class="breadcrumb-content text-white">
        <h1>Register</h1>
        <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p>
      </div>
    </div>
  </section>
  <section class="login">
  @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5  fs-5">Register</h5>
            <form action="/user/register" method="POST" id="registrationForm" novalidate>
              @csrf
              @method('post')
              <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" id="floatingName" placeholder="Full Name">
                <label for="name">Full Name</label>
                @error('name')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="phone" class="form-control" id="floatingPhone" placeholder="Phone Number">
                <label for="phone">Phone Number</label>
                @error('phone')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-floating mb-3">
                <select class="form-select @error('type') is-invalid @enderror" id="floatingUserType" name="type" required>
                  <!-- <option value="" disabled selected>Select User Type</option> -->
                  <option value="customer" {{ old('type') == 'cusromer' ? 'selected' : '' }}>Customer</option>
                  <option value="vendor" {{ old('type') == 'vendor' ? 'selected' : '' }}>Vendor</option>
                </select>
                <label for="floatingUserType">User Type</label>
                @error('type')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('password')
                <div class="invalid-feedback d-block">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password_confirmation" class="form-control" id="floatingConfirmPassword" placeholder="Conform Password">
                <label for="confirmPassword">Conform Password</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  I accept <a href="">term & conditions</a> and <a href="">privacy policy</a>.
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Register</button>
              </div>
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