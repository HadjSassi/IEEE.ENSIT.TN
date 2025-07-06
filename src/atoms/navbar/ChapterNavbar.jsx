import {NavLink} from "react-router-dom";

export default function ChapterNavbar(props){
    return <>
        <div className="nav-item dropdown">
            <NavLink
                to="#"
                className="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
            >
                Chapters
            </NavLink>
            <div className="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                <NavLink to="/cs" className="dropdown-item">
                    CS
                </NavLink>
                <NavLink to="/ras" className="dropdown-item">
                    RAS
                </NavLink>
                <NavLink to="/ias" className="dropdown-item">
                    IAS
                </NavLink>
                <NavLink to="/aess" className="dropdown-item">
                    AESS
                </NavLink>
                <NavLink to="/pes" className="dropdown-item">
                    PES
                </NavLink>
                <NavLink to="/wie" className="dropdown-item">
                    WIE
                </NavLink>
            </div>
        </div>
    </>
};