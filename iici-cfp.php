<!DOCTYPE html>
<html lang="en">
<?php $page = 'iici-cfp'; ?>

<head>
    <meta charset="utf-8">
    <title>Call for Papers | IICI 2023</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include 'include/head.php'; ?>
</head>

<body class="text-justify">
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

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">IICI 2023</h6>
                    <h2 class="mt-2">Call For Papers</h2>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">

                        <p class="mb-4 text-justify">
                            IETE, jointly with BEL & C-DOT, is organizing The Second 'IETE International Conference India -2023' (iici-23), on
                            <b>"AI & ML DRIVING 5G-ADVANCED & 6G - Making 6G & A1 in India for The World"</b> from May 03 to 05, 2023 in Bengaluru. This
                            conference attempts to highlight the technological developments in 5G-Advanced, 6G and its Applications with
                            emphasis on the critical role of Artificial Intelligence and Machine Learning. iici-2023 creates a platform for experts in
                            these domains to come together and exchange their research and developments.<br><br>
                            All researchers working in the domain Of Wireless Communications, AI & ML and its Applications are requested to
                            submit their papers (in standard <a href="https://iete.org/lETE-Journal%200f%20Research%20Template.pdf"> IETE Format </a>)
                            in these broad areas for presentation in IICI-2023.<br><br>
                            Some suggested topics (but not limited to only these): All aspects of Technologies & Applications of 5G, 5G-
                            Advanced, 6G & A1 — particularly related to: <br><br>
                        </p>
                    </div>
                </div>
                <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <ul>
                            <li>6G network</li>
                            <li>NR</li>
                            <li>Massive MIMO</li>
                            <li>Beam Forming</li>
                            <li>mmwave</li>
                            <li>Waveforms</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <ul>
                            <li>Numerology</li>
                            <li>eMBB</li>
                            <li>mMTC</li>
                            <li>uRLC</li>
                            <li>NTN</li>
                            <li>Positioning</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <ul>
                            <li>IRS</li>
                            <li>AI</li>
                            <li>ML</li>
                            <li>Deep Learning</li>
                            <li>Holographic Radio</li>
                            <li>Network Slicing / SDN / Network Virtualization</li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                        <ul>
                            <li>Cell Free massive MIMO,</li>
                            <li>Spectrum Sensing & Sharing</li>
                            <li>Mobile Edge & Fog Computing</li>
                            <li>Applications of 5G / 6G / AI etc.</li>
                        </ul>
                    </div>
                </div>
                <br><br>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="mb-4 text-justify">
                        Selected accepted papers will be published in <b>"IETE Journal of Research"</b>.<br><br>
                        <a class="btn btn-dark py-sm-3 px-sm-5 rounded-pill me-3" href="https://cmt3.research.microsoft.com/User/Login?ReturnUrl=%2FIICI2023" target="_blank">
                            Submit Your Paper
                        </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Team End -->



    <?php include 'include/footer.php'; ?>
</body>

</html>