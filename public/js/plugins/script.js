!(function (e) {
    "use strict";
    var t = !1,
        n = {},
        i = {
            init: function (e) {
                if (!t)
                    return (
                        (t = !0),
                        (i.scope = e || document),
                        i.lazyLoad(),
                        i.adjustWidths(),
                        i.megaMenuGs(),
                        rey.vars.elementor_edit_mode &&
                            rey.elementor &&
                            rey.elementor._makeHeaderZindex(),
                        i
                    );
                rey.vars.elementor_edit_mode &&
                    Object.keys(n).forEach((t) => {
                        var i = n[t];
                        (e.length ? e[0] : e)
                            .querySelectorAll(t)
                            .forEach((e) => {
                                e
                                    .querySelectorAll("ul.sub-menu")
                                    .forEach((e) => {
                                        e.remove();
                                    }),
                                    e.append(i);
                            });
                    });
            },
            lazyLoad: function () {
                var t = {},
                    n = {},
                    i = {},
                    s = function (s) {
                        var a = this;
                        (this.init = function () {
                            (this.$item = e(s)),
                                (this.$menuItem =
                                    this.$item.parent(".menu-item")),
                                (this.isMobileNav = this.$menuItem
                                    .closest(".rey-mainMenu")
                                    .hasClass("rey-mainMenu-mobile")),
                                (this.config = JSON.parse(
                                    this.$item.attr("data-lazy-config")
                                )),
                                e.isEmptyObject(this.config) ||
                                    ((this.id = this.config.mid),
                                    (this.lazyType = this.isMobileNav
                                        ? "yes_mo"
                                        : this.config.lazy_type),
                                    (this.lazyTypeEvent = this.isMobileNav
                                        ? rey.vars.mobileClickEvent
                                        : "mouseenter"),
                                    this.addLoaderIndicator(),
                                    this.events());
                        }),
                            (this.events = function () {
                                "yes_mo" === this.lazyType
                                    ? this.$menuItem
                                          .one(
                                              this.lazyTypeEvent,
                                              function (e) {
                                                  (i[a.id] = !0),
                                                      a.$menuItem.addClass(
                                                          "--loading"
                                                      ),
                                                      a.makeRequest();
                                              }
                                          )
                                          .one("mouseleave", function (e) {
                                              i[a.id] && (i[a.id] = !1);
                                          })
                                    : "yes_pm" === this.lazyType
                                    ? (this.$menuItem
                                          .one(
                                              this.lazyTypeEvent,
                                              function (e) {
                                                  (i[a.id] = !0),
                                                      t[a.id] ||
                                                          a.$menuItem.addClass(
                                                              "--loading"
                                                          );
                                              }
                                          )
                                          .one("mouseleave", function (e) {
                                              i[a.id] && (i[a.id] = !1);
                                          }),
                                      this.$item
                                          .closest(".rey-mainNavigation")
                                          .one("mouseenter", function (e) {
                                              a.makeRequest();
                                          }))
                                    : "yes_pl" === this.lazyType &&
                                      rey.hooks.addAction(
                                          "first_interaction",
                                          function () {
                                              setTimeout(function () {
                                                  a.makeRequest();
                                              }, 1e3);
                                          }
                                      );
                            }),
                            (this.addLoaderIndicator = function () {
                                var t = this.$menuItem;
                                this.isMobileNav &&
                                    (t = e(" > a", this.$menuItem)),
                                    e(
                                        '<i class="__mmloader --invisible"></i>'
                                    ).appendTo(t);
                            }),
                            (this.makeRequest = function () {
                                t[this.id]
                                    ? this.appendData(t[this.id])
                                    : n[this.id]
                                    ? setTimeout(function () {
                                          a.makeRequest();
                                      }, 300)
                                    : (n[this.id] = rey.ajax.request(
                                          "get_megamenu",
                                          {
                                              ss: "get_megamenu_" + this.id,
                                              data: { mid: this.id },
                                              params: { cache: !1 },
                                              cb: function (e) {
                                                  e.data &&
                                                      (a.appendData(e.data),
                                                      (t[a.id] = e.data),
                                                      rey.hooks.doAction(
                                                          "elementor/content/lazy_loaded",
                                                          a.$item[0]
                                                      ),
                                                      (n[a.id] = !1));
                                              },
                                          }
                                      ));
                            }),
                            (this.appendData = function (t) {
                                this.$menuItem.removeClass("--loading"),
                                    e(t).appendTo(this.$item),
                                    "yes_pl" !== this.lazyType &&
                                        (this.openOverlay(),
                                        this.$menuItem.removeClass(
                                            "--overlay-delayed"
                                        )),
                                    setTimeout(function () {
                                        a.$item.addClass("--ready");
                                    }, 50);
                            }),
                            (this.openOverlay = function () {
                                if (i[this.id]) {
                                    var e = rey.elements.header
                                            ? "header"
                                            : "site",
                                        t =
                                            reyParams.theme_js_params
                                                .menu_hover_overlay,
                                        n =
                                            this.$item.closest(
                                                "[data-hoverlay]"
                                            );
                                    n.length && (t = n.attr("data-hoverlay")),
                                        t &&
                                            rey.frontend.overlay.open(e, {
                                                click: !1,
                                                id: "menu",
                                            });
                                }
                            }),
                            this.init();
                    };
                e(".rey-mega-gs[data-lazy-config]").each(function (e, t) {
                    new s(t);
                });
            },
            megaMenuGs: function () {
                (i.scope.length ? i.scope[0] : i.scope)
                    .querySelectorAll(".rey-mega-gs")
                    .forEach((e) => {
                        if (
                            (rey.vars.elementor_edit_mode &&
                                e.closest(".rey-mainNavigation--desktop") &&
                                (n[
                                    ".rey-mainNavigation--desktop #" +
                                        e
                                            .closest(".menu-item")
                                            .getAttribute("id")
                                ] = e),
                            e.classList.contains("--disable-mega-gs-mobile") &&
                                e.closest(".rey-mainMenu-mobile"))
                        )
                            return e.remove();
                        rey.dom.getSiblings(e, ".sub-menu").forEach((e) => {
                            e.remove();
                        });
                    });
            },
            adjustWidths: function () {
                var t = function (t) {
                    var n = this;
                    (this.init = function () {
                        if (
                            ((this.menuItem = t),
                            (this.submenus = rey.dom.children(
                                this.menuItem,
                                ".rey-mega-gs, ul.sub-menu"
                            )),
                            this.submenus.length &&
                                (this.removeSubmenuIfMega(),
                                rey.vars.is_desktop))
                        )
                            return (
                                (this.submenu = this.submenus[0]),
                                (this.isBoxed =
                                    this.menuItem.classList.contains(
                                        "--mega-boxed"
                                    )),
                                this.prepareBoxedContainer(),
                                this.resizePanel(),
                                this.events(),
                                this
                            );
                    }),
                        (this.events = function () {
                            window.addEventListener(
                                "resize",
                                rey.util.debounce(function (e) {
                                    n.refreshBoxedContainer(), n.resizePanel();
                                }, 500)
                            ),
                                rey.elements.header &&
                                    rey.elements.header.addEventListener(
                                        "lazyloaded",
                                        rey.util.debounce(n.resizePanel, 500)
                                    ),
                                window.addEventListener(
                                    "LazyLoad::Initialized",
                                    n.resizePanel
                                ),
                                e(document).on(
                                    "rey/elementor_section/animation_complete",
                                    function (e, t, i) {
                                        var s = n.item.closest(
                                            ".elementor-section.elementor-top-section, .elementor > .e-container, .elementor > .e-con"
                                        );
                                        t.id == s.getAttribute("data-id") &&
                                            n.resizePanel();
                                    }
                                );
                        }),
                        (this.resizePanel = function () {
                            requestAnimationFrame(this._resizePanel);
                        }),
                        (this._resizePanel = function () {
                            if (reyParams.mega_menu_use_bounding_client_rect)
                                var e = n.menuItem.getBoundingClientRect();
                            else e = rey.dom.offset(n.menuItem);
                            var t = e.left;
                            rey.vars.is_rtl &&
                                (t =
                                    document.documentElement.clientWidth -
                                    (t + n.menuItem.offsetWidth));
                            var i = {},
                                s = "block";
                            if (
                                (n.menuItem.classList.contains(
                                    "--is-mega-cols"
                                ) && (s = "flex"),
                                n.isBoxed)
                            )
                                i["--mm-offset"] = t + "px";
                            else if (
                                n.menuItem.classList.contains("--mega-full")
                            )
                                i["--mm-offset"] = t + "px";
                            else if (
                                n.menuItem.classList.contains("--mega-custom")
                            ) {
                                s = "flex";
                                var a = Math.floor(
                                    (t / document.body.clientWidth) * 100
                                );
                                (i["--mm-offset"] = t + "px"),
                                    a <= 33
                                        ? (i["--mm-translate-factor"] = 0.2)
                                        : a > 67 &&
                                          (i["--mm-translate-factor"] = 0.8),
                                    n.menuItem.classList.contains(
                                        "--mega-center"
                                    ) &&
                                        n.submenu.classList.add(
                                            "--site-center"
                                        );
                            }
                            Object.keys(i).forEach((e) => {
                                n.submenu.style.setProperty(e, i[e]);
                            }),
                                (n.submenu.style.display = s);
                        }),
                        (this.prepareBoxedContainer = function () {
                            this.isBoxed &&
                                ((this.navContainer = this.menuItem.closest(
                                    ".mega-boxed-container > .elementor-container:not(.--mm-container-data), .elementor-top-section > .elementor-container:not(.--mm-container-data), .rey-siteHeader-container:not(.--mm-container-data), :is(.elementor-section-wrap, [data-elementor-id]) > .e-con > .e-con-inner"
                                )),
                                this.navContainer &&
                                    ((this.isElementorContainer =
                                        this.navContainer.classList.contains(
                                            "e-con-inner"
                                        )),
                                    this.refreshBoxedContainer()));
                        }),
                        (this.refreshBoxedContainer = function () {
                            if (this.isBoxed && this.navContainer) {
                                var e =
                                    rey.dom.offset(this.navContainer).left || 0;
                                e &&
                                    this.navContainer.style.setProperty(
                                        "--mm-container",
                                        e + "px"
                                    ),
                                    this.navContainer.classList.add(
                                        "--mm-container-data"
                                    ),
                                    this.isElementorContainer &&
                                        this.navContainer.style.setProperty(
                                            "--ec-max-width",
                                            this.navContainer.offsetWidth + "px"
                                        );
                            }
                        }),
                        (this.removeSubmenuIfMega = function () {
                            this.submenus.length > 1 &&
                                this.submenus.forEach((e) => {
                                    rey.validation.matches(e, "ul.sub-menu") &&
                                        e.remove();
                                });
                        }),
                        this.init();
                };
                [
                    ".rey-siteHeader:not(.--hfx-spacer) .rey-mainNavigation--desktop",
                    ".rey-stickyContent .rey-mainNavigation--desktop",
                    ".rey-pbTemplate--gs-header .rey-mainNavigation--desktop",
                    ".elementor[data-elementor-type='header'] .rey-mainNavigation--desktop",
                ].forEach((e) => {
                    (rey.validation.isJQuery(i.scope) ? i.scope[0] : i.scope)
                        .querySelectorAll(e)
                        .forEach((e) => {
                            e.querySelectorAll(
                                ".menu-item.depth--0.--is-mega"
                            ).forEach((e) => {
                                e.addEventListener(
                                    "mouseenter",
                                    (n) => {
                                        rey.util.wait.styles(function () {
                                            new t(e);
                                        });
                                    },
                                    { once: !0 }
                                );
                            });
                        });
                });
            },
        };
    document.addEventListener("rey-DOMContentLoaded", function () {
        rey.hooks.addFilter("headermenu/mobile/selectors", function (e) {
            return e.unshift(".rey-mega-gs"), e;
        }),
            rey.vars.elementor_edit_mode || i.init();
    }),
        rey.hooks.addAction("elementor/init", function (e) {
            rey.vars.elementor_edit_mode &&
                e.registerElement({
                    name: "reycore-header-navigation.default",
                    cb: i.init,
                });
        });
})(jQuery);
