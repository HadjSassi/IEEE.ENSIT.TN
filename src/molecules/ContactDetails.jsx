import Localisation from "../atoms/contacts/Localisation";
import SectionTitle from "../atoms/SectionTitle";
import FooterContact from "./footer/FooterContact";
import React from "react";
import Location from "../atoms/contacts/Location";
import PhoneNumber from "../atoms/contacts/PhoneNumber";
import Email from "../atoms/contacts/Email";

export default function ContactDetails() {
    return <>
        <div className="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <Location largeSize={true}/>
            <PhoneNumber largeSize={true} />
            <Email largeSize={true} />
            <Localisation largeSize={true}/>
        </div>
    </>

}