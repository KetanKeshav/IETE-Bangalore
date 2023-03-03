<!DOCTYPE html>
<html lang="en">
<?php $page = 'iici'; ?>

<head>
    <meta charset="utf-8">
    <title>IICI 2023 | IETE Bangalore</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include 'include/head.php'; ?>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <?php include 'include/navbar.php'; ?>

            <div class="container-xxl py-5">
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Full Screen Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                    <div class="modal-header border-0">
                        <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center justify-content-center">
                        <div class="input-group" style="max-width: 600px;">
                            <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                            <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Full Screen Search End -->

        <!-- Portfolio Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Our Conference</h6>
                    <h2 class="mt-2">IICI 2023</h2>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->

        <!-- Event Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative mb-4 pb-2">
                            <h2 class="mt-2 text-center">IETE International Conference India - 2023 (IICI-23)</h2>
                            <h6 class="text-primary text-center">On AI & ML Driving 5G-Advanced & 6G</h6>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="position-relative mb-4 pb-2">
                            <h2 class="mt-2">May 03 - 05, 2023</h6>
                                <h2 class="text-primary">Bengaluru, India</h6>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                        <div class="position-relative mb-4 pb-2">
                            <h2 class="text-primary text">Making 6G & AI in India for The World</h6>
                        </div>
                    </div>
                    <h2 class="mt-2">
                        Organized by : 
                    </h2>
                    <h2 class="text-primary text">The Institution of Electronics and Telecommunication Engineers (IETE)</h2>
                    <h3 class="mt-2 text-center">(Recognized as SIRO by Govt of India)<br>
                        JOINTLY WITH <br>
                        BHARAT ELELCTRONICS LTD (BEL)<br>
                        & CENTRE FOR DEVELOPMENT OF TELEMATICS (C-DOT)<br>
                        at BEL ACADEMY OF EXCELLENCE (NALANDA) BENGALURU, INDIA
                    </h3>
                </div>
                <div class="row g-5 mt-2">
                    <!-- Insert three buttons to Download Brochure, Download Call for Papers and Download Call For SPonsors -->
                    <div class="col-lg-3">
                        <a href="./assets/downloads/CFP.pdf" download="IICI-23-CFP" class="btn btn-outline-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Call For Papers</a>
                    </div>
                    <div class="col-lg-3">
                        <a href="./assets/downloads/Brochure.pdf" download="IICI-23-Brochure" class="btn btn-outline-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Brochure</a>
                    </div>
                    <div class="col-lg-3">
                        <a href="https://cmt3.research.microsoft.com/IICI2023" class="btn btn-outline-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft" target="_bl
                        ">Submit your paper</a>
                    </div>
                    <div class="col-lg-3">
                        <a href="./assets/downloads/CFSP.pdf" download="IICI-23-CFSP" class="btn btn-outline-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Call For Sponsors</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->
    <?php include 'include/footer.php'; ?>
</body>

</html>