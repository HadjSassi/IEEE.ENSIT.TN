export default function StatisticItem(props) {
    return <>
        <div className="col-md-6 col-lg-3">
            <div className="feature-item border h-100 p-5">
                <div className="btn-square bg-light rounded-circle mb-4" style={{ width: "64px", height: "64px" }}>
                    <img className="img-fluid" src={props.icon} alt="Icon" />
                </div>
                <h5 className="mb-3">{props.text}</h5>
                <h4 className="mb-0" id={props.id}>{props.initValue}</h4>
            </div>
        </div>
    </>
}