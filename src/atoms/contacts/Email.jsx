import React from "react";

export default function Email(props) {

    const mergedProps = {
        ...Email.defaultProps,
        ...props
    };
    const emailPrefix = mergedProps.mail.split('@')[0];

    return <>
        {(props.largeSize) ?
            <div className="d-flex border-bottom-0 pb-3 mb-3">
                <div className="flex-shrink-0 btn-square bg-primary rounded-circle">
                    <i className="fa fa-envelope text-white"></i>
                </div>
                <div className="ms-3">
                    <h6>Mail Us</h6>
                    <span>{mergedProps.mail}</span>
                </div>
            </div>
            :
        <a href={`mailto:${+mergedProps.mail}`} className="mb-2 text-white">
            <i className="fa fa-envelope me-3"></i>{emailPrefix}
        </a>
        }
    </>
}

Email.defaultProps = {
    mail: "ieee.ensit.student.branch@gmail.com"
};