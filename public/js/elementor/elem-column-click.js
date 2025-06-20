!(function () {
    "use strict";
    var e = function (e) {
        var t = e[0];
        t.hasAttribute("data-column-link") &&
            (rey.vars.elementor_edit_mode ||
                (t &&
                    (t.querySelectorAll("a[href]").forEach((e) => {
                        e.removeAttribute("href");
                    }),
                    t.addEventListener("click", function (e) {
                        var o = JSON.parse(
                            t.getAttribute("data-column-link") || "{}"
                        );
                        if (o.url)
                            if (
                                (e.preventDefault(),
                                o.url.match("^#elementor-action"))
                            ) {
                                var r = o.url;
                                ((r = decodeURIComponent(r)).includes(
                                    "elementor-action:action=popup:open"
                                ) ||
                                    r.includes(
                                        "elementor-action:action=lightbox"
                                    )) &&
                                    (t.querySelector("#rey-colLink-dynamic") ||
                                        rey.dom
                                            .createEl("a", {
                                                class: "--hidden",
                                                attributes: {
                                                    id: "rey-colLink-dynamic",
                                                    href: o.url,
                                                },
                                                appendTo: t,
                                            })
                                            .click());
                            } else if (o.url.match("^#") && "#" !== o.url) {
                                r = o.url;
                                var n = document.querySelector(r);
                                n &&
                                    (window.scrollTo({
                                        top: rey.dom.offset(n).top - 15,
                                        behavior: "smooth",
                                    }),
                                    (window.location.hash = r));
                            } else window.open(o.url, o.target);
                    }))));
    };
    rey.hooks.addAction("elementor/init", function (t) {
        t.registerElement({ name: "column", cb: e });
    });
})();
