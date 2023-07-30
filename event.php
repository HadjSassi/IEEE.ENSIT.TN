<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IEEE ENSIT SB</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logos/ieee%20(3)%20-%20Copy.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <!--                    <h1 class="fw-bold m-0">IEEE ENSIT SB</h1>-->
                    <img src="img/logos/ieee%20(3).png" width="150">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="index.html" class="nav-item nav-link ">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Alumni</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="alumni2.html" class="dropdown-item">2022-2023</a>
                                <a href="alumni1.html" class="dropdown-item">2021-2022</a>
                            </div>
                        </div>
                        <a href="gallery.php" class="nav-item nav-link active">Gallery</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Chapters</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="feature.html" class="dropdown-item">CS</a>
                                <a href="team.html" class="dropdown-item">RAS</a>
                                <a href="testimonial.html" class="dropdown-item">IAS</a>
                                <a href="quote.html" class="dropdown-item">PES</a>
                                <a href="404.html" class="dropdown-item">WIE</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        <a href="about.html" class="nav-item nav-link ">Join Us</a>

                    </div>
                    <div class="ms-auto d-none d-lg-block">
                        <img src="img/logos/ieee%20(3).png" width="150">
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid gallery-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Gallery</h1>
        </div>
    </div>
    <!-- Page Header End -->


<!-- Event Details Start -->
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <?php
            // Get the chapter and event names from the URL parameters
            $chapterName = isset($_GET['chapter']) ? $_GET['chapter'] : '';
            $eventName = isset($_GET['event']) ? urldecode($_GET['event']) : '';
            // Generate the path to the event folder and files
            $eventPath = "img/Gallery/{$chapterName}/{$eventName}/";
            $coverImageSrc = "{$eventPath}couverture.png";
            $descriptionFile = "{$eventPath}description.txt";

            // Check if the event folder and files exist
            if (file_exists($coverImageSrc) && file_exists($descriptionFile)) {
                // Display the cover image
                echo '<img src="' . $coverImageSrc . '" alt="Cover Image" class="img-fluid">';
            } else {
                // If the cover image doesn't exist, display a placeholder image or a message
                echo '<img src="path/to/placeholder-image.jpg" alt="Cover Image" class="img-fluid">';
            }
            ?>
        </div>
        <div class="col-md-6">
            <?php
            // Display the content of the descriptions.txt file
            if (file_exists($descriptionFile)) {
                $descriptionContent = file_get_contents($descriptionFile);
                echo '<p style="width: 50%;">' . nl2br($descriptionContent) . '</p>';
            } else {
                // If the descriptions.txt file doesn't exist, display a message
                echo '<p style="width: 50%;">Description not available.</p>';
            }
            ?>
        </div>
    </div>
</div>
<!-- Event Details End -->

    <!-- Event Details Start -->
    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <h5 class="text-center">Images</h5>
            </div>
            <div class="col-md-6">
                <h5 class="text-center">Videos</h5>
            </div>
        </div>

        <!-- Add this row to split the images and videos section -->
        <div class="row mt-5">
            <div class="col-md-6">
                <?php
                // Display images from the "img" folder
                $imagePath = "{$eventPath}img/";
                if (file_exists($imagePath)) {
                    $imageFiles = scandir($imagePath);
                    echo '<div class="row">';
                    foreach ($imageFiles as $file) {
                        if ($file !== '.' && $file !== '..') {
                            // Wrap the image link with the Lightbox anchor tag
                            echo '<div class="col-md-6 my-2">';
                            echo '<a href="' . $imagePath . $file . '" data-lightbox="gallery" data-title="Image Title">';
                            echo '<img src="' . $imagePath . $file . '" alt="Event Image" class="img-fluid">';
                            echo '</a>';
                            echo '</div>';
                        }
                    }
                    echo '</div>';
                }
                ?>
            </div>
            <div class="col-md-6">
                <?php
                // Display videos from the "vid" folder
                $videoPath = "{$eventPath}vid/";
                if (file_exists($videoPath)) {
                    $videoFiles = scandir($videoPath);
                    echo '<div class="row">';
                    foreach ($videoFiles as $file) {
                        if ($file !== '.' && $file !== '..') {
                            echo '<div class="col-md-6 my-2">';
                            echo '<video controls class="img-fluid">';
                            echo '<source src="' . $videoPath . $file . '" type="video/mp4">';
                            echo 'Your browser does not support the video tag.';
                            echo '</video>';
                            echo '</div>';
                        }
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Event Details End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">Your Site Name</a>, All Right Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you\'d like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    Designed By <a class="fw-medium text-light" href="https://htmlcodex.com">HTML Codex</a>
                    Distributed By <a class="fw-medium text-light" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


  <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>


</body>

</html>