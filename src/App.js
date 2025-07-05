import { BrowserRouter as Router, Route, Routes} from "react-router-dom";
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import './App.css';
import Home from "./pages/Home";
import Gallery from "./pages/Galleries";
import Contact from "./pages/Contact";
import Navbar from "./components/Navbar";
import { useEffect, useState } from "react";

function App() {
    const [showScroll, setShowScroll] = useState(false);

    useEffect(() => {
        const handleScroll = () => {
            setShowScroll(window.scrollY > 300);
        };
        window.addEventListener("scroll", handleScroll);
        return () => window.removeEventListener("scroll", handleScroll);
    }, []);

    const scrollToTop = () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    };

    return (
        <Router>
            <Navbar />
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="/gallery" element={<Gallery />} />
                <Route path="/contact" element={<Contact />} />
            </Routes>
            {showScroll && (
                <button
                    className="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"
                    onClick={scrollToTop}
                    style={{
                        position: "fixed",
                        bottom: "20px",
                        right: "20px",
                        zIndex: 1000,
                    }}
                >
                    <i className="bi bi-arrow-up"></i>
                </button>
            )}
        </Router>
    );
}

export default App;
