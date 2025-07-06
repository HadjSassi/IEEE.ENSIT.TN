import {NavLink} from "react-router-dom";

export default function AlumniNavbar(props){
    return <>
        <div className="nav-item dropdown">
            <NavLink
                to="#"
                className="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
            >
                Alumni
            </NavLink>
            <div className="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                <NavLink to="/alumni3" className="dropdown-item">
                    2023
                </NavLink>
                <NavLink to="/alumni2" className="dropdown-item">
                    2022
                </NavLink>
                <NavLink to="/alumni1" className="dropdown-item">
                    2021
                </NavLink>
            </div>
        </div>
    </>
};