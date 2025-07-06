import Dedicace from "../components/Dedicace";
import Footer from "../components/Footer";
import CoverPhoto from "../components/CoverPhoto";
import PageIntro from "../atoms/PageIntro";
import RecruitmentForm from "../molecules/RecruitmentForm";

export default function Recruitment() {
    return (
        <div>
            <CoverPhoto
                title="Join the family"
                image="img/logos/ieee%20(1).png"
                backgroundClassName="joinus-header "
            />

            <PageIntro
                title="Recruitment Form"
                description="
                Join us on IEEE ENSIT Student Branch! <br>

                Are you interested in technology, innovation, and networking with like-minded individuals? If so, we
                invite you to become a part of our vibrant and dynamic community at the IEEE ENSIT Student Branch. <br>

                The IEEE (Institute of Electrical and Electronics Engineers) is a prestigious global organization
                dedicated to advancing technology for the benefit of humanity. The ENSIT Student Branch is an extension
                of this organization, specifically catering to students at the Higher National School of Engineers of
                Tunis. <br>

                The student branch aims to provide its members with opportunities for professional and personal
                development, networking, and collaboration.
                "
            />

           <RecruitmentForm />

            <Dedicace/>
            <Footer />
        </div>
    );
}