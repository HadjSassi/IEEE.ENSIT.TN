import Localisation from "../../atoms/Localisation";
import React from "react";
import SmallTitle from "../../atoms/SmallTitle";

export default function FooterLocalization() {
    return <>
        <div className="col-lg-3 col-md-6">
            <SmallTitle title="Localisation" />
            <Localisation/>
        </div>

    </>
};