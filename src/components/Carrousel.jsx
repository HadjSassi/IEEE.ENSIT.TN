export default function Carrousel() {
    return <>
        <div className="container-fluid px-0 mb-5">
            <div id="header-carousel" className="carousel slide carousel-fade" data-bs-ride="carousel">
                <div className="carousel-inner">
                    <div className="carousel-item active">
                        <img className="w-100" src="img/0.png" alt="Image"/>
                        <div className="carousel-caption">
                            <div className="container">
                                <div className="row justify-content-start">
                                    <div className="col-lg-7 text-start">
                                        <p className="fs-4 text-white animated slideInRight">IEEE <strong>ENSIT</strong> Student
                                            Branch</p>
                                        <img className="display-1 text-white mb-4 animated slideInRight"
                                             src="img/logos/ieee%20(1).png" width="500" alt="Logo"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="carousel-item">
                        <img className="w-100" src="img/pic.jpg" alt="Image"/>
                        <div className="carousel-caption">
                            <div className="container">
                                <div className="row justify-content-end">
                                    <div className="col-lg-7 text-end">
                                        <p className="fs-4 text-white animated slideInLeft">IEEE <strong>ENSIT</strong> Student
                                            Branch</p>
                                        <img className="display-1 text-white mb-5 animated slideInLeft"
                                             src="img/logos/ieee%20(1).png" width="500" alt="Logo"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button className="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="prev">
                    <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span className="visually-hidden">Previous</span>
                </button>
                <button className="carousel-control-next" type="button" data-bs-target="#header-carousel"
                        data-bs-slide="next">
                    <span className="carousel-control-next-icon" aria-hidden="true"></span>
                    <span className="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </>
}