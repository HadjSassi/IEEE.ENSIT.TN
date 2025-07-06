export default function FormInputSelect(props) {
    return (
        <div className="mb-3">
            <label htmlFor={props.name} className="form-label">{props.name}:</label>
            <select name={props.name} id={props.name} className="form-select">
                {props.values.map((value, index) => (
                    <option key={index} value={value}>{value}</option>
                ))}
            </select>
        </div>
    );
}