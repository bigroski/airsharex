<x-airshare-layout>
    <!-- Session Status -->
    <section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0" >
        <div class="container">
            <div class="breadcrumb-content text-white">
                <h1>Login</h1>
                <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p>
            </div>
        </div>
    </section>

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="login">
  <div class="row">

      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
            <form method="POST" action="{{ route('login') }}" id="registrationForm" novalidate>
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
                <!-- <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck"> -->
                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">

                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                  in</button>
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

    <form method="POST" action="{{ route('login') }}" style="display: none;">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{route('register')}}">
                Register
            </a>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
            
        </div>
    </form>
</x-airshare-layout>
