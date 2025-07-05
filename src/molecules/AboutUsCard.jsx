import RoundedButton from "../atoms/buttons/RoundedButton";

export default function AboutUsCard(props) {
    return <>
        <div className={`container-xxl my-5 ${props.image}`}>
            <div className="container">
                <div className="row g-0">
                    {props.direction === 'left'? <div className="col-lg-6"></div>:<></>}
                    <div className="col-lg-6 pt-lg-5 wow fadeIn" data-wow-delay="1s">
                        <div className="bg-white rounded-top p-5 mt-lg-5">
                            <h1 className="display-6 mb-4 fw-bolder">About US</h1>
                            <h5 className="mb-4 text-black-50 text-center">
                                {props.descrition}
                            </h5>
                            <RoundedButton
                                text="Explore More"
                                link={props.link}
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </>
}