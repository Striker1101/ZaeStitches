!(function () {
    "use strict";
    var t = function (t) {
        (this._is_init = !1),
            (this.status = "open"),
            (this.LSkey = "rey_cart_extra_products"),
            (this.init = function () {
                if (
                    !rey.vars.is_mobile &&
                    wc_cart_fragments_params &&
                    t.cartPanel &&
                    ((this.wrapper = document.getElementById(
                        "rey-cart-extra-products"
                    )),
                    this.wrapper &&
                        ((this.toggleBtn =
                            this.wrapper.querySelector(".__toggle")),
                        (this.contentBlock =
                            this.wrapper.querySelector(".__content")),
                        (this._html = rey.template("reyCartExtraProducts")),
                        this._html))
                ) {
                    var e = rey.util.ls.get(this.LSkey);
                    null !== e
                        ? (this.wrapper.setAttribute("data-status", e),
                          (this.status = e))
                        : (this.status =
                              this.wrapper.getAttribute("data-status")),
                        this.events();
                }
            }),
            (this.events = function () {
                rey.hooks.addAction("minicart/opened", (t) => {
                    this.run();
                }),
                    this.toggleBtn.addEventListener("click", (t) => {
                        t.preventDefault(), this.toggleStatus();
                    }),
                    t.cartPanel.addEventListener(
                        "reycore/minicart-extra-products/close",
                        (t) => {
                            this.toggleStatus("closed", !0);
                        }
                    );
            }),
            (this.toggleStatus = function (t, e) {
                (this.status =
                    t || ("open" === this.status ? "closed" : "open")),
                    e ||
                        rey.util.ls.set(
                            this.LSkey,
                            this.status,
                            rey.util.expiration.week
                        ),
                    this.wrapper.setAttribute("data-status", this.status);
            }),
            (this.run = function () {
                this._is_init ||
                    rey.ajax.request("cart_extra_products", {
                        cb: (t) => {
                            (t && t.success) || this.wrapper.remove(),
                                t.data.length || this.toggleStatus("closed"),
                                (this.contentBlock.innerHTML = this._html({
                                    items: t.data,
                                })),
                                "undefined" != typeof SimpleScrollbar
                                    ? SimpleScrollbar.initEl(this.contentBlock)
                                    : (this.contentBlock.style.overflow =
                                          "auto"),
                                (this._is_init = !0);
                        },
                    });
            }),
            this.init();
    };
    rey.hooks.addAction("minicart/init", function (e) {
        new t(e);
    });
})();
