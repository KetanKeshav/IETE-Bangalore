<!DOCTYPE html>
<html lang="en">
<?php $page = 'agm'; ?>

<head>
    <meta charset="utf-8">
    <title>AGM 2023 | IETE Bangalore</title>
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
                    <h6 class="position-relative d-inline text-primary ps-4">AGM Notice</h6>
                    <h2 class="mt-2">AGM 2023</h2>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h3>ANNUAL GENERAL BODY MEETING OF IETE BANGALORE CENTRE FOR THE YEAR 2022-2023</h3>
                        <p class="mb-4">
                            All members are requested to take note of the following details regarding <b>Annual General Body Meeting (AGM) of IETE Bangalore Centre for the year 2022-2023</b>
                            <ul>
                                <li><b>Date: </b>Sunday, 18th June 2023</li>
                                <li><b>Time: </b>10:00 am</li>
                                <li><b>Venue:</b> IETE Bangalore, Bellary Road, Ganganagar Extension, Bangalore-560032</li>
                            </ul>
                        </p>
                        <p class="mb-4">
                            <b>Agenda</b>
                            <ul>
                                <li>Confirmation of the minutes of the last AGM held on 26th June 2022 at 10.00 AM at IETE Bangalore.</li>
                                <li>To consider and adopt the Annual Report of the IETE Bangalore for the year 2022-2023.</li>
                                <li>To consider and approve the Audited Statement of Accounts and Balance Sheet for the year 2022-2023. (www.ietebangalore.org.)</li>
                                <li>To appoint auditor for the year 2023-2024.</li>
                                <li>Address by Chairman </li>
                                <li>Any other points with the permission of Chair</li>
                                <li>Vote of Thanks</li>
                            </ul>
                        </p>
                        <p class="mb-4">
                            <b>Please Note:</b>
                            <ul>
                                <li>The Minutes, Annual Report & Statement of Accounts will be available in our website: www.ietebangalore.org by 10th June 2023.</li>
                                <li>You are requested to send any points/queries for discussion/clarifications in advance, so as to reach the undersigned before 15th June 2023.</li>
                            </ul>
                        </p>
                        <p>Dr. S G Shivaprasad Yadav<br>
                            <b>Hon. Secretary</b></p>
                        <h2>AGM PROGRAMME</h2>
                        <p>Sunday, 18th June 2023 at Delton Auditorium, Bellary Road, Ganganagar Extn., Bangalore-560032</p>
                        <ol>
                            <li>10:00-11:30: AGM Business Meeting (for members only)</li>
                            <li>11:40-13:00: Prof. N S Nagaraja Memorial Lecture</li>
                            <li>13:00-14:00: Lunch (Members are invited to attend with their family)</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->



        <?php include 'include/footer.php'; ?>
</body>

</html>