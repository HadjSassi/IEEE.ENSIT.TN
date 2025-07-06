import {useEffect, useState} from "react";
import MobileNavbar from "../molecules/navbar/MobileNavbar";
import WebNavbar from "../molecules/navbar/WebNavbar";

export default function Navbar() {
    const [isVisible, setNavbarVisible] = useState(true);

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
        <div className={`container-fluid bg-white sticky-top ${isVisible ? "visible" : "hidden"}`}>
            <div className="container">
                <nav className="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                    <MobileNavbar/>
                    <WebNavbar />
                </nav>
            </div>
        </div>
    );
}