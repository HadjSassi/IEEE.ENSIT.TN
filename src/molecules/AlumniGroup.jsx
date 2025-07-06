export default function AlumniGroup(props) {
    const membersCount = props.members ? props.members.length : 0;
    const remainder = membersCount % 3;

    return (
        <div className="container mb-5">
            <div className="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style={{maxWidth: "500px"}}>
                <h1 className={`display-5 mb-5 fw-bold ` + props.styled}>{props.groupName}</h1>
            </div>
            <div className={`row g-4 ${remainder !== 0 ? "justify-content-center" : ""}`}>
                {props.members && props.members.map((member, index) => (
                    <div className={`col-lg-4 col-md-6 wow fadeInUp`} data-wow-delay={`${0.1 + index * 0.2}s`}
                         key={index}>
                        <div className="service-item position-relative h-100">
                            <div className="service-text rounded p-5">
                                <img className="mb-4" src={member.image} width="250" alt={member.name}/>
                                <h5 className="mb-3">{member.name}</h5>
                                <p className="mb-0">{member.role}</p>
                            </div>
                            {member.contact && (
                                <div className="service-btn rounded-0 rounded-bottom">
                                    <a className="text-primary fw-medium" href={member.contact}>
                                        Contact<i className="bi bi-chevron-double-right ms-2"></i>
                                    </a>
                                </div>
                            )}
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
}