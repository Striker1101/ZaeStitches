!(function (t) {
    "use strict";
    var s = function (s, i) {
        (this.has_content = !1),
            (this._products = []),
            (this.init = function () {
                (this.wishlist_panel = t(s)),
                    this.wishlist_panel.length &&
                        (document.body.classList.contains(
                            "elementor-editor-active"
                        ) ||
                            ((this.options = t.extend(
                                { scroll: !0, customHeight: !0 },
                                i
                            )),
                            (this.params = reyParams),
                            (this.wishlist_container =
                                this.wishlist_panel.parent()),
                            (this.isProductGrid =
                                "grid" ===
                                this.wishlist_container.attr("data-type")),
                            this.events()));
            }),
            (this.events = function () {
                var s = this;
                t(document).on(
                    "wc_fragments_loaded.wishlist wc_fragments_refreshed.wishlist reycore/woocommerce/wishlist/added_product reycore/woocommerce/wishlist/removed_product",
                    function () {
                        (s.has_content = !1),
                            s.wishlist_container.removeClass("--loaded");
                    }
                ),
                    t(document).on(
                        "reycore/woocommerce/wishlist/get_saved_products",
                        function (t, i) {
                            s.wishlist_panel.addClass("--loading").empty(),
                                (s._products = i),
                                s.display(),
                                (s.has_content = !0),
                                s.wishlist_container.attr(
                                    "data-count",
                                    i.length
                                );
                        }
                    ),
                    rey.hooks.addAction("account_panel/tab", function (t, i) {
                        "wishlist" === t && s.refresh_height();
                    }),
                    rey.hooks.addAction(
                        "woocommerce/wishlist_account/remove",
                        () => {
                            t(".rey-wishlistItem", this.wishlist_panel)
                                .length || this.show_empty();
                        }
                    );
            }),
            (this.refresh = function (s) {
                var i = this;
                this.wishlist_panel.length &&
                    (i.has_content ||
                        (this.wishlist_panel.addClass("--loading").empty(),
                        rey.ajax.request("get_wishlist_data", {
                            params: { cache: !1 },
                            cb: function (s) {
                                var e = s.data || [];
                                t(document).trigger(
                                    "reycore/woocommerce/wishlist/get_data",
                                    [i, e]
                                ),
                                    e.length
                                        ? ((i._products = e),
                                          i.display(),
                                          i.wishlist_container.attr(
                                              "data-count",
                                              e.length
                                          ),
                                          (i.has_content = !0))
                                        : i.show_empty();
                            },
                        })));
            }),
            (this.refreshScroll = function () {
                if (rey.vars.is_desktop) {
                    var t = this.wishlist_panel;
                    this.options.scroll &&
                        "undefined" != typeof SimpleScrollbar &&
                        t.length &&
                        SimpleScrollbar.initEl(t[0]);
                }
            }),
            (this.display = function () {
                var s = this;
                if (
                    (this.wishlist_panel.removeClass("--loading"),
                    this._products.length)
                ) {
                    this.wishlist_container.removeClass("--empty");
                    var i = this.wishlist_container.closest(
                            ".rey-header-dropPanel[data-location=outside]"
                        ).length,
                        e = rey.template("reyWishlistItem")({
                            num: this._products.length,
                            ob: this._products,
                            grid: s.isProductGrid,
                            fixedContainer: i,
                        });
                    t(e).appendTo(s.wishlist_panel),
                        rey.util.imagesLoaded(s.wishlist_panel[0], () => {
                            this.refresh_height();
                        }),
                        rey.hooks.doAction(
                            "wishlist/display_content",
                            s.wishlist_panel[0],
                            this
                        );
                }
            }),
            (this.refresh_height = function () {
                var i = t(s);
                if (this.options.customHeight) {
                    var e = t("div.rey-wishlistItem:nth-of-type(1)", i);
                    if (e.length) {
                        var n = e[0].offsetHeight;
                        n &&
                            i[0].parentElement.style.setProperty(
                                "--height",
                                n + "px"
                            );
                    }
                }
                i.addClass("--loaded"),
                    this._products.length > 2 && this.refreshScroll();
            }),
            (this.show_empty = function () {
                this.wishlist_panel.removeClass("--loading"),
                    this.wishlist_container.addClass("--empty"),
                    this.params.wishlist_empty_text &&
                        t(
                            "<p>" + this.params.wishlist_empty_text + "</p>"
                        ).appendTo(this.wishlist_panel);
            }),
            this.init();
    };
    (t.fn.rey_wishlist_panel = function (t) {
        return new s(this, t);
    }),
        (rey.components.wishlist_panel = function () {
            return new s(...arguments);
        });
})(jQuery);
