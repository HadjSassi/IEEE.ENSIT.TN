import React from "react";

export default function Instagram(props) {

    const mergedProps = {
        ...Instagram.defaultProps,
        ...props
    };

    return <>
        <a className="btn btn-square btn-light rounded-circle me-2"
           href={mergedProps.link} aria-label="Instagram">
            <i className="fab fa-instagram icon-color"></i>
        </a>
    </>
}

Instagram.defaultProps = {
    link: "https://www.instagram.com/ieee_ensit_student_branch/"
};