export const getRouteConfig = (pathname) => {
    switch (pathname) {
        case "/cs":
            return {
                logoSrc: "img/logos/cs.png",
                navbarClass: "cs-page",
                buttonClass: "btn-warning",
            };
        case "/ras":
            return {
                logoSrc: "img/logos/ras.png",
                navbarClass: "ras-page",
                buttonClass: "btn-danger",
            };
        default:
            return {
                logoSrc: "/img/logos/ieee%20(3).png",
                navbarClass: "",
                buttonClass: "btn-primary",
            };
    }
};