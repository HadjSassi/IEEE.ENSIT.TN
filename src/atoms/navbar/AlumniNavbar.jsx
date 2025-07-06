import { useLocation, NavLink } from "react-router-dom";

export default function AlumniNavbar() {
    const { pathname } = useLocation();
    const isAlumniActive = /^\/alumni(\/|\d|$)/.test(pathname);

    return (
        <div className="nav-item dropdown">
            <button
                className={`nav-link dropdown-toggle btn btn-link ${isAlumniActive ? "active" : ""}`}
                data-bs-toggle="dropdown"
            >
                Alumni
            </button>
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
    );
}
