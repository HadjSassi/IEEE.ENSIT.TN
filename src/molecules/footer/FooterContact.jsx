import Location from "../../atoms/contacts/Location";
import PhoneNumber from "../../atoms/contacts/PhoneNumber";
import Email from "../../atoms/contacts/Email";
import Instagram from "../../atoms/contacts/Instagram";
import Facebook from "../../atoms/contacts/Facebook";
import Youtube from "../../atoms/contacts/Youtube";
import LinkedIn from "../../atoms/contacts/LinkedIn";
import React from "react";
import SmallTitle from "../../atoms/SmallTitle";

export default function FooterContact(props) {
    return <>
        <div className="col-lg-3 col-md-6">
            <SmallTitle title="Contact" />
            <Location />
            <PhoneNumber
                number={props.phone}
            />
            <Email
                mail={props.email}
            />
            <div className="d-flex pt-3">
                <Instagram
                    link={props.instagram}
                />
                <Facebook
                    link={props.facebook}
                />
                <Youtube
                    link={props.youtube}
                />
                <LinkedIn
                    link={props.linkedin}
                />
            </div>
        </div>
    </>
};