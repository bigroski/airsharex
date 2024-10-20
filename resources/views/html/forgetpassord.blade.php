<x-airshare-layout>
<section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0" >
		<div class="container">
            <div class="breadcrumb-content text-white">
                <h1>Forget Password</h1>
                <!-- <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p> -->
            </div>
		</div>
</section>
<section class="login">
<div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-0 shadow rounded-3 my-5">
          <div class="card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-bold fs-5">Forget Password</h5>
            <!-- <p>Morbi sed ante efficitur, pellentesque justo sit amet, feugiat mi. Pellentesque tincidunt dui ut varius luctus. Ut quis metus quis est pulvinar sodales ut in libero.</p> -->
            <form action="{{route('public.process.forgot-password')}}" method="post">
              @csrf
              <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              
             
              <div class="d-flex gap-4">
                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Reset Password</button>
                <a class="btn btn-outline-secondary btn-login text-uppercase fw-bold" >Login</a>

                
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
</section>


</x-airshare-layout>

