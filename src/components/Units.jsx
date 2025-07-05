import SectionTitle from "../atoms/SectionTitle";

export default function Units() {
    return (
        <div id="chaptersIndex" className="container-xxl py-5">
            <div className="container">

                <SectionTitle heading="Our Chapters"/>

                <div className="row g-4">
                    <div className="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div className="service-item position-relative h-100">
                            <div className="service-text rounded p-5">
                                <div className="btn-square mx-auto mb-4" style={{width: "64px", height: "64px"}}>
                                    <img style={{width: "300%"}} src="img/logos/cs.png" alt="Icon"/>
                                </div>
                                <h5 className="mb-3">Computer Society</h5>
                                <p className="mb-0">
                                    IEEE Computer Society <br/>(CS)<br/> Driving computer science progress, fostering
                                    global innovation, collaboration, and excellence worldwide.
                                </p>
                            </div>
                            <div className="service-btn rounded-0 rounded-bottom">
                                <a className="text-primary fw-medium" href="cs.html">Read More<i
                                    className="bi bi-chevron-double-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div className="service-item position-relative h-100">
                            <div className="service-text rounded p-5">
                                <div className="btn-square mx-auto mb-4" style={{width: "64px", height: "64px"}}>
                                    <img style={{width: "300%"}} src="img/logos/ras.png" alt="Icon"/>
                                </div>
                                <h5 className="mb-3">Robotics and Automation Society</h5>
                                <p className="mb-0">
                                    IEEE RAS: Advancing robotics & automation tech, fostering collaboration, innovation,
                                    and transformative solutions worldwide.
                                </p>
                            </div>
                            <div className="service-btn rounded-0 rounded-bottom">
                                <a className="text-primary fw-medium" href="ras.html">Read More<i
                                    className="bi bi-chevron-double-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div className="service-item position-relative h-100">
                            <div className="service-text rounded p-5">
                                <div className="btn-square mx-auto mb-4" style={{width: "64px", height: "64px"}}>
                                    <img style={{width: "300%"}} src="img/logos/ias.png" alt="Icon"/>
                                </div>
                                <h5 className="mb-3">Industry Applications Society</h5>
                                <p className="mb-0">
                                    IEEE IAS: Advancing tech applications in industries, fostering collaboration,
                                    innovation, and real-world solutions worldwide.
                                </p>
                            </div>
                            <div className="service-btn rounded-0 rounded-bottom">
                                <a className="text-primary fw-medium" href="ias.html">Read More<i
                                    className="bi bi-chevron-double-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div className="service-item position-relative h-100">
                            <div className="service-text rounded p-5">
                                <div className="btn-square mx-auto mb-4" style={{width: "64px", height: "64px"}}>
                                    <img style={{width: "300%"}} src="img/logos/aess.png" alt="Icon"/>
                                </div>
                                <h5 className="mb-3">Aerospace and Electronic Systems Society</h5>
                                <p className="mb-0">IEEE AESS: Advancing aerospace & electronic tech, fostering
                                    innovation & collaboration worldwide.</p>
                            </div>
                            <div className="service-btn rounded-0 rounded-bottom">
                                <a className="text-primary fw-medium" href="aess.html">Read More<i
                                    className="bi bi-chevron-double-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div className="service-item position-relative h-100">
                            <div className="service-text rounded p-5">
                                <div className="btn-square mx-auto mb-4" style={{width: "64px", height: "64px"}}>
                                    <img style={{width: "300%"}} src="img/logos/pes.png" alt="Icon"/>
                                </div>
                                <h5 className="mb-3">Power & Energy Society</h5>
                                <p className="mb-0">IEEE PES: Advancing power & energy tech through global
                                    collaboration, innovation, and sustainable solutions for a reliable and eco-friendly
                                    future.</p>
                            </div>
                            <div className="service-btn rounded-0 rounded-bottom">
                                <a className="text-primary fw-medium" href="pes.html">Read More<i
                                    className="bi bi-chevron-double-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                    <div className="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div className="service-item position-relative h-100">
                            <div className="service-text rounded p-5">
                                <div className="btn-square mx-auto mb-4" style={{width: "64px", height: "64px"}}>
                                    <img style={{width: "300%"}} src="img/logos/wie.png" alt="Icon"/>
                                </div>
                                <h5 className="mb-3">Woman In Engineering</h5>
                                <p className="mb-0">IEEE WIE: Empowering women in engineering, promoting diversity,
                                    fostering leadership, and bridging the gender gap for an innovative future.</p>
                            </div>
                            <div className="service-btn rounded-0 rounded-bottom">
                                <a className="text-primary fw-medium" href="wie.php">Read More<i
                                    className="bi bi-chevron-double-right ms-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}