export default function FormInput(props){
    const merged_props = { ...FormInput.defaultProps, ...props };

    return <>
    {!props.placeholder ?
        <div className="mb-3">
            {!props.placeholder && <label htmlFor={props.name} className="form-label">{props.name}:</label>}
            <input type={merged_props.type} placeholder={props.placeholder || "Please fill this field : "+props.name} className="form-control" id={props.name} name={props.name} />
        </div> :
        <div className="form-floating">
            {!props.placeholder && <label htmlFor={props.name} className="form-label">{props.name}:</label>}
            <input type={merged_props.type}  className="form-control" id={props.name} name={props.name}  placeholder={props.placeholder || "Please fill this field : "+props.name} />
            {props.placeholder && <label htmlFor={props.name}>{props.placeholder}</label>}
        </div>
    }
    </>
}
FormInput.defaultProps = {
    type: "text"
}