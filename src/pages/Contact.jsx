import Dedicace from "../components/Dedicace";
import Footer from "../components/Footer";
import CoverPhoto from "../components/CoverPhoto";
import PageIntro from "../atoms/PageIntro";
import ContactForm from "../molecules/ContactForm";
import ContactDetails from "../molecules/ContactDetails";

export default function Contact() {
    return (
        <div>
            <CoverPhoto
                title="Contact Us"
                backgroundClassName="contact-header"
            />

            <PageIntro
                title="If You Have Any Query, Please Contact Us"
            />

            <div className="container-xxl py-5">
                <div className="row g-5">
                    <ContactForm />
                    <ContactDetails/>
                </div>
            </div>

            <Dedicace/>
            <Footer/>
        </div>
    );
}