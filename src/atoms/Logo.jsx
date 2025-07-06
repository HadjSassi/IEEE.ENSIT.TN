import React from "react";

export default function Logo(props) {

    const mergedProps = {
        ...Logo.defaultProps,
        ...props
    };

    return <>
        <img src={mergedProps.image} width={mergedProps.width} alt="logo sb ieee" />
    </>
}

Logo.defaultProps = {
    image: "img/logos/ieee%20(1).png",
    width: "200"
};