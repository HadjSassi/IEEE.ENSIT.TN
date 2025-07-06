export default function PageIntro(props) {
    return <>
        <div className="container-xxl py-5">
            <div className="container">
                <div className="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <h1 className="display-5 mb-5 fw-bold">{props.title}</h1>
                    <p className="fs-5" dangerouslySetInnerHTML={{ __html: props.description }}>
                    </p>
                </div>
            </div>
        </div>
    </>
}