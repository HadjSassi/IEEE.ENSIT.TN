import React from "react";

export default function Logo(props) {

    const mergedProps = {
        ...Logo.defaultProps,
        ...props
    };

    return <>
        <img src={mergedProps.image} width="200" alt="logo sb ieee" className="mb-3"/>
    </>
}

Logo.defaultProps = {
    image: "img/logos/ieee%20(1).png"
};