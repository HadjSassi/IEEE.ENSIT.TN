import Facebook from "../atoms/contacts/Facebook";
import Instagram from "../atoms/contacts/Instagram";
import LinkedIn from "../atoms/contacts/LinkedIn";

export default function TeamItem(props) {
    return <>
        <div className="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.9s">
            <div className="team-item rounded overflow-hidden pb-4">
                <img className="img-fluid mb-4" src={props.image} alt="" />
                <h5>{props.name}</h5>
                <span className="text-primary">{props.post}</span>
                <ul className="team-social">
                    <li>{props.facebook && <Facebook link={props.facebook} />}</li>
                    <li>{props.instagram && <Instagram link={props.instagram} />}</li>
                    <li>{props.linkedin && <LinkedIn link={props.linkedin} />}</li>
                </ul>
            </div>
        </div>
    </>
}