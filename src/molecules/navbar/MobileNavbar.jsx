import {NavLink} from "react-router-dom";
import CollapseButton from "../../atoms/buttons/CollapseButton";

export default function MobileNavbar (props){
    return <>
        <NavLink to="/" className="navbar-brand d-lg-none">
            <img src={props.logoSrc} width="150" alt="Logo"/>
        </NavLink>
        <CollapseButton/>
    </>
}