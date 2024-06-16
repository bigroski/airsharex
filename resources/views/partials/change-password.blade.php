<!-- change password -->
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 ">
                <div class="card border-0 shadow rounded-3 ">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Reset Password</h5>
                    <form action="{{route('profile.change-password')}}" method="post">
                      @csrf
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                        <label for="floatingPassword">New Password</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password_confirmation">
                        <label for="floatingPassword">Confirm Password</label>
                      </div>
                      <div class="d-grid">
                        <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Reset Password</button>
                      </div>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> 

                    </form>
                  </div>
                </div>
              </div>
            </div> 

            