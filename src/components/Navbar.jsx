import {NavLink} from "react-router-dom";

export default function Navbar() {
    return (<div className="container-fluid bg-white sticky-top">
            <div className="container">
                <nav className="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                    <NavLink to="/" className="navbar-brand d-lg-none">
                        <img src="/img/logos/ieee%20(3).png" width="150" alt="Logo"/>
                    </NavLink>
                    <button
                        type="button"
                        className="navbar-toggler me-0"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse"
                    >
                        <span className="navbar-toggler-icon"></span>
                    </button>
                    <div className="collapse navbar-collapse" id="navbarCollapse">
                        <div className="navbar-nav">
                            <NavLink
                                to="/"
                                className={({isActive}) => `nav-item nav-link ${isActive ? "active" : ""}`}
                            >
                                Home
                            </NavLink>
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
                            <NavLink
                                to="/gallery"
                                className={({isActive}) => `nav-item nav-link ${isActive ? "active" : ""}`}
                            >
                                Gallery
                            </NavLink>
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
                            <NavLink
                                to="/contact"
                                className={({isActive}) => `nav-item nav-link ${isActive ? "active" : ""}`}
                            >
                                Contact
                            </NavLink>
                            <NavLink
                                to="/joinus"
                                className={({isActive}) => `nav-item nav-link ${isActive ? "active" : ""}`}
                            >
                                Join Us
                            </NavLink>
                        </div>
                        <div className="ms-auto d-none d-lg-block">
                            <img src="/img/logos/ieee%20(3).png" width="150" alt="Logo"/>
                        </div>
                    </div>
                </nav>
            </div>
        </div>);
}