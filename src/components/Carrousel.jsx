import CarouselItem from "../atoms/CarouselItem";
import NavigationButton from "../atoms/buttons/NavigationButton";

export default function Carrousel(props) {
    return <>
            <div id="header-carousel" className="carousel slide carousel-fade" data-bs-ride="carousel">
                <div className="carousel-inner">
                    <CarouselItem
                        active={true}
                        backgroundImage={props.img1}
                    />
                    <CarouselItem
                        left={false}
                        backgroundImage={props.img2}
                        logo={props.logo}
                    />
                </div>
                <NavigationButton
                    class="carousel-control-prev"
                    text="Previous"
                />
                <NavigationButton
                    class="carousel-control-next"
                    text="Next"
                />
            </div>
    </>
}