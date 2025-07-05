import React from "react";

export default function Description(props) {

    const mergedProps = {
        ...Description.defaultProps,
        ...props
    };

    return <>
        <p className="text-white">
            {mergedProps.text}
        </p>
    </>
}

Description.defaultProps = {
    text: "ENSIT Student Branch, since 2013, embraces IEEE's values for innovation and humanity. 120+ members strong, we advance skills for a better engineering future."
};