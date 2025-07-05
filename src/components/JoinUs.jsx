import SectionTitle from "../atoms/SectionTitle";
import AnimatedImage from "../atoms/AnimatedImage";
import RoundedButton from "../atoms/buttons/RoundedButton";

export default function JoinUs() {
    return (
        <div className="container-xxl pt-5">
            <div className="container">
                <div className="row">

                    <AnimatedImage image='img/joinUs.gif'/>

                    <div className="col-md-6 text-center text-md-start pb-5 pb-md-0 wow fadeInRight" data-wow-delay="0.1s" style={{ maxWidth: "500px" }}>
                        <SectionTitle heading='Become a Part of IEEE ENSIT Student Branch' subHeading='Join Us' />
                        <p>
                            We welcome all students who are interested in technology, innovation, and making a difference. By joining the IEEE ENSIT Student Branch, you'll have access to a vibrant community of like-minded individuals and numerous opportunities for learning, networking, and skill development.
                        </p>
                        <p>
                            Whether you're a seasoned engineer or just starting your journey in the world of technology, there's a place for you at IEEE ENSIT Student Branch.
                        </p>
                        <RoundedButton
                            text="Join Now"
                            link="joinus.html"
                        />
                    </div>
                </div>
            </div>
        </div>
    );
}