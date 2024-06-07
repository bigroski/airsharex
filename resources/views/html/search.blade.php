<x-airshare-layout>
<section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0" >
		<div class="container">
            <div class="breadcrumb-content text-white">
                <h1>Search Widget</h1>
                <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p>
            </div>
		</div>
</section>
<section class="search search-filter">
<div class="flight-booking flight-list py-120">
     <div class="container">
          <div class="row">
               <div class="col-lg-4 col-xl-3 mb-4">
                    <div class="booking-sidebar">
                    <div class="booking-item">
                              <h4 class="booking-title">Airlines</h4>
                              <div class="flight-airline">
                                   <div class="form-check">
                                        <input class="form-check-input" name="flight-airline" type="checkbox" value="1" id="flight-airline1">
                                        <label class="form-check-label" for="flight-airline1"> Prabhu Airlines <span>(20)</span>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" name="flight-airline" type="checkbox" value="2" id="flight-airline2">
                                        <label class="form-check-label" for="flight-airline2"> Buddha Airlines <span>(15)</span>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" name="flight-airline" type="checkbox" value="3" id="flight-airline3">
                                        <label class="form-check-label" for="flight-airline3"> Shrimik Airways <span>(18)</span>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" name="flight-airline" type="checkbox" value="4" id="flight-airline4">
                                        <label class="form-check-label" for="flight-airline4"> Nepal Airlines <span>(25)</span>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" name="flight-airline" type="checkbox" value="5" id="flight-airline5">
                                        <label class="form-check-label" for="flight-airline5"> My Airlines <span>(35)</span>
                                        </label>
                                   </div>
                              </div>
                         </div>
                         <div class="booking-item">
                              <h4 class="booking-title">Flight Class</h4>
                              <div class="flight-class">
                                   <div class="form-check">
                                        <input class="form-check-input" name="flight-class" type="checkbox" value="1" id="flight-class1">
                                        <label class="form-check-label" for="flight-class1"> Business <span>(20)</span>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" name="flight-class" type="checkbox" value="2" id="flight-class2">
                                        <label class="form-check-label" for="flight-class2"> First Class <span>(15)</span>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" name="flight-class" type="checkbox" value="3" id="flight-class3">
                                        <label class="form-check-label" for="flight-class3"> Economy <span>(18)</span>
                                        </label>
                                   </div>
                              </div>
                         </div>
                         <div class="booking-item">
                              <h4 class="booking-title">Flight Price</h4>
                              <div class="flight-price">
                                   <div class="price-range-slider">
                                        <div class="price-range-info">
                                             <label for="priceRange1">Price:</label>
                                             <input type="text" class="priceRange" id="priceRange1" readonly>
                                        </div>
                                        <div id="price-range1" class="price-range slider"></div>
                                   </div>
                              </div>
                         </div>
                         <div class="booking-item">
                              <h4 class="booking-title">Flight Date</h4>
                              <div class="flight-time">
                                    <label>Departure</label>
                                    <input class="form-control date-picker mb-2" name="date" type="text" value="" >  
                              </div>
                         </div>
                       
                        
                         <div class="booking-item">
                              <h4 class="booking-title">Weights</h4>
                              <div class="flight-weight">
                                   <div class="form-check">
                                        <input class="form-check-input" name="flight-weight" type="checkbox" value="1" id="flight-weight1">
                                        <label class="form-check-label" for="flight-weight1"> 25 Kg <span>(20)</span>
                                        </label>
                                   </div>
                              </div>
                         </div>
                         <div class="booking-item">
                              <h4 class="booking-title">Refundable</h4>
                              <div class="flight-refundable">
                                   <div class="form-check">
                                        <input class="form-check-input" name="flight-refundable" type="checkbox" value="1" id="flight-refundable1">
                                        <label class="form-check-label" for="flight-refundable1"> Non Refundable <span>(20)</span>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" name="flight-refundable" type="checkbox" value="2" id="flight-refundable2">
                                        <label class="form-check-label" for="flight-refundable2"> Refundable <span>(15)</span>
                                        </label>
                                   </div>
                                   <div class="form-check">
                                        <input class="form-check-input" name="flight-refundable" type="checkbox" value="3" id="flight-refundable3">
                                        <label class="form-check-label" for="flight-refundable3"> As Per Rules <span>(18)</span>
                                        </label>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
               <div class="col-lg-8 col-xl-9">
                    <div class="col-md-12">
                         <div class="booking-sort">
                         <h5 class="card-title mb-0 fw-light fs-5">2,350 Results Found</h5>
                              
                              <div class="col-md-3 booking-sort-box">
                                   <select class="select">
                                        <option value="1">Sort By Default</option>
                                        <option value="2">Sort By Popular</option>
                                        <option value="3">Sort By Low Price</option>
                                        <option value="4">Sort By High Price</option>
                                   </select>
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
                                                                         <button class="btn btn-danger" value="Book Now">Book Now</button>
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
                                                                         <div class="flight-detail-price-amount"> Rs 10,846 </div><button class="btn btn-danger" value="Book Now">Book Now</button>
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
                                                                         <button class="btn btn-danger" value="Book Now">Book Now</button>
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
                                                                         <button class="btn btn-danger" value="Book Now">Book Now</button>
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
     </div>
</div>
</section>


</x-airshare-layout>

