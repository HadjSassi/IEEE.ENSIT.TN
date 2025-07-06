export default function FormInput(props){
    const merged_props = { ...FormInput.defaultProps, ...props };

    return <>
        <div className="mb-3">
            <label htmlFor={props.name} className="form-label">{props.name}:</label>
            <input type={merged_props.type} placeholder={"Please fill this field : "+props.name} className="form-control" id={props.name} name={props.name} />
        </div>
    </>
}
FormInput.defaultProps = {
    type: "text"
}