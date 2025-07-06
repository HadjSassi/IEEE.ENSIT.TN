import {NavLink} from "react-router-dom";
import CollapseButton from "../../atoms/buttons/CollapseButton";
import AlumniNavbar from "../../atoms/navbar/AlumniNavbar";
import HomeNavbar from "../../atoms/navbar/HomeNavbar";
import GallerieNavbar from "../../atoms/navbar/GallerieNavbar";
import ChapterNavbar from "../../atoms/navbar/ChapterNavbar";
import ContactNavbar from "../../atoms/navbar/ContactNavbar";
import JoinUsNavbar from "../../atoms/navbar/JoinUsNavbar";
import Logo from "../../atoms/Logo";

export default function WebNavbar (props){
    return <>
        <div className="collapse navbar-collapse" id="navbarCollapse">
            <div className="navbar-nav">
                <HomeNavbar />
                <AlumniNavbar/>
                <GallerieNavbar/>
                <ChapterNavbar />
                <ContactNavbar/>
                <JoinUsNavbar/>
            </div>
            <div className="ms-auto d-none d-lg-block">
                <Logo width="150" image='/img/logos/ieee%20(3).png'/>
            </div>
        </div>
    </>
}