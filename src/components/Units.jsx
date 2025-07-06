import SectionTitle from "../atoms/SectionTitle";
import UnitItem from "../atoms/UnitItem";

export default function Units() {
    return (
        <div id="chaptersIndex" className="container-xxl py-5">
            <div className="container">

                <SectionTitle heading="Our Chapters"/>

                <div className="row g-4">
                    <UnitItem
                        logo="img/logos/cs.png"
                        name="Computer Society"
                        description="IEEE Computer Society (CS) Driving computer science progress, fostering
                                    global innovation, collaboration, and excellence worldwide."
                        link="cs.html/"
                    />
                    <UnitItem
                        logo="img/logos/ras.png"
                        name="Robotics and Automation Society"
                        description="IEEE RAS: Advancing robotics & automation tech, fostering collaboration, innovation,
                                    and transformative solutions worldwide."
                        link="ras.html"
                    />
                    <UnitItem
                        logo="img/logos/ias.png"
                        name="Industry Applications Society"
                        description="IEEE IAS: Advancing tech applications in industries, fostering collaboration,
                                    innovation, and real-world solutions worldwide."
                        link="ias.html"
                    />
                    <UnitItem
                        logo="img/logos/aess.png"
                        name="Aerospace and Electronic Systems Society"
                        description="IEEE AESS: Advancing aerospace & electronic tech, fostering innovation & collaboration worldwide."
                        link="aess.html"
                    />
                    <UnitItem
                        logo="img/logos/pes.png"
                        name="Power & Energy Society"
                        description="IEEE PES: Advancing power & energy tech through global collaboration, innovation, and sustainable solutions for a reliable and eco-friendly future."
                        link="pes.html"
                    />
                    <UnitItem
                        logo="img/logos/wie.png"
                        name="Woman In Engineering"
                        description="IEEE WIE: Empowering women in engineering, promoting diversity,
                                    fostering leadership, and bridging the gender gap for an innovative future."
                        link="wie.php"
                    />
                </div>
            </div>
        </div>
    );
}