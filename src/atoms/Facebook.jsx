import React from "react";

export default function Facebook(props) {

    const mergedProps = {
        ...Facebook.defaultProps,
        ...props
    };

    return <>
        <a className="btn btn-square btn-light rounded-circle me-2"
           href={mergedProps.link} aria-label="Facebook">
            <i className="fab fa-facebook-f icon-color"></i>
        </a>
    </>
}

Facebook.defaultProps = {
    link: "https://www.facebook.com/ieee.ensit"
};