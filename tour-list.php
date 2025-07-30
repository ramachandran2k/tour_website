 <?php include("./header.php") ?>
 <link rel="stylesheet" href="assets/css/nouislider.min.css">
 <!-- Breadcrumb Section -->
 <div class="breadcrumb-section bg-img jarallax" data-jarallax data-speed="0.6"
    style="background-image: url('assets/img/bg-img/97.jpg');">
    <div class="container">
       <!-- Breadcrumb Content -->
       <div class="breadcrumb-content">
          <div class="divider"></div>
          <h2>Tour List</h2>
          <ul class="list-unstyled">
             <li><a href="index.html">Home</a></li>
             <li>Tour List</li>
          </ul>
       </div>
    </div>

    <!-- Divider -->
    <div class="divider"></div>
 </div>

 <!-- Tour List Section -->
 <section class="tour-list-section">
    <!-- Divider -->
    <div class="divider"></div>

    <div class="container">
       <div class="row g-4">
          <div class="col-12 col-md-4">
             <div class="tour-list-sidebar">
                <!-- Widget -->
                <div class="sidebar-widget">
                   <h4 class="widget-title mb-4">Destination Category</h4>

                   <!-- Sidebar Checkbox List -->
                   <ul class="sidebar-checkbox-list list-unstyled">
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="canada">
                            <label class="form-check-label flex-grow-1 ms-2" for="canada">Canada</label>
                            <span class="text-muted">04</span>
                         </div>
                      </li>
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="france" checked>
                            <label class="form-check-label flex-grow-1 ms-2" for="france">France</label>
                            <span class="text-muted">05</span>
                         </div>
                      </li>
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="europe">
                            <label class="form-check-label flex-grow-1 ms-2" for="europe">Europe</label>
                            <span class="text-muted">03</span>
                         </div>
                      </li>
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="indonesia">
                            <label class="form-check-label flex-grow-1 ms-2" for="indonesia">Indonesia</label>
                            <span class="text-muted">04</span>
                         </div>
                      </li>
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="nepal">
                            <label class="form-check-label flex-grow-1 ms-2" for="nepal">Nepal</label>
                            <span class="text-muted">04</span>
                         </div>
                      </li>
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="maldives">
                            <label class="form-check-label flex-grow-1 ms-2" for="maldives">Maldives</label>
                            <span class="text-muted">04</span>
                         </div>
                      </li>
                   </ul>
                </div>

                <!-- Widget -->
                <div class="sidebar-widget">
                   <h4 class="widget-title mb-5">Price</h4>
                   <!-- Range Slider -->
                   <div id="range-slider-price"></div>
                </div>

                <!-- Widget -->
                <div class="sidebar-widget">
                   <h4 class="widget-title mb-4">Activities</h4>

                   <!-- Sidebar Checkbox List -->
                   <ul class="sidebar-checkbox-list list-unstyled">
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="canada2">
                            <label class="form-check-label flex-grow-1 ms-2" for="canada2">Canada</label>
                            <span class="text-muted">04</span>
                         </div>
                      </li>
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="france2">
                            <label class="form-check-label flex-grow-1 ms-2" for="france2">France</label>
                            <span class="text-muted">05</span>
                         </div>
                      </li>
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="europe2">
                            <label class="form-check-label flex-grow-1 ms-2" for="europe2">Europe</label>
                            <span class="text-muted">03</span>
                         </div>
                      </li>
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="indonesia2">
                            <label class="form-check-label flex-grow-1 ms-2" for="indonesia2">Indonesia</label>
                            <span class="text-muted">04</span>
                         </div>
                      </li>
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="nepal2">
                            <label class="form-check-label flex-grow-1 ms-2" for="nepal2">Nepal</label>
                            <span class="text-muted">04</span>
                         </div>
                      </li>
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="maldives2">
                            <label class="form-check-label flex-grow-1 ms-2" for="maldives2">Maldives</label>
                            <span class="text-muted">04</span>
                         </div>
                      </li>
                   </ul>
                </div>

              

                <!-- Widget -->
                <div class="sidebar-widget">
                   <h4 class="widget-title mb-4">Tour Type</h4>

                   <!-- Sidebar Checkbox List -->
                   <ul class="sidebar-checkbox-list list-unstyled">
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="luxury">
                            <label class="form-check-label flex-grow-1 ms-2" for="luxury">Luxury</label>
                            <span class="text-muted">04</span>
                         </div>
                      </li>
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="premium" checked>
                            <label class="form-check-label flex-grow-1 ms-2" for="premium">Premium</label>
                            <span class="text-muted">05</span>
                         </div>
                      </li>
                      <li>
                         <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="standard">
                            <label class="form-check-label flex-grow-1 ms-2" for="standard">Standard</label>
                            <span class="text-muted">03</span>
                         </div>
                      </li>
                   </ul>
                </div>
             </div>
          </div>

          <div class="col-12 col-md-8">
             <div class="tour-list-content">
                <div class="row g-4">
                   <!-- Trip Card -->
                   <div class="col-12 col-lg-6">
                      <div class="trip-card wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                         <img src="assets/img/bg-img/13.jpg" alt="">
                         <!-- Trip Body -->
                         <div class="trip-body">
                            <h4 class="mb-4 trip-title">Experience The Incredible India With Travolo</h4>
                            <!-- Trip Meta -->
                            <div class="trip-meta d-flex align-items-center justify-content-between gap-3 gap-xxl-4">
                               <ul class="list-unstyled d-flex flex-column gap-3">
                                  <li><i class="ti ti-map-pin-filled"></i> Bhutan, India, Pokhara</li>
                                  <li><i class="ti ti-clock"></i> 6 Days - 2 Nights</li>
                               </ul>
                               <div class="line"></div>
                               <div class="text-end">
                                  <span class="badge bg-success mb-2">50% Off</span>
                                  <h2 class="mb-0 trip-price">$450<span>$650</span></h2>
                               </div>
                            </div>
                            <!-- Button -->
                            <a href="tour-details.php" class="btn btn-light w-100">Book Now</a>
                         </div>
                      </div>
                   </div>

                   <!-- Trip Card -->
                   <div class="col-12 col-lg-6">
                      <div class="trip-card wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                         <img src="assets/img/bg-img/14.jpg" alt="">
                         <!-- Trip Body -->
                         <div class="trip-body">
                            <h4 class="mb-4 trip-title">Discover Our Luxury Tour Thailand & Vietnam</h4>
                            <!-- Trip Meta -->
                            <div class="trip-meta d-flex align-items-center justify-content-between gap-3 gap-xxl-4">
                               <ul class="list-unstyled d-flex flex-column gap-3">
                                  <li><i class="ti ti-map-pin-filled"></i> Bhutan, India, Pokhara</li>
                                  <li><i class="ti ti-clock"></i> 6 Days - 2 Nights</li>
                               </ul>
                               <div class="line"></div>
                               <div class="text-end">
                                  <span class="badge bg-success mb-2">50% Off</span>
                                  <h2 class="mb-0 trip-price">$350<span>$450</span></h2>
                               </div>
                            </div>
                            <!-- Button -->
                            <a href="tour-details.php" class="btn btn-light w-100">Book Now</a>
                         </div>
                      </div>
                   </div>

                   <!-- Trip Card -->
                   <div class="col-12 col-lg-6">
                      <div class="trip-card wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                         <img src="assets/img/bg-img/15.jpg" alt="">
                         <!-- Trip Body -->
                         <div class="trip-body">
                            <h4 class="mb-4 trip-title">Adventure South Africa & Mozambique</h4>
                            <!-- Trip Meta -->
                            <div class="trip-meta d-flex align-items-center justify-content-between gap-3 gap-xxl-4">
                               <ul class="list-unstyled d-flex flex-column gap-3">
                                  <li><i class="ti ti-map-pin-filled"></i> Bhutan, India, Pokhara</li>
                                  <li><i class="ti ti-clock"></i> 6 Days - 2 Nights</li>
                               </ul>
                               <div class="line"></div>
                               <div class="text-end">
                                  <span class="badge bg-success mb-2">50% Off</span>
                                  <h2 class="mb-0 trip-price">$250<span>$350</span></h2>
                               </div>
                            </div>
                            <!-- Button -->
                            <a href="tour-details.php" class="btn btn-light w-100">Book Now</a>
                         </div>
                      </div>
                   </div>

                   <!-- Trip Card -->
                   <div class="col-12 col-lg-6">
                      <div class="trip-card wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                         <img src="assets/img/bg-img/13.jpg" alt="">
                         <!-- Trip Body -->
                         <div class="trip-body">
                            <h4 class="mb-4 trip-title">Experience The Incredible India With Travolo</h4>
                            <!-- Trip Meta -->
                            <div class="trip-meta d-flex align-items-center justify-content-between gap-3 gap-xxl-4">
                               <ul class="list-unstyled d-flex flex-column gap-3">
                                  <li><i class="ti ti-map-pin-filled"></i> Bhutan, India, Pokhara</li>
                                  <li><i class="ti ti-clock"></i> 6 Days - 2 Nights</li>
                               </ul>
                               <div class="line"></div>
                               <div class="text-end">
                                  <span class="badge bg-success mb-2">50% Off</span>
                                  <h2 class="mb-0 trip-price">$450<span>$650</span></h2>
                               </div>
                            </div>
                            <!-- Button -->
                            <a href="tour-details.php" class="btn btn-light w-100">Book Now</a>
                         </div>
                      </div>
                   </div>

                   <!-- Trip Card -->
                   <div class="col-12 col-lg-6">
                      <div class="trip-card wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                         <img src="assets/img/bg-img/14.jpg" alt="">
                         <!-- Trip Body -->
                         <div class="trip-body">
                            <h4 class="mb-4 trip-title">Discover Our Luxury Tour Thailand & Vietnam</h4>
                            <!-- Trip Meta -->
                            <div class="trip-meta d-flex align-items-center justify-content-between gap-3 gap-xxl-4">
                               <ul class="list-unstyled d-flex flex-column gap-3">
                                  <li><i class="ti ti-map-pin-filled"></i> Bhutan, India, Pokhara</li>
                                  <li><i class="ti ti-clock"></i> 6 Days - 2 Nights</li>
                               </ul>
                               <div class="line"></div>
                               <div class="text-end">
                                  <span class="badge bg-success mb-2">50% Off</span>
                                  <h2 class="mb-0 trip-price">$350<span>$450</span></h2>
                               </div>
                            </div>
                            <!-- Button -->
                            <a href="tour-details.php" class="btn btn-light w-100">Book Now</a>
                         </div>
                      </div>
                   </div>

                   <!-- Trip Card -->
                   <div class="col-12 col-lg-6">
                      <div class="trip-card wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1000ms">
                         <img src="assets/img/bg-img/15.jpg" alt="">
                         <!-- Trip Body -->
                         <div class="trip-body">
                            <h4 class="mb-4 trip-title">Adventure South Africa & Mozambique</h4>
                            <!-- Trip Meta -->
                            <div class="trip-meta d-flex align-items-center justify-content-between gap-3 gap-xxl-4">
                               <ul class="list-unstyled d-flex flex-column gap-3">
                                  <li><i class="ti ti-map-pin-filled"></i> Bhutan, India, Pokhara</li>
                                  <li><i class="ti ti-clock"></i> 6 Days - 2 Nights</li>
                               </ul>
                               <div class="line"></div>
                               <div class="text-end">
                                  <span class="badge bg-success mb-2">50% Off</span>
                                  <h2 class="mb-0 trip-price">$250<span>$350</span></h2>
                               </div>
                            </div>
                            <!-- Button -->
                            <a href="tour-details.php" class="btn btn-light w-100">Book Now</a>
                         </div>
                      </div>
                   </div>

                   <!-- Trip Card -->
                   <div class="col-12 col-lg-6">
                      <div class="trip-card wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                         <img src="assets/img/bg-img/13.jpg" alt="">
                         <!-- Trip Body -->
                         <div class="trip-body">
                            <h4 class="mb-4 trip-title">Experience The Incredible India With Travolo</h4>
                            <!-- Trip Meta -->
                            <div class="trip-meta d-flex align-items-center justify-content-between gap-3 gap-xxl-4">
                               <ul class="list-unstyled d-flex flex-column gap-3">
                                  <li><i class="ti ti-map-pin-filled"></i> Bhutan, India, Pokhara</li>
                                  <li><i class="ti ti-clock"></i> 6 Days - 2 Nights</li>
                               </ul>
                               <div class="line"></div>
                               <div class="text-end">
                                  <span class="badge bg-success mb-2">50% Off</span>
                                  <h2 class="mb-0 trip-price">$450<span>$650</span></h2>
                               </div>
                            </div>
                            <!-- Button -->
                            <a href="tour-details.php" class="btn btn-light w-100">Book Now</a>
                         </div>
                      </div>
                   </div>

                   <!-- Trip Card -->
                   <div class="col-12 col-lg-6">
                      <div class="trip-card wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1000ms">
                         <img src="assets/img/bg-img/14.jpg" alt="">
                         <!-- Trip Body -->
                         <div class="trip-body">
                            <h4 class="mb-4 trip-title">Discover Our Luxury Tour Thailand & Vietnam</h4>
                            <!-- Trip Meta -->
                            <div class="trip-meta d-flex align-items-center justify-content-between gap-3 gap-xxl-4">
                               <ul class="list-unstyled d-flex flex-column gap-3">
                                  <li><i class="ti ti-map-pin-filled"></i> Bhutan, India, Pokhara</li>
                                  <li><i class="ti ti-clock"></i> 6 Days - 2 Nights</li>
                               </ul>
                               <div class="line"></div>
                               <div class="text-end">
                                  <span class="badge bg-success mb-2">50% Off</span>
                                  <h2 class="mb-0 trip-price">$350<span>$450</span></h2>
                               </div>
                            </div>
                            <!-- Button -->
                            <a href="tour-details.php" class="btn btn-light w-100">Book Now</a>
                         </div>
                      </div>
                   </div>
                </div>

                <div class="divider-sm"></div>

                <!-- Pagination -->
                <ul class="touria-pagination list-unstyled justify-content-start">
                   <li class="active"><a href="#">1</a></li>
                   <li><a href="#">2</a></li>
                   <li><a href="#">3</a></li>
                   <li><a href="#"><i class="ti ti-chevron-right"></i></a></li>
                </ul>
             </div>
          </div>
       </div>
    </div>

    <!-- Divider -->
    <div class="divider"></div>

 </section>

 <?php
   include("./footer.php")

   ?>