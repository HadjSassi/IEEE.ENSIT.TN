import { useEffect } from "react";
export default function Statistics() {
    useEffect(() => {
        const animateValue = (element, start, end, duration) => {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                element.innerHTML = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        };

        animateValue(document.getElementById("membersValue"), 0, 220, 2000);
        animateValue(document.getElementById("partnershipValue"), 0, 5, 1500);
        animateValue(document.getElementById("projectsValue"), 0, 15, 2500);
        animateValue(document.getElementById("startingYearValue"), new Date().getFullYear(), 2013, 2500);    }, []);
    return <>
        <div id="aboutUSindex" className="container-xxl py-5 text-center">
            <div className="container">
                <div className="row g-0 feature-row">
                    <div className="col-md-6 col-lg-3">
                        <div className="feature-item border h-100 p-5">
                            <div className="btn-square bg-light rounded-circle mb-4" style={{ width: "64px", height: "64px" }}>
                                <img className="img-fluid" src="img/icon/members.png" alt="Icon" />
                            </div>
                            <h5 className="mb-3">Members</h5>
                            <h4 className="mb-0" id="membersValue">0</h4>
                        </div>
                    </div>
                    <div className="col-md-6 col-lg-3">
                        <div className="feature-item border h-100 p-5">
                            <div className="btn-square bg-light rounded-circle mb-4" style={{ width: "64px", height: "64px" }}>
                                <img className="img-fluid" src="img/icon/partnership.jpg" alt="Icon" />
                            </div>
                            <h5 className="mb-3">Partnership</h5>
                            <h4 className="mb-0" id="partnershipValue">0</h4>
                        </div>
                    </div>
                    <div className="col-md-6 col-lg-3">
                        <div className="feature-item border h-100 p-5">
                            <div className="btn-square bg-light rounded-circle mb-4" style={{ width: "64px", height: "64px" }}>
                                <img className="img-fluid" src="img/icon/year.png" alt="Icon" />
                            </div>
                            <h5 className="mb-3">Year</h5>
                            <h4 className="mb-0" id="startingYearValue">0</h4>
                        </div>
                    </div>
                    <div className="col-md-6 col-lg-3">
                        <div className="feature-item border h-100 p-5">
                            <div className="btn-square bg-light rounded-circle mb-4" style={{ width: "64px", height: "64px" }}>
                                <img className="img-fluid" src="img/icon/icon-4.png" alt="Icon" />
                            </div>
                            <h5 className="mb-3">Projects</h5>
                            <h4 className="mb-0" id="projectsValue">0</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </>
}