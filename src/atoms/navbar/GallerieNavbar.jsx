import {NavLink} from "react-router-dom";

export default function GallerieNavbar(props){
    return <>
        <NavLink
            to="/gallery"
            className={({isActive}) => `nav-item nav-link ${isActive ? "active" : ""}`}
        >
            Gallery
        </NavLink>
    </>
};