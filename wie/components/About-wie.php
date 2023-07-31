
    <style>
        .about-wie{
            background: linear-gradient(rgba(0, 0, 0, .1), rgba(0, 0, 0, .1)), url(img/wie/1.jpg) left center no-repeat;
            background-size: cover;
        }
    </style>
   <!-- About Start -->
        <?php 
            $jsonFile = file_get_contents('data-wie.json');
            $data = json_decode($jsonFile, true);
            $about = $data["about"];
        ?>
        <div class="container-xxl about-wie mb-5">
            <div class="container">
                <div class="row g-0 flex-column-reverse flex-lg-row"> <!-- Add 'flex-column-reverse flex-lg-row' classes here -->
                    <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="0.5s">
                        <div class="bg-white rounded-top p-5 mt-lg-5">
                            <h1 class="display-6 mb-4">About Us</h1>
                            <?php
                                echo '<h5 class="mb-4 text-black-50 text-center">';
                                echo $about["paragraph"];
                                echo '</h5><a class="btn btn-wie rounded-pill py-3 px-5" href="';
                                echo $about["linkbtn"];
                                echo '">Explore More</a>';
                            ?>
                        </div>
                    </div>
                    <div class="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="2s">
                        <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 300px;">
                            <button type="button" class="btn-play btn-wie" data-bs-toggle="modal" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- About End -->
    <!-- Video Modal Start -->
        <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel"><?php echo $about["msg"];?> </h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                                <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F100066770896698%2Fvideos%2F476854470130167%2F&show_text=false&width=560&t=0" 
                                    width="560" height="314" 
                                    class="embed-responsive-item" 
                                    style="border:none;overflow:hidden" 
                                    scrolling="no" 
                                    frameborder="0" 
                                    allowfullscreen="true" 
                                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" 
                                    allowscriptaccess="always"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Video Modal End -->
