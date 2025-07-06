export default function FormButton(props) {

    const mergedProps = {
        ...FormButton.defaultProps,
        ...props
    }

    return <>
        <div className="d-flex justify-content-center">
            <button
                className={`btn rounded-pill py-3 px-5 `+mergedProps.class}
                type={mergedProps.type}>
                {mergedProps.text}
            </button>
        </div>
    </>
}

FormButton.defaultProps = {
    class: 'btn-primary',
    text: 'Submit',
    type: 'submit'
}