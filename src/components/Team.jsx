import SectionTitle from "../atoms/SectionTitle";
import TeamItem from "../molecules/TeamItem";

export default function Team() {
    return (
        <div id="teamindex" className="container-xxl py-5 d-flex justify-content-center">
            <div className="container">
                <SectionTitle heading={'2023-2024 Mandate'} subHeading={'our Team'} />
                <div className="row g-4 justify-content-center">
                    <TeamItem
                        image="img/sb/elanoubli%20chair%20sb.jpg"
                        name="Elyanoubli Mohamed Amine"
                        post="Chairman"
                    />
                    <TeamItem
                        image="img/sb/molka%20vp%20sb.jpg"
                        name="Guesmi Molka"
                        post="Vice-Chair"
                        facebook="https://www.facebook.com/profile.php?id=100009455581309"
                        instagram="https://www.instagram.com/molka.guesmi"
                        linkedin="https://www.linkedin.com/in/molka-guesmi-112036220"
                    />
                    <TeamItem
                        image="img/sb/ilef%20sg%20sb.jpg"
                        name="Zeiri Ilef"
                        post="General Secretary"
                        facebook="https://www.facebook.com/ilef.zeiri"
                        instagram="https://www.instagram.com/ilefzeiri/"
                        linkedin="https://www.linkedin.com/in/ilef-zeiri-4821a1253/"
                    />
                    <TeamItem
                        image="img/sb/khalaf%20rh%20sb.jpg"
                        name="Nakbi Khalaf"
                        post="HR Manager"
                    />
                    <TeamItem
                        image="img/sb/mahdi.jpeg"
                        name="Hadj Sassi Mahdi"
                        post="Web Manager"
                        facebook="https://www.facebook.com/HadjSassiMahdiEzzedine"
                        instagram="https://www.instagram.com/hadjsassi.ezzedine.mahdi/"
                        linkedin="https://www.linkedin.com/in/mahdi-hadj-sassi/"
                    />
                    <TeamItem
                        image="img/sb/aziz%20web%20sb.jpg"
                        name="Guebsi Mohamed Aziz"
                        post="Webmaster"
                        facebook="https://www.facebook.com/aziz.zizoo.7?mibextid=D4KYlr"
                        instagram="https://instagram.com/aziz_gabsi_?igshid=MmU2YjMzNjRlOQ=="
                        linkedin="https://www.linkedin.com/in/gabsi-aziz-110490242"
                    />
                    <TeamItem
                        image="img/sb/oussema%20treso%20sb.jpg"
                        name="Touhemi Oussema"
                        post="Treasurer"
                    />
                </div>
            </div>
        </div>
    );
}