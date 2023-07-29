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