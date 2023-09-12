<?php 
     $jsonFile = file_get_contents('data-wie.json');
     $data = json_decode($jsonFile, true);
     $footer= $data['footer'];
?>
  <!-- Footer Start -->
        <div class="container-fluid footer mt-5 py-5 wow fadeIn" style="background-color:#5f2d67;" data-wow-delay="0.1s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <img src="img/logos/wiewhite.png" width="200" alt="logo wie ieee" class="mb-3"/>
                        <p><?php echo $footer["about"]?></p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $footer["location"]?></p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo $footer["phone"]?></p>
                        <a href="mailto:<?php echo $footer["email"]?>" class="mb-2 text-white"><i class="fa fa-envelope me-3"></i><?php echo $footer["email"]?>
                        </a>
                        <div class="d-flex pt-3">
                            <a class="btn btn-square btn-light rounded-circle me-2" href="<?php echo $footer["instagram"]?>" aria-label="instagram">
                                <i class="fab fa-instagram icon-wie-footer"></i>
                            </a>
                            <a class="btn btn-square btn-light rounded-circle me-2" href="<?php echo $footer["facebook"]?>" aria-label="facebook">
                                <i class="fab fa-facebook-f icon-wie-footer"></i>
                            </a>
                            <a class="btn btn-square btn-light rounded-circle me-2" href="<?php echo $footer["youtube"]?>" aria-label="youtube">
                                <i class="fab fa-youtube icon-wie-footer"></i>
                            </a>
                            <a class="btn btn-square btn-light rounded-circle me-2" href="<?php echo $footer["linkedin"]?>" aria-label="linkedin">
                                <i class="fab fa-linkedin-in icon-wie-footer"></i>
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
                                <a class="btn btn-link" href="wie.php">WIE</a>
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
        <a href="#" class="btn btn-lg btn-wie btn-lg-square rounded-circle back-to-top" style="background-color:#8c269c !important" aria-label="top">
            <i class="bi bi-arrow-up"></i>
        </a>
    <!-- Back to Top End-->
