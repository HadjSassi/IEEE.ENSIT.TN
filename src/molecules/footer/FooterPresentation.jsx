import Logo from "../../atoms/Logo";
import Description from "../../atoms/Description";
import React from "react";

export default function FooterPresentation(props) {
    return <>
        <div className="col-lg-3 col-md-6">
            <Logo
                image={props.logo}
            />
            <Description
                text={props.text}
            />
        </div>
    </>
};