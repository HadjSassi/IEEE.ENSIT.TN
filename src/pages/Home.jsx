import Carrousel from "../components/Carrousel";
import Statistics from "../components/Statistics";
import Units from "../components/Units";
import Team from "../components/Team";
import JoinUs from "../components/JoinUs";
import Dedicace from "../components/Dedicace";
import Footer from "../components/Footer";
import AboutUsCard from "../molecules/AboutUsCard";
import React, {useEffect, useState} from "react";

export default function Home() {
    const [teamData, setTeamData] = useState(null);
    useEffect(() => {
        fetch("/data/sb_mandate.json")
            .then((response) => response.json())
            .then((data) => setTeamData(data))
            .catch((error) => console.error("Erreur lors du chargement des données :", error));
    }, []);

    if (!teamData) {
        return <div>Chargement...</div>;
    }
    return (
        <div>
            <Carrousel
                img1="img/0.png"
                img2="img/pic.jpg"
                logo="img/logos/ieee%20(1).png"
            />
            <Statistics/>
            <AboutUsCard
                direction="left"
                image="about"
                link="https://www.ieee.org/"
                descrition="ENSIT Student Branch, founded in 2013 and has been active since. Now it gathers over 120 members and to mention the number is increasing continuously. We believe in IEEE’s causes and values. Fostering Technological innovation for the benefit of humanity is a mission we want to take part of. Enhancing our soft skills and enlarging our technical knowledge for better tomorrow engineers and searchers, a better Tunisia, a better world, that is our vision."
            />
            <Units/>
            <Team data={teamData} />
            <JoinUs/>
            <Dedicace/>
            <Footer />
        </div>
    );
}