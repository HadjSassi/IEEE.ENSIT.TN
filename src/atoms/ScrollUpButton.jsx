import {useLocation} from "react-router-dom";

export default function ScrollUpButton(props) {
    const location = useLocation();
    let buttonClass = "btn-primary";

    switch (location.pathname) {
        case "/cs":
            buttonClass = "btn-warning";
            break;
        default:
            buttonClass = "btn-primary";
            break;
    }

    return (
        <button
            className={`btn btn-lg ${buttonClass} btn-lg-square rounded-circle back-to-top ${props.showScroll ? "show" : ""}`}
            onClick={props.action}
        >
            <i className="bi bi-arrow-up"></i>
        </button>
    );
}