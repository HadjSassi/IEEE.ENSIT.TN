import CarouselItem from "../atoms/CarouselItem";
import NavigationButton from "../atoms/buttons/NavigationButton";

export default function Carrousel() {
    return <>
            <div id="header-carousel" className="carousel slide carousel-fade" data-bs-ride="carousel">
                <div className="carousel-inner">
                    <CarouselItem
                        active={true}
                        backgroundImage={'img/0.png'}
                    />
                    <CarouselItem
                        left={false}
                        backgroundImage={'img/pic.jpg'}
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