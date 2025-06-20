!(function () {
    "use strict";
    var e = function (e) {
        var t = e[0] || document;
        if (
            t.classList.contains("p-ani--show") ||
            t.classList.contains("p-ani--hide")
        ) {
            var n = t.querySelector(".elementor-heading-title");
            if (n) {
                var i = (e, t) => {
                    e.style.setProperty("--el-height", t + "px");
                };
                rey.frontend.inView({
                    target: n,
                    once: !0,
                    cb: function (e) {
                        i(e.target, e.boundingClientRect.height);
                    },
                }),
                    window.addEventListener(
                        "resize",
                        rey.util.debounce((e) => {
                            i(n, n.offsetHeight);
                        }, 200)
                    );
            }
        }
        var o = {
            column: ".elementor-column",
            section: ".elementor-top-section",
            container: ".e-con",
            "top-container": ".e-con-top",
        };
        Object.keys(o).forEach((e) => {
            var n = t.closest(".p-trg--" + e);
            if (n) {
                var i = n.closest(o[e]);
                i && i.classList.add(e + "-p-trg");
            }
        });
    };
    rey.hooks.addAction("elementor/init", function (t) {
        t.registerElement({ name: "heading.default", cb: e });
    }),
        jQuery(document).on("jet-filter-content-rendered", function (t, n) {
            n.find(
                '.elementor-element[data-widget_type="heading.default"]'
            ).each(function (t, n) {
                e(jQuery(n));
            });
        });
})();
