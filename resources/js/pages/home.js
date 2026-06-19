export function initHomeHover() {
    const projectRows = document.querySelectorAll(".project-row");

    if (projectRows.length > 0) {
        projectRows.forEach((row) => {
            const img = row.querySelector(".hover-image");
            if (img) {
                row.addEventListener("mousemove", (e) => {
                    const imgWidth = img.offsetWidth || 320;
                    const imgHeight = img.offsetHeight || 220;
                    img.style.left = `${e.clientX - imgWidth / 2}px`;
                    img.style.top = `${e.clientY - imgHeight / 2}px`;
                });
            }
        });
    }
}
