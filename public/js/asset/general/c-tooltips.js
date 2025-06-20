!(function () {
    "use strict";
    var t = function (t) {
            (this.refreshProps = !1),
                (this.horizontalRange = 0.5),
                (this.largeRange = 0.85),
                (this.smallRange = 0.15),
                (this.vars = {}),
                (this.timeout = null),
                rey.vars.is_desktop ||
                    ((this.largeRange = 0.75), (this.smallRange = 0.25)),
                (this.init = function () {
                    (this.item = t),
                        this.item.getAttribute("data-rey-tooltip-id") ||
                            (this.item.removeAttribute("title"),
                            (this.vars.isSlide = this.item.closest(".splide")),
                            (this.vars.isSidePanel =
                                this.item.closest(".rey-sidePanel")),
                            (this.vars.fixedContainer =
                                this.item.hasAttribute("data-fx-tooltip")),
                            (this.refreshProps =
                                this.vars.isSlide ||
                                this.vars.fixedContainer ||
                                this.vars.isSidePanel),
                            this.createID(),
                            this.createHolder(),
                            this.setInitialProperties(),
                            this.events(),
                            this.show());
                }),
                (this.createID = function () {
                    var t = this.item.getAttribute("data-tooltip-id");
                    if (t) return t;
                    void 0 === rey.___.tooltips && (rey.___.tooltips = 0),
                        (rey.___.tooltips += 1),
                        this.item.setAttribute(
                            "data-rey-tooltip-id",
                            rey.___.tooltips
                        ),
                        (this.id = rey.___.tooltips);
                }),
                (this.createHolder = function () {
                    var t = document.createElement("div");
                    t.classList.add("rey-tooltip-el"),
                        t.setAttribute("data-rey-tooltip-id", this.id),
                        t.setAttribute(
                            "data-source",
                            this.item.getAttribute("data-rey-tooltip-source") ||
                                ""
                        ),
                        document.body.appendChild(t),
                        (this.holder = t);
                    var e = this.item.getAttribute("data-tooltip-size");
                    e && this.holder.style.setProperty("--size", e + "px"),
                        this.setText();
                }),
                (this.setProperties = function () {
                    if (this.refreshProps) {
                        var t =
                            (e = this.item.getBoundingClientRect()).top +
                            window.scrollY;
                        (this.vars.fixedContainer || this.vars.isSidePanel) &&
                            (t -= rey.vars.adminBar);
                    } else {
                        var e;
                        t = (e = rey.dom.offset(this.item)).top;
                    }
                    var i = {
                            top: t,
                            left: e.left,
                            height: this.holder.offsetHeight,
                            "el-width": this.item.offsetWidth,
                            "el-height": this.item.offsetHeight,
                        },
                        s = document.body.offsetWidth;
                    i.left + this.holder.offsetWidth > s
                        ? (this.horizontalRange = 0.9)
                        : i.left <= 0 && (this.horizontalRange = 0.1),
                        (i["el-h"] = this.horizontalRange),
                        rey.dom.setProperties(i, this.holder);
                }),
                (this.setInitialProperties = function () {
                    this.setProperties();
                }),
                (this.events = function () {
                    (this.mouseEnterHandler =
                        this.mouseEnterHandler.bind(this)),
                        (this.mouseLeaveHandler =
                            this.mouseLeaveHandler.bind(this)),
                        (this.resizeHandler = rey.util.debounce(
                            this.resizeHandler.bind(this),
                            500
                        )),
                        (this.destroyHandler = this.destroyHandler.bind(this)),
                        this.item.addEventListener(
                            "mouseenter",
                            this.mouseEnterHandler
                        ),
                        this.item.addEventListener(
                            "mouseleave",
                            this.mouseLeaveHandler
                        ),
                        window.addEventListener("resize", this.resizeHandler),
                        document.addEventListener(
                            "reycore/ajaxfilters/start",
                            this.destroyHandler
                        );
                }),
                (this.mouseEnterHandler = function () {
                    this.timeout = setTimeout(() => {
                        this.show();
                    }, 50);
                }),
                (this.mouseLeaveHandler = function () {
                    this.hide(), clearTimeout(this.timeout);
                }),
                (this.resizeHandler = function () {
                    this.setProperties();
                }),
                (this.destroyHandler = function () {
                    this.destroy();
                }),
                (this.setText = function () {
                    this.holder.textContent =
                        this.item.getAttribute("data-rey-tooltip");
                }),
                (this.hide = function () {
                    this.holder.classList.remove("--visible");
                }),
                (this.destroy = function () {
                    this.item.removeEventListener(
                        "mouseenter",
                        this.mouseEnterHandler
                    ),
                        this.item.removeEventListener(
                            "mouseleave",
                            this.mouseLeaveHandler
                        ),
                        window.removeEventListener(
                            "resize",
                            this.resizeHandler
                        ),
                        document.removeEventListener(
                            "reycore/ajaxfilters/start",
                            this.destroyHandler
                        ),
                        this.holder.remove();
                }),
                (this.show = function () {
                    this.setText(),
                        this.holder.classList.add("--visible"),
                        this.refreshProps && this.setProperties();
                }),
                this.init();
        },
        e = function (e) {
            rey.vars.is_desktop &&
                (e = e || document)
                    .querySelectorAll(
                        "[data-rey-tooltip]:not([data-rey-tooltip=''])"
                    )
                    .forEach((e) => {
                        e.addEventListener(
                            "mouseenter",
                            function () {
                                new t(e);
                            },
                            { once: !0 }
                        );
                    });
        };
    document.addEventListener("rey-DOMContentLoaded", function () {
        e();
    }),
        rey.hooks.addAction("ajaxfilters/finished", function (t, i) {
            e(t),
                i &&
                    Object.keys(i).forEach((t) => {
                        var s = document.getElementById(i[t]);
                        e(s);
                    });
        }),
        rey.hooks.addAction("wishlist/display_content", function (t) {
            e(t);
        }),
        rey.hooks.addAction("product/loaded", function (t) {
            t.forEach((t) => {
                e(t);
            });
        }),
        rey.jquery.addEventListener("updated_checkout", function (t, i) {
            e();
        });
})();
