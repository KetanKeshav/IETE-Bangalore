<!DOCTYPE html>
<html lang="en">
<?php $page = 'history'; ?>

<head>
    <meta charset="utf-8">
    <title>History of IETE | IETE Bangalore</title>
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

            <div class="container-xxl py-5 bg-primary mb-5">
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
                    <h6 class="position-relative d-inline text-primary ps-4">History</h6>
                    <h2 class="mt-2">History of IETE</h2>
                </div>
                <div class="row g-5">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">Introduction</h2>
                        </div>
                        <p class="mb-4">Founded in 1953, the Institution of Electronics and Telecommunication Engineers (IETE) is a leading professional society devoted to the advancement of Science & Technology in Electronics, Telecommunications, Information Technology, Computer Science and other related disciplines. IETE serves its 25493 Corporate members, 230 Organisational members, 12502 Student members and 447 IETE Student Forum Institutions with 59168 ISF students through its 63 Centres spread all over India including one at Kathmandu (Nepal). To keep pace with technological development and achieve the mission of advancing the profession, it organizes conferences, conventions, symposia, seminars, workshops, publications and brain storming sessions for continued knowledge upgradation of its members. The Government of India, Ministry of Science and Technology, Department of Scientific & Industrial Research has recognized IETE as a Scientific and Industrial Research Organization (SIRO) and the Institution has also been notified as an Educational Institution of National Eminence by the Government of India.</p>
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">Organizational Structure</h2>
                        </div>
                        <p class="mb-4">IETE is governed by our elected Governing Council from amongst its Corporate Members and headed by an elected President. It has on its roll the Secretary General- the head of IETE Secretariat and its chief executive. The affairs of the institution are managed through various Committees and Boards nominated by the Governing Council. Various Centres are managed by their respective elected Executive Committees.</p>
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">Membership</h2>
                        </div>
                        <p class="mb-4">IETE offers a variety of Membership grade from student member to Hony Fellow. As members progress in the professional field over the years they become eligible for more advanced membership classification.</p>
                        <div class="section-title position-relative mb-4 pb-2">
                            <h2 class="mt-2">Corporate Members</h2>
                        </div>
                        <p class="mb-4">
                            <ul>
                                <li><b>Honorary fellow (HF):</b> A coveted honour conferred on eminent personalities. To name a few – Dr APJ Abdul Kalam, Dr R Chidambaram, Prof D P Aggarwal, Shri N Vittal, Shri Sunil Bharati Mittal, Dr Anil Kakodkar, Prof V S Ramamurthy, Prof CNR Rao(Bharat Ratna), Prof Govind Swarup, FRS and Prof MGK Menon amongst others.</li>
                                <li>Distinguished Fellow (DF): Highest class of elected membership; only eminent Fellows are eligible for nomination and election. To name a few – Dr V K Attre, Prof K K Aggarwal, Shri Y L Aggarwal, Prof S C Dutta Roy, Prof P B Parikh, Prof B S Sonde, Prof B K Rai, Prof R K Arora, Prof OPN Kalla, Prof B L Deekshatulu, Lt Gen D P Sehgal, PVSM, AVSM,VSM (Retd) & Lt Gen A K Aggarwal, PVSM (Retd).</li>
                                <li>To facilitate Technical visits / Practical Training / Project work / Employment.</li>
                                <li>To encourage Team work & the sprit of Self- Reliance.</li>
                                <li>To serve as a Focal Point at the institution on all aspects of professional development.</li>
                            </ul>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->



        <?php include 'include/footer.php'; ?>
</body>

</html>