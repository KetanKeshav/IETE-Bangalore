<!DOCTYPE html>
<html lang="en">
<?php $page = 'about-us'; ?>

<head>
    <meta charset="utf-8">
    <title>About Us | IETE Bangalore</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include 'include/head.php'; ?>
</head>

<body>
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
                    <h6 class="position-relative d-inline text-primary ps-4">About Us</h6>
                    <h2 class="mt-2">About Us</h2>
                </div>
                <div class="row g-5 text-justify">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="mb-4">The Institution of Electronics and Telecommunication Engineers (IETE) is India's leading recognized professional society devoted to the advancement of Science and Technology of Electronics, Telecommunication & IT. Founded in 1953. The IETE is the National Apex Professional body of Electronics and Telecommunication, Computer Science and IT Professionals. It serves more than 1, 25,000 members (including Corporate, Student and ISF members) through various 64 Centres, spread all over India and abroad. The Institution provides leadership in Scientific and Technical areas of direct importance to the national development and economy. Government of India has recognized IETE as a Scientific and Industrial Research Organisation (SIRO) and also notified as an educational Institution of national eminence. The objectives of IETE focus on advancing electro-technology. The IETE conducts and sponsors technical meetings, conferences, symposia, and exhibitions all over India, publishes technical journals and provides continuing education as well as career advancement opportunities to its members.</p>
                        <p class="mb-4">The IETE focuses on advancement of the Science and Technology of Electronics, Telecommunication, Computers, Information Technology and related areas. Towards this end the Institution promotes and conducts basic engineering and continuing technical education programmes for human resource development.</p>
                        <p class="mb-4">The IETE conducts both the Graduateship (AMIETE) Examination in Electronics and Telecommunication Engineering, Computer Science & Engineering and Information Technology streams and Diploma (DIPIETE) Examination in Electronics & Telecommunication and Computer Science & Engineering streams. A pass in AMIETE Examination is recognized by Government of India for the purposes of recruitment to superior posts and services under the Central Government while a pass in Diploma Level (DIPIETE) Examination is recognized by the Ministry of HRD, Govt. of India for the purpose of employment to posts & services under the Central Government in the appropriate fields.</p>
                        <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                            <h2 class="mt-2">Objectives</h2>
                        </div>
                        <p class="mb-4">
                        <ol>
                            <li>To plan and organise Technical Programmes & Activities</li>
                            <li>To provide a common platform for the student members to exchange ideas and information of the topics of their interest</li>
                            <li>To facilitate Technical visits / Practical Training / Project work / Employment.</li>
                            <li>To encourage Team work & the sprit of Self- Reliance.</li>
                            <li>To serve as a Focal Point at the institution on all aspects of professional development.</li>
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