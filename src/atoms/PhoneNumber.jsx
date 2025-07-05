import React from "react";

export default function PhoneNumber(props) {

    const mergedProps = {
        ...PhoneNumber.defaultProps,
        ...props
    };

    return <>
        <p className="text-white mb-2"><i className="fa fa-phone-alt me-3"></i>{mergedProps.number}</p>
    </>
}

PhoneNumber.defaultProps = {
    number: "img/logos/ieee%20(1).png"
};