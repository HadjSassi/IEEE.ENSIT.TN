import SectionTitle from "../atoms/SectionTitle";
import TeamItem from "../molecules/TeamItem";

export default function Team({data}) {
    return (
        <div id="teamindex" className="container-xxl py-5 d-flex justify-content-center">
            <div className="container">
                <SectionTitle heading={'2023-2024 Mandate'} subHeading={'our Team'}/>
                <div className="row g-4 justify-content-center">
                    {data.map((member, index) => (
                        <TeamItem
                            key={index}
                            image={member.image}
                            name={member.name}
                            post={member.post}
                            facebook={member.facebook}
                            instagram={member.instagram}
                            linkedin={member.linkedin}
                        />
                    ))}
                </div>
            </div>
        </div>
    );
}