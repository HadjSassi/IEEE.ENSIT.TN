import FormInput from "../atoms/form/FormInput";
import FormInputSelect from "../atoms/form/FormInputSelect";
import FormTextArea from "../atoms/form/FormTextArea";
import FormButton from "../atoms/buttons/FormButton";

export default function RecruitmentForm() {

    function replaceNewlines() {
        const skillsField = document.getElementById('skills');
        const hobbiesField = document.getElementById('hobbies');
        const otherField = document.getElementById('other');
        if (skillsField) {
            skillsField.value = skillsField.value.replace(/\n/g, ' -> ');
            skillsField.value = skillsField.value.replace(/ /g, '_');
        }

        if (hobbiesField) {
            hobbiesField.value = hobbiesField.value.replace(/\n/g, ' -> ');
            hobbiesField.value = hobbiesField.value.replace(/ /g, '_');
        }

        if (otherField) {
            otherField.value = otherField.value.replace(/ /g, '_');
        }
    }

    return (
        <div className="container-xxl py-5">
            <div className="container">
                <div className="row g-5">
                    <div className="col-lg-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                        <form className="myform1" onSubmit={() => replaceNewlines()}>
                            <FormInput name="Full Name" />
                            <FormInput name="E-mail" type="email"/>
                            <FormInput name="Date of Birth" type="date" />
                            <FormInput name="Phone Number" type="tel"/>
                            <FormInputSelect name="Class" values={["Select class", "1st year", "2nd year", "3rd year"]} />
                            <FormInputSelect name="Field of Study" values={["Select field of study", "Computer Engineering", "Industrial Engineering", "Mathematics and Modeling", "Electrical Engineering", "Mechanical Engineering", "Civil Engineering"]} />
                            <FormTextArea name="Skills" />
                            <FormTextArea name="Hobbies" />
                            <FormTextArea name="Anything to add or suggest" />
                            <FormButton text="Send Form" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    );
}