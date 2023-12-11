<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IEEEXtreme ENSIT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/img/logos/cs1.png" rel="icon">

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
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">
    <style>
        /* Custom styles for the Facebook icon */
        .iconCs {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: orange;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            color: white;
            transition: background-color 0.3s, color 0.3s;
        }

        .iconCs:hover {
            background-color: white;
            color: orange;
        }
        /* Custom styles for the carousel "Previous" and "Next" buttons */
        #header-carousel .carousel-control-prev-icon-cs,
        #header-carousel .carousel-control-next-icon-cs {
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 3.5rem;
            background-color: orange; /* Change to orange color */
            border: 15px solid orange; /* Change to orange color */
        }

        .dropdown-menu a.dropdown-item:visited ,
        .dropdown-menu a.dropdown-item:hover {
            background-color: orange;
        }

        .navbar .navbar-nav .nav-link:hover,
        .navbar .navbar-nav .nav-link.active {
            color: var(--bs-orange);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 3.5rem;
            background-color: var(--bs-orange);
            border: 15px solid var(--bs-orange);
        }
        .joinus-header {
            background: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1)), url(/CS/IEEEXtreme/assets/bg.jpg) center center no-repeat;
            background-size: cover;
        }

    </style>
</head>

<body>
<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-warning" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->


<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
            <a href="/index.html" class="navbar-brand d-lg-none">
                <!--                    <h1 class="fw-bold m-0">IEEE ENSIT SB</h1>-->
                <img src="/CS/IEEEXtreme/assets/color%20(2).png" alt="" width="150">
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="/index.html" class="nav-item nav-link ">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Alumni</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="/alumni2.html" class="dropdown-item  ">2022-2023</a>
                            <a href="/alumni1.html" class="dropdown-item ">2021-2022</a>
                        </div>
                    </div>
                    <a href="/gallery.php" class="nav-item nav-link">Gallery</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Chapters</a>
                        <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="/cs.html" class="dropdown-item">CS</a>
                            <a href="/ras.html" class="dropdown-item">RAS</a>
                            <a href="/ias.html" class="dropdown-item">IAS</a>
                            <a href="/aess.html" class="dropdown-item">AESS</a>
                            <a href="/pes.html" class="dropdown-item">PES</a>
                            <a href="/wie.php" class="dropdown-item">WIE</a>
                        </div>
                    </div>
                    <a href="/contact.html" class="nav-item nav-link  ">Contact</a>
                    <a href="/joinus.html" class="nav-item nav-link active">Join Us</a>

                </div>
                <div class="ms-auto d-none d-lg-block">
                    <img src="/CS/IEEEXtreme/assets/color%20(2).png" alt="" width="150">
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->


<!-- Page Header Start -->
<div class="container-fluid joinus-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5" style="display: flex;align-items: center;justify-content: center;">
        <!--<h1 style="width: 500px;display: flex;align-items: center;justify-content: center;"
            class="display-2 text-white mb-4 animated slideInDown">Join the family</h1>-->

        <img alt = "" class="display-2 text-white mb-4 animated slideInDown" src="/CS/IEEEXtreme/assets/white.png" style="width: 40%;"/>
    </div>
</div>
<!-- Page Header End -->

<!-- overview Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-5 mb-5 ">IEEEXtreme17.0 ENSIT Form</h1>
            <p class="fs-5 fw-medium">
                Event Details <br>
            </p>
            <table class="fs-5 fw-medium mx-auto">
                <tr>
                    <td>Name: </td>
                    <td><strong>IEEE<em class="h2">X</em>treme</strong></td>
                </tr>
                <tr>
                    <td>Version: </td>
                    <td><strong>17</strong></td>
                </tr>
                <tr>
                    <td>Starting Date: </td>
                    <td><strong>27 October 2023 19:00</strong></td>
                </tr>
                <tr>
                    <td>Ending Date: </td>
                    <td><strong>29 October 2023 07:00</strong></td>
                </tr>
                <tr>
                    <td>Location: </td>
                    <td><strong>Still Processing</strong></td>
                </tr>
                <tr>
                    <td>Ambassador: </td>
                    <td><strong>Hadj Sassi Mahdi</strong></td>
                </tr>
                <tr>
                    <td>Ambassador ID: </td>
                    <td><strong>IEEEXTREME17173</strong></td>
                </tr>
                <tr>
                    <td>Proctor: </td>
                    <td><strong>Khnissi Khaled</strong></td>
                </tr>
                <tr>
                    <td>Proctor ID: </td>
                    <td><strong>92525759</strong></td>
                </tr>
            </table>
            <img class="mt-5" src="/CS/IEEEXtreme/assets/affiche.png" width="500" alt="">
            <span id="theJoinForm"></span>
            <h5 class="mt-5">
                Please only one member of the team fill this form.<br>
                Please fill this form, team can be formed by 3 members max.<br>
                Please in the description of each member, mention the food specifications like being vegetarian...<br>
                Please feel free in the description, comment, suggest, demand, advise ...
            </h5>
        </div>
    </div>
</div>
<!-- overview End -->

<!-- join us Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                <form class="myform1" id="joinForms" method="post" action="/CS/IEEEXtreme/joinus.php"  onsubmit="handleFormSubmit(event)">
                    <div class="h2">
                        Team Registration

                    </div>
                    <div class="mb-3">
                        <label for="Tname" class="form-label">Team Name:</label>
                        <input type="text" class="form-control" id="Tname" name="Tname" required>
                        <span class="err1"></span>
                    </div>

                    <div class="h2 mt-5">
                        First Member Registration
                    </div>
                    <div class="mb-3">
                        <label for="F1name" class="form-label">First Member Name:</label>
                        <input type="text" class="form-control" id="F1name" name="F1name" required>
                        <span class="err1"></span>
                    </div>

                    <div class="mb-3">
                        <label for="F1ieeeid" class="form-label">First Member IEEE ID (If Exist!)</label>
                        <input type="text" class="form-control" id="F1ieeeid" name="F1ieeeid">
                        <span class="err3"></span>
                    </div>

                    <div class="mb-3">
                        <label for="F1email" class="form-label">First Member E-mail:</label>
                        <input type="email" class="form-control" id="F1email" name="F1email" required>
                        <span class="err2"></span>
                    </div>

                    <div class="mb-3">
                        <label for="F1number" class="form-label">First Member Phone Number:</label>
                        <input type="text" class="form-control" id="F1number" name="F1number" required>
                        <span class="err4"></span>
                    </div>

                    <div class="mb-3">
                        <label for="F1description" class="form-label">First Member Description</label>
                        <textarea class="form-control" id="F1description" rows="3" name="F1description"></textarea>
                    </div>

                    <div class="h2 mt-5">
                        Second Member Registration
                    </div>
                    <div class="mb-3">
                        <label for="F2name" class="form-label">Second Member Name:</label>
                        <input type="text" class="form-control" id="F2name" name="F2name">
                        <span class="err1"></span>
                    </div>

                    <div class="mb-3">
                        <label for="F2ieeeid" class="form-label">Second Member IEEE ID (If Exist!)</label>
                        <input type="text" class="form-control" id="F2ieeeid" name="F2ieeeid">
                        <span class="err3"></span>
                    </div>

                    <div class="mb-3">
                        <label for="F2email" class="form-label">Second Member E-mail:</label>
                        <input type="email" class="form-control" id="F2email" name="F2email" >
                        <span class="err2"></span>
                    </div>

                    <div class="mb-3">
                        <label for="F2number" class="form-label">Second Member Phone Number:</label>
                        <input type="text" class="form-control" id="F2number" name="F2number" >
                        <span class="err4"></span>
                    </div>

                    <div class="mb-3">
                        <label for="F2description" class="form-label">Second Member Description</label>
                        <textarea class="form-control" id="F2description" rows="3" name="F2description"></textarea>
                    </div>

                    <div class="h2 mt-5">
                        Third Member Registration
                    </div>
                    <div class="mb-3">
                        <label for="F3name" class="form-label">Third Member Name:</label>
                        <input type="text" class="form-control" id="F3name" name="F3name">
                        <span class="err1"></span>
                    </div>

                    <div class="mb-3">
                        <label for="F3ieeeid" class="form-label">Third Member IEEE ID (If Exist!)</label>
                        <input type="text" class="form-control" id="F3ieeeid" name="F3ieeeid">
                        <span class="err3"></span>
                    </div>

                    <div class="mb-3">
                        <label for="F3email" class="form-label">Third Member E-mail:</label>
                        <input type="email" class="form-control" id="F3email" name="F3email" >
                        <span class="err2"></span>
                    </div>

                    <div class="mb-3">
                        <label for="F3number" class="form-label">Third Member Phone Number:</label>
                        <input type="text" class="form-control" id="F3number" name="F3number" >
                        <span class="err4"></span>
                    </div>

                    <div class="mb-3">
                        <label for="F3description" class="form-label">Third Member Description</label>
                        <textarea class="form-control" id="F3description" rows="3" name="F3description"></textarea>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button class="btn btn-warning rounded-pill py-3 px-5" type="submit">
                            Send Form
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- join us End -->

<!-- overview Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-5 mb-5 ">IEEEXtreme17.0 ENSIT Program</h1>
            <img class="mt-5" src="/CS/IEEEXtreme/assets/program.png" width="500" alt="">
        </div>
    </div>
</div>
<!-- overview End -->

<!-- Footer Start -->
<div class="container-fluid bg-warning footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <img src="/img/logos/cswhite.png" width="200" alt="logo sb ieee" class="mb-3"/>
                <p>

                    Join IEEE CS Ensit Student Branch Chapter - Empowering Tech Enthusiasts Since 2021. Boost Your Career & Skills Now!
                </p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-white mb-4">Contact</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>05 Ave Taha Hussein, Tunis 1008 à l'ENSIT</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+216 51 907 825</p>
                <a href="mailto:cs.chapter.ensit@gmail.com" class="mb-2 text-white"><i class="fa fa-envelope me-3"></i>cs.chapter.ensit@gmail.com

                </a>
                <div class="d-flex pt-3">
                    <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.instagram.com/ieee.ensit.cs/" aria-label="Twitter">
                        <i class="fab fa-instagram icon-color"></i>
                    </a>
                    <a class="btn btn-square btn-light rounded-circle me-2" href="https://www.facebook.com/profile.php?id=100081856069185" aria-label="facebook">
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
                        <a class="btn btn-link" href="/index.html#aboutUSindex">About Us</a>
                        <a class="btn btn-link" href="/contact.html">Contact Us</a>
                        <a class="btn btn-link" href="/gallery.php">Gallery</a>
                        <a class="btn btn-link" href="/index.html#teamindex">Team</a>
                        <a class="btn btn-link" href="/alumni1.html">Allmuni2021</a>
                        <a class="btn btn-link" href="/alumni2.html">Allumni2022</a>
                        <a class="btn btn-link" href="/index.html#chaptersIndex">Chapters</a>

                    </div>
                    <div class="col-6">
                        <a class="btn btn-link" href="/index.html#">SB</a>
                        <a class="btn btn-link" href="/cs.html">CS</a>
                        <a class="btn btn-link" href="/ras.html">RAS</a>
                        <a class="btn btn-link" href="/ias.html">IAS</a>
                        <a class="btn btn-link" href="/aess.html">AESS</a>
                        <a class="btn btn-link" href="/pes.html">PES</a>
                        <a class="btn btn-link" href="/wie.php">WIE</a>
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
<a href="#" class="btn btn-lg btn-warning btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/lib/wow/wow.min.js"></script>
<script src="/lib/easing/easing.min.js"></script>
<script src="/lib/waypoints/waypoints.min.js"></script>
<script src="/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="/lib/lightbox/js/lightbox.min.js"></script>
<script>
    function handleFormSubmit(event) {
        event.preventDefault();  // Prevent the default form submission

        // Call the function to replace newlines
        replaceNewlines();

        // Submit the form
        document.getElementById('joinForms').submit();
    }

    function replaceNewlines() {
        const otherField1 = document.getElementById('F1description');
        otherField1.value = otherField1.value.replace(/\n/g, ' -> ');
        const otherField2 = document.getElementById('F2description');
        otherField2.value = otherField2.value.replace(/\n/g, ' -> ');
        const otherField3 = document.getElementById('F3description');
        otherField3.value = otherField3.value.replace(/\n/g, ' -> ');

    }
</script>
<script>
    window.onload = function () {
        document.getElementById('theJoinForm').scrollIntoView();
    }
</script>
<!-- Template Javascript -->
<script src="/js/main.js"></script>
</body>

</html>
