import {Route, Routes, useLocation} from "react-router-dom";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import './App.css';
import Home from "./pages/Home";
import Gallery from "./pages/Galleries";
import Contact from "./pages/Contact";
import Navbar from "./components/Navbar";
import {useEffect, useState} from "react";
import ScrollUpButton from "./atoms/ScrollUpButton";
import Recruitment from "./pages/Recruitment";
import Alumni3 from "./pages/alumni/Alumni3";
import Alumni2 from "./pages/alumni/Alumni2";
import Alumni1 from "./pages/alumni/Alumni1";
import Cs from "./pages/units/Cs";
import Ras from "./pages/units/Ras";
import {getRouteConfig} from "./utils/routeConfig";
import PageNotFound from "./pages/PageNotFound";
import Ias from "./pages/units/Ias";
import Aess from "./pages/units/Aess";
import Pes from "./pages/units/Pes";
import Wie from "./pages/units/Wie";

function App() {
    const [showScroll, setShowScroll] = useState(false);
    const location = useLocation();

    useEffect(() => {
        const {faviconSrc} = getRouteConfig(location.pathname);
        const faviconLink = document.querySelector("link[rel='icon']");
        if (faviconLink) {
            faviconLink.href = faviconSrc;
        }
    }, [location.pathname]);

    useEffect(() => {
        const handleScroll = () => {
            setShowScroll(window.scrollY > 300);
        };
        window.addEventListener("scroll", handleScroll);
        return () => window.removeEventListener("scroll", handleScroll);
    }, []);

    const scrollToTop = () => {
        window.scrollTo({top: 0, behavior: "smooth"});
    };

    return (
        <>
            <Navbar/>
            <Routes>
                <Route path="/" element={<Home/>}/>
                <Route path="/gallery" element={<Gallery/>}/>
                <Route path="/contact" element={<Contact/>}/>
                <Route path="/joinus" element={<Recruitment/>}/>
                <Route path="/alumni3" element={<Alumni3/>}/>
                <Route path="/alumni2" element={<Alumni2/>}/>
                <Route path="/alumni1" element={<Alumni1/>}/>
                <Route path="/cs" element={<Cs/>}/>
                <Route path="/ras" element={<Ras/>}/>
                <Route path="/ias" element={<Ias/>}/>
                <Route path="/aess" element={<Aess/>}/>
                <Route path="/pes" element={<Pes/>}/>
                <Route path="/wie" element={<Wie/>}/>
                <Route path="*" element={<PageNotFound/>}/>
            </Routes>
            <ScrollUpButton showScroll={showScroll} action={scrollToTop}/>
        </>
    );
}

export default App;