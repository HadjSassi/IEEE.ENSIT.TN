<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IEEE WIE ENSIT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logos/wie1.png" rel="icon">

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
    <link href="wie/stylewie.css" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner"  class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border color-wie" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <?php include("./wie/components/Header.html") ?>
    <?php include("./wie/components/Carousel.php") ?>
    <?php include("./wie/components/overview.php") ?>
//     <?php include("./wie/components/about-wie.php") ?>

<!-- About Start -->
<div   class="container-xxl about-wie my-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6">

            </div>
            <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="1s">
                <div class="bg-white rounded-top p-5 mt-lg-5">
                    <h1 class="display-6 mb-4">About US</h1>
                    <h5 class="mb-4 text-black-50 text-center">
                        Our student branch is a vibrant and inclusive community dedicated to fostering diversity and empowering women in the field of engineering. We are part of the global IEEE WIE network, which strives to inspire, engage, and advance women in technology and engineering professions.
                        </h5>
                    <a class="btn btn-wie rounded-pill py-3 px-5" href="https://wie.ieee.org/">Explore More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
    <?php include("./wie/components/Members.php") ?>
    <?php include("./wie/components/Gallary-wie.php") ?>
    <?php include("./wie/components/Join-us-wie.php") ?>
    <?php include("./wie/components/Footer-wie.php") ?>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
