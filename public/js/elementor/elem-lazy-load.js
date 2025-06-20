!(function (e) {
    "use strict";
    var t = function (t, i) {
        var a = this;
        (this.init = function () {
            if (
                ((this.$scope = e(t)),
                (this.hasLoaded = !1),
                (this.waitForTab = !1),
                (this.tabLoaded = !1),
                this.$scope.is("[data-lazy-load]") &&
                    ((this.config = JSON.parse(
                        this.$scope.attr("data-lazy-load") || "{}"
                    )),
                    this.config.element_id && this.config.qid))
            ) {
                if ((this.events(), i)) return this.handleLazy();
                "scroll" === this.config.trigger
                    ? this.handleScroll()
                    : "click" === this.config.trigger &&
                      this.config.trigger__click &&
                      "" !== this.config.trigger__click
                    ? this.handleClick()
                    : "mega-menu" === this.config.trigger && this.handleMega();
            }
        }),
            (this.events = function () {
                document
                    .querySelectorAll(
                        [
                            ".woocommerce-currency-switcher button",
                            ".rey-langSwitcher a",
                            ".rey-woocurrency a",
                        ].join(",")
                    )
                    .forEach((e) => {
                        e.addEventListener("click", (e) => {
                            for (let e = 0; e < sessionStorage.length; e++) {
                                let t = sessionStorage.key(e);
                                t.startsWith(
                                    `rey_ss_${
                                        reyParams.site_id || 0
                                    }_element_lazy`
                                ) && sessionStorage.removeItem(t);
                            }
                            sessionStorage.removeItem("reycore/infinite");
                        });
                    });
                var e = this.$scope[0].closest("[data-tab]");
                if (e && !e.classList.contains("--active-tab")) {
                    var t = e
                            .closest("[data-tabs-id]")
                            .getAttribute("data-tabs-id"),
                        i = parseInt(e.getAttribute("data-tab") || 0);
                    (this.waitForTab = !0),
                        rey.hooks.addAction("tabs/changed/" + t, (e) => {
                            e === i &&
                                (this.tabLoaded ||
                                    ((this.waitForTab = !1),
                                    (this.tabLoaded = !0),
                                    this.handleLazy()));
                        });
                }
            }),
            (this.handleScroll = function () {
                rey.frontend.inView({
                    target: this.$scope,
                    once: !0,
                    offset: 0.25,
                    cb: () => {
                        a.hasLoaded ||
                            ((a.config.from = "scroll"),
                            a.handleLazy(),
                            (a.hasLoaded = !0));
                    },
                });
            }),
            (this._validateQuery = function (e) {
                try {
                    return document.querySelector(e), !0;
                } catch (e) {
                    console.log(e);
                }
                return !1;
            }),
            (this.handleClick = function () {
                this._validateQuery(this.config.trigger__click) &&
                    e(document).on(
                        "click",
                        this.config.trigger__click,
                        function () {
                            a.hasLoaded ||
                                ((a.config.from = "click"),
                                a.handleLazy(),
                                (a.hasLoaded = !0));
                        }
                    );
            }),
            (this.handleMega = function () {
                var t = this.$scope.closest(
                    ".rey-mainNavigation--desktop .rey-mega-gs"
                );
                if (t.length) {
                    var i,
                        o = t.closest(".menu-item.depth--0.--is-mega");
                    e(o)
                        .on("mouseenter", function () {
                            a.hasLoaded ||
                                (i = setTimeout(function () {
                                    (a.config.from = "mega"),
                                        a.handleLazy(),
                                        (a.hasLoaded = !0);
                                }, 200));
                        })
                        .on("mouseleave", function (e) {
                            clearTimeout(i);
                        });
                }
            }),
            (this.handleLazy = function () {
                if (!0 !== this.waitForTab) {
                    var t = {
                        data: {
                            element_id: this.config.element_id,
                            qid: this.config.qid,
                            pid: this.config.pid,
                            options: this.config.options,
                            cache: this.config.cache,
                            refresh: !!i,
                        },
                        ss: "element_lazy_" + this.config.element_id,
                        params: { cache: !1 },
                        cb: function (t) {
                            if (t.success)
                                if (t.data) {
                                    a.$scope.replaceWith(e(t.data));
                                    var i = e(
                                        ".elementor-element-" +
                                            a.config.element_id
                                    );
                                    if (i.length) {
                                        var o = i.attr("data-widget_type");
                                        "undefined" !=
                                            typeof elementorFrontend &&
                                            elementorFrontend.hooks &&
                                            elementorFrontend.hooks.doAction(
                                                "frontend/element_ready/" + o,
                                                i,
                                                jQuery
                                            ),
                                            rey.hooks.doAction(
                                                "elementor/element/lazy_loaded",
                                                i[0],
                                                a.config,
                                                o
                                            ),
                                            t.after_data &&
                                                e(t.after_data).appendTo(i);
                                    }
                                } else console.log("Empty element data.");
                        },
                    };
                    reyParams.lang &&
                        ((t.formData = {}), (t.formData.lang = reyParams.lang)),
                        rey.ajax.request("element_lazy", t);
                }
            }),
            this.init();
    };
    rey.hooks.addAction("elementor/init", function (e) {
        document
            .querySelectorAll(".elementor-element[data-lazy-load]")
            .forEach((e) => {
                new t(e);
            });
    }),
        rey.hooks.addAction(
            "elementor/element/lazy_load/popover_clean",
            function (e) {
                new t(e, !0);
            }
        );
})(jQuery);
