import React from "react";
import FooterPresentation from "../molecules/footer/FooterPresentation";
import FooterContact from "../molecules/footer/FooterContact";
import FooterQuickLinks from "../molecules/footer/FooterQuickLinks";
import FooterLocalization from "../molecules/footer/FooterLocalization";

export default function Footer() {
    return (
        <div className="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
            <div className="container">
                <div className="row g-5">
                    <FooterPresentation />
                    <FooterContact/>
                    <FooterQuickLinks/>
                    <FooterLocalization/>
                </div>
            </div>
        </div>
    );
}