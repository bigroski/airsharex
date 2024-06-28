<x-airshare-layout>
<section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0" >
		<div class="container">
            <div class="breadcrumb-content text-white">
                <h1>Checkout </h1>
                <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p>
            </div>
		</div>
</section>
<section class="login">
<div class="container">
<div class="flight-booking flight-list py-120">
     
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
                                                          <h5 class="flight-airline-name">{{$flightData['MYOperatorName']}}</h5>
                                                     </div>
                                                     <div class="flight-booking-time">
                                                          <div class="start-time">
                                                               <div class="start-time-icon">
                                                                    <i class="fal fa-plane-departure"></i>
                                                               </div>
                                                               <div class="start-time-info">
                                                                    <h6 class="start-time-text">{{$flightData['DepartureTime']}}</h6>
                                                                    <span class="flight-destination">{{$flightData['DepartureCity']}}</span>
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
                                                                    <h6 class="end-time-text">{{$flightData['ArrivalTime']}}</h6>
                                                                    <span class="flight-destination">{{$flightData['ArrivalCity']}}</span>
                                                               </div>
                                                          </div>
                                                     </div>
                                                     <div class="flight-booking-duration">
                                                          <span class="duration-text">1h 05m</span>
                                                     </div>
                                                </div>
                                           </div>
                                           <div class="flight-booking-price">
                                           <i class="lni lni-close"></i>
                                                <div class="price-info">
                                                     
                                                     <span class="price-amount">Rs {{$flightData['TicketSellingRate']}}</span>
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
                           



                    </div>

               </div>
          
     

          <div class="row">

<div class="col-sm-9 col-md-7 col-lg-7">
  <div class="card border-0 shadow rounded-3 my-5">
    <div class="card-body p-4 p-sm-5">
      <h5 class="card-title text-center mb-5  fs-5">Checkout</h5>
      <form action="" method="POST" id="checkoutForm" novalidate>
       
        <div class="form-floating mb-3">
          <input type="text" name="name" class="form-control" id="floatingName" placeholder="Full Name">
          <label for="name">Full Name</label>
         
        </div>
        <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="phone" class="form-control" id="floatingPhone" placeholder="Phone Number">
          <label for="phone">Phone Number</label>
         
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="address" class="form-control" id="floatingName" placeholder="Address">
          <label for="name">Address</label>
         
        </div>
        <div class="form-floating mb-3">
          <input type="email" name="city" class="form-control" id="floatingEmail" placeholder="city">
          <label for="email">City</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" name="state" class="form-control" id="floatingPhone" placeholder="state">
          <label for="phone">State</label>
         
        </div>
        <div class="form-floating mb-3">
         <h5>Payment Mode</h5>
         <div class="row">

<div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" value="cod" checked="">
                                <label class="form-check-label" for="payment_method">
                                    Cash On Delivery
                                </label>
                            </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" value="esewa">
                                <label class="form-check-label" for="payment_method">
                                    Esewa
                                </label>
                            </div>
                            </div>
                          
                           </div>
                                              
        </div>
      
     

        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
          <label class="form-check-label" for="rememberPasswordCheck">
            I accept <a href="">term & conditions</a> and <a href="">privacy policy</a>.
          </label>
        </div>
        <div class="d-grid gap-4">
          <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Checkout</button>
         
        </div> 
        
    
      </form>
    </div>
  </div>
</div>
</div>

</div>
  </section>

</x-airshare-layout>