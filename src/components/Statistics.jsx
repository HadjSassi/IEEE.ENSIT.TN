import { useEffect } from "react";
import StatisticItem from "../atoms/StatisticItem";
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
                    <StatisticItem
                        icon="img/icon/members.png"
                        text="Members"
                        initValue={0}
                        id="membersValue"
                    />
                    <StatisticItem
                        icon="img/icon/partnership.jpg"
                        text="Partnership"
                        initValue={0}
                        id="partnershipValue"
                    />
                    <StatisticItem
                        icon="img/icon/year.png"
                        text="Year"
                        initValue={0}
                        id="startingYearValue"
                    />
                    <StatisticItem
                        icon="img/icon/icon-4.png"
                        text="Projects"
                        initValue={0}
                        id="projectsValue"
                    />
                </div>
            </div>
        </div>
    </>
}