<div class="text-center">
    <h1 >All Mandates</h1>
</div>
<?php
    $jsonFile = file_get_contents('data-wie.json');
    $data = json_decode($jsonFile, true);
    $teamDataWie = $data['team'];
    foreach ($teamDataWie as $year => $teamMem) {
        echo '<div class="text-center"><br/> <h4 class="color-wie">';
        echo $year;
        echo ' Mandate</h4> </div>';
        echo '<div class="container">
        <div class="row">';
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
        echo '</div>
        </div>';
    }
?>