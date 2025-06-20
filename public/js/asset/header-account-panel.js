!(function (e) {
    "use strict";
    var t = {
        wishlist: null,
        init: function () {
            if (
                !rey.vars.is_global_section_mode &&
                ((this.btn = document.querySelectorAll(
                    ".js-rey-headerAccount"
                )),
                (this.panel = document.querySelector(
                    ".rey-accountPanel-wrapper"
                )),
                this.panel && this.btn.length)
            )
                return (
                    (this.layout = this.panel.getAttribute("data-layout")),
                    this.makeDrop(),
                    this.makeOffcanvas(),
                    this.makeWishlist(),
                    this.events(),
                    this
                );
        },
        makeWishlist: function () {
            (this.wPanel = this.panel.querySelector(".rey-wishlistPanel")),
                this.wPanel &&
                    rey.components.wishlist_panel &&
                    (this.wishlist = rey.components.wishlist_panel(
                        this.wPanel,
                        { scroll: !0, customHeight: "drop" === this.layout }
                    ));
        },
        events: function () {
            this.panel
                .querySelectorAll(".rey-accountTabs-item")
                .forEach((e) => {
                    e.addEventListener("click", function (e) {
                        e.preventDefault();
                        var t = e.currentTarget,
                            a = t.closest(".rey-accountPanel");
                        t.classList.remove("--active");
                        var n = rey.dom.getSiblings(t);
                        n.length &&
                            n.forEach((e) => {
                                e.classList.remove("--active");
                            }),
                            t.classList.add("--active");
                        var s = t.getAttribute("data-item");
                        if (a) {
                            a.querySelectorAll("[data-account-tab]").forEach(
                                (e) => {
                                    e.classList.remove("--active");
                                }
                            );
                            var i = a.querySelector(
                                '[data-account-tab="' + s + '"]'
                            );
                            i && i.classList.add("--active");
                        }
                        rey.hooks.doAction("account_panel/tab", s, t);
                    });
                });
        },
        onOpen: function () {
            t.wishlist && t.wishlist.refresh(),
                rey.hooks.doAction("account_panel/onOpen", this);
        },
        makeDrop: function () {
            "drop" === this.layout &&
                this.btn.forEach((e) => {
                    if (
                        !(
                            (rey.vars.is_desktop &&
                                e.closest(".elementor-hidden-desktop")) ||
                            (rey.vars.is_mobile &&
                                e.closest(".elementor-hidden-mobile"))
                        )
                    ) {
                        e.setAttribute("data-layout", "drop");
                        var a = {
                            name: "account-panel",
                            trigger: e,
                            panel: t.panel,
                            closeOnScroll:
                                t.panel.hasAttribute("data-close-scroll"),
                            extraBodyClass: "header-account--active",
                            panelOutside: !0,
                            onOpen: t.onOpen,
                            initialDisplay: "flex",
                        };
                        rey.components.dropPanel(a);
                    }
                });
        },
        makeOffcanvas: function () {
            if ("offcanvas" === this.layout) {
                var e = {
                    name: "account-panel",
                    trigger: t.btn,
                    panel: t.panel,
                    extraBodyClass: "header-account--active",
                    onOpen: t.onOpen,
                };
                rey.components.sidePanel(e);
            }
        },
    };
    document.addEventListener("rey-DOMContentLoaded", function (e) {
        rey.components.accountPanel = t.init();
    });
})(jQuery);
