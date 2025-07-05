import React from "react";

export default function Youtube(props) {

    const mergedProps = {
        ...Youtube.defaultProps,
        ...props
    };

    return <>
        <a className="btn btn-square btn-light rounded-circle me-2"
           href={mergedProps.link} aria-label="YouTube">
            <i className="fab fa-youtube icon-color"></i>
        </a>
    </>
}

Youtube.defaultProps = {
    link: "https://www.youtube.com/@ieeeensit2837"
};