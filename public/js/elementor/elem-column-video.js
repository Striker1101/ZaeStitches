!(function (e) {
    "use strict";
    var o = function (o) {
        if (
            reyElementorFrontendParams.compatibilities.column_video &&
            o.hasClass("rey-colbg--video")
        ) {
            var n = { containers: [o[0]], lazyLoad: !1 },
                i = e(
                    "> .elementor-widget-wrap > .rey-background-video-container.--lazy-video",
                    o
                );
            if (
                o.hasClass("rey-animate-el") &&
                rey.vars.is_desktop &&
                !rey.vars.elementor_edit_mode
            )
                e(document).on(
                    "rey/elementor_column/animation_complete",
                    function (i, t, r) {
                        e(r).attr("data-id") === o.attr("data-id") &&
                            void 0 !== rey.components.videoHelper &&
                            rey.components.videoHelper(n).init();
                    }
                );
            else if (i.length) {
                var t = !1;
                rey.frontend.inView({
                    target: i[0],
                    cb: (e) => {
                        t ||
                            ((t = !0),
                            void 0 !== rey.components.videoHelper &&
                                rey.components.videoHelper(n).init());
                    },
                    once: !0,
                });
            } else
                void 0 !== rey.components.videoHelper &&
                    rey.components.videoHelper(n).init();
        }
    };
    rey.hooks.addAction("elementor/init", function (e) {
        e.registerElement({ name: "column", cb: o });
    });
})(jQuery);
