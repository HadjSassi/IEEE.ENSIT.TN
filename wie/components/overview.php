    <!-- overview Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" >
                <h1 class="display-5 mb-5" style="color:#5f2d67;">Chapter Overview</h1>
                <p class="fs-5 fw-medium">   
                    <?php 
                        $jsonFile = file_get_contents('data-wie.json');
                        $data = json_decode($jsonFile, true);
                        echo $data['overview'];
                    ?>
                </p>
            </div>
        </div>
    </div>
    <!-- overview End -->