!(function () {
    "use strict";
    var e = function (e) {
        (this.data = !1),
            (this.isotopeGrid = !1),
            (this.isotopeLoaded = !1),
            (this.tabCats = []),
            (this.loadedTabs = []),
            (this.elements = {}),
            (this.options = Object.assign(
                { startActive: !1, useLocalStorage: !0 },
                e || {}
            )),
            (this.init = function () {
                "IntersectionObserver" in window &&
                    ((this.elements.wrapper = document.getElementById(
                        "rey-demoPanel-wrapper"
                    )),
                    this.elements.wrapper &&
                        ((this.itemsTemplate =
                            rey.template("rey-demos-template")),
                        (this.elements.panelWrapper =
                            this.elements.wrapper.querySelector(
                                ".rey-demoPanel-panelWrapper"
                            )),
                        (this.elements.panel =
                            this.elements.wrapper.querySelector(
                                ".rey-demoPanel"
                            )),
                        (this.elements.overlay =
                            this.elements.wrapper.querySelector(
                                ".rey-demoPanel-overlay"
                            )),
                        (this.elements.search =
                            this.elements.wrapper.querySelector(
                                ".js-demoPanel-search"
                            )),
                        (this.elements.tabLinksWrapper =
                            this.elements.wrapper.querySelector(
                                ".rey-demoPanel-tabs"
                            )),
                        (this.elements.tabLinks =
                            this.elements.tabLinksWrapper.querySelectorAll(
                                "a"
                            )),
                        (this.elements.tabs =
                            this.elements.wrapper.querySelectorAll(
                                ".rey-demoPanel-contentTab"
                            )),
                        this.elements.tabs.length &&
                            (this.getData(),
                            this.events(),
                            this.options.startActive &&
                                (this.activate(), this.open()))));
            }),
            (this.initPanel = function () {}),
            (this.events = function () {
                var e =
                    this.elements.wrapper.querySelector(".js-rey-moreDemos");
                e &&
                    e.addEventListener("click", (e) => {
                        e.preventDefault(), this.open();
                    }),
                    document
                        .querySelectorAll(
                            '.menu-item > a[href="#open-demo-bar"]'
                        )
                        .forEach((e) => {
                            e.addEventListener("click", (e) => {
                                e.preventDefault(), this.open();
                            });
                        }),
                    this.elements.wrapper
                        .querySelectorAll(".demoPanel-sizeControls")
                        .forEach((e) => {
                            e.addEventListener("click", (e) => {
                                e.preventDefault();
                                var t = parseInt(
                                        e.currentTarget.getAttribute(
                                            "data-sizing"
                                        )
                                    ),
                                    s = parseInt(
                                        this.elements.panel.getAttribute(
                                            "data-size"
                                        )
                                    );
                                this.elements.panel.setAttribute(
                                    "data-size",
                                    Math.min(Math.max(s + t, 1), 3)
                                );
                            });
                        }),
                    this.elements.wrapper
                        .querySelectorAll(
                            ".rey-demoPanel-close, .rey-demoPanel-overlay"
                        )
                        .forEach((e) => {
                            e.addEventListener("click", (e) => {
                                e.preventDefault(), this.close();
                            });
                        }),
                    this.elements.wrapper
                        .querySelectorAll(".rey-demoPanel-remove")
                        .forEach((e) => {
                            e.addEventListener("click", (e) => {
                                e.preventDefault(), this.deactivate();
                            });
                        }),
                    this.elements.tabLinks.forEach((e) => {
                        e.addEventListener("click", (e) => {
                            e.preventDefault();
                            var t = this.elements.wrapper.querySelector(
                                `.rey-demoPanel-contentTab[data-tab="${e.currentTarget.getAttribute(
                                    "data-tab"
                                )}"]`
                            );
                            t &&
                                (this.elements.tabLinks.forEach((e) => {
                                    e.classList.remove("--active");
                                }),
                                this.elements.tabs.forEach((e) => {
                                    e.classList.remove("--active");
                                }),
                                e.currentTarget.classList.add("--active"),
                                t.classList.add("--active"),
                                this.populateTab(t));
                        });
                    }),
                    document.addEventListener("keyup", (e) => {
                        27 == e.keyCode && this.isOpen() && this.close();
                    }),
                    rey.vars.is_desktop &&
                        this.elements.panelWrapper
                            .querySelectorAll("[data-rey-demos-tooltip]")
                            .forEach((e) => {
                                var t;
                                e.addEventListener("mouseenter", (s) => {
                                    t ||
                                        ((t =
                                            document.createElement(
                                                "div"
                                            )).classList.add(
                                            "rey-demos-tooltip"
                                        ),
                                        (t.textContent =
                                            e.getAttribute(
                                                "data-rey-demos-tooltip"
                                            ) || ""),
                                        rey.elements.body.append(t));
                                }),
                                    e.addEventListener("mouseleave", (e) => {
                                        t && t.remove(), (t = null);
                                    });
                            }),
                    this.elements.wrapper
                        .querySelector(".js-demoPanel-handler")
                        .addEventListener("click", (e) => {
                            var t = parseInt(
                                    this.elements.panel.getAttribute(
                                        "data-size"
                                    )
                                ),
                                s = 3 === t ? t - 1 : t + 1;
                            this.elements.panel.setAttribute("data-size", s);
                        }),
                    this.elements.search &&
                        this.elements.search
                            .querySelector('input[type="search"]')
                            .addEventListener(
                                "input",
                                rey.util.debounce((e) => {
                                    var t = new RegExp(e.target.value, "gi");
                                    this.isotopeGrid &&
                                        this.isotopeGrid.arrange({
                                            filter: (e, s) =>
                                                !t ||
                                                s
                                                    .getAttribute(
                                                        "data-keywords"
                                                    )
                                                    .match(t),
                                        });
                                }, 200)
                            );
            }),
            (this.isOpen = function () {
                return this.elements.wrapper.classList.contains("--active");
            }),
            (this.activate = function () {
                this.elements.wrapper.classList.remove("--loading");
            }),
            (this.deactivate = function () {
                this.elements.wrapper.remove(),
                    document
                        .querySelectorAll(".rey-demos-tooltip")
                        .forEach((e) => {
                            e.remove();
                        });
            }),
            (this.open = function () {
                var e = this.elements.tabLinksWrapper.querySelector(
                    'a[data-tab="demos"]'
                );
                e && e.click(),
                    rey.elements.body.classList.add("--active-demo-panel"),
                    this.elements.wrapper.classList.add("--active");
            }),
            (this.close = function () {
                rey.elements.body.classList.remove("--active-demo-panel"),
                    this.elements.wrapper.classList.remove("--active");
            }),
            (this.getData = function () {
                if (
                    this.options.useLocalStorage &&
                    rey.util.ls.get("rey_demos_bar")
                )
                    return (
                        (this.data = rey.util.ls.get("rey_demos_bar")),
                        void this.activate()
                    );
                rey.ajax.request("get_demos_data", {
                    cb: (e) => {
                        e &&
                            e.success &&
                            void 0 !== e.data &&
                            (this.options.useLocalStorage &&
                                rey.util.ls.set("rey_demos_bar", e.data, 864e5),
                            (this.data = e.data),
                            this.activate());
                    },
                });
            }),
            (this.populateTab = function (e) {
                var t = e.getAttribute("data-tab");
                if (void 0 !== this.data[t]) {
                    if (-1 === this.loadedTabs.indexOf(t)) {
                        var s = this.itemsTemplate({
                            total: parseInt(this.data[t].total),
                            items: this.data[t].items,
                        });
                        e.append(rey.dom.createElementFromHTML(s)),
                            this.loadedTabs.push(t);
                    }
                    this.checkSupports(t, e),
                        this.loadImages(e),
                        this.startIsotope(e);
                }
            }),
            (this.checkSupports = function (e, t) {
                this.elements.search &&
                    this.elements.search.classList.remove("--active");
                var s = this.elements.wrapper.querySelector(
                    '.rey-demoPanel-tabs a[data-tab="' + e + '"]'
                );
                if (s) {
                    var a = s.getAttribute("data-supports") || "";
                    (a = a.replace(/\s/g, "").split(",")) &&
                        (-1 !== a.indexOf("search") &&
                            this.elements.search &&
                            this.elements.search.classList.add("--active"),
                        -1 !== a.indexOf("categories") &&
                            this.createCategories(e, t));
                }
            }),
            (this.createCategories = function (e, t) {
                var s = [];
                if (void 0 === this.tabCats[e]) {
                    t.querySelectorAll(
                        '.rey-demoPanel-item:not([data-categories=""])'
                    ).forEach((e) => {
                        e.getAttribute("data-categories")
                            .split(",")
                            .forEach((e) => {
                                -1 === s.indexOf(e) && s.push(e);
                            });
                    });
                    var a = rey.template("rey-demos-categories")(s);
                    t.prepend(rey.dom.createElementFromHTML(a)),
                        (this.tabCats[e] = !0),
                        t
                            .querySelectorAll(".rey-demoPanel-ctgItem")
                            .forEach((e) => {
                                e.addEventListener("click", (e) => {
                                    var t =
                                            e.currentTarget.getAttribute(
                                                "data-category"
                                            ),
                                        s = new RegExp(t, "gi"),
                                        a =
                                            this.elements.search &&
                                            this.elements.search.querySelector(
                                                'input[type="search"]'
                                            );
                                    a && (a.value = ""),
                                        rey.dom
                                            .getSiblings(
                                                e.currentTarget,
                                                ".rey-demoPanel-ctgItem"
                                            )
                                            .forEach((e) => {
                                                e.classList.remove("--active");
                                            }),
                                        e.currentTarget.classList.add(
                                            "--active"
                                        ),
                                        this.isotopeGrid &&
                                            this.isotopeGrid.arrange({
                                                filter: (e, t) =>
                                                    t
                                                        .getAttribute(
                                                            "data-categories"
                                                        )
                                                        .match(s),
                                            });
                                });
                            });
                }
            }),
            (this.loadIsotope = function () {
                this.isotopeLoaded ||
                    new Promise((e, t) => {
                        var s = document.createElement("script");
                        const a =
                            "https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js";
                        (s.src = a),
                            (s.id = "rey-demos-isotope-js"),
                            (s.async = !1),
                            (s.onload = () => {
                                e(a), (this.isotopeLoaded = !0);
                            }),
                            (s.onerror = () => {
                                t(a);
                            }),
                            document.body.appendChild(s);
                    });
            }),
            (this.startIsotope = function (e) {
                if ((this.loadIsotope(), "undefined" != typeof Isotope)) {
                    var t =
                        e ||
                        this.elements.tabs.filter((e) =>
                            e.matches(".--active")
                        );
                    if (t) {
                        var s = t.querySelector(".rey-demoPanel-contentItems");
                        s &&
                            (this.isotopeGrid = new Isotope(s, {
                                itemSelector: ".rey-demoPanel-item",
                                percentPosition: !0,
                                layoutMode: "masonry",
                            }));
                    }
                } else
                    setTimeout(() => {
                        this.startIsotope(e);
                    }, 350);
            }),
            (this.loadImages = function (e) {
                var t =
                    e ||
                    this.elements.tabs.filter((e) => e.matches(".--active"));
                if (t) {
                    var s = t.querySelectorAll(
                            ".rey-demoPanel-item:not(.--visible)"
                        ),
                        a = this.elements.wrapper.querySelector(
                            ".rey-demoPanel-content"
                        );
                    if (a && s.length) {
                        var r = new IntersectionObserver(
                            function (e) {
                                e.forEach((e) => {
                                    if (e.intersectionRatio > 0) {
                                        r.unobserve(e.target);
                                        var t = e.target.querySelector("img");
                                        t &&
                                            (t.setAttribute(
                                                "src",
                                                t.getAttribute("data-src")
                                            ),
                                            (t.onload = () => {
                                                e.target.classList.add(
                                                    "--visible"
                                                ),
                                                    i.isotopeGrid &&
                                                        i.isotopeGrid.layout();
                                            }));
                                    }
                                });
                            },
                            { root: a, rootMargin: "50px 0px", threshold: 0.01 }
                        );
                        s.forEach((e) => {
                            r.observe(e);
                        });
                        var i = this;
                    }
                }
            }),
            this.init();
    };
    document.addEventListener("rey-DOMContentLoaded", function (t) {
        rey.hooks.addAction("first_interaction", () => {
            setTimeout(() => {
                new e();
            }, 2e3);
        });
    });
})();
