import QuickLink from "../../atoms/QuickLink";
import React from "react";
import SmallTitle from "../../atoms/SmallTitle";

export default function FooterQuickLinks() {
    return <>
        <div className="col-lg-3 col-md-6">
            <div className="row">
                <SmallTitle title="Quick Links" />
                <div className="col-6">
                    <QuickLink name="About Us" href="index.html#aboutUSindex" />
                    <QuickLink name="Contact Us" href="contact.html" />
                    <QuickLink name="Gallery" href="gallery.html" />
                    <QuickLink name="Team" href="index.html#teamindex" />
                    <QuickLink name="Allmuni2023" href="alumni3.html" />
                    <QuickLink name="Allumni2022" href="alumni2.html" />
                    <QuickLink name="Chapters" href="index.html#chaptersIndex" />
                </div>
                <div className="col-6">
                    <QuickLink name="SB" href="index.html#" />
                    <QuickLink name="CS" href="cs.html" />
                    <QuickLink name="RAS" href="ras.html" />
                    <QuickLink name="IAS" href="ias.html" />
                    <QuickLink name="AESS" href="aess.html" />
                    <QuickLink name="PES" href="pes.html" />
                    <QuickLink name="WIE" href="wie.html" />

                </div>
            </div>
        </div>

    </>
};