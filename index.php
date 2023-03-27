<!DOCTYPE html>
<html lang="en">
<?php $page = 'home'; ?>

<head>
    <meta charset="utf-8">
    <title>Home | IETE Bangalore</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include 'include/head.php'; ?>
</head>

<body class="text-justify">
    <div class="container-xxl p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar & Hero Start -->
        <marquee class="text-decoration-none" style="font-size: 18px; padding:10px; background-color:#000; color:#fff;" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
            Last Date for Receipt of Papers for IICI 2023 has now been extended to 31st March 2023
        </marquee>
        <div class="container-xxl position-relative p-0" style="margin-top: -10px;">
            <?php include 'include/navbar.php'; ?>
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active hero-header-1">
                        <div class="container my-5 py-5 px-lg-5">
                            <div class="row g-5 py-5">
                                <div class="col-lg-6 text-center text-lg-start">
                                    <h1 class="text-white mb-4 animated zoomIn">The Institution of Electronics and Telecommunication Engineers</h1>
                                    <p class="text-white pb-3 animated zoomIn">India's leading recognized professional society devoted to the advancement of Science and Technology of Electronics, Telecommunication & IT</p>
                                    <a href="#about" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Know More</a>
                                </div>
                                <div class="col-lg-6 text-center text-lg-start">
                                    <img class="img-fluid" src="img/f1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item hero-header-2">
                        <div class="container my-5 py-5 px-lg-5">
                            <div class="row g-5 py-5">
                                <div class="col-lg-6 text-center text-lg-start">
                                    <h1 class="text-white mb-4 animated zoomIn">The Institution of Electronics and Telecommunication Engineers</h1>
                                    <p class="text-white pb-3 animated zoomIn">India's leading recognized professional society devoted to the advancement of Science and Technology of Electronics, Telecommunication & IT</p>
                                    <a href="#about" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Know More</a>
                                </div>
                                <div class="col-lg-6 text-center text-lg-start">
                                    <img class="img-fluid" src="img/f1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item hero-header-3">
                        <div class="container my-5 py-5 px-lg-5">
                            <div class="row g-5 py-5">
                                <div class="col-lg-6 text-center text-lg-start">
                                    <h1 class="text-white mb-4 animated zoomIn">The Institution of Electronics and Telecommunication Engineers</h1>
                                    <p class="text-white pb-3 animated zoomIn">India's leading recognized professional society devoted to the advancement of Science and Technology of Electronics, Telecommunication & IT</p>
                                    <a href="#about" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Know More</a>
                                </div>
                                <div class="col-lg-6 text-center text-lg-start">
                                    <img class="img-fluid" src="img/f1.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
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


    <!-- About Start -->
    <div class="container-xxl py-5" id="about">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title position-relative mb-4 pb-2">
                        <h6 class="position-relative text-primary ps-4">About Us</h6>
                        <h2 class="mt-2">The Institution of Electronics and Telecommunication Engineers (IETE)</h2>
                    </div>
                    <p class="mb-4">The Institution of Electronics and Telecommunication Engineers (IETE) is India's leading recognized professional society devoted to the advancement of Science and Technology of Electronics, Telecommunication & IT. Founded in 1953. The IETE is the National Apex Professional body of Electronics and Telecommunication, Computer Science and IT Professionals. It serves more than 1, 25,000 members (including Corporate, Student and ISF members) through various 64 Centres, spread all over India and abroad. The Institution provides leadership in Scientific and Technical areas of direct importance to the national development and economy. Government of India has recognized IETE as a Scientific and Industrial Research Organisation (SIRO) and also notified as an educational Institution of national eminence. The objectives of IETE focus on advancing electro-technology. The IETE conducts and sponsors technical meetings, conferences, symposia, and exhibitions all over India, publishes technical journals and provides continuing education as well as career advancement opportunities to its members.</p>
                    <p class="mb-4">The IETE focuses on advancement of the Science and Technology of Electronics, Telecommunication, Computers, Information Technology and related areas. Towards this end the Institution promotes and conducts basic engineering and continuing technical education programmes for human resource development.</p>
                    <p class="mb-4">The IETE conducts both the Graduateship (AMIETE) Examination in Electronics and Telecommunication Engineering, Computer Science & Engineering and Information Technology streams and Diploma (DIPIETE) Examination in Electronics & Telecommunication and Computer Science & Engineering streams. A pass in AMIETE Examination is recognized by Government of India for the purposes of recruitment to superior posts and services under the Central Government while a pass in Diploma Level (DIPIETE) Examination is recognized by the Ministry of HRD, Govt. of India for the purpose of employment to posts & services under the Central Government in the appropriate fields.</p>
                    <div class="row g-3">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">Discover IETE Chapter</h2>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>To plan and organise Technical Programmes & Activities</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>To provide a common platform for the student members to exchange ideas and information of the topics of their interest</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>To facilitate Technical visits / Practical Training / Project work / Employment</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>To encourage Team work & the sprit of Self- Reliance</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <?php include 'include/footer.php'; ?>
</body>

</html>