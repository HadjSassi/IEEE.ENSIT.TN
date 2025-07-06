export default function RoundedButton(props) {

    const mergedProps = {
        ...RoundedButton.defaultProps,
        ...props
    }

    return <>
        <a className={`btn rounded-pill py-3 px-5 `+mergedProps.class} href={props.link}>{props.text}</a>
    </>
}

RoundedButton.defaultProps = {
    class: 'btn-primary',
}