import {useEffect, useState} from "react";
import {useLocation} from "react-router-dom";
import MobileNavbar from "../molecules/navbar/MobileNavbar";
import WebNavbar from "../molecules/navbar/WebNavbar";
import {getRouteConfig} from "../utils/routeConfig";

export default function Navbar() {
    const [isVisible, setNavbarVisible] = useState(true);
    const location = useLocation();
    const [logoSrc, setLogoSrc] = useState("/img/logos/ieee%20(3).png");
    const [navbarClass, setNavbarClass] = useState("");

    useEffect(() => {
        const {logoSrc, navbarClass} = getRouteConfig(location.pathname);
        setLogoSrc(logoSrc);
        setNavbarClass(navbarClass);
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