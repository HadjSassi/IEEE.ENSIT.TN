import Dedicace from "../components/Dedicace";
import Footer from "../components/Footer";
import CoverPhoto from "../components/CoverPhoto";
import PageInProgress from "../components/PageInProgress";

export default function Home() {
    return (
        <div>
            <CoverPhoto
                title="Gallery"
                backgroundClassName="gallery-header"
            />
            <PageInProgress/>

            <Dedicace/>
            <Footer/>
        </div>
    );
}