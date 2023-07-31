<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IEEE WIE ENSIT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/logos/wie.png" rel="icon">

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
    <style>
        /* Custom styles for the Facebook icon */
        .iconWie {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: #5f2d67;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            color: white;
            transition: background-color 0.3s, color 0.3s;
        }

        .iconWie:hover {
            background-color: white;
            color: #5f2d67;
        }
        /* Custom styles for the carousel "Previous" and "Next" buttons */
        #header-carousel .carousel-control-prev-icon-wie,
        #header-carousel .carousel-control-next-icon-wie {
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 3.5rem;
            background-color: #5f2d67; /* Change to #5f2d67 color */
            border: 15px solid #5f2d67; /* Change to #5f2d67 color */
        }

        .dropdown-menu a.dropdown-item:visited ,
        .dropdown-menu a.dropdown-item:hover {
            background-color: #5f2d67;
        }

        .navbar .navbar-nav .nav-link:hover,
        .navbar .navbar-nav .nav-link.active {
            color: var(--bs-#5f2d67);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 3.5rem;
            background-color: var(--bs-#5f2d67);
            border: 15px solid var(--bs-#5f2d67);
        }
        .custom-btn-outline-wie {
            border-color: #5f2d67; 
            color: #5f2d67; 
            }

            .custom-btn-outline-wie:hover {
            border-color: #400B49; 
            background-color: #400B49;
            color: white; 
            }
            .btn-wie {
                background-color: #5f2d67 !important; 
                border-color: #5f2d67; 
                color: white;  
            }

            .btn-wie:hover {
                border-color: #400B49;  
                background-color: #400B49; 
                color: white; 
            }
            .btn-play {
            position: relative;
            display: block;
            box-sizing: content-box;
            width: 36px;
            height: 46px;
            border-radius: 100%;
            border: none;
            outline: none !important;
            padding: 18px 20px 20px 28px;
            background: #5f2d67;
        }

        .btn-play:before {
            content: "";
            position: absolute;
            z-index: 0;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            display: block;
            width: 90px;
            height: 90px;
            background: #5f2d67;
            border-radius: 100%;
            animation: pulse-border 1500ms ease-out infinite;
        }

        .btn-play:after {
            content: "";
            position: absolute;
            z-index: 1;
            left: 50%;
            top: 50%;
            transform: translateX(-50%) translateY(-50%);
            display: block;
            width: 90px;
            height: 90px;
            background: #5f2d67;
            border-radius: 100%;
            transition: all 200ms;
        }

        .btn-play span {
            display: block;
            position: relative;
            z-index: 3;
            width: 0;
            height: 0;
            left: 3px;
            border-left: 30px solid #FFFFFF;
            border-top: 18px solid transparent;
            border-bottom: 18px solid transparent;
        }
        .about-wie{
            background: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1)), url(img/wie/1.jpg) left center no-repeat;
            background-size: cover;
        }
        .color-wie{
            color: #5f2d67;
        }
    </style>
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
    <?php include("./wie/components/about-wie.php") ?>
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