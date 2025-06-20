!(function (t) {
    "use strict";
    var i = function (i) {
        var n = this;
        (this.init = function () {
            (this.$form = t(i)),
                (this.id = this.$form.attr("data-id")),
                (this.idAttr = this.$form.attr("id")),
                (this.$response = t(".mc4wp-response", this.$form)),
                (this.submitting = !1),
                this.events();
        }),
            (this.events = function () {
                this.$form.on("submit", function (t) {
                    t.preventDefault(),
                        n.submitting ||
                            ((n.submitting = !0),
                            n.$form.css({
                                opacity: 0.5,
                                "pointer-events": "none",
                            }),
                            n.$response.empty(),
                            n.submitForm());
                });
            }),
            (this.submitForm = function () {
                var i = {};
                t.each(this.$form.serializeArray(), function (t, n) {
                    i[n.name] = n.value;
                }),
                    t.ajax({
                        type: "POST",
                        url: window.location.href,
                        data: i,
                        dataType: "html",
                        success: function (i) {
                            (n.submitting = !1),
                                n.$form.css({
                                    opacity: 1,
                                    "pointer-events": "auto",
                                });
                            var s = t(i),
                                e = t(
                                    '.mc4wp-form[data-id="' +
                                        n.id +
                                        '"][id="' +
                                        n.idAttr +
                                        '"] .mc4wp-response',
                                    s
                                );
                            e.length && n.$response.html(e.html());
                        },
                    });
            }),
            this.init();
    };
    document.addEventListener("rey-DOMContentLoaded", function (n) {
        t(".mc4wp-form").each(function () {
            new i(this);
        });
    });
})(jQuery);
