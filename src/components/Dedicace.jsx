import SectionTitle from "../atoms/SectionTitle";

export default function Dedicace() {
    return (
        <div className="container-xxl pt-5">
            <div className="container">
                <div className="row">
                    {/* Contenu texte */}
                    <div className="col-md-6 text-center text-md-start pb-5 pb-md-0 wow fadeInLeft" data-wow-delay="0.1s" style={{ maxWidth: "500px" }}>
                        <SectionTitle heading='Big Thanks' subHeading='Team Dev'/>
                        <p>
                            I am incredibly grateful and proud to lead such an exceptional group of individuals.
                            <br />
                            <strong><em>Cherni Rihab</em></strong>,
                            <strong><em>Fedi Bahloul</em></strong>,
                            <strong><em>Molka Elloumi</em></strong>,
                            <strong><em>Ahmed Sidi Mohamed</em></strong>, and
                            <strong><em>Moussi Wiem</em></strong>, your dedication and hard work have been instrumental in the success of our projects. Each one of you brings unique talents and perspectives to the table, and together, we form a powerhouse of creativity and innovation. Your unwavering support, technical expertise, and collaborative spirit have been the driving force behind our achievements. Thank you for your commitment and passion, and I look forward to accomplishing even greater heights as a team.
                            <br /><br />
                            With sincere appreciation: <strong><em>Hadj Sassi Mahdi</em></strong>
                        </p>
                        <img style={{ marginTop: "-10%" }} src="img/signatureHadjSassi.png" width="120" alt="Signature" />
                    </div>

                    {/* Image animée */}
                    <div className="col-md-6 wow fadeInRight mt-5" data-wow-delay="0.2s">
                        <img src="img/thanks.gif" alt="Animated Picture" className="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    );
}