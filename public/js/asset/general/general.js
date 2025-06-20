!(function (e) {
    "use strict";
    var t = function () {
        var t = this;
        return (
            (this.init = function () {
                this.genericHtml(),
                    this.canShip(),
                    this.passVisibility(),
                    this.overrideSelect2Defaults(),
                    this.modifyQuantityNumberField(),
                    this.cleanupNoMargin(),
                    this.events(),
                    rey.hooks.doAction("woocommerce/init", this);
            }),
            (this.events = function () {
                rey.hooks.addAction("product/loaded", (e) => {
                    e.length &&
                        (rey.hooks.doAction("refresh_general_html", e),
                        rey.hooks.doAction("animate_items", e),
                        e.forEach((e) => {
                            this.modifyQuantityLoop(e),
                                this.modifyQuantityNumberField(e);
                        }));
                }),
                    rey.jquery.addEventListener(
                        "rey/product/loaded",
                        function (e, t) {
                            t.length &&
                                rey.hooks.doAction(
                                    "product/loaded",
                                    rey.dom.normalizeCollection(t)
                                );
                        }
                    );
                var o = document.querySelector(
                    ".woocommerce-store-notice__dismiss-link"
                );
                o &&
                    o.addEventListener("click", function () {
                        window.dispatchEvent(new Event("rey/refresh_header"));
                    }),
                    e(document).on(
                        "click",
                        ".rey-toggleCoupon-btn",
                        function (t) {
                            t.preventDefault();
                            var o = e(this).next(".rey-toggleCoupon-content");
                            o.toggleClass("--visible"),
                                e('input[type="text"]', o).focus();
                        }
                    ),
                    e(document).on(
                        "change keydown",
                        "input.qty[max]",
                        function (t) {
                            var o = e(this),
                                n = parseFloat(o.attr("max") || 0);
                            n && parseFloat(o.val()) > n && o.val(n);
                        }
                    ),
                    rey.hooks.addAction(
                        "ajax_variation_popup/after_open",
                        function (e) {
                            t.modifyQuantityNumberField(e.data);
                        }
                    ),
                    rey.hooks.addAction("after_quickview", function (e) {
                        t.modifyQuantityNumberField(e);
                    }),
                    e(document.body).on(
                        "added_to_cart removed_from_cart wc_fragments_refreshed updated_wc_div wc_fragments_loaded",
                        function (e) {
                            t.modifyQuantityNumberField();
                        }
                    );
                var n = function () {
                    document.body.dispatchEvent(
                        new Event("jetpack-lazy-images-load")
                    );
                };
                rey.hooks.addAction("minicart/opened", n),
                    rey.hooks.addAction("minicart/tab", n),
                    rey.hooks.addAction("ajaxfilters/finished", function () {
                        n();
                    }),
                    rey.hooks.addAction("product/loaded", function (e) {
                        n();
                    }),
                    e(document).on(
                        "rey/woocommerce/product/rendered",
                        function (e) {
                            console.log(e.detail.node);
                        }
                    );
            }),
            (this.genericHtml = function () {}),
            (this.canShip = function () {
                var e = document.querySelector(".rey-canShip");
                if (e) {
                    var t;
                    rey.frontend.inView({
                        target: e,
                        once: !0,
                        cb: function () {
                            t ||
                                (rey.ajax.request("get_shipping_status", {
                                    ss: !0,
                                    data: {
                                        text: e.getAttribute("data-text"),
                                        no_text: e.getAttribute("data-no-text"),
                                    },
                                    params: { cache: !1 },
                                    cb: function (t) {
                                        t.data && (e.innerHTML = t.data);
                                    },
                                }),
                                (t = !0));
                        },
                    });
                }
            }),
            (this.passVisibility = function () {
                var t = e(
                    'input[type="password"].--suports-visibility, #customer_login .woocommerce-Input[type="password"]'
                );
                t.length &&
                    t.each(function (t, o) {
                        var n = e(o);
                        n.wrap('<span class="__passVisibility-wrapper" />'),
                            e(
                                '<span class="__passVisibility-toggle" data-lazy-hidden><svg aria-hidden="true" role="img" class="rey-icon rey-icon-eye" viewBox="0 0 462 346"><g fill="currentColor"><path d="M231,346 C361.436183,346 462,200.328259 462,173 C462,140.487458 358.577777,0 231,0 C93.5440287,0 -9.09494702e-13,147.592833 0,173 C-9.09494702e-13,202.891659 98.7537165,346 231,346 Z M56.5824289,160.219944 C66.7713209,143.972119 80.8380648,126.358481 96.9838655,110.409249 C137.421767,70.4636625 183.742247,47 231,47 C274.601338,47 320.969689,69.950087 362.198255,108.597753 C379.196924,124.532309 394.05286,142.102205 404.598894,158.109745 C408.097652,163.420414 410.921082,168.270183 412.937184,172.308999 C410.938053,176.17267 408.227675,180.777961 404.935744,185.802242 C394.313487,202.014365 379.591292,219.766541 362.844874,235.861815 C321.537134,275.563401 275.324602,299 231,299 C185.594631,299 139.232036,275.892241 98.4322564,236.780777 C81.8396065,220.874739 67.3726628,203.315324 57.0346413,187.230288 C53.7287772,182.08666 51.0347693,177.372655 49.078323,173.422728 C50.9746819,169.614712 53.5157275,165.110292 56.5824289,160.219944 Z" fill-rule="nonzero"></path> <circle id="Oval" cx="231" cy="173" r="51"></circle></g></svg></span>'
                            )
                                .insertAfter(n)
                                .on("click", function (e) {
                                    n.parent().toggleClass("--text"),
                                        n.attr("type", function (e, t) {
                                            return "password" == t
                                                ? "text"
                                                : "password";
                                        });
                                });
                    });
            }),
            (this.overrideSelect2Defaults = function () {
                reyParams &&
                    reyParams.js_params &&
                    reyParams.js_params.select2_overrides &&
                    (void 0 !== e.fn.select2 &&
                        e.fn.select2.defaults &&
                        e.fn.select2.defaults.hasOwnProperty("set") &&
                        (e.fn.select2.defaults.set(
                            "containerCssClass",
                            "select2-reyStyles"
                        ),
                        e.fn.select2.defaults.set(
                            "dropdownCssClass",
                            "select2-reyStyles"
                        )),
                    void 0 !== e.fn.selectWoo &&
                        e.fn.selectWoo.defaults &&
                        e.fn.selectWoo.defaults.hasOwnProperty("set") &&
                        (e.fn.selectWoo.defaults.set(
                            "containerCssClass",
                            "select2-reyStyles"
                        ),
                        e.fn.selectWoo.defaults.set(
                            "dropdownCssClass",
                            "select2-reyStyles"
                        )));
            }),
            (this.modifyQuantityNumberField = function (e) {
                (e = (rey.validation.isJQuery(e) ? e[0] : e) || document)
                    .querySelectorAll('.rey-qtyField input[type="number"]')
                    .forEach((e) => {
                        e.setAttribute("type", "text");
                    });
            }),
            (this.modifyQuantityLoop = function (e) {
                e.querySelectorAll(
                    ".rey-loopQty input.qty:not(.product-quantity input.qty)"
                ).forEach((e) => {
                    var t = parseFloat(e.getAttribute("min"));
                    t >= 0 && parseFloat(e.value) < t && (e.value = t);
                });
            }),
            (this.cleanupNoMargin = function () {
                e("ul.products.--no-margins").each(function () {
                    var t = e(this);
                    t.next("div[data-colspans]").length &&
                        t.removeClass("--no-margins");
                });
            }),
            this.init()
        );
    };
    document.addEventListener("rey-DOMContentLoaded", function (e) {
        rey.woocommerce = new t();
    });
})(jQuery);
