import SectionTitle from "../atoms/SectionTitle";
import AnimatedImage from "../atoms/AnimatedImage";
import Signature from "../atoms/Signature";
import PersonName from "../atoms/PersonName";

export default function Dedicace() {
    return (
        <div className="container-xxl pt-5 container">
            <div className="row">
                <div className="col-md-6 text-center text-md-start pb-5 pb-md-0 wow fadeInLeft" data-wow-delay="0.1s"
                     style={{maxWidth: "500px"}}>
                    <SectionTitle heading='Big Thanks' subHeading='Team Dev'/>
                    <p>
                        I am incredibly grateful and proud to lead such an exceptional group of individuals.
                        <br/>
                        <PersonName name='Cherni Rihab'/>,
                        <PersonName name='Bahloul Fedi'/>,
                        <PersonName name='Molka Elloumi'/>,
                        <PersonName name='Ahmed Sidi Mohamed'/>, and
                        <PersonName name='Moussi Wiem'/>. Your dedication and hard work have been instrumental in the
                        success of our projects. Each one of you brings unique talents and perspectives to the table,
                        and together, we form a powerhouse of creativity and innovation. Your unwavering support,
                        technical expertise, and collaborative spirit have been the driving force behind our
                        achievements. Thank you for your commitment and passion, and I look forward to accomplishing
                        even greater heights as a team.
                        <br/><br/>
                        With sincere appreciation:<PersonName name='HADJ SASSI Mahdi'/>
                    </p>
                    <Signature/>
                </div>
                <AnimatedImage image='img/thanks.gif'/>
            </div>
        </div>
    );
}