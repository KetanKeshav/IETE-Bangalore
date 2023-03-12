<!DOCTYPE html>
<html lang="en">
<?php $page = 'gallery'; ?>

<head>
    <meta charset="utf-8">
    <title>Gallery | IETE Bangalore</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include 'include/head.php'; ?>
    <style>
        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
        }
    </style>
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
                <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="position-relative d-inline text-primary ps-4">IETE</h6>
                    <h2 class="mt-2">Gallery</h2>
                </div>
                <!-- Gallery Start -->
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/events/1.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/events/2.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/events/3.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="img/events/4.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/events/5.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/events/6.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="img/events/7.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/events/8.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/events/9.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item ">
                            <img src="img/events/10.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/events/11.webp" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/events/12.webp" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->


        <?php include 'include/footer.php'; ?>
</body>

</html>