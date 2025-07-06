import React from "react";

export default function Localisation(props) {
    const className = props.largeSize ? "w-100 rounded" : "";

    return (
        <iframe
            className={className}
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d629.4879921325812!2d10.179256687986872!3d36.784739211827876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd340576fc1a05%3A0x25fc1aa869f8cfb6!2s%C3%89cole%20nationale%20sup%C3%A9rieure%20d&#39;ing%C3%A9nieurs%20de%20Tunis%20(ENSIT)!5e0!3m2!1sen!2stn!4v1690723522488!5m2!1sen!2stn"
            width="300"
            height="200"
            style={{ border: 0 }}
            allowFullScreen={true}
            loading="lazy"
            referrerPolicy="no-referrer-when-downgrade"
        ></iframe>
    );
}