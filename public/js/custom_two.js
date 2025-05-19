(function () {
    if (
        !window.matchMedia("(max-width: 1024px)").matches &&
        "IntersectionObserver" in window
    ) {
        var io = new IntersectionObserver((entries) => {
            window.reyScrollbarWidth =
                window.innerWidth - entries[0].boundingClientRect.width;
            document.documentElement.style.setProperty(
                "--scrollbar-width",
                window.reyScrollbarWidth + "px"
            );
            io.disconnect();
        });
        io.observe(document.documentElement);
    }
    let cw = parseInt(
        document.documentElement.getAttribute("data-container") || 1440
    );
    const sxl = function () {
        let xl;
        if (
            window.matchMedia(
                "(min-width: 1025px) and (max-width: " + cw + "px)"
            ).matches
        )
            xl = 1;
        // 1440px - 1025px
        else if (window.matchMedia("(min-width: " + (cw + 1) + "px)").matches)
            xl = 2; // +1440px
        document.documentElement.setAttribute("data-xl", xl || 0);
    };
    sxl();
    window.addEventListener("resize", sxl);
})();
