import { initMobileMenu } from "./components/mobile-menu";
import { initHomeHover } from "./pages/home";
import { initMap } from "./pages/map";

document.addEventListener("DOMContentLoaded", () => {
    initMobileMenu();
    initHomeHover();
    initMap();
});
