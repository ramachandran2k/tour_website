<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Touria - Tour & Travel Booking HTML Template">

    <!-- Title & Favicon -->
    <title>Reeya signature</title>
    <link rel="shortcut icon" href="assets/img/core-img/favicon.ico" type="image/x-icon">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/tabler-icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/nice-select2.css">
    <link rel="stylesheet" href="assets/css/flatpickr.min.css">
    <link rel="stylesheet" href="assets/css/venobox.min.css">
    <link rel="stylesheet" href="style.css">
</head>
 
<body>
    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="spinner-grow" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>

    <!-- Right Side Offcanvas -->
    <div class="offcanvas offcanvas-end right-side-touria-offcanvas shadow-lg" tabindex="-1" id="sideMenuOffcanvas">
        <!-- Offcanvas Header -->
        <div class="offcanvas-header">
            <div>
                <img src="https://reeyasignature.com/wp-content/uploads/2022/11/RSH-logo.png" alt="">
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- Offcanvas Body -->
        <div class="offcanvas-body">
            <div class="container-fluid">
                <div class="d-flex flex-column gap-5 mb-5">
                    <!-- Single Item -->
                    <div class="about-card-sm d-flex align-items-center gap-3">
                        <div class="icon text-success">
                            <i class="ti ti-shield-half"></i>
                        </div>
                        <div>
                            <h4>Safety First Always</h4>
                            <p class="mb-0">We believe in the power of travel As avid explorer.</p>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="about-card-sm d-flex align-items-center gap-3">
                        <div class="icon text-success">
                            <i class="ti ti-world-star"></i>
                        </div>
                        <div>
                            <h4>Experience the World</h4>
                            <p class="mb-0">We believe in the power of travel As avid explorer.</p>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="about-card-sm d-flex align-items-center gap-3">
                        <div class="icon text-success">
                            <i class="ti ti-capture"></i>
                        </div>
                        <div>
                            <h4>Excellence in Service</h4>
                            <p class="mb-0">We believe in the power of travel As avid explorer.</p>
                        </div>
                    </div>

                    <!-- Single Item -->
                    <div class="about-card-sm d-flex align-items-center gap-3">
                        <div class="icon text-success">
                            <i class="ti ti-user"></i>
                        </div>
                        <div>
                            <h4>Friendly Guider</h4>
                            <p class="mb-0">We believe in the power of travel As avid explorer.</p>
                        </div>
                    </div>

                    <a href="about-us.html" class="btn btn-success">Book Now <i class="icon-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Form Overlay -->
    <div class="search-bg-overlay" id="searchOverlay"></div>

    <!-- Search Form Popup -->
    <div class="search-form-popup">
        <h2 class="mb-5 display-6 fw-bold text-white">How can I help you, Today?</h2>
        <button type="button" class="close-btn" id="searchClose" aria-label="Close">
            <i class="ti ti-x"></i>
        </button>
        <form class="search-form">
            <input type="search" class="form-control" placeholder="Search...">
            <button type="submit" class="btn btn-success d-none"><i class="ti ti-search"></i></button>
        </form>
    </div>

    <!-- Header Area-->
    <header class="header-area style-three">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-xl">
                <!-- Navbar Brand -->
                <a class="navbar-brand" href="index.html">
                    <img src="https://reeyasignature.com/wp-content/uploads/2022/11/RSH-logo.png" style=" width: 5rem; " alt="">
                </a>

                <!-- Navbar Toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#touriaNav"
                    aria-controls="touriaNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti ti-menu-deep"></i>
                </button>

                <!-- Navbar Nav -->
                <div class="collapse justify-content-xl-end navbar-collapse" id="touriaNav">
                    <ul class="navbar-nav align-items-xl-center navbar-nav-scroll">

                        <li>
                            <a href="index.php">home</a>
                        </li>


                        <li>
                            <a href="tour-list.php">Tour</a>
                        </li>

                        <li>
                            <a href="product-list.php">products</a>
                        </li>

                        <li>
                            <a href="guider.php">Ambassador </a>
                        </li>

                        <li>
                            <a href="gallery.php">Gallery</a>
                        </li>

                        <li>
                            <a href="blog-list.php">Blog </a>
                        </li>

                        <li>
                            <a href="faqs.php">FAQs</a>
                        </li>

                        <li>
                            <a href="about-us.php">About Us</a>
                        </li>

                        <li>
                            <a href="contact.php">Contact</a>
                        </li>




                    </ul>

                    <!-- Header Navigation -->
                    <div class="header-navigation d-flex flex-wrap align-items-center gap-3 mt-4 mt-xl-0">
                        <!-- Search Button -->




                        <!-- Get A Quote -->
                        <a class="btn btn-success" href="contact.html">Get a Quote <i class="icon-arrow-right"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </header>