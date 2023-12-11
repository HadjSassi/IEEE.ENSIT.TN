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
                                <a href="cs.html" class="dropdown-item">CS</a>
                                <a href="ras.html" class="dropdown-item">RAS</a>
                                <a href="ias.html" class="dropdown-item">IAS</a>
                                <a href="aess.html" class="dropdown-item">AESS</a>
                                <a href="pes.html" class="dropdown-item">PES</a>
                                <a href="wie.php" class="dropdown-item">WIE</a>
                            </div>
                        </div>
                        <a href="contact.html" class="nav-item nav-link">Contact</a>
                        <a href="joinus.html" class="nav-item nav-link ">Join Us</a>

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
    <div class="container-fluid event-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
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
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="row">
                <!-- Text Content -->
                <div class="col-md-6 text-center text-md-start pb-5 pb-md-0 wow fadeInLeft" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="fs-5 fw-medium text-primary">Team Dev</p>
                    <h1 class="display-5 mb-5">Big Thanks</h1>
                    <p class="">
                        I am incredibly grateful and proud to lead such an exceptional group of individuals.
                        <br>
                        <strong><em>Cherni Rihab</em></strong>,
                        <strong><em>Fedi Bahloul</em></strong>,
                        <strong><em>Molka Elloumi</em></strong>,
                        <strong><em>Ahmed Sidi Mohamed</em></strong>, and
                        <strong><em>Moussi Wiem</em></strong>, your dedication and hard work have been instrumental in the success of our projects. Each one of you brings unique talents and perspectives to the table, and together, we form a powerhouse of creativity and innovation. Your unwavering support, technical expertise, and collaborative spirit have been the driving force behind our achievements. Thank you for your commitment and passion, and I look forward to accomplishing even greater heights as a team.
                        <br><br>
                        With sincere appreciation: <strong><em>Hadj Sassi Mahdi</em></strong>
                    </p>
                    <img style="margin-top: -10%;" src="img/signatureHadjSassi.png" width="120" /><!-- Replace "about.html" with the actual link to your membership signup form or relevant page -->
                </div>

                <!-- Animated Picture -->
                <div class="col-md-6 wow fadeInRight mt-5" data-wow-delay="0.2s">
                    <img src="img/thanks.gif" alt="Animated Picture" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

       <!-- Footer Start -->
       <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
           <div class="container">
               <div class="row g-5">
                   <div class="col-lg-3 col-md-6">
                       <img src="img/logos/ieee%20(1).png" width="200" alt="logo sb ieee" class="mb-3"/>
                       <p>

                           ENSIT Student Branch, since 2013, embraces IEEE's values for innovation and humanity. 120+ members strong, we advance skills for a better engineering future.
                       </p>
                   </div>
                   <div class="col-lg-3 col-md-6">
                       <h4 class="text-white mb-4">Contact</h4>
                       <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>05 Ave Taha Hussein, Tunis 1008 à l'ENSIT</p>
                       <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+216 95 741 882</p>
                       <a href="mailto:ieee.ensit.student.branch@gmail.com" class="mb-2 text-white"><i class="fa fa-envelope me-3"></i>ieee.ensit.student.branch<br>@gmail.com
                       </a>
                       <div class="d-flex pt-3">
                           <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.instagram.com/ieee_ensit_student_branch/" aria-label="Twitter">
                               <i class="fab fa-instagram icon-color"></i>
                           </a>
                           <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.facebook.com/ieee.ensit   " aria-label="facebook">
                               <i class="fab fa-facebook-f icon-color"></i>
                           </a>
                           <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.youtube.com/@ieeeensit2837" aria-label="youtube">
                               <i class="fab fa-youtube icon-color"></i>
                           </a>
                           <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.linkedin.com/company/ieee-ensit-student-branch/mycompany/" aria-label="linkedin">
                               <i class="fab fa-linkedin-in icon-color"></i>
                           </a>
                       </div>
                   </div>
                   <div class="col-lg-3 col-md-6">
                       <div class="row">
                           <h4 class="text-white mb-4">Quick Links</h4>
                           <div class="col-6">
                               <a class="btn btn-link" href="index.html#aboutUSindex">About Us</a>
                               <a class="btn btn-link" href="contact.html">Contact Us</a>
                               <a class="btn btn-link" href="gallery.php">Gallery</a>
                               <a class="btn btn-link" href="index.html#teamindex">Team</a>
                               <a class="btn btn-link" href="alumni1.html">Allmuni2021</a>
                               <a class="btn btn-link" href="alumni2.html">Allumni2022</a>
                               <a class="btn btn-link" href="index.html#chaptersIndex">Chapters</a>

                           </div>
                           <div class="col-6">
                               <a class="btn btn-link" href="index.html#">SB</a>
                               <a class="btn btn-link" href="cs.html">CS</a>
                               <a class="btn btn-link" href="ras.html">RAS</a>
                               <a class="btn btn-link" href="ias.html">IAS</a>
                               <a class="btn btn-link" href="aess.html">AESS</a>
                               <a class="btn btn-link" href="pes.html">PES</a>
                               <a class="btn btn-link" href="wie.php">WIE</a>
                           </div>
                       </div>

                   </div>
                   <div class="col-lg-3 col-md-6">
                       <h4 class="text-white mb-4">Localisation</h4>
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d629.4879921325812!2d10.179256687986872!3d36.784739211827876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd340576fc1a05%3A0x25fc1aa869f8cfb6!2s%C3%89cole%20nationale%20sup%C3%A9rieure%20d&#39;ing%C3%A9nieurs%20de%20Tunis%20(ENSIT)!5e0!3m2!1sen!2stn!4v1690723522488!5m2!1sen!2stn" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   </div>
               </div>
           </div>
       </div>
       <!-- Footer End -->


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
