!(function (e) {
    "use strict";
    var t = function (t) {
        if (!t.is("[data-lazy-load]")) {
            var a = e(".reyEl-bPostGrid", t);
            if (a.length) {
                var s;
                (s = !1),
                    rey.vars.elementor_edit_mode ||
                        (rey.vars.is_desktop &&
                            a.closest(".reyEl-bPostGrid--1").length) ||
                        (rey.vars.is_tablet &&
                            a.closest(".reyEl-bPostGrid-tablet--1").length) ||
                        (rey.vars.is_mobile &&
                            a.closest(".reyEl-bPostGrid-mobile--1").length) ||
                        (a.hasClass("--masonry") &&
                            void 0 !== e.fn.masonry &&
                            rey.util.imagesLoaded(a, function () {
                                s ||
                                    ((s = a.masonry({
                                        itemSelector: ".reyEl-bPostGrid-item",
                                        percentPosition: !0,
                                        transitionDuration: 0,
                                        isInitLayout: !1,
                                    })).on("layoutComplete", function () {
                                        s.addClass("--msnry-initialised");
                                    }),
                                    s.masonry());
                            }));
                var i = function (t) {
                    var a = {};
                    return (
                        e.isEmptyObject(t) ||
                            e.each(
                                ["top", "right", "bottom", "left"],
                                function (e, s) {
                                    if (t[s]) {
                                        var i = parseInt(t[s]);
                                        i &&
                                            (a[s] =
                                                "px" !== t.unit
                                                    ? i + t.unit
                                                    : i);
                                    }
                                }
                            ),
                        a
                    );
                };
                !(function () {
                    var s = JSON.parse(
                        a.attr("data-carousel-settings") || "{}"
                    );
                    if (!e.isEmptyObject(s)) {
                        var r = s.gap && s.gap.size ? parseInt(s.gap.size) : 0,
                            o = {
                                type: s.infinite ? "loop" : "slide",
                                rewind: !0,
                                autoplay: s.autoplay,
                                interval: parseInt(s.autoplay_speed),
                                perPage: parseInt(s.slides_to_show) || 2,
                                arrows: !1,
                                pagination: s.pagination,
                                speed: parseInt(s.speed),
                                gap: r,
                                direction: s.direction,
                                pauseOnFocus: s.pause_on_hover,
                                pauseOnHover: s.pause_on_hover,
                                padding: i(s.carousel_padding),
                                breakpoints: {
                                    1024: {
                                        perPage:
                                            parseInt(s.slides_to_show_mobile) ||
                                            parseInt(s.slides_to_show),
                                        gap:
                                            s.gap_tablet && s.gap_tablet.size
                                                ? parseInt(s.gap_tablet.size)
                                                : r / 2,
                                        padding: i(s.carousel_padding_tablet),
                                    },
                                    767: {
                                        perPage:
                                            parseInt(s.slides_to_show_tablet) ||
                                            parseInt(s.slides_to_show),
                                        gap:
                                            s.gap_mobile && s.gap_mobile.size
                                                ? parseInt(s.gap_mobile.size)
                                                : r / 2,
                                        padding: i(s.carousel_padding_mobile),
                                    },
                                },
                                autoWidth: !0,
                            };
                        t.hasClass("--disable-desktop") &&
                            ((o.breakpoints[2560] = {}),
                            (o.breakpoints[2560].destroy = !0)),
                            t.hasClass("--disable-tablet") &&
                                (o.breakpoints[1024].destroy = !0),
                            t.hasClass("--disable-mobile") &&
                                (o.breakpoints[767].destroy = !0),
                            rey.frontend.inView({
                                target: a[0],
                                cb: (e) => {
                                    rey.components.slider({
                                        element: e.target,
                                        config: o,
                                        delay: 500,
                                        createArrows: s.createArrows,
                                    });
                                },
                                once: !0,
                            });
                    }
                })();
            }
        }
    };
    rey.hooks.addAction("elementor/init", function (e) {
        e.registerElement({ name: "reycore-basic-post-grid.default", cb: t }),
            e.registerElement({
                name: "reycore-basic-post-grid.basic2",
                cb: t,
            }),
            e.registerElement({ name: "reycore-basic-post-grid.inner", cb: t });
    });
})(jQuery);
