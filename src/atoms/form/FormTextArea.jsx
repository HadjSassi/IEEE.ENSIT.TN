export default function FormTextArea(props){

    return <>
        <div className="mb-3">
            <label htmlFor={props.name} className="form-label">{props.name}:</label>
            <textarea placeholder={"Please fill this field: "+props.name} className="form-control" id={props.name} rows="3" name={props.name}></textarea>
        </div>
    </>
}
