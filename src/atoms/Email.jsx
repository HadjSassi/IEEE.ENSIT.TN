import React from "react";

export default function Email(props) {

    const mergedProps = {
        ...Email.defaultProps,
        ...props
    };
    const emailPrefix = mergedProps.mail.split('@')[0];

    return <>
        <a href={`mailto:${+mergedProps.mail}`} className="mb-2 text-white">
            <i className="fa fa-envelope me-3"></i>{emailPrefix}
        </a>
    </>
}

Email.defaultProps = {
    mail: "ieee.ensit.student.branch@gmail.com"
};