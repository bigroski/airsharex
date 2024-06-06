<x-airshare-layout>
  <!-- Breadcrumbs -->
  <section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0">
    <div class="container">
      <div class="breadcrumb-content">
        <h1 class="text-white">Account</h1>
        <p class="text-white">Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p>
      </div>
    </div>
  </section>
  <!-- Breadcrumbs -->
  <!-- Account -->
  <section class=" component-account account">
    <div class="container">
      <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Profile</button>
          <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Purchase History</button>
          <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Support ticket</button>
          <button class="nav-link" id="v-pills-password-tab" data-bs-toggle="pill" data-bs-target="#v-pills-password" type="button" role="tab" aria-controls="v-pills-password" aria-selected="false">Password</button>
        </div>
        <div class="tab-content mt-2" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
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
                      <form>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                          <!-- Form Group (first name)-->
                          <div class="col-md-6">
                            <label class="small mb-1" for="inputFirstName">First name</label>
                            <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                          </div>
                          <!-- Form Group (last name)-->
                          <div class="col-md-6">
                            <label class="small mb-1" for="inputLastName">Last name</label>
                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                          </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                          <label class="small mb-1" for="inputEmailAddress">Email address</label>
                          <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                          <!-- Form Group (phone number)-->
                          <div class="col-md-12">
                            <label class="small mb-1" for="inputPhone">Phone number</label>
                            <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                          </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                          <!-- Form Group (organization name)-->
                          <div class="col-md-12">
                            <label class="small mb-1" for="inputOrgName">Address 1</label>
                            <input class="form-control" id="inputOrgName" type="text" placeholder="Address 1" value="Start Bootstrap">
                          </div>
                          <!-- Form Group (location)-->
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                          <!-- Form Group (organization name)-->
                          <div class="col-md-12">
                            <label class="small mb-1" for="inputOrgName">Address 2</label>
                            <input class="form-control" id="inputOrgName" type="text" placeholder="Address 2" value="Start Bootstrap">
                          </div>
                          <!-- Form Group (location)-->
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                          <!-- Form Group (organization name)-->
                          <div class="col-md-6">
                            <label class="small mb-1" for="inputOrgName">City</label>
                            <input class="form-control" id="inputOrgName" type="text" placeholder="City" value="Start Bootstrap">
                          </div>
                          <!-- Form Group (location)-->
                          <div class="col-md-6">
                            <label class="small mb-1" for="inputLocation">State</label>
                            <input class="form-control" id="inputLocation" type="text" placeholder="State" value="San Francisco, CA">
                          </div>
                        </div>
                        <div class="img-box">
                          <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                              <label class="small mb-1">Upload Citizenship</label>
                              <div class="file-upload">
                                <input type='file' id="citizenship" accept=".png, .jpg, .jpeg" />
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
                        <button class="btn btn-danger" type="button">Save changes</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
            <!-- flight history -->
            <div class="flight-booking flight-list py-120">
              <div class="container">
                <h5 class="card-title mb-1 fw-light fs-5">Search</h5>
                <div class="row">
                  <div class="col-lg-12 col-xl-12">
                    <div class="flight-filter">
                      <div class="row g-3">
                        <div class="col-lg-3 col-md-3 ol-sm-6 col-12">
                          <input type="text" class="form-control" placeholder="Ticket Number" />
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                          <select class="test_skill form-control " placeholder="Location">
                            <option>POK</option>
                            <option>POK</option>
                            <option>POK</option>
                            <option>POK</option>
                          </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                          <div>
                            <input type="text" name="date" class="date-picker  form-control" placeholder="Depature Date">
                          </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                          <button type="submit" class="btn btn-danger mb-3 form-control">Filter</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="flight-booking-item">
                      <div class="flight-booking-wrapper">
                        <div class="flight-booking-info">
                          <div class="flight-booking-content">
                            <div class="flight-booking-airline">
                              <div class="flight-airline-img">
                                <img src="{{ asset('vendor/airsharex/assets/img/prabhutv.jpg') }}" alt>
                              </div>
                              <h5 class="flight-airline-name">Prabhu</h5>
                            </div>
                            <div class="flight-booking-time">
                              <div class="start-time">
                                <div class="start-time-icon">
                                  <i class="fal fa-plane-departure"></i>
                                </div>
                                <div class="start-time-info">
                                  <h6 class="start-time-text">07:30</h6>
                                  <span class="flight-destination">KTM</span>
                                </div>
                              </div>
                              <div class="flight-stop">
                                <span class="flight-stop-number">Non Stop</span>
                                <div class="flight-stop-arrow"></div>
                              </div>
                              <div class="end-time">
                                <div class="start-time-icon">
                                  <i class="fal fa-plane-arrival"></i>
                                </div>
                                <div class="start-time-info">
                                  <h6 class="end-time-text">08:35</h6>
                                  <span class="flight-destination">POK</span>
                                </div>
                              </div>
                            </div>
                            <div class="flight-booking-duration">
                              <span class="duration-text">1h 05m</span>
                            </div>
                          </div>
                        </div>
                        <div class="flight-booking-price">
                          <div class="price-info">
                            <span class="price-amount">Rs 4,548</span>
                          </div>
                          <a class="btn btn-danger" href="#flight-booking-collapse1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="flight-booking-collapse1">Flight Details </a>
                        </div>
                      </div>
                      <div class="flight-booking-detail">
                        <div class="collapse" id="flight-booking-collapse1">
                          <div class="flight-booking-detail-wrapper">
                            <div class="row">
                              <div class="col-lg-12 col-xl-6">
                                <div class="flight-booking-detail-left">
                                  <ul class="nav nav-tabs" id="flTab1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="fl-tab1" data-bs-toggle="tab" data-bs-target="#fl-tab-pane1" type="button" role="tab" aria-controls="fl-tab-pane1" aria-selected="true">KTM - POK</button>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="flTabContent1">
                                    <div class="tab-pane fade show active" id="fl-tab-pane1" role="tabpanel" aria-labelledby="fl-tab1" tabindex="0">
                                      <div class="flight-booking-detail-info">
                                        <div class="flight-booking-airline">
                                          <div class="flight-airline-img">
                                            <img src="{{ asset('vendor/airsharex/assets/img/prabhutv.jpg') }}" alt>
                                          </div>
                                          <div class="flight-airline-info flex-grow-1">
                                            <h5 class="flight-airline-name">Prabhu Airline</h5>
                                            <span class="flight-airline-model">SG 143 | AT7</span>
                                          </div>
                                          <p class="flight-airline-class">( Economy )</p>
                                        </div>
                                        <div class="flight-booking-time">
                                          <div class="start-time">
                                            <div class="start-time-icon">
                                              <i class="fal fa-plane-departure"></i>
                                            </div>
                                            <div class="start-time-info">
                                              <h6 class="start-time-text">07:30</h6>
                                              <p class="flight-full-date">Sat, 22 Oct, 2024</p>
                                              <span class="flight-destination">KTM</span>
                                            </div>
                                          </div>
                                          <div class="flight-stop">
                                            <span class="flight-stop-number">Non Stop</span>
                                            <div class="flight-stop-arrow"></div>
                                            <div class="flight-booking-duration">
                                              <span class="duration-text">1h 05m</span>
                                            </div>
                                          </div>
                                          <div class="end-time">
                                            <div class="start-time-icon">
                                              <i class="fal fa-plane-arrival"></i>
                                            </div>
                                            <div class="start-time-info">
                                              <h6 class="end-time-text">08:35</h6>
                                              <p class="flight-full-date">Sat, 25 Oct, 2024</p>
                                              <span class="flight-destination">POK</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12 col-xl-6">
                                <div class="flight-booking-detail-right">
                                  <ul class="nav nav-tabs" id="frTab1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="fr-tab1" data-bs-toggle="tab" data-bs-target="#fr-tab-pane1" type="button" role="tab" aria-controls="fr-tab-pane1" aria-selected="true">Baggage</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="fr-tab2" data-bs-toggle="tab" data-bs-target="#fr-tab-pane2" type="button" role="tab" aria-controls="fr-tab-pane2" aria-selected="false">Fare</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="fr-tab3" data-bs-toggle="tab" data-bs-target="#fr-tab-pane3" type="button" role="tab" aria-controls="fr-tab-pane3" aria-selected="false">Policy</button>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="frTabContent1">
                                    <div class="tab-pane fade show active" id="fr-tab-pane1" role="tabpanel" aria-labelledby="fr-tab1" tabindex="0">
                                      <div class="flight-booking-detail-info">
                                        <table class="table table-borderless">
                                          <tr>
                                            <th>Flight</th>
                                            <th>Cabin</th>
                                            <th>Check In</th>
                                          </tr>
                                          <tr>
                                            <td>KTM - POK</td>
                                            <td>7 Kilograms</td>
                                            <td>20 Kilograms</td>
                                          </tr>
                                        </table>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="fr-tab-pane2" role="tabpanel" aria-labelledby="fr-tab2" tabindex="0">
                                      <div class="flight-booking-detail-info">
                                        <table class="table table-borderless">
                                          <tr>
                                            <th>Fare Summary</th>
                                            <th>Base Fare</th>
                                            <th>Tax</th>
                                          </tr>
                                          <tr>
                                            <td>Adult x 1</td>
                                            <td>$5,423</td>
                                            <td>$1,000</td>
                                          </tr>
                                          <tr>
                                            <td>Child x 1</td>
                                            <td>$3,423</td>
                                            <td>$1,000</td>
                                          </tr>
                                        </table>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="fr-tab-pane3" role="tabpanel" aria-labelledby="fr-tab3" tabindex="0">
                                      <div class="flight-booking-detail-info">
                                        <div class="flight-booking-policy">
                                          <ul>
                                            <li> 1. Refund and Date Change are done as per the following policies. </li>
                                            <li> 2. Refund Amount= Refund Charge (as per airline policy + ShareTrip Convenience Fee). </li>
                                            <li> 3. Date Change Amount= Date Change Fee (as per Airline Policy + ShareTrip Convenience Fee). </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="flight-booking-detail-price">
                                    <h6 class="flight-booking-detail-price-title">Total (2 Traveler)</h6>
                                    <div class="flight-detail-price-amount"> Rs 10,846 </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="flight-booking-item">
                      <div class="flight-booking-wrapper">
                        <div class="flight-booking-info">
                          <div class="flight-booking-content">
                            <div class="flight-booking-airline">
                              <div class="flight-airline-img">
                                <img src="{{ asset('vendor/airsharex/assets/img/prabhutv.jpg') }}" alt>
                              </div>
                              <h5 class="flight-airline-name">Prabhu</h5>
                            </div>
                            <div class="flight-booking-time">
                              <div class="start-time">
                                <div class="start-time-icon">
                                  <i class="fal fa-plane-departure"></i>
                                </div>
                                <div class="start-time-info">
                                  <h6 class="start-time-text">07:30</h6>
                                  <span class="flight-destination">KTM</span>
                                </div>
                              </div>
                              <div class="flight-stop">
                                <span class="flight-stop-number">Non Stop</span>
                                <div class="flight-stop-arrow"></div>
                              </div>
                              <div class="end-time">
                                <div class="start-time-icon">
                                  <i class="fal fa-plane-arrival"></i>
                                </div>
                                <div class="start-time-info">
                                  <h6 class="end-time-text">08:35</h6>
                                  <span class="flight-destination">POK</span>
                                </div>
                              </div>
                            </div>
                            <div class="flight-booking-duration">
                              <span class="duration-text">1h 05m</span>
                            </div>
                          </div>
                        </div>
                        <div class="flight-booking-price">
                          <div class="price-info">
                            <span class="price-amount">Rs 4,548</span>
                          </div>
                          <a class="btn btn-danger" href="#flight-booking-collapse1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="flight-booking-collapse1">Flight Details </a>
                        </div>
                      </div>
                      <div class="flight-booking-detail">
                        <div class="collapse" id="flight-booking-collapse1">
                          <div class="flight-booking-detail-wrapper">
                            <div class="row">
                              <div class="col-lg-12 col-xl-6">
                                <div class="flight-booking-detail-left">
                                  <ul class="nav nav-tabs" id="flTab1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="fl-tab1" data-bs-toggle="tab" data-bs-target="#fl-tab-pane1" type="button" role="tab" aria-controls="fl-tab-pane1" aria-selected="true">KTM - POK</button>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="flTabContent1">
                                    <div class="tab-pane fade show active" id="fl-tab-pane1" role="tabpanel" aria-labelledby="fl-tab1" tabindex="0">
                                      <div class="flight-booking-detail-info">
                                        <div class="flight-booking-airline">
                                          <div class="flight-airline-img">
                                            <img src="{{ asset('vendor/airsharex/assets/img/prabhutv.jpg') }}" alt>
                                          </div>
                                          <div class="flight-airline-info flex-grow-1">
                                            <h5 class="flight-airline-name">Prabhu Airline</h5>
                                            <span class="flight-airline-model">SG 143 | AT7</span>
                                          </div>
                                          <p class="flight-airline-class">( Economy )</p>
                                        </div>
                                        <div class="flight-booking-time">
                                          <div class="start-time">
                                            <div class="start-time-icon">
                                              <i class="fal fa-plane-departure"></i>
                                            </div>
                                            <div class="start-time-info">
                                              <h6 class="start-time-text">07:30</h6>
                                              <p class="flight-full-date">Sat, 22 Oct, 2024</p>
                                              <span class="flight-destination">KTM</span>
                                            </div>
                                          </div>
                                          <div class="flight-stop">
                                            <span class="flight-stop-number">Non Stop</span>
                                            <div class="flight-stop-arrow"></div>
                                            <div class="flight-booking-duration">
                                              <span class="duration-text">1h 05m</span>
                                            </div>
                                          </div>
                                          <div class="end-time">
                                            <div class="start-time-icon">
                                              <i class="fal fa-plane-arrival"></i>
                                            </div>
                                            <div class="start-time-info">
                                              <h6 class="end-time-text">08:35</h6>
                                              <p class="flight-full-date">Sat, 25 Oct, 2024</p>
                                              <span class="flight-destination">POK</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12 col-xl-6">
                                <div class="flight-booking-detail-right">
                                  <ul class="nav nav-tabs" id="frTab1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="fr-tab1" data-bs-toggle="tab" data-bs-target="#fr-tab-pane1" type="button" role="tab" aria-controls="fr-tab-pane1" aria-selected="true">Baggage</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="fr-tab2" data-bs-toggle="tab" data-bs-target="#fr-tab-pane2" type="button" role="tab" aria-controls="fr-tab-pane2" aria-selected="false">Fare</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="fr-tab3" data-bs-toggle="tab" data-bs-target="#fr-tab-pane3" type="button" role="tab" aria-controls="fr-tab-pane3" aria-selected="false">Policy</button>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="frTabContent1">
                                    <div class="tab-pane fade show active" id="fr-tab-pane1" role="tabpanel" aria-labelledby="fr-tab1" tabindex="0">
                                      <div class="flight-booking-detail-info">
                                        <table class="table table-borderless">
                                          <tr>
                                            <th>Flight</th>
                                            <th>Cabin</th>
                                            <th>Check In</th>
                                          </tr>
                                          <tr>
                                            <td>KTM - POK</td>
                                            <td>7 Kilograms</td>
                                            <td>20 Kilograms</td>
                                          </tr>
                                        </table>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="fr-tab-pane2" role="tabpanel" aria-labelledby="fr-tab2" tabindex="0">
                                      <div class="flight-booking-detail-info">
                                        <table class="table table-borderless">
                                          <tr>
                                            <th>Fare Summary</th>
                                            <th>Base Fare</th>
                                            <th>Tax</th>
                                          </tr>
                                          <tr>
                                            <td>Adult x 1</td>
                                            <td>$5,423</td>
                                            <td>$1,000</td>
                                          </tr>
                                          <tr>
                                            <td>Child x 1</td>
                                            <td>$3,423</td>
                                            <td>$1,000</td>
                                          </tr>
                                        </table>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="fr-tab-pane3" role="tabpanel" aria-labelledby="fr-tab3" tabindex="0">
                                      <div class="flight-booking-detail-info">
                                        <div class="flight-booking-policy">
                                          <ul>
                                            <li> 1. Refund and Date Change are done as per the following policies. </li>
                                            <li> 2. Refund Amount= Refund Charge (as per airline policy + ShareTrip Convenience Fee). </li>
                                            <li> 3. Date Change Amount= Date Change Fee (as per Airline Policy + ShareTrip Convenience Fee). </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="flight-booking-detail-price">
                                    <h6 class="flight-booking-detail-price-title">Total (2 Traveler)</h6>
                                    <div class="flight-detail-price-amount"> Rs 10,846 </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="flight-booking-item">
                      <div class="flight-booking-wrapper">
                        <div class="flight-booking-info">
                          <div class="flight-booking-content">
                            <div class="flight-booking-airline">
                              <div class="flight-airline-img">
                                <img src="{{ asset('vendor/airsharex/assets/img/prabhutv.jpg') }}" alt>
                              </div>
                              <h5 class="flight-airline-name">Prabhu</h5>
                            </div>
                            <div class="flight-booking-time">
                              <div class="start-time">
                                <div class="start-time-icon">
                                  <i class="fal fa-plane-departure"></i>
                                </div>
                                <div class="start-time-info">
                                  <h6 class="start-time-text">07:30</h6>
                                  <span class="flight-destination">KTM</span>
                                </div>
                              </div>
                              <div class="flight-stop">
                                <span class="flight-stop-number">Non Stop</span>
                                <div class="flight-stop-arrow"></div>
                              </div>
                              <div class="end-time">
                                <div class="start-time-icon">
                                  <i class="fal fa-plane-arrival"></i>
                                </div>
                                <div class="start-time-info">
                                  <h6 class="end-time-text">08:35</h6>
                                  <span class="flight-destination">POK</span>
                                </div>
                              </div>
                            </div>
                            <div class="flight-booking-duration">
                              <span class="duration-text">1h 05m</span>
                            </div>
                          </div>
                        </div>
                        <div class="flight-booking-price">
                          <div class="price-info">
                            <span class="price-amount">Rs 4,548</span>
                          </div>
                          <a class="btn btn-danger" href="#flight-booking-collapse1" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="flight-booking-collapse1">Flight Details </a>
                        </div>
                      </div>
                      <div class="flight-booking-detail">
                        <div class="collapse" id="flight-booking-collapse1">
                          <div class="flight-booking-detail-wrapper">
                            <div class="row">
                              <div class="col-lg-12 col-xl-6">
                                <div class="flight-booking-detail-left">
                                  <ul class="nav nav-tabs" id="flTab1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="fl-tab1" data-bs-toggle="tab" data-bs-target="#fl-tab-pane1" type="button" role="tab" aria-controls="fl-tab-pane1" aria-selected="true">KTM - POK</button>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="flTabContent1">
                                    <div class="tab-pane fade show active" id="fl-tab-pane1" role="tabpanel" aria-labelledby="fl-tab1" tabindex="0">
                                      <div class="flight-booking-detail-info">
                                        <div class="flight-booking-airline">
                                          <div class="flight-airline-img">
                                            <img src="{{ asset('vendor/airsharex/assets/img/prabhutv.jpg') }}" alt>
                                          </div>
                                          <div class="flight-airline-info flex-grow-1">
                                            <h5 class="flight-airline-name">Prabhu Airline</h5>
                                            <span class="flight-airline-model">SG 143 | AT7</span>
                                          </div>
                                          <p class="flight-airline-class">( Economy )</p>
                                        </div>
                                        <div class="flight-booking-time">
                                          <div class="start-time">
                                            <div class="start-time-icon">
                                              <i class="fal fa-plane-departure"></i>
                                            </div>
                                            <div class="start-time-info">
                                              <h6 class="start-time-text">07:30</h6>
                                              <p class="flight-full-date">Sat, 22 Oct, 2024</p>
                                              <span class="flight-destination">KTM</span>
                                            </div>
                                          </div>
                                          <div class="flight-stop">
                                            <span class="flight-stop-number">Non Stop</span>
                                            <div class="flight-stop-arrow"></div>
                                            <div class="flight-booking-duration">
                                              <span class="duration-text">1h 05m</span>
                                            </div>
                                          </div>
                                          <div class="end-time">
                                            <div class="start-time-icon">
                                              <i class="fal fa-plane-arrival"></i>
                                            </div>
                                            <div class="start-time-info">
                                              <h6 class="end-time-text">08:35</h6>
                                              <p class="flight-full-date">Sat, 25 Oct, 2024</p>
                                              <span class="flight-destination">POK</span>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-lg-12 col-xl-6">
                                <div class="flight-booking-detail-right">
                                  <ul class="nav nav-tabs" id="frTab1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link active" id="fr-tab1" data-bs-toggle="tab" data-bs-target="#fr-tab-pane1" type="button" role="tab" aria-controls="fr-tab-pane1" aria-selected="true">Baggage</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="fr-tab2" data-bs-toggle="tab" data-bs-target="#fr-tab-pane2" type="button" role="tab" aria-controls="fr-tab-pane2" aria-selected="false">Fare</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                      <button class="nav-link" id="fr-tab3" data-bs-toggle="tab" data-bs-target="#fr-tab-pane3" type="button" role="tab" aria-controls="fr-tab-pane3" aria-selected="false">Policy</button>
                                    </li>
                                  </ul>
                                  <div class="tab-content" id="frTabContent1">
                                    <div class="tab-pane fade show active" id="fr-tab-pane1" role="tabpanel" aria-labelledby="fr-tab1" tabindex="0">
                                      <div class="flight-booking-detail-info">
                                        <table class="table table-borderless">
                                          <tr>
                                            <th>Flight</th>
                                            <th>Cabin</th>
                                            <th>Check In</th>
                                          </tr>
                                          <tr>
                                            <td>KTM - POK</td>
                                            <td>7 Kilograms</td>
                                            <td>20 Kilograms</td>
                                          </tr>
                                        </table>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="fr-tab-pane2" role="tabpanel" aria-labelledby="fr-tab2" tabindex="0">
                                      <div class="flight-booking-detail-info">
                                        <table class="table table-borderless">
                                          <tr>
                                            <th>Fare Summary</th>
                                            <th>Base Fare</th>
                                            <th>Tax</th>
                                          </tr>
                                          <tr>
                                            <td>Adult x 1</td>
                                            <td>$5,423</td>
                                            <td>$1,000</td>
                                          </tr>
                                          <tr>
                                            <td>Child x 1</td>
                                            <td>$3,423</td>
                                            <td>$1,000</td>
                                          </tr>
                                        </table>
                                      </div>
                                    </div>
                                    <div class="tab-pane fade" id="fr-tab-pane3" role="tabpanel" aria-labelledby="fr-tab3" tabindex="0">
                                      <div class="flight-booking-detail-info">
                                        <div class="flight-booking-policy">
                                          <ul>
                                            <li> 1. Refund and Date Change are done as per the following policies. </li>
                                            <li> 2. Refund Amount= Refund Charge (as per airline policy + ShareTrip Convenience Fee). </li>
                                            <li> 3. Date Change Amount= Date Change Fee (as per Airline Policy + ShareTrip Convenience Fee). </li>
                                          </ul>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="flight-booking-detail-price">
                                    <h6 class="flight-booking-detail-price-title">Total (2 Traveler)</h6>
                                    <div class="flight-detail-price-amount"> Rs 10,846 </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pagination-area">
                    <div aria-label="Page navigation example">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">
                              <i class="bi bi-caret-left"></i>
                            </span>
                          </a>
                        </li>
                        <li class="page-item active">
                          <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">
                              <i class="bi bi-caret-right"></i>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- flight history --> 
          </div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">Message content</div>
          <div class="tab-pane fade" id="v-pills-password" role="tabpanel" aria-labelledby="v-pills-password-tab" tabindex="0">
            <!-- change password -->
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 ">
                <div class="card border-0 shadow rounded-3 ">
                  <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Reset Password</h5>
                    <form>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Current Password</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">New Password</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Confirm Password</label>
                      </div>
                      <div class="d-grid">
                        <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Reset Password</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- account -->
</x-airshare-layout>