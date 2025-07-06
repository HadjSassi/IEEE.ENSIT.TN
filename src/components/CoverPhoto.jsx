import React from "react";

export default function CoverPhoto(props) {
    return (
        <div className={`container-fluid py-5 mb-5 wow fadeIn `+props.backgroundClassName} data-wow-delay="0.1s">
            <div className="container text-center py-5" style={{display: "flex", alignItems: "center", justifyContent: "center"}}>
                <h1 style={{width: "500px", display: "flex", alignItems: "center", justifyContent: "center"}}
                    className={`display-2 text-white mb-4 animated slideInDown ${props.image ? "" : "fw-bold"}`}
                    dangerouslySetInnerHTML={{__html: props.title}}
                    >
                </h1>
                {props.image &&
                    <img
                    className="display-2 text-white mb-4 animated slideInDown"
                    src={props.image}
                    alt="IEEE Logo"
                    style={{width: "40%"}}
                />
                }
            </div>
        </div>
    );
}