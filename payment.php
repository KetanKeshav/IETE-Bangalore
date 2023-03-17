<!DOCTYPE html>
<html lang="en">
<?php $page = 'payment'; ?>

<head>
    <meta charset="utf-8">
    <title>Payment Details | IETE Bangalore</title>
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
                    <h6 class="position-relative d-inline text-primary ps-4">Payment details</h6>
                    <h2 class="mt-2">Payment Details</h2>
                </div>
                <div class="row g-5">
                    <!-- <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="mb-4 text-justify">
                            All payments are to be made by online/Demand Draft drawn in
                            favour of <b>"IICI Bangalore"</b> Payable at Bangalore with
                            intimation to us<br><br>
                            <b>Bank Details :</b><br>
                            Account Name : <b>IICI Bangalore</b><br>
                            Account Number : <b>37278207802</b><br>
                            Account Type : <b>Current Account</b><br>
                            Bank Name : <b>State Bank of India (SBI), Ganganahalli Bangalore</b><br>
                            IFSCCode : <b>SBIN0040276</b>
                        </p>
                    </div> -->
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="text-center">
                            Google form link for IETE Bangalore Payment<br>
                            <a href="https://forms.gle/YV7YC5zpyng8nJ7P9">IETE Bangalore</a>
                        </h2>
                        <div class="img-fluid">
                            <center>
                                <img src="img/payments/1.webp" alt="payment" class="img-fluid" width="70%">
                            </center>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="text-center">
                            Google form link for IICI 2023<br>
                            <a href="https://forms.gle/SJAzUExDdmTaq9wW7">IICI 2023</a>
                        </h2>
                        <div class="img-fluid">
                            <center>
                                <img src="img/payments/2.webp" alt="payment" class="img-fluid" width="70%">
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->



        <?php include 'include/footer.php'; ?>
</body>

</html>