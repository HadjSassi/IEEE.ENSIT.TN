import React, { useEffect, useState } from "react";
import CoverPhoto from "../../components/CoverPhoto";
import Dedicace from "../../components/Dedicace";
import Footer from "../../components/Footer";
import AlumniGroup from "../../molecules/AlumniGroup";
import Spinner from "../../components/Spinner";

export default function Alumni2() {
    const [alumniData, setAlumniData] = useState(null);

    useEffect(() => {
        fetch("/data/alumni2.json")
            .then((response) => response.json())
            .then((data) => setAlumniData(data))
            .catch((error) => console.error("Erreur lors du chargement des données :", error));
    }, []);

    if (!alumniData) {
        return <Spinner/>;
    }
    return (
        <div>
            <CoverPhoto
                title="ALUMNI <br/> 2022-2023 Mandate"
                backgroundClassName="alumni2-header"
            />

            <AlumniGroup groupName="Student Branch Staff" members={alumniData.studentBranchStaff} styled={"sb-underline"}/>
            <AlumniGroup groupName="Computer Society" members={alumniData.computerSocietyMembers} styled={"cs-underline"}/>
            <AlumniGroup groupName="Robotics and Automation Society" members={alumniData.roboticsAndAutomationSocietyMembers} styled={"ras-underline"}/>
            <AlumniGroup groupName="Industry Applications Society" members={alumniData.industryApplicationsSocietyMembers} styled={"ias-underline"}/>
            <AlumniGroup groupName="Woman In Engineering" members={alumniData.womanInEngineeringSocietyMembers} styled={"wie-underline"}/>

            <Dedicace/>
            <Footer/>
        </div>
    );
}