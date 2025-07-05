export default function CarouselItem(props) {
    const mergedProps = {
        ...CarouselItem.defaultProps,
        ...props
    };

    return <>
        <div className={`carousel-item ${mergedProps.active ? 'active' : ''}`}>
            <img className="w-100" src={mergedProps.backgroundImage} alt="Image"/>
            <div className="carousel-caption">
                <div className="container">
                    <div className={`row ${mergedProps.left?'justify-content-start':'justify-content-end'}`}>
                        <div className="col-lg-7 text-start">
                            <p className="fs-4 text-white animated slideInRight" dangerouslySetInnerHTML={{ __html: mergedProps.title }}></p>
                            <img className="display-1 text-white mb-4 animated slideInRight"
                                 src={mergedProps.logo} width="500" alt="Logo"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </>
}

CarouselItem.defaultProps = {
    title: 'IEEE <strong>ENSIT</strong> Student Branch',
    logo: 'img/logos/ieee%20(1).png',
    active: false,
    left: true,
};