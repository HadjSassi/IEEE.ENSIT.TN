
    <!-- Join IEEE ENSIT Student Branch -->
    <?php 
        $jsonFile = file_get_contents('data-wie.json');
        $data = json_decode($jsonFile, true);
        $joinUs = $data["joinUs"];
    ?>
    <div class="container-xxl pt-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <!-- Animated Picture -->
                <div class="col-md-6 wow fadeInLeft mt-5" data-wow-delay="0.2s">
                    <img src="img/wie/joinUsWie.gif" alt="Animated Picture" class="img-fluid">
                </div>

                <!-- Text Content -->
                <div class="col-md-6 text-center text-md-start pb-5 pb-md-0 wow fadeInRight" data-wow-delay="0.1s" style="max-width: 700px;">
                    <p class="fs-5 fw-medium color-wie">Join Us</p>
                    <h1 class="display-6 mb-5"><?php echo $joinUs["title"];?></h1>
                    <p><?php echo $joinUs["paragraph1"];?> </p>
                    <p><?php echo $joinUs["paragraph2"];?> </p>
                    <a class="btn btn-lg btn-wie mt-4" href="about.html">Join Now</a> 
                </div>

            </div>
        </div>
    </div>