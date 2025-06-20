!(function (e) {
    "use strict";
    document.addEventListener("rey-DOMContentLoaded", function (t) {
        var o;
        (o = function (t) {
            (this.forms = [
                {
                    type: "login",
                    formScope: "form.js-rey-woocommerce-form-login",
                    replace: ".woocommerce-MyAccount-navigation-wrapper",
                },
                {
                    type: "forgot",
                    formScope: "form.js-rey-woocommerce-form-forgot",
                    replace: ".rey-pageContent > .woocommerce",
                },
                {
                    type: "register",
                    formScope: "form.js-rey-woocommerce-form-register",
                    replace: ".woocommerce-MyAccount-navigation-wrapper",
                },
            ]),
                (this.$notice = []),
                (this.init = function () {
                    var o = this;
                    (this.$scope = e(t)),
                        e.each(this.forms, function (e, t) {
                            o.makeForm(t);
                        }),
                        this.events();
                }),
                (this.events = function () {
                    var t = this;
                    e(".rey-accountForms-links .btn", this.$scope).on(
                        "click",
                        function (o) {
                            var r = e(this).attr("data-location") || "";
                            r && (o.preventDefault(), t.switchForm(r));
                        }
                    ),
                        e(".rey-accountPanel").on(
                            "click",
                            "a.showlogin",
                            function (e) {
                                e.preventDefault(),
                                    t.switchForm("rey-loginForm");
                            }
                        ),
                        rey.hooks.addAction("account_panel/onOpen", (e) => {
                            e.panel &&
                                reyParams.core.js_params.refresh_forms_nonces &&
                                rey.ajax.request("account_forms_gn", {
                                    options: { method: "GET" },
                                    cb: function (t) {
                                        t &&
                                            "object" == typeof t.data &&
                                            Object.keys(t.data).forEach((o) => {
                                                var r = e.panel.querySelector(
                                                    `input[name="${o}"]`
                                                );
                                                r && (r.value = t.data[o]);
                                            });
                                    },
                                });
                        });
                }),
                (this.getFormData = function (t) {
                    var o = {};
                    return (
                        e.map(t, function (e, t) {
                            o[e.name] = e.value;
                        }),
                        o
                    );
                }),
                (this.makeForm = function (t) {
                    var o = this,
                        r = e(t.formScope, this.$scope);
                    this.$scope.is("[data-no-ajax]") ||
                        ((this.$notice[t.type] = e(
                            ".rey-accountForms-notice",
                            r
                        )),
                        r.on("submit", function (a) {
                            a.preventDefault(),
                                o.$scope.addClass("--loading"),
                                o.noticeHandlerRemove(t.type);
                            var n = o.getFormData(r.serializeArray()) || {};
                            "login" === t.type
                                ? (n.login = e('button[name="login"]', r).val())
                                : "register" === t.type &&
                                  (n.register = e(
                                      'button[name="register"]',
                                      r
                                  ).val()),
                                rey.ajax.request("account_forms", {
                                    params: { cache: !1 },
                                    data: { action_type: t.type },
                                    formData: n,
                                    cb: function (r) {
                                        if (r)
                                            if (
                                                (o.$scope.removeClass(
                                                    "--loading"
                                                ),
                                                !r || r.success)
                                            ) {
                                                if (void 0 !== r.data)
                                                    if (r.data.notices)
                                                        o.noticeHandlerAdd(
                                                            r.data.notices,
                                                            t.type
                                                        );
                                                    else {
                                                        if ("login" === t.type)
                                                            e(document).trigger(
                                                                "reycore/woocommerce/after_login",
                                                                [r]
                                                            ),
                                                                e(
                                                                    "body"
                                                                ).addClass(
                                                                    "logged-in"
                                                                );
                                                        else if (
                                                            "register" ===
                                                            t.type
                                                        )
                                                            e(document).trigger(
                                                                "reycore/woocommerce/after_register",
                                                                [r]
                                                            );
                                                        else if (
                                                            "forgot" ===
                                                                t.type &&
                                                            !r.data.notices
                                                        )
                                                            return void (r.data
                                                                .html
                                                                ? (e(
                                                                      ".rey-accountForms .woocommerce-form-forgot-formData"
                                                                  ).remove(),
                                                                  o.noticeHandlerAdd(
                                                                      r.data
                                                                          .html,
                                                                      t.type
                                                                  ))
                                                                : o.switchForm(
                                                                      "rey-loginForm"
                                                                  ));
                                                        var a =
                                                                o.$scope.attr(
                                                                    "data-redirect-type"
                                                                ) ||
                                                                "load_menu",
                                                            n =
                                                                o.$scope.attr(
                                                                    "data-redirect-url"
                                                                );
                                                        if ("refresh" === a)
                                                            n ||
                                                                window.location.reload();
                                                        else if (
                                                            "load_menu" === a &&
                                                            "" != r.data.html
                                                        ) {
                                                            e(
                                                                ".rey-accountForms"
                                                            )
                                                                .wrap(
                                                                    '<div class="rey-accountForms-response --' +
                                                                        t.type +
                                                                        '"></div>'
                                                                )
                                                                .replaceWith(
                                                                    e(
                                                                        r.data
                                                                            .html
                                                                    )
                                                                );
                                                            var c = e(
                                                                ".rey-accountForms-response .rey-accountForms-notice.--vanish"
                                                            );
                                                            c.length &&
                                                                setTimeout(
                                                                    function () {
                                                                        c.fadeOut(
                                                                            function () {
                                                                                e(
                                                                                    this
                                                                                ).remove();
                                                                            }
                                                                        );
                                                                    },
                                                                    5e3
                                                                );
                                                        } else
                                                            window.location.href =
                                                                n;
                                                    }
                                            } else
                                                r.data &&
                                                    o.noticeHandlerAdd(
                                                        r.data,
                                                        t.type
                                                    );
                                    },
                                });
                        }));
                }),
                (this.noticeHandlerAdd = function (e, t) {
                    this.$notice[t] &&
                        this.$notice[t].length &&
                        this.$notice[t].html(e).addClass("--filled");
                }),
                (this.noticeHandlerRemove = function (e) {
                    this.$notice[e] &&
                        this.$notice[e].length &&
                        this.$notice[e].html("").removeClass("--filled");
                }),
                (this.switchForm = function (t) {
                    this.$scope.addClass("--loading"),
                        rey.hooks.doAction("account_forms/switch", t, this),
                        setTimeout(() => {
                            this.$scope.removeClass("--loading"),
                                this.$scope
                                    .find(".--active")
                                    .removeClass("--active"),
                                e("." + t, this.$scope).addClass("--active");
                        }, 1e3);
                }),
                (this.loadStrengthMeter = function () {
                    var e, t;
                    ((t = document.createElement("script")).src =
                        reyParams.core.pass_strength_src),
                        (t.type = "text/javascript"),
                        (t.async = !0),
                        (e = document.getElementsByTagName("script")[0]) &&
                            e.parentNode.insertBefore(t, e);
                }),
                this.init();
        }),
            e(".rey-accountForms").each(function (e, t) {
                new o(t);
            });
    });
})(jQuery);
