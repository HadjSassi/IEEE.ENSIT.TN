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
                                <a href="testimonial.html" class="dropdown-item">AESS</a>
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


<!-- gallery Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <!-- Navbar Start -->
        <div class="container-fluid bg-white sticky-top mb-4 gallery-navbar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                    <!-- Gallery subfolder cards -->
                    <?php
                    // Gallery directory path
                    $galleryPath = 'img/Gallery/';

                    // Get the subdirectories under the gallery folder
                    $subFolders = glob($galleryPath . '*', GLOB_ONLYDIR);

                    // Loop through subdirectories and create subfolder cards
                    $first = true;
                    $first = true;
                    foreach ($subFolders as $subFolder) {
                        $subFolderName = basename($subFolder);
                        $coverImagePath = glob($subFolder . '/couverture.*');
                        $coverImageSrc = isset($coverImagePath[0]) ? $coverImagePath[0] : 'img/default-cover.jpg'; // Use a default cover image if no specific cover image is found
                        $activeClass = $first ? 'active' : ''; // Add "active" class to the first subfolder item
                        $first = false;
                        echo '
                        <a href="#" style="cursor:pointer;" class="text-decoration-none custom-nav-link ' . $activeClass . '" data-subfolder="' . $subFolderName . '" onclick="loadEventThumbnails(\'' . $subFolderName . '\', this)">
                            <div class="card h-100">
                                <div class="card-img-top" style="background-image: url(' . $coverImageSrc . ');"></div>
                                <div class="card-body">
                                    <h5 class="card-title">' . ucfirst($subFolderName) . '</h5>
                                </div>
                            </div>
                        </a>';
                    }
                    ?>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Gallery Thumbnails will be dynamically added here using AJAX -->
        <div id="galleryThumbnails" class="thumbnails-container"></div> <!-- New div to hold the dynamically loaded event thumbnails -->
    </div>
</div>
<!-- gallery End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <img src="img/logos/ieee%20(1).png" width="200" alt="logo sb ieee" class="mb-3"/>
                    <p>

                        ENSIT Student Branch, since 2012, embraces IEEE's values for innovation and humanity. 120+ members strong, we advance skills for a better engineering future.
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
                            <a class="btn btn-link" href="wie.html">WIE</a>
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
       <script src="lib/wow/wow.min.js"></script>
       <script src="lib/easing/easing.min.js"></script>
       <script src="lib/waypoints/waypoints.min.js"></script>
       <script src="lib/owlcarousel/owl.carousel.min.js"></script>
       <script src="lib/lightbox/js/lightbox.min.js"></script>

       <!-- Template Javascript -->
       <script src="js/main.js"></script>
    <script>
        // Function to create a div for each event thumbnail
        function createEventThumbnail(subFolder, event) {
            const card = document.createElement('div');
            card.classList.add('card', 'h-100');
            card.style.cursor = 'pointer'; // Add cursor: pointer style

            const imageContainer = document.createElement('div');
            imageContainer.style.backgroundImage = `url(img/Gallery/${subFolder}/${event}/couverture.png)`;
            imageContainer.style.backgroundSize = 'cover';
            imageContainer.style.backgroundPosition = 'center';
            imageContainer.style.width = '100%';
            imageContainer.style.height = '200px'; // Set the height of the image container
            card.appendChild(imageContainer);

            const cardBody = document.createElement('div');
            cardBody.classList.add('card-body');

            const title = document.createElement('h5');
            title.classList.add('card-title');
            title.textContent = event;

            // Add click event listener to the event thumbnail
            card.addEventListener('click', function () {
                redirectToEventPage(subFolder, event);
            });

            cardBody.appendChild(title);
            card.appendChild(cardBody);
            return card;
        }
        function redirectToEventPage(subFolder, event) {
            const eventName = encodeURIComponent(event);
            const url = `event.php?chapter=${subFolder}&event=${eventName}`;

            // Redirect to the event page
            window.location.href = url;
        }

        // Function to load and show event thumbnails for the selected subfolder
        function loadEventThumbnails(subFolder, clickedLink) {
                const container = document.getElementById('galleryThumbnails');
                container.innerHTML = ''; // Clear the container

                fetch(`getEvents.php?subfolder=${subFolder}`)
                    .then(response => response.json())
                    .then(data => {
                        const events = data;
                        events.forEach(event => {
                            const eventThumbnail = createEventThumbnail(subFolder, event);
                            container.appendChild(eventThumbnail);
                        });

                        // Remove the 'active' class from all navbar items
                        const navItems = document.querySelectorAll('.custom-nav-link');
                        navItems.forEach(item => {
                            item.classList.remove('active');
                        });

                        // Add the "active" class to the clicked navbar item
                        clickedLink.classList.add('active');
                    })
                    .catch(error => {
                        console.error('Error fetching events:', error);
                    });
            }

        // Attach event listener to the navbar parent element (.container)
            document.querySelector('.container').addEventListener('click', function (event) {
                const target = event.target;
                // Check if the clicked element has the class "nav-link"
                if (target.classList.contains('nav-link')) {
                    event.preventDefault(); // Prevent default link behavior

                    // Get the subfolder name from the link's text content
                    const subFolderName = target.textContent.toLowerCase();

                    // Call the function to load and show events for the selected subfolder
                    loadEventThumbnails(subFolderName, target);
                }
            });
            // Function to activate the default subfolder ("sb") and load its event thumbnails
            function activateDefaultSubfolder() {
                const defaultSubFolderName = 'sb'; // Set the default subfolder name
                const defaultSubfolderLink = document.querySelector(`.custom-nav-link[data-subfolder="${defaultSubFolderName}"]`);

                if (defaultSubfolderLink) {
                    defaultSubfolderLink.classList.add('active');
                    loadEventThumbnails(defaultSubFolderName, defaultSubfolderLink); // Trigger the click event on the default subfolder link
                }
            }

            // Call the function to activate the default subfolder on page load
            activateDefaultSubfolder();
    </script>


</body>

</html>