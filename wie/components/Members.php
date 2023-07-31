    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="color-text">Our Team</h1>
            </div>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        $jsonFile = file_get_contents('data-wie.json');
                        $data = json_decode($jsonFile, true);
                        $data= $data["team"];
                        foreach ($data as $year => $teamMembers) {
                            echo '<div class="carousel-item ';
                            echo ($year === "2024-2023") ? 'active' : '';
                            echo '">';
                            echo '<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">';
                            echo '<h2 class="color-text">' . $year . '</h2>';
                            echo '</div>';
                            echo '<div class="row g-4">';
                            foreach ($teamMembers as $card) {
                                $image = $card['image'];
                                $name = $card['name'];
                                $role = $card['role'];
                                $facebook = $card['facebook'];
                                $twitter = $card['twitter'];
                                $instagram = $card['instagram'];
                                $linkedin = $card['linkedin'];
                                echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">';
                                echo '<div class="team-item rounded overflow-hidden pb-4">';
                                echo '<img class="img-fluid mb-4" src="' . $image . '" alt="">';
                                echo '<h5>' . $name . '</h5>';
                                echo '<span class="color-text">' . $role . '</span>';
                                echo '<ul class="team-social">';
                                echo '<li><a class="btn btn-square" href="' . $facebook . '" aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>';
                                echo '<li><a class="btn btn-square" href="' . $twitter . '" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>';
                                echo '<li><a class="btn btn-square" href="' . $instagram . '" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>';
                                echo '<li><a class="btn btn-square" href="' . $linkedin . '" aria-label="linkedin"><i class="fab fa-linkedin-in"></i></a></li>';
                                echo '</ul>';
                                echo '</div>';
                                echo '</div>';
                            }
                            echo '</div>';
                            echo '</div>';
                        }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
    </div>
    <!-- Team End -->