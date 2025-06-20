!(function (e) {
    "use strict";
    var i = function (i) {
            (this.canRun = !0),
                (this.init = function () {
                    (this.$slider_wrapper = e(".reyEl-productGrid", i)),
                        (this.$slider = e(
                            "> .splide, .reyajfilter-before-products > .splide",
                            this.$slider_wrapper
                        )),
                        this.$slider.length &&
                            ((this.$slides = e(".splide__slide", this.$slider)),
                            this.getConfig(),
                            this.makeSlider());
                }),
                (this.getConfig = function () {
                    if (
                        ((this.config = JSON.parse(
                            this.$slider_wrapper.attr(
                                "data-carousel-settings"
                            ) || "{}"
                        )),
                        (this.sliderConfig = {
                            type: this.config.infinite
                                ? "loop"
                                : this.config.type,
                            rewind: !0,
                            perPage: parseInt(this.config.slides_to_show) || 2,
                            autoplay: this.config.autoplay,
                            interval: parseInt(this.config.autoplaySpeed),
                            gap: 0,
                            speed: parseInt(this.config.speed),
                            arrows: !1,
                            pagination: !1,
                            breakpoints: {},
                            padding: this.getPadding(),
                            autoWidth: !0,
                        }),
                        this.config.slides_to_move &&
                            (this.sliderConfig.perMove = parseInt(
                                this.config.slides_to_move
                            )),
                        (this.$slider.hasClass("--disable-desktop") ||
                            this.$slides.length <= this.sliderConfig.perPage) &&
                            rey.vars.is_desktop)
                    )
                        return (this.canRun = !1);
                    if (
                        "undefined" != typeof elementorFrontend &&
                        elementorFrontend.config &&
                        elementorFrontend.config.breakpoints
                    ) {
                        if (
                            ((this.elementorBreakpoints =
                                elementorFrontend.config.breakpoints),
                            (this.sliderConfig.breakpoints[
                                this.elementorBreakpoints.lg
                            ] = {
                                perPage:
                                    parseInt(
                                        this.config.slides_to_show_tablet
                                    ) || 2,
                                padding: this.getPadding("tablet"),
                            }),
                            (this.$slider.hasClass("--disable-tablet") ||
                                this.$slides.length <=
                                    this.sliderConfig.breakpoints[
                                        this.elementorBreakpoints.lg
                                    ].perPage) &&
                                rey.vars.is_tablet)
                        )
                            return (this.canRun = !1);
                        if (
                            ((this.sliderConfig.breakpoints[
                                this.elementorBreakpoints.md
                            ] = {
                                type: this.config.infinite_mobile
                                    ? "loop"
                                    : this.sliderConfig.type,
                                perPage:
                                    parseInt(
                                        this.config.slides_to_show_mobile
                                    ) || 2,
                                padding: this.getPadding("mobile"),
                            }),
                            (this.$slider.hasClass("--disable-mobile") ||
                                this.$slides.length <=
                                    this.sliderConfig.breakpoints[
                                        this.elementorBreakpoints.md
                                    ].perPage) &&
                                rey.vars.is_mobile)
                        )
                            return (this.canRun = !1);
                        this.config.free_drag &&
                            this.config.free_drag.length &&
                            (-1 !== this.config.free_drag.indexOf("desktop") &&
                                (this.sliderConfig.drag = "free"),
                            -1 !== this.config.free_drag.indexOf("tablet") &&
                                (this.sliderConfig.breakpoints[
                                    this.elementorBreakpoints.lg
                                ].drag = "free"),
                            -1 !== this.config.free_drag.indexOf("mobile") &&
                                (this.sliderConfig.breakpoints[
                                    this.elementorBreakpoints.md
                                ].drag = "free"));
                    }
                }),
                (this.makeSlider = function () {
                    this.canRun &&
                        (rey.frontend.inView({
                            target: this.$slider[0],
                            cb: (e) => {
                                this.handleSideOffset(
                                    e.target,
                                    e.boundingClientRect.left,
                                    e.boundingClientRect.right
                                ),
                                    rey.components.slider({
                                        element: e.target,
                                        config: this.sliderConfig,
                                        delay: this.config.delayInit,
                                        customArrows: this.config.customArrows,
                                    });
                            },
                            once: !0,
                        }),
                        window.addEventListener(
                            "resize",
                            rey.util.debounce(() => {
                                this.handleSideOffsetWinResize();
                            }, 500)
                        ));
                }),
                (this.handleSideOffsetWinResize = function () {
                    if (
                        this.config.side_offset &&
                        window.matchMedia("(min-width: 1025px)").matches
                    ) {
                        var e = this.$slider[0];
                        if (e.getAttribute("data-side-offset-loaded")) {
                            e.style.removeProperty("--offset-m-left"),
                                e.style.removeProperty("--offset-m-right");
                            var i = e.getBoundingClientRect();
                            this.handleSideOffset(e, i.left, i.right);
                        }
                    }
                }),
                (this.handleSideOffset = function (e, i, t) {
                    if (!this.config.side_offset) return;
                    if (!window.matchMedia("(min-width: 1025px)").matches)
                        return;
                    const s = () => {
                            const t = i;
                            e.style.setProperty("--offset-m-left", `${t}px`);
                        },
                        r = () => {
                            const i = window.innerWidth - t;
                            e.style.setProperty(
                                "--offset-m-right",
                                `calc(${i}px - var(--scrollbar-width, 0px)`
                            );
                        };
                    ("left" !== this.config.side_offset &&
                        "both" !== this.config.side_offset) ||
                        (rey.vars.is_rtl ? r() : s()),
                        ("right" !== this.config.side_offset &&
                            "both" !== this.config.side_offset) ||
                            (rey.vars.is_rtl ? s() : r()),
                        e.setAttribute("data-side-offset-loaded", "true");
                }),
                (this.getPadding = function (i) {
                    var t = {};
                    if (this.config.side_offset) return t;
                    var s = {};
                    return (
                        (s =
                            i && this.config["carousel_padding_" + i]
                                ? this.config["carousel_padding_" + i]
                                : this.config.carousel_padding),
                        e.isEmptyObject(s) ||
                            e.each(
                                ["top", "right", "bottom", "left"],
                                function (e, i) {
                                    s[i] &&
                                        (t[i] =
                                            "px" !== s.unit
                                                ? s[i] + s.unit
                                                : parseInt(s[i]));
                                }
                            ),
                        t
                    );
                }),
                this.init();
        },
        t = function (e) {
            new i(e);
        },
        s = function (i) {
            var t = e(".rey-pg-loadmore", i);
            if (t.length) {
                var s = JSON.parse(t.attr("data-config") || "{}");
                if (s.element_id && s.qid) {
                    setTimeout(function () {
                        t.addClass("--visible");
                    }, 1e3);
                    var r = 0,
                        n = s.offset;
                    t.on("click", function (e) {
                        e.preventDefault(),
                            t.addClass("--loading"),
                            rey.ajax.request("product_grid_load_more", {
                                data: {
                                    element_id: s.element_id,
                                    qid: s.qid,
                                    limit: s.limit,
                                    offset: n,
                                    max: s.max,
                                    options: s.options,
                                },
                                cb: function (e) {
                                    if (e.success) {
                                        if (
                                            (r === s.max - 1 &&
                                                t.addClass("--disabled"),
                                            !e.data)
                                        )
                                            return (
                                                console.log(
                                                    "Empty element data."
                                                ),
                                                void t
                                                    .addClass("--disabled")
                                                    .removeClass("--loading")
                                            );
                                        var o = document.createElement("div");
                                        o.innerHTML = e.data;
                                        var d =
                                            o.querySelectorAll("li.product");
                                        if (d.length) {
                                            var a =
                                                i[0].querySelector(
                                                    "ul.products"
                                                );
                                            d.forEach((e) => {
                                                a.append(e);
                                            }),
                                                rey.hooks.doAction(
                                                    "product/loaded",
                                                    d
                                                ),
                                                t.removeClass("--loading"),
                                                r++,
                                                (n = s.limit + n);
                                        } else
                                            t.addClass(
                                                "--disabled"
                                            ).removeClass("--loading");
                                    }
                                },
                            });
                    });
                }
            }
        };
    rey.hooks.addAction("elementor/element/lazy_loaded", function (e, i, t) {
        -1 !==
            [
                "reycore-product-grid.carousel",
                "reycore-product-grid.mini",
                "reycore-product-grid.default",
            ].indexOf(t) &&
            rey.hooks.doAction(
                "product/loaded",
                e.querySelectorAll("li.product")
            );
    }),
        rey.hooks.addAction("elementor/init", function (e) {
            e.registerElement({ name: "reycore-product-grid.carousel", cb: t }),
                e.registerElement({
                    name: "reycore-product-grid.default",
                    cb: s,
                }),
                e.registerElement({ name: "reycore-product-grid.mini", cb: s });
        });
})(jQuery);
