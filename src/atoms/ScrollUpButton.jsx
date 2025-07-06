import {useLocation} from "react-router-dom";
import {getRouteConfig} from "../utils/routeConfig";

export default function ScrollUpButton(props) {
    const location = useLocation();
    const {buttonClass} = getRouteConfig(location.pathname);

    return (
        <button
            className={`btn btn-lg ${buttonClass} btn-lg-square rounded-circle back-to-top ${props.showScroll ? "show" : ""}`}
            onClick={props.action}
        >
            <i className="bi bi-arrow-up"></i>
        </button>
    );
}