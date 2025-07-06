import {useLocation} from "react-router-dom";
import {getRouteConfig} from "../utils/routeConfig";

export default function Spinner() {
    const location = useLocation();
    const {textClass} = getRouteConfig(location.pathname);
    return (
        <div id="spinner"
             className="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div className={`spinner-border ${textClass}`} role="status" style={{width: "3rem", height: "3rem"}}></div>
        </div>
    );
}