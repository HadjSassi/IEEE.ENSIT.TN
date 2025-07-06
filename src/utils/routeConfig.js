export const getRouteConfig = (pathname) => {
    switch (pathname) {
        case "/cs":
            return {
                logoSrc: "img/logos/cs.png",
                navbarClass: "cs-page",
                buttonClass: "btn-warning",
                faviconSrc: "img/logos/cs1.png",
            };
        case "/ras":
            return {
                logoSrc: "img/logos/ras.png",
                navbarClass: "ras-page",
                buttonClass: "btn-danger",
                faviconSrc: "img/logos/ras1.png",
            };
        default:
            return {
                logoSrc: "/img/logos/ieee%20(3).png",
                navbarClass: "",
                buttonClass: "btn-primary",
                faviconSrc: "img/logos/ieee%20(3)%20-%20Copy.png"
            };
    }
};