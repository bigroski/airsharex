<div class="profile-info">
              <div class="row">
                <div class="col-xl-4">
                  <!-- Profile picture card-->
                  <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                      <!-- Profile picture image-->
                      <div class="avatar-upload">
                        <div class="avatar-edit">
                          <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                          <label for="imageUpload">
                            <i class="lni lni-pencil"></i>
                          </label>
                        </div>
                        <div class="avatar-preview">
                          <div id="imagePreview" style="background-image: url(http://i.pravatar.cc/500?img=7);"></div>
                        </div>
                      </div>
                      <!-- Profile picture help block-->
                      <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                      <!-- Profile picture upload button-->
                    </div>
                  </div>
                </div>
                <div class="col-xl-8">
                  <!-- Account details card-->
                  <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                      <form action="{{route('site.post.account')}}" method="POSt">
                        @csrf
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                          <!-- Form Group (first name)-->
                          <div class="col-md-6">
                            <label class="small mb-1" for="inputFirstName">First name</label>
                            <input class="form-control" id="inputFirstName" name="first_name" type="text" placeholder="Enter your first name" value="{{$user->first_name}}">
                          </div>
                          <!-- Form Group (last name)-->
                          <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Last name</label>
                            <input class="form-control" id="inputLastName" name="last_name" type="text" placeholder="Enter your last name" value="{{$user->last_name}}">
                          </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                          <label class="small mb-1" for="inputEmailAddress">Email address</label>
                          <input class="form-control" id="inputEmailAddress" name="email" type="email" placeholder="Enter your email address" value="{{$user->email}}" readonly>
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                          <!-- Form Group (phone number)-->
                          <div class="col-md-12">
                            <label class="small mb-1" for="inputPhone">Phone number</label>
                            <input class="form-control" id="inputPhone" name="phone" type="tel" placeholder="Enter your phone number" value="{{$user->phone}}">
                          </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                          <!-- Form Group (organization name)-->
                          <div class="col-md-12">
                            <label class="small mb-1" for="inputOrgName">Address 1</label>
                            <input class="form-control" id="inputOrgName" type="text" placeholder="Address 1" value="{{$user->address_one}}" name="address_one">
                          </div>
                          <!-- Form Group (location)-->
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                          <!-- Form Group (organization name)-->
                          <div class="col-md-12">
                            <label class="small mb-1" for="inputOrgName">Address 2</label>
                            <input class="form-control" id="inputOrgName" type="text" placeholder="Address 2" value="{{$user->address_two}}" name="address_two">
                          </div>
                          <!-- Form Group (location)-->
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                          <!-- Form Group (organization name)-->
                          <div class="col-md-6">
                            <label class="small mb-1" for="inputOrgName">City</label>
                            <input class="form-control" id="inputOrgName" type="text" placeholder="City" value="{{$user->city}}" name="city">
                          </div>
                          <!-- Form Group (location)-->
                          <div class="col-md-6">
                            <label class="small mb-1" for="inputLocation">State</label>
                            <input class="form-control" id="inputLocation" type="text" placeholder="State" value="{{$user->state}}" name="state">
                          </div>
                        </div>
                        <div class="img-box">
                          <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                              <label class="small mb-1">Upload Citizenship</label>
                              <div class="file-upload">
                                <input type='file' name="citizenship" id="citizenship" accept=".png, .jpg, .jpeg" />
                                <label for="citizenship">Browse</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="file-preview">
                                <img src="http://i.pravatar.cc/500?img=7" />
                                <i class="lni lni-cross-circle"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Save changes button-->
                        <button class="btn btn-danger" type="submit">Save changes</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>