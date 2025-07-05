export default function NavigationButton(props) {
    return <>
        <button className={props.class} type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
            <span className={props.class+'-icon'} aria-hidden="true"></span>
            <span className="visually-hidden">{props.text}</span>
        </button>
    </>
}