<!DOCTYPE html>
<html lang="en">
<?php $page = 'newsletter'; ?>

<head>
    <meta charset="utf-8">
    <title>Newsletters | IETE Bangalore</title>
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

            <div class="container-xxl py-5 bg-primary hero-header mb-5">
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated zoomIn">Newsletters</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        </div>
                    </div>
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

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container px-lg-5">
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">Newsletters</h6>
                    <h2 class="mt-2">IETE BENGALURU MAGAZINE</h2>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="mb-4">
                        <ol>
                            <li>
                                <b>Volume 1 - Jun to Aug 2018 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_1.pdf" target="_blank" target="_blank">View</a>
                            </li><br>
                            <li>
                                <b>Volume 2 - Sep to Nov 2018 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_2.pdf" target="_blank">View</a>
                            </li><br>
                            <li>
                                <b>Volume 3 - Dec 18 to Feb 19 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_3.pdf" target="_blank">View</a>
                            </li><br>
                            <li>
                                <b>Volume 4 - Mar to May 2019 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_4.pdf" target="_blank">View</a>
                            </li><br>
                            <li>
                                <b>Volume 5 - Jun to Aug 2019 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_5.pdf" target="_blank">View</a>
                            </li><br>
                            <li>
                                <b>Volume 6 - Oct to Dec 2019 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_6.pdf" target="_blank">View</a>
                            </li><br>
                            <li>
                                <b>Volume 7 - Jan to Jul 2020 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_7.pdf" target="_blank">View</a>
                            </li><br>
                            <li>
                                <b>Volume 8 - Aug to Oct 2020 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_8.pdf" target="_blank">View</a>
                            </li><br>
                            <li>
                                <b>Volume 9-Nov 20 to Feb 21 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_9.pdf" target="_blank">View</a>
                            </li><br>
                            <li>
                                <b>Volume 10 - Mar to May 2021 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_10.pdf" target="_blank">View</a>
                            </li><br>
                            <li>
                                <b>Volume 11 - May to Aug 2021 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_11.pdf" target="_blank">View</a>
                            </li><br>
                            <li>
                                <b>Volume 12 Sept to Nov 2021 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_12.pdf" target="_blank">View</a>
                            </li><br>
                            <li>
                                <b>Volume 13 Dec 21 to Feb 22 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_13.pdf" target="_blank">View</a>
                            </li><br>
                            <li>
                                <b>Volume 14 March 22 to May 22 :</b> &nbsp;&nbsp; <a href="assets\newsletter\volume_14.pdf" target="_blank">View</a>
                            </li><br>
                        </ol>
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->



        <?php include 'include/footer.php'; ?>
</body>

</html>