import Location from "../../atoms/Location";
import PhoneNumber from "../../atoms/PhoneNumber";
import Email from "../../atoms/Email";
import Instagram from "../../atoms/Instagram";
import Facebook from "../../atoms/Facebook";
import Youtube from "../../atoms/Youtube";
import LinkedIn from "../../atoms/LinkedIn";
import React from "react";
import SmallTitle from "../../atoms/SmallTitle";

export default function FooterContact() {
    return <>
        <div className="col-lg-3 col-md-6">
            <SmallTitle title="Contact" />
            <Location />
            <PhoneNumber />
            <Email />
            <div className="d-flex pt-3">
                <Instagram />
                <Facebook />
                <Youtube />
                <LinkedIn />
            </div>
        </div>
    </>
};