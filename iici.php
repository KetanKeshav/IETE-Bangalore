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
                <div class="row position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="img-fluid">
                            <img src="./img/iici/2.png" alt="IICI 2023" class="img-fluid" width="50%">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="img-fluid">
                            <img src="./img/iici/1.png" alt="IICI 2023" class="img-fluid" width="50%">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="img-fluid">
                            <img src="./img/iici/3.png" alt="IICI 2023" class="img-fluid" width="50%">
                        </div>
                    </div>
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
                <div class="container-xxl py-5">
                    <div class="container px-lg-5">
                        <div class="row g-5">
                            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                <p class="mb-4 text-justify">
                                    IETE, jointly with BEL & C-DOT, is organizing The Second 'IETE International
                                    Conference India -2023' (iici-23), on <b>"AI & ML DRIVING 5G & BEYOND -
                                        Making 6G & AI in India for The World"</b> from May 03 to 05, 2023 in Bengaluru.
                                    This conference attempts to highlight the technological developments in 5G
                                    Advanced & 6G with emphasis on the critical role of Artificial Intelligence and
                                    Machine Learning in efficient design of 5G-Advanced &leading to 6G Networks.
                                    <br><br>
                                    <b>
                                        5G & 6G are set to power billions of connections and be the network
                                        infrastructure for the Internet of everything. Economists estimate the global
                                        economic impact of 5G in new goods and services will reach $12 trillion by
                                        2035. The economic impact of 5G is estimated to be over one trillion dollars for
                                        India, which is positioning itself to be at the forefront of this new
                                        age technology.
                                    </b>
                                    <br><br>
                                    Think about a world in which not just people but all things are connected: cars to
                                    the roads they are on; dcxtors to the personal medical devices of their patients;
                                    augmented reality available to help people shop and learn and explore wherever
                                    they are. This requires a massive increase in the level of connectivity. Beyond 5G
                                    leading to 6G is the technological answer, making possible billions of new
                                    connections, and making those connections secure and instantaneous which will
                                    impact every industry — autos, healthcare, manufacturing and distribution,
                                    emergency services, just to name a few.
                                </p>
                            </div>
                            <div class="row g-5">
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="position-relative mb-4 pb-2">
                                        <h2 class="mt-2 text-center">AI & ML DRIVING 5G & BEYOND -
                                            Making 6G & AI in India for The World</h2>
                                        <p class="mb-4 text-justify">
                                            A fully operative and efficient 5G-Advanced & 6G networks cannot be complete
                                            without the inclusion of artificial intelligence (AI) routines. Existing networks
                                            with all-IP (Internet Protocol) broadband connectivity are based on a reactive
                                            conception, leading to a poorly efficiency of the spectrum. AI and its
                                            subcategories like machine learning and deep learning have been evolving as a
                                            discipline, to the point that nowadays this mechanism allows 5G-Advanced &
                                            6G wireless networks to be predictive and proactive, which is essential in
                                            making the 6G vision conceivable.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-5">
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="position-relative mb-4 pb-2">
                                        <h2 class="mt-2 text-center">iici-2023</h2>
                                        <p class="mb-4 text-justify">
                                            iici-2023 creates a platform for experts in these domains to come together and
                                            exchange their research and developments. It also provides opportunities for
                                            industries and startups to exhibit and announce their new and innovative
                                            products, ideas and concepts in 5G Advanced, 6G and AI, at this conference.
                                            Leading renowned experts will be participating in the conference sharing their
                                            expertise in their domains in the pre-conference Tutorials and also in the
                                            Keynote / Invited Talks.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->
    <?php include 'include/footer.php'; ?>
</body>

</html>