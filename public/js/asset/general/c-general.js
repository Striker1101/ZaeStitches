!(function () {
    "use strict";
    var e = function () {
        (this.init = function () {
            rey.hooks.addAction("first_interaction", () => {
                this.onFirstInteraction();
            }),
                rey.hooks.doAction("reycore/init", this);
        }),
            (this.onFirstInteraction = function () {
                "undefined" != typeof reyParams &&
                    Object.keys(reyParams).length &&
                    (this.lazyStyleSheets(),
                    this.markTop(),
                    this.dirAware(),
                    this.emptyElementsCheck(),
                    this.doCachedMenus(),
                    this.getHeights(),
                    this.loadLazyAssets(),
                    this.events());
            }),
            (this.events = function () {
                document
                    .querySelectorAll(
                        '.js-scroll-to[data-target^="#"], .js-scroll-to[href^="#"], .js-scroll-to > a[href^="#"], .--scrollto > a[href^="#"]'
                    )
                    .forEach((e) => {
                        e.addEventListener("click", (e) => {
                            e.preventDefault();
                            var t =
                                e.currentTarget.getAttribute("data-target") ||
                                e.currentTarget.getAttribute("href") ||
                                "";
                            if (t) {
                                var r = document.querySelector(t);
                                if (r) {
                                    var n = rey.dom.offset(r).top;
                                    rey.elements.header &&
                                        rey.elements.header.classList.contains(
                                            "header-pos--fixed"
                                        ) &&
                                        (n -= rey.elements.header.outerHeight),
                                        (n -= 50),
                                        isNaN(n) ||
                                            window.scrollTo({
                                                top: n,
                                                behavior: "smooth",
                                            });
                                }
                            }
                        });
                    }),
                    document
                        .querySelectorAll("a.js-back-button, .js-back-button a")
                        .forEach((e) => {
                            e.addEventListener("click", (e) => {
                                e.preventDefault(), window.history.back();
                            });
                        }),
                    document
                        .querySelectorAll(
                            ".rey-postSocialShare a[data-share-props]"
                        )
                        .forEach((e) => {
                            e.addEventListener("click", (e) => {
                                e.preventDefault();
                                var t = JSON.parse(
                                    e.currentTarget.getAttribute(
                                        "data-share-props"
                                    ) || "{}"
                                );
                                window.open(
                                    e.currentTarget.getAttribute("href"),
                                    t.name || "",
                                    t.size || "width=550,height=550"
                                );
                            });
                        }),
                    window.addEventListener(
                        "scroll",
                        rey.util.debounce(this.markTop, 200)
                    ),
                    rey.hooks.addAction(
                        "reycore/ajax_response",
                        function (e, t) {
                            t.data &&
                                "undefined" != typeof SimpleScrollbar &&
                                SimpleScrollbar.initAll();
                        }
                    );
            }),
            (this.lazyStyleSheets = function () {
                var e = document.querySelectorAll(
                    `link[${reyParams.lazy_attribute}]`
                );
                if (e.length) {
                    var t = 0;
                    e.forEach((r, n) => {
                        var a = function (r) {
                            e.length - 1 === t &&
                                (rey.___.lazyStylesheets = !0),
                                t++;
                        };
                        (r.onload = a),
                            (r.onerror = a),
                            r.setAttribute(
                                "href",
                                r.getAttribute(reyParams.lazy_attribute)
                            );
                    });
                } else rey.___.lazyStylesheets = !0;
            }),
            (this.loadLazyAssets = function () {
                rey.vars.is_edit_mode ||
                    Object.keys(reyParams.lazy_assets).forEach((e) => {
                        document.querySelectorAll(e).length &&
                            rey.assets.lazyAssets(reyParams.lazy_assets[e]);
                    });
            }),
            (this.emptyElementsCheck = function () {
                var e = document.querySelectorAll(reyParams.check_for_empty);
                e.length &&
                    rey.frontend.inView({
                        target: e,
                        cb: function (e) {
                            var t = e.target;
                            t.children.length || t.classList.add("--empty");
                        },
                        once: !0,
                    });
            }),
            (this.markTop = function () {
                rey.elements.body.toggleAttribute(
                    "data-at-top",
                    !window.pageYOffset > 0
                );
            }),
            (this.dirAware = function () {
                var e = 0;
                if (reyParams.core.js_params.dir_aware) {
                    var t = function () {
                        var t = window.pageYOffset;
                        t > e
                            ? rey.elements.body.setAttribute(
                                  "data-direction",
                                  "down"
                              )
                            : rey.elements.body.setAttribute(
                                  "data-direction",
                                  "up"
                              ),
                            (e = t <= 0 ? 0 : t);
                    };
                    window.addEventListener(
                        "scroll",
                        rey.util.debounce(
                            t,
                            reyParams.core.js_params.sticky_debounce
                        )
                    ),
                        t();
                }
            }),
            (this.getHeights = function () {
                var e = document.querySelectorAll(".js-get-height");
                e.length &&
                    rey.frontend.inView({
                        target: e,
                        cb: function (e) {
                            var t = e.target,
                                r = e.boundingClientRect.height;
                            r < 1 &&
                                t.childNodes.forEach((e) => {
                                    (1 === t.childNodes.length &&
                                        e.classList.contains("--no-h")) ||
                                        (r += e.offsetHeight);
                                }),
                                r && t.style.setProperty("--height", r + "px");
                        },
                        once: !0,
                    });
            }),
            (this.doCachedMenus = function () {
                rey.frontend.inView({
                    target: document.querySelectorAll(
                        'ul[data-menu-qid]:not([data-menu-qid=""])'
                    ),
                    cb: function (e) {
                        var t = e.target;
                        t.querySelectorAll(
                            ".o-id-" + t.getAttribute("data-menu-qid")
                        ).forEach((e) => {
                            rey.dom
                                .parents(e, ".current-menu-ancestor")
                                .forEach((e) => {
                                    e.classList.add("current-menu-item");
                                }),
                                e.classList.add("current-menu-item");
                        });
                    },
                    once: !0,
                });
            }),
            this.init();
    };
    document.addEventListener("rey-DOMContentLoaded", function (t) {
        t.detail.logEvents &&
            console.log(
                `ReyCore started on "rey-DOMContentLoaded" after "${t.detail.event}" event.`
            ),
            new e();
    });
})();
