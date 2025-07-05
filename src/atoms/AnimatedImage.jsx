export default function AnimatedImage(props) {
    return <>
        <div className="col-md-6 wow fadeInRight mt-5" data-wow-delay="0.2s">
            <img src={props.image} alt="Animated Picture" className="img-fluid" />
        </div>
    </>
}