<nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0 ">
    <a href="index.php" class="navbar-brand p-0">
        <!-- <h1 class="m-0"><i class="fa fa-search me-2"></i>SEO<span class="fs-5">Master</span></h1> -->
        <img src="img/logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <?php $about = array("ec","history","about-us","mission-vision","awards","newsletter"); ?>
            <a href="index.php" class="nav-item nav-link <?php if($page == 'home') echo 'active' ?>">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link <?php if(in_array($page,$about)) echo 'active' ?> dropdown-toggle" data-bs-toggle="dropdown">About IETE</a>
                <div class="dropdown-menu m-0">
                    <a href="ecmembers.php" class="dropdown-item <?php if($page == 'ec') echo 'active' ?>">EC Members</a>
                    <!-- <a href="#" class="dropdown-item">Memberships</a> -->
                    <a href="history.php" class="dropdown-item  <?php if($page == 'history') echo 'active' ?>">History of IETE</a>
                    <!-- <a href="#" class="dropdown-item">Infrastructures and Facilities</a> -->
                    <a href="mission-vision.php" class="dropdown-item <?php if($page == 'mission-vision') echo 'active' ?>">Mission and Vision</a>
                    <a href="awards.php" class="dropdown-item <?php if($page == 'awards') echo 'active' ?>">Awards</a>
                    <a href="newsletter.php" class="dropdown-item <?php if($page == 'newsletter') echo 'active' ?>">Newsletter</a>
                    <a href="about-us.php" class="dropdown-item <?php if($page == 'about-us') echo 'active' ?>">More about IETE</a>
                </div>
            </div>
            <a href="iici.php" class="nav-item nav-link <?php if($page == 'iici') echo 'active' ?>">IICI 2023</a>
            <a href="events.php" class="nav-item nav-link <?php if($page == 'events') echo 'active' ?>">Events</a>
            <!-- <a href="#" class="nav-item nav-link">IICI-23</a> -->
            <a href="iete-courses.php" class="nav-item nav-link <?php if($page == 'courses') echo 'active' ?>">IETE Courses</a>
            <a href="isf-activities.php" class="nav-item nav-link <?php if($page == 'isf-activities') echo 'active' ?>">ISF Activities</a>
            <!-- <a href="#" class="nav-item nav-link">Gallery</a> -->
            <!-- <div class="nav-item dropdown">
                <a href="isf-activities.php" class="nav-link  dropdown-toggle" data-bs-toggle="dropdown">ISF Activities</a>
                <div class="dropdown-menu m-0">
                    <a href="#" class="dropdown-item">ISF Colleges</a>
                </div>
            </div> -->
            <a href="contact.php" class="nav-item nav-link <?php if($page == 'contact') echo 'active' ?>">Contact</a>
        </div>
    </div>
</nav>