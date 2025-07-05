import SectionTitle from "../atoms/SectionTitle";

export default function Team() {
    return (
        <div id="teamindex" className="container-xxl py-5 d-flex justify-content-center">
            <div className="container">
                <SectionTitle heading={'2023-2024 Mandate'} subHeading={'our Team'} />
                <div className="row g-4 justify-content-center">
                    <div className="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div className="team-item rounded overflow-hidden pb-4">
                            <img className="img-fluid mb-4" src="img/sb/elanoubli%20chair%20sb.jpg" alt="" />
                            <h5>Elyanoubli Mohamed Amine</h5>
                            <span className="text-primary">Chairman</span>
                            <ul className="team-social"></ul>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div className="team-item rounded overflow-hidden pb-4">
                            <img className="img-fluid mb-4" src="img/sb/molka%20vp%20sb.jpg" alt="" />
                            <h5>Guesmi Molka</h5>
                            <span className="text-primary">Vice-Chair</span>
                            <ul className="team-social">
                                <li><a className="btn btn-square" href="https://www.facebook.com/profile.php?id=100009455581309"><i className="fab fa-facebook-f"></i></a></li>
                                <li><a className="btn btn-square" href="https://www.instagram.com/molka.guesmi"><i className="fab fa-instagram"></i></a></li>
                                <li><a className="btn btn-square" href="https://www.linkedin.com/in/molka-guesmi-112036220"><i className="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div className="team-item rounded overflow-hidden pb-4">
                            <img className="img-fluid mb-4" src="img/sb/ilef%20sg%20sb.jpg" alt="" />
                            <h5>Zeiri Ilef</h5>
                            <span className="text-primary">General Secretary</span>
                            <ul className="team-social">
                                <li><a className="btn btn-square" href="https://www.facebook.com/ilef.zeiri"><i className="fab fa-facebook-f"></i></a></li>
                                <li><a className="btn btn-square" href="https://www.instagram.com/ilefzeiri"><i className="fab fa-instagram"></i></a></li>
                                <li><a className="btn btn-square" href="https://www.linkedin.com/in/ilef-zeiri-4821a1253"><i className="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div className="team-item rounded overflow-hidden pb-4">
                            <img className="img-fluid mb-4" src="img/sb/khalaf%20rh%20sb.jpg" alt="" />
                            <h5>Nakbi Khalaf</h5>
                            <span className="text-primary">HR Manager</span>
                            <ul className="team-social"></ul>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div className="team-item rounded overflow-hidden pb-4">
                            <img className="img-fluid mb-4" src="img/sb/mahdi.jpeg" alt="" />
                            <h5>Hadj Sassi Mahdi</h5>
                            <span className="text-primary">Web Manager</span>
                            <ul className="team-social">
                                <li><a className="btn btn-square" href="https://www.facebook.com/HadjSassiMahdiEzzedine"><i className="fab fa-facebook-f"></i></a></li>
                                <li><a className="btn btn-square" href="https://www.instagram.com/hadjsassi.ezzedine.mahdi/"><i className="fab fa-instagram"></i></a></li>
                                <li><a className="btn btn-square" href="https://www.linkedin.com/in/mahdi-hadj-sassi/"><i className="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div className="team-item rounded overflow-hidden pb-4">
                            <img className="img-fluid mb-4" src="img/sb/aziz%20web%20sb.jpg" alt="" />
                            <h5>Guebsi Mohamed Aziz</h5>
                            <span className="text-primary">Webmaster</span>
                            <ul className="team-social">
                                <li><a className="btn btn-square" href="https://www.facebook.com/aziz.zizoo.7?mibextid=D4KYlr"><i className="fab fa-facebook-f"></i></a></li>
                                <li><a className="btn btn-square" href="https://instagram.com/aziz_gabsi_?igshid=MmU2YjMzNjRlOQ=="><i className="fab fa-instagram"></i></a></li>
                                <li><a className="btn btn-square" href="https://www.linkedin.com/in/gabsi-aziz-110490242"><i className="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div className="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="1.1s">
                        <div className="team-item rounded overflow-hidden pb-4">
                            <img className="img-fluid mb-4" src="img/sb/oussema%20treso%20sb.jpg" alt="" />
                            <h5>Touhemi Oussema</h5>
                            <span className="text-primary">Treasurer</span>
                            <ul className="team-social"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}