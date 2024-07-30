<!-- flight history -->
            <div class="flight-booking flight-list py-120">
              <div class="container">
                <h5 class="card-title mb-1 fw-light fs-5">Purchase History</h5>
                <!-- <div class="row">
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
                </div> -->
                <div class="row">
                  @if($tickets->count() > 0)
                    @foreach($tickets as $ticket)
                      <?php 
                      $data = $ticket->searchDetail;
                        // dump($ticket->searchDetail);
                      ?>
                    <div class="col-lg-12">
                      <div class="flight-booking-item">
                                              <div class="flight-booking-wrapper">
                                                    <div class="flight-booking-info">
                                                          <div class="flight-booking-content">
                                                                 <div class="flight-booking-airline">
                                                                       <div class="flight-airline-img">
                                                                             <img src="{{$data['OperatorLogo'] }}" alt>
                                                                             <br />
                                                                       <h5 class="flight-airline-name">
                                                                             {{$data['OperatorName']}}</h5>
                                                                       </div>
                                                                 </div>
                                                                 <div class="flight-booking-time">
                                                                       <div class="start-time">
                                                                             <div class="start-time-icon">
                                                                                   <i class="fal fa-plane-departure"></i>
                                                                             </div>
                                                                             <div class="start-time-info">
                                                                                   <h6 class="start-time-text">
                                                                                          {{$data['DepartureTime']}}</h6>
                                                                                   <span
                                                                                          class="flight-destination">{{$data['DepartureCity']}}</span>
                                                                             </div>
                                                                       </div>
                                                                       <div class="flight-stop">
                                                                             <span class="flight-stop-number">{{$data['ExpectedTravelDuration']}} h</span>
                                                                             <div class="flight-stop-arrow"></div>
                                                                       </div>
                                                                       <div class="end-time">
                                                                             <div class="start-time-icon">
                                                                                   <i class="fal fa-plane-arrival"></i>
                                                                             </div>
                                                                             <div class="start-time-info">
                                                                                   <h6 class="end-time-text">
                                                                                          {{$data['ArrivalTime']}}</h6>
                                                                                   <span
                                                                                          class="flight-destination">{{$data['ArrivalCity']}}</span>
                                                                             </div>
                                                                       </div>
                                                                 </div>
                                                                 
                                                          </div>
                                                    </div>
                                                    <div class="flight-booking-price">
                                                          <div class="price-info">

                                                                 <span class="price-amount">Rs
                                                                       {{$data['TicketSellingRate']}}</span>
                                                          </div>
                                                          <div class="date">
                                                               <i class="fa fa-calendar"></i>{{$data['TripDate']}}
                                                          </div>
                                                          <a class="btn btn-danger" href="#flight-booking-collapse1"
                                                                 data-bs-toggle="collapse" role="button"
                                                                 aria-expanded="false"
                                                                 aria-controls="flight-booking-collapse1">Flight Details </a>
                                                    </div>
                                              </div>
                                              <div class="flight-booking-detail">

                                                    <div class="collapse" id="flight-booking-collapse1">
                                                          <div class="flight-booking-detail-wrapper">
                                                                 <div class="row">
                                                                       
                                                                       <div class="col-lg-12 col-xl-12">
                                                                             <div class="flight-booking-detail-right">
                                                                                   <ul class="nav nav-tabs" id="frTab1"
                                                                                          role="tablist">
                                                                                          <li class="nav-item"
                                                                                                role="presentation">
                                                                                                <button class="nav-link active"
                                                                                                      id="fr-tab1"
                                                                                                      data-bs-toggle="tab"
                                                                                                      data-bs-target="#fr-tab-pane1"
                                                                                                      type="button" role="tab"
                                                                                                      aria-controls="fr-tab-pane1"
                                                                                                      aria-selected="true">Baggage</button>
                                                                                          </li>
                                                                                          <li class="nav-item"
                                                                                                role="presentation">
                                                                                                <button class="nav-link"
                                                                                                      id="fr-tab2"
                                                                                                      data-bs-toggle="tab"
                                                                                                      data-bs-target="#fr-tab-pane2"
                                                                                                      type="button" role="tab"
                                                                                                      aria-controls="fr-tab-pane2"
                                                                                                      aria-selected="false">Fare</button>
                                                                                          </li>
                                                                                          <li class="nav-item"
                                                                                                role="presentation">
                                                                                                <button class="nav-link"
                                                                                                      id="fr-tab3"
                                                                                                      data-bs-toggle="tab"
                                                                                                      data-bs-target="#fr-tab-pane3"
                                                                                                      type="button" role="tab"
                                                                                                      aria-controls="fr-tab-pane3"
                                                                                                      aria-selected="false">Policy</button>
                                                                                          </li>
                                                                                   </ul>
                                                                                   <div class="tab-content" id="frTabContent1">
                                                                                          <div class="tab-pane fade show active"
                                                                                                id="fr-tab-pane1" role="tabpanel"
                                                                                                aria-labelledby="fr-tab1"
                                                                                                tabindex="0">
                                                                                                <div
                                                                                                      class="flight-booking-detail-info">
                                                                                                      <table
                                                                                                            class="table table-borderless">
                                                                                                            <tr>
                                                                                                                   <th>Flight</th>
                                                                                                                   <th>Cabin</th>
                                                                                                                   <th>Check In</th>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                   <td>{{ $data['DepartureCity']}}
                                                                                                                         -
                                                                                                                         {{ $data['ArrivalCity']}}
                                                                                                                   </td>
                                                                                                                   <td>7 KG</td>
                                                                                                                   <td>20 KG
                                                                                                                   </td>
                                                                                                            </tr>
                                                                                                      </table>
                                                                                                </div>
                                                                                          </div>
                                                                                          <div class="tab-pane fade"
                                                                                                id="fr-tab-pane2" role="tabpanel"
                                                                                                aria-labelledby="fr-tab2"
                                                                                                tabindex="0">
                                                                                                <div
                                                                                                      class="flight-booking-detail-info">
                                                                                                      <table
                                                                                                            class="table table-borderless">
                                                                                                            <tr>
                                                                                                                   <th>Fare Summary
                                                                                                                   </th>
                                                                                                                   <th>Base Fare</th>
                                                                                                                   <th>Tax</th>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                   <td>Adult x 1</td>
                                                                                                                   <td>Rs
                                                                                                                         {{$data['TicketSellingRate']}}
                                                                                                                   </td>
                                                                                                                   <td>-</td>
                                                                                                            </tr>
                                                                                                            <tr>
                                                                                                                   <td>Child x 1</td>
                                                                                                                   <td>-</td>
                                                                                                                   <td>-</td>
                                                                                                            </tr>
                                                                                                      </table>
                                                                                                </div>
                                                                                          </div>
                                                                                          <div class="tab-pane fade"
                                                                                                id="fr-tab-pane3" role="tabpanel"
                                                                                                aria-labelledby="fr-tab3"
                                                                                                tabindex="0">
                                                                                                <div
                                                                                                      class="flight-booking-detail-info">
                                                                                                      <div
                                                                                                            class="flight-booking-policy">
                                                                                                            <ul>
                                                                                                                   <li> 1. Refund and
                                                                                                                         Date Change are
                                                                                                                         done as per the
                                                                                                                         following
                                                                                                                         policies. </li>
                                                                                                                   <li> 2. Refund
                                                                                                                         Amount= Refund
                                                                                                                         Charge (as per
                                                                                                                         airline policy
                                                                                                                         + ShareTrip
                                                                                                                         Convenience
                                                                                                                         Fee). </li>
                                                                                                                   <li> 3. Date Change
                                                                                                                         Amount= Date
                                                                                                                         Change Fee (as
                                                                                                                         per Airline
                                                                                                                         Policy +
                                                                                                                         ShareTrip
                                                                                                                         Convenience
                                                                                                                         Fee). </li>
                                                                                                            </ul>
                                                                                                      </div>
                                                                                                </div>
                                                                                          </div>
                                                                                   </div>
                                                                                   <div class="flight-booking-detail-price-outer">
                                                                                          
                                                                                   </div>
                                                                             </div>
                                                                       </div>
                                                                 </div>
                                                          </div>
                                                    </div>
                                              </div>
                                        </div>
                      
                    </div>
                    @endforeach
                    @else
                    <div class="row">
                      <div class="col-md-12">
                        <div class="alert alert-danger">
                          <h3>You do not have any ticket bookings.</h3>
                        </div>
                      </div>
                    </div>
                  @endif
                  
                  <div class="pagination-area" style="display:none;">
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