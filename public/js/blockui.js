!(function () {
    var e = function (e) {
            var n = [],
                r = rey.validation.isJQuery(this);
            if (
                (r
                    ? jQuery(this).each(function (e, r) {
                          n.push(r);
                      })
                    : e && n.push(e),
                n.forEach((e) => {
                    e.classList.add("__is-blocked");
                    var n = document.createElement("span");
                    n.classList.add("rey-lineLoader", "--is-blk"), e.append(n);
                }),
                r)
            )
                return jQuery(n);
        },
        n = function (e) {
            var n = [],
                r = rey.validation.isJQuery(this);
            if (
                (r
                    ? jQuery(this).each(function (e, r) {
                          n.push(r);
                      })
                    : e && n.push(e),
                n.forEach((e) => {
                    e.classList.remove("__is-blocked"),
                        "undefined" != typeof rey &&
                            rey.dom.children(e, ".--is-blk").forEach((e) => {
                                e.remove();
                            });
                }),
                r)
            )
                return jQuery(n);
        };
    document.addEventListener("rey-DOMContentLoaded", function (r) {
        (rey.components.block = e), (rey.components.unblock = n);
    }),
        "undefined" !== jQuery &&
            ((jQuery.blockUI = function () {}),
            (jQuery.unblockUI = function () {}),
            (jQuery.blockUI.defaults = { overlayCSS: { cursor: "" } }),
            (jQuery.fn.block = e),
            (jQuery.fn.unblock = n));
})();
