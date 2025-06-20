!(function () {
    "use strict";
    var e,
        t = function (t) {
            var i = this,
                r = this;
            return (
                (this.debug = !1),
                (this.submenuSelector = ".sub-menu"),
                (this.init = function () {
                    t &&
                        ((this.MMEL = t),
                        (this.mobileNav = this.MMEL.parentElement.querySelector(
                            ".rey-mainNavigation.rey-mainNavigation--mobile"
                        )),
                        (this.id = this.MMEL.getAttribute("data-id")),
                        (this.tapToLink = this.MMEL.closest(
                            ".elementor-element.--tap-link"
                        )),
                        (this.delays = reyParams.theme_js_params.menu_delays),
                        rey.vars.is_edit_mode && (this.delays = !1),
                        (this.open_event =
                            reyParams.theme_js_params.menu_items_open_event),
                        e && (this.open_event = "click"),
                        "click" === this.open_event &&
                            this.MMEL.classList.add("--onclick"),
                        this.overlayData(),
                        this.createBadges(),
                        this.makeAcc(),
                        this.activeFollowers(),
                        this.menuItemsDelays(),
                        this.events());
                }),
                (this.createBadges = function () {
                    var e = this.MMEL.querySelectorAll(
                        [
                            ".menu-item.--badge-green",
                            ".menu-item.--badge-red",
                            ".menu-item.--badge-orange",
                            ".menu-item.--badge-blue",
                            ".menu-item.--badge-accent",
                        ].join(",")
                    );
                    e.length &&
                        (rey.assets.loadMultipleStyles({
                            "rey-header-menu-color-badges":
                                reyParams.theme_js_params.menu_badges_styles,
                        }),
                        e.forEach((e) => {
                            var t = rey.dom.children(e, "a");
                            if (t.length) {
                                var i = document.createElement("i");
                                i.classList.add("--menu-badge"),
                                    (i.style.position = "absolute"),
                                    (i.style.opacity = 0),
                                    (i.textContent =
                                        t[0].getAttribute("title"));
                                var r = rey.dom.children(t[0], "span");
                                r.length && r[0].prepend(i);
                            }
                        }));
                }),
                (this.overlayData = function () {
                    this.overlayType =
                        reyParams.theme_js_params.menu_hover_overlay;
                    var e = this.MMEL.closest("[data-hoverlay]");
                    if (rey.vars.elementor_edit_mode) {
                        var t = this.MMEL.parentElement.querySelector(
                            ".__editmode[data-hoverlay]"
                        );
                        t && (e = t);
                    }
                    if (
                        (e &&
                            (this.overlayType =
                                e.getAttribute("data-hoverlay")),
                        (this.overlaySupported =
                            "show" === this.overlayType ||
                            !0 === this.overlayType),
                        (this.mobileMenuOverlaySupported =
                            "hide" !==
                            reyParams.theme_js_params.menu_mobile_overlay),
                        this.MMEL.closest(".rey-stickyContent"))
                    )
                        return (
                            (this.overlaySupported =
                                "hide" !== this.overlayType),
                            void (this.overlayTarget = "site")
                        );
                    if (
                        rey.vars.is_desktop &&
                        "show_header_top" === this.overlayType
                    ) {
                        if (
                            rey.vars.elementor_edit_mode &&
                            !document.querySelector(".rey-overlay--header-top")
                        ) {
                            var i = document.createElement("div");
                            i.classList.add(
                                "rey-overlay",
                                "rey-overlay--header-top"
                            );
                            var r = document.querySelector(
                                ".rey-pbTemplate--gs-header .elementor.elementor-edit-area-active > .elementor-section-wrap"
                            );
                            r && r.append(i);
                        }
                        (this.overlayTarget = "header-top"),
                            (this.overlaySupported = !0);
                    } else
                        this.overlayTarget =
                            rey.elements.header &&
                            rey.dom.contains(rey.elements.header, this.MMEL)
                                ? "header"
                                : "site";
                }),
                (this.lastSubmenuDirection = function (e) {
                    var t =
                        e ||
                        this.MMEL.querySelector(
                            ".rey-mainMenu.rey-mainMenu--desktop .menu-item-has-children.depth--0.--is-regular:last-child > .sub-menu"
                        );
                    if (t) {
                        t.classList.remove("--reached-end");
                        var i = t.getBoundingClientRect(),
                            r = i.left;
                        rey.vars.is_rtl &&
                            (r =
                                document.documentElement.clientWidth -
                                (r + i.width)),
                            r + i.width >
                                document.documentElement.clientWidth &&
                                t.classList.add("--reached-end");
                    }
                }),
                (this.menuItemsDelays = function () {
                    this.MMEL.querySelectorAll(
                        ".rey-mainMenu--desktop .sub-menu"
                    ).forEach((e, t) => {
                        rey.dom.children(e, "li > a > span").forEach((e, t) => {
                            e.style.transitionDelay = 0.03 * t + "s";
                        });
                    }),
                        this.mobileNav &&
                            this.mobileNav
                                .querySelectorAll("ul.rey-mainMenu-mobile")
                                .forEach((e) => {
                                    var t = (e, t) => {
                                        e.style.transitionDelay =
                                            0.03 * t + 0.3 + "s";
                                    };
                                    e.closest(".--submenu-display-expanded")
                                        ? e
                                              .querySelectorAll(
                                                  ".depth--0 > a > span, .sub-menu > li > a > span"
                                              )
                                              .forEach(t)
                                        : (e
                                              .querySelectorAll(
                                                  ".depth--0 > a > span"
                                              )
                                              .forEach(t),
                                          e
                                              .querySelectorAll(
                                                  ".sub-menu > li > a > span"
                                              )
                                              .forEach(t));
                                });
                }),
                (this.events = function () {
                    if ("hover" === this.open_event) {
                        var e,
                            t,
                            r,
                            s,
                            a = parseFloat(
                                reyParams.theme_js_params.menu_items_hover_timer
                            ),
                            n = parseFloat(
                                reyParams.theme_js_params.menu_items_leave_timer
                            );
                        this.delays || ((a = 0), (n = 0));
                        var o,
                            l = this.MMEL.querySelectorAll(
                                ".rey-mainMenu.rey-mainMenu--desktop > .menu-item-has-children"
                            ),
                            h = function (e) {
                                (e = e || l).forEach((e) => {
                                    e.classList.remove("--hover"),
                                        e.setAttribute(
                                            "aria-expanded",
                                            "false"
                                        );
                                });
                            };
                        l.forEach((i) => {
                            i.addEventListener("mouseenter", (i) => {
                                clearTimeout(t),
                                    clearTimeout(r),
                                    clearTimeout(s),
                                    (e = setTimeout(() => {
                                        var e = i.target;
                                        h(rey.dom.getSiblings(e)),
                                            e.classList.add("--hover"),
                                            e.setAttribute(
                                                "aria-expanded",
                                                "true"
                                            ),
                                            e.classList.contains(
                                                "--overlay-delayed"
                                            ) || this.openHeaderOverlay(),
                                            rey.hooks.doAction(
                                                "menu_item/open",
                                                i,
                                                this
                                            );
                                    }, a));
                            }),
                                i.addEventListener("mouseleave", (i) => {
                                    clearTimeout(e),
                                        (t = setTimeout(() => {
                                            h();
                                        }, n));
                                });
                        }),
                            this.MMEL.querySelectorAll(
                                ".rey-mainMenu.rey-mainMenu--desktop > .menu-item:not(.menu-item-has-children)"
                            ).forEach((e) => {
                                e.addEventListener("mouseenter", (e) => {
                                    s = setTimeout(() => {
                                        h(), this.closeHeaderOverlay();
                                    }, n);
                                });
                            }),
                            this.MMEL.querySelectorAll(
                                ".rey-mainMenu.rey-mainMenu--desktop"
                            ).forEach((e) => {
                                e.addEventListener("mouseenter", (e) => {
                                    this.log(":: MENU ENTER"),
                                        rey.frontend.panels.closeActive(),
                                        rey.frontend.scroll.enable(),
                                        this.MMEL.classList.add("--active"),
                                        clearTimeout(o);
                                }),
                                    e.addEventListener("mouseleave", (e) => {
                                        this.log(":: MENU LEAVE"),
                                            (o = setTimeout(() => {
                                                this.log(
                                                    ":: MENU LEAVE (menuActiveTimer)"
                                                ),
                                                    this.MMEL.classList.remove(
                                                        "--active"
                                                    ),
                                                    this.closeHeaderOverlay();
                                            }, parseFloat(reyParams.theme_js_params.menu_hover_timer))),
                                            (r = setTimeout(() => {
                                                this.log(
                                                    ":: MENU LEAVE (menuLeaveTimer)"
                                                ),
                                                    h(),
                                                    this.closeHeaderOverlay();
                                            }, n));
                                    });
                            });
                    } else if ("click" === this.open_event) {
                        var d = !1,
                            m = () => {
                                rey.frontend.panels.reset(),
                                    this.MMEL.querySelectorAll(
                                        ".rey-mainMenu.rey-mainMenu--desktop > .menu-item-has-children"
                                    ).forEach((e) => {
                                        e.classList.remove("--hover"),
                                            e.setAttribute(
                                                "aria-expanded",
                                                "false"
                                            );
                                    }),
                                    this.MMEL.classList.remove("--active"),
                                    (d = !1);
                            };
                        this.MMEL.querySelectorAll(
                            ".rey-mainMenu.rey-mainMenu--desktop > .menu-item-has-children > a"
                        ).forEach((e) => {
                            e.addEventListener("click", (e) => {
                                e.preventDefault();
                                var t = e.currentTarget.parentElement;
                                if (t.classList.contains("--hover"))
                                    return m(), void this.closeHeaderOverlay();
                                rey.frontend.panels.init(m.bind(this)),
                                    this.openHeaderOverlay(!0),
                                    this.MMEL.classList.add("--active"),
                                    t.classList.add("--hover"),
                                    t.setAttribute("aria-expanded", "true"),
                                    rey.hooks.doAction(
                                        "menu_item/open",
                                        e,
                                        this
                                    ),
                                    (d = !0);
                            });
                        }),
                            "hide" ===
                                reyParams.theme_js_params.menu_hover_overlay &&
                                document.addEventListener(
                                    "click",
                                    function (e) {
                                        if (d) {
                                            var t =
                                                ".menu-item-has-children.--hover";
                                            e.target.closest(t) ||
                                                (document.querySelectorAll(t)
                                                    .length &&
                                                    m());
                                        }
                                    }
                                );
                    }
                    this.MMEL.querySelectorAll(
                        ".rey-mainMenu.rey-mainMenu--desktop > .menu-item .menu-item-has-children"
                    ).forEach((e) => {
                        e.addEventListener("mouseenter", (t) => {
                            e.classList.add("--hover");
                        }),
                            e.addEventListener("mouseleave", (t) => {
                                e.classList.remove("--hover");
                            });
                    }),
                        (this.mobileSelectors = rey.hooks.applyFilters(
                            "headermenu/mobile/selectors",
                            [this.submenuSelector]
                        )),
                        rey.___.openMobileMenuID ===
                            this.MMEL.getAttribute("id") &&
                            (this.openMobileMenu(),
                            (rey.___.openMobileMenuID = null)),
                        rey.hooks.addAction("headermenu/mobile/open", (e) => {
                            e === this.MMEL.getAttribute("id") &&
                                this.openMobileMenu();
                        });
                    var c =
                        this.mobileNav &&
                        this.mobileNav.querySelector(".rey-mobileMenu-close");
                    if (
                        (c &&
                            c.addEventListener(
                                rey.vars.mobileClickEvent,
                                (e) => {
                                    rey.vars.is_global_section_mode ||
                                        (e.preventDefault(),
                                        this.closeMobileMenu(!0));
                                },
                                {}
                            ),
                        this.mobileNav)
                    ) {
                        var u = this.mobileNav.closest(
                            ".--submenu-display-expanded"
                        );
                        this.mobileNav
                            .querySelectorAll(
                                ".rey-mainMenu-mobile .menu-item-has-children > a"
                            )
                            .forEach((e) => {
                                if (!rey.vars.is_global_section_mode) {
                                    var t = !1;
                                    i.mobileSelectors.forEach((i) => {
                                        var r = rey.dom.getSiblings(e, i);
                                        r.length && (t = r[0]);
                                    }),
                                        t &&
                                            (u &&
                                                (e.classList.add("--open"),
                                                rey.animation.slideDown(t)),
                                            e.addEventListener(
                                                rey.vars.mobileClickEvent,
                                                (e) => {
                                                    if (
                                                        (e.preventDefault(),
                                                        rey.hooks.doAction(
                                                            "headermenu/mobile/click",
                                                            e.currentTarget,
                                                            this
                                                        ),
                                                        !this.tapToLink ||
                                                            e.target.classList.contains(
                                                                "--submenu-indicator"
                                                            ))
                                                    )
                                                        return (
                                                            e.currentTarget.classList.toggle(
                                                                "--open"
                                                            ),
                                                            void rey.animation.slideToggle(
                                                                t
                                                            )
                                                        );
                                                    this.tapToLink &&
                                                        (window.location.href =
                                                            e.currentTarget.getAttribute(
                                                                "href"
                                                            ));
                                                },
                                                {}
                                            ));
                                }
                            });
                    }
                    this.MMEL.querySelectorAll(
                        ".rey-mainMenu.rey-mainMenu--desktop .menu-item-has-children.depth--0.--is-regular, .rey-mainMenu.rey-mainMenu--desktop .menu-item-has-children.depth--0.--is-regular .menu-item-has-children"
                    ).forEach((e) => {
                        e.addEventListener("mouseenter", (e) => {
                            var t = rey.dom.children(e.target, ".sub-menu");
                            t.length && this.lastSubmenuDirection(t[0]);
                        });
                    }),
                        this.mobileNav &&
                            this.mobileNav
                                .querySelectorAll(
                                    ".menu-item > a[href*='#']:not([href='#'])"
                                )
                                .forEach((e) => {
                                    e.addEventListener(
                                        "click",
                                        (e) => {
                                            if (
                                                !rey.vars.is_global_section_mode
                                            )
                                                if (
                                                    this.tapToLink &&
                                                    "I" === e.target.tagName &&
                                                    e.target.classList.contains(
                                                        "--submenu-indicator"
                                                    )
                                                )
                                                    this.closeMobileMenu(!0);
                                                else {
                                                    var t =
                                                        e.currentTarget.getAttribute(
                                                            "href"
                                                        );
                                                    t.substring(
                                                        0,
                                                        t.indexOf("#")
                                                    ) ===
                                                        window.location.origin +
                                                            window.location
                                                                .pathname &&
                                                        e.preventDefault(),
                                                        this.closeMobileMenu(
                                                            !0
                                                        );
                                                }
                                        },
                                        {}
                                    );
                                }),
                        document.addEventListener("keyup", (e) => {
                            27 == e.keyCode &&
                                this.MMEL.querySelectorAll(
                                    ".rey-mainMenu.rey-mainMenu--desktop > .menu-item-has-children"
                                ).forEach((e) => {
                                    e.classList.remove("--hover");
                                });
                        });
                }),
                (this.closeHeaderOverlay = function () {
                    rey.frontend.overlay.close();
                }),
                (this.openHeaderOverlay = function (e) {
                    if (this.overlaySupported) {
                        var t = { click: e || !1, id: "menu" };
                        rey.frontend.overlay.open(i.overlayTarget, t);
                    }
                }),
                (this.makeAcc = function () {
                    if (rey.hooks.applyFilters("rey/main_menu/a11y", !0)) {
                        this.MMEL.querySelectorAll(
                            ".menu-item-has-children.depth--0, .menu-item-has-children.--is-regular .menu-item-has-children"
                        ).forEach((e) => {
                            e.setAttribute("aria-haspopup", "true"),
                                e.setAttribute("aria-expanded", "false"),
                                e
                                    .querySelectorAll(
                                        ".rey-mega-gs a, .sub-menu a"
                                    )
                                    .forEach((e) => {
                                        e.setAttribute("tabindex", "-1");
                                    });
                        }),
                            document.addEventListener("keydown", (e) => {
                                if (9 !== e.keyCode) {
                                    if (-1 !== [13, 32].indexOf(e.keyCode)) {
                                        var i = this.MMEL.querySelectorAll(
                                            '.menu-item[aria-haspopup="true"] > a:focus'
                                        );
                                        i.length &&
                                            (e.preventDefault(),
                                            i.forEach((e) => {
                                                var t = e.parentElement;
                                                if ("LI" !== t.tagName) return;
                                                t.setAttribute(
                                                    "aria-expanded",
                                                    "true"
                                                );
                                                const i = new Event(
                                                    "mouseenter"
                                                );
                                                t.dispatchEvent(i),
                                                    t
                                                        .querySelectorAll(
                                                            ".rey-mega-gs a, .sub-menu > li > a"
                                                        )
                                                        .forEach((e) => {
                                                            e.removeAttribute(
                                                                "tabindex"
                                                            );
                                                        });
                                            }));
                                    }
                                    27 == e.keyCode && t();
                                }
                            });
                        var e = !1;
                        this.MMEL.querySelectorAll(".depth--0 > a").forEach(
                            (i) => {
                                i.addEventListener("mousedown", () => {
                                    e = !0;
                                }),
                                    i.addEventListener("focusin", () => {
                                        e || t(), (e = !1);
                                    });
                            }
                        );
                        var t = () => {
                            this.MMEL.querySelectorAll(
                                '.menu-item[aria-haspopup="true"][aria-expanded="true"]'
                            ).forEach((e) => {
                                e.setAttribute("aria-expanded", "false");
                                const t = new Event("mouseleave");
                                e.dispatchEvent(t),
                                    e
                                        .querySelectorAll(
                                            "rey-mega-gs a, .sub-menu a"
                                        )
                                        .forEach((e) => {
                                            e.setAttribute("tabindex", "-1");
                                        });
                            });
                        };
                    }
                }),
                (this.openMobileMenu = function () {
                    rey.frontend.panels.init(this.closeMobileMenu.bind(this)),
                        r.mobileMenuOverlaySupported &&
                            rey.frontend.overlay.open(this.overlayTarget),
                        rey.hooks.applyFilters(
                            "rey/main_menu/mobile/disable_scroll",
                            !0
                        ) && rey.frontend.scroll.disable(),
                        this.mobileNav &&
                            this.mobileNav.classList.add("--is-active"),
                        rey.elements.body.classList.add("--mobileNav--active");
                }),
                (this.closeMobileMenu = function (e) {
                    rey.frontend.panels.reset(),
                        r.mobileMenuOverlaySupported &&
                            ((rey.vars.is_desktop && !e) ||
                                rey.frontend.overlay.close()),
                        this.mobileNav &&
                            this.mobileNav.classList.remove("--is-active"),
                        rey.frontend.scroll.enable(),
                        rey.elements.body.classList.remove(
                            "--mobileNav--active"
                        );
                }),
                (this.activeFollowers = function () {
                    new (function () {
                        var e = this;
                        (this.points = {}),
                            (this.targets = {}),
                            (this.menuItems = {}),
                            (this.anchors = {}),
                            (this.nonElementor = {}),
                            (this.firstHash = null),
                            (this.topThreshold = 0),
                            (this.activeClass = "current-menu-item"),
                            (this.init = function () {
                                (this.items = document.querySelectorAll(
                                    '.rey-mainNavigation .menu-item a[href*="#"]:not([href="#"])'
                                )),
                                    this.items.length &&
                                        ((this.supportsTopThreshold =
                                            rey.elements.header &&
                                            rey.elements.header.classList.contains(
                                                "header-pos--fixed"
                                            )),
                                        this.getInitialData(),
                                        this.handleScroll(),
                                        this.events());
                            }),
                            (this.events = function () {
                                window.addEventListener(
                                    "resize",
                                    rey.util.debounce(function () {
                                        e.refreshData();
                                    }, 500)
                                ),
                                    window.addEventListener(
                                        "scroll",
                                        rey.util.debounce(function () {
                                            e.handleScroll();
                                        }, 50)
                                    ),
                                    Object.keys(this.anchors).forEach((t) => {
                                        e.anchors[t].addEventListener(
                                            "click",
                                            function (i) {
                                                e.setHeaderHeight();
                                                var r =
                                                    e.points[t] -
                                                    e.topThreshold +
                                                    1;
                                                e.nonElementor[t] &&
                                                    (i.preventDefault(),
                                                    window.scrollTo({
                                                        top: r,
                                                        behavior: "smooth",
                                                    })),
                                                    elementorFrontend.hooks
                                                        ? elementorFrontend.hooks.addFilter(
                                                              "frontend/handlers/menu_anchor/scroll_top_distance",
                                                              function (e) {
                                                                  return r;
                                                              }
                                                          )
                                                        : window.scrollTo({
                                                              top: r,
                                                              behavior:
                                                                  "smooth",
                                                          });
                                            }
                                        );
                                    });
                            }),
                            (this.getInitialData = function () {
                                this.items.forEach((t) => {
                                    if (
                                        (!rey.vars.is_desktop ||
                                            t.closest(
                                                ".rey-mainNavigation--desktop"
                                            )) &&
                                        (rey.vars.is_desktop ||
                                            t.closest(
                                                ".rey-mainNavigation--mobile"
                                            ))
                                    ) {
                                        var i = t
                                                .getAttribute("href")
                                                .split("#"),
                                            r = i[i.length - 1],
                                            s = document.querySelector(
                                                `.elementor-element[id="${r}"], .elementor-menu-anchor[id="${r}"], .rey-siteWrapper[id="${r}"]`
                                            );
                                        s &&
                                            ((e.anchors[r] = t),
                                            (e.menuItems[r] = t.parentElement),
                                            (e.targets[r] = s),
                                            (e.points[r] =
                                                rey.dom.offset(s).top),
                                            (e.nonElementor[r] =
                                                s.classList.contains(
                                                    "rey-siteWrapper"
                                                )),
                                            null === e.firstHash &&
                                                (e.firstHash = r),
                                            e.menuItems[r].classList.remove(
                                                e.activeClass
                                            ));
                                    }
                                });
                            }),
                            (this.refreshData = function () {
                                this.setHeaderHeight(),
                                    Object.keys(e.targets).forEach((t) => {
                                        e.points[t] = rey.dom.offset(
                                            e.targets[t]
                                        ).top;
                                    });
                            }),
                            (this.handleScroll = function () {
                                var t =
                                    window.pageYOffset ||
                                    document.documentElement.scrollTop;
                                Object.keys(e.points).forEach((i) => {
                                    var r = e.menuItems[i];
                                    r.classList.remove(e.activeClass),
                                        t + e.topThreshold > e.points[i]
                                            ? (e.activeMenuItem = r)
                                            : null !== e.firstHash &&
                                              i === e.firstHash &&
                                              (e.activeMenuItem = null);
                                }),
                                    e.activeMenuItem &&
                                        e.activeMenuItem.classList.add(
                                            e.activeClass
                                        );
                            }),
                            (this.setHeaderHeight = function () {
                                this.supportsTopThreshold &&
                                    (this.topThreshold = rey.headerHeight);
                            }),
                            this.init();
                    })();
                }),
                (this.log = function (e) {
                    this.debug && rey.log(e);
                }),
                this.init()
            );
        },
        i = function () {
            (rey.components.mainMenu = function (e) {
                var i = [];
                (e || document)
                    .querySelectorAll(
                        ".rey-mainNavigation.rey-mainNavigation--desktop"
                    )
                    .forEach((e) => {
                        var r = e.getAttribute("id");
                        -1 === i.indexOf(r) && (i.push(r), new t(e));
                    });
            }),
                rey.components.mainMenu();
        };
    window.matchMedia("(min-width: 1025px) and (max-width: 1200px)").matches &&
    ("ontouchstart" in window ||
        navigator.maxTouchPoints > 0 ||
        navigator.msMaxTouchPoints > 0)
        ? ((e = !0), document.addEventListener("rey-DOMContentLoaded", i))
        : rey.hooks.addAction("first_interaction", i);
})();
