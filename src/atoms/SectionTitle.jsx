export default function SectionTitle(props) {
    return <div className="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style={{ maxWidth: "500px" }}> <h1 className="display-5 mb-5 fw-bold">{props.heading}</h1></div>;
}