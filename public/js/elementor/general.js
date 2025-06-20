!(function () {
    "use strict";
    var e = !1,
        t = function () {
            var t = this;
            (this.elements = {}),
                (this.hashes = []),
                (this.init = function () {
                    e ||
                        ((e = !0),
                        this.general_html(),
                        this.sticky_cols(),
                        this.headerOverlayResetZindexes(),
                        this.lazyContent(),
                        setTimeout(() => {
                            rey.hooks.doAction("elementor/init", this),
                                document.dispatchEvent(
                                    new CustomEvent("rey/elementor/init", {
                                        detail: { app: this },
                                    })
                                ),
                                this.runElements();
                        }, 100),
                        rey.hooks.addAction(
                            "reycore/ajax_response/assets",
                            () => {
                                rey.hooks.doAction("elementor/init", this);
                            }
                        ));
                }),
                (this.runElements = function () {
                    var e = {};
                    Object.keys(this.elements).forEach((t) => {
                        this.elements[t].forEach((n) => {
                            if (rey.vars.elementor_edit_mode)
                                elementorFrontend.hooks.addAction(
                                    "frontend/element_ready/" + t,
                                    n
                                );
                            else {
                                if (!e[t]) {
                                    var r = "data-widget_type";
                                    -1 !==
                                        [
                                            "section",
                                            "column",
                                            "container",
                                        ].indexOf(t) &&
                                        (r = "data-element_type"),
                                        (e[t] = document.querySelectorAll(
                                            `.elementor-element[${r}="${t}"]`
                                        ));
                                }
                                e[t].forEach((e) => {
                                    n(jQuery(e));
                                });
                            }
                        });
                    });
                }),
                (this.getHash = function (e) {
                    return (
                        (e = (e = e.replace(/\s+/g, "")).substring(0, 100)),
                        rey.util.simpleHash(e)
                    );
                }),
                (this.registerElement = function (e) {
                    this.elements[e.name] || (this.elements[e.name] = []);
                    var t = this.getHash(e.name + e.cb.toString());
                    -1 === this.hashes.indexOf(t) &&
                        (this.hashes.push(t), this.elements[e.name].push(e.cb));
                }),
                (this.headerOverlayResetZindexes = function () {
                    reyParams.header_no_zindex_patch ||
                        (rey.elements.header
                            ? (rey.elements.header.addEventListener(
                                  "click",
                                  t._makeHeaderZindex,
                                  { once: !0 }
                              ),
                              rey.elements.header.addEventListener(
                                  "mouseover",
                                  t._makeHeaderZindex,
                                  { once: !0 }
                              ),
                              rey.elements.header.addEventListener(
                                  "touchstart",
                                  t._makeHeaderZindex,
                                  { once: !0, passive: !0 }
                              ))
                            : t._makeHeaderZindex());
                }),
                (this._makeHeaderZindex = function () {
                    if (!reyParams.header_no_zindex_patch && !t.__didZ) {
                        var e = [".rey-header-dropPanel"];
                        reyParams.theme_js_params &&
                            "hide" !==
                                reyParams.theme_js_params.menu_hover_overlay &&
                            (e.push(
                                ".menu-item.menu-item-has-children.--is-mega"
                            ),
                            e.push(
                                ".menu-item.menu-item-has-children.--is-regular"
                            ),
                            e.push(".rey-mainNavigation--mobile")),
                            [
                                ".rey-siteHeader:not(.--hfx-spacer)",
                                ".rey-pbTemplate--gs-header",
                            ].forEach((n) => {
                                document
                                    .querySelectorAll(
                                        n +
                                            ' .elementor-element[class*="--zindexed-"]'
                                    )
                                    .forEach((n) => {
                                        n.querySelector(e.join(",")) &&
                                            (n.classList.add("--zindex-auto"),
                                            (t.__didZ = !0));
                                    });
                            });
                    }
                }),
                (this.lazyContent = function () {
                    rey.hooks.addAction(
                        "elementor/element/lazy_loaded",
                        (e, t, n) => {
                            void 0 !== this.elements[n] &&
                                this.elements[n].forEach((t) => {
                                    t(jQuery(e));
                                });
                        }
                    ),
                        rey.hooks.addAction(
                            "elementor/content/lazy_loaded",
                            (e) => {
                                e.querySelectorAll(
                                    ".elementor-element"
                                ).forEach((e) => {
                                    var t = e.getAttribute("data-element_type");
                                    "widget" === t &&
                                        (t =
                                            e.getAttribute("data-widget_type")),
                                        void 0 !== this.elements[t] &&
                                            this.elements[t].forEach((t) => {
                                                t(jQuery(e));
                                            }),
                                        "undefined" !=
                                            typeof elementorFrontend &&
                                            elementorFrontend.hooks &&
                                            elementorFrontend.hooks.doAction(
                                                "frontend/element_ready/" + t,
                                                jQuery(e),
                                                jQuery
                                            );
                                });
                            }
                        ),
                        window.addEventListener("elementor/popup/show", (e) => {
                            if (e.detail.instance) {
                                var t = e.detail.instance.$element;
                                rey.hooks.doAction(
                                    "elementor/content/lazy_loaded",
                                    rey.validation.isJQuery(t) ? t[0] : t
                                );
                            }
                        });
                }),
                (this.sticky_cols = function () {
                    rey.vars.is_desktop &&
                        document.querySelector(
                            ".elementor-column.--sticky-col.--css-first, .shop-sidebar.--sidebar-sticky"
                        ) &&
                        rey.elements.siteWrapper &&
                        rey.elements.siteWrapper.style.setProperty(
                            "--site-wrapper-overflow",
                            "visible"
                        );
                }),
                (this.general_html = function () {
                    var e = function () {
                        document
                            .querySelectorAll(".u-title-dashes")
                            .forEach((e) => {
                                var t = e.closest(".elementor-top-section");
                                t && (t.style.overflow = "hidden");
                            });
                    };
                    e(),
                        rey.hooks.addAction(
                            "ajaxfilters/finished",
                            function () {
                                e();
                            }
                        );
                }),
                this.init();
        };
    function n() {
        rey.elementor = new t();
    }
    "undefined" == typeof rey
        ? console.error(
              '`rey` is undefined an will not run the "elementor/frontend/init" event, for edit mode.'
          )
        : ((rey.vars.elementor_edit_mode =
              "undefined" != typeof elementorFrontendConfig &&
              elementorFrontendConfig.environmentMode.edit),
          (rey.vars.is_edit_mode =
              rey.vars.elementor_edit_mode || rey.vars.customizer_preview)),
        document.addEventListener("rey-DOMContentLoaded", function () {
            rey.vars.elementor_edit_mode || n();
        }),
        window.addEventListener("elementor/frontend/init", function () {
            rey.vars.elementor_edit_mode && n();
        });
})();
