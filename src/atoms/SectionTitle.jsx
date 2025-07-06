export default function SectionTitle(props) {
    return <>
        <div className="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style={{maxWidth: "500px"}}>
            <p className="fs-5 fw-medium text-primary">{props.subHeading}</p>
            <h1 className="display-5 mb-5 fw-medium">{props.heading}</h1>
        </div>
    </>
}