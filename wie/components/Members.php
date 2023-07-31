    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <?php
                $jsonFile = file_get_contents('data-wie.json');
                $data = json_decode($jsonFile, true);
                $teamData=$data['team']["2024-2023"];
                $selectedYear = "2024-2023";
            ?>                
                <?php
                        echo '<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <p class="fs-5 fw-medium color-wie">Our Team</p>
                        <h1 class="display-5 mb-5">';
                         echo $selectedYear;
                         echo ' Mandate</h1> </div>';
                            echo '<div class="row">';
                        foreach ($teamData as $i => $card) {
                            $image = $card['image'];
                            $name = $card['name'];
                            $role = $card['role'];
                            $facebook = $card['facebook'];
                            $twitter = $card['twitter'];
                            $instagram = $card['instagram'];
                            $linkedin = $card['linkedin'];
                ?>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden pb-4">
                        <img class="img-fluid mb-4" src="<?php echo $image; ?>" alt="">
                        <h5><?php echo $name; ?></h5>
                        <span class="color-wie" style="font-weight: bold;"><?php echo $role; ?></span>
                        <ul class="team-social">
                            <li><a class="btn btn-square" href="<?php echo $facebook; ?>" aria-label="facebook"><i class="fab fa-facebook-f iconWie"></i></a></li>
                            <li><a class="btn btn-square" href="<?php echo $twitter; ?>" aria-label="twitter"><i class="fab fa-twitter iconWie"></i></a></li>
                            <li><a class="btn btn-square" href="<?php echo $instagram; ?>" aria-label="instagram"><i class="fab fa-instagram iconWie"></i></a></li>
                            <li><a class="btn btn-square" href="<?php echo $linkedin; ?>" aria-label="linkedin"><i class="fab fa-linkedin-in iconWie"></i></a></li>
                        </ul>
                    </div>
                </div>
                <?php } ?>
            </div>
            <!-- Button trigger modal -->
            <div class="text-center">
                <button type="button" class="btn btn-primary btn-wie" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Show More
                </button>
            </div>
            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog  modal-xl">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Other Mandates</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <?php
                            $teamDataLast = $data['team'];
                            foreach ($teamDataLast as $year => $teamMem) {
                                if($year !=="2024-2023"){
                                echo '<h1>';
                                echo $year;
                                echo ' Mandate</h1> </div>';
                                echo '<div class="row" style="z-index:999;">';
                                foreach ($teamMem as $card2) {
                                    $image2 = $card2['image'];
                                    $name2 = $card2['name'];
                                    $role2 = $card2['role'];
                                    $facebook2 = $card2['facebook'];
                                    $twitter2 = $card2['twitter'];
                                    $instagram2 = $card2['instagram'];
                                    $linkedin2 = $card2['linkedin'];
                                    echo '<div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">';
                                    echo '<div class="team-item rounded overflow-hidden pb-4">';
                                    echo '<img class="img-fluid mb-4" src="' . $image2 . '" alt="">';
                                    echo '<h5>' . $name2 . '</h5>';
                                    echo '<span class="color-text">' . $role2 . '</span>';
                                    echo '<ul class="team-social">';
                                    echo '<li><a class="btn btn-square" href="' . $facebook2 . '" aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>';
                                    echo '<li><a class="btn btn-square" href="' . $twitter2 . '" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>';
                                    echo '<li><a class="btn btn-square" href="' . $instagram2 . '" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>';
                                    echo '<li><a class="btn btn-square" href="' . $linkedin2 . '" aria-label="linkedin"><i class="fab fa-linkedin-in"></i></a></li>';
                                    echo '</ul>';
                                    echo '</div>';
                                    echo '</div>';
                                }
                                echo '</div>';
                                }
                            }
                        ?>

                        </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>



        </div>
    </div>
    <!-- Team End -->