import Carrousel from "../../components/Carrousel";
import Team from "../../components/Team";
import JoinUs from "../../components/JoinUs";
import Footer from "../../components/Footer";
import PageIntro from "../../atoms/PageIntro";
import AboutUsCard from "../../molecules/AboutUsCard";
import React, {useEffect, useState} from "react";
import Dedicace from "../../components/Dedicace";
import "../../styles/ras.css"

export default function Ras(props) {
    const [teamData, setTeamData] = useState(null);
    useEffect(() => {
        fetch("/data/ras_mandate.json")
            .then((response) => response.json())
            .then((data) => setTeamData(data))
            .catch((error) => console.error("Erreur lors du chargement des données :", error));
    }, []);

    if (!teamData) {
        return <div>Chargement...</div>;
    }


    return <div className={"ras-page"}>
        <Carrousel
            img1="img/28.jpg"
            img2="img/22.jpg"
            logo="img/logos/raswhite.png"
            title="IEEE <strong>RAS</strong> ENSIT Student Branch Chapter"
        />
        <PageIntro
            title={"Chapter Overview"}
            description={"The IEEE Robotics and Automation Society's objectives are scientific, literary and educational in character. The Society strives for the advancement of the theory and practice of robotics and automation engineering and science and of the allied arts and sciences, and for the maintenance of high professional standards among its members, all in consonance with the Constitution and Bylaws of the IEEE and with special attention to such aims within the Field of Interest of the Society.\n" +
                "Our Mission is to foster the development and facilitate the exchange of scientific and technological knowledge in Robotics and Automation that benefits members, the profession and humanity.\n" +
                "Our Vision is to be the most recognized and respected global organization in Robotics and Automation."}
        />

        <AboutUsCard
            direction="left"
            image="about-ras"
            link="https://site.ieee.org/tunisia-ras//"
            descrition="IEEE RAS ENSIT student branch chapter, where we dare to dream and where innovation has no bonds!. Our Family is driven by endless passion for robotics and automation and seeking to shape a better future. With every step we take, we strive to push the boundaries, seeking new knowledge, and turning our dreams into reality.

                        our journey began 7th March 2021, with each year we go stronger thanks to our dear members whom continue to share us our dreams and help us building a better IEEE community."
        />

        <Team data={teamData} />
        <JoinUs
            image={"img/joinUsRas.gif"}
            heading={"Become a Part of IEEE RAS ENSIT Student Branch Chapter"}
            subHeading={"Join Us"}
            description={"Welcome to the RAS IEEE Student Chapter! If you're fascinated by Robotics and Automation technology, join our vibrant community for learning, networking, and skill development. Whether you're experienced or just starting, there's a place for you at RAS. Engage in technical sessions, workshops, and research activities, and together, let's shape the future of Robotics and Automation technology."}
        />
        <Dedicace/>
        <Footer
            logo="img/logos/raswhite.png"
            text="Join IEEE RAS Ensit Student Branch Chapter - Empowering Tech Enthusiasts Since 2017. Boost Your Career & Skills Now!"
            phone="+216 53 154 099"
            email="ensit.ras.sbc@gmail.com"
            instagram="https://www.instagram.com/ieee.ensit.ras/"
            facebook="https://www.facebook.com/profile.php?id=100081856069185"
            linkedin="https://www.linkedin.com/in/ieee-ras-chapter-ensit-student-branch-18360822b"
            youtube="https://www.youtube.com/@ieeeensit2837"
        />
    </div>
}