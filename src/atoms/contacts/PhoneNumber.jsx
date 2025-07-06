import React from "react";

export default function PhoneNumber(props) {

    const mergedProps = {
        ...PhoneNumber.defaultProps,
        ...props
    };

    return <>
        {(props.largeSize) ?
            <div className="d-flex border-bottom pb-3 mb-3">
                <div className="flex-shrink-0 btn-square bg-primary rounded-circle">
                    <i className="fa fa-phone-alt text-white"></i>
                </div>
                <div className="ms-3">
                    <h6>Call Us</h6>
                    <span>{mergedProps.number}</span>
                </div>
            </div>
            :
            <p className="text-white mb-2"><i className="fa fa-phone-alt me-3"></i>{mergedProps.number}</p>
        }
    </>
}

PhoneNumber.defaultProps = {
    number: "+216 95 741 882"
};