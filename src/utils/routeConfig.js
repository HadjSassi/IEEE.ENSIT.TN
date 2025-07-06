export const getRouteConfig = (pathname) => {
    switch (pathname) {
        case "/cs":
            return {
                logoSrc: "img/logos/cs.png",
                navbarClass: "cs-page",
                buttonClass: "btn-warning",
            };
        default:
            return {
                logoSrc: "/img/logos/ieee%20(3).png",
                navbarClass: "",
                buttonClass: "btn-primary",
            };
    }
};