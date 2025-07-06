import React from "react";
import FooterPresentation from "../molecules/footer/FooterPresentation";
import FooterContact from "../molecules/footer/FooterContact";
import FooterQuickLinks from "../molecules/footer/FooterQuickLinks";
import FooterLocalization from "../molecules/footer/FooterLocalization";

export default function Footer(props) {
    const mergedProps = {
        ...Footer.defaultProps,
        ...props
    };
    return (
        <div className="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
            <div className="container">
                <div className="row g-5">
                    <FooterPresentation
                        logo={mergedProps.logo}
                        text={mergedProps.text}
                    />
                    <FooterContact
                        phone={mergedProps.phone}
                        email={mergedProps.email}
                        instagram={mergedProps.instagram}
                        facebook={mergedProps.facebook}
                        linkedin={mergedProps.linkedin}
                        youtube={mergedProps.youtube}
                    />
                    <FooterQuickLinks/>
                    <FooterLocalization/>
                </div>
            </div>
        </div>
    );
}

Footer.defaultProps = {
    logo: "img/logos/ieee%20(1).png",
    text: "ENSIT Student Branch, since 2013, embraces IEEE's values for innovation and humanity. 120+ members strong, we advance skills for a better engineering future.",
    phone: "+216 95 741 882",
    email: "ieee.ensit.student.branch@gmail.com",
    instagram: "https://www.instagram.com/ieee_ensit_student_branch/",
    facebook: "https://www.facebook.com/ieee.ensit",
    linkedin: "https://www.linkedin.com/company/ieee-ensit-student-branch/mycompany/",
    youtube: "https://www.youtube.com/@ieeeensit2837"
};