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
                        <?php
                            $facebookLink = ($facebook !== '') ? '<li><a class="btn btn-square" href="' . $facebook . '" aria-label="facebook"><i class="fab fa-facebook-f iconWie"></i></a></li>' : '';
                            echo $facebookLink;
                        
                            $twitterLink = ($twitter !== '') ? '<li><a class="btn btn-square" href="' . $twitter . '" aria-label="twitter"><i class="fab fa-twitter iconWie"></i></a></li>' : '';
                            echo $twitterLink;
                        
                            $instagramLink = ($instagram !== '') ? '<li><a class="btn btn-square" href="' . $instagram . '" aria-label="instagram"><i class="fab fa-instagram iconWie"></i></a></li>' : '';
                            echo $instagramLink;
                        
                            $linkedinLink = ($linkedin !== '') ? '<li><a class="btn btn-square" href="' . $linkedin . '" aria-label="linkedin"><i class="fab fa-linkedin-in iconWie"></i></a></li>' : '';
                            echo $linkedinLink;   
                        ?>
                       </ul>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="text-center">
                <br/>

                <button type="button" class="btn btn-primary btn-wie btn-rounded  btn-lg" data-mdb-ripple-color="#ffffff"> 
                    <a href="wie-team.php" style="color:white;">Show More</a>
                </button>
            </div>

        </div>
    </div>
    <!-- Team End -->