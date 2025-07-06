import {NavLink} from "react-router-dom";

export default function JoinUsNavbar(props){
    return <>
        <NavLink
            to="/joinus"
            className={({isActive}) => `nav-item nav-link ${isActive ? "active" : ""}`}
        >
            Join Us
        </NavLink>
    </>
};