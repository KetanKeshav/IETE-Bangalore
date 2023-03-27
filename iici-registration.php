<!DOCTYPE html>
<html lang="en">
<?php $page = 'iici-registration'; ?>

<head>
    <meta charset="utf-8">
    <title>Registration | IICI 2023</title>
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
                    <h2 class="mt-2">Registration</h2>
                </div>
                <!-- Registration -->
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative mb-4 pb-2">
                            <div class="row g-5">
                                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Includes</th>
                                                    <th>Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Tutorial :</td>
                                                    <td>Rs 2000 (before 25th April 2023)<br>Rs 2500 (after 25th April 2023)</td>
                                                </tr>
                                                <tr>
                                                    <td>Conference :</td>
                                                    <td>Rs 5000 (before 25th April 2023)<br>Rs 5500 (after 25th April 2023)</td>
                                                </tr>
                                                <tr>
                                                    <td>Conference + Tutorial :</td>
                                                    <td>Rs 6500 (before 25th April 2023)<br>Rs 7000 (after 25th April 2023)</td>
                                                </tr>
                                        </table>
                                    </div>
                                    <p class="mb-4 text-justify">
                                        IETE members and Academic Faculty: 20% CONSESSION <br>
                                        ISF STUDENIS: 50% CONCESSION <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p>
                    <b>For any clarifications please contact IICI-23 Coordinators:</b><br>
                    Dr M H Kori / Dr C P Dwivedi / Dr S.G.Shiva Prasad Yadav at<br>
                    iici23iete@gmail.com, mhkori@gmail.com,
                    dwivedichandra@yahoo.com, shivaspy@gmail.com,
                    bangalore@iete.org
                </p>

            </div>
        </div>
        <!-- Team End -->



        <?php include 'include/footer.php'; ?>
</body>

</html>