import {useEffect, useState} from "react";
import {useLocation} from "react-router-dom";
import MobileNavbar from "../molecules/navbar/MobileNavbar";
import WebNavbar from "../molecules/navbar/WebNavbar";

export default function Navbar() {
    const [isVisible, setNavbarVisible] = useState(true);
    const location = useLocation();
    const [logoSrc, setLogoSrc] = useState("/img/logos/ieee%20(3).png");
    const [navbarClass, setNavbarClass] = useState("");

    useEffect(() => {
        switch (location.pathname) {
            case "/cs":
                setLogoSrc("img/logos/cs.png");
                setNavbarClass("cs-page");
                break;
            default:
                setLogoSrc("/img/logos/ieee%20(3).png");
                setNavbarClass("");
                break;
        }
    }, [location.pathname]);

    useEffect(() => {
        const handleScroll = () => {
            const scrollY = window.scrollY;
            if (scrollY === 0) {
                setNavbarVisible(true);
            } else if (scrollY > 5 && scrollY <= 500) {
                setNavbarVisible(false);
            } else if (scrollY > 500) {
                setNavbarVisible(true);
            }
        };

        window.addEventListener("scroll", handleScroll);
        return () => window.removeEventListener("scroll", handleScroll);
    }, []);

    return (
        <div className={`container-fluid bg-white sticky-top ${navbarClass} ${isVisible ? "visible" : "hidden"}`}>
            <div className="container">
                <nav className="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                    <MobileNavbar
                        logoSrc={logoSrc}
                    />
                    <WebNavbar
                        logoSrc={logoSrc}
                    />
                </nav>
            </div>
        </div>
    );
}