import React from "react";

export default function Footer() {
    return (
        <div className="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
            <div className="container">
                <div className="row g-5">
                    <div className="col-lg-3 col-md-6">
                        <img src="img/logos/ieee%20(1).png" width="200" alt="logo sb ieee" className="mb-3"/>
                        <p className="text-white">
                            ENSIT Student Branch, since 2013, embraces IEEE's values for innovation and humanity. 120+
                            members strong, we advance skills for a better engineering future.
                        </p>
                    </div>
                    <div className="col-lg-3 col-md-6">
                        <h4 className="text-white mb-4">Contact</h4>
                        <p className="text-white mb-2"><i className="fa fa-map-marker-alt me-3"></i>05 Ave Taha Hussein, Tunis 1008
                            à l'ENSIT</p>
                        <p className="text-white mb-2"><i className="fa fa-phone-alt me-3"></i>+216 95 741 882</p>
                        <a href="mailto:ieee.ensit.student.branch@gmail.com" className="mb-2 text-white">
                            <i className="fa fa-envelope me-3"></i>ieee.ensit.student.branch<br/>@gmail.com
                        </a>
                        <div className="d-flex pt-3">
                            <a className="btn btn-square btn-light rounded-circle me-2"
                               href="https://www.instagram.com/ieee_ensit_student_branch/" aria-label="Instagram">
                                <i className="fab fa-instagram icon-color"></i>
                            </a>
                            <a className="btn btn-square btn-light rounded-circle me-2"
                               href="https://www.facebook.com/ieee.ensit" aria-label="Facebook">
                                <i className="fab fa-facebook-f icon-color"></i>
                            </a>
                            <a className="btn btn-square btn-light rounded-circle me-2"
                               href="https://www.youtube.com/@ieeeensit2837" aria-label="YouTube">
                                <i className="fab fa-youtube icon-color"></i>
                            </a>
                            <a className="btn btn-square btn-light rounded-circle me-2"
                               href="https://www.linkedin.com/company/ieee-ensit-student-branch/mycompany/"
                               aria-label="LinkedIn">
                                <i className="fab fa-linkedin-in icon-color"></i>
                            </a>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6">
                        <div className="row">
                            <h4 className="text-white mb-4">Quick Links</h4>
                            <div className="col-6">
                                <a className="btn btn-link" href="index.html#aboutUSindex">About Us</a>
                                <a className="btn btn-link test" href="contact.html">Contact Us</a>
                                <a className="btn btn-link" href="gallery.php">Gallery</a>
                                <a className="btn btn-link" href="index.html#teamindex">Team</a>
                                <a className="btn btn-link" href="alumni3.html">Allmuni2023</a>
                                <a className="btn btn-link" href="alumni2.html">Allumni2022</a>
                                <a className="btn btn-link" href="index.html#chaptersIndex">Chapters</a>
                            </div>
                            <div className="col-6">
                                <a className="btn btn-link" href="index.html#">SB</a>
                                <a className="btn btn-link" href="cs.html">CS</a>
                                <a className="btn btn-link" href="ras.html">RAS</a>
                                <a className="btn btn-link" href="ias.html">IAS</a>
                                <a className="btn btn-link" href="aess.html">AESS</a>
                                <a className="btn btn-link" href="pes.html">PES</a>
                                <a className="btn btn-link" href="wie.php">WIE</a>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6">
                        <h4 className="text-white mb-4">Localisation</h4>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d629.4879921325812!2d10.179256687986872!3d36.784739211827876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd340576fc1a05%3A0x25fc1aa869f8cfb6!2s%C3%89cole%20nationale%20sup%C3%A9rieure%20d&#39;ing%C3%A9nieurs%20de%20Tunis%20(ENSIT)!5e0!3m2!1sen!2stn!4v1690723522488!5m2!1sen!2stn"
                            width="300"
                            height="200"
                            style={{border: 0}}
                            allowFullScreen=""
                            loading="lazy"
                            referrerPolicy="no-referrer-when-downgrade"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    );
}