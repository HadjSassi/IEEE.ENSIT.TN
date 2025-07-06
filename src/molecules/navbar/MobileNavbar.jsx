import {NavLink} from "react-router-dom";
import CollapseButton from "../../atoms/buttons/CollapseButton";

export default function MobileNavbar (props){
    return <>
        <NavLink to="/" className="navbar-brand d-lg-none">
            <img src="/img/logos/ieee%20(3).png" width="150" alt="Logo"/>
        </NavLink>
        <CollapseButton/>
    </>
}