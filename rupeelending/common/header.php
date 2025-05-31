 <!-- Topbar Start -->
 <div class="container-fluid topbar px-0 px-lg-4  py-2 d-none d-lg-block" style="background-color: #38773F;">
     <div class="container">
         <div class="row gx-0 align-items-center">
             <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                 <div class="d-flex flex-wrap">
                     <div class="border-end border-yellow pe-3">
                         <a href="#" class="small" style="color:#FAD748;"><i class="fas fa-map-marker-alt text-primary1 me-2"></i>Find A Location</a>
                     </div>
                     <div class="ps-3">
                         <a href="mailto:example@gmail.com" class="small" style="color:#FAD748;"><i class="fas fa-envelope text-primary1 me-2"></i>care@rupeelending.com</a>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 text-center text-lg-end">
                 <div class="d-flex justify-content-end">
                     <div class="d-flex border-end border-yellow pe-3">
                         <a class="btn p-0 text-primary text-yellow me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                         <a class="btn p-0 text-primary text-yellow me-3" href="#"><i class="fab fa-twitter"></i></a>
                         <a class="btn p-0 text-primary text-yellow me-3" href="#"><i class="fab fa-instagram"></i></a>
                         <a class="btn p-0 text-primary text-yellow me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                     </div>
                     <div class="dropdown ms-3">
                         <a href="#" class="dropdown-toggle text-dark" data-bs-toggle="dropdown"><small><i class="fas fa-globe-europe text-primary me-2"></i> English</small></a>
                         <div class="dropdown-menu rounded">
                             <a href="#" class="dropdown-item">English</a>
                             <a href="#" class="dropdown-item">Bangla</a>
                             <a href="#" class="dropdown-item">French</a>
                             <a href="#" class="dropdown-item">Spanish</a>
                             <a href="#" class="dropdown-item">Arabic</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Topbar End -->

 <!-- Navbar & Hero Start -->
 <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
     <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light">
             <a href="#" class="navbar-brand p-0">
                 <!--  <h1 class="text-primary mb-0"><i class="fab fa-slack me-2"></i> LifeSure</h1> -->
                 <img src="img/logo1.png" alt="Logo">
             </a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                 <span class="fa fa-bars"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarCollapse">
                 <?php
                    $currentPage = basename($_SERVER['PHP_SELF']); // Get the current page name
                    ?>

                 <div class="navbar-nav mx-0 mx-lg-auto">
                     <a href="index.php" class="nav-item text-dark nav-link <?= $currentPage == 'index.php' ? 'active' : '' ?>">Home</a>
                     <a href="about.php" class="nav-item text-dark nav-link <?= $currentPage == 'about.php' ? 'active' : '' ?>">About Us</a>
                     <a href="repay-loan.php" class="nav-item text-dark nav-link <?= $currentPage == 'repay-loan.php' ? 'active' : '' ?>">Repay Loan</a>
                     <a href="contact.php" class="nav-item text-dark nav-link <?= $currentPage == 'contact.php' ? 'active' : '' ?>">Contact</a>
                     <div class="px-3">
                         <a href="apply-now.php" class="btn btn-primary rounded-pill py-2 px-4 ms-3 flex-shrink-0 blink-effect">Apply Now</a>
                     </div>
                 </div>

             </div>
             <div class="d-none d-xl-flex flex-shrink-0 ps-4">
                 <a href="#" class="btn btn-light btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                     <i class="fa fa-phone-alt fa-2x"></i>
                     <div class="position-absolute" style="top: 7px; right: 12px;">
                         <span><i class="fa fa-comment-dots text-secondary"></i></span>
                     </div>
                 </a>
                 <div class="d-flex flex-column ms-3">
                     <span>Call to Our Experts</span>
                     <a href="tel:+ + 91-9174748989"><span class="text-dark">Free: + 91-9174748989</span></a>
                 </div>
             </div>
         </nav>
     </div>
 </div>
 <!-- Navbar & Hero End -->
