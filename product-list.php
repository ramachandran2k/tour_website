<?php include("./header.php") ?>
<link rel="stylesheet" href="assets/css/nouislider.min.css">

<!-- Breadcrumb Section -->
<div class="breadcrumb-section bg-img jarallax" data-jarallax data-speed="0.6"
   style="background-image: url('https://images.unsplash.com/photo-1602526211340-6b0d53c02277?auto=format&fit=crop&w=1200&q=80');">
   <div class="container">
      <div class="breadcrumb-content">
         <div class="divider"></div>
         <h2>Product List</h2>
         <ul class="list-unstyled">
            <li><a href="index.php">Home</a></li>
            <li>Product List</li>
         </ul>
      </div>
   </div>
   <div class="divider"></div>
</div>

<!-- Product List Section -->
<section class="tour-list-section">
   <div class="divider"></div>
   <div class="container">
      <div class="row g-4">
         <!-- Sidebar -->
         <div class="col-12 col-md-4">
            <div class="tour-list-sidebar">
               <!-- Category Filter -->
               <div class="sidebar-widget">
                  <h4 class="widget-title mb-4">Product Category</h4>
                  <ul class="sidebar-checkbox-list list-unstyled">
                     <li><div class="form-check"><input class="form-check-input" type="checkbox" id="electronics"><label class="form-check-label ms-2" for="electronics">Electronics</label><span class="text-muted">10</span></div></li>
                     <li><div class="form-check"><input class="form-check-input" type="checkbox" id="fashion" checked><label class="form-check-label ms-2" for="fashion">Fashion</label><span class="text-muted">15</span></div></li>
                     <li><div class="form-check"><input class="form-check-input" type="checkbox" id="home"><label class="form-check-label ms-2" for="home">Home</label><span class="text-muted">5</span></div></li>
                  </ul>
               </div>

               <!-- Price Slider -->
               <div class="sidebar-widget">
                  <h4 class="widget-title mb-4">Price</h4>
                  <div id="range-slider-price"></div>
                  <div class="d-flex justify-content-between mt-2">
                     <span id="min-price" class="badge bg-success px-3 py-2">100</span>
                     <span id="max-price" class="badge bg-success px-3 py-2">900</span>
                  </div>
               </div>
            </div>
         </div>

         <!-- Product Cards -->
         <div class="col-12 col-md-8">
            <div class="tour-list-content">
               <div class="row g-4">
                  <?php
                 $products = [
  ["name" => "Wireless Headphones", "img" => "https://dummyimage.com/300x300/28a745/ffffff&text=Headphones", "price" => 99, "old_price" => 129],
  ["name" => "Smart Watch", "img" => "https://dummyimage.com/300x300/28a745/ffffff&text=Smart+Watch", "price" => 120, "old_price" => 160],
  ["name" => "Running Shoes", "img" => "https://dummyimage.com/300x300/28a745/ffffff&text=Shoes", "price" => 75, "old_price" => 90],
  ["name" => "Sunglasses", "img" => "https://dummyimage.com/300x300/28a745/ffffff&text=Sunglasses", "price" => 45, "old_price" => 70],
  ["name" => "Bluetooth Speaker", "img" => "https://dummyimage.com/300x300/28a745/ffffff&text=Speaker", "price" => 80, "old_price" => 110],
  ["name" => "Leather Wallet", "img" => "https://dummyimage.com/300x300/28a745/ffffff&text=Wallet", "price" => 60, "old_price" => 85],
];

                  foreach ($products as $p): ?>
                  <div class="col-12 col-lg-6">
                     <div class="trip-card wow fadeInUp" data-wow-delay="100ms" data-wow-duration="800ms">
                        <img src="<?= $p['img'] ?>" alt="<?= $p['name'] ?>">
                        <div class="trip-body">
                           <h4 class="mb-4 trip-title"><?= $p['name'] ?></h4>
                           <div class="trip-meta d-flex align-items-center justify-content-between gap-3">
                              <ul class="list-unstyled d-flex flex-column gap-2">
                                 <li><i class="ti ti-tag"></i> Best Seller</li>
                                 <li><i class="ti ti-truck-delivery"></i> Free Delivery</li>
                              </ul>
                              <div class="line"></div>
                              <div class="text-end">
                                 <span class="badge bg-success mb-2">Save <?= $p['old_price'] - $p['price'] ?>%</span>
                                 <h2 class="mb-0 trip-price">$<?= $p['price'] ?><span>$<?= $p['old_price'] ?></span></h2>
                              </div>
                           </div>
                           <a href="product-details.php" class="btn btn-light w-100">View Product</a>
                        </div>
                     </div>
                  </div>
                  <?php endforeach; ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="divider"></div>
</section>

<!-- JS for noUiSlider -->
<script src="assets/js/nouislider.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    var priceSlider = document.getElementById('range-slider-price');
    var minPrice = document.getElementById('min-price');
    var maxPrice = document.getElementById('max-price');

    if (priceSlider) {
      noUiSlider.create(priceSlider, {
        start: [100, 900],
        connect: true,
        range: { min: 0, max: 1000 },
        tooltips: true,
        format: {
          to: value => Math.round(value),
          from: value => Number(value)
        }
      });

      priceSlider.noUiSlider.on('update', function (values) {
        minPrice.textContent = values[0];
        maxPrice.textContent = values[1];
      });
    }
  });
</script>

<?php include("./footer.php") ?>
