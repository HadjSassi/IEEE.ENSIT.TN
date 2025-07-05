import React from "react";

export default function LinkedIn(props) {

    const mergedProps = {
        ...LinkedIn.defaultProps,
        ...props
    };

    return <>
        <a className="btn btn-square btn-light rounded-circle me-2"
           href={mergedProps.link} aria-label="LinkedIn">
            <i className="fab fa-linkedin-in icon-color"></i>
        </a>
    </>
}

LinkedIn.defaultProps = {
    link: "https://www.linkedin.com/company/ieee-ensit-student-branch/mycompany/"
};