import Carrousel from "../components/Carrousel";
import Statistics from "../components/Statistics";
import About from "../components/About";
import Units from "../components/Units";
import Team from "../components/Team";
import JoinUs from "../components/JoinUs";
import Dedicace from "../components/Dedicace";
import Footer from "../components/Footer";

export default function Home() {
    return (
        <div>
            <Carrousel />
            <Statistics/>
            <About/>
            <Units/>
            <Team/>
            <JoinUs/>
            <Dedicace/>
            <Footer />
        </div>
    );
}