import { NavLink, useLocation } from "react-router-dom";

export default function ChapterNavbar() {
    const { pathname } = useLocation();

    // Check if the current URL matches any chapter page
    const isChapterActive = /^\/(cs|ras|ias|aess|pes|wie)(\/|$)/.test(pathname);

    return (
        <div className="nav-item dropdown">
            <button
                className={`nav-link dropdown-toggle btn btn-link ${isChapterActive ? "active" : ""}`}
                data-bs-toggle="dropdown"
            >
                Chapters
            </button>
            <div className="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                <NavLink to="/cs" className="dropdown-item">CS</NavLink>
                <NavLink to="/ras" className="dropdown-item">RAS</NavLink>
                <NavLink to="/ias" className="dropdown-item">IAS</NavLink>
                <NavLink to="/aess" className="dropdown-item">AESS</NavLink>
                <NavLink to="/pes" className="dropdown-item">PES</NavLink>
                <NavLink to="/wie" className="dropdown-item">WIE</NavLink>
            </div>
        </div>
    );
}
