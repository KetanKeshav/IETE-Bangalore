<!DOCTYPE html>
<html lang="en">
<?php $page = 'courses'; ?>

<head>
    <meta charset="utf-8">
    <title>IETE Courses | IETE Bangalore</title>
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
                    <h6 class="position-relative d-inline text-primary ps-4">IETE Courses</h6>
                    <h2 class="mt-2">IETE Courses</h2>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">

                        <div class="table-responsive">
                            <table class="table table-hover my-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Sl. no.</th>
                                        <th scope="col">Course Name</th>
                                        <th scope="col">Course</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Cyber Security</td>
                                        <td><a href="./assets/downloads/Course Content of Cyber Security.pdf" class="btn btn-primary" download="Cyber Security IETE Course">Course Details</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Advanced FPGA Design with Lab Session</td>
                                        <td><a href="./assets/downloads/Advanced FPGA Design with Lab Session.pdf" class="btn btn-primary" download="Advanced FPGA Design with Lab Session">Course Details</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>AI/ML Internship</td>
                                        <td>Course Details</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>AR & IoT Training</td>
                                        <td>Course Details</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Electronics Warfare</td>
                                        <td>Course Details</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Embedded Sytems Design (ESD02)</td>
                                        <td><a href="./assets/downloads/Embedded Sytems Design.pdf" class="btn btn-primary" download>Course Details</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>IOT & Augmented Reality (AR)</td>
                                        <td>Course Details</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>IOT Internship</td>
                                        <td>Course Details</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>JAVA Android Applications</td>
                                        <td>Course Details</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Lean Six Sigma Green Belt</td>
                                        <td>Course Details</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">11</th>
                                        <td>MATLAB/SIMULINK</td>
                                        <td><a href="./assets/downloads/MATLAB or SIMULINK.pdf" class="btn btn-primary" download>Course Details</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">12</th>
                                        <td>Python with Big Data</td>
                                        <td>Course Details</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">13</th>
                                        <td>Advanced IOT</td>
                                        <td>Course Details</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">14</th>
                                        <td>Image Processing using MATLAB</td>
                                        <td><a href="./assets/downloads/Image Processing using MATLAB.jpeg" class="btn btn-primary" download>Course Details</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">15</th>
                                        <td>Python Programming</td>
                                        <td><a href="./assets/downloads/Python Programming.pdf" class="btn btn-primary" download>Course Details</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">16</th>
                                        <td>AI and ML with Python</td>
                                        <td><a href="./assets/downloads/AI and ML with Python IETE.pdf" class="btn btn-primary" download="AI and ML with Python">Course Details</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <ul>
                                <li>Faculty: From reputed institutions IISc, LRDE, ISRO, ADA and Premier education institutions.</li>
                                <li>Days: Saturdays and Sundays</li>
                                <li>Timing: flexible</li>
                                <li>Course details & Fees: Contact Hony. Secretary at banglore@iete.org 080-2333 1133, 080-2333 7231 (including Course material in CD & coffee)</li>
                                <li>Duration: Three hours /day (4days to 10 days)</li>
                                <li>Venue: IETE Bangalore Centre</li>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->



        <?php include 'include/footer.php'; ?>
</body>

</html>