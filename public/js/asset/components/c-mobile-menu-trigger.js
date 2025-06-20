document.addEventListener("rey-DOMContentLoaded", function () {
    document
        .querySelectorAll(".rey-mainNavigation.rey-mainNavigation--desktop")
        .forEach((e) => {
            var n = e.parentElement.querySelector(
                ".rey-mainNavigation-mobileBtn:not(.--prevent-main-mobile-nav)"
            );
            if (n) {
                var t = (t) => {
                    if (!rey.vars.is_global_section_mode) {
                        t.preventDefault();
                        var o = e.getAttribute("id");
                        void 0 !== rey.components.mainMenu
                            ? rey.hooks.doAction("headermenu/mobile/open", o, n)
                            : (rey.___.openMobileMenuID = o);
                    }
                };
                n.addEventListener("click", t),
                    n.addEventListener("touchstart", t);
            }
        });
});
