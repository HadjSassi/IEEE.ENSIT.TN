export default function ScrollUpButton(props) {
    return <>
        <button
            className={`btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top ${props.showScroll ? "show" : ""}`}
            onClick={props.action}
        >
            <i className="bi bi-arrow-up"></i>
        </button>
    </>
}