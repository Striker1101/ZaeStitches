!(function (t) {
    "use strict";
    var e = {
            init: function () {
                return (
                    (this.cookie_key = "rey_wishlist_ids_" + reyParams.site_id),
                    (this.logged_in = reyParams.wishlist_get_results),
                    (this.$notice = t(".rey-wishlist-notice-wrapper")),
                    this
                );
            },
            setCookie: function (t, e) {
                var i = {};
                reyParams.wishlist_expire &&
                    (i.expires = parseInt(reyParams.wishlist_expire)),
                    Cookies.set(t, e, i);
            },
            setProduct: function (e) {
                if ("undefined" != typeof Cookies) {
                    e = parseInt(e);
                    var i = this.getProducts();
                    -1 === i.indexOf(e) &&
                        (i.push(e),
                        this.setCookie(this.cookie_key, i.join("|")),
                        t(document).trigger(
                            "reycore/woocommerce/wishlist/added_product",
                            [i, e]
                        ));
                }
            },
            removeProduct: function (e, i, s) {
                if ("undefined" != typeof Cookies) {
                    e = parseInt(e);
                    var o = this.getProducts();
                    o.splice(i, 1),
                        this.setCookie(this.cookie_key, o.join("|")),
                        s ||
                            t(document).trigger(
                                "reycore/woocommerce/wishlist/removed_product",
                                [o, e]
                            );
                }
            },
            updateCounters: function (t) {
                t || (t = this.getProducts()),
                    document
                        .querySelectorAll(".rey-wishlistCounter-number")
                        .forEach((e) => {
                            if (
                                (e.setAttribute("data-count", t.length),
                                t.length)
                            ) {
                                var i = e.closest(".rey-headerIcon-counter");
                                i && i.classList.remove("--hidden");
                            }
                        });
            },
            save: function (i) {
                i || (i = this.getProducts()),
                    this.logged_in &&
                        (t(".rey-wishlistBtn").addClass("--disabled"),
                        rey.ajax.request("wishlist_add_to_user", {
                            params: { cache: !1 },
                            cb: function (i) {
                                e.animateButtons(),
                                    t(".rey-wishlistBtn").removeClass(
                                        "--disabled --doing"
                                    );
                            },
                        }));
            },
            getProducts: function () {
                if ("undefined" != typeof Cookies) {
                    var t = Cookies.get(this.cookie_key),
                        e = (t && t.split("|")) || [];
                    return (
                        (e = e.map(function (t) {
                            return parseInt(t);
                        })),
                        void 0 !== reyParams.wishlist_umeta_counter &&
                        reyParams.wishlist_umeta_counter.length &&
                        reyParams.wishlist_umeta_counter.length !== e
                            ? (this.setCookie(
                                  this.cookie_key,
                                  reyParams.wishlist_umeta_counter.join("|")
                              ),
                              reyParams.wishlist_umeta_counter)
                            : e
                    );
                }
            },
            animateButtons: function (e) {
                var i = t(
                    e
                        ? ".rey-wishlistBtn[data-id=" + e + "]"
                        : ".rey-wishlistBtn.--doing"
                );
                i.addClass("--animate"),
                    setTimeout(function () {
                        i.removeClass("--animate");
                    }, 500);
            },
            toggleButtonAttributes: function (e, i) {
                var s;
                i
                    ? (e.addClass("--in-wishlist"),
                      (s = reyParams.wishlist_text_rm))
                    : (e.removeClass("--in-wishlist"),
                      (s = reyParams.wishlist_text_add)),
                    e.attr({ title: s, "aria-label": s }),
                    e.is("[data-rey-tooltip]") && e.attr("data-rey-tooltip", s);
                var o = t(".rey-wishlistBtn-text", e);
                o.length && o.text(s);
            },
            showNotice: function () {
                if ("notice" === reyParams.wishlist_after_add) {
                    this.$notice.removeClass("--hidden").addClass("--visible");
                    var i = new (function (t, e) {
                        var i,
                            s,
                            o = e;
                        (this.pause = function () {
                            window.clearTimeout(i), (o -= Date.now() - s);
                        }),
                            (this.resume = function () {
                                (s = Date.now()),
                                    window.clearTimeout(i),
                                    (i = window.setTimeout(t, o));
                            }),
                            this.resume();
                    })(function () {
                        e.$notice.removeClass("--visible");
                    }, 3200);
                    i.resume(),
                        t(".rey-wishlist-notice", this.$notice)
                            .on("mouseenter", function () {
                                i.pause();
                            })
                            .on("mouseleave", function () {
                                i.resume();
                            });
                }
            },
        },
        i = function () {
            var i = this;
            (this.isWishlistPage = !1),
                (this.init = function () {
                    (this.isWishlistPage = t("body.rey-wishlist-page").length),
                        (this.$siteMain = t(
                            "body.rey-wishlist-page .rey-siteContent"
                        )),
                        (this.$emptyPage = t(
                            ".rey-wishlist-emptyPage",
                            this.$siteMain
                        )),
                        this.isWishlistPage &&
                            ((this.base = e.init()),
                            this.refreshData(),
                            this.getShareId(),
                            this.checkPageIds(),
                            this.cleanupPage(),
                            this.events());
                }),
                (this.events = function () {
                    t(document).on(
                        "reycore/woocommerce/wishlist/added_product reycore/woocommerce/wishlist/removed_product",
                        function (t, e, s) {
                            i.cleanupPage();
                        }
                    );
                }),
                (this.refreshData = function () {
                    (this.$wishlistWrapper = t(
                        ".rey-wishlistWrapper",
                        this.$siteMain
                    )),
                        (this.hideTitle =
                            this.$wishlistWrapper.hasClass("--hide-title"));
                }),
                (this.getShareId = function () {
                    this.shareId = !1;
                    var t = rey.util.getUrlVars();
                    Object.keys(t).length &&
                        "wid" in t &&
                        (this.shareId = t.wid);
                }),
                (this.checkPageIds = function () {
                    if (this.shareId) this.getWishlistPageContent();
                    else {
                        var e = i.base.getProducts();
                        e.length || this.$siteMain.removeClass("--loading"),
                            (this.$wishlistWrapper.length &&
                                t("li.product", this.$wishlistWrapper)
                                    .length === e.length) ||
                                this.getWishlistPageContent();
                    }
                }),
                (this.getWishlistPageContent = function () {
                    this.$siteMain.addClass("--loading");
                    var e = {
                        pid: i.$emptyPage.attr("data-id"),
                        "hide-title": this.hideTitle ? 1 : 0,
                    };
                    this.shareId && (e.wid = this.shareId),
                        rey.ajax.request("wishlist_get_page_content", {
                            data: e,
                            params: { cache: !1 },
                            formData: { wid: this.shareId },
                            cb: function (e) {
                                if (
                                    (i.$siteMain.removeClass("--loading"),
                                    e.data && i.$siteMain.length)
                                ) {
                                    var s = document.createElement("div");
                                    (s.innerHTML = e.data),
                                        i.$wishlistWrapper[0].append(s),
                                        i.refreshData(),
                                        i.cleanupPage();
                                    var o = s.querySelectorAll("li.product");
                                    o.length &&
                                        i.$wishlistWrapper.removeClass(
                                            "--empty"
                                        ),
                                        rey.hooks.doAction(
                                            "wishlist/loaded",
                                            s
                                        ),
                                        rey.hooks.doAction("product/loaded", o),
                                        t(document).on(
                                            "click",
                                            ".rey-wishlist-removeBtn, .wishlist-remove",
                                            function (e) {
                                                e.preventDefault();
                                                var s = t(this),
                                                    o = parseInt(
                                                        s.attr("data-id") ||
                                                            s.attr(
                                                                "data-pid"
                                                            ) ||
                                                            ""
                                                    );
                                                s.hasClass(
                                                    "elementor-element"
                                                ) &&
                                                    (o = parseInt(
                                                        s
                                                            .closest(
                                                                "[data-pid]"
                                                            )
                                                            .attr("data-pid") ||
                                                            ""
                                                    ));
                                                var r = i.base.getProducts(),
                                                    a = s.closest("li.product");
                                                if (!isNaN(o)) {
                                                    var n = r.indexOf(o);
                                                    -1 !== n &&
                                                        (i.base.removeProduct(
                                                            o,
                                                            n
                                                        ),
                                                        a
                                                            .attr("style", "")
                                                            .fadeOut(
                                                                300,
                                                                function () {
                                                                    t(
                                                                        this
                                                                    ).remove(),
                                                                        t(
                                                                            "li.product",
                                                                            i.$wishlistWrapper
                                                                        )
                                                                            .length ||
                                                                            i.$wishlistWrapper.addClass(
                                                                                "--empty"
                                                                            );
                                                                }
                                                            ));
                                                }
                                            }
                                        );
                                }
                            },
                        });
                }),
                (this.cleanupPage = function () {
                    this.isWishlistPage &&
                        ((this.$siteMain && !this.$siteMain.length) ||
                            t(
                                ".woocommerce-notices-wrapper, .rey-loopHeader",
                                this.$siteMain
                            ).remove());
                }),
                this.init();
        },
        s = function () {
            var i = this;
            (this.init = function () {
                (this.base = e.init()),
                    this.mobileCloneTop(),
                    this.updateCounters(),
                    this.checkBtnStatuses(),
                    this.events();
            }),
                (this.updateCounters = function () {
                    this.base.getProducts().length
                        ? this.base.updateCounters()
                        : void 0 !== reyParams.wishlist_update_counters_timeout
                        ? setTimeout(() => {
                              this.base.updateCounters();
                          }, parseInt(reyParams.wishlist_update_counters_timeout))
                        : rey.hooks.addAction("first_interaction", () => {
                              this.base.updateCounters();
                          });
                }),
                (this.events = function () {
                    t(document).on("click", ".rey-wishlistBtn", function (e) {
                        e.preventDefault();
                        var s = t(this),
                            o = parseInt(s.attr("data-id") || ""),
                            r = i.base.getProducts();
                        if (!isNaN(o)) {
                            if (
                                (s.hasClass("--supports-ajax") &&
                                    s.addClass("--doing"),
                                s.hasClass("--in-wishlist"))
                            ) {
                                var a = r.indexOf(o);
                                if (-1 !== a)
                                    return (
                                        i.base.removeProduct(o, a),
                                        void i.base.toggleButtonAttributes(s)
                                    );
                            }
                            i.base.showNotice(),
                                i.base.setProduct(o),
                                i.base.toggleButtonAttributes(s, !0);
                        }
                    }),
                        t(document).on(
                            "click",
                            ".rey-wishlistItem-remove",
                            function (e) {
                                e.preventDefault();
                                var s = t(this),
                                    o = parseInt(s.attr("data-id") || ""),
                                    r = i.base.getProducts();
                                if (!isNaN(o)) {
                                    var a = r.indexOf(o);
                                    if (-1 !== a) {
                                        i.base.removeProduct(o, a),
                                            s
                                                .closest(".rey-wishlistItem")
                                                .fadeOut(500, function () {
                                                    t(this).remove(),
                                                        rey.hooks.doAction(
                                                            "woocommerce/wishlist_account/remove",
                                                            this,
                                                            i
                                                        ),
                                                        t(document).trigger(
                                                            "reycore/woocommerce/wishlist_account/remove"
                                                        );
                                                });
                                        var n = this.getAttribute(
                                            "data-rey-tooltip-id"
                                        );
                                        if (n) {
                                            var h = document.querySelector(
                                                `.rey-tooltip-el[data-rey-tooltip-id="${n}"]`
                                            );
                                            h && h.remove();
                                        }
                                        i.base.toggleButtonAttributes(
                                            t(
                                                ".rey-wishlistBtn.--in-wishlist[data-id=" +
                                                    o +
                                                    "]"
                                            )
                                        );
                                    }
                                }
                            }
                        ),
                        t(document).on(
                            "reycore/woocommerce/wishlist/added_product reycore/woocommerce/wishlist/removed_product",
                            function (t, e, s) {
                                i.base.updateCounters(e),
                                    i.base.save(e),
                                    i.base.logged_in ||
                                        i.base.animateButtons(s);
                            }
                        ),
                        t(document).on(
                            "reycore/woocommerce/after_login",
                            function (t, e) {
                                i.getSavedProducts();
                            }
                        ),
                        t(document).on(
                            "reycore/woocommerce/wishlist/get_data",
                            function (t, e, s) {
                                i.refreshCookieAndCounters(s);
                            }
                        ),
                        rey.hooks.addAction(
                            "ajaxfilters/finished",
                            function (t) {
                                i.mobileCloneTop(t);
                            }
                        ),
                        rey.hooks.addAction("product/loaded", function (t) {
                            i.mobileCloneTop(t);
                        });
                }),
                (this.checkBtnStatuses = function () {
                    rey.hooks.addAction("first_interaction", () => {
                        var e = this.base.getProducts();
                        document
                            .querySelectorAll(".rey-wishlistBtn")
                            .forEach((i) => {
                                if (i.classList.contains("--in-wishlist")) {
                                    var s = parseInt(
                                        i.getAttribute("data-id") || 0
                                    );
                                    -1 === e.indexOf(s) &&
                                        this.base.toggleButtonAttributes(t(i));
                                }
                            });
                    });
                }),
                (this.mobileCloneTop = function (e) {
                    rey.vars.is_mobile &&
                        t(
                            ".rey-wishlistBtn.--show-mobile--top",
                            e || t(document)
                        ).each(function () {
                            var e = t(this),
                                i = e.closest("li.product"),
                                s = t(
                                    ".rey-productThumbnail .rey-thPos--top-right",
                                    i
                                );
                            s.length ||
                                (s = t(
                                    '<div class="rey-thPos rey-thPos--top-right"></div>'
                                ).appendTo(t(".rey-productThumbnail", i))),
                                e
                                    .clone()
                                    .removeClass("--show-mobile--top")
                                    .addClass("--show-mobile--top-show")
                                    .appendTo(s);
                        });
                }),
                (this.refreshCookieAndCounters = function (e) {
                    if ("undefined" != typeof Cookies) {
                        var s = e.map(function (t) {
                            return t.id;
                        });
                        i.base.setCookie(i.base.cookie_key, s.join("|")),
                            i.base.updateCounters(s),
                            t(".rey-wishlistBtn").removeClass(
                                "--supports-ajax --in-wishlist"
                            ),
                            t.each(s, function (e, s) {
                                var o = t(
                                    ".rey-wishlistBtn[data-id=" + s + "]"
                                );
                                o.addClass("--in-wishlist"),
                                    i.base.logged_in &&
                                        o.addClass("--supports-ajax");
                            });
                    }
                }),
                (this.getSavedProducts = function () {
                    (this.base.logged_in = !0),
                        rey.ajax.request("get_wishlist_data", {
                            params: { cache: !1 },
                            cb: (e) => {
                                var i = e.data;
                                i &&
                                    i.length &&
                                    "undefined" != typeof Cookies &&
                                    (this.refreshCookieAndCounters(i),
                                    t(document).trigger(
                                        "reycore/woocommerce/wishlist/get_saved_products",
                                        [i]
                                    ));
                            },
                        });
                }),
                this.init();
        };
    document.addEventListener("rey-DOMContentLoaded", function (e) {
        (t.reyWishlist = new s()), new i();
    });
    var o = function (e) {
        t.reyWishlist || (t.reyWishlist = new s());
        var i = t(e),
            o = t.reyWishlist.base.getProducts();
        o.length &&
            (t.reyWishlist.base.toggleButtonAttributes(
                t("li.product .rey-wishlistBtn", i)
            ),
            t.each(o, function (e, s) {
                var o = t(
                    'li.product .rey-wishlistBtn[data-id="' + s + '"]',
                    i
                );
                o.length && t.reyWishlist.base.toggleButtonAttributes(o, !0);
            }));
    };
    rey.hooks.addAction("elementor/element/lazy_loaded", function (t) {
        o(t);
    }),
        rey.hooks.addAction("elementor/content/lazy_loaded", function (t) {
            o(t);
        });
})(jQuery);
