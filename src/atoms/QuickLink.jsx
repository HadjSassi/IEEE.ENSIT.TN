import React from "react";

export default function QuickLink(props) {

    return <>
        <a className="btn btn-link" href={props.link}>{props.name}</a>
    </>
}
