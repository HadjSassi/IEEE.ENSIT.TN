import FormInput from "../atoms/form/FormInput";
import FormTextArea from "../atoms/form/FormTextArea";
import FormButton from "../atoms/buttons/FormButton";

export default function ContactForm() {
    return <>
        <div className="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <form id="myform">
                <p className="mb-4 fw-bold">
                    If you have any questions, concerns, or feedback, please don't hesitate to get in
                    touch with our friendly support team. We're here to assist you in any way we can!
                </p>
                <div className="row g-3">
                    <div className="col-md-6">
                        <FormInput name={"Your Name"} placeholder={"Your Name"}/>
                    </div>
                    <div className="col-md-6">
                        <FormInput name={"Your Email"} placeholder={"Your Email"}/>
                    </div>
                    <div className="col-12">
                        <FormInput name={"Subject"} placeholder={"Subject"}/>
                    </div>

                    <div className="col-12">
                        <FormTextArea name={"Message"} placeholder={"Message"}/>
                    </div>
                    <FormButton text="Send Message" />
                </div>
            </form>
        </div>
    </>

}