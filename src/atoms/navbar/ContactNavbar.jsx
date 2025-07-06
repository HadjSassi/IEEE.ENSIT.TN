import {NavLink} from "react-router-dom";

export default function ContactNavbar(props){
    return <>
        <NavLink
            to="/contact"
            className={({isActive}) => `nav-item nav-link ${isActive ? "active" : ""}`}
        >
            Contact
        </NavLink>
    </>
};