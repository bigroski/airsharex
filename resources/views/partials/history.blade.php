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