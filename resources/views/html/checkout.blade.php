<x-airshare-layout>
<section class="component breadcrumbs header-image ken-burn-center light" data-parallax="true" data-natural-height="1080" data-natural-width="1920" data-bleed="0" data-image-src="{{ asset('vendor/airsharex/assets/img/banner.jpeg') }}" data-offset="0" >
		<div class="container">
            <div class="breadcrumb-content text-white">
                <h1>Checkout </h1>
                <p>Duis porttitor vulputate arcu, at hendrerit eros cursus accumsan. Donec a dui vitae velit feugiat vulputate. Aliquam erat volutpat. In quis leo nec urna iaculis luctus. Mauris ut lorem at odio volutpat maximus</p>
            </div>
		</div>
</section>
<section class=" checkout">
<div class="container">

          
     

          <div class="row">
<div class="col-sm-12 col-md-12 col-lg-7">

<div class="flight-booking flight-list py-120">
     
          <div class="row">
                         <div class="col-lg-12">
                                 <div class="flight-booking-item">
                                      <div class="flight-booking-wrapper">
                                           <div class="flight-booking-info">
                                                <div class="flight-booking-content">
                                                     <div class="flight-booking-airline justify-between ">
                                                       <div class="d-flex items-center gap-2 max-sm-flex-col">
                                                            <div class="flight-airline-img">
                                                               <img src="{{ asset('vendor/airsharex/assets/img/prabhutv.jpg') }}" alt>
                                                               
                                                            </div>
                                                          <h5 class="flight-airline-name">Prabhu</h5></div>
                                                          

                                                          <div class="flight-booking-price-1">
                                         
                                                                 <div class="price-info">
                                                                      
                                                                      <span class="price-amount">Rs 4,548</span>
                                                                 </div>
                                                            </div>
                                                     </div>
                                                    
                                                </div>

                                                <div class="flight-booking-content mt-3">
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
                                          
                                      </div>
                                     
                                 </div>
                            </div>
                           



                    </div>

               </div>
</div>
<div class="col-sm-12 col-md-12 col-lg-5">

  <div class="card border-0 shadow rounded-3 ">
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
          <input type="text" name="name" class="form-control" id="floatingName" placeholder="Address">
          <label for="name">Address</label>
         
        </div>
        <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control" id="floatingEmail" placeholder="city">
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