import React from "react";

export default function Location(props) {
    const address = props.address || "05 Ave Taha Hussein, Tunis 1008 à l'ENSIT";
    return <>
        {(props.largeSize) ?
            <div className="d-flex border-bottom pb-3 mb-3">
                <div className="flex-shrink-0 btn-square bg-primary rounded-circle">
                    <i className="fa fa-map-marker-alt text-white"></i>
                </div>
                <div className="ms-3">
                    <h6>Adress</h6>
                    <span>{address}</span>
                </div>
            </div>
        :
        <p className="text-white mb-2"><i className="fa fa-map-marker-alt me-3"></i>{address}</p>
        }
    </>
}
