import {NavLink} from "react-router-dom";

export default function HomeNavbar(props){
    return <>
        <NavLink
            to="/"
            className={({isActive}) => `nav-item nav-link ${isActive ? "active" : ""}`}
        >
            Home
        </NavLink>
    </>
};