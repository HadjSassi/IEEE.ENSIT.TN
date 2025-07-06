export default function UnitItem(props) {
    return (
        <div className="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div className="service-item position-relative h-100">
                <div className="service-text rounded p-5">
                    <div className="btn-square mx-auto mb-4" style={{width: "64px", height: "64px"}}>
                        <img style={{width: "300%"}} src={props.logo} alt="Icon"/>
                    </div>
                    <h5 className="mb-3">{props.name}</h5>
                    <p className="mb-0">
                        {props.description}
                    </p>
                </div>
                <div className="service-btn rounded-0 rounded-bottom">
                    <a className="text-primary fw-medium" href={props.link}>Read More<i
                        className="bi bi-chevron-double-right ms-2"></i></a>
                </div>
            </div>
        </div>
    );
}