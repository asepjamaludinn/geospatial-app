export function initMobileMenu() {
    const btnOpen = document.getElementById("mobile-menu-btn");
    const btnClose = document.getElementById("mobile-menu-close");
    const menu = document.getElementById("mobile-menu");
    const backdrop = document.getElementById("menu-backdrop");

    if (btnOpen && btnClose && menu && backdrop) {
        function openToggle() {
            backdrop.classList.remove("hidden");
            setTimeout(() => backdrop.classList.remove("opacity-0"), 10);
            menu.classList.add("is-open");
            document.body.style.overflow = "hidden";
            btnOpen.setAttribute("aria-expanded", "true");
        }

        function closeToggle() {
            backdrop.classList.add("opacity-0");
            menu.classList.remove("is-open");
            document.body.style.overflow = "";
            btnOpen.setAttribute("aria-expanded", "false");
            setTimeout(() => backdrop.classList.add("hidden"), 800);
        }

        btnOpen.addEventListener("click", openToggle);
        btnClose.addEventListener("click", closeToggle);
        backdrop.addEventListener("click", closeToggle);
    }
}
