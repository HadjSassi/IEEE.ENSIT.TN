import Carrousel from "../../components/Carrousel";
import Team from "../../components/Team";
import JoinUs from "../../components/JoinUs";
import Footer from "../../components/Footer";
import PageIntro from "../../atoms/PageIntro";
import AboutUsCard from "../../molecules/AboutUsCard";
import React, {useEffect, useState} from "react";
import Dedicace from "../../components/Dedicace";
import "../../styles/cs.css"

export default function Cs(props) {
    const [teamData, setTeamData] = useState(null);
    useEffect(() => {
        fetch("/data/cs_mandate.json")
            .then((response) => response.json())
            .then((data) => setTeamData(data))
            .catch((error) => console.error("Erreur lors du chargement des données :", error));
    }, []);

    if (!teamData) {
        return <div>Chargement...</div>;
    }


    return <div className={"cs-page"}>
        <Carrousel
            img1="img/26.jpg"
            img2="img/pic0.jpg"
            logo="img/logos/cswhite.png"
        />
        <PageIntro
            title={"Chapter Overview"}
            description={"Engaging computer engineers, scientists, academia, and industry professionals from all areas of computing, the IEEE Computer Society (CS) sets the standard for the education and engagement that fuels continued global technological advancement. Through conferences, publications, and programs, and by bringing together computer science and engineering leaders at every phase of their career for dialogue, debate, and collaboration, IEEE CS empowers, shapes, and guides the future of not only its members, but the greater industry, enabling new opportunities to better serve our world."}
        />

        <AboutUsCard
            direction="right"
            image="about-cs"
            link="https://www.computer.org/"
            descrition="IEEE Computer Society is known for encouraging computer science and engineering, IEEE Computer Society Ensit Student Branch Chapter was established on september 15, 2021 . It focused on delivering to its members the basis of Information Technology and also almost everything they need to boost their careers and improve their skills"
        />

        <Team data={teamData} />
        <JoinUs
            image={"img/joinUsCs.gif"}
            heading={"Become a Part of IEEE CS ENSIT Student Branch Chapter"}
            subHeading={"Join Us"}
            description={"We welcome all students who are interested in computer science, technology, and innovation. By joining the IEEE CS Student Chapter, you'll have access to a vibrant community of like-minded individuals and numerous opportunities for learning, networking, and skill development in the field of computer science and related technologies. <br> <br> Whether you're a seasoned computer scientist or just starting your journey in the world of technology, there's a place for you at IEEE CS Student Chapter."}
        />
        <Dedicace/>
        <Footer
            logo="img/logos/cswhite.png"
            text="Join IEEE CS Ensit Student Branch Chapter - Empowering Tech Enthusiasts Since 2021. Boost Your Career & Skills Now!"
            phone="+216 51 907 825"
            email="cs.chapter.ensit@gmail.com"
            instagram="https://www.instagram.com/ieee_cs_ensit/"
            facebook="https://www.facebook.com/profile.php?id=100081856069185"
            linkedin="https://www.linkedin.com/company/ieee-ensit-student-branch/mycompany/"
            youtube="https://www.youtube.com/@ieeeensit2837"
        />
    </div>
}